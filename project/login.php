<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea House</title>
    <link rel="stylesheet" href="css/login.css">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav>
            <div class="site-logo">
                <img src="imagini/logo-teahouse.png" alt="logo" width="60" height="60">
            </div>
            
        </nav>
        <div class = "container-main">
            <h2>Login</h2>
        <form action="php/login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        </div>
        <main>
        </main>
    </div>
    <script src="javascript/stoc.js"></script>
    <script>
        fetchData();
    </script>
</body>

</html>


