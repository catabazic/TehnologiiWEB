function fetchData() {
    fetch('php/stoc_from_db.php')
        .then(response => response.json())
        .then(data => {
            const meniuContainerCeai = document.getElementById('meniu-container-ceai');
            const meniuContainerCafea = document.getElementById('meniu-container-cafea');
            const meniuContainerCevaRece = document.getElementById('meniu-container-ceva-rece');
            const meniuContainerDesert = document.getElementById('meniu-container-desert');
            console.log(data);
            Object.keys(data).forEach(nume => {
                const produs = data[nume];
                const itemContainer = document.createElement('div');
                itemContainer.innerHTML = `
                    <div class="container-item" >
                   
                        <img class="ceai" src="imagini/${nume}.jpg" alt="${nume}" width="60" height="60">
                        <div>
                            <div class="item">
                                <h3>${nume}</h3>
                                <p>${produs.descriere}</p>
                            </div>
                            <div class="price-and-add-to-cart">
                                <div class="price">
                                    <h4>${produs.pret} lei</h4>
                                </div>
                                <div class="add-to-cart">
                                    <button onclick="addCart('${nume}')">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                console.log(nume);
                if (produs['tip'].toLowerCase().includes('ceai')) {
                    meniuContainerCeai.appendChild(itemContainer);
                } else if (produs['tip'].toLowerCase().includes('cafea')) {
                    meniuContainerCafea.appendChild(itemContainer);
                } else if (produs['tip'].toLowerCase().includes('ceva-rece')) {
                    meniuContainerCevaRece.appendChild(itemContainer);
                } else if (produs['tip'].toLowerCase().includes('desert')) {
                    meniuContainerDesert.appendChild(itemContainer);
                }
            });
        })
        .catch(error => console.log(error));
}
