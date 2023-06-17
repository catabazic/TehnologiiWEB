function toggleCheckbox(tableNr, seatNr, checkboxId) {
    var checkbox = document.getElementById(checkboxId);

    var xhr = new XMLHttpRequest();
    var url = "php/isChecked.php?setTable=" + tableNr + "&setSeat=" + seatNr;
    xhr.open("GET", url, true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;

            if (response === "true") {
                checkbox.checked = true;
                console.log("Condition is true");
            } else if (response === "false") {
                checkbox.checked = false;
                console.log("Condition is false");
            } else {
                console.log("Invalid response");
                // Invalid response
                console.log(response);
            }
            recalculateLocLiber(); // Moved the function call inside the response handler
            recalculateLocOcupat(); // Moved the function call inside the response handler
        }
    };

    xhr.send();
}

function updateTable(seatNumber, isChecked) {
    console.log(isChecked);
    var xhr = new XMLHttpRequest();
    var raspuns=0;
    if(isChecked==true){
        raspun=1;
    }
    var url = "php/update_seat.php?seatNumber=" + seatNumber + "&isChecked=" + isChecked;
    console.log(url);
    xhr.open("GET", url, true);
    console.log('Before send request');
    xhr.send();
    console.log('After send request');
    recalculateLocLiber();
    recalculateLocOcupat();
}


function recalculateLocLiber() {
    var xhr = new XMLHttpRequest();
    var method = 'GET';
    var url = 'php/locuri_libere.php';
    var asynchronous = true;

    xhr.open(method, url, asynchronous);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;

            var html = "<h4>Numărul de locuri libere: " + response + " </h4>"
            document.getElementsByClassName("libere")[0].innerHTML = html;
        }
    };

    xhr.send();
}

function recalculateLocOcupat() {
    var xhr = new XMLHttpRequest();
    var method = 'GET';
    var url = 'php/locuri_ocupate.php';
    var asynchronous = true;

    xhr.open(method, url, asynchronous);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
        
            var html = "<h4>Numărul de locuri ocupate: " + response + " </h4>"
            document.getElementsByClassName("ocupate")[0].innerHTML = html;
        }
    };

    xhr.send();
}
