<table class="table table-bordered">
    <thead>
    <tr>
        <th style="text-align: center; font-weight: bold; color: maroon">#ID</th>
        <th style="text-align: center; font-weight: bold; color: maroon">Фамилия</th>
        <th style="text-align: center; font-weight: bold; color: maroon">Имя Отчество</th>
        <th style="text-align: center; font-weight: bold; color: maroon">E-mail</th>
        <th style="text-align: center; font-weight: bold; color: maroon">Страна</th>
        <th style="text-align: center; font-weight: bold; color: maroon">Город</th>
        <th style="text-align: center; font-weight: bold; color: maroon">Логин</th>
        <th style="text-align: center; font-weight: bold; color: maroon">Пароль</th>



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

        </tr>

    @empty
        <tr>
            <td colspan="4">Записей нет</td>
        </tr>
    @endforelse
    </tbody>
</table>
