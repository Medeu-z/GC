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
            .inContainer1{
      margin: 15px 0 50px 0;
      display: flex;}
    .class1{
      border-radius: 4px;
      /*//box-shadow:  0 2px 3px hsl(0, 0%, 85%);*/
        box-shadow: 10px 20px 20px black;
      width: 95%;
      height: 60%;
      
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
main {
  margin: 0;
  padding: 10px;
  background-color: lightgray;
 
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
.browser hr{
  width: 60%;
  height: 10px;
  border-radius: 5px;
  margin-top: -15px;
 
  background-color: grey;
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
/*#selectAss{
  
  flex-direction: column;
}
#selectAss div{
   display:inline-flex;
    margin-top: 10px;
}
*/
.curDiv > input, p,select{
   width: 40%;
  /*display: none;*/
}
input , select{
   border-radius: 5px;
}

.curDiv{
    display:inline-flex;
    margin-top: 10px;
   
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
          function addCourseF(){
         /*   $("#addCourse").show();*/
            document.getElementById("addCourse").style.display = 'flex';
            document.getElementById("addCourseButton").style.display = 'none';
         
        /*  $("#addCourseButton").hide();*/

         }
         function closeAddC(){
           document.getElementById("addCourse").style.display = 'none';
           document.getElementById("addCourseButton").style.display = 'flex';
           document.getElementById("cn").value="";
           document.getElementById("assNumber").value="";
           document.getElementById("goal").value="";
           document.getElementById("image").value="";
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
    <div class="Container1" >
      <div class="inContainer1" >

              
<main class="class1" id="shadow"  style="flex-wrap: wrap;">
<!--  -->
<div>
  <h2>Course list
  <button type="button" class="btn btn-sml butt" id="addCourseButton" onclick="addCourseF()">Add Course</button></h2>
  <form action="{{  route('file.upload')}}" method = "post" enctype="multipart/form-data">
            {{ csrf_field() }}
  <div id="addCourse">
     <hr class="class4">
     
      <div class="curDiv"><input  type="Number" style="display: none;" id="userid" name="userid" value="{{ Auth::user()->id }}" required></div>
      <div class="curDiv"><input  type="Number" style="display: none;" id="curper" name="curper" value="0" required></div>
      <div class="curDiv"><p>Course Name:</p><input type="text" id="cn" name="course" required></div>
      <div class="curDiv"><p>Course Image:</p><input type="file"  id="photo" name="photo" value="Course Image" required></div>
      <div class="curDiv"><p>Number of Assessment methods:</p><input type="Number" id="assNumber" name="AssMethNum" max="10" min="2" required></div>  <div class="curDiv"><p>Your goal from this course:</p><input  type="Number" id="goal" name="goalPersent" max="100" min="0" required></div>
      <div style="display: inline-flex;margin-left: 60%;margin-top: 10px;">
         <button id = "add" type="submit" class="btn butt">Add</button>
         
      </div>
    </form>
      <hr class="class4">
    <!-- onclick="addCourseOne()" -->
        <h3>Assessment methods<i class="bi bi-plus-circle-fill" style="margin-left: 10px;"></i></h3>
       
      <div class="curDiv"><p>Assessment Name:</p> <select>
              <option></option>
              <option>Assignments</option>
              <option>Lab Works</option>
              <option>Project</option>
              <option>Quizzes</option>
              <option>Midterm Exam</option>
              <option>Final Exam</option>
            </select>
        
        </div>
      <div class="curDiv"><p>Number of selectde assessment methods:</p><input type="Number" id="SelassNumber" name="SelAssMethNum" min="0"></div>  <div class="curDiv"><p>How much weight from total:</p><input  type="Number" id="weight" name="WeightPersent" max="100" min="0"></div>
      <div style="display: inline-flex;margin-left: 60%;margin-top: 10px;">
         <button id = "add" type="button" class="btn butt"  onclick="">Add</button>
         <button type="button"  class="btn butt" onclick="closeAddC()">Close</button>
      </div>
     <!--  <hr class="class4">
 -->

 </div>
 <hr class="class4">
 <div id="art"></div>
  <div class="browser" >
     <h2>Course name</h2><hr>
     <div><h6>0</h6><h6>%</h6>
      <i class="bi bi-trash" style="margin-left: 50px;"></i></div>
  </div>
   <div class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6> <i class="bi bi-trash" style="margin-left: 50px;"></i></div>
  </div>
   <div class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6> <i class="bi bi-trash" style="margin-left: 50px;"></i></div>
  </div>
  </div>


<!-- 
  <div style="height: 500px;">
<hr class="class4">
  <h1>Course list
 <button type="button" class="btn btn-sml butt">Add Course</button> <hr class="class4"></h1>
  <article class="browser">
   <h2>Course name</h2><hr>
     <div><h6>0</h6><h6>%</h6></div>
 
  </article>
   <article class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6></div>
  </article>
   <article class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6></div>
  </article>
</div> -->
</main>
<script >
  function addCourseOne(){
          var article = document.createElement("div");
          article.classList.add("browser");
            var h = document.createElement("h2");
            var cname = document.getElementById("cn").value;
            h.innerHTML = cname;
          article.appendChild(h);
            var hr = document.createElement("hr");
           article.appendChild(hr);
            var div = document.createElement("div");
                 var hs = document.createElement("h6");
                     hs.innerHTML = "0";
            div.appendChild(hs);
                  var hso = document.createElement("h6");
                  hso.innerHTML = "%";
            div.appendChild(hso);
            var i = document.createElement("i");
                   i.classList.add("bi");
                   i.classList.add("bi-trash");
                   i.style.marginLeft="60px";
             div.appendChild(i);
          article.appendChild(div);  
          document.getElementById("shadow").appendChild(article); }
</script>
<!-- <div class="class1" id="shadow" >

  <h1>Course list
 <button type="button" class="btn btn-sml butt">Add Course</button> <hr class="class4"></h1>
  <article class="browser">
   <h2>Course name</h2><hr>
     <div><h6>0</h6><h6>%</h6></div>
 
  </article>
   <article class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6></div>
  </article>
   <article class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6></div>
  </article>
   <main class="class1" id="shadow" >

  <h1>Course list
 <button type="button" class="btn btn-sml butt">Add Course</button> <hr class="class4"></h1>
  <article class="browser">
   <h2>Course name</h2><hr>
     <div><h6>0</h6><h6>%</h6></div>
 
  </article>
   <article class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6></div>
  </article>
   <article class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6></div>
  </article>
</main>
   -->

          <!-- <div class="class4"  >

  <h1>Course list
 <button type="button" class="btn btn-sml butt">Add Course</button> <hr class="class4"></h1>
  <article class="browser">
   <h2>Course name</h2><hr>
     <div><h6>0</h6><h6>%</h6></div>
 
  </article>
   <article class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6></div>
  </article>
   <article class="browser">
    <h2>Course name </h2><hr>
    <div><h6>0</h6><h6>%</h6></div>
  </article>
</div> -->
          <div class="two1">
         
          <div class="class31 some1" id="ch23"><hr id="class3">
           <!--  <div class="w" style="margin-left: 60%;"><button class="btn"><i class="bi bi-gear" ></i> Settings</button></div> -->
            <div class="w"><p>User:</p><h6 id="FName" class="ch6">{{ Auth::user()->Fname }} {{ Auth::user()->Lname }}</h6></div><hr class="hrc">
            <div class="w"><p>Birhday:</p><h6 id="bd"  class="ch6">{{ Auth::user()->bday }}</h6></div><hr  class="hrc">
            <div class="w"><p>Email:</p><h6 id="Email"  class="ch6">{{ Auth::user()->email }}</h6></div><hr  class="hrc">
           
            <div style="display: none;" id="Settings">
               <button id ="update" type="button" class="btn butt" onclick="Update()">Update</button>
               <button id="delete" type="button"  class="btn butt" onclick="Delete()">Delete</button>
            </div>
          </div>
           <div class="class21 some1" id="ch24"> <hr id="class2">
                <table align="center" border="1">
                  <tbody>
                  <tr><th colspan="4" style="text-align: center;">GRADE</th></tr>
                  <tr align="center">
                    <th width="15%">In Percent</th>
                    <th width="15%">Alphabeti</th>
                    <th width="15%">In Points</th>
                    <th width="25%">Traditional</th>
                  </tr>
                  <tr align="center">
                   <td>95-100</td>
                   <td>A</td>
                   <td>4</td>
                   <td rowspan="2">Excellent</td>
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
                   <td rowspan="4">Good</td>
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
                   <td rowspan="4">Satisfactory</td>
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
                   <td rowspan="3">Unsatisfactory</td>
                  </tr>
                    <tr align="center">
                   <td>0-24</td>
                   <td>F</td>
                   <td>0</td>
                 </tr>
                </tbody>
                </table>
                  
               </div>    
         
       </div>
     </div>
     <div class="class1"  style="padding: 10px;">

  <h1>Course name
 <button type="button" class="btn btn-sml butt">Close</button> <hr class="class4"></h1>
 <div style="display: flex;flex-wrap: wrap;">
 <div style="width: 50%; margin-top: 50px;">
  <div class="w"><p>In Progress</p></div><hr class="hrc">
     <div class="w"><p>Number of Assigments:</p><h6 class="ch6">5</h6></div><hr class="hrc">
            <div class="w"><p>Your Goal:</p><h6 class="ch6">95%</h6></div><hr  class="hrc">
            <div class="w"><p>Current Grade</p><h6 class="ch6">0%</h6></div><hr  class="hrc">
 </div>
  <div>
    <canvas id="coursChart" width="500" height="250"></canvas>
  </div>
</div>
<div>
  <table border="2">
    <tr>
      <th>Lab Work 1</th>
      <th>Lab Work 2</th>
      <th>Lab Work 3</th>
      <th>MidTerm</th>
      <th>Project</th>
      <th>Final Exam</th>
    </tr>
    <tr>
      <td>5</td>
      <td>2</td>
      <td>4</td>
      <td>10</td>
      <td>20</td>
      <td>0</td>
    </tr>
  </table>
</div>
 <div>
     <canvas id="assChart" width="400" height="100"></canvas>
  </div>
  <div>
     <canvas id="CorProgChart" width="400" height="100"></canvas>
  </div>
</div><script type="text/javascript">
   var ctx = document.getElementById("coursChart");
   var myChart = new Chart(ctx, {
      type: 'pie',
         data: {
            labels: ["Final Exam", "Midterm" ,"Home Work","Project" , "Lab Work"],
            datasets: [
               { label: 'Assignments Methods',
               data: [40,15,5,15,30],
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
    var ctx = document.getElementById("assChart");
   var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels: ["Final Exam", "Midterm" ,"Home Work","Project" , "Lab Work"],
            datasets: [
               { label: 'Assignments Grades With Percent',
               data: [80,95,70,95,50],
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


   var ctx = document.getElementById("CorProgChart");
   var myChart = new Chart(ctx, {
    "type":"line",
    "data":{
      "labels":["January","February","March","April","May"],
       "datasets":[{"label":"Course Progress","data":[0,33,38,56,88],"fill":false,"boredrColor":"blue","lineTenstion":0.1
       }]},
    "options":{}
   });
</script>
  @endif
</body>
</html>