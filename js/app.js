(function(){
    const listElements = document.querySelectorAll('.menu__item--show');
    const list = document.querySelector('.menu__links');
    const menu = document.querySelector('.menu__hamburguer');

    const addClick = ()=>{
        listElements.forEach(element =>{
            element.addEventListener('click', ()=>{
                let subMenu = element.children[1];
                let height = 0;
                element.classList.toggle('menu__item--active');

                if(subMenu.clientHeight === 0){
                    height = subMenu.scrollHeight;
                }
                subMenu.style.height = `${height}px`;
            });
        });
    }
    const deleteStyleHeight = ()=>{
        listElements.forEach(element=>{
            if(element.children[1].getAttribute('style')){
                element.children[1].removeAttribute('style');
                element.classList.remove('menu__item--active');
            }
        });
    }
    window.addEventListener('resize', ()=>{
        if(window.innerWidth > 800){
            deleteStyleHeight();
            if(list.classList.contains('menu__links--show'))
                list.classList.remove('menu__links--show');
        }else{
            addClick();
        }
    });

    if(window.innerWidth <= 800){
        addClick();
    }
    menu.addEventListener('click', ()=> list.classList.toggle('menu__links--show'));
                    

})();
// Obtén todos los elementos <a> dentro del elemento con el id "categorias"
// var categorias = document.getElementById('categorias').getElementsByTagName('a');

// Recorre todos los elementos <a> y asigna el evento de clic a cada uno
// for (var i = 0; i < categorias.length; i++) {
//     categorias[i].addEventListener('click', function(event) {
//         event.preventDefault();

//         var categoria = this.getAttribute('href');

//         var xhr = new XMLHttpRequest();
//         xhr.onreadystatechange = function() {
//             if (xhr.readyState === XMLHttpRequest.DONE) {
//                 if (xhr.status === 200) {
//                     document.getElementById('container__products').innerHTML = xhr.responseText;
//                 } else {
//                     console.log('Error en la solicitud.');
//                 }
//             }
//         };

//         xhr.open('POST', categoria, true);
//         xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//         xhr.send();
//     });
// }



