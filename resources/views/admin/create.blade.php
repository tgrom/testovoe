
@extends('layots.admin')
@section('title') Добавление пользователя
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Новый пользователь</h1>

    </div>
    <div class="raw">
        @include('inc.messages')

        <form method="post" action="{{ route('admin.students.store') }}">
            @csrf
            <div class="form-group">
                <label for="user_family">Фамилия</label>
                <input type="text" class="form-control" name="user_family" id="user_family" value="{{ old('user_family') }}">
            </div>
            <div class="form-group">
                <label for="user_name">Имя и отчество</label>
                <input type="text" class="form-control" name="user_name" id="user_name" value="{{ old('user_name') }}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="country">Страна</label>
                <input type="text" class="form-control" name="country" id="country" value="{{ old('country') }}">
            </div>
            <div class="form-group">
                <label for="city">Город</label>
                <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}">
            </div>
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" class="form-control" name="login" id="login" value="{{ old('login') }}">
            </div>

            <div class="form-group">
                <label for="pass">Пароль</label>
                <input type="number" class="form-control" name="pass" id="pass" value="{{ old('pass') }}">
            </div>
            <br><br>
            <button type="submit" class="btn btn-success">Добавить</button>

        </form>
    </div>
@endsection

