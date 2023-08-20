<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 style ="font-size: 30px;margin: 20px; font-weight: bold; ">Add Task</h1>
    <form action="/add_task" method="POST" enctype="multipart/form-data">
      @csrf

        <div class="mb-3">
            <label for="task_name" class="form-label">Task Name</label>
            <input type="text" class="form-control" id="task_name"
                                    name="name">
        </div>   

        <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <input type="text" class="form-control" id="desc"
                            name="desc">
        </div> 
                
            <button type="submit" class="btn btn-primary">Add Task</button>
    </form>

  <h1>task list</h1>
        <table style="text-align:center; width:100vw;">
          <tr>
            <th>id</th>
            <th>task name</th>
            <th>task description</th>
            <th>action</th>
          </tr>
        @foreach ($tasks as $task)
        <tr>
          <td> {{ $task->id }}</td>
          <td>{{ $task->task_name }}</td>
          <td>{{ $task->task_desc }}</td>
          <td><a href="delete_task/{{ $task->id }}">delete</a></td>
        </tr>
        @endforeach
        </table>

  </body>
</html>