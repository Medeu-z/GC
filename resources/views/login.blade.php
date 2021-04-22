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
  
     function LogInOn(){
         $("#overlay2").show();

    }
    function sout(){
       n  = window.location.href;
       window.location.href = n.substring(0, n.lastIndexOf('/')-8);
 /*         console.log(window.location.href = e)
   console.log() alert();
*/
   
    }
     function LogInOff(){
     /* window.location = "/GCtest2/public/welcome";*/
       /* $("#overlay2").hide();*/
        

    } function overA(){
        $("#overlay1").toggle();
        alert("We successfully subscribed!");

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





    <div id="overlay2" class="ov">
        <div class="bg1">
           <a onclick="sout()"><i  class="fa fa-close" style="color: black; float: right;"></i></a> 
         <!--  @if(isset(Auth::user()->email))
   
         <script type="text/javascript">
          window.location = "/GCtest2/public/welcome/success";
         </script>
   @endif
 -->

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

                    <button  id="lg" type="submit" name="login" class="btn btn-sm" onclick="LogInOn()">{{__('lang.login')}}</button></div>
                  
               <!--  <div><button  type="button" class="btn btn-sm"  onclick="LogInOff()">{{__('lang.cancle')}}</button></div> -->
            </div></form>
        </div>
    </div>

    </body>
</html>
