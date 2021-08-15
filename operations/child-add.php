<?php

if (isset($_POST['submit'])) {
    require '../includes/database.php';
    $chiiname = $_POST['chiname'];
    $chifuaname = $_POST['chfuname'];
    $chibod = $_POST['chbod'];
    $chaigen = $_POST['chgender'];

    $file = $_FILES['chimage'];

    $fileName = $_FILES['chimage']['name'];
    $fileTmpName = $_FILES['chimage']['tmp_name'];
    $fileSize = $_FILES['chimage']['size'];
    $fileError = $_FILES['chimage']['error'];
    $fileType = $_FILES['chimage']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');


    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 3000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = '../photo_uploads/child/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);


                if (empty($chiiname) || empty($chifuaname) || empty($chibod) || empty($chaigen) || empty($fileNameNew)) {
                    header("Location: ../index.php?add_child&error=empty_fields");
                    exit();
                } else {
                    $sql = "INSERT INTO child (initial_name, full_name,bod,gender,image) VALUES (?, ?, ?, ?,?)";
                    $statement = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($statement, $sql)) {
                        header("Location: ../index.php?add_child&error=sql_error");
                        exit();
                    } else {
                        mysqli_stmt_bind_param($statement, 'sssss', $chiiname, $chifuaname, $chibod, $chaigen, $fileNameNew);
                        mysqli_stmt_execute($statement);
                        header("Location: ../index.php?view_child");
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
