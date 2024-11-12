<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Task List Search -->
        <h2>Task List</h2>
        <form class="form-inline mb-4">
            <input type="text" class="form-control mr-2" placeholder="Search tasks..." aria-label="Search tasks">
        </form>
        <p>© 2024 Rock High School Task Management System</p>

        <!-- Create an Account Section -->
        <h3>Create an Account</h3>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            <p><a href="login.php">Already have an account? Login here.</a></p>
        </form>

        <!-- Create Task Section -->
        <h3>Create Task</h3>
        <form action="add_task.php" method="POST">
            <div class="form-group">
                <label for="task_name">Task Name</label>
                <input type="text" id="task_name" name="task_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="assign_to">Assign To</label>
                <input type="text" id="assign_to" name="assign_to" class="form-control">
            </div>
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input type="date" id="deadline" name="deadline" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="priority">Priority</label>
                <select id="priority" name="priority" class="form-control">
                    <option value="High">High</option>
                    <option value="Medium">Medium</option>
                    <option value="Low">Low</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Add Task</button>
        </form>
    </div>
</body>
</html>
