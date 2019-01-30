<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{--select--}}
    {{--@foreach($qwe as $s)--}}
        {{--<li>{{$s->name}}</li>--}}
    {{--@endforeach--}}
    {{--<hr color="red">--}}

    {{--insert--}}
    {{--<div>--}}
        {{--ето добавление--}}
        {{--<form action="/add" method="post">--}}
            {{--@csrf--}}
            {{--<input type="text" name="a1" value="wwwwww">--}}
            {{--<input type="submit" value="do it">--}}
        {{--</form>--}}
    {{--</div>--}}
    {{--<hr color="red">--}}

    {{--delete--}}
    {{--<div>--}}
        {{--ето удаление с условием--}}
        {{--<form action="/del" method="post">--}}
            {{--@csrf--}}
            {{--<input type="text" name="a2">--}}
            {{--<input type="submit" value="do it">--}}
        {{--</form>--}}
    {{--</div>--}}
    {{--<hr color="red">--}}

    {{--select--}}
    <div>
        ето выборка с условием
        <form action="/s" method="get">
            @csrf
            <input type="text" name="a3">
            <input type="submit" value="do it">
        </form>
    </div>

    @foreach($e as $q)
        <li>{{$q->created_at}}</li>
    @endforeach

</body>
</html>