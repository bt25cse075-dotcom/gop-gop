<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);?>
<!DOCTYPE html>

<html lang="en">
<head> 
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
  <?php include("data.php"); ?>
    <div class="container">
        <div class="left">
           <div class="logo">
<img src="white.png" alt="">
           </div> 
       
      <div class="lefttext">
       
        
       <h2>
  Academic regulation
        ,<br>simplified.
       </h2> 
      
        <ul class="features">
          <li>  <span class="icon"><i class="fa-solid fa-rectangle-list"></i></span>manage academic records</li>
          <li> <span class="icon"><i class="fa-solid fa-user"></i></span>Role-Based access control</li>
          <li><span class="icon"><i class="fa-regular fa-star"></i></span>Track attendence &amp; grades</li>
        </ul>
      </div>
    

      
        </div>
    <div class="right">
      <form action="login.php" method="POST">
        <!-- role selector -->
        <input type="hidden" id="role" name="role" value="">   
       <h1 >Welcome back</h1> 
       <div> Sign in to your PAR account</div><br>
       Sign in as
      <div class="identity">
      <button class="student" type="button"  >STUDENT</button>
      <button class="faculty " type="button" >FACULTY</button>
      <button class="admin " type="button" >ADMIN</button>

      </div>

       <div class="info">
      <div class="input">
      <p>
         Email Address- 
      </p>
        <input type="email" id="email" name="email" placeholder="your@iiitn.ac.in">
      </div>  
<div class="input">
  <p>
     password-
  </p>
    <input type="password" id="password" name="password" placeholder="Enter Password">
</div>
<div class="errordiv">
<?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>
</div>
 <div class="forgot">
  <a href="#">forgot password</a>
 </div>
        <div class="login">
          <button type="submit" id="login" name="login" >Login in</button>
        </div>
        </form>
    </div>
    </div>
    </div>
    <script src="login.js" ></script>

</body>
</html>