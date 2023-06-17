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
                console.log("raspuns...");
                // Invalid response
                console.log(response);
                console.log("Invalid response");
            }
        }
    };

    xhr.send();
}