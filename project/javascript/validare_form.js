var formular = document.getElementById('form');
if (formular) {
    formular.addEventListener('submit', function (event) {
        event.preventDefault();
        var numeCard = document.getElementById('nume').value;
        var numarCard = document.getElementById('nr-card').value;
        var dataExpirare = document.getElementById('data-expirare').value;
        var cvv = document.getElementById('cvv').value;

        var regex = /^[a-zA-Z\s]*$/;
        if (!regex.test(numeCard)) {
          alert('Numele cardului conține caractere speciale!');
          return;
        }
        if (numarCard.length < 16) {
            alert('Numarul de card este prea scurt!');
            return;
          }
        var countCifre = 0;
        for(var i = 0; i< numarCard.length; i++)
        {
            if(numarCard[i]>= '0'&& numarCard[i]<='9')
            countCifre++;
        }
        if(countCifre !== 16)
        {
            alert('Numarul de card trebuie sa contina exact 16 cifre!');
            return; 
        }
        var regex = /^[\d\s]+$/;
        if (!regex.test(numarCard)) {
            alert('Numarul de card poate contine doar cifre si spatii!');
            return;
            }

        var dataCurenta = new Date();
        var dataExpirareArray = dataExpirare.split('/');
        var lunaExpirare = parseInt(dataExpirareArray[0]);
        var anExpirare = parseInt(dataExpirareArray[1]); 
      
        if (anExpirare < dataCurenta.getFullYear() || (anExpirare === dataCurenta.getFullYear() && lunaExpirare <= (dataCurenta.getMonth() + 1))) {
          alert('Data de expirare este in trecut!');
          return;
        }
        if(cvv.length!== 3 && cvv.length!== 4)
        {
            alert('CVV invalid!');
          return;
        }
        fetch('php/remove_command.php',
        {
            "method": "POST",
            "headers":
            {
             "Content-Type": "application/json; charset=utf-8"
            },
            "body": JSON.stringify("")
        })
        .then(response => {
            if (response.ok) {
            return response.text();
            }
        })
        .then(data => {
            console.log(data); 
            formular.submit();
        })
        .catch(error => {
            console.error('Error:', error);
        });
        

        
      });
      
  
  }
  

