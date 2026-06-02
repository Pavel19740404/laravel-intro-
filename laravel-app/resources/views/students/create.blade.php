<!DOCTYPE html>
<html>
<head><title>Добавить студента</title></head>
<body>
    <h1>Добавить студента в группу {{ $group->title }}</h1>
    <form method="POST" action="{{ route('students.store', $group) }}">
        @csrf
        <p>
            <label>Фамилия: <input type="text" name="surname"></label>
        </p>
        <p>
            <label>Имя: <input type="text" name="name"></label>
        </p>
        <button type="submit">Добавить</button>
    </form>
    <a href="{{ route('groups.show', $group) }}">Назад</a>
</body>
</html>