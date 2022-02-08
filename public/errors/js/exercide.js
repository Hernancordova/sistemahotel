/* 
EJERCICIO 2
Secuencia inventada: f(n) = (f(n-1) + f(n-2) + f(n-3)) x 2
Donde las primeras tres posiciones son dadas por el array recibido por parametro y a partir de
la siguiente se calcula como la suma de los 3 números anteriores multiplicados por dos.
array es un arreglo de 3 posiciones que puede contener números o strings, aquellas posiciones que
sean números debemos dejarlas tal cual están pero las que tengan strings debemos calcular su cantidad
de caracteres para usarlos en la secuencia.
Por ejemplo si recibimos:
["Franco", 1, "Henry"]
deberíamos tener los siguientes 3 valores iniciales de la secuencia 
f(0) = 6, 
f(1) = 1 
f(2) = 5
(Ya que "Franco" tiene 6 caracteres y "Henry", 5)
A partir de ahí la cuarta posición sería  (6 + 1 + 5) * 2 = 24 y así sucesivamente
La función secuenciaHenry debe devolver el enésimo numero de la serie, por ejemplo para el array
antes mencionado:

secuencia: 6, 1, 5, 24, 60, 178, 524
secuenciaHenry(0) // 6  ya que el elemento de la posición 0 es cero
secuenciaHenry(1) // 1 ya que el elemento de la posición 1 es 1
secuenciaHenry(6) // 524 ya que el elemento de la posición 6 es 524
Para números negativos de n debe devolver false */

function secuenciaHenry(array, n) {
  console.log(array)
  // if (n < 0) return false;
  // if (n === 0) return 0;
  // if (n === 1) return 1;
  // var newArray = [];
  // array.forEach(function (element) {
  //   if (typeof element === "string") {
  //     newArray.push(element.length);
  //   } else {
  //     newArray.push(element);
  //   }
  // });
  // f(n) = (f(n-1) + f(n-2) + f(n-3)) x 2
  return ( secuenciaHenry(newArray, n-1) + secuenciaHenry(newArray, n-2) + secuenciaHenry(newArray, n-3) * 2 );
}

const currentArray = ["Franco", 1, "Henry"]

secuenciaHenry(currentArray, currentArray.length)
// console.log(2)