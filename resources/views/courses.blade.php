<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grade Calculator</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!--   <link rel="stylesheet" type="text/css" href="{{ asset('css/acc.css')}}"> -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="icon"  type = "image/x-icon" href = " https://cdn2.iconfinder.com/data/icons/social-messaging-productivity-4/128/calculator3-512.png"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <style >
            body{
             background-color: hsl(0, 0%, 95%);
            }
           
    .class1{
      border-radius: 4px;
      /*//box-shadow:  0 2px 3px hsl(0, 0%, 85%);*/
        box-shadow: 10px 20px 20px black;
      width: 95%;
      height: 60%;
      
  padding: 10px;
  background-color: white;
      padding-top: 30px;
      margin-bottom: 20px;
        }
    
        #ch24{
           box-shadow: 10px 20px 20px black;
        }
        .class4{
        
          margin-bottom: 5px;
          width: 100%;
          background-color: grey;
        }
        .some1{
      border-radius: 5px;
      background-color: white;
      box-shadow:  0 2px 3px hsl(0, 0%, 85%);
     /* height: 240px;*/
      width: 350px;
      margin-left: 40px;
      margin-right: 50px;
      padding: 0 30px 30px 30px;
    }
    .some1 p{
         font-size: 15px;
      color: grey;}
    #b2{/*less .button1;*/
      background-color: #4F1AC6;
      width: 90%;
      height: 15%;
      color: white;}
    #b1{
      background-color: white;
      width: 90%;
      height: 15%;
      border: 2px solid #E6E2F3;
      margin-bottom: 15px;}

    #class2{
      /*.hr;*/
            border-radius: 5px 5px 0px 0px;
      margin-top: 0px;
      margin-bottom: 25px;
      margin-left: -30px;
      height: 5px;
      width:350px;
      background: linear-gradient(to right,#555555 0, #CDC9C3 50%,#D9E4DD 100%);}
    #class3{
      /*.hr;*/
            border-radius: 5px 5px 0px 0px;
      margin-top: 0px;
      margin-bottom: 25px;
      margin-left: -30px;
      height: 5px;
      width: 350px;
      background: linear-gradient(to right,#555555 0, #CDC9C3 50%,#D9E4DD 100%);}
    
  
      .hrc{
        margin-top: -8px;
        
      }
      
      .w{
        display: flex;
        margin-bottom: 5px;

      }
      .Container1{

        padding-left: 10%;
        padding-right: 1%;

      }
    /*  ok*/
      .two1{
         
        display: flex;
        flex-wrap: wrap;
      }
    
@media only screen and (max-width: 1200px){
  
  .inContainer1{
    flex-wrap: wrap;
  }
}
@media only screen and (max-width: 600px) {
 
  .class1{
    margin-left: 30px;
  }
 }


/*del up*/
.class31{  
  box-shadow: 10px 20px 20px black; 
  padding-right: 25px;
  margin-bottom: 20px;}
.ch6{
  margin-left: 12px;
  margin-top: 2px;
}
.header {
  overflow: hidden;
  background-color: hsla(0, 0%, 0%, 0.3);
  padding: 10px 100px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}


/*main > h1, p, .browser {
  font-size: 90%;
}
*/
.browser {
  box-shadow:"10px 20px 20px black";
  background: white;
  border-radius: 5px;
  margin: 10px;
  padding: 5px;

}

.browser progress{
  width: 55%;
  height: 15px;
 /* border-radius: 5px;*/
  margin-top: -10px;
 
 }
.browser h6{
  margin-top: -8px;"
}
.browser > h2, p,h4 {
  margin: 4px;
  font-size: 90%;
}
.browser div{
  display: flex;
  margin-left: 82%;
  margin-top: -32px;
}
.butt{
  background-color: black;
  color: white;
  float: right;
  margin-right: 10px;
}
#addCourse{
  display: none;
  flex-direction: column;
}
#addAss{
  display: none;
  flex-direction: column;
}
/*#selectAss{
  
  flex-direction: column;
}
#selectAss div{
   display:inline-flex;
    margin-top: 10px;
}
*/
.curDiv > input, p,select{
   width: 30%;
  /*display: none;*/
}
input , select{
   border-radius: 5px;
}

.curDiv{
    display:flex;
    margin-top: 10px;
   
}
.curDiv h6{
  width: 20%;
   margin-right: 3px;
    margin-left: 3px;
   
}
        </style>
       <!--  <script type="text/javascript">
             function mouseover(id){
        
        if(document.getElementById(id).style.boxShadow == "lightblue 10px 10px 10px"){
            d=false;
        }else{ d=true;document.getElementById(id).style.boxShadow = "10px 20px 20px black";}
         

    } /*"0px 0px 0px black"*/
    function mouseout(id){
    if(d==true){
    document.getElementById(id).style.boxShadow = "10px 20px 20px black";  
    }

    }
        </script> -->
        <script >
        
         function addAssF(){
         /*   $("#addCourse").show();*/
         document.getElementById("u").style.display = 'none';
            document.getElementById("addAss").style.display = 'flex';
            document.getElementById("addAssButton").style.display = 'none';
          document.getElementById("addUButton").style.display = 'none';
          document.getElementById("addClose").style.display = 'flex';
        /*  $("#addCourseButton").hide();*/

         }
         function addUF(){
         /*   $("#addCourse").show();*/
            document.getElementById("u").style.display = 'flex';
            document.getElementById("addAssButton").style.display = 'none';
             document.getElementById("addUButton").style.display = 'none';
          
          document.getElementById("addClose").style.display = 'flex';
        /*  $("#addCourseButton").hide();*/

         }
          function closeAddC(){
          document.getElementById("addAss").style.display = 'none';
            document.getElementById("addAssButton").style.display = 'flex';
             document.getElementById("addUButton").style.display = 'flex';
          document.getElementById("u").style.display = 'none';
           document.getElementById("addClose").style.display = 'none';
          
           /*document.getElementById("pwd").value="";*/
         }
        

                 /* 
                  <article class="browser">
     <h2>Course name</h2><hr>
     <div><h6>0</h6><h6>%</h6>
      <i class="bi bi-trash" style="margin-left: 70px;"></i></div>
  </article>
                 div.style.width="80%";
                  div.style.display="inline-flex";
                  
                   div.appendChild(i); 

                   var pa = document.createElement("textarea");  
                   pa.style.width="100%";
                   pa.style.height="50px";
                   pa.style.marginLeft="50px";
                   pa.disabled = true;
                  
                   var com = document.getElementById("comments").value;
                   pa.innerHTML = com;                
                   div.appendChild(pa); */
                 
    
        </script>
</head>
<body>
  @if(isset(Auth::user()->email))
<div class="header">
  <a href="#default" class="logo"><img src="https://cdn2.iconfinder.com/data/icons/social-messaging-productivity-4/128/calculator3-512.png" width="25px" height="25px" style="margin-top: -9px; margin-left: 5px;">Grade Calculator</a>
  <div class="header-right"> 
    <a href=""><i class="bi bi-file-earmark-text"></i>About Us</a>
    <a href=""><i class="bi bi-gear"></i> Settings</a>
    <a href="{{ url('welcome/logout') }}"><i class="bi bi-box-arrow-right"></i>LogOut</a>
  </div>
</div>

    

           <div class="inContainer1" style="flex-direction: column; padding: 10px; margin-top: 100px; margin-left: 100px;">
   
<div class="class1 main" id="shadow"  style="flex-wrap: wrap;">
<!--  -->
<h2>Assesment list
  <button type="button" class="btn btn-sml butt" id="addUButton" onclick="addUF()">Update Assessments</button>
  <button type="button" class="btn btn-sml butt" id="addAssButton" onclick="addAssF()">Add Assessments</button>
    <button type="button"  class="btn butt" onclick="closeAddC()" style="display: none;" id="addClose">Close</button></h2>
    

          @if($message = Session::get('info'))
          <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
          </div>
          @endif
    
    <form method="POST" action="http://localhost/GCtest2/public/store" >
    {{ csrf_field() }} <hr class="class4">
      <div id="addAss" > 
     <h3>Assessment methods<i class="bi bi-plus-circle-fill" style="margin-left: 10px;"></i></h3>
     
   <div class="curDiv" style="display: none;"><p>Course ID:</p><input type="Number" name="idcourse" value="<?php echo $nameC ?>"></div>
     <div class="curDiv"><p>Assessment Name:</p><select  name="selecto" required>
              <option></option>
              <option>Assignments</option>
              <option>Lab Works</option>
              <option>Project</option>
              <option>Quizzes</option>
              <option>Midterm Exam</option>
              <option>Final Exam</option>
            </select></div>
    <div class="curDiv"><p>How much weight from total:</p> <input type="Number" name="weight"></div>
    <input type="submit" value="Add" style="width: 10%;margin-left: 90%;">
     <hr class="class4"> </div>
  </form>
     
       
 <div style="display: none; flex-direction: column;" id="u">
<?php $servername = 'localhost';
$username = 'root';
$password = '';
$dbase = 'gctest';
$uid = Auth::user()->id;
$conn = new MySQLi ($servername, $username, $password, $dbase);
if ($conn->connect_error){
    die ("Unable to connect: ". $dbconn->connect_error);
    }
$sql = "SELECT * FROM assessments where courses_id = $nameC";
    
       $result = $conn->query($sql); 
       if($result->num_rows > 0){
           
          while ($row = $result->fetch_array()){
                $id = $row['id'];
                $name = $row['AssName'];
                $per = $row['PerFromTotal'];
                 $cper = $row['CurentPer'];
               
                
              ?>
       

   <div style="width: 100%; background-color: lightgrey;"> 
    
    <form action="{{  route('upd')}}" method = "get"> {{ csrf_field() }}
      <div class="curDiv" style="padding-top: 10px;"><h6>Assessment Method Name:</h6><select  name="selectu" required>
              <option><?php echo $name ?></option>
              <option>Assignments</option>
              <option>Lab Works</option>
              <option>Project</option>
              <option>Quizzes</option>
              <option>Midterm Exam</option>
              <option>Final Exam</option>
            </select></div>
    <div class="curDiv"><h6>Weight from total:</h6> <input type="Number" name="weightu" value="<?php echo $per ?>"required></div>
    <div class="curDiv"><h6>Current Percent:</h6> <input type="Number" name="cweightu" value="<?php echo $cper ?>"required></div>
    <input style="display: none;" type="Number" name="asidu" value="<?php echo $id; ?>" required>
       <input style="display: none;" type="Number" name="cidu" value="<?php echo $nameC; ?>" required>
       <input type="submit" value="Update" style="margin-left: 53%; margin-top: -25px;">
  </form>
   
    <div class="curDiv" style="margin-left: 60%;margin-top: -30px;">
      <form action="{{  route('del')}}" method = "get"> {{ csrf_field() }}
      <input style="display: none;" type="Number" name="asid" value="<?php echo $id; ?>" required>
       <input style="display: none;" type="Number" name="cid" value="<?php echo $nameC; ?>" required>
      <button  type="submit" class="btn"><i class="bi bi-trash"></i></button>
    
   </form></div>
   <hr class="class4" style="background-color: black;">
   </div> 
            

                
              <?php

            } 
       }


       ?>
</div>


  



</div>
         
<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbase = 'gctest';
$uid = Auth::user()->id;
$conn = new MySQLi ($servername, $username, $password, $dbase);
if ($conn->connect_error){
    die ("Unable to connect: ". $dbconn->connect_error);
    }
$sql = "SELECT * FROM courses where id = $nameC";
    
       $result = $conn->query($sql); 
      if($result->num_rows > 0){
           
          while ($row = $result->fetch_array()){
                $id = $row['id'];
                $na = $row['numOfAss'];
                $name = $row['CourseName'];
                $img = $row['CourseImage'];
                $per = $row['CurentPer'];
                $goal = $row['Goal'];
                ?>
              
     <div class="class1"  style="padding: 10px;" id="<?php echo $id ?>">
             <h1><?php echo $name ?>   
             <button type="button" class="btn btn-sml butt">Close</button> <hr class="class4"></h1>
            <div style="display: flex;flex-wrap: wrap;">
              <div style="width: 50%; margin-top: 50px;">
                <div class="w"><p>In Progress</p></div><hr class="hrc">
                <div class="w"><p>ID:</p><h6 class="ch6"><?php echo $nameC ?></h6></div><hr class="hrc">
                <div class="w"><p>Number of Assigments:</p><h6 class="ch6"><?php echo $na ?></h6></div><hr class="hrc">
                <div class="w"><p>Your Goal:</p><h6 class="ch6"><?php echo $goal ?>%</h6></div><hr  class="hrc">
                <div class="w"><p>Current Grade</p><h6 class="ch6"><?php echo $per ?>%</h6></div><hr  class="hrc">
              </div>
              <div>
                <canvas id="<?php echo $id ?>Chart1" width="500" height="250"></canvas>
              </div>
            </div>
            <div>

                <table border="2" id="dataTable">
                 <thead> <?php $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbase = 'gctest';
                        $uid = Auth::user()->id;
                        $conn = new MySQLi ($servername, $username, $password, $dbase);
                         if ($conn->connect_error){
                         die ("Unable to connect: ". $dbconn->connect_error);
                         }
                        $sql = "SELECT * FROM assessments where courses_id = $nameC";
                        $result = $conn->query($sql); 
                        if($result->num_rows > 0){  
                        while ($row = $result->fetch_array()){      
                        $name = $row['AssName'];   $cper = $row['CurentPer'];   
              ?>
                   
                    <th style="width: 200px; text-align: center; padding:5px;"><?php echo $name ?></th>
                     
                  
              <?php

            } 
       }
       ?></thead><tbody> <tr>
        <?php $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbase = 'gctest';
                        $uid = Auth::user()->id;
                        $conn = new MySQLi ($servername, $username, $password, $dbase);
                         if ($conn->connect_error){
                         die ("Unable to connect: ". $dbconn->connect_error);
                         }
                        $sql = "SELECT * FROM assessments where courses_id = $nameC";
                        $result = $conn->query($sql); 
                        if($result->num_rows > 0){  
                        while ($row = $result->fetch_array()){      
                        $name = $row['AssName'];   $cper = $row['CurentPer']; 
              ?>
     <td style="width: 200px; text-align: center; padding:5px;"><?php echo $cper?></td>
     
      <?php

            } 
       }
       ?>
   </tr>
 <tr>
        <?php $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbase = 'gctest';
                        $uid = Auth::user()->id;
                        $conn = new MySQLi ($servername, $username, $password, $dbase);
                         if ($conn->connect_error){
                         die ("Unable to connect: ". $dbconn->connect_error);
                         }
                        $sql = "SELECT * FROM assessments where courses_id = $nameC";
                        $result = $conn->query($sql); 
                        if($result->num_rows > 0){  
                        while ($row = $result->fetch_array()){      
                        $name = $row['AssName'];  $per = $row['PerFromTotal'];
              ?>
     
     <td style="width: 200px; text-align: center; padding:5px; display: none;"><?php echo $per?></td>
      <?php

            } 
       }
       ?>
   </tr></tbody>
  </table>
</div>
 
 <div>
     <canvas id="<?php echo $id ?>Chart2" width="400" height="100"></canvas>
  </div>
  <div>
     <canvas id="<?php echo $id ?>Chart3" width="400" height="100"></canvas>
  </div>
</div><!--    -->

<script type="text/javascript">

 
  var table = document.getElementById('dataTable');
var json = [];
var json1 = []; // First row needs to be headers 
var headers =[];
for (var i = 0; i < table.rows[0].cells.length; i++) {
  headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase();
 
}

// Go through cells 
for (var i = 1; i < table.rows.length-1; i++) {
  var tableRow = table.rows[i];
  
  /* console.log(table.rows[1].cells[i].innerHTML.toLowerCase());*/
    
  var rowData = {};
  for (var j = 0; j < tableRow.cells.length; j++) {
    rowData[headers[j]] = tableRow.cells[j].innerHTML;
     json1[j] = tableRow.cells[j].innerHTML;
     console.log(json1[j]);
  }

 
}
for (var i = 2; i < table.rows.length; i++) {
  var tableRow = table.rows[i];
  
  /* console.log(table.rows[1].cells[i].innerHTML.toLowerCase());*/
    
  var rowData = {};
  for (var j = 0; j < tableRow.cells.length; j++) {
    rowData[headers[j]] = tableRow.cells[j].innerHTML;
     json[j] = tableRow.cells[j].innerHTML;
     console.log(json[j]);
  }

 
}





   

   var ctx = document.getElementById("<?php echo $id ?>Chart1");
   var myChart = new Chart(ctx, {
      type: 'pie',
         data: {
            labels:headers,
            datasets: [
               { label: 'Assignments Methods',
               data: json,
               backgroundColor :['#C0E8D5 ',
               '#FFE4C4',
               '#FFFF99',
               '#6F4E37'
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
    var ctx = document.getElementById("<?php echo $id ?>Chart2");
   var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels:headers,
            datasets: [
               { label: 'Assignments Grades With Percent',
               data: json1,
               backgroundColor :['rgba(255, 129, 102, 0.4)',
               'rgba(234, 162, 235, 0.4)',
               'rgba(255, 206, 36, 0.4)',
               'rgba(75, 192, 192, 0.4)',
               'rgba(153, 102, 255, 0.4)'
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});


   var ctx = document.getElementById("<?php echo $id ?>Chart3");
   var myChart = new Chart(ctx, {
    "type":"line",
    "data":{
      "labels":["January","February","March","April","May"],
       "datasets":[{"label":"Course Progress","data":[0,33,38,56,88],"fill":false,"boredrColor":"blue","lineTenstion":0.1
       }]},
    "options":{}
   });
</script>
 
        <?php 
       }}?>    </div>
  @endif
</body>
</html>