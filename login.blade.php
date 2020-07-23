
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<h1>Sign In</h1>
{{ Form::open(array('url' => 'home')) }}
{!! Form::label('name', 'Name') !!}
{!! Form::text('name', '', ['class' => 'form-control','placeholder'=>'enter your name']) !!} <br>
{!! Form::label('email', 'Email') !!} 
{!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'email']) !!} <br>
{!! Form::submit('login')  !!} 
{!! Form::close() !!}
<div>
<button onclick="location.href='{{ url('insertpage') }}'">
     add pizza</button>
     <button onclick="location.href='{{ url('order') }}'">
     order</button>
</div>




</body>
</html>
