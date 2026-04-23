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
    <div class="class-row">
            <div class="cr-time">8:00 - 9:00</div>
            <div class="cr-info">
              <div class="cr-sub">MTTDE</div>
              <div class="cr-meta">HALL 1 &nbsp;·&nbsp; By DR Daud Ali</div>
            </div>
            <div class="cr-badge">Lecture</div>
          </div>
 
          <div class="class-row">
            <div class="cr-time">9:00 – 10:00</div>
            <div class="cr-info">
              <div class="cr-sub">Data Structures &amp; Algorithms</div>
              <div class="cr-meta">SEMINAR HALL &nbsp;·&nbsp; By DR Neha Kasturia</div>
            </div>
            <div class="cr-badge">Lecture</div>
          </div>
 
          <div class="class-row cancelled">
            <div class="cr-time">10:00 – 11:00</div>
            <div class="cr-info">
              <div class="cr-sub">Digital electronics </div>
              <div class="cr-meta">HALL 1 &nbsp;·&nbsp; By Dr Rashmi Ranjan</div>
            </div>
            <div class="cr-badge cr-badge--cancel">Cancelled</div>
          </div>
 
          <div class="class-row">
            <div class="cr-time">11:00 – 12:00</div>
            <div class="cr-info">
              <div class="cr-sub">Mechanics & graphics</div>
              <div class="cr-meta">HALL 1 &nbsp;·&nbsp; By Dr Anup Rjak</div>
            </div>
            <div class="cr-badge">Lecture</div>
          </div>
      <div class="class-break">
            <div class="cr-time">12:00 – 01:00</div>
            <div class="cr-info">
              <div class="cr-sub"> BREAK </div>
              <div class="cr-meta"></div>
            </div>
            <div class="cr-badge">RELAX</div>
          </div>
 
          <div class="class-row">
            <div class="cr-time">2:00 – 4:00</div>
            <div class="cr-info">
              <div class="cr-sub">DSA Lab</div>
              <div class="cr-meta">Lab 03 &nbsp;·&nbsp; By Dr Neha Kashturia</div>
            </div>
            <div class="cr-badge cr-badge--lab">Lab</div>
          </div>
        </div>
 
        <!-- ATTENDANCE -->
         <div class="card">
          <div class="card-title">📊 Attendance</div>
 
          <div class="ring-wrap">
            <canvas id="ring-canvas" width="110" height="110"></canvas>
            <div class="ring-label">
              <div class="ring-pct" id="ring-pct-text">0%</div>
              <div class="ring-sub">Overall</div>
            </div>
          </div>
 
          <div class="att-alert good">✅ Attendance is Good</div>
 
          <div id="att-bars"></div>
        </div>
 
      </div>
    </div>
  </div>
</div>
 
<script>
  // ── Static data ──────────────────────────────
  const overall = 86;
 
  const subjects = [
    { code: "MAL-101", pct: 92 },
    { code: "CSL-302", pct: 88 },
    { code: "CSL-103", pct: 72 },
    { code: "BEL-101", pct: 85 },
    { code: "ECL-102", pct: 68 },
  ];
 
  // ── Ring chart ───────────────────────────────
  function drawRing(pct) {
    const canvas = document.getElementById("ring-canvas");
    const ctx = canvas.getContext("2d");
    const cx = 55, cy = 55, r = 42, lw = 10;
 
    ctx.clearRect(0, 0, canvas.width, canvas.height);
 
    // background track
    ctx.beginPath();
    ctx.arc(cx, cy, r, 0, 2 * Math.PI);
    ctx.strokeStyle = "#e8e8e8";
    ctx.lineWidth = lw;
    ctx.stroke();
 
    // filled arc
    const start = -Math.PI / 2;
    const end   = start + (2 * Math.PI * pct / 100);
    ctx.beginPath();
    ctx.arc(cx, cy, r, start, end);
    ctx.strokeStyle = "#4a90a4";
    ctx.lineWidth = lw;
    ctx.lineCap = "round";
    ctx.stroke();
 
    document.getElementById("ring-pct-text").textContent = pct + "%";
  }
 
  // animate 0 → 86
  let current = 0;
  const timer = setInterval(() => {
    current = Math.min(current + 2, overall);
    drawRing(current);
    if (current >= overall) clearInterval(timer);
  }, 16);
 
  // ── Progress bars ────────────────────────────
  const container = document.getElementById("att-bars");
 
  subjects.forEach(s => {
    const isLow = s.pct < 75;
    const row = document.createElement("div");
    row.className = "att-bar-row";
    row.innerHTML = `
      <div class="att-code">${s.code}</div>
      <div class="att-bar-track">
        <div class="att-bar-fill ${isLow ? "low" : ""}" id="bar-${s.code}"></div>
      </div>
      <div class="att-pct ${isLow ? "low" : ""}">${s.pct}%</div>
    `;
    container.appendChild(row);
  });
 
  // slide bars in after paint
  setTimeout(() => {
    subjects.forEach(s => {
      document.getElementById("bar-" + s.code).style.width = s.pct + "%";
    });
  }, 100);
</script>
    </div>
  </div>
</div>
 
</body>
</html>