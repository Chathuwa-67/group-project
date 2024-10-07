<?php
session_start();
include('includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/fp1.css?version=51">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Result Management System</span>
    </nav>
    <div class="container mt-4" id="d1">
<?php
$stid = $_POST['stid'];
$branch_id = $_POST['branch_id'];
$sem_id = $_POST['sem_id'];
$sql = "SELECT student.Name, student.Roll_No, student.Reg_date, student.reg_id, branch.branch, semester.semester 
        FROM student 
        JOIN branch ON student.branch_id = branch.branch_id 
        JOIN semester ON student.sem_id = semester.sem_id 
        WHERE student.Roll_No = $stid AND student.branch_id = $branch_id AND student.sem_id = $sem_id";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
$c = 1;
if ($num > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <p><b>Student Name : </b><?php echo $row['Name']; ?></p>
        <p><b>Student Roll No. : </b><?php echo $row['Roll_No']; ?></p>
        <p><b>Student Branch : </b><?php echo $row['branch']; ?></p>
        <p><b>Semester : </b><?php echo $row['semester']; ?></p>

<?php
    }
    ?>
    <table class="table table-striped mt-4">
        <thead class="thead-dark">
            <tr>
                <th scope="col" style="width: 8%;">#</th>
                <th scope="col" style="width: 60%;">Subject</th>
                <th scope="col">Marks</th>
            </tr>
        </thead>
        <tbody>
<?php
    $sql = "SELECT student.Name, student.Roll_No, student.branch_id, student.sem_id, results.marks, results.subj_id, subjects.subj_name 
            FROM results 
            JOIN student ON student.Roll_No = results.roll_no 
            JOIN subjects ON subjects.subj_id = results.subj_id 
            WHERE student.Roll_No = $stid AND student.branch_id = $branch_id AND student.sem_id = $sem_id AND student.status = 1 AND subjects.status = 1";
    $result = mysqli_query($conn, $sql);
    $num1 = mysqli_num_rows($result);
    $cnt = 1;
    $totalc = 0; // Initialize the total marks variable
    if ($num1 > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
?>
            <tr>
                <td scope="row"><?php echo $cnt; ?></td>
                <td><?php echo $row['subj_name']; ?></td>
                <td><?php echo $total = $row['marks']; ?></td>
            </tr>
<?php
            $totalc += $total;
            $cnt++;
        }
?>
        <tr>
            <th scope="row" colspan="2">Total Marks : </th>
            <td><b><?php echo $totalc; ?></b> out of <b><?php echo ($outof = ($cnt - 1) * 100); ?></b></td>
        </tr>
        <tr>
            <th scope="row" colspan="2">Percentage : </th>
            <td><b><?php echo ($totalc * (100) / $outof); ?>%</b></td>
        </tr>
        <tr>
            <th scope="row" colspan="2">Print Result : </th>
            <td><button class="btn btn-primary" onclick="printDiv()">Print</button></td>
        </tr>
<?php
    } else { ?>
        <div class="alert alert-warning mt-4" role="alert">
            <strong>Notice!</strong> Your result is not declared yet.
        </div>
<?php }
} else {
?>
    <div class="alert alert-danger mt-4" role="alert">
        <strong>Oh snap!</strong> <?php echo htmlentities("Invalid Roll Id"); ?>
    </div>
<?php
}
?>
        </tbody>
    </table>

    </div>
    <div class="container mt-4">
        <a href="index.php" class="btn btn-secondary">Back to Home</a>
    </div>

    <!-- Add Print Function -->
    <script>
        function printDiv() {
            let content = document.getElementById("d1").innerHTML;
            let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');
            mywindow.document.write(`<html><head><title>Print Result</title>`);
            mywindow.document.write('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">');
            mywindow.document.write('</head><body>');
            mywindow.document.write(content);
            mywindow.document.write('</body></html>');
            mywindow.document.close(); // Close the document for printing

            // Add a slight delay to ensure the content loads before triggering print
            setTimeout(function() {
                mywindow.focus();
                mywindow.print(); // Trigger the print
                mywindow.close(); // Close the print window after printing
            }, 500); // Delay the print by 500 milliseconds
        }
    </script>

    <!-- Include Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
