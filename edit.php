<?php
include 'dbconnect.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM booking WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Destination = $_POST['Destination'];
    $Reference = $_POST['Reference'];
    $Country = $_POST['Country'];
    $Notes = $_POST['Notes'];

    $stmt = $conn->prepare("UPDATE booking SET Name=?, Email=?, Number=?, Destination=?, Reference=?, Country=?, Notes=? WHERE id=?");
    $stmt->bind_param("sssssssi", $Name, $Email, $Number, $Destination, $Reference, $Country, $Notes, $id);
    $stmt->execute();
    header("Location: admin-panel.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <h3 class="mb-4">✏️ Edit Booking</h3>
        <form method="POST">
            <div class="mb-3"><label>Name</label><input type="text" name="Name" value="<?= $row['Name'] ?>" class="form-control" required></div>
            <div class="mb-3"><label>Email</label><input type="email" name="Email" value="<?= $row['Email'] ?>" class="form-control" required></div>
            <div class="mb-3"><label>Number</label><input type="text" name="Number" value="<?= $row['Number'] ?>" class="form-control"></div>
            <div class="mb-3"><label>Destination</label><input type="text" name="Destination" value="<?= $row['Destination'] ?>" class="form-control"></div>
            <div class="mb-3"><label>Reference</label><input type="text" name="Reference" value="<?= $row['Reference'] ?>" class="form-control"></div>
            <div class="mb-3"><label>Country</label><input type="text" name="Country" value="<?= $row['Country'] ?>" class="form-control"></div>
            <div class="mb-3"><label>Notes</label><textarea name="Notes" class="form-control"><?= $row['Notes'] ?></textarea></div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="admin-panel.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>