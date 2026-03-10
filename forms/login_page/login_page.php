<?php
  session_start();
  require('../../function/function.php');
  $err_msg;
  if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn,"SELECT * FROM user WHERE username='$user'");
    if(mysqli_num_rows($result) === 1){
      $row = mysqli_fetch_assoc($result);
      if(password_verify($password, $row['password'])){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $user;
        header('Location: ../../Dashboard/Dashboard_utama.php');
        exit();
      }else{
        $err_msg = "password salah";
      }
    }else{
      $err_msg = "user tidak ada";
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login page</title>
    <link rel="stylesheet" href="style.css">
    <link
      rel="icon"
      href="../../assets/img/logo/smkn 2 baleendah.png"
      type="image/x-icon"
    />
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Login Form</header>
        <form action="" method="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="username" required placeholder="username">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" name="password" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
          <div class="field">
            <input type="submit" name="submit">
          </div>
        </form>
        
      </div>
    </div>
    <?php if($err_msg === "password salah"): ?>
      <script>
          Swal.fire({
          position: "top-center",
          icon: "error",
          title: "password salah",
          theme: "dark",
          showConfirmButton: false,
          timer: 1500
        });
      </script>
    <?php elseif($err_msg === "user tidak ada"): ?>
      <script>
        Swal.fire({
          position: "top-center",
          icon: "error",
          title: "user tidak ada",
          theme: "dark",
          showConfirmButton: false,
          timer: 1500
        });
      </script>
    <?php endif; ?>
    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>



  </body>
</html>
