<?php
if (isset($_POST['submit'])) {
    require './database.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $username . $firstname . $lastname . $cnumber . $address . $password;

    if (empty($username) || empty($password)) {
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
                $result = mysqli_stmt_get_result($statement);

                if ($row = mysqli_fetch_assoc($result)) {
                    $pass_check = password_verify($password, $row['password']);
                    if ($pass_check == false) {
                        header("Location: ../login.php?error=wrong_password");
                        exit();
                    } else if ($pass_check == true) {
                        session_start();
                        $_SESSION['sessionId'] = $row['id'];
                        $_SESSION['sessionUser'] = $row['username'];
                        header("Location: ../index.php?success=registered&overview");
                        exit();
                    } else {
                        header("Location: ../login.php?wrong_password");
                        exit();
                    }
                } else {
                    header("Location: ../login.php?user_not_found");
                    exit();
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
