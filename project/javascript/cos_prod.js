var xhr = new XMLHttpRequest();
var method = 'GET';
var url = 'php/retrieve_products_from_db.php';
var asynchronous = true;
xhr.open(method, url, asynchronous);
xhr.send();

function removeItem(item) {
    var id_comanda = item.dataset.idComanda;
    var id_client = item.dataset.idClient;
    var prodID = item.dataset.idProdus;
  
    var i = item.parentNode.parentNode;
    i.parentNode.removeChild(i);
  
    removeProduct(id_client, id_comanda, prodID).then(function() {
      recalculateTotal();
    }).catch(function(error) {
      console.error(error);
    });
  }
  
  function removeProduct(id_client, id_comanda, prodID) {
    return new Promise(function(resolve, reject) {
      let data = {
        "idClient": id_client,
        "idComanda": id_comanda,
        "idProdus": prodID
      };
      console.log(data);
      fetch("php/remove_product.php", {
        "method": "POST",
        "headers": {
          "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(data)
      }).then(function(response) {
        if (response.ok) {
          resolve();
        } else {
          reject(new Error("A apărut o eroare în timpul eliminării produsului."));
        }
      }).catch(function(error) {
        reject(error);
      });
    });
  }
  
  function recalculateTotal() {
    var xhr = new XMLHttpRequest();
    var method = 'GET';
    var url = 'php/retrieve_products_from_db.php';
    var asynchronous = true;
  
    xhr.open(method, url, asynchronous);
    xhr.onreadystatechange = function () {
      if (this.status === 200 && this.readyState == 4) {
        try {
          var data = JSON.parse(this.responseText);
          var total = 0;
  
          var products = data.products;
          for (var i = 0; i < products.length; i++) {
            var pret = products[i].Pret;
            total += parseFloat(pret);
          }
          var html = '<h4>Total:</h4><p>' + total + 'lei' + '</p>';
          document.getElementsByClassName("total")[0].innerHTML = html;
        } catch (error) {
          console.error("Eroare la parsarea datelor JSON:", error);
        }
      }
    };
  
    xhr.send();
  }
  

xhr.onreadystatechange = function() {
  if (this.status === 200 && this.readyState == 4) {

    try {
      var data = JSON.parse(this.responseText);
      var html = "";
      var total = 0;
      var id_comanda = data.id_comanda;
      var id_client = data.id_client;

      for (var i = 0; i < data.products.length; i++) {
        var IDprodus = data.products[i].id_produs;
        var nume = data.products[i].Nume;
        var descriere = data.products[i].Descriere;
        var pret = data.products[i].Pret;

        if(descriere === null)
            descriere = " ";
        total += parseFloat(pret);

        var tr = document.createElement('tr');
        var td1 = tr.appendChild(document.createElement('td'));
        var td2 = tr.appendChild(document.createElement('td'));
        var td3 = tr.appendChild(document.createElement('td'));
        td1.innerHTML =   nume + '<p>' + descriere + '</p>';
        td2.innerHTML = pret;
        td3.innerHTML = '<button class="remove" onclick="removeItem(this)" data-id-comanda="' + id_comanda + '" data-id-client="' + id_client + '" data-id-produs="' + IDprodus + '"><img src="imagini/trashcan.png" alt="trashcan" width="30" height="30"></button>';
        td1.classList.add('nume-produs');
        td2.classList.add('pret');
        document.getElementById("data").appendChild(tr);
      }
      html = '<h4>Total:</h4><p>' + total + 'lei'+ '</p>';
      document.getElementsByClassName("total")[0].innerHTML =  html;
    } catch (error) {
      console.error("Eroare la parsarea datelor JSON:", error);
    }
  }

  
};
