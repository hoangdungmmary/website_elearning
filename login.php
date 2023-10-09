 <?php
  // include "../pdo/connectdb.html";
  include "./pdo/account.php";

  session_start();
  ob_start();
  if((isset($_POST['login']))&&($_POST['login'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    
    $acc = validated($name, $pass);
    $_SESSION['role'] = $acc;
    if($acc==0)
      header('location: student_profile.php');
    else{
       $alert = "Sai tên hoặc mật khẩu";
      // header('location: login.php');
     
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3941/3941214.png" />

    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style_signin.css" />
    <title>Sign In</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" class="sign-in-form" method="post">
            <h2 class="title">Đăng nhập</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="username" type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <?php 
              if(isset($alert) && ($alert!=""))
                echo $alert;
            ?>
            <input name="login" type="submit" class="btn solid" value="Đăng nhập"/>
            
            <p class="social-text">Hoặc đăng nhập bằng tài khoản</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <!-- sign up -->
          <form action="#" class="sign-up-form">
            <h2 class="title">Đăng ký</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Repassword" />
            </div>
            <input type="submit" class="btn" value="Đăng ký" />
            <p class="social-text">Hoặc đăng nhập ký bằng tài khoản</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Bạn chưa có tài khoản ?</h3>
            <p>
              Click vào bên dưới để điền một số thông tin và tham gia với chúng tôi!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Đăng ký
            </button>
          </div>
          <img src="images/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Bạn đã có tài khoản ?</h3>
            <p>
              Đăng nhập và tham gia những khóa học lập trình mới nhất!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
