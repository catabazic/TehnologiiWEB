

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
}
