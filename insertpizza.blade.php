<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertpizza</title>
</head>

<body>
    {{Form::open (array('url'=>'insert'))}}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('pizzaname','',['class'=>'form-control','placeholder'=>'pizza name'])!!} <br>
    {!! Form::label('price','price') !!}
    {!! Form::number('pricepizza')!!} <br>
    <textarea name="insertdoc" cols="20" rows="2"></textarea> <br>
    {!! Form::submit('save') !!}
    {!! form::close() !!}
</body>

</html>