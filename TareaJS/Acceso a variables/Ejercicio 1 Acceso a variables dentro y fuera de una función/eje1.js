// Ejercicio 1: Acceso a variables dentro y fuera de una función
// En este ejercicio, se declara una variable global y una variable local dentro de 
// una función.Se muestra en la consola el valor de ambas variables tanto dentro 
// como fuera de la función para observar el alcance de cada una.

let datG=12;

function revisar(){
    let datL= "Tu edad es: ";
    console.log(datL + datG);
}
revisar();
console.log(datL+datG)