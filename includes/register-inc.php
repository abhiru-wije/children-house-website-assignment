<?php
if (isset($_POST['submit'])) {
    require './database.php';
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $cnumber = $_POST['cnumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    // echo $username . $firstname . $lastname . $cnumber . $address . $password;

    if (empty($username) || empty($password) || empty($firstname) || empty($lastname) || empty($cnumber) || empty($address)) {
        header("Location: ../login.php?error=empty_fields");
        exit();
    } else {

        if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
            header("Location: ../login.php?error=username_not_allowed");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE username = ?";
            $statement = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($statement, $sql)) {
                header("Location: ../login.php?error=sql_error");
                exit();
            } else {
                mysqli_stmt_bind_param($statement, "s", $username);
                mysqli_stmt_execute($statement);
                mysqli_stmt_store_result($statement);
                $rowCount = mysqli_stmt_num_rows($statement);

                if ($rowCount > 0) {
                    header("Location: ../login.php?error=user_already_exist");
                    exit();
                } else {
                    $sql = "INSERT INTO users (username, first_name, last_name, c_number, address, password) VALUES (?, ?, ?, ?, ?,?)";
                    $statement = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($statement, $sql)) {
                        header("Location: ../login.php?error=sql_error");
                        exit();
                    } else {

                        $hashPass = password_hash($password, PASSWORD_DEFAULT);

                        mysqli_stmt_bind_param($statement, "sssiss", $username, $firstname, $lastname, $cnumber, $address, $hashPass);
                        mysqli_stmt_execute($statement);
                        session_start();
                        $_SESSION['sessionId'] = 1;
                        $_SESSION['sessionUser'] = $username;
                        header("Location: ../index.php?success=registered");
                        exit();
                    }
                }
            }
        }
    }
    // mysqli_stmt_close($statement);
    // mysqli_close($conn);
} else {
    header("Location: ../login.php?error=no_user_found");
    exit();
}
