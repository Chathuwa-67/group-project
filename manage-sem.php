<?php
session_start();
$showAlert = false;
$showError = false;
include "includes/connection.php"; // Include your database connection

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: index.php");
    exit;
}

// Handle delete request
if (isset($_GET['semid'])) {
    $semester_id = $_GET['semid']; // Use the correct identifier column here

    // Prepare the SQL statement to prevent SQL injection
    $sql = "DELETE FROM semester WHERE sem_id = ?"; // Change 'sem_id' to the actual identifier column name
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $semester_id);

    if ($stmt->execute()) {
        // Redirect back to the manage semester page after deletion
        header("Location: manage-semester.php"); // Redirect to the same page
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Semester</title>
    <link rel="stylesheet" type="text/css" href="css/fp1.css?version=51">
    
    <!-- Datatable plugin CSS file -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

    <!-- jQuery library file -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Datatable plugin JS library -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="m2">
        <h1 style="text-align:center;">Manage Semester</h1>
        <h3 style="margin: 20px; margin-bottom: 50px;">* View Semesters</h3>
        <table id="tableID" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 60%">Semester</th>
                    <th>Action</th>
                </tr>
            </thead> 
            <tfoot>
                <tr>
                    <th>#</th>
                    <th style="width: 60%">Semester</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
<?php
$sql = "SELECT semester.sem_id, semester.semester FROM semester";
$result = mysqli_query($conn, $sql);
$c = 1;
$num = mysqli_num_rows($result);
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $c; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td>
                <a href="edit-semester.php?semid=<?php echo $row['sem_id']; ?>">
                    <i class="fa fa-edit" title="Edit Record"></i>
                </a>
                <a href="manage-semester.php?semid=<?php echo $row['sem_id']; ?>" onclick="return confirm('Are you sure you want to delete this semester?');">
                    <i class="fa fa-trash" title="Delete Record"></i>
                </a>
            </td>
        </tr>
        <?php
        $c++;
    }
}
?>
            </tbody>
        </table>
        <script>
            /* Initialization of datatable */
            $(document).ready(function() {
                $('#tableID').DataTable({});
            });
        </script>
    </div>
</body>
</html>
