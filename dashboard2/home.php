<?php session_start();
include("C:/xampp/htdocs/gop-gop/login student/config.php");

$email = $_SESSION['email'];
$result = mysqli_query($conn, "SELECT * FROM grade WHERE email = '$email' LIMIT 1");
$grade = mysqli_fetch_assoc($result); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PARHome</title>
  <link rel="stylesheet" href="home.css"/>
</head>
<body>
 
<div class="root">
 
  <!--sidebar -->
  <div class="sidebar">
 
    <!-- Profile -->
    <div class="sb-profile">
      <div class="sb-avatar">Photo</div>
      <div class="sb-profile-text">
        <div class="sb-name"><?php echo $_SESSION['name'] ?></div>
        <div class="sb-roll"><?php echo $_SESSION['role'] ?></div>
        <div class="sb-inst">IIIT NAGPUR</div>
        <div class="sb-sem"> sem: 2nd</div>
      </div>
    </div>
 
    <!-- Navigation -->
 <div class="sb-nav">
  <a class="nav-item active" href="http://localhost/gop-gop/dashboard2/">🏠 Home</a>
<a class="nav-item" href="http://localhost/gop-gop/timetable/timetable.php">📅 Timetable</a>
<a class="nav-item" href="http://localhost/gop-gop/attendnce/attendance.php">📊 Attendance</a>
<a class="nav-item" href="http://localhost/gop-gop/marks/marks.php">📄 Exam &amp; Results</a>
<a class="nav-item" href="http://localhost/gop-gop/grievence/grivence.php">📩 Grievance</a>
</div>
    <!-- Quick Stats -->
    <div class="sb-quick-stats">
      <div class="qs-title">QUICK STATS</div>
      <div class="qs-row"><span>CGPA</span><span><?php echo $grade['sgpa'] ?></span></div>
      <div class="qs-row"><span>Batch</span><span>CSE</span></div>
      <div class="qs-row"><span>Year</span><span>2026</span></div>
    </div>
 
  </div>
 
  <!-- ═══ MAIN ═══ -->
  <div class="main">
 
    <!-- TOPBAR -->
    <div class="topbar">
      <div class="tb-logo">PAR — Portal for Academic Resources</div>
      <div class="tb-page">Home</div>
      <div class="tb-right">
        <div class="tb-userinfo">
          <div class="tb-name"><?php echo $_SESSION['name'] ?></div>
          <div class="tb-role"><?php echo $_SESSION['role'] ?></div>
        </div>
        <div class="tb-avatar">Photo</div>
        <div class="tb-logout"> <a href="http://localhost/gop-gop/login%20student/login.php">logout</a> </div>
      </div>
    </div>
 
    <!-- PAGE CONTENT -->
    <div class="content">
 
      <!-- WELCOME CARD -->
      <div class="welcome-card">
        <div class="wc-left">
          <div class="wc-avatar">Photo</div>
          <div>
            <div class="wc-sub">WELCOME BACK</div>
            <div class="wc-name"><?php echo $_SESSION['name'] ?></div>
          </div>
        </div>
        <div class="wc-stats">
          <div class="wc-stat">
            <div class="wc-num">86%</div>
            <div class="wc-label">Overall Attendance</div>
          </div>
          <div class="wc-stat">
            <div class="wc-num">5</div>
            <div class="wc-label">Today's Classes</div>
          </div>
          <div class="wc-stat">
            <div class="wc-num">0</div>
            <div class="wc-label">Cancelled</div>
          </div>
        </div>
      </div>
 
      <!-- METRIC CARDS -->
      <div class="metrics-row">
        <div class="metric-card">
          <div class="mc-icon">🏆</div>
          <div class="mc-num"><?php echo $grade['sgpa'] ?></div>
          <div class="mc-label">CGPA</div>
        </div>
        <div class="metric-card">
          <div class="mc-icon">🏫</div>
          <div class="mc-num">IIIT NAGPUR</div>
          <div class="mc-label">Institute</div>
        </div>
        <div class="metric-card">
          <div class="mc-icon">📅</div>
          <div class="mc-num">2ND</div>
          <div class="mc-label">Semester</div>
        </div>
      </div>
 
      <!-- BOTTOM ROW -->
      <div class="bottom-row">
 
        <!-- TODAY'S SCHEDULE -->
        <div class="card">
          <div class="card-title">📅 Today's Schedule</div>
   
        </div>
 
        <!-- ATTENDANCE -->
        <div class="card">
          <div class="card-title">📊 Attendance</div>
          <div class="ring">Circular Ring Chart — Overall Attendance %</div>
          <div class="alert-box">⚠ Alert Message — Low or Good Attendance</div>
          <div class="bar-row">Subject Code &nbsp;|&nbsp; Progress Bar &nbsp;|&nbsp; %</div>
          <div class="bar-row">Subject Code &nbsp;|&nbsp; Progress Bar &nbsp;|&nbsp; %</div>
          <div class="bar-row">Subject Code &nbsp;|&nbsp; Progress Bar &nbsp;|&nbsp; %</div>
          <div class="bar-row">Subject Code &nbsp;|&nbsp; Progress Bar &nbsp;|&nbsp; %</div>
          <div class="bar-row">Subject Code &nbsp;|&nbsp; Progress Bar &nbsp;|&nbsp; %</div>
        </div>
 
      </div>
 
    </div>
  </div>
</div>
 
</body>
</html>