// Ejercicio 2: Cálculo del área de un triángulo utilizando function expression (función
//     anónima)
//     En este ejercicio, se utiliza una función expresiva o función anónima
//     para calcular el área de un triángulo. La función recibe la base y la altura como 
//     parámetros, realiza el cálculo del área y devuelve el resultado. Se realiza la 
//     llamada a la función y se muestra el resultado en la consola.

let area= function(b,h){
    return (b*h)/2;
}

console.log(area(5,4));

// (function () {
//     //...
//  });
//  Ten en cuenta que si no colocas la función anónima dentro de (), obtendrás un error 
//  de sintaxis. Los paréntesis () convierten a la función anónima en una expresión que 
//  devuelve un objeto de función.
