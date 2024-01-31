// Función para calcular la suma de los elementos con una clase específica
function calcularSumaPorClase(clase) {
    let elementos = document.getElementsByClassName(clase);
    let suma = 0;
    for (let i = 0; i < elementos.length; i++) {
        suma += parseFloat(elementos[i].value) || 0; // Asegura que el valor sea un número
    }
    return suma;
}

// Función para actualizar los resultados en los inputs
function actualizarResultados() {
    // Actualizar resultados para clases s1 a s17
    for (let i = 1; i <= 17; i++) {
        document.getElementById(`resultadoS${i}`).value = calcularSumaPorClase(`s${i}`);
    }

    // Actualizar resultados para rangos específicos
    document.getElementById("totalS1S5").value = calcularSumaPorClaseRango("s", 1, 5);
    document.getElementById("totalS6S8").value = calcularSumaPorClaseRango("s", 6, 8);
    document.getElementById("totalS9S11").value = calcularSumaPorClaseRango("s", 9, 11);
    document.getElementById("totalS12S13").value = calcularSumaPorClaseRango("s", 12, 13);
    document.getElementById("totalS14S15").value = calcularSumaPorClaseRango("s", 14, 15);
    document.getElementById("totalS16S17").value = calcularSumaPorClaseRango("s", 16, 17);
}

// Función para calcular la suma de los elementos en un rango específico
function calcularSumaPorClaseRango(prefijo, desde, hasta) {
    let suma = 0;
    for (let i = desde; i <= hasta; i++) {
        suma += calcularSumaPorClase(`${prefijo}${i}`);
    }
    return suma;
}

// Llama a la función al cargar la página
window.onload = actualizarResultados;
