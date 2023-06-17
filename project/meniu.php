<?php include 'php/referer.php'; ?>
<!-- <?php include 'php/erorrs.php'; ?> -->
<?php include 'php/add_url.php'; ?>


<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea House</title>
    <link rel="stylesheet" href="css/meniu.css">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <script src="javascript/stoc.js"></script>
    <script src="js/toCart.js"></script>
</head>

<body>
    <div class="container">
        <nav>
            <div class="site-logo">
                <img src="imagini/logo-teahouse.png" alt="logo" width="60" height="60">
            </div>
            <div class="navigare">
                <ul>
                    <li><a href="index.php">Acasă</a></li>
                    <li><a href="meniu.html">Meniu</a></li>
                    <li><a href="evenimente.php">Evenimente</a></li>
                    <li><a href="despre.php">Despre</a></li>
                    <li><a href="ajutor.php">Ajutor</a></li>
                    <li><a href="rezervari.php">Rezervări</a></li>
                </ul>
                <div class="cart-icon">
                    <a href="cos.php"><i class="ri-shopping-cart-2-line" style="font-size: 1.5em;"></i></a>
                </div>
            </div>
        </nav>
        <main>
            <div class="container-main">
                <h1 class="hr-lines">CEAI</h1>
                <div id="meniu-container-ceai" class="meniu-container-ceai"></div>

                <h1 class="hr-lines">CAFEA</h1>
                <div id="meniu-container-cafea" class="meniu-container-cafea"></div>

                <h1 class="hr-lines">CEVA RECE</h1>
                <div id="meniu-container-ceva-rece" class="meniu-container-ceva-rece"></div>

                <h1 class="hr-lines">DESERT</h1>
                <div id="meniu-container-desert" class="meniu-container-desert"></div>
            </div>
        </main>
    </div>
    <div class="container_footer">
        <footer>
            <h3>Program:</h3>
            <p>Luni: 09:00-22:00</p>
            <p>Marți: 09:00-22:00</p>
            <p>Miercuri: 09:00-22:00</p>
            <p>Joi: 09:00-22:00</p>
            <p>Vineri: 09:00-22:00</p>
            <p>Sâmbătă: 09:00-22:00</p>
            <p>Duminică: 09:00-22:00</p>
        </footer>
    </div>
    <script src="javascript/stoc.js"></script>
    <script>
        fetchData();
    </script>
</body>

</html>
