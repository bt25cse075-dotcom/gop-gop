<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="timetable.js"></script>
    <link rel="stylesheet" href="timetable.css">
</head>
<body>

<div class="root">

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
  <a class="nav-item " href="home.html">🏠 Home</a>
<a class="nav-item active" href="http://localhost/gop-gop/timetable/timetable.php">📅 Timetable</a>
<a class="nav-item" href="../attendance/attendance.html">📊 Attendance</a>
<a class="nav-item" href="../exams/exams.html">📄 Exam &amp; Results</a>
<a class="nav-item" href="http://localhost/gop-gop/grievence/grivence.php">📩 Grievance</a>
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
        <div class="week">WEEKLY TIMETABLE</div>
    <div class="sem">AY 2025-2026 Semester 2nd.Batch B1</div>
    </div>
    <div class="p-btns">
        <div class="p-btn btn" data-btn-num ="1">Monday</div>
        <div class="p-btn btn" data-btn-num ="2">Tuesday</div>
        <div class="p-btn btn" data-btn-num ="3">Wednesday</div>
        <div class="p-btn btn" data-btn-num ="4">Thursday</div>
        <div class="p-btn btn" data-btn-num ="5">Friday</div>
        
    </div>
 <div class="p-btn--1 schedule">

     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">09:00-10:00</th>
           <th class="th2">MTTDE</th>
           <th class="th3">by DR Daud ali</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory" ><p>theory</p></td>
         </tr>
       </table>
    
    </div>


     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">10:00-11:00</th>
           <th class="th2">Mechanical and Graphics</th>
           <th class="th3">by DR Anup Naik</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

<div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">11:00-12:00</th>
           <th class="th2">Applied Programming</th>
           <th class="th3">by MS Ruchira </th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

    
    <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1" >12:00-01:00</th>
           <th class="th2">BREAK</th>
           <th class="th3" rowspan="2">enjoy</th>
         </tr>
         <tr>
           
           <td class="td1" > mess</td>
           
         </tr>
       </table>
    </div>
    

       <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">01:00-02:00</th>
           <th class="th2">Data structure</th>
           <th class="th3">by Dr neha</th>
         </tr>
         <tr>
           
           <td class="td1"> seminar hall</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    </div>

    <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">02:00-03:00</th>
           <th class="th2">Applied Programming</th>
           <th class="th3">by MS Ruchira</th>
         </tr>
         <tr>
           
           <td class="td1"> room no 301</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    </div>
    


     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">03:00-05:00</th>
           <th class="th2">Data structure</th>
           <th class="th3">by Dr neha</th>
         </tr>
         <tr>
           
           <td class="td1"> lab 3</td>
           <td class="theory"><p>lab</p></td>
         </tr>
       </table>
    </div>
<hr>
 </div>





   <div class="p-btn--2 schedule">

     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">09:00-10:00</th>
           <th class="th2">MTTDE</th>
           <th class="th3">by DR Daud ali</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory" ><p>theory</p></td>
         </tr>
       </table>
    
    </div>


     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">10:00-11:00</th>
           <th class="th2">Mechanical and Graphics</th>
           <th class="th3">by DR Anup Naik</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

<div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">11:00-12:00</th>
           <th class="th2">MTTDE</th>
           <th class="th3">by DR Daud ali</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

    
    <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1" >12:00-01:00</th>
           <th class="th2">BREAK</th>
           <th class="th3" rowspan="2">enjoy</th>
         </tr>
         <tr>
           
           <td class="td1" > mess</td>
           
         </tr>
       </table>
    </div>
    
    <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">01:00-02:00</th>
           <th class="th2">Digital electronics</th>
           <th class="th3">by DR Rashmi rajan</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    </div>
    


     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">02:00-04:00</th>
           <th class="th2">Digital electronics</th>
           <th class="th3">by DR Rashmi rajan</th>
         </tr>
         <tr>
           
           <td class="td1"> electronics lab</td>
           <td class="theory"><p>lab</p></td>
         </tr>
       </table>
    </div>
<hr>
 </div>



   <div class="p-btn--3 schedule">

     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">10:00-11:00</th>
           <th class="th2">Digital electronics</th>
           <th class="th3">by DR Rashmi rajan</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

<div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">11:00-12:00</th>
           <th class="th2">Applied Programming</th>
           <th class="th3">by MS Ruchira </th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

    
    <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1" >12:00-01:00</th>
           <th class="th2">BREAK</th>
           <th class="th3" rowspan="2">enjoy</th>
         </tr>
         <tr>
           
           <td class="td1" > mess</td>
           
         </tr>
       </table>
    </div>
    

       <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">01:00-02:00</th>
           <th class="th2">Mecanics and graphic</th>
           <th class="th3">by DR Anup Naik</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    </div>
    


     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">02:00-04:00</th>
           <th class="th2">Communication</th>
           <th class="th3">by DR Madhuri tayade</th>
         </tr>
         <tr>
           
           <td class="td1"> Communication lab</td>
           <td class="theory"><p>lab</p></td>
         </tr>
       </table>
    </div>
<hr>
 </div>




   <div class="p-btn--4 schedule">

     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">09:00-10:00</th>
           <th class="th2">MTTDE</th>
           <th class="th3">by DR Daud ali</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory" ><p>theory</p></td>
         </tr>
       </table>
    
    </div>


     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">10:00-11:00</th>
           <th class="th2">Digital electronics</th>
           <th class="th3">by DR Rashmi rajan</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

<div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">11:00-12:00</th>
           <th class="th2">Data structure</th>
           <th class="th3">by Dr neha</th>
         </tr>
         <tr>
           
           <td class="td1"> seminar hall</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

    
    <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1" >12:00-01:00</th>
           <th class="th2">BREAK</th>
           <th class="th3" rowspan="2">enjoy</th>
         </tr>
         <tr>
           
           <td class="td1" > mess</td>
           
         </tr>
       </table>
    </div>
    

       <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">01:00-02:00</th>
           <th class="th2">Communication </th>
           <th class="th3">by DR Madhuri tayade</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    </div>

    
<hr>
</div>




   <div class="p-btn--5 schedule">

     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">10:00-11:00</th>
           <th class="th2">Communication </th>
           <th class="th3">by DR Madhuri tayade</th>
         </tr>
         <tr>
           
           <td class="td1"> hall 1</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

<div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">11:00-12:00</th>
           <th class="th2">Data structure</th>
           <th class="th3">by Dr neha</th>
         </tr>
         <tr>
           
           <td class="td1"> seminar hall</td>
           <td class="theory"><p>theory</p></td>
         </tr>
       </table>
    
    </div>

    
    <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1" >12:00-01:00</th>
           <th class="th2">BREAK</th>
           <th class="th3" rowspan="2">enjoy</th>
         </tr>
         <tr>
           
           <td class="td1" > mess</td>
           
         </tr>
       </table>
    </div>

    <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">01:00-03:00</th>
           <th class="th2">Applied Programming</th>
           <th class="th3"> by MS Ruchira </th>
         </tr>
         <tr>
           
           <td class="td1"> lab 10 admin</td>
           <td class="theory"><p>lab</p></td>
         </tr>
       </table>
    </div>
    


     <div class="timetable">
       <table>
         <tr>
           <th rowspan="2" class="th1">03:00-05:00</th>
           <th class="th2">Mecanics and graphic</th>
           <th class="th3"> by DR Anup Naik</th>
         </tr>
         <tr>
           
           <td class="td1"> Mecanics and graphic lab</td>
           <td class="theory"><p>lab</p></td>
         </tr>
       </table>
    </div>
<hr>
 </div></div>
 </div>

</body>
</html>
