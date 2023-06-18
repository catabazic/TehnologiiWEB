var xhr = new XMLHttpRequest();
var method = 'GET';
var url = 'php/extract_unpayed_commands.php';
var asynchronous = true;
xhr.open(method, url, asynchronous);
xhr.send();
xhr.onreadystatechange = function() {
    if (this.status === 200 && this.readyState == 4) {
  
      try {
        var data = JSON.parse(this.responseText);
        var html = "";
        var id = data.id_comanda;
        var products = data.products;
  
        for (var i = 0; i < data.id_comanda.length; i++) {
            var tr = document.createElement('tr');
            var td1 = tr.appendChild(document.createElement('td'));
            var td2 = tr.appendChild(document.createElement('td'));
            var prods = products[i];
            var p = "";
            for(var j = 0; j < prods.length; j++)
            {
                p += prods[i].Nume;
                p += " ";
            }
            td1.innerHTML =   id[i] + '<p>' + p + '</p>';
            td2.innerHTML = '<button class="pay" onclick="payCommand(this)" data-id-comanda="' + id[i]+'" ><img src="imagini/pay.png" alt="pay" width="30" height="30"></button>';
            document.getElementById("data").appendChild(tr);
        }
      } catch (error) {
        console.error("Eroare la parsarea datelor JSON:", error);
      }
    }
  
}  