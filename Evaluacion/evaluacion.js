/*Universidad de las Fuerzas Armadas ESPE
Nombre: Pablo Tamayo
NRC: 10047

Evaluación Formativa 
1.	Crea una variable llamada "nombre" y asígnale tu nombre como valor.*/
let nombre = "Pablo";
//2.	Crea una función llamada "suma" que reciba dos parámetros (a y b) y retorne la suma de ambos.
let a=5;
let b=40;

function suma(a,b){
  let sum=a+b;
  console.log("La suma de los numeros es:"+ sum);
}

suma(a,b);

//3.	Escribe un condicional que verifique si una persona es mayor de edad. Si es mayor de edad, imprime "Es mayor de edad", de lo contrario, imprime "Es menor de edad".
let edad=5;

if(edad>=18){
  console.log("Es mayor de edad");
}else{
  console.log("Es menor de edad");
}
//4.	Crea un ciclo "for" que imprima los números del 1 al 5.
for(var i=1;i<=5;i++){
  console.log(i);
}

//5.	Crea una función llamada "imprimirArray" que reciba como parámetro un array y lo imprima elemento por elemento. Respuesta:
let array=["Hola","como","estas"];

function imprimirArray(array){
    for(var i=0;i<array.length;i++){
      console.log(array[i]);
    }
} 

imprimirArray(array);

//6.	¿Cuánto es 2 + 2? Respuesta: 4


function sumar(){
  let num1=2;
  let num2=2;
  let sum=num1+num2;
  console.log("Respuesta: "+ sum);
}

sumar();

//11.	Crea una función llamada "primerElementoArray" que reciba como parámetro un array y retorne el primer elemento.

let array2=["Hola","como","estas"];

function primerElementoArray(array2){
      console.log(array2[0]);
} 

primerElementoArray(array2);


//12.	Crea una función llamada "imprimirElementosArray" que reciba como parámetro un array y lo imprima usando un ciclo "for".

let arrayN=[1,2,3,4,5];

function imprimirElementosArray(arrayN){
    for(let i=0;i<arrayN.length;i++){
      console.log(arrayN[i]);
    }
} 

imprimirElementosArray(arrayN);


