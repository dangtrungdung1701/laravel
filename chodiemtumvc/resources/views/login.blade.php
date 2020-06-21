<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="{{url('login')}}" method="POST" role="form">
    <p> 
     Email: <input type="text" name="email" id="email" placeholder="Please enter your email"/>
     @if($errors->has('email'))
        <p style="color:red">{{$errors->first('email')}}</p>
     @endif 
    <p/>
    <p>
     Password: <input type="password" name="password" id="password" placeholder="Please enter your password"/> 
     @if($errors->has('password'))
        <p style="color:red">{{$errors->first('password')}}</p>
     @endif
     <p/>
    <input value="Login" type="submit">
    {!! csrf_field() !!}
<form/>
</body>
</html>