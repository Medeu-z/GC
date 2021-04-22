<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grade Calculator</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <link rel="icon"  type = "image/x-icon" href = " https://cdn2.iconfinder.com/data/icons/social-messaging-productivity-4/128/calculator3-512.png"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <style>
    body{
      background-color: hsl(0, 0%, 95%);
    }
    .inContainer1{
      margin: 15px 0 50px 0;
      display: flex;}
    .class1{
      border-radius: 4px;
      box-shadow: 10px 10px 20px black;
      width: 95%;
      height: 60%;
      padding-top: 30px;
      margin-bottom: 20px;
    }
    #ch24{
      box-shadow: 10px 10px 20px black;
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
      width: 350px;
      margin-left: 40px;
      margin-right: 50px;
      padding: 0 30px 30px 30px;
    }
    .some1 p{
      font-size: 15px;
      color: grey;}
    #b2{
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
      border-radius: 5px 5px 0px 0px;
      margin-top: 0px;
      margin-bottom: 25px;
      margin-left: -30px;
      height: 5px;
      width:350px;
      background: linear-gradient(to right,#555555 0, #CDC9C3 50%,#D9E4DD 100%);}
    #class3{
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

.class31{  
  box-shadow: 10px 10px 20px black; 
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
main {
  margin: 0;
  padding: 10px;
  background-color: lightgray;
 
}

.browser {
  box-shadow:"10px 20px 20px black";
  background: white;
  border-radius: 5px;
  margin: 10px;
  padding: 5px;
  height: 100px;
}

.browser > h2, p,h4,h6 {
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
.send h6{

}

.send div{
display: inline-flex;


}
.blank{
  display: inline-flex;
}
.curDiv > input,select{
   width: 60%;
}
.curDiv  p{
   width: 40%;
}
input , select{
   border-radius: 5px;
}

.curDiv{
    display:inline-flex;
    margin-top: 10px;
   
}
        </style>
        <script >
            function langChan(e){
         n  = window.location.href;
          console.log(window.location.href = e)

        }
          function addCourseF(){
        
            document.getElementById("addCourse").style.display = 'flex';
            document.getElementById("addCourseButton").style.display = 'none';
            document.getElementById("addClose").style.display = 'flex';

         }
         function opset(){
          document.getElementById("settings").style.display = 'flex';
          document.getElementById("si").style.display = 'flex';
         }
        
         function clset(){
          document.getElementById("settings").style.display = 'none';
          document.getElementById("si").style.display = 'none';
         }
          function opset2(e){
          document.getElementById("settings2").style.display = 'flex';
          document.getElementById("si2").style.display = 'flex';
          
         }
        
         function clset2(){
          document.getElementById("settings2").style.display = 'none';
          document.getElementById("si2").style.display = 'none';
         }
        
         function closeAddC(){
         
           document.getElementById("addClose").style.display = 'none';
           document.getElementById("addCourse").style.display = 'none';
           document.getElementById("addCourseButton").style.display = 'flex';
           document.getElementById("cn").value="";
           document.getElementById("assNumber").value="";
           document.getElementById("goal").value="";
           document.getElementById("image").value="";
           
         }

            
             n  = window.location;
  
    
        </script>
</head>
<body>
  @if(isset(Auth::user()->email))
<div class="header">
  <a href="#default" class="logo"><img src="https://cdn2.iconfinder.com/data/icons/social-messaging-productivity-4/128/calculator3-512.png" width="25px" height="25px" style="margin-top: -9px; margin-left: 5px;">Grade Calculator</a>
  <div class="header-right"> 
   
    <a href="{{ url('welcome/logout') }}"><i class="bi bi-box-arrow-right"></i>{{__('lang.lo')}}</a>
  </div>
</div>
  
      <div class="inContainer1 Container1" >

<main class="class1" id="shadow"  style="flex-wrap: wrap;">
 <hr class="class4">


<?php $servername = 'localhost';
$username = 'root';
$password = '';
$dbase = 'gctest';
$uid = Auth::user()->id;
$conn = new MySQLi ($servername, $username, $password, $dbase);
if ($conn->connect_error){
    die ("Unable to connect: ". $dbconn->connect_error);
    }
$sql = "SELECT * FROM users where is_admin = 'No'";
    
       $result = $conn->query($sql); 
       if($result->num_rows > 0){
          while ($row = $result->fetch_array()){
                $id = $row['id'];
                $fname = $row['Fname'];
                $lname = $row['Lname'];
                $bday = $row['bday'];
                $email = $row['email'];
               
                
              ?>
      

  <div class="browser" >
     <p style="width: 80%; margin-left: 5px;">
      ID: <?php echo $id ?><br>
      User: <i><?php echo $fname ?> <?php echo $lname ?></i><br>
      <h6>Email: <a href=""><?php echo $email ?></a></h6>
      <h6>B'Day: <?php echo $bday ?></h6></p>
   
     <div id="fi">
           <button  class="btn butt"style="margin-left: -50px;margin-top: -25px;" onclick="opset2('<?php echo $id ?>')">update</button> 
   </div>


 </div> 
<i onclick="clset2()" id="si2"class="fa fa-close" style="color: black; float: right;margin-right: 10px;display: none;background-color: " ></i>
<div class="Settings" id="settings2" style="display: none;flex-direction: column;margin-bottom: 100px;" >
        <h4>{{__('lang.uai')}}</h4>
        <div id="fl">
           
        <form action="{{  route('uupa')}}" method = "post" >
            {{ csrf_field() }}

            <div> <hr class="class4"></div>
            <input  type="Number" style="display: none;" id="userid3" name="userid" value="<?php echo $id ?>" required>
            <div class="curDiv"><p>{{__('lang.fn')}}</p><input type="text" name="Fname" value="<?php echo $fname ?>" required></div><br>
            <div class="curDiv"><p>{{__('lang.ln')}}</p><input type="text" name="Lname" required></div><br>
            <div class="curDiv"><p style="margin-right: 52px;">{{__('lang.bd')}}</p><input type="date" name="bday" value="<?php echo $lname ?>" required></div><br>
            <div class="curDiv"><p style="margin-right: 20px;">{{__('lang.email')}}</p><input type="email" name="email" value="<?php echo $email ?>" required></div><br>
            <div class="curDiv"><p style="margin-right: 10px;">{{__('lang.psw')}}</p><input  type="text" id="pwd" name="password" required></div><br>
          
            <div><button  type="submit" class="btn butt" style="float: right;">{{__('lang.uinf')}}</button></div>  
        </form>     
          <form action="{{  route('dupa')}}" method = "get" >
            {{ csrf_field() }}
            <input style="display: none;" type="Number" name="userid" value="" required>
      <button  type="submit" class="btn"style="margin-left: 20px;margin-top: 0px; float: right;"><i class="bi bi-trash" ></i></button>
    </form> 
        </div>

       <hr class="class4">
  </div>

                
              <?php

            } 
       }


       ?>


  


</main>

    <div class="two1">
         
        <div class="class31 some1" id="ch23"><hr id="class3">
          <div class="w"><p>Admin:</p><h6 id="FName" class="ch6">{{ Auth::user()->Fname }} {{ Auth::user()->Lname }}</h6></div><hr class="hrc">
         
          <div class="w"><p>Email:</p><h6 id="Email"  class="ch6">{{ Auth::user()->email }}</h6></div><hr  class="hrc">
            
          <h3>Messeges</h3>
          <div class="msg" style="width: 100%;background-color: lightgrey;padding: 5px;">

            <div class="sending">
             <!--  <h5>Send message <button class="btn"><i class="bi bi-plus-circle-fill"></i></button></h5>
              <div style="background-color: white;border-radius: 5px;padding: 5px;">
                 <form action="{{  route('sendm')}}" id="usrform" method="post">
                     {{ csrf_field() }}
                     <input type="email" name="from" style="display: none;" value="{{ Auth::user()->email }}" required>
                    Name: <input type="email" name="to" style="width: 160px; margin-bottom: 5px;border-color:lightgrey; " required>
                    <input type="submit" value="Send" class="butt">
                    <textarea rows="4" cols="34" name="sms" required>
                     Enter text here...</textarea>
              </div>
                          
                  </form>
              <br>    -->   
              <div class="msg" style="width: 100%;background-color: lightgrey;padding: 5px;">
                    <h4 style="margin: 10px;">ToYou_</h4><hr class="hrc">

               
             <?php $servername = 'localhost';
              $username = 'root';
              $password = '';
              $dbase = 'gctest';
              $em = Auth::user()->email;
              $conn = new MySQLi ($servername, $username, $password, $dbase);
              if ($conn->connect_error){
              die ("Unable to connect: ". $dbconn->connect_error);
               }
              $sql2 = "SELECT * FROM msgs where tou = '$em'";
    
              $result2 = $conn->query($sql2)or die("Last error: {$conn->error}\n");
              $rows = $result->num_rows; 
              if($rows > 0){
              while ($row = $result2->fetch_array()){
                $id = $row['id'];
                $from = $row['fromu'];
                $to = $row['tou'];
                $sms = $row['sms'];
              
                
              ?>

                <div style="background-color: white;border-radius: 5px;padding: 5px;display: flex;margin: 10px;flex-direction: column;">

                    <div> <h6>From: <a href=""><i style="margin-left: 5px;"><?php echo $from ?> </i></a></h6> 
                      <form action="{{  route('senddel')}}" method = "get" >
                       {{ csrf_field() }}
                        <input type="Number" name="smsid" value="<?php echo $id ?>" style="display: none;" required>
                        <button  type="submit" class="btn"style="margin-left: 20px;margin-top: -16px; float: right;"><i class="bi bi-trash" ></i></button>
                            <br>
                          </form>
                    </div>
                    <div style="background-color: lightblue;border-radius:5px;font-size:13px;padding: 5px;"><?php echo $sms ?></div>
              </div>
             

 <?php

            } 
       }


       ?>


               </div>
          </div>
    </div></div></div>
        @endif   
</body>
</html>