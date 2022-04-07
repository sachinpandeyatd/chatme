<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: users.php");
    }
?>

<?php require "php/header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat Me</header>
            <form action="" method="POST">
                <div class="error-txt"></div>
                <div class="field input">
                    <label for="">Email</label>
                    <input name="email" type="email" placeholder="example@domain.com">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input name="password" type="password" placeholder="%#xhhs72672guiw$%6">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Submit">
                </div>
            </form>
            <div class="link">Not a user? <a href="index.php">Signup</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>
</html>