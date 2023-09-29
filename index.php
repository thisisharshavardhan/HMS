<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Overlay-Login-Form.css">
    <style>
        body{
            background: url('../img/boxes.jpg')no-repeat;
        }
    </style>
</head>

<body style="background: url('../img/boxes.jpg')no-repeat;"><section>
    <div class="section-bg-overlay">
        <div class="form-box">
            <div class="form-value">
                <form action="./login.php" method="POST">
                    <div class="inputbox"><input type="text" name="uname" required /><label for>Username</label></div>
                    <div class="inputbox"><input type="password" name="pass" required /><label for>Password</label></div>
                    <?php if(isset($_GET['error'])) {?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                    <button type="submit">Login</button>
                    <div class="register">
                        <p>   <a href="./forgetpassword.html">Forgot Password</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>