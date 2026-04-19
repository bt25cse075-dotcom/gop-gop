<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grevence</title>
    <link rel="stylesheet" href="stylegriv.css">
</head>

<body>
    <div class="root">
        <div class="sidebar">
        <div class="sb-profile">
          <div class="sb-avatar">Photo</div>
          <div class="sb-profile-text">
            <div class="sb-name"><?php echo $_SESSION['name'] ?></div>
            <div class="sb-roll"><?php echo $_SESSION['role'] ?></div>
            <div class="sb-inst">IIIT NAGPUR</div>
            <div class="sb-sem">sem: 2nd</div>
          </div>
        </div>

        <!-- Navigation -->
        <div class="sb-nav">
          <a class="nav-item" href="home.html">🏠 Home</a>
          <a
            class="nav-item"
            href="http://localhost/gop-gop/timetable/timetable.php"
            >📅 Timetable</a
          >
          <a class="nav-item" href="../attendance/attendance.html"
            >📊 Attendance</a
          >
          <a class="nav-item" href="../exams/exams.html"
            >📄 Exam &amp; Results</a
          >
          <a
            class="nav-item active"
            href="http://localhost/gop-gop/grievence/grivence.php"
            >📩 Grievance</a
          >
        </div>
        <!-- Quick Stats -->
        <div class="sb-quick-stats">
          <div class="qs-title">QUICK STATS</div>
          <div class="qs-row"><span>CGPA</span><span>Value</span></div>
          <div class="qs-row"><span>Batch</span><span>CSE</span></div>
          <div class="qs-row"><span>Year</span><span>2026</span></div>
        </div>
      </div>








    <div class="root2">
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

    <div class="griv">
        <!--sidebar -->

    <div class="portal">
        <h1>Grievance Portal</h1>
        <p>Submit and track your complaints & requests</p>
    </div>
    <div class="switch">
        <button type="button"> My Grievances</button>
        <button type="button">+ New Grievance</button>
    </div>
    <div class="g1">
<div class="status">
   <p>
     GRV-03
   </p>
<p class="pending">
    pending
</p> 
<p>
    Filed 26Mar 2026
</p>
</div>
<div class="reason">
<h2>Attendence mismatch in DS</h2>
</div>
<div class="detail">
My Attendence in DS shows 17 but i have attended 20 classes. Requesting correction
</div>
    </div>
      <div class="g2">
<div class="status">
   <p>
     GRV-02
   </p>
<p class="resolved">
    resolved
</p> 
<p>
    Filed 8Mar 2026
</p>
</div>
<div class="reason">
<h2>Library fine dispute</h2>
</div>
<div class="detail">
charged fine for boooks returned on time .Requesting review.
</div>
<div class ="reply">
<p>
   OFFICIAL REPLY
</p>
<p>
    now its fixed thanks for informing
</p>
</div>
    </div>
   <div class="g3">
<div class="status">
   <p>
     GRV-01
   </p>
<p class="progress">
    in progress
</p> 
<p>
    Filed 28Feb 2026
</p>
</div>
<div class="reason">
<h2>other</h2>
</div>
<div class="detail">
water cooler is not working in admin building
</div>
<div class="reply">
<p> OFFICIAL REPLY</p>
<p>querry has been registered we will look into it</p>
</div>
    </div>
    </div> </div>
</body>
</html>