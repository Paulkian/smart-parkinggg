<?php
include("database.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script defer src="checker.js"></script>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <h1>Sign In</h1>

                <span>or use your email password</span>
                <input type="text" placeholder="student ID" name="username-2" required>
                <input type="password" placeholder="Password" name="password-2" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="login" value="login">login</button>

                <?php
                if (isset($_POST["login"])) {

                    $username1 = filter_input(INPUT_POST, "username-2", FILTER_SANITIZE_SPECIAL_CHARS);
                    $password1 = filter_input(INPUT_POST, "password-2", FILTER_SANITIZE_SPECIAL_CHARS);
                    $result = mysqli_query($conn, "SELECT * FROM parking WHERE stundetid = '$username1'");
                    $row = mysqli_fetch_assoc($result);
                    if (mysqli_num_rows($result) > 0) {
                        if ($password1 == $row["password"]) {
                            $_SESSION["login"] = true;
                            $_SESSION["id"] = $row["id"];
                            header("Location:done.html");
                        } else {
                            echo "<script> alert('Wrong password, Please try again') </script>";
                        }
                    } else {
                        echo "<script> alert('Username are not registered') </script>";
                    }


                    if (empty($username1)) {
                        echo "<p style='color: red;'>Please Enter a Username</p>";
                    } elseif (empty($password1)) {
                        echo "<p style='color: red;'>Please Enter a Password</p>";
                    }
                }
                ?>

            </form>
        </div>

    </div>







    <?php

    mysqli_close($conn);
    ?>