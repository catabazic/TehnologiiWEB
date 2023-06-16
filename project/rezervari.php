<?php include 'php/referer.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea House</title>
    <link rel="stylesheet" href="css/rezervari.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <script src="js/update_table.js"></script>
    <script src="js/dynamic_check.js"></script>
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
                <div class = "anunt">
                    <h3>Te rugăm ca atunci când ocupi un loc în cafenea, să îl marchezi ca și ocupat. Mulțumim!</h3>
                    <p>Poți face asta prin apăsarea căsuței goale din dreptul locului pe care l-ai ocupat.</p>
                </div>
                <div class = "mese">
                    <div class="mese-de-4">
                        <div class="Masa1">
                            <h1>Masa 1 - 4 locuri</h1>
                            <div class="locuri">
                                <label><input id=1 type="checkbox" name="locul1" value="1" class="masa-checkbox" onclick="updateTable(1, this.checked)">Locul 1</label><script>toggleCheckbox(1, 1, 1)</script><br>
                                <label><input id=2 type="checkbox" name="locul2" value="2" class="masa-checkbox" onclick="updateTable(1, this.checked)">Locul 2</label><script>toggleCheckbox(1, 2, 2)</script><br>
                                <label><input id=3 type="checkbox" name="locul3" value="3" class="masa-checkbox" onclick="updateTable(1, this.checked)">Locul 3</label><script>toggleCheckbox(1, 3, 3)</script><br>
                                <label><input id=4 type="checkbox" name="locul4" value="4" class="masa-checkbox" onclick="updateTable(1, this.checked)">Locul 4</label><script>toggleCheckbox(1, 4, 4)</script>
                            </div>
                        </div>
                        <div class="Masa2">
                            <h1>Masa 2 - 4 locuri</h1>
                            <div class="locuri">
                                <label><input id=5 type="checkbox" name="locul1" value="1" class="masa-checkbox" onclick="updateTable(2, this.checked)">Locul 1</label><script>toggleCheckbox(2, 1, 5)</script><br>
                                <label><input id=6 type="checkbox" name="locul2" value="2" class="masa-checkbox" onclick="updateTable(2, this.checked)">Locul 2</label><script>toggleCheckbox(2, 2, 6)</script><br>
                                <label><input id=7 type="checkbox" name="locul3" value="3" class="masa-checkbox" onclick="updateTable(2, this.checked)">Locul 3</label><script>toggleCheckbox(2, 3, 7)</script><br>
                                <label><input id=8 type="checkbox" name="locul4" value="4" class="masa-checkbox" onclick="updateTable(2, this.checked)">Locul 4</label><script>toggleCheckbox(2, 4, 8)</script>
                            </div>
                        </div>
                        <div class="Masa3">
                            <h1>Masa 3 - 4 locuri</h1>
                            <div class="locuri">
                                <label><input id=9 type="checkbox" name="locul1" value="1" class="masa-checkbox" onclick="updateTable(3, this.checked)">Locul 1</label><script>toggleCheckbox(3, 1, 9)</script><br>
                                <label><input id=10 type="checkbox" name="locul2" value="2" class="masa-checkbox" onclick="updateTable(3, this.checked)">Locul 2</label><script>toggleCheckbox(3, 2, 10)</script><br>
                                <label><input id=11 type="checkbox" name="locul3" value="3" class="masa-checkbox" onclick="updateTable(3, this.checked)">Locul 3</label><script>toggleCheckbox(3, 3, 11)</script><br>
                                <label><input id=12 type="checkbox" name="locul4" value="4" class="masa-checkbox" onclick="updateTable(3, this.checked)">Locul 4</label><script>toggleCheckbox(3, 4, 12)</script>
                            </div>
                        </div>
                        <div class="Masa4">
                            <h1>Masa 4 - 4 locuri</h1>
                            <div class="locuri">
                                <label><input id=13 type="checkbox" name="locul1" value="1" class="masa-checkbox" onclick="updateTable(4, this.checked)">Locul 1</label><script>toggleCheckbox(4, 1, 13)</script><br>
                                <label><input id=14 type="checkbox" name="locul2" value="2" class="masa-checkbox" onclick="updateTable(4, this.checked)">Locul 2</label><script>toggleCheckbox(4, 2, 14)</script><br>
                                <label><input id=15 type="checkbox" name="locul3" value="3" class="masa-checkbox" onclick="updateTable(4, this.checked)">Locul 3</label><script>toggleCheckbox(4, 3, 15)</script><br>
                                <label><input id=16 type="checkbox" name="locul4" value="4" class="masa-checkbox" onclick="updateTable(4, this.checked)">Locul 4</label><script>toggleCheckbox(4, 4, 16)</script>
                            </div>
                        </div>
                    </div>
                    <div class="mese-de-5">
                        <div class="Masa5">
                            <h1>Masa 5 - 4 locuri</h1>
                            <div class="locuri">
                                <label><input id=17 type="checkbox" name="locul1" value="1" class="masa-checkbox" onclick="updateTable(5, this.checked)">Locul 1</label><script>toggleCheckbox(5, 1, 17)</script><br>
                                <label><input id=18 type="checkbox" name="locul2" value="2" class="masa-checkbox" onclick="updateTable(5, this.checked)">Locul 2</label><script>toggleCheckbox(5, 2, 18)</script><br>
                                <label><input id=19 type="checkbox" name="locul3" value="3" class="masa-checkbox" onclick="updateTable(5, this.checked)">Locul 3</label><script>toggleCheckbox(5, 3, 19)</script><br>
                                <label><input id=20 type="checkbox" name="locul4" value="4" class="masa-checkbox" onclick="updateTable(5, this.checked)">Locul 4</label><script>toggleCheckbox(5, 4, 20)</script>
                            </div>
                        </div>
                        <div class="Masa6">
                            <h1>Masa 6 - 4 locuri</h1>
                            <div class="locuri">
                            <div class="locuri">
                                <label><input id=21 type="checkbox" name="locul1" value="1" class="masa-checkbox" onclick="updateTable(6, this.checked)">Locul 1</label><script>toggleCheckbox(6, 1, 21)</script><br>
                                <label><input id=22 type="checkbox" name="locul2" value="2" class="masa-checkbox" onclick="updateTable(6, this.checked)">Locul 2</label><script>toggleCheckbox(6, 2, 22)</script><br>
                                <label><input id=23 type="checkbox" name="locul3" value="3" class="masa-checkbox" onclick="updateTable(6, this.checked)">Locul 3</label><script>toggleCheckbox(6, 3, 23)</script><br>
                                <label><input id=24 type="checkbox" name="locul4" value="4" class="masa-checkbox" onclick="updateTable(6, this.checked)">Locul 4</label><script>toggleCheckbox(6, 4, 24)</script>
                            </div>
                        </div>
                        <div class="Masa7">
                            <h1>Masa 7 - 5 locuri</h1>
                            <div class="locuri">
                                <label><input id=25 type="checkbox" name="locul1" value="1" class="masa-checkbox" onclick="updateTable(7, this.checked)">Locul 1</label><script>toggleCheckbox(7, 1, 25)</script><br>
                                <label><input id=26 type="checkbox" name="locul2" value="2" class="masa-checkbox" onclick="updateTable(7, this.checked)">Locul 2</label><script>toggleCheckbox(7, 2, 26)</script><br>
                                <label><input id=27 type="checkbox" name="locul3" value="3" class="masa-checkbox" onclick="updateTable(7, this.checked)">Locul 3</label><script>toggleCheckbox(7, 3, 27)</script><br>
                                <label><input id=28 type="checkbox" name="locul4" value="4" class="masa-checkbox" onclick="updateTable(7, this.checked)">Locul 4</label><script>toggleCheckbox(7, 4, 28)</script><br>
                                <label><input id=29 type="checkbox" name="locul5" value="5" class="masa-checkbox" onclick="updateTable(7, this.checked)">Locul 5</label><script>toggleCheckbox(7, 5, 29)</script>
                            </div>
                        </div>
                        <div class="Masa9">
                            <h1>Masa 8 - 6 locuri</h1>
                            <div class="locuri">
                                <label><input id=30 type="checkbox" name="locul1" value="1" class="masa-checkbox" onclick="updateTable(8, this.checked)">Locul 1</label><script>toggleCheckbox(8, 1, 30)</script><br>
                                <label><input id=31 type="checkbox" name="locul2" value="2" class="masa-checkbox" onclick="updateTable(8, this.checked)">Locul 2</label><script>toggleCheckbox(8, 2, 31)</script><br>
                                <label><input id=32 type="checkbox" name="locul3" value="3" class="masa-checkbox" onclick="updateTable(8, this.checked)">Locul 3</label><script>toggleCheckbox(8, 3, 32)</script><br>
                                <label><input id=33 type="checkbox" name="locul4" value="4" class="masa-checkbox" onclick="updateTable(8, this.checked)">Locul 4</label><script>toggleCheckbox(8, 4, 33)</script><br>
                                <label><input id=34 type="checkbox" name="locul5" value="5" class="masa-checkbox" onclick="updateTable(8, this.checked)">Locul 5</label><script>toggleCheckbox(8, 5, 34)</script><br>
                                <label><input id=35 type="checkbox" name="locul6" value="6" class="masa-checkbox" onclick="updateTable(8, this.checked)">Locul 6</label><script>toggleCheckbox(8, 6, 35)</script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="numar-locuri">
                    <h4>Numărul de locuri: 35</h4>
                    <h4>Numărul de locuri ocupate: <?php include("php/locuri_ocupate.php"); echo $ocupat;  ?> </h4>
                    <h4>Numărul de locuri libere: <?php include("php/locuri_libere.php"); echo $liber;  ?></h4>
                    <h4>Poti vedea locurile care sunt libere <a href="mese_json.html">aici</a></h4>
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