Список пользователей:
<?php foreach ($studentsList as $students): ?>

<div class="students">
    <p><?=$students['user_family']?></p>
    <p><?=$students['user_name']?></p>
    <p><?=$students['email']?></p>
    <p><?=$students['country']?></p>
    <p><?=$students['city']?></p>
    <p><a href="<?=route('student.show', ['id' => $students['id']])?>"> <?=$students['login']?></p></a>
    <p><?=$students['password']?></p>
    <hr>
    <br>

</div>

<?php endforeach; ?>