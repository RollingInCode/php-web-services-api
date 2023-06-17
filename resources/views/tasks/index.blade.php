<!DOCTYPE html>
<html>
<body>

<h1>Task List</h1>

@foreach ($tasks as $task)
    <p>{{ $task->name }}</p>
@endforeach

</body>
</html>
