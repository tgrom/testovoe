@extends('layots.admin')
@section('header')
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Пользователи:</h1>

        </div>
    </div>
@endsection
@section('content')


@forelse($studentsList as $students)
    <div class="col">
        <div class="card shadow-sm">
            <div class="card-body">


                <strong><p><a href="{{ route('student.show', ['id' => $students['id']])}}">{{ $students['user_family']}}</p></a></strong>
                <strong><p><a href="{{ route('student.show', ['id' => $students['id']])}}">{{$students['user_name']}}</p></a></strong>
    <p>{{$students['email']}}</p>

    <hr>
    <br>

            </div>
        </div>
    </div>
@empty
    <h4>Пользователей нет</h4>

</div>

@endforelse
@endsection
