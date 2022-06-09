<?php
    include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-text">This is an error message!</div>      
                <div class="field input">
                    <label>Email Adress</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your Password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Start Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a> </div>
        </section>
    </div>

    <!-- js -->
    <script src="js/pass-show-hide.js"></script>
    <script src="js/login.js"></script>
</body>
</html>