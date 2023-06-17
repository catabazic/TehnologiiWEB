<?php include 'php/referer.php'; ?>
<<<<<<< Updated upstream
=======
<!-- <?php include 'php/erorrs.php'; ?> -->
<?php include 'php/add_url.php'; ?>
>>>>>>> Stashed changes


<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea House</title>
    <link rel="stylesheet" href="css/meniu.css">
    <link rel="stylesheet" href="css/meniu_resp.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <script src="javascript/stoc.js"></script>
    <script src="js/toCart.js"></script>
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
                <h1 class="hr-lines">CEAI</h1>
                <div class="meniu-container">
                    <div class="items">
                        <div>
                          <img class="ceai" src="imagini/roibos1.jpg" alt="Sweet Cherry Tea" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Sweet Cherry</h3>
                                <p>ceai roibos + bucăți de cireșe 350 ml</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>15 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                  <button onclick="addCart('Sweet Cherry')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Sweet%20Cherry">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="ceai" src="imagini/roibos2.jpg" alt="Rooibos Delight" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Rooibos Delight</h3>
                                <p>ceai roibos + bucăți de migdale și portocală 350 ml</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>15 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Rooibos Delight')">+</button>
                                </div>
                            </div>
                             <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Rooibos%20Delight">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="ceai" src="imagini/roibos3.jpg" alt="Cranberry Vanilla" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Cranberry Vanilla</h3>
                                <p>ceai roibos + felii de merișoare, vanilie 350 ml</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>15 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Cranberry Vanilla')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Cranberry%20Vanilla">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="ceai" src="imagini/apple-tea.jpg" alt="Sweet Apple" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Sweet Apple</h3>
                                <p>bucăți de mere, scorțișoară, măceșe 350 ml</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>15 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Sweet Apple')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Sweet%20Apple">-</span>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="items-right">
                        <div>
                          <img class="ceai" src="imagini/fruit-tea.jpg" alt="Tropical Fruit" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Tropical Fruit</h3>
                                <p>bucăți de cireșe, hibiscus, mere, afine 350 ml</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>15 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Tropical Fruit')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Tropical%20Fruit">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="ceai" src="imagini/summer-tea.jpg" alt="Summer Passion" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Summer Passion</h3>
                                <p>ceai verde, mango, ananas, muguri de trandafir 350 ml</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>15 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Summer Passion')">+</button>
                                </div>
                            </div>
                             <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Summer%20Passion">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="ceai" src="imagini/red-tea.jpg" alt="Raspberries & Orchids" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Raspberries & Orchids</h3>
                                <p>ceai verde, zmeură, căpșuni, afine, vișine 350 ml</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>15 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Raspberries & Orchids')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Raspberries%20Orchids">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="ceai" src="imagini/lemon-tea.jpg" alt="Sancha Lemon" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Sancha Lemon</h3>
                                <p>ceai verde, lămâie, ghimbir 350 ml</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>15 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Sancha Lemon')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Sancha%20Lemon">-</span>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div> 
                  <h1 class="hr-lines">CAFEA</h1>
                <div class="meniu-container">
                    <div class="items">
                        <div>
                          <img class="cafea" src="imagini/espresso.jpg" alt="Espresso" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Espresso Dublu</h3>
                                <p>50 - ml cafea</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>8 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Espresso Dublu')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Espresso%20Dublu">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="cafea" src="imagini/espresso-macchiato.jpg" alt="Espresso Macchiato" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Espresso Macchiato</h3>
                                <p>espresso + 20 ml cremă lapte</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>7 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Espresso Macchiato')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Espresso%20Macchiato">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="cafea" src="imagini/americano.jpg" alt="Americano" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Americano</h3>
                                <p>espresso + 90 ml apă</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>7 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Americano')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Americano">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="cafea" src="imagini/flat-white.jpg" alt="Flat White" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Flat White</h3>
                                <p>espresso dublu + 220 ml cremă lapte</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>10 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Flat White')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Flat%20White">-</span>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="items-right">
                        <div>
                          <img class="cafea" src="imagini/cappucino.jpg" alt="Cappucino" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Cappucino</h3>
                                <p>espresso + 150 ml cremă lapte</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>9 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Cappucino')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Cappucino">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="cafea" src="imagini/caffe-latte.jpg" alt="Caffe Latte" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Caffe Latte</h3>
                                <p>espresso + 190 ml cremă lapte</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>10 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Caffe Latte')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Caffe%20Latte">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="cafea" src="imagini/cortado.jpg" alt="Cortado" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Cortado</h3>
                                <p>espresso dublu + 130 ml cremă lapte</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>11 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Cortado')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Cortado">-</span>
                              </div>
                          </div>
                        </div>
                        <div>
                          <img class="cafea" src="imagini/ice-coffee.jpg" alt="Ice Coffee" width="60" height="60">
                          <div>
                            <div class="item">
                                <h3>Ice Coffee</h3>
                                <p>espresso + frișcă lichidă + lapte + gheață</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>14 lei</h4>
                                </div>
                                <div class="add-to-cart">
                                <button onclick="addCart('Ice Coffee')">+</button>
                                </div>
                            </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Ice%20Coffee">-</span>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div> 
                  <h1 class="hr-lines">CEVA RECE</h1>
                  <div class="meniu-container">
                      <div class="items">
                          <div>
                            <img class="rece" src="imagini/red_cocktail.jpg" alt="Red Cocktail" width="60" height="60">
                            <div>
                              <div class="item">
                                    <h3>Red Cocktail</h3>
                                    <p>suc de cireșe și merișoare, fructe de pădure, gheață</p>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>20 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Red Cocktail')">+</button>
                                  </div>
                              </div>
                                <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Red%20Cocktail">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="rece" src="imagini/green-cocktail.jpg" alt="Green Cocktail" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Green Cocktail</h3>
                                  <p>lime, mentă, suc de mere verzi, zahăr brun, gheață</p>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>20 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Green Cocktail')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Green%20Cocktail">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="rece" src="imagini/cranberry-cocktail.jpg" alt="Cranberry Cocktail" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Cranberry Cocktail</h3>
                                  <p>lime, mentă, suc de rodii, fructe de pădure, gheță</p>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>20 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Cranberry Cocktail')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Cranberry%20Cocktail">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="rece" src="imagini/summer_cocktail.jpg" alt="Summer Cocktail" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Summer Cocktail</h3>
                                  <p>suc de piersici, ananas, lime, mentă, gheață</p>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>20 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Summer Cocktail')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Summer%20Cocktail">-</span>
                               </div>
                            </div>
                          </div>
                        </div>
                        <div class="items-right">
                          <div>
                            <img class="rece" src="imagini/orange_fresh.jpg" alt="Fresh de portocale" width="60" height="60">
                            <div>
                              <div class="item">
                                    <h3>Fresh de portocale</h3>
                                    <p>portocale proaspăt stoarse></p>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>20 lei</h4> 
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Fresh de portocale')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Fresh%20de%20portocale">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="rece" src="imagini/limonada_simpla.jpg" alt="Limonadă simplă" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Limonadă simplă</h3>
                                  <p>suc de lămâie și lime, gheață</p>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>12 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Limonadă simplă')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Limonada%20simpla">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="rece" src="imagini/limonada_cu_menta.jpg" alt="Limonadă cu mentă" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Limonadă cu mentă</h3>
                                  <p>suc de lămâie și lime, mentă, gheață</p>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>15 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Limonadă cu mentă')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Limonada%20cu%20menta">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="rece" src="imagini/limonada_fructe.jpg" alt="Limonadă cu fructe" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Limonadă cu fructe</h3>
                                  <p>suc de lămâie și lime, zmeură/căpșuni/mango, gheață</p>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>17 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Limonadă cu fructe')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Limonada%20cu%20fructe">-</span>
                               </div>
                            </div>
                          </div>
                        </div>
                    </div> 
                    <h1 class="hr-lines">DESERT</h1>
                  <div class="meniu-container">
                      <div class="items">
                          <div>
                            <img class="desert" src="imagini/croissant.jpg" alt="Croissant" width="60" height="60">
                            <div>
                              <div class="item">
                                    <h3>Croissant cu unt</h3>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>8 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Croissant cu unt')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Croissant%20cu%20unt">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="desert" src="imagini/cookies.jpg" alt="Cookies" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Cookies cu ciocolată</h3>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>8 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Cookies cu ciocolată')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Cookies%20cu%20ciocolata">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="desert" src="imagini/banana-bread.jpg" alt="Banana Bread" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Banana Bread</h3>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>10 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Banana Bread')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Banana%20bread">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="desert" src="imagini/lavacake.jpg" alt="Lava Cake" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Lava Cake cu înghețată de vanilie</h3>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>15 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Lava Cake cu înghețată de vanilie')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Lava%20cake">-</span>
                               </div>
                            </div>
                          </div>
                        </div>
                        <div class="items-right">
                          <div>
                            <img class="desert" src="imagini/chocolate-cake.jpg" alt="Tort de ciocolată" width="60" height="60">
                            <div>
                              <div class="item">
                                    <h3>Tort de ciocolată</h3>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>18 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Tort de ciocolată')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Tort%20de%20ciocolata">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="desert" src="imagini/caramel-cheesecake.jpg" alt="Cheesecake cu caramel" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Cheesecake cu caramel</h3>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>18 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Cheesecake cu caramel')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Cheesecake%20cu%20caramel">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="desert" src="imagini/strawberry_cheesecake.jpg" alt="Cheesecake cu căpșuni" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Cheesecake cu căpșuni</h3>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>18 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Cheesecake cu căpșuni')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Cheesecake%20cu%20capsuni">-</span>
                               </div>
                            </div>
                          </div>
                          <div>
                            <img class="desert" src="imagini/pancakes_banane.jpg" alt="Pancakes cu ciocolată și banane" width="60" height="60">
                            <div>
                              <div class="item">
                                  <h3>Pancakes cu ciocolată și banane</h3>
                              </div>
                              <div class="price-and-add-to-cart">
                                  <div class="price">
                                    <h4>20 lei</h4>
                                  </div>
                                  <div class="add-to-cart">
                                  <button onclick="addCart('Pancakes cu ciocolată și banane')">+</button>
                                  </div>
                              </div>
                              <div class="availability">
                                  Disponibilitate:
                                  <span id="availability_Pancakes%20cu%20ciocolata">-</span>
                               </div>
                            </div>
                          </div>
                        </div>
                    </div> 
            </div>
        </main>
    </div>
    <div class = "container_footer">
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