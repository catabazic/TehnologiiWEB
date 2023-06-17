fetch('php/stoc_from_db.php')
    .then(response => response.json())
    .then(data => {
        // Parcurge fiecare produs și actualizează disponibilitatea în stoc
        Object.keys(data).forEach(nume => {
            const availability = document.querySelector(`#availability_${encodeURIComponent(nume)}`);
            const itemContainer = availability.parentNode.parentNode.parentNode; // Selectați containerul părinte al elementului de disponibilitate

            if (data[nume] > 0) {
                availability.textContent = 'Produsul este în stoc.';
            } else {
                availability.textContent = 'Produsul nu este în stoc.';
                itemContainer.classList.add('out-of-stock'); // Adăugați o clasă CSS pentru a stiliza produsele care nu sunt în stoc
            }
        });
    })  
    .catch(error => console.log(error));
