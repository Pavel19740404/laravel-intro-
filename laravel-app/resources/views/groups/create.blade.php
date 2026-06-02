<!DOCTYPE html>
<html>
<head><title>Создать группу</title></head>
<body>
    <h1>Создать группу</h1>
    <form method="POST" action="{{ route('groups.store') }}">
        @csrf
        <p>
            <label>Название: <input type="text" name="title"></label>
        </p>
        <p>
            <label>Дата начала: <input type="date" name="start_from"></label>
        </p>
        <p>
            <label>Активна: <input type="checkbox" name="is_active" value="1"></label>
        </p>
        <button type="submit">Создать</button>
    </form>
    <a href="{{ route('groups.index') }}">Назад</a>
</body>
</html>