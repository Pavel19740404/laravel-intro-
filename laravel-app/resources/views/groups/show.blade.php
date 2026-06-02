<!DOCTYPE html>
<html>
<head><title>{{ $group->title }}</title></head>
<body>
    <h1>{{ $group->title }}</h1>
    <p>Дата начала: {{ $group->start_from }}</p>
    <p>Статус: {{ $group->is_active ? 'Активна' : 'Неактивна' }}</p>

    <h2>Студенты</h2>
    <a href="{{ route('students.create', $group) }}">Добавить студента</a>
    <ul>
        @foreach($group->students as $student)
            <li>
                <a href="{{ route('students.show', [$group, $student]) }}">
                    {{ $student->surname }} {{ $student->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('groups.index') }}">Назад к списку групп</a>
</body>
</html>