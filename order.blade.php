<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
<style>
div{
    width: 12%;
    margin: 3%;
    display: inline-block;
    padding: 4%
}
img{
    width: 84%;
    margin-top: -50%;
    padding-bottom: 21%;
}
</style>
</head>
<body>
@php
$users = DB::select('select *from usertable');
@endphp

<br>
{{ Form::open(array('url' => 'saveorder')) }}
@foreach ($users ?? '' as $user)
<div>
<img src="{{asset('public/front/img/pizzahome.jpg')}}" alt="img not fouund"><br>
<input type="checkbox" name='{{ $user->nameuser}}'>
{{ $user->nameuser}} 
<br>
price :{{$user->phone}}
</div>
@endforeach
<br>
{!!form::label('location') !!}
{!!form::text('location','',['class'=>'form-control','placeholder'=>'loc']) !!}
{!!form::label('phone number') !!}
{!!form::text('phonenumber','',['class'=>'form-control','placeholder'=>'phone number']) !!}
{!! Form::submit('save ')  !!} 
{!! form::close()!!}
</body>
</html>