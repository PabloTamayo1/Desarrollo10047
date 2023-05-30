/*1.2.3 Traduce a código JavaScript las variables del ejemplo anterior y deja tu código en los comentarios.*/
let nombre= "Pedro";
    console.log(typeof nombre);
let apellido= "Pascal";
	console.log(typeof apellido);
let usr= "ppascal";
    console.log(typeof usr);
let edad= 25;
	console.log(typeof edad);
let correo="ppascal@espe.edu.ec";
		          console.log(typeof correo);
let mayorDedad= 25;
let mayedad;
    if(mayorDedad>=18){
  			console.log(mayedad=true);
  			console.log(typeof mayedad);
     }else{
  			console.log(mayedad=false);
  			console.log(typeof mayedad);
     }
let dinAho= 2500;
	console.log(typeof dinAho);
let deudas= 150;
	console.log(typeof deudas);

/*1.2.4 Calcula e imprime las siguientes variables a partir de las variables del ejemplo anterior*/
let nombreCompleto="Karina Perez";
console.log(nombreCompleto);

let dineroReal=dinAho-deudas;
console.log(dineroReal);

/*1.3.2 Convierte el siguiente código en una función, pero, cambiando cuando sea necesario las variables constantes por parámetros y argumentos en una función:
const name = "Diego Medardo";
const lastname = "Saavedra García";
const completeName = name + lastname;
const nickname = "statick";

console.log("Mi nombre es "
+ completeName
+ ", pero prefiero que me digas "
+ nickname + ".");*/

function datos(name,lastname,nickname){
   console.log("Mi nombre es "+name +" "+lastname+", "+ "pero prefiero que digas "+nickname);
}

datos("Diego","Toapanta","Dieguinl");

/*1.4.2 Replica el comportamiento del siguiente código que usa la sentencia switch utilizando if, else y else if:
const tipoDeSuscripcion = "Basic";

switch (tipoDeSuscripcion) {
      case "Free":
console.log("Solo puedes tomar los cursos gratis");
break;
      case "Basic":
console.log("Puedes tomar casi todos los cursos de ESPE durante un mes");
break;
      case "Expert":
console.log("Puedes tomar casi todos los cursos de ESPE durante un año");
break;
      case "ExpertPlus":
console.log("Tú y alguien más pueden tomar TODOS los cursos
de ESPE durante un año");
break;
}*/


const tipoDeSuscripcion = "Basic";

if(tipoDeSuscripcion=="Free"){
  console.log("Solo puedes tomar los cursos gratis");
}else if(tipoDeSuscripcion=="Basic"){
  console.log("Puedes tomar casi todos los cursos de ESPE durante un mes");
}else if(tipoDeSuscripcion=="Expert"){
  console.log("Puedes tomar casi todos los cursos de ESPE durante un año");
}else if(tipoDeSuscripcion=="ExpertPlus"){
  console.log("Tú y alguien más pueden tomar TODOS los cursos de ESPE durante un año");
}else{
  console.log("Ese tipo de subscripcion no existe");
}

/*1.4.3 Replica el comportamiento de tu condicional anterior con if, else y else if, pero ahora solo con if (sin else ni else if).*/

//const tipoDeSuscripcion = "Expert"; //Descomentar la linea y probar 

if(tipoDeSuscripcion=="Free"){
  console.log("Solo puedes tomar los cursos gratis");
}if(tipoDeSuscripcion=="Basic"){
  console.log("Puedes tomar casi todos los cursos de ESPE durante un mes");
}if(tipoDeSuscripcion=="Expert"){
  console.log("Puedes tomar casi todos los cursos de ESPE durante un año");
}if(tipoDeSuscripcion=="ExpertPlus"){
  console.log("Tú y alguien más pueden tomar TODOS los cursos de ESPE durante un año");
}


/*Bonus: si ya eres una experta o experto en el lenguaje, te desafío a comentar
cómo replicar este comportamiento con arrays y un solo condicional.*/ 

//const tipoDeSuscripcion = "Basic"; //Descomentar la linea y probar

const opSus = [
  {
    tipo: "Free",
    mensaje: "Solo puedes tomar los cursos gratis"
  },
  {
    tipo: "Basic",
    mensaje: "Puedes tomar casi todos los cursos de ESPE durante un mes"
  },
  {
    tipo: "Expert",
    mensaje: "Puedes tomar casi todos los cursos de ESPE durante un año"
  },
  {
    tipo: "ExpertPlus",
    mensaje: "Tú y alguien más pueden tomar TODOS los cursos de ESPE durante un año"
  }
];

const susp = opSus.find(opcion => opcion.tipo === tipoDeSuscripcion);

if (susp) {
  console.log(susp.mensaje);
} else {
  console.log("Tipo de suscripción no válido");
}


/*1.5.2 Replica el comportamiento de los siguientes ciclos for utilizando ciclos while:*/

/*for (let i = 0; i < 5; i++) {
      console.log("El valor de i es: " + i);
}*/

//Replicando con ciclo while
let i=0;
while(i<5){
    console.log("El valor de i es: "+i);
    i++;
}

/*for (let i = 10; i >= 2; i--) {
      console.log("El valor de i es: " + i);
}*/

//Replicando con ciclo while
let j=10;
while(j>=2){
    console.log("El valor de j es: "+j);
    j--;
}

/*1.5.3 Escribe un código en JavaScript que le pregunte a los usuarios cuánto es 2 + 2. Si responden bien, mostramos un mensaje de felicitaciones, pero si responden mal, volvemos a empezar.*/

//Pista: puedes usar la función prompt de JavaScript.

let ingreso;
do{
    ingreso=prompt("Ingrese un numero:")
    console.log(ingreso);
}while(ingreso!=4)

/*1.6.2 Crea una función que pueda recibir cualquier array como parámetro e imprima su primer elemento.*/

function mostrarPrimerElemento(array) {
    if (array.length > 0) {
      let primerElemento = array[0];
      console.log("El primer elemento del arreglo es:", primerElemento);
    } 
  }
  
  var array = [90, 100, 110, 120, 130];
  mostrarPrimerElemento(array);

/*1.6.3 Crea una función que pueda recibir cualquier array como parámetro e imprima todos sus elementos uno por uno (no se vale imprimir el array completo).*/

function mostrarElementos(array) {
	array.forEach(function(elemento) {
	  console.log(elemento);
	});
  }
let array = [11.5, 400, 33, 9, 105];
mostrarElementos(array);


/*1.6.4 Crea una función que pueda recibir cualquier objeto como parámetro e imprima todos sus elementos uno por uno (no se vale imprimir el objeto completo).*/
function mostrarElementosObjeto(objeto) {
	for (var clave in objeto) {
	  if (objeto.hasOwnProperty(clave)) {
		console.log(clave + ": " + objeto[clave]);
	  }
	}
  }
  
var miObjeto = { nombre: "Mishell", edad: 26, ciudad: "Guayaquil" };
mostrarElementosObjeto(miObjeto);
  