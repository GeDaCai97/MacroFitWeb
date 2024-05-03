function calcularMacros() {
    var peso = parseFloat(document.getElementById('peso').value);
    var altura = parseFloat(document.getElementById('altura').value);
    var edad = parseInt(document.getElementById('edad').value);
    var sexo = document.getElementById('sexo').value;
    var actividad = parseFloat(document.getElementById('actividad').value);
    var objetivo = document.getElementById('objetivo').value;
    var distribucion = document.getElementById('distribucion').value.split(',');

    // Calculamos la TMB según el sexo del usuario
    var tmb;
    if (sexo == 'hombre') {
        tmb = 88.362 + (13.397 * peso) + (4.799 * altura) - (5.677 * edad);
    } else {
        tmb = 447.593 + (9.247 * peso) + (3.098 * altura) - (4.330 * edad);
    }
    
    // Ajustamos la TMB según el nivel de actividad del usuario
    var calorias = tmb * actividad;

    // Ajustamos las calorías según el objetivo del usuario
    switch (objetivo) {
        case 'perder':
            calorias *= 0.85; // reducir calorías en un 15%
            break;
        case 'ganar':
            calorias *= 1.15; // aumentar calorías en un 15%
            break;
        case 'grasa':
            calorias *= 0.75; // reducir calorías en un 25%
            break;
    }

    // Calculamos los macronutrientes según la distribución seleccionada
    var carbohidratos = calorias * distribucion[0] / 4;
    var proteinas = calorias * distribucion[1] / 4;
    var grasas = calorias * distribucion[2] / 9;

    var resultado = "Calorías: " + calorias.toFixed(2) + "<br>" +
                    "Carbohidratos: " + carbohidratos.toFixed(2) + "g<br>" +
                    "Proteínas: " + proteinas.toFixed(2) + "g<br>" +
                    "Grasas: " + grasas.toFixed(2) + "g";

    document.getElementById('result').innerHTML = resultado;
}