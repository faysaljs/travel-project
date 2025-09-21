<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="../index.css">
</head>
<body>


<?php require "../includes/header.php" ?>
<?php require "../config/db.php" ?>

<?php
$error;
if (isset($_POST["submit"])) {
    if (empty($_POST["email"]) or empty($_POST["password"])) {
        echo "<script>alert('One or more input empty!')</script>";
    }else {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email = ?;";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([$email]);
        $allUsers = $stmt->fetch(PDO::FETCH_OBJ);

        $password_hashed = $allUsers->password;
        if (password_verify($password, $password_hashed)) {
            if (isset($_POST['remember'])) {
                setcookie("remember_email", $email, time() + 3600);
            }
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $allUsers->username;
            $_SESSION["id"] = $allUsers->id;

            header("location:http://localhost/travel/");

        }else{
            $error = "Incorrect email or password.";
        }

    }

}


?>



    <div class="login">
        <!-- <i class="fa-solid fa-xmark"></i> -->
        <form action="login.php" method="POST">
            <h3>login</h3>
            <input type="email" class="box" name="email" placeholder="Enter your email ">
            <input type="password" class="box" name="password" placeholder="Enter your password">
            <input type="submit" value="login now" name="submit" class="btn">
            <p style="color: #C94126; font-size: small"><?php echo isset($error) ? $error : ''; ?></p>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an accont? <a href="<?php echo CURRENT_URL ?>auth/register.php">register now</a></p>
        </form>
    </div>
    <?php require "../includes/footer.html" ?>

    
</body>
</html>

<!-- login form container -->