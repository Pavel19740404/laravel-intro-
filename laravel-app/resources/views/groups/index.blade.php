<!DOCTYPE html>
<html>
<head><title>Группы</title></head>
<body>
    <h1>Список групп</h1>
    <a href="{{ route('groups.create') }}">Создать группу</a>
    <ul>
        @foreach($groups as $group)
            <li>
                <a href="{{ route('groups.show', $group) }}">{{ $group->title }}</a>
                ({{ $group->start_from }}, {{ $group->is_active ? 'Активна' : 'Неактивна' }})
            </li>
        @endforeach
    </ul>
</body>
</html>