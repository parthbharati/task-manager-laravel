<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Task</title>
</head>
<body style="background: linear-gradient(to right, #e0e7ff, #fbcfe8); font-family: Arial;">

<div style="max-width:400px; margin:80px auto; background:white; padding:25px; border-radius:12px; box-shadow:0 10px 25px rgba(0,0,0,0.1);">

    <h2 style="text-align:center; margin-bottom:20px;">➕ Add Task</h2>

    <form action="/tasks" method="POST">
        @csrf

        <label style="font-weight:bold;">Title</label><br>
        <input type="text" name="title" placeholder="Enter title"
               value="{{ old('title') }}"
               style="width:100%; padding:10px; margin-top:5px; border:1px solid #ccc; border-radius:6px;">

        @error('title')
        <p style="color:red; font-size:14px;">{{ $message }}</p>
        @enderror

        <br>

        <label style="font-weight:bold;">Description</label><br>
        <textarea name="description" placeholder="Enter description"
                  style="width:100%; padding:10px; margin-top:5px; border:1px solid #ccc; border-radius:6px;">{{ old('description') }}</textarea>

        @error('description')
        <p style="color:red; font-size:14px;">{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit"
                style="width:100%; background:#2563eb; color:white; padding:10px; border:none; border-radius:6px; cursor:pointer;">
            Add Task
        </button>
    </form>

</div>

</body>

</body>
</html>