<?php require "php/header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat Me</header>
            <form method="POST" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="Sachin" required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Pandey" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="example@domain.com" required>
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="%#xhhs72672guiw$%6" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label for="">Image</label>
                    <input type="file" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Submit">
                </div>
            </form>
            <div class="link">Already a user? <a href="login.php">Login</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
    <script src="js/signup.js"></script>
</body>
</html>