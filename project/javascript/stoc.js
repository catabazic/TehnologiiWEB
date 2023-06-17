fetch('php/stoc_from_db.php')
    .then(response => response.json())
    .then(data => {
       
        Object.keys(data).forEach(nume => {
            const availability = document.querySelector(`#availability_${encodeURIComponent(nume)}`);
            const itemContainer = availability.parentNode.parentNode.parentNode; 

            if (data[nume] > 0) {
                availability.textContent = 'Produsul este în stoc.';
            } else {
                availability.textContent = 'Produsul nu este în stoc.';
                itemContainer.classList.add('out-of-stock'); 
            }
        });
    })  
    .catch(error => console.log(error));
