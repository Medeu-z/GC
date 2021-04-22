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
}

.browser progress{
  width: 55%;
  height: 15px;
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
    function acc(e){
      
       window.location = n+"/acc/"+e;
       
    }    
    
        </script>
</head>
<body>
  @if(isset(Auth::user()->email))
<div class="header">
  <a href="#default" class="logo"><img src="https://cdn2.iconfinder.com/data/icons/social-messaging-productivity-4/128/calculator3-512.png" width="25px" height="25px" style="margin-top: -9px; margin-left: 5px;">Grade Calculator</a>
  <div class="header-right"> 
    <a href=""><i class="bi bi-file-earmark-text"></i>{{__('lang.main')}}</a>
    <a onclick="opset()"><i class="bi bi-gear"></i>{{__('lang.sett')}}</a>
    
          <a>  <select style="background-color: transparent;width: 100px;" onchange="langChan(this.value)">
                <option>{{__('lang.l')}}</option>
                <option value="{{ url('/welcome/success/kz/') }}">KZ</option>
                <option value="{{ url('/welcome/success/ru/') }}">RU</option>
                <option value="{{ url('/welcome/success/eng/') }}">ENG</option>
            </select>  
        </a>
        
    <a href="{{ url('welcome/logout') }}"><i class="bi bi-box-arrow-right"></i>{{__('lang.lo')}}</a>
  </div>
</div>
  
      <div class="inContainer1 Container1" >

<main class="class1" id="shadow"  style="flex-wrap: wrap;">


<i onclick="clset()" id="si"class="fa fa-close" style="color: black; float: right;margin-right: 10px;display: none;background-color: " ></i>
<div class="Settings" id="settings" style="display: none;flex-direction: column;margin-bottom: 100px;" onclick="opset()">
        <h4>{{__('lang.uai')}}</h4>
        <div id="fl">
           
        <form action="{{  route('uup')}}" method = "post" >
            {{ csrf_field() }}

            <div> <hr class="class4"></div>
            <input  type="Number" style="display: none;" id="userid2" name="userid" value="{{ Auth::user()->id }}" required>
            <div class="curDiv"><p>{{__('lang.fn')}}</p><input type="text" name="Fname" required></div><br>
            <div class="curDiv"><p>{{__('lang.ln')}}</p><input type="text" name="Lname" required></div><br>
            <div class="curDiv"><p style="margin-right: 52px;">{{__('lang.bd')}}</p><input type="date" name="bday"  required></div><br>
            <div class="curDiv"><p style="margin-right: 20px;">{{__('lang.email')}}</p><input type="email" name="email" required></div><br>
            <div class="curDiv"><p style="margin-right: 10px;">{{__('lang.psw')}}</p><input  type="text" id="pwd" name="password" required></div><br>
          
            <div><button  type="submit" class="btn butt" style="float: right;">{{__('lang.uinf')}}</button></div>  
        </form>     
        <form action="{{  route('dup')}}" method = "get" >
            {{ csrf_field() }}

            <input  type="Number" style="display: none;" id="userid" name="userid" value="{{ Auth::user()->id }}" required>
            <div><button  type="submit" class="btn butt" style="float: right;">{{__('lang.dacc')}}</button></div>    
        </form>     
        </div>

       <hr class="class4">
  </div>







<div>
  <h2>{{__('lang.listc')}}
    <button type="button" class="btn btn-sml butt" id="addCourseButton" onclick="addCourseF()">{{__('lang.addc')}}</button>
    <button type="button"  class="btn butt" onclick="closeAddC()" style="display: none;" id="addClose">{{__('lang.close')}}</button>
  </h2>
  <form action="{{  route('file.upload')}}" method = "post" enctype="multipart/form-data">
            {{ csrf_field() }}
    <div id="addCourse">
     <hr class="class4">
     
      <div class="curDiv"><input  type="Number" style="display: none;" id="userid1" name="userid" value="{{ Auth::user()->id }}" required></div>
      <div class="curDiv"><input  type="Number" style="display: none;" id="curper" name="curper" value="0" required></div>
      <div class="curDiv"><p>{{__('lang.namec')}}</p><input type="text" id="cn" name="course" required></div>
      <div class="curDiv"><p>{{__('lang.img')}}</p><input type="file"  id="photo" name="photo" value="Course Image" required></div>
      <div class="curDiv"><p>{{__('lang.nass')}}</p><input type="Number" id="assNumber" name="AssMethNum" max="30" min="2" required></div>  <div class="curDiv"><p>{{__('lang.cgoal')}}</p><input  type="Number" id="goal" name="goalPersent" max="100" min="0" required></div>
      <div style="display: inline-flex;margin-left: 60%;margin-top: 10px;">
         <button id = "add" type="submit" class="btn butt">{{__('lang.add')}}</button>
         
      </div>
  </form> 
</div>
     

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
$sql = "SELECT * FROM courses where users_id = $uid";
    
       $result = $conn->query($sql); 
       if($result->num_rows > 0){
           
          while ($row = $result->fetch_array()){
                $id = $row['id'];
                $name = $row['CourseName'];
                $img = $row['CourseImage'];
                $per = $row['CurentPer'];
               
                
              ?>
      
<a   style="color: black;text-decoration: none;" onclick="acc('<?php echo $id; ?>')"> 

  <div class="browser" >
      <?php 
       
         echo ' <img src="http://localhost/GC/public/image/' . $row['CourseImage'] . '" height="49px" width="50px" style="border-radius: 25px;margin-bottom: 5px;"/>';
     ?>
     
     <label for="fi" style="width: 15%; margin-left: 5px;"><?php echo $name ?>: <?php echo $id ?></label>
    <progress id="fi" value="<?php echo $per ?>" max="100"></progress>
     <div><h6><?php echo $per ?></h6><h6>%</h6>
      <form action="{{  route('file.dell')}}" method = "POST" enctype="multipart/form-data"> {{ csrf_field() }}
      <input style="display: none;" type="Number" name="cid" value="<?php echo $id; ?>" required>
      <button  type="submit" class="btn"style="margin-left: 20px;margin-top: -25px;"><i class="bi bi-trash" ></i></button>
    </form>
   </div>
  </div>

</a>
                
              <?php

            } 
       }


       ?>


  


</main>

          <div class="two1">
         
          <div class="class31 some1" id="ch23"><hr id="class3">
         
            <div class="w"><p>{{__('lang.user')}}</p><h6 id="FName" class="ch6">{{ Auth::user()->Fname }} {{ Auth::user()->Lname }}</h6></div><hr class="hrc">
            <div class="w"><p>{{__('lang.bd')}}</p><h6 id="bd"  class="ch6">{{ Auth::user()->bday }}</h6></div><hr  class="hrc">
            <div class="w"><p>Email:</p><h6 id="Email"  class="ch6">{{ Auth::user()->email }}</h6></div><hr  class="hrc">
           
          </div>









           <div class="class21 some1" id="ch24"> <hr id="class2" style="width:121%">
                <table align="center" border="1" >
                  <tbody>
                  <tr style="width: 90%;"><th colspan="4" style="text-align: center;">{{__('lang.grade')}}</th></tr>
                  <tr align="center">
                    <th width="15%">{{__('lang.inpr')}}</th>
                    <th width="15%">{{__('lang.alph')}}</th>
                    <th width="15%">{{__('lang.inpo')}}</th>
                    <th width="25%">{{__('lang.tr')}}</th>
                  </tr>
                  <tr align="center">
                   <td>95-100</td>
                   <td>A</td>
                   <td>4</td>
                   <td rowspan="2">{{__('lang.ex')}}</td>
                  </tr>
                   <tr align="center">
                   <td>90-94</td>
                   <td>A-</td>
                   <td>3.67</td>
                  </tr>
                   <tr align="center">
                   <td>85-89</td>
                   <td>B+</td>
                   <td>3.33</td>
                   <td rowspan="4">{{__('lang.go')}}</td>
                  </tr>
                   <tr align="center">
                   <td>80-84</td>
                   <td>B</td>
                   <td>3</td>
                  </tr>
                   <tr align="center">
                   <td>75-79</td>
                   <td>B-</td>
                   <td>2.67</td>
                  </tr>
                   <tr align="center">
                   <td>70-74</td>
                   <td>C+</td>
                   <td>2.33</td>
                  </tr>
                   <tr align="center">
                   <td>65-69</td>
                   <td>C</td>
                   <td>2</td>
                   <td rowspan="4">{{__('lang.sat')}}</td>
                  </tr>
                   <tr align="center">
                   <td>60-64</td>
                   <td>C-</td>
                   <td>1.67</td>
                  </tr>
                   <tr align="center">
                   <td>55-59</td>
                   <td>D+</td>
                   <td>1.33</td>
                  </tr>
                   <tr align="center">
                   <td>50-54</td>
                   <td>D</td>
                   <td>1</td>
                  </tr>
                   <tr align="center">
                   <td>25-49</td>
                   <td>FX</td>
                   <td>0</td>
                   <td rowspan="3">{{__('lang.unsat')}}</td>
                  </tr>
                    <tr align="center">
                   <td>0-24</td>
                   <td>F</td>
                   <td>0</td>
                 </tr>
                </tbody>
                </table>
                   
         
    


           <br><br><hr class="hrc">
           <h3>Messeges</h3>
            <div class="msg" style="width: 100%;background-color: lightgrey;padding: 5px;">

             <div class="sending">
             @if($message = Session::get('info'))
          <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
          </div>
          @endif
              
               <form action="{{  route('sendm')}}" id="usrform" method="post">
                {{ csrf_field() }}
                <input type="email" name="from" style="display: none;" value="{{ Auth::user()->email }}" required>
                    <input type="email" value="190103138@stu.sdu.edu.kz" name="to" style="display: none;" required>
                     <h5>Send message to admin</h5><input type="submit" value="Send" class="butt" style="margin-top: -35px;">
                    <textarea rows="4" cols="34" name="sms" required>
                     Enter text here...</textarea></div>
                          
                          </form>
                  <br>
                    
            
               </div>  
     </div>

  @endif
</body>
</html>