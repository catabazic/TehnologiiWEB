var xhr = new XMLHttpRequest();
var method = 'GET';
var url = 'php/extract_unpayed_commands.php';
var asynchronous = true;
xhr.open(method, url, asynchronous);
xhr.send();
function makePay(id_command) {
    return new Promise(function(resolve, reject) {
      fetch("php/makePay.php", {
        "method": "POST",
        "headers": {
          "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(id_command)
      }).then(function(response) {
        if (response.ok) {
          // Afisare raspuns in consola
          response.json().then(function(data) {
            console.log(data);
          });
          resolve();
        } else {
          reject(new Error("Eroare la eliminarea comenzii."));
        }
      }).catch(function(error) {
        reject(error);
      });
    });
  }
  
function payCommand(command)
{
    var idCommand = command.getAttribute('data-id-comanda');
    var row = command.parentNode.parentNode;
    row.parentNode.removeChild(row);
    makePay(idCommand);
}
xhr.onreadystatechange = function() {
    if (this.status === 200 && this.readyState == 4) {
        try {
            var data = JSON.parse(this.responseText);
            var html = "";
            var id = data.id_comanda;
            var products = data.products;
            console.log(data);
            for (var i = 0; i < data.id_comanda.length; i++) {
                var tr = document.createElement('tr');
                var td1 = tr.appendChild(document.createElement('td'));
                var td2 = tr.appendChild(document.createElement('td'));
                var prods = products[i];
                var p = "";
                if (prods.length !== 0) {
                    for (var j = 0; j < prods.length; j++) {
                        p += prods[j]; 
                        if(j !== prods.length - 1 )
                          p += ", ";
                    }
                }
                td1.innerHTML = id[i] + '<p>' + p + '</p>';
                td2.innerHTML = '<button class="pay" onclick="payCommand(this)" data-id-comanda="' + id[i] + '"><img class = "check" src="imagini/pay.png" alt="pay" width="30" height="30"></button>';
                td1.classList.add('produs');
                document.getElementById("data").appendChild(tr);
            }
        } catch (error) {
            console.error("Eroare la parsarea datelor JSON:", error);
        }
    }
}
