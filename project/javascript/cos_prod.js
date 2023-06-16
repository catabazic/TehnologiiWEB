var xhr = new XMLHttpRequest();
var method = 'GET';
var url = 'php/retrieve_products_from_db.php';
var asynchronous = true;
xhr.open(method, url, asynchronous);
xhr.send();

xhr.onreadystatechange = function() {
  if (this.status === 200 && this.readyState == 4) {
    console.log(this.responseText);
    try {
      var data = JSON.parse(this.responseText);
      var html = "";
      for (var i = 0; i < data.length; i++) {
        var nume = data[i].Nume;
        var descriere = data[i].Descriere;
        var pret = data[i].Pret;
        html += "<tr>";
        html += '<td class="nume-produs">' + nume + '<p>' + descriere + '</p></td>';
  html += '<td class="pret">' + pret + '</td>';
  html += '<td><button class="remove"><img src="imagini/trashcan.png" alt="trashcan" width="30" height="30"></button></td>';
  html += "</tr>"
        console.log("Hello");
        console.log(html);
      }
      document.getElementById("data").innerHTML = html;
    } catch (error) {
      console.error("Eroare la parsarea datelor JSON:", error);
    }
  }
};
