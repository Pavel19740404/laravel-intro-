<!DOCTYPE html>
<html>
<head><title>{{ $student->surname }} {{ $student->name }}</title></head>
<body>
    <h1>{{ $student->surname }} {{ $student->name }}</h1>
    <p>Группа: {{ $group->title }}</p>
    <p>Дата начала обучения: {{ $group->start_from }}</p>

    <a href="{{ route('groups.show', $group) }}">Назад к группе</a>
</body>
</html>