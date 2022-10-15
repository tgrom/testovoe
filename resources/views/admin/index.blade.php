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
    <div class="table-responsive">
        @include('inc.messages')
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Фамилия</th>
                    <th>Имя Отчество</th>
                    <th>E-mail</th>
                    <th>Страна</th>
                    <th>Город</th>
                    <th>Логин</th>
                    <th>Пароль</th>
                    <th>Опции</th>

                </tr>
            </thead>
                <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->user_family }}</td>
                        <td>{{ $student->user_name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->country }}</td>
                        <td>{{ $student->city }}</td>
                        <td>{{ $student->login }}</td>
                        <td>{{ $student->pass }}</td>
                        <td>
                            <a href="{{ route('admin.students.edit', ['student' => $student->id]) }}">Ред</a>
                            &nbsp;
                            <a href="javascript:;" class="delete" rel="{{ $student->id }} {{$student->user_family. ' '. $student->user_name}}" style="color: red">Удалить</a>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4">Записей нет</td>
                    </tr>
                @endforelse
                </tbody>
        </table>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

        <form method="post" enctype="multipart/form-data" action="{{ route('admin.import') }}">
            @csrf
            <input type="file" name="files" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" value="Импорт данных">
            <input type="submit" value="Импорт">

        </form>
            </div></div>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <a href="{{ route('admin.export') }}" class="btn btn-sm btn-outline-secondary">Скачать в Excel </a>
                </div>

            </div>
        </div>



        {{ $students->links() }}


    </div>
@endsection
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        const el = document.querySelectorAll(".delete");
        el.forEach(function(element, index) {
            element.addEventListener("click", function() {
                const id = this.getAttribute("rel");
                if(confirm(`Подтвердите удаление записи с #ID ${id}
                 Данную запись НЕЛЬЗЯ восстановить`)) {
                    //send id on backend
                    send(`/admin/students/${id}`).then(() => {
                        alert("Отлично! Все пропало :-)");
                        location.reload();
                    });
                }
            });
        });
    });
    async function send(url) {
        let response = await fetch(url, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                    .getAttribute('content')
            }
        });
        let result = await response.json();
        return result.ok;
    }
</script>
