<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/home_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>

    <header>

    <a href="" class="brand"><img src="src/images/Logo2.png" id="logo"></a>

      <div class="menu" id="menu-icon">
        <div class="btn">
          <i class="fas fa-times close-btn"></i>
        </div>
        <a href="#home">Home</a>
        <a href="#about-section">About</a>
        <a href="src/blog.php">Blog</a>
        <a href="src/exam_enroll.php">Exam&nbsp;List</a>
        <a href="src/learn.php">Tutorial</a>
        <a href="src/login.php"><button id="loginbtn">Login</button>
        <a href="src/signup.php"><button id=signupbtn>Signup</button></a>
      </div>
        
      <div class="btn">
        <i class="fas fa-bars menu-btn"></i>
      </div>
    </header>  
    
    </body>

    <script>
      //Javascript for Navigation effect on scroll
      window.addEventListener("scroll", function(){
        var header = document.querySelector("header");
        header.classList.toggle('sticky', window.scrollY > 0);
      });
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
          document.getElementById("logo").style.height = "40px";
          document.getElementById("logo").src="src/images/Logo2light.png";
        } else {
          document.getElementById("logo").style.height = "80px";
          document.getElementById("logo").src="src/images/Logo2.png";
        }
      }

      //Javascript for responsive navigation sidebar Nav
      var menu = document.querySelector('.menu');
      var menuBtn = document.querySelector('.menu-btn');
      var closeBtn = document.querySelector('.close-btn');

      menuBtn.addEventListener("click", () => {
        menu.classList.add('active');
      });

      closeBtn.addEventListener("click", () => {
        menu.classList.remove('active');
      });
    </script>
  
</html>