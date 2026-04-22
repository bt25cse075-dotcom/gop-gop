<?php session_start()?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="attendance.css" />
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
          <a class="nav-item" href="http://localhost/gop-gop/dashboard2/">🏠 Home</a>
          <a
            class="nav-item"
            href="http://localhost/gop-gop/timetable/timetable.php"
            >📅 Timetable</a
          >
          <a class="nav-item active" href="http://localhost/gop-gop/attendnce/attendance.php"
            >📊 Attendance</a
          >
          <a class="nav-item" href="http://localhost/gop-gop/marks/marks.php"
            >📄 Exam &amp; Results</a
          >
          <a
            class="nav-item"
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

        <div class="table">
          <div class="left">
            <div class="week">Attendance Report</div>
            <div class="sem">AY 2025-2026 Semester 2nd.Batch B1</div>
          </div>
          <div class="right">
            <div class="box1 sp1">
              <div class="num">82%</div>
              <div class="over1">overall</div>
            </div>

            <div class="box1 sp2">
              <div class="num">2</div>
              <div class="over1">low subjects</div>
            </div>

            <div class="box1 sp3">
              <div class="num">4</div>
              <div class="over1">Good standing</div>
            </div>
          </div>
        </div>

        <div class="ali">
          <div class="class1">
            <div class="h1">
              <div class="t1">
                <div class="p1">MAL 104</div>
                <div class="p2">MTTDE</div>
                <div class="p3">by DR daud</div>
              </div>
              <div class="t2">73%</div>
            </div>

            <div class="h2">
              <div class="t3">
                <div class="x1">18</div>
                <div class="x2">presents</div>
              </div>
              <div class="t3">
                <div class="x1">7</div>
                <div class="x2">absents</div>
              </div>
              <div class="t3">
                <div class="x1">25</div>
                <div class="x2">total classes</div>
              </div>
            </div>
            <!-- h2 -->
          </div>
          <!-- class1 -->

          <div class="class1">
            <div class="h1">
              <div class="t1">
                <div class="p1">CSL 302</div>
                <div class="p2">Datastructure & Algorithm</div>
                <div class="p3">by DR Neha</div>
              </div>
              <div class="t2">85%</div>
            </div>

            <div class="h2">
              <div class="t3">
                <div class="x1">22</div>
                <div class="x2">presents</div>
              </div>
              <div class="t3">
                <div class="x1">4</div>
                <div class="x2">absents</div>
              </div>
              <div class="t3">
                <div class="x1">26</div>
                <div class="x2">total classes</div>
              </div>
            </div>
            <!-- h2 -->
          </div>
          <!-- class1 -->
          <div class="class1">
            <div class="h1">
              <div class="t1">
                <div class="p1">CSL 103</div>
                <div class="p2">Application programming</div>
                <div class="p3">by Mrs Ruchira selote </div>
              </div>
              <div class="t2">73%</div>
            </div>

            <div class="h2">
              <div class="t3">
                <div class="x1">80</div>
                <div class="x2">presents</div>
              </div>
              <div class="t3">
                <div class="x1">6</div>
                <div class="x2">absents</div>
              </div>
              <div class="t3">
                <div class="x1">31</div>
                <div class="x2">total classes</div>
              </div>
            </div>
            <!-- h2 -->
          </div>
          <!-- class1 -->
        </div>

        <div class="ali">
          <div class="class1">
            <div class="h1">
              <div class="t1">
                <div class="p1">BEL 101</div>
                <div class="p2">Mechanics and graphics</div>
                <div class="p3">by DR Anup Kumar Rajak</div>
              </div>
              <div class="t2">90%</div>
            </div>

            <div class="h2">
              <div class="t3">
                <div class="x1">18</div>
                <div class="x2">presents</div>
              </div>
              <div class="t3">
                <div class="x1">2</div>
                <div class="x2">absents</div>
              </div>
              <div class="t3">
                <div class="x1">20</div>
                <div class="x2">total classes</div>
              </div>
            </div>
            <!-- h2 -->
          </div>
          <!-- class1 -->

          <div class="class1">
            <div class="h1">
              <div class="t1">
                <div class="p1">HUL 101</div>
                <div class="p2">Communication skills</div>
                <div class="p3">by DR Madhuri Tayade</div>
              </div>
              <div class="t2">100%</div>
            </div>

            <div class="h2">
              <div class="t3">
                <div class="x1">16</div>
                <div class="x2">presents</div>
              </div>
              <div class="t3">
                <div class="x1">0</div>
                <div class="x2">absents</div>
              </div>
              <div class="t3">
                <div class="x1">16</div>
                <div class="x2">total classes</div>
              </div>
            </div>
            <!-- h2 -->
          </div>
          <!-- class1 -->
          <div class="class1">
            <div class="h1">
              <div class="t1">
                <div class="p1">ECL 102</div>
                <div class="p2">Digital electronics</div>
                <div class="p3">by DR Rashmi Ranjan</div>
              </div>
              <div class="t2">75%</div>
            </div>

            <div class="h2">
              <div class="t3">
                <div class="x1">27</div>
                <div class="x2">presents</div>
              </div>
              <div class="t3">
                <div class="x1">9</div>
                <div class="x2">absents</div>
              </div>
              <div class="t3">
                <div class="x1">36</div>
                <div class="x2">total classes</div>
              </div>
            </div>
            <!-- h2 -->
          </div>
          <!-- class1 -->
        </div>
      </div>
      <!-- root2 -->
    </div>
    <!-- root -->
  </body>
</html>
