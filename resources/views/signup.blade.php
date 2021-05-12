
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
      
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script>
  
    function overA(){
        $("#overlay1").toggle();
        alert("We successfully subscribed!");

    }
    function sout(){
       n  = window.location.href; 
              window.location.href = n.substring(0, n.lastIndexOf('/')-15) + n.substring(n.lastIndexOf('/'));
     
 /*   console.log() alert();
*/
   
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
        

      
</script>
        <style >
            body{
                background: url('{{ asset('image/rsz_w81.jpg') }}');
            }
        </style>
    </head>
    <body>




    <div id="overlay1" class=" ov" >
        <div id="bg" class="bg1">
            <h6>{{__('lang.fill')}}</h6>
            <hr style="background-color:black; height: 0.5px; margin-top: -5px; ">
             
 @if(count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach(@errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            @if($message = Session::get('info'))
            
           <div class="alert alert-danger alert-block">
            <strong id="text">{{__('lang.fb')}}</strong>
         </div>
         @endif
        
          <a  onclick="sout()"><i  class="fa fa-close" style="color: black; float: right;"></i></a>
        <form action="{{  route('file.ins')}}" method = "post" >
            {{ csrf_field() }}
        
            <div class="blank"><p>{{__('lang.fn')}}</p><input type="text" name="Fname" required></div>
            <div class="blank"><p>{{__('lang.ln')}}</p><input type="text" name="Lname" required></div>
            <div class="blank"><p>{{__('lang.bd')}}</p><input type="date" name="bday"  required></div>
            <div class="blank"><p>{{__('lang.email')}}</p><input type="email" name="email" required></div>
            <div class="blank"><p>{{__('lang.psw')}}</p><input  type="text" id="pwd" name="password" required>
            <i class="far fa-eye-slash" id="togglePassword" onclick="togglePassword()"></i></div>
            <div class="sign_log_buttons"> 
                <div><button  type="submit" class="btn btn-sm" >{{__('lang.sign')}}</button></div>
               
            </div> 
        </form>     
        </div>
    </div>

<script>
 /*href="{{  route('sout') }}"$("#su").click(function(event){
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
                $('.success').text(response.success);
                $("#ajaxform")[0].reset();     
                alert('success');
       }
        }
     })

 })
*/


   // $(function(){
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




</script>


    </body>
</html>
