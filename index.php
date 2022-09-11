<?php require('connection.php');
      session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test2Prepare</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/d0e72cce9e.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="index.js"></script>
  </head>
  <body>
    <div class="mainContainer">
    <!-- Sign in form pop up -->

      <input type="checkbox" id="show">
    <div class="sign-container">
      <label for="show" class="close-btn" title="close">&times;</label>
      <h2>Sign In</h2>
      <h3>to continue to Test2Prepare</h3>
      <form action="login_register.php" method="POST" autocomplete="off">
        <label>UserName, Email or phone</label>
        <input type="text" name="email_username">
         <label>Enter your password</label>
        <input type="password" name="password">
        <!-- <a href="#" for="show">Forgot Password?</a> -->
        <button type="submit" name="login">LOGIN</button>
        <div class="link">Not a member? <label for="rshow" class="reg">Register<sup>Free !!</sup></label></div>

      </form>
    </div>


       <!-- Register in form pop up -->

      <input type="checkbox" id="rshow">
    <div class="register-container">
      <label for="rshow" class="close-btn" title="close">&times;</label>
      <h2>Create an Account</h2>
      <h3>to continue to Test2Prepare</h3>
      <form action ="login_register.php" method="POST" autocomplete="off">
        <label>Full name</label>
        <input type="text" name="fullname">
         <label>Email</label>
        <input type="email" name="email">
        <label>UserName</label>
        <input type="text" name="username">
         <label>Enter your password</label>
        <input type="password" name="password">
        <button type="submit" name="register">Register</button>

      </form>
    </div>

    <!-- Top Menu -->
    <nav>
      <input type="checkbox" id="check" />
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"
        ><a id="logo" href="index.php">Test2Prepare</a></label
      >
      
      
      <ul>
            <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {
          echo"<img src='images/avatar1.jpg'>
          <li><div class ='ln'>$_SESSION[username] -</div></li>
          <li>
          <div class='user'>
            <a href='logout.php'>LOGOUT</a>
          </div>
          </li>
          ";
        }
        else
        {
          echo"
                  <li><label for='show' class='show-btn'>Sign in</label></li>
        <li><label for='rshow' class='rshow-btn'>Register<sup>Free !!</sup></label></li>
          ";
        }
?>

      </ul>
    </nav>
    <!-- Top Image Section -->
    <section class="someTxt">
      <h2>
        Study Smart And Excel Your <br />
        Exams
      </h2>
      <h3>
        Join Prep Test- A Next Generation Learning tool for all <br />
        Competivive Exam
      </h3>
      <button id="here"> Strart free practicing</button>
    </section>
    <div class="container">
      <div class="text">
        <h2 id="there" id="there1">Popular Practice Test Categories</h2>
        <p>
          Practice Tests for all Competitive Exams - Government Jobs, IBPS, SBI,
          CAT, MAT, SNAP, IIT-JEE, AIEEE, GATE, UPSC, CA, NSDC, etc.
        </p>
        <hr>
      </div>
      <div class="Container">
        <div class="cover">
          <div class="box">

            <img src="images/bgEngineering.png" alt="" srcset="" />
            <h3>ENGINEERING</h3>
                         <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {echo"
            <a href='web.php'>GATE Electronics and Communication</a>
            <a href='web.php'>GATE Computer Science(CS)</a>
            <a href='web.php'>GATE Mechanical Engineering</a>
            <a href='web.php'>UPPCL</a>
            ";
        }
        else
        {
         echo"
            <label for='show' class='show-btn'>GATE Electronics and Communication</label>
            <label for='show' class='show-btn'>GATE Computer Science(CS)</label>
            <label for='show' class='show-btn'>GATE Mechanical Engineering</label>
            <label for='show' class='show-btn'>UPPCL</label>
         ";
        }
      ?>
            
          </div>
          <div class="box">
            <img src="images/bgManagement.png" alt="" srcset="" />
            <h3>Management</h3>
             <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {echo"
            <a href='web.php'>CAT</a>
            <a href='web.php'>MAT</a>
            <a href='web.php'>NMAT</a>
            <a href='web.php'>CMAT</a>
            ";
        }
        else
        {
         echo"
            <label for='show' class='show-btn'>CAT</label>
            <label for='show' class='show-btn'>MAT</label>
            <label for='show' class='show-btn'>NMAT</label>
            <label for='show' cl</label>
         ";
        }
      ?>
          </div>
          <div class="box">
            <img src="images/bgPlacementPapers.png" alt="" srcset="" />
            <h3>Placement Papers</h3>
             <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {echo"
            <a href='web.php'>Capgemini</a>
            <a href='web.php'>Amazon</a>
            <a href='web.php'>Infosys</a>
            <a href='web.php'>Google</a>
            ";
        }
        else
        {
         echo"
            <label for='show' class='show-btn'>Capgemini</label>
            <label for='show' class='show-btn'>Amazon</label>
            <label for='show' class='show-btn'>Infosys</label>
            <label for='show' class='show-btn'>Google</label>
         ";
        }
      ?>
          </div>
        </div>
      </div>
      <div class="Container">
        <div class="cover1">
          <div class="box">
            <img src="images/bgStudyAbroad.png" alt="" srcset="" />
            <h3>Study Abroad</h3>
             <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
        {echo"
            <a href='web.php'>TOEFL</a>
            <a href='web.php'>GMAT</a>
            <a href='web.php'>GRE</a>
            <a href='web.php'>SAT</a>
            ";
        }
        else
        {
         echo"
            <label for='show' class='show-btn'>TOEFL</label>
            <label for='show' class='show-btn'>GMAT</label>
            <label for='show' class='show-btn'>GRE</label>
            <label for='show' class='show-btn'>SAT</label>
         ";
        }
      ?>
          </div>
          <div class="box">
            <img src="images/bgStudyInUK.png" alt="" srcset="" />
            <h3>Study in UK</h3>
              <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
         {echo"
            <a href='web.php'>LNAT</a>
            <a href='web.php'>Mathematics Admissions Test</a>
            <a href='web.php'>UK Clinical Aptitude Test</a>
            <a href='web.php'>Thinking Skills Assessment TSA UCL</a>
            ";
        }
        else
        {
         echo"
            <label for='show' class='show-btn'>LNAT</label>
            <label for='show' class='show-btn'>Mathematics Admissions Test</label>
            <label for='show' class='show-btn'>UK Clinical Aptitude Test</label>
            <label for='show' class='show-btn'>Thinking Skills Assessment TSA UCL</label>
         ";
        }
      ?>
          </div>
          <div class="box">
            <img src="images/bgStudyInUSA.png" alt="" srcset="" />
            <h3>Study in USA</h3>
             <?php
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
         {echo"
            <a href='web.php'>CLT Exam</a>
            <a href='web.php'>CSET</a>
            <a href='web.php'>Law</a>
            <a href='web.php'>Counselor</a>
            ";
        }
        else
        {
         echo"
            <label for='show' class='show-btn'>CLT Exam</label>
            <label for='show' class='show-btn'>CSET</label>
            <label for='show' class='show-btn'>Law</label>
            <label for='show' class='show-btn'>Counselor</label>
         ";
        }
      ?>
          </div>
        </div>
      </div>
      <div class="text1">
        <h2>Test</h2>
        <h3>2</h3>
        <h2>Prepare</h2>
        <p>Hear it from our customers</p>
      </div>
      <!-- Swiper -->
      <div class="swiper mySwiper Container">
        <div class="swiper-wrapper">
          <!-- section start -->
          <div class="swiper-slide">
            <div class="swiper-client-message">
              <p>
                The thing which I like most about T2P is prep test which helps
                each and every individual to <br />
                &nbsp;&nbsp;&nbsp;know how they can prepare for a different type
                of examinations where it covers a large <br />
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; variety of courses for
                various background students and also gains knowledge
              </p>
            </div>
            <div class="swiper-client-data grid grid-two-column">
              <figure>
                <img src="images/Gigachad.jpg" alt="" />
              </figure>
              <div class="client-data-details">
                <p>GigaChad</p>
                <p>Bodybuilder and Model</p>
              </div>
            </div>
          </div>

          <!-- section start -->
          <div class="swiper-slide">
            <div class="swiper-client-message">
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A perfect space to learn and
                practice skills. Available for almost every exam, it makes
                <br />
                preparations for tough competitive exams easy. Marks and final
                scores help us analyze our
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;performance and look into which topics are needed to
                revise again. <br />
              </p>
            </div>
            <div class="swiper-client-data grid grid-two-column">
              <div class="fig1">
                <img src="images/Bully maguire.jpg" alt="" />
              </div>
              <div class="client-data-details">
                <p>Bully Maguire</p>
                <p>Superhero</p>
              </div>
            </div>
          </div>
          <!-- section start -->
          <div class="swiper-slide">
            <div class="swiper-client-message">
              <p>
                According to me, the Prep Test of Test2Prepare provides proper
                preparation in each and every <br />
                &nbsp; &nbsp;field. Coming to the quality, the level of
                questions is very much appreciable. Moreover, this
                <br />&nbsp;&nbsp;&nbsp;&nbsp; platform develops the feeling
                that you can get ample support from the whole team of
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp; Test2Prepare in every sort. <br />
              </p>
            </div>
            <div class="swiper-client-data grid grid-two-column">
              <div class="fig">
                <img src="images/Rick.jpg" alt="" />
              </div>
              <div class="client-data-details">
                <p>Rick Astly</p>
                <p>Singer</p>
              </div>
            </div>
          </div>
          <!-- section start -->
          <div class="swiper-slide">
            <div class="swiper-client-message">
              <p>
                The best feature of Test2Prepare is its Preparation Tests. It
                allows us to give a test which is <br />&nbsp; time-based, which
                helps us to understand the problem and give the solution in a
                minute. <br />&nbsp;&nbsp; Expands the mind and also gives the
                answers to check whether we are right or wrong! <br />
              </p>
            </div>
            <div class="swiper-client-data grid grid-two-column">
              <div class="fig">
                <img src="images/Ricardo.jpg" alt="" />
              </div>
              <div class="client-data-details">
                <p>Ricardo</p>
                <p>Dancer</p>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="mid">
      <h3>Nepal's #1 Platform for Online Prep Test/Mock Test</h3>
      <button id="here1">Start Your Free Trail Now</button>
    </div>
    <section class="footer">
      <div class="social">
        <a href="http://"><i class="fab fa-instagram"></i></a>
        <a href="http://"><i class="fab fa-youtube"></i></a>
        <a href="http://"><i class="fab fa-twitter"></i></a>
        <a href="http://"><i class="fab fa-facebook"></i></a>
      </div>
      <ul class="list">
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Terms</a>
        </li>
         <li>
          <a href="#">Privacy Policy</a>
        </li>
      </ul>
      <p class="copyright">
        Test2Prepare @ 2022
      </p>
    </section>
    </div>



    ?>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  </body>
</html>
