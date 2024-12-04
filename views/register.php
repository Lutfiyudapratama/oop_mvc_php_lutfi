<?php 
if (!defined('SECURE_ACCES')){
    die('ga ndue akses bolo');
}
// if (isset($_SESSION['is_login']) == false) {
//     header("location: /login");
// }
include('templates/header.php')
?>

<div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="views/login.php"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Registration</h3>
                
                
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success text-center">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger text-center">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php endif ?>


                <form method="POST" action="/register">
                   
                <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Full Name"
                        name="name"
                        value="<?= isset($_SESSION['name']) ? $_SESSION['name'] : "" ?>">
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="username"
                        name="username"
                        value="<?= isset($_SESSION['username']) ? $_SESSION['username'] : "" ?>">
                        
                        
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                        <input type="password" class="form-control rounded-end" placeholder="Password"
                        name="password">

                        
                        <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                    </div>
                    
                    <button class="btn btn-primary w-100 login-btn">Sign up</button>
                </form>
                <!-- <div class="other-option">
                    <p>Or continue with</p>
                    <div class="social-box d-flex justify-content-center gap-20">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-google"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->
    
<?php include('templates/footer.php') ?>
   