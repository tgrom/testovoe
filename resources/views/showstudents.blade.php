<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пользователи</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body>

<x-header></x-header>


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


