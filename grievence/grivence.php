<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance</title>
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
                <a class="nav-item" href="http://localhost/gop-gop/dashboard2/">🏠 Home</a>
                <a class="nav-item" href="http://localhost/gop-gop/timetable/timetable.php">📅 Timetable</a>
                <a class="nav-item" href="http://localhost/gop-gop/attendnce/attendance.php">📊 Attendance</a>
                <a class="nav-item" href="http://localhost/gop-gop/marks/marks.php">📄 Exam &amp; Results</a>
                <a class="nav-item active" href="http://localhost/gop-gop/grievence/grivence.php">📩 Grievance</a>
            </div>

            <!-- Quick Stats -->
            <div class="sb-quick-stats">
                <div class="qs-title">QUICK STATS</div>
                <div class="qs-row"><span>CGPA</span><span></span></div>
                <div class="qs-row"><span>Batch</span><span>CSE</span></div>
                <div class="qs-row"><span>Year</span><span>2026</span></div>
            </div>
        </div>

        <div class="root2">
            <div class="topbar">
                <div class="tb-logo">PAR — Portal for Academic Resources</div>
                <div class="tb-page">Grievance</div>
                <div class="tb-right">
                    <div class="tb-userinfo">
                        <div class="tb-name"><?php echo $_SESSION['name'] ?></div>
                        <div class="tb-role"><?php echo $_SESSION['role'] ?></div>
                    </div>
                    <div class="tb-avatar">Photo</div>
                    <div class="tb-logout">
                        <a href="http://localhost/gop-gop/login%20student/login.php">logout</a>
                    </div>
                </div>
            </div>

            <div class="griv">

                <div class="portal">
                    <h1>Grievance Portal</h1>
                    <p>Submit and track your complaints &amp; requests</p>
                </div>

                <div class="switch">
                    <button type="button" id="myGrievancesBtn">My Grievances</button>
                    <button type="button" id="newGrievanceBtn">+ New Grievance</button>
                </div>

                <!-- ── List View ── -->
                <div id="listView">
                  
                    <div class="g1">
                        
                        <div class="status">
                            <p>GRV-03</p>
                            <p class="pending">pending</p>
                            <p>Filed 26 Mar 2026</p>
                        </div>
                        <div class="reason">
                            <h2>Attendance mismatch in DS</h2>
                        </div>
                        <div class="detail">
                            My Attendance in DS shows 17 but i have attended 20 classes. Requesting correction.
                        </div>
                    </div>

                    <div class="g2">
                        <div class="status">
                            <p>GRV-02</p>
                            <p class="resolved">resolved</p>
                            <p>Filed 8 Mar 2026</p>
                        </div>
                        <div class="reason">
                            <h2>Library fine dispute</h2>
                        </div>
                        <div class="detail">
                            Charged fine for books returned on time. Requesting review.
                        </div>
                        <div class="reply">
                            <p>OFFICIAL REPLY</p>
                            <p>Now its fixed, thanks for informing.</p>
                        </div>
                    </div>

                    <div class="g3">
                        <div class="status">
                            <p>GRV-01</p>
                            <p class="progress">in progress</p>
                            <p>Filed 28 Feb 2026</p>
                        </div>
                        <div class="reason">
                            <h2>Other</h2>
                        </div>
                        <div class="detail">
                            Water cooler is not working in admin building.
                        </div>
                        <div class="reply">
                            <p>OFFICIAL REPLY</p>
                            <p>Query has been registered, we will look into it.</p>
                        </div>
                    </div>
                </div>

                 <!-- New Grievance Form View  -->
                <div id="formView" style="display:none;">
                    <div class="form-header">
                        <h1>New Grievance</h1>
                        <p>Fill in the details below to submit your complaint</p>
                    </div>

                    <div class="form-box">
                        <div class="form-group">
                            <label for="griv-type">Grievance Type</label>
                            <select id="griv-type">
                                <option value="">-- Select Type --</option>
                                <option value="attendance">Attendance</option>
                                <option value="library">Library</option>
                                <option value="exam">Exam / Results</option>
                                <option value="hostel">Hostel</option>
                                <option value="infrastructure">classes</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="griv-subject">Subject</label>
                            <input type="text" id="griv-subject" placeholder="Enter a short title for your grievance" />
                        </div>

                        <div class="form-group">
                            <label for="griv-desc">Description</label>
                            <textarea id="griv-desc" rows="5" placeholder="Describe your issue in detail..."></textarea>
                        </div>

                        <div class="form-error" id="formError" style="display:none;">
                            Please fill all fields before submitting.
                        </div>

                        <div class="form-actions">
                            <button id="cancelBtn">Cancel</button>
                            <button id="submitGrivBtn">Submit Grievance</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="grivence.js">
    </script>

</body>
</html>