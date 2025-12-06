<?php
session_start();
include 'dbconnect.php';

// Protect admin panel
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Delete record
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM booking WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: admin-panel.php");
    exit;
}

// --- SEARCH & PAGINATION LOGIC ---
$limit = 10; // records per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

$search = isset($_GET['search']) ? trim($_GET['search']) : "";
$where = "";

if ($search) {
    $search = "%$search%";
    $where = "WHERE Name LIKE ? OR Email LIKE ? OR Destination LIKE ?";
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM booking $where");
    $stmt->bind_param("sss", $search, $search, $search);
} else {
    $stmt = $conn->prepare("SELECT COUNT(*) as total FROM booking");
}

$stmt->execute();
$total_result = $stmt->get_result()->fetch_assoc();
$total = $total_result['total'];
$stmt->close();

$pages = ceil($total / $limit);

// Fetch paginated data
if ($search) {
    $query = "SELECT * FROM booking $where ORDER BY Date DESC LIMIT ?, ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssii", $search, $search, $search, $start, $limit);
} else {
    $stmt = $conn->prepare("SELECT * FROM booking ORDER BY Date DESC LIMIT ?, ?");
    $stmt->bind_param("ii", $start, $limit);
}

$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Destination Malawi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Adminstrator Panel</h3>
    <div class="btn-group">
        <a href="index.php" class="btn btn-secondary btn-sm">🏠 Back to Home</a>
        <a href="add.php" class="btn btn-success btn-sm">➕ Add</a>
        <a href="logout.php" class="btn btn-danger btn-sm">🚪 Logout</a>
    </div>
</div>

    <!-- Search Form -->
    <form method="GET" class="d-flex mb-3">
        <input type="text" name="search" class="form-control me-2" placeholder="Search name, email, destination..." 
               value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
        <button type="submit" class="btn btn-primary"> Search</button>
        <?php if ($search): ?>
            <a href="admin-panel.php" class="btn btn-secondary ms-2">Reset</a>
        <?php endif; ?>
    </form>

    <!-- Table -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Number</th>
                <th>Destination</th><th>Reference</th><th>Country</th><th>Date</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= htmlspecialchars($row['Name']) ?></td>
                <td><?= htmlspecialchars($row['Email']) ?></td>
                <td><?= htmlspecialchars($row['Number']) ?></td>
                <td><?= htmlspecialchars($row['Destination']) ?></td>
                <td><?= htmlspecialchars($row['Reference']) ?></td>
                <td><?= htmlspecialchars($row['Country']) ?></td>
                <td><?= htmlspecialchars($row['Date']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['ID'] ?>" class="btn btn-sm btn-primary">✏️</a>
                    <a href="?delete=<?= $row['ID'] ?>" class="btn btn-sm btn-danger"
                       onclick="return confirm('Delete this record?')">🗑️</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <nav>
        <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= $pages; $i++): ?>
                <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                    <a class="page-link" href="?page=<?= $i ?><?= $search ? '&search=' . urlencode($_GET['search']) : '' ?>">
                        <?= $i ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>
</body>
</html>
<?php $conn->close(); ?>