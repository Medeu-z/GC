<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grade Calculator</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}" >
        <link rel="icon"  type = "image/x-icon" href = " https://cdn2.iconfinder.com/data/icons/social-messaging-productivity-4/128/calculator3-512.png"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script>
      n  = window.location.href;
    function SingnUpOn(){
      
       window.location = n+"/welcome/signup";
       /*  $("#overlay1").show();*/
    }
    function LogIn(){
       /*n  = window.location.href;*/
          window.location = n+"/welcome/login";

    }
    
    
    function togglePassword() {
    var togglePassword = document.querySelector('#togglePassword');
    var password = document.querySelector('#pwd');
    var type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
}
        function langChan(e){
         n  = window.location.href;
          console.log(window.location.href = e)

        }
         function getMSG(){
    $.ajax({
        type:'POST',
        url:'getmsg',
        data:'_token = <?php echo csrf_token()?>',
        success:function(data){
            var s = data.s;
            alert(s);
        }

    });
}
      
</script>
        <style >
            body{
                background: url('{{ asset('image/rsz_w81.jpg') }}');
            }
        </style>
    </head>
    <body>

    <div class="Welcome">
       <div class="lang">
            <select style="background-color: transparent;" onchange="langChan(this.value)">
                <option>{{__('lang.l')}}</option>
                <option value="{{ url('/kz/') }}">KZ</option>
                <option value="{{ url('/ru/') }}">RU</option>
                <option value="{{ url('/eng/') }}">ENG</option>
            </select>  
        </div>
        
           <!--  <p style="color: grey">ABOUT AS</p> --><hr>
        <div style="text-align: center; width:100%; color: #fff;padding: 5px;">
            <h2>Grades Calculated</h2>

        </div>
        <hr> <div style="text-align: center;"><h4>{{__('lang.welcome')}}</h4></div>
        <div class="about_us">
            <div style="text-align: center;"> 

                <p>{{__('lang.question')}}</p>
                <h6 style="color: #666666;">{{__('lang.goal')}}</h6>
            </div>
            <div>
                <img src="{{URL::asset('/image/GGc1.png')}}" height="80%" width="90%"  onclick="getMSG()">
            </div>
        </div> 
    
        <div style="margin-top: 10%; text-align: center;" class="typewriter">
            <h6>{{__('lang.motivation')}}</h6><br>
            
        </div>
        <div id="sign_log">
            <button id = "sign_up" type="button" class="btn" onclick="SingnUpOn()">{{__('lang.sign')}}</button>
            <button id="log_in" type="button"  class="btn" onclick="LogIn()">{{__('lang.login')}}</button>
        </div>
           
    </div>
<!-- 

    <div id="overlay1" class="ov1 ov" >
        <div id="bg" class="bg1">
            <h6>{{__('lang.fill')}}</h6>
            <hr style="background-color:black; height: 0.5px; margin-top: -5px; ">
            <i  class="fa fa-close" style="color: black; float: right;" onclick="SingnUpOff()" ></i>
        <form action="http://localhost/GCtest2/public/insert" method = "post" >
            {{ csrf_field() }}
            <div class="blank"><p>{{__('lang.fn')}}</p><input type="text" name="Fname" required></div>
            <div class="blank"><p>{{__('lang.ln')}}</p><input type="text" name="Lname" required></div>
            <div class="blank"><p>{{__('lang.bd')}}</p><input type="date" name="bday"  required></div>
            <div class="blank"><p>{{__('lang.email')}}</p><input type="email" name="email" required></div>
            <div class="blank"><p>{{__('lang.psw')}}</p><input  type="text" id="pwd" name="password" required>
            <i class="far fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i></div>
            <div class="sign_log_buttons"> 
                <div><button  type="submit" class="btn btn-sm" >{{__('lang.sign')}}</button></div>
                <div><button  type="button" class="btn btn-sm"  onclick="SingnUpOff()">{{__('lang.cancle')}}</button></div> 
            </div> 
        </form>     
        </div>
    </div>

<script>
 $("#su").click(function(event){
    event.preventDefault();
      let Fname = $("input[name=Fname]").val();
      let Lname = $("input[name=Lname]").val();
      let bday = $("input[name=bday]").val();
      let email = $("input[name=email]").val();
      let password = $("input[name=password]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

     $.ajax({
         url: "/insert",
         type:"POST",
        data:{
          Fname:Fname,
          Lname:Lname,
          bday:bday,
          email:email,
          password:password,
          _token: _token
        },
        success:function(response){
            console.log(response);
            if(response){
              /*  $('.success').text(response.success);
                $("#ajaxform")[0].reset(); */    
                alert('success');
       }
        }
     })

 })


</script> -->

  <!--  // $(function(){
        /*$.ajaxSetup({
         headers: { 'X-CSRF-Token' : '{{csrf_token()}}'}
        });*/
        /*$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });*/
      /*  $('#accForm').submit(function(e){
            e.preventDefault();
            console.log('submit')

            var data = $(this).serialize();
           

            console.log(data);

            $.ajax({
                url:'get',
                method:'POST',
                data:'_token = <?php //echo csrf_token()?>'
                success:function(response){
                  if(response.success){
                  alert(response.message) //Message come from controller
              }else{
                  alert("Error")
              }
                },
                error:function(error){
                    console.log(error)
                }
            });
           /* var data = $(this).serialize();
            var url = '{{url('user')}}'
           
            $.ajax({
                url:url,
                method:'POST',
                data:data*/
              
        
       // });*//
    //});*/
 -->






<!-- 
    <div id="overlay2" class="ov ov2">
        <div class="bg1">
            <i  class="fa fa-close" style="color: black; float: right;" onclick="LogInOff()" ></i>
          @if(isset(Auth::user()->email))
   
         <script type="text/javascript">
          window.location = "welcome/success";
         </script>
   @endif


          @if($message = Session::get('error'))
          <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
          </div>
          @endif




            @if(count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach(@errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <form method="post" action="{{ url('/welcome/checkLogin')}}">
              {{ csrf_field() }}
            <div class="blank"><p>{{__('lang.email')}}</p><input type="email" name="email"></div>
            <div class="blank"><p>{{__('lang.psw')}}</p><input  type="password" id="pwdLog" name="password" required></div>
            <div  class="sign_log_buttons">
                <div>

                    <button  id="lg" type="submit" name="login" class="btn btn-sm">{{__('lang.login')}}</button></div>
              
            </div></form>
        </div>
    </div> -->

    </body>
</html>
