<?php

if (isset($_POST['submit'])) {
    require '../includes/database.php';
    $labininame = $_POST['labiname'];
    $labfuname = $_POST['labfuname'];
    $labfiname = $_POST['labfiname'];
    $labbod = $_POST['labbod'];
    $labgen = $_POST['labgender'];
    $labcnumber = $_POST['labcnum'];
    $labaddress = $_POST['labadd'];
    $labpost = $_POST['labpost'];


    // echo $dorname . $dorcnumber . $doraddress . $amount;

    if (empty($labininame) || empty($labfuname) || empty($labfiname) || empty($labbod) || empty($labgen) || empty($labcnumber) || empty($labaddress) || empty($labpost)) {
        header("Location: ../index.php?add_labours&error=empty_fields");
        exit();
    } else {
        $sql = "INSERT INTO labor (initial_name, full_name, first_name, bod, gender, c_number, address, post) VALUES (?, ?, ?, ?,?,?,?,?)";
        $statement = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location: ../index.php?add_labours&error=sql_error");
            exit();
        } else {
            mysqli_stmt_bind_param($statement, 'sssssiss', $labininame, $labfuname, $labfiname, $labbod, $labgen, $labcnumber, $labaddress, $labpost);
            mysqli_stmt_execute($statement);
            header("Location: ../index.php?view_labours");
            exit();
        }
    }

    // mysqli_stmt_close($statement);
    // mysqli_close($conn);
} else {
    header("Location: ../index.php?view_labours&error=restricted");
    exit();
}
