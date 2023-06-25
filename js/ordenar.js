

function ordenarArticulosOferta() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/OrdenarOfertas.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
// function ordenarArticulos() {
//     var selectElement = document.getElementById("select");
//     var opcionSeleccionada = selectElement.value;

//     fetch('../back/OrdenarProductos.php?opcion=' + opcionSeleccionada)
//         .then(response => response.text())
//         .then(data => {
//             var productsSection = document.querySelector('.container__products');
//             productsSection.innerHTML = data;
//         })
//         .catch(error => {
//             console.error('Error:', error);
//         });
// };
function ordenarArticulosGato() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/ordenarGato.php?opcion=' + opcionSeleccionada)
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

    fetch('../back/OrdenarPerro.php?opcion=' + opcionSeleccionada)
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
function ordenarArticulosCategorias() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    // Categoría 1
    fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=1')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products-categoria1');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });

    // Categoría 2
    fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=2')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products-categoria2');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });

    // Categoría 3
    fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=3')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products-categoria3');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
         // Categoría 4
        fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=4')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products-categoria4');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
         // Categoría 5
        fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=5')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products-categoria5');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
         // Categoría 6
        fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=6')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products-categoria6');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
         // Categoría 7
        fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=7')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products-categoria7');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });
         // Categoría 8
        fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=8')
        .then(response => response.text())
        .then(data => {
            var productsSection = document.querySelector('.container__products-categoria');
            productsSection.innerHTML = data;
        })
        .catch(error => {
            console.error('Error:', error);
        });

    
}


function ordenarArticulosSand() {
    var selectElement = document.getElementById("select");
    var opcionSeleccionada = selectElement.value;

    fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=8')
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
    // function obtenerProductosGeneral(idcategoria) {
    //     $.ajax({
    //         url: '../back/ordenarCategoriaGeneral.php',
    //         method: 'POST',
    //         data: { idcategoria: idcategoria },
    //         dataType: 'html',
    //         success: function (response) {
    //             // Mostrar los artículos en el contenedor correspondiente
    //             $('#productosContainer').html(response);
    //         },
    //         error: function (xhr, status, error) {
    //             // Manejar el error
    //             console.error(error);
    //         }
    //     });
    // }
    function ordenarArticulos(categoria) {
        var selectElement = document.getElementById("select");
        var opcionSeleccionada = selectElement.value;
    
        fetch('../back/OrdenarCategoriaGeneral.php?opcion=' + opcionSeleccionada + '&categoria=' + categoria)
            .then(response => response.text())
            .then(data => {
                var productsSection = document.querySelector('.container__products');
                productsSection.innerHTML = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('.carousel');
        const prevButton = document.querySelector('.carousel-arrow.prev');
        const nextButton = document.querySelector('.carousel-arrow.next');
    
        prevButton.addEventListener('click', function() {
          carousel.scrollBy({
            left: -carousel.offsetWidth,
            behavior: 'smooth'
          });
        });
    
        nextButton.addEventListener('click', function() {
          carousel.scrollBy({
            left: carousel.offsetWidth,
            behavior: 'smooth'
          });
        });
      });
      