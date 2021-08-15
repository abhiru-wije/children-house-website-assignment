<?php

if (isset($_POST['submit'])) {
    require '../includes/database.php';
    $stffiname = $_POST['stafname'];
    $staflaname = $_POST['stalname'];
    $stafininame = $_POST['stainame'];
    $stafbod = $_POST['stabod'];
    $stafnic = $_POST['stanic'];
    $stafgen = $_POST['stagender'];
    $stafcnumber = $_POST['stacnum'];
    $stafaddress = $_POST['staadd'];
    $stafemail = $_POST['staemil'];
    $stafpost = $_POST['stapost'];

    $file = $_FILES['staimg'];

    $fileName = $_FILES['staimg']['name'];
    $fileTmpName = $_FILES['staimg']['tmp_name'];
    $fileSize = $_FILES['staimg']['size'];
    $fileError = $_FILES['staimg']['error'];
    $fileType = $_FILES['staimg']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');


    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 3000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../photo_uploads/staff/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);


                if (empty($stffiname) || empty($staflaname) || empty($stafininame) || empty($stafbod) || empty($stafnic) || empty($stafgen) || empty($stafcnumber) || empty($stafaddress) || empty($stafemail) || empty($stafpost) || empty($fileNameNew)) {
                    header("Location: ../index.php?add_staff&error=empty_fields");
                    exit();
                } else {
                    $sql = "INSERT INTO staff (first_name,last_name,initial_name,bod,nic,gender,c_number,address,email,post,image) VALUES (?, ?, ?, ?,?,?,?,?,?,?,?)";
                    $statement = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($statement, $sql)) {
                        header("Location: ../index.php?add_staff&error=sql_error");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($statement, 'ssssisissis', $stffiname, $staflaname, $stafininame, $stafbod, $stafnic, $stafgen, $stafcnumber, $stafaddress, $stafemail, $stafpost, $fileNameNew);
                        mysqli_stmt_execute($statement);
                        header("Location: ../index.php?view_staff");
                        exit();
                    }
                }
            } else {
                echo "File is too large.";
            }
        } else {
            echo "There was an error.";
        }
    } else {
        echo "You cannot upload files of " . $fileActualExt . " type";
    }

    // echo $dorname . $dorcnumber . $doraddress . $amount;


    // mysqli_stmt_close($statement);
    // mysqli_close($conn);
} else {
    header("Location: ../index.php?view_staff&error=restricted");
    exit();
}
