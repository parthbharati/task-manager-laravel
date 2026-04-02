<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(to right, #e0e7ff, #fbcfe8);">

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">✏️ Edit Task</h2>

        <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control"
                       value="{{ $task->title }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4">{{ $task->description }}</textarea>
            </div>

            <button class="btn btn-success">Update Task</button>
        </form>
    </div>
</div>

</body>
</html>