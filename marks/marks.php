<?php
session_start();
include("../config.php");

$email = $_SESSION['email'];
$result = mysqli_query($conn, "SELECT * FROM grade WHERE email = '$email' LIMIT 1");
$grade = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PAR — Exam & Results</title>
  <link rel="stylesheet" href="marks.css"/>
</head>
<body>

<div class="root">

  <!-- SIDEBAR -->
  <div class="sidebar">
    <div class="sb-profile">
      <div class="sb-avatar">Photo</div>
      <div class="sb-profile-text">
        <div class="sb-name"><?php echo $_SESSION['name'] ?></div>
        <div class="sb-roll"><?php echo $_SESSION['role'] ?></div>
        <div class="sb-inst">IIIT NAGPUR</div>
        <div class="sb-sem">Sem: 2nd</div>
      </div>
    </div>

    <div class="sb-nav">
      <a class="nav-item" href="http://localhost/gop-gop/dashboard2/">🏠 Home</a>
      <a class="nav-item" href="http://localhost/gop-gop/timetable/timetable.php">📅 Timetable</a>
      <a class="nav-item" href="http://localhost/gop-gop/attendnce/attendance.php">📊 Attendance</a>
      <a class="nav-item active" href="http://localhost/gop-gop/marks/marks.php">📄 Exam &amp; Results</a>
      <a class="nav-item" href="http://localhost/gop-gop/grievence/grivence.php">📩 Grievance</a>
    </div>

    <div class="sb-quick-stats">
      <div class="qs-title">QUICK STATS</div>
      <div class="qs-row"><span>CGPA</span><span><?php echo $grade['sgpa'] ?></span></div>
      <div class="qs-row"><span>Batch</span><span>CSE</span></div>
      <div class="qs-row"><span>Year</span><span>2026</span></div>
    </div>
  </div>

  <!-- MAIN -->
  <div class="main">

    <!-- TOPBAR -->
    <div class="topbar">
      <div class="tb-logo">PAR — Portal for Academic Resources</div>
      <div class="tb-page">Exam &amp; Results</div>
      <div class="tb-right">
        <div class="tb-userinfo">
          <div class="tb-name"><?php echo $_SESSION['name'] ?></div>
          <div class="tb-role"><?php echo $_SESSION['role'] ?></div>
        </div>
        <div class="tb-avatar">Photo</div>
        <div class="tb-logout">
          <a href="http://localhost/gop-gop/login%20student/login.php">Logout</a>
        </div>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="content">

      <!-- BANNER -->
      <div class="banner">
        <div class="banner-left">
          <div class="banner-title">Exam &amp; Results</div>
          <div class="banner-sub">AY 2025–2026 &nbsp;|&nbsp; Semester 2nd &nbsp;|&nbsp; Batch B1</div>
        </div>
        <div class="bstat sp-green">
          <div class="bstat-num"><?php echo $grade['sgpa'] ?></div>
          <div class="bstat-label">CGPA</div>
        </div>
      </div>

      <!-- GRADES TABLE -->
      <div class="card">
        <div class="card-title">📋 Final Result — Subject Grades</div>
        <div class="table-wrap">
          <table class="marks-table">
            <thead>
              <tr>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Grade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="sub-code">MAL 104</td>
                <td class="sub-name">MTTDE</td>
                <td><span class="grade-badge grade-<?php echo strtolower($grade['asl']) ?>"><?php echo $grade['asl'] ?></span></td>
              </tr>
              <tr class="row-alt">
                <td class="sub-code">CSL 302</td>
                <td class="sub-name">Data Structure &amp; Algorithm</td>
                <td><span class="grade-badge grade-<?php echo strtolower($grade['eee']) ?>"><?php echo $grade['eee'] ?></span></td>
              </tr>
              <tr>
                <td class="sub-code">CSL 103</td>
                <td class="sub-name">Application Programming</td>
                <td><span class="grade-badge grade-<?php echo strtolower($grade['edc']) ?>"><?php echo $grade['edc'] ?></span></td>
              </tr>
              <tr class="row-alt">
                <td class="sub-code">BEL 101</td>
                <td class="sub-name">Mechanics &amp; Graphics</td>
                <td><span class="grade-badge grade-<?php echo strtolower($grade['cp']) ?>"><?php echo $grade['cp'] ?></span></td>
              </tr>
              <tr>
                <td class="sub-code">HUL 101</td>
                <td class="sub-name">Communication Skills</td>
                <td><span class="grade-badge grade-<?php echo strtolower($grade['ce']) ?>"><?php echo $grade['ce'] ?></span></td>
              </tr>
              <tr class="row-alt">
                <td class="sub-code">ECL 102</td>
                <td class="sub-name">Digital Electronics</td>
                <td><span class="grade-badge grade-<?php echo strtolower($grade['evs']) ?>"><?php echo $grade['evs'] ?></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    <!-- content -->

  </div>
  <!-- main -->

</div>
<!-- root -->

</body>
</html>