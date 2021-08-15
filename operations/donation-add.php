<?php

if (isset($_POST['submit'])) {
    require '../includes/database.php';
    $dorname = $_POST['dorname'];
    $dorcnumber = $_POST['dorcnumber'];
    $doraddress = $_POST['doraddress'];
    $amount = $_POST['doramou'];

    // echo $dorname . $dorcnumber . $doraddress . $amount;

    if (empty($dorname) || empty($dorcnumber) || empty($doraddress) || empty($amount)) {
        header("Location: ../index.php?add_donation&error=empty_fields");
        exit();
    } else {
        $sql = "INSERT INTO donar (donar_name, c_number, address, amount) VALUES (?, ?, ?, ?)";
        $statement = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($statement, $sql)) {
            header("Location: ../index.php?add_donation&error=sql_error");
            exit();
        } else {
            mysqli_stmt_bind_param($statement, 'sisi', $dorname, $dorcnumber, $doraddress, $amount);
            mysqli_stmt_execute($statement);
            header("Location: ../index.php?view_donation");
            exit();
        }
    }

    // mysqli_stmt_close($statement);
    // mysqli_close($conn);
} else {
    header("Location: ../index.php?view_donation&error=restricted");
    exit();
}
