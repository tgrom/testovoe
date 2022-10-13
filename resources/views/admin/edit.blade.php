
@extends('layots.admin')
@section('title') Редактирование пользователя
@endsection
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактироваие данных пользователя<p style="color: #0b5ed7"> {{ $student->user_family. ' '. $student->user_name }}</p></h1>

    </div>
    <div class="raw">
        @include('inc.messages')

        <form method="post" action="{{ route('admin.students.update', ['student'=>$student]) }}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="user_family">Фамилия</label>
                <input type="text" class="form-control" name="user_family" id="user_family" value="{{ $student->user_family }}">
            </div>
            <div class="form-group">
                <label for="user_name">Имя и отчество</label>
                <input type="text" class="form-control @if($errors->has('user_name'))alert-danger @endif" name="user_name" id="user_name" value="{{ $student->user_name }}">
                @error('user_name') <strong style="color: Red">{{ $message }}</strong> @enderror
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $student->email }}">
            </div>
            <div class="form-group">
                <label for="country">Страна</label>
                <input type="text" class="form-control" name="country" id="country" value="{{ $student->country }}">
            </div>
            <div class="form-group">
                <label for="city">Город</label>
                <input type="text" class="form-control" name="city" id="city" value="{{ $student->city }}">
            </div>
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" class="form-control" name="login" id="login" value="{{ $student->login }}">
            </div>

            <div class="form-group">
                <label for="pass">Пароль</label>
                <input type="number" class="form-control" name="pass" id="pass" value="{{ $student->pass }}">
            </div>
            <br><br>
            <button type="submit" class="btn btn-success">Изменить</button>

        </form>
    </div>
@endsection


