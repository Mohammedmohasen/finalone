<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
$weather = new Weather("EGKK");
$metar = $weather->latest_metar();
@endphp
@foreach ($users ?? '' as $user)
<div>
<img src="{{asset('public/front/img/pizzahome.jpg')}}" alt="img not fouund"><br>
name : {{ $user->passworduser}} <br>
phone:  {{ $user->phone}}
</div>
@endforeach
<button onclick="location.href='{{ url('history') }}'">
add pizza</button>
</body>
</html>
