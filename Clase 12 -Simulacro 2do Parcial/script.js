function pregunta2(){
    titulo.innerHTML = "Pregunta 2 DOM en Javascript"
    let container = document.querySelector(".container")
    let buttons1 = document.querySelectorAll('.button-1')
    let buttons2 = document.querySelectorAll('.button-2')
    console.log(container)
    titulo.style.backgroundColor = "black"
    titulo.style.borderBottom = "2px solid black"
    container.style.border = "2px solid black"
    menu.style.borderBottom = "2px solid black"
    resultado.style.backgroundColor = "gray"
    resultado.style.borderBottom = "2px solid black"
    resultado.style.borderLeft = "2px solid black"
    contenido.style.borderBottom = "2px solid black"
    mensaje.style.backgroundColor = "black"
    buttons1.forEach(button => {
        button.style.backgroundColor = "gray"
        button.style.border = "2px solid black"
    });
    buttons2.forEach(button => {
        button.classList.add('black')
    });
}

function pregunta3(){
    titulo.innerHTML = "Pregunta 3 Insertar en Ajax"
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `forminsertar.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function insertar(){
    let form = document.getElementById('form')
    let data = new FormData(form)
    var ajax = new XMLHttpRequest()
    ajax.open("POST", `insertar.php`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            mensaje.innerHTML = ajax.responseText;
        }
    }
    ajax.send(data);
}

function pregunta4(){
    fetch("listar.php")
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function pregunta5(){
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `formN.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function getCuadros(){
    let n = document.getElementById('n').value
    fetch(`introducir.php?n=${n}`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data);
}

function calcular(){
    let cuadros = document.querySelectorAll('.cuadro')
    var suma = 0
    cuadros.forEach(cuadro => {
        suma += parseInt(cuadro.value)
    });
    resultado.innerHTML = suma
}

function pregunta1(){
    fetch(`pregunta1.html`)
    .then(response => response.text())
    .then(data => contenido.innerHTML = data)
}

function login(){
    let form = document.getElementById('login_form')
    let data = new FormData(form)
    fetch(`autenticar.php`, {method:'POST', body: data})
    .then(response => response.text())
    .then(data => mensaje.innerHTML = data)
}