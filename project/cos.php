<?php include 'php/referer.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name = "viewport" content ="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea House</title>
    <link rel="stylesheet" href="css/cos.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class = "container">
        <nav>
            <div class="site-logo">
              <img src="imagini/logo-teahouse.png" alt="logo" width="60" height="60">
            </div>
            <div class="navigare">
              <ul>
                <li><a href="index.php">Acasă</a></li>
                <li><a href="meniu.php">Meniu</a></li>
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
            <div class = "container-main">
                <div class = "form-table-container">
                    <div class = "tabel">
                        <h4>Cos de cumparaturi</h4>
                        <table class = "shopping-table">
                            <tbody>
                                <tr>
                                    <td class = "imagine-produs"><img src = "imagini/cappucino.jpg" alt = "cappucino" width = "50" height="50"></td>
                                    <td class = "nume-produs">Cappucino<p>Espresso + 150 ml cremă lapte</p></td>
                                    <td class = "cantitate"><input type="number" value="1"></td>
                                    <td class = "pret">9lei</td>
                                    <td><button class="remove"><img src = "imagini/trashcan.png" alt = "trashcan" width="30" height="30"></button></td>
                                </tr>
                                <tr>
                                    <td class = "imagine-produs"><img src = "imagini/summer_tea.jpg" alt = "summer_tea" width = "50" height="50"></td>
                                    <td class = "nume-produs">Summer Passion<p>Ceai verde, mango, ananas, muguri de trandafir 350 ml</p></td>
                                    <td class = "cantitate"><input type="number" value="1"></td>
                                    <td class = "pret">15lei</td>
                                    <td><button class="remove"><img src = "imagini/trashcan.png" alt = "trashcan" width="30" height="30"></button></td>
                                </tr>
                                <tr>
                                        <td class = "imagine-produs"><img src = "imagini/apple-tea.jpg" alt = "apple_tea" width = "50" height="50"></td>
                                        <td class = "nume-produs">Sweet Apple<p>bucăți de mere, scorțișoară, măceșe 350 ml</p></td>
                                        <td class = "cantitate"><input type="number" value="1"></td>
                                        <td class = "pret">15lei</td>
                                        <td><button class="remove"><img src = "imagini/trashcan.png" alt = "trashcan" width="30" height="30"></button></td>
                                    </tr>
                            </tbody>
                        </table>
                        <div class = "total">
                            <h4>Total:</h4>
                            <p>39lei</p>
                        </div>
                    </div>
                    <div class = "formular-plata">
                        <h2>Detalii Card</h2>
                        <h4>Tip card</h4>
                        <div class = "tipuri-card">
                            <img src = "imagini/Visa-Logo.png" alt = "visa_logo" width="70" height="60">
                            <img src = "imagini/MasterCard_Logo.png" alt = "master_logo" width="70" height="60">
                            <img src = "imagini/rupay-logo.png" alt ="rupay_logo" width="70" height="60">
                        </div>
                        <form class = "formular">
                            <label for="nume">Nume Card:</label><br>
                            <input type="text" id="nume" name="nume" value="Nume"><br>
                            <label for="nr-card">Numar Card:</label><br>
                            <input type="text" id="nr-card" name="nr-card" value="1111 2222 3333 4444">
                            <div class = "alte-date">
                                <label for = "data-expirare">Data Expirare</label>
                                <label for = "cvv">CVV</label>
                            </div>
                            <div class = "alte-date-input">
                                <input type="text" id="data-expirare" name="data-expirare" pattern="\d{2}/\d{4}" placeholder="MM/YYYY" required>
                                <input type = "text" id = "cvv" name = "cvv">
                            </div>
                            <div class = "suma">
                                <p>TOTAL:</p>
                                <p>39lei</p>
                            </div>
                            <input class = "submit-button" type = "submit" value = "PLATESTE">
                        </form>
                    </div>
            </div>
            </div>
        </main>
    </div>
    <div class = "container-footer">
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
</body>


</html>