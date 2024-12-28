<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Suggestions Website</title>
    <link rel="stylesheet" href="./css/login.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/> <!--Swiper JS-->


</head>
<body>
    <div class="center">
        <h1>REGISTER</h1>
        <form action="signup_db.php" method="post">
          <div class="txt_field">
            <input type="text" name = "Name" minlength = "3" required>
            <span></span>
            <label>Name</label>
          </div>
          <div class="txt_field">
            <input type="text" name ="email" required>
            <span></span>
            <label>Email</label>
          </div>
          <div class="txt_field">
            <input type="password" name = "password" minlength = "5" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="txt_field">
            <input type="password" name = "cpassword" minlength = "5" required>
            <span></span>
            <label>Confirm Password</label>
          </div>
          <div class="pass">Forgot Password?</div>
          <input type="submit" name ="submit" value="Register">
          <div class="signup_link">
            Already a member? <a href="login.php">Login</a>
          </div>
        </form>
      </div>



    <script src="./main.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints:{
            600: {
                slidesPerView: 2            }
        }
      });
    </script>




</body>
</html>