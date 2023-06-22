function ordenarArticulosToilet() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=2')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}