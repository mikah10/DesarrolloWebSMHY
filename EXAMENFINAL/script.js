function Pregunta1(){
    contenido.innerHTML=
    `<div class="card">
    <div style="background-color: rgb(138, 177, 250);">
        <div style="font-size: larger; color: rgb(58, 54, 173); ">SIS 256 Programacion Web</div>
        <div style="color: rgb(77, 71, 201);">Examen Final - 02 - 12 -20203 7:00 am</div>
        <img src="images/mika.jpg" alt="perfil" width="110px" height="120px">
    </div>
        <div style="font-size: large;">Nombre Completo Estudiante</div>
        <div>Samantha Mikaela Hinojosa Yucra</div>
        <div >Carrera: Ingenieria de Sistemas</div>
        <div>Repositorio Examen:</div>
    </div>
    `
}

  

function Pregunta2(){
    titulo.innerHTML = "Pregunta 2";
    fetch(`pregunta2.html`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data)
}

function pregunta2(){
    titulo.innerHTML = `Lista`
    numero = 0
    contenido.innerHTML = `<div class="num_form">
        <div>Nro Cuadros</div>
        <input type="number" id="numero">
        <button onclick="obtenerTabla()">Obtener</button>
    </div>`
}

function Pregunta3(){
    titulo.innerHTML = `Pregunta 3`
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `pregunta3.php?numero=${numero}&materia=${selected}`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function Pregunta4(){
    titulo.innerHTML = "Pregunta 4";
    fetch("Pregunta4.php")
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
    submenu.innerHTML= `
    <div class= "buttons" onclick="listar()"> Listar</div>
    <div class= "buttons" onclick="insertar()"> Insertar</div>`
   
}

function listar(){
    fetch("listar.php")
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}



function insertar(){
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `forminsertar.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
    let form = document.getElementById('form')
    let data = new FormData(form)
    var ajax = new XMLHttpRequest()
    ajax.open("POST", `insertar.php`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            pie.innerHTML =`libro introducido`
        }
    }
    ajax.send(data);
}

function Pregunta5(){
    titulo.innerHTML = "Pregunta 5";
    var contenedor;
    contenedor = document.getElementById('contenido');
    fetch('pregunta5.html')
        .then(response => response.text())
        .then(data => {
            contenedor.innerHTML = data;
        });
    var colorSeleccionado = document.getElementById('color').value;
    var idSeleccionado = document.getElementById('selectId').value;
    var tipoColor = document.getElementById('selectColor').value; 
    var elemento = document.getElementById(idSeleccionado);  
    if (tipoColor === 'backgroundColor') {
        elemento.style.backgroundColor = colorSeleccionado;
    } else if (tipoColor === 'color') {
        elemento.style.color = colorSeleccionado;
    }
    }