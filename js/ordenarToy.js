function ordenarArticulosToy() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=1')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}