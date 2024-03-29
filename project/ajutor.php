<?php include 'php/referer.php'; ?>
<?php include 'php/add_url.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Tea House</title>
    <link rel="stylesheet" href="css/ajutor.css">
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
                <h2>Nu stii ce sa faci mai departe?</h2>
                <details>
                    <summary>VIZUALIZARE MENIU</summary>
                    <p> Acceseaza meniul din pagina dedicata -Meniu-. 
                        Alege produsele preferate dand scroll pe pagina si adaugand produsele in cos bifand check-box-ul de la final. 
                        Continua cumparaturile cu bauturile sau gustarile preferate!</p>
                    <p> De asemenea poti comanda si prin intermediul URL-ului. De exemplu, daca doresti un ceai de zmeura,
                        poti scrie in URL astfel: "http://localhost/TehnologiiWEB/project/meniu.php/vreau/ceai?de=zmeura",
                        iar produsul "Raspberries & Orchids" care este un ceai de zmeura, va fi adaugat in cos. In acest fel poti
                        adauga in cos si urmatoarele sortimente de ceai: "cirese", "roibos", "merisore", "mar", "frcuteTropicale",
                        "vara", "zmeura", "lamaie", acestea fiind toate sortimentele noastre de ceai.
                    </p>
                    <p> Tot in acelasi mod, poti comanda orice item din meniu, tastand doar "/vreau/numeleProdusului"</p>
                    <p> Pentru a comanda tot prin URL, un combo cat mai repede si care sa iti inveseleasca ziua introdu acest URL: 
                        "http://localhost/TehnologiiWEB/project/cos.php/vreau/suc?cu=tort" si vei gasi in cos un tort de ciocolata
                        si un fresh de portocale.</p>
                    <p> Totodata poti naviga intre pagini folosind URL-ul, iar la final cand doresti sa achiti nota de plata,
                        introdu "/nota" care te va redirectiona catre cosul de cumparaturi. Daca doresti sa achiti nota cash,
                        te asteptam la casa de marcat, iar daca doresti sa achiti prin card bancar, ai aceasta optiune in
                        pagina "cos".
                    </p>
                    <p> Exista si restrictii in privinta comenzilor facute din URL. Daca vei incerca sa comanzi alcool nu va fi permis, fiind 
                        un produs nepotrivit ceainariei noastre.
                    </p>
                    <p> Poti incerca sa introduci in URL si: "/vreau/cinci" sau "/vreau/fericire" pentru un zambet in plus pe ziua de azi.</p>
                  </details>
                  <details>
                    <summary>COSUL DE CUMPARATURI</summary>
                    <p>Poate una dintre cele mai importante caracteristici ale site-ului, cosul de cumparaturi retine produsele ce vor fi achizitionate precum si cantitatile acestora.
                        Acceseaza cosul dand click pe iconita din partea superioara dreapta a paginii. De aici, poti vizualiza produsele alese, cantitatile si pretul fiecarui produs precum si costul total.
                        Modifica cosul schimband cantitatile produselor sau eliminandu-le complet. Daca nu esti hotarat cu achizitionarea, te poti intoarce oricand si sa finisezi cumparaturile. </p>
                  </details>
                  <details>
                    <summary>ACHITA PORDUSELE</summary>
                    <p> Te-ai hotarat cu ceea ce vrei sa cumperi sau simti ca daca vei continua sa te uiti, vei ramane fara bani in cont? 
                        Nicio grija, poti achizitiona acum produsele existente in cos si sa te intorci mai tarziu pentru alte cumparaturi ( Noi te asteptam oricand! )
                        Pentru a finisa cumparaturile, acceseaza cosul din partea dreapta a barei de navigare. Asigura-te ca ai tot ce iti doresti ( si banii necesari pentru acestea ) 
                        si introdu datele bancare in formularul din partea stanga. Verifica validitatea datelor si apasa PLATESTE. Gata! 
                        Acum esti posesorul unor ceaiuri aromate si nefericitul ce a ramas fara bani in cont! </p>
                  </details>
                  <div class=" cute-pic">
                    <img src=" imagini/ceasca_ceai.png" alt="ceasca_ceai" width = "350" height="350">
                  </div>
                  <h2> Va multumim ca ati trecut pe la noi si va mai asteptam!</h2>
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