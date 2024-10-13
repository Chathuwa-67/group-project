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
if (isset($_GET['reg_id'])) {
    $result_id = $_GET['reg_id']; // Use the correct identifier column here

    // Prepare the SQL statement to prevent SQL injection
    $sql = "DELETE FROM results WHERE reg_id = ?"; // Change 'id' to the actual identifier column name
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $result_id);

    if ($stmt->execute()) {
        // Redirect back to the manage results page after deletion
        header("Location: manage-results.php"); // Redirect to the same page
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
    <title>Manage Results</title>
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
        <h1 style="text-align:center;">Manage Results</h1>
        <h3 style="margin: 20px; margin-bottom: 50px;">* View Students Result</h3>
        <table id="tableID" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Roll No.</th>
                    <th>Branch</th>
                    <th>Semester</th>
                    <th>Reg Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead> 
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Roll No.</th>
                    <th>Branch</th>
                    <th>Semester</th>
                    <th>Reg Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
<?php
$sql = "SELECT DISTINCT student.Name, student.Roll_No, student.Reg_date, student.status, student.reg_id, branch.branch, semester.semester 
        FROM results 
        JOIN student ON results.roll_no = student.Roll_No 
        JOIN branch ON branch.branch_id = results.branch_id 
        JOIN semester ON semester.sem_id = results.sem_id";
$result = mysqli_query($conn, $sql);
$c = 1;
$num = mysqli_num_rows($result);
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $c; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Roll_No']; ?></td>
            <td><?php echo $row['branch']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['Reg_date']; ?></td>
            <td><?php echo ($row['status'] == 1) ? "Active" : "Blocked"; ?></td>
            <td>
                <a href="edit-result.php?stid=<?php echo $row['reg_id']; ?>">
                    <i class="fa fa-edit" title="Edit Record"></i>
                </a>
                <a href="manage-results.php?stid=<?php echo $row['reg_id']; ?>" onclick="return confirm('Are you sure you want to delete this result?');">
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
