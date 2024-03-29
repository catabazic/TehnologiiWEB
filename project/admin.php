
<?php include "php/welcome.php" ?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea House</title>
    <link rel="stylesheet" href="css/admin.css">
    <script src = "javascript/unpayed_commands.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav>
            <div class="site-logo">
                <img src="imagini/logo-teahouse.png" alt="logo" width="60" height="60">
            </div>
            <div class="navigare">
              <ul>
                <li><a href="php/logout.php">Logout</a></li>
              </ul>
            </div>
        </nav>
        
        <main>
        <div class = "container-main">
            <table class = "shopping-table">
                <tbody id = "data">
                </tbody>
            </table>

        </div>
        </main>
    </div>
</body>

</html>


