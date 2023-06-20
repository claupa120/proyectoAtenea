
function ordenarArticulos() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosOferta() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosGato() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosPerro() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosToy() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosToilet() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosSand() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosFleas() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosBeds() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosToy() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosToy() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosToy() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosToy() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenar.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
    function obtenerProductos(categoria) {
        $.ajax({
            url: '../back/ordenarCategoria.php',
            method: 'POST',
            data: { categoria: categoria },
            dataType: 'html',
            success: function (response) {
                // Mostrar los artículos en el contenedor correspondiente
                $('#productosContainer').html(response);
            },
            error: function (xhr, status, error) {
                // Manejar el error
                console.error(error);
            }
        });
    }
    function obtenerProductosPerro(categoria) {
        $.ajax({
            url: '../back/ordenarCategoriaPerro.php',
            method: 'POST',
            data: { categoria: categoria },
            dataType: 'html',
            success: function (response) {
                // Mostrar los artículos en el contenedor correspondiente
                $('#productosContainer').html(response);
            },
            error: function (xhr, status, error) {
                // Manejar el error
                console.error(error);
            }
        });
    }
      