<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Including Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Including Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Linking to external CSS for custom styling -->
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <!-- Navigation bar starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient">
        <!-- Dashboard link -->
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        
        <!-- Button for toggling navbar on mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <!-- Dropdown: Students -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="studentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Students <i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="studentsDropdown">
                        <a class="dropdown-item" href="add-student.php">Add Students</a>
                        <a class="dropdown-item" href="manage-students.php">Manage Students</a>
                    </div>
                </li>
                
                <!-- Dropdown: Branch -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="branchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Branch <i class="fa fa-code-fork"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="branchDropdown">
                        <a class="dropdown-item" href="add-branch.php">Add Branch</a>
                        <a class="dropdown-item" href="manage-branch.php">Manage Branch</a>
                    </div>
                </li>

                <!-- Dropdown: Semester -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="semesterDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Semester <i class="fa fa-calendar"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="semesterDropdown">
                        <a class="dropdown-item" href="add-semester.php">Add Semester</a>
                        <a class="dropdown-item" href="manage-sem.php">Manage Semester</a>
                    </div>
                </li>

                <!-- Dropdown: Subjects -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="subjectsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subjects <i class="fa fa-book"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="subjectsDropdown">
                        <a class="dropdown-item" href="add-subjects.php">Add Subjects</a>
                        <a class="dropdown-item" href="manage-subjects.php">Manage Subjects</a>
                        <a class="dropdown-item" href="add-subjcombo.php">Add Subject Combination</a>
                        <a class="dropdown-item" href="manage-subjcomb.php">Manage Subject Combination</a>
                    </div>
                </li>

                <!-- Dropdown: Results -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="resultsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Results <i class="fa fa-graduation-cap"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="resultsDropdown">
                        <a class="dropdown-item" href="add-results.php">Add Result</a>
                        <a class="dropdown-item" href="manage-results.php">Manage Results</a>
                    </div>
                </li>
            </ul>
            
            <!-- Admin actions on the right -->
            <ul class="navbar-nav">
                <!-- Admin Change Password -->
                <li class="nav-item">
                    <a class="nav-link" href="change-password.php">
                        <i class="fa fa-lock"></i> Change Password
                    </a>
                </li>
                <!-- Logout -->
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End of navigation bar -->

    <!-- Including Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
