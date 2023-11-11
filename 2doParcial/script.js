function cargarContenido(abrir) {
    var contenedor = document.getElementById('principal');
    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            ejecutarScriptsDirectamente(contenedor);
        }
    };
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function ejecutarScriptsDirectamente(contenedor) {
    var scripts = contenedor.getElementsByTagName('script');
    for (var i = 0; i < scripts.length; i++) {
        try {
            eval(scripts[i].innerHTML);
        } catch (error) {
            console.error('Error ejecutando script:', error);
        }
    }
}

function mostrarTabla() {
    var numero = parseInt(document.getElementById('numero').value);
    var limite = parseInt(document.getElementById('limite').value);
    var operacion = document.querySelector('input[name="operacion"]:checked').value;

    if (isNaN(numero) || numero >= 10 || isNaN(limite) || limite <= 0) {
        alert('Por favor, introduce números válidos.');
        return;
    }
    var resultado = '';
    for (var i = 1; i <= limite; i++) {
        if (operacion === 'factorial') {
            resultado += numero + ' x ' + i + ' = ' + (numero * i) + '<br>';
        } else if (operacion === 'sumar') {
            resultado += numero + ' + ' + i + ' = ' + (numero + i) + '<br>';
        } else if (operacion === 'resta') {
            resultado += numero + ' - ' + i + ' = ' + (numero - i) + '<br>';
        } 
    }
    document.getElementById('Resultado').innerHTML = resultado;
}
function menu(){
    menu.innerHTML = "Samantha Mikaela Hinojosa CU:35-5346"
    var contenedor = document.getElementById('menu');
    var ajax = new XMLHttpRequest();
}


function cargarTabla() {
    titulo.innerHTML = "Pregunta 2 Calcuar Tabla"
    historial.innerHTML = "Preciono Pregunta 2"
    var contenedor = document.getElementById('principal');
    var ajax = new XMLHttpRequest();
    
    ajax.open('GET', 'tabla.html', true);
    
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            ejecutarScriptsDirectamente(contenedor);
        }
    };
    
    ajax.setRequestHeader('Content-Type', 'text/html; charset=utf-8');
    ajax.send();
}


function generarTabla() {
    var numero = parseInt(document.getElementById('numero').value);
    var limite = parseInt(document.getElementById('limite').value);
    var operacion = document.querySelector('input[name="operacion"]:checked').value;

    if (isNaN(numero) || numero >= 10 || isNaN(limite) || limite <= 0) {
        alert('Por favor, introduce números válidos.');
        return;
    }
    var resultado = '';
    for (var i = 1; i <= limite; i++) {
        if (operacion === 'factorial') {
            resultado += numero + ' x ' + i + ' = ' + (numero * i) + '<br>';
        } else if (operacion === 'sumar') {
            resultado += numero + ' + ' + i + ' = ' + (numero + i) + '<br>';
        } else if (operacion === 'resta') {
            resultado += numero + ' - ' + i + ' = ' + (numero - i) + '<br>';
        } 
    }
    document.getElementById('Resultado').innerHTML = resultado;
}


function pregunta4(){
    titulo.innerHTML = "Pregunta 4 Insertar Libro"
    historial.innerHTML = "Preciono Pregunta 4"
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `forminsertar.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            principal.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}
function insertar(){
    let form = document.getElementById('form')
    let data = new FormData(form)
    var ajax = new XMLHttpRequest()
    ajax.open("POST", `form-insertaMasivo.php`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            principal.innerHTML = ajax.responseText;
        }
    }
    ajax.send(data);
}


function pregunta3(){
    titulo.innerHTML = "Pregunta 3 Calcular Suma"
    historial.innerHTML = "Preciono Pregunta 3"
    var ajax = new XMLHttpRequest()
    ajax.open("GET", `formN.html`, false);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4 && ajax.status == 200){
            principal.innerHTML = ajax.responseText;
        }
    }
    ajax.send();
}

function getCuadros(){
    let suma = document.getElementById('suma').value
    fetch(`introducir.php?suma=${suma}`)
    .then(response => response.text())
    .then(data => principal.innerHTML = data);
}

function calcular(){
    let cuadros = document.querySelectorAll('.cuadro')
    var suma = 0
    cuadros.forEach(cuadro => {
        suma += parseInt(cuadro.value)
    });
    historial.innerHTML = suma
}


