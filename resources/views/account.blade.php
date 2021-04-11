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
	
</head>
<body>
	<p>Hello</p>
   @if(isset(Auth::user()->email))
   
            <strong>Welcome {{ Auth::user()->email }}</strong>
            <br> <a href="{{ url('welcome/logout') }}">LogOut</a>
          
   <!-- else
         <script type="text/javascript">
         	window.location = "/GCtest2/public/welcome";
         </script> -->
   @endif
</body>
</html>