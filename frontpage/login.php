<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form class="vertical-form">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <button type="submit">Login</button>
        </form>
    </div>
    <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            window.location.href = "index.html";
        }
    </script>
</body>
</html>