<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tasks</title>
    @vite('resources/css/app.css')
</head>
<body style="background: linear-gradient(to right, #e0e7ff, #fbcfe8); font-family: Arial;">

<div style="max-width:600px; margin:60px auto; background:white; padding:25px;">

    <h2 style="text-align:center;">🚀 Task Manager</h2>
     @if(session('success'))
<p style="color:green; text-align:center;">
    {{ session('success') }}
</p>
@endif
    <div style="text-align:center; margin:15px 0;">
        <a href="/tasks/create"
   style="background:#2563eb; color:white; padding:8px 15px; border-radius:6px; text-decoration:none; transition:0.3s;"
   onmouseover="this.style.background='#1d4ed8'"
   onmouseout="this.style.background='#2563eb'">
           + Add Task
        </a>
    </div>

    {{-- success message --}}
    

    {{-- empty state --}}
    @if($tasks->isEmpty())
<p style="text-align:center; color:gray; font-size:18px;">
    😴 No tasks yet <br> Start by adding one!
</p>
@endif

    @foreach($tasks as $task)
        <div style="border:1px solid #ddd; padding:15px; border-radius:10px; margin-bottom:10px; transition:0.3s;"
     onmouseover="this.style.boxShadow='0 5px 15px rgba(0,0,0,0.1)'"
     onmouseout="this.style.boxShadow='none'">
            <h3>{{ $task->title }}</h3>
            <p style="color:gray;">{{ $task->description }}</p>

            <a href="/tasks/{{ $task->id }}/edit"
               style="background:#facc15; padding:5px 10px; border-radius:5px; text-decoration:none;">
               Edit
            </a>

            <form action="/tasks/{{ $task->id }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Delete this task?')"
                        style="background:#ef4444; color:white; padding:5px 10px; border:none; border-radius:5px;">
                    Delete
                </button>
            </form>
        </div>
    @endforeach

</div>

</body>
</html>