<?php
session_start();

if (isset($_GET["id"])) {

    require_once 'dbh.inc.php';

    $landID = $_GET["id"];

    // Delete the land entry from the database
    $sql = "DELETE FROM lands WHERE landID = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../landDetails.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "i", $landID);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../landTable.php?error=none");
    exit();
} else {
    // Redirect to the login page or display an error message if the delete button is not clicked
    header("Location: ../login.php?error=deletebuttonnotclicked");
    exit();
}
?>
