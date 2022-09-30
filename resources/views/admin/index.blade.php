@extends('layots.admin')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список пользователей</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('admin.students.create') }}" class="btn btn-sm btn-outline-secondary">Добавить пользователя</a>
            </div>

        </div>
    </div>
    <x-alert type="danger" message="Warning"/>
    <x-alert type="success" message="Успешено"/>
    <x-alert type="info" message="Info"/>
@endsection
