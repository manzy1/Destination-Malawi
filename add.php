<?php
include 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Destination = $_POST['Destination'];
    $Reference = $_POST['Reference'];
    $Country = $_POST['Country'];
    $Notes = $_POST['Notes'];

    $stmt = $conn->prepare("INSERT INTO booking (Name, Email, Number, Destination, Reference, Country, Notes)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $Name, $Email, $Number, $Destination, $Reference, $Country, $Notes);
    $stmt->execute();
    header("Location: admin-panel.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <h3 class="mb-4">➕ Add New Booking</h3>
        <form method="POST">
            <div class="mb-3"><label>Name</label><input type="text" name="Name" class="form-control" required></div>
            <div class="mb-3"><label>Email</label><input type="email" name="Email" class="form-control" required></div>
            <div class="mb-3"><label>Number</label><input type="text" name="Number" class="form-control"></div>
            <div class="mb-3"><label>Destination</label><input type="text" name="Destination" class="form-control"></div>
            <div class="mb-3"><label>Reference</label><input type="text" name="Reference" class="form-control"></div>
            <div class="mb-3"><label>Country</label><input type="text" name="Country" class="form-control"></div>
            <div class="mb-3"><label>Notes</label><textarea name="Notes" class="form-control"></textarea></div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="admin-panel.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>