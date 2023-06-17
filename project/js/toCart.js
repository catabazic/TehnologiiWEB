function addCart(name) {
    console.log("sunt aici");


    var xhr = new XMLHttpRequest();
    var url = "php/add_cart.php?name=" + name;
    xhr.open("GET", url, true);

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            
        }
    };

    xhr.send();
    console.log("mai sunt aici");

}