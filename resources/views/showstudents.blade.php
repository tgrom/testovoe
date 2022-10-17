
@extends('layots.admin')
@section('title') Подробнее
@endsection
@section('content')

    <strong>Подробнее о пользователе:</strong>
    <br><br>


    <div class="students">
        <p>{{$students['user_family']}}</p>
        <p>{{$students['user_name']}}</p>
        <p>{{$students['email']}}</p>
        <p>{{$students['country']}}</p>
        <p>{{$students['city']}}</p>
        <p>{{$students['login']}}</p></a>
        <p>{{$students['password']}}</p>
        <hr>
        <br>

    </div>
@endsection



