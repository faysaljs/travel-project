<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="../index.css">
</head>

<body>
    <?php require "../config/db.php" ?>
    <?php require "../includes/header.php"?>

    <?php
    $successMessage;
    $error;
    if (isset($_POST["submit"])) {
        if (empty($_POST["username"]) or empty($_POST["email"]) or empty($_POST["password"])) {
            echo "<script>alert('One or more input empty!')</script>";
        } else {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $defaul_password = $_POST["password"];

            $sql = "SELECT email FROM users ;";
            $stmt = $pdo->prepare($sql);

            $stmt->execute();
            $allUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);


            
            // Extract only the emails into a flat array
            $emailList = array_column($allUsers, 'email');
            
            // Now you can check if an email exists:
            if (in_array($email, $emailList)) {
                $error = "Your email is already registered.";
            }
            


            if (strlen($defaul_password) < 8) {
                $error = " Your password must be longer than 8 characters.";
            }
            if (empty($error)) {
                $password_hashed = password_hash($defaul_password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO users (username, email, password) VALUES (? , ? , ?);";
                $stmt = $pdo->prepare($sql);

                $stmt->execute([$username, $email, $password_hashed]);

                $successMessage = "Your data has been saved successfully!";
                print_r($emailList);
            }
        }
    }

    ?>




    <div class="login">
        <!-- <i class="fa-solid fa-xmark"></i> -->
        <form action="register.php" method="POST">
            <h3>Register</h3>
            <?php if (isset($successMessage)) {
                echo "<div style='text-align: center;background-color: #2FFF00; padding: 10px;'>
                $successMessage</div>";
            } else {
                echo "";
            }; ?>


            <input type="text" class="box" name="username" placeholder="Enter your username ">
            <input type="email" class="box" name="email" placeholder="Enter your email ">
            <input type="password" class="box" name="password" placeholder="Enter your password">
            <p style="color: #C94126; font-size: small"><?php echo isset($error) ? $error : ''; ?></p>
            <input type="submit" name="submit" value="Register now" class="btn">
            <p>Already have an account? <a href="../auth/login.php">Login now</a></p>
        </form>
    </div>
    <?php require "../includes/footer.html" ?>
</body>

</html>

<!-- login form container -->