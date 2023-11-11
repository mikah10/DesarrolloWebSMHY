var btnCargar = document.getElementById('cargar');

function cargarContAjax() {
    // 1. Crear el objeto XMLHttpRequest
    var xhr = new XMLHttpRequest();
    // 2. abrimos la conexion
    xhr.open('GET', 'datos.txt', true); //true para que sea asincrono
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200){
            var contenido = document.getElementById('contenido');
            contenido.innerHTML = xhr.responseText;
        }
    }
xhr.send();


}


btnCargar.addEventListener('click', cargarContAjax);
