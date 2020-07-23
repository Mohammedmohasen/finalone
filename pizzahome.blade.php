<!DOCTPE html>
<html>
<head>
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
<title>home </title>
<link rel="shortcut icon" href="{{asset('public/front/img/pizzahome.jpg')}}" type="image/x-icon">
<style>
</style>
</head>
<body>
@php
$users = DB::select('select *from usertable');
@endphp
@foreach ($users ?? '' as $user)
<div>
<img src="{{asset('public/front/img/pizzahome.jpg')}}" alt="img not fouund"><br>
name : {{ $user->nameuser}} <br>
phone:  {{ $user->phone}}
</div>
@endforeach
@include('login');

</body>
</html>
