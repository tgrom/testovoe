@extends('layots.admin')
@section('content')
    <div>
        <h2>Добро пожаловать, {{ Auth::user()->name }}</h2>

    </div>
@endsection
