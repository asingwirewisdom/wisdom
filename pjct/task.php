<!-- task.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tasks</h1>
        <form id="taskForm" class="form-inline">
            <input type="text" id="taskInput" class="form-control mr-2" placeholder="Add a new task">
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>

        <ul id="taskList" class="list-group mt-3"></ul>
    </div>

    <script src="script.js"></script>
</body>
</html>
