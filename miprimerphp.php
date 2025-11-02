<!DOCTYPE html>
<html>
<body>
 
<?php
echo "My primera web";
//Ejercicio 3 Variables
$txt = "Hola Mundo";
$x = 5;
$y = "10.5";

echo "<br><br><br>";
echo "El valor de mi variable txt es:" . $txt; //El punto es para concatenar

// Ejercicio 4 edad y nombre 
$edad = "20";
$nombre = "Javier";
echo "Mi edad es $edad y nombre es $nombre";

// caracteres especiales
echo "<br>Este es un caracter de simbolo de dollar: /$x";
echo "<br>Este es un caracter de comillas dobles: \"";
echo "<br>Este es un caracter de comillas simples: \'";
echo "<br>Este es un caracter de comillas salto de linea: \n";
//boolean 
$variableBoo1 = true;
$variableBoo2 = TRUE;

$x = true;
$tipodato = "var_dump($x)";

echo "<br>el tipo de dato de la variable \$x es: $tipodato ";
echo "<br> $tipodato";
//
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "mi coche es un : .$cars[2]";

$alumno = array("Javier","Corredera","Contreras","20","6","SI");
echo "<br><br>";
echo "El nombre es ".$alumno[0] ." El apellido es ".$alumno[1] ." y su edad es de ".$alumno[3]; 

$fruta = array("manzanas","1.20","2");
echo "<br>";
echo "Los " .$fruta[0] ." están a " .$fruta[1] ." el KG";

$multiplicacion = array("manzanas","1.50","3");
echo "<br>";
echo "Los " .$multiplicacion[0] ." cuestan " .$multiplicacion[1] .$multiplicacion[2];

//   <>   != significa que no tien el mismo valor
//   !== no igual ni el valor ni el tipo

/*$edadhijo = 15;
$edadpadre = 50;

if ($edadhijo > 18) {
  echo "Puedo salir al recreo ";
}
if ($edadHijo < 18) {
  echo "No puedo salir al recreo ";
}

else
if ($edadhijo > 18) {
  echo "Puedo salir al recreo ";
  else 
    echo "No puede salir al recreo";

}*/


echo "<h3> 1. Actividad de Notas</h3>";
/* 
1º
>> array "Notas" 5 3 2 7 10 9 8 2 4
$ aprobados >> El número de notas aprobados >= 5
$ suspensos > El numero de notas suspensas <=4
*/
$aprobados = 0;
$suspensos = 0;
$notas = array(5, 3, 2, 7, 10, 9, 8, 2, 4);
if ($notas[0] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}
if ($notas[1] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}
if ($notas[2] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}
if ($notas[3] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}
if ($notas[4] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}
if ($notas[5] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}
if ($notas[6] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}
if ($notas[7] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}
if ($notas[8] >= 5){
    $aprobados += 1;
} else {
    $suspensos += 1;
}

echo "El número de aprobados es: " . $aprobados;
echo "<br>";
echo "El número de suspensos es: " . $suspensos;

echo "<br>";
echo "<h3> 2. Actividad de frutas</h3>";
/* 
Variable de frutas $precio kg 10 11'3 1'28 4'7 2

Si precio de la furta es >= 4 le hago descuento del 10% y guardo el valor modificado en su posición.
Sino, incementa un 5% el precio y se almacena en su posición
*/

$frutas = array(10, 11.3, 1.28, 4.7, 2);
if ($frutas[0] >= 4){
    $frutas[0] = $frutas[0] - ($frutas[0] * 10 / 100);
} else {
    $frutas[0] = $frutas[0] + ($frutas[0] * 5 / 100);
}
if ($frutas[1] >= 4){
    $frutas[1] = $frutas[1] - ($frutas[1] * 10 / 100);
} else {
    $frutas[1] = $frutas[1] + ($frutas[1] * 5 / 100);
}
if ($frutas[2] >= 4){
    $frutas[2] = $frutas[2] - ($frutas[2] * 10 / 100);
} else {
    $frutas[2] = $frutas[2] + ($frutas[2] * 5 / 100);
}
if ($frutas[3] >= 4){
    $frutas[3] = $frutas[3] - ($frutas[3] * 10 / 100);
} else {
    $frutas[3] = $frutas[3] + ($frutas[3] * 5 / 100);
}
if ($frutas[4] >= 4){
    $frutas[4] = $frutas[4] - ($frutas[4] * 10 / 100);
} else {
    $frutas[4] = $frutas[4] + ($frutas[4] * 5 / 100);
}
echo "El precio de la fruta 1 es: " . $frutas[0] . " €";
echo "<br>";
echo "El precio de la fruta 2 es: " . $frutas[1] . " €";
echo "<br>";
echo "El precio de la fruta 3 es: " . $frutas[2] . " €";
echo "<br>";
echo "El precio de la fruta 4 es: " . $frutas[3] . " €";
echo "<br>";
echo "El precio de la fruta 5 es: " . $frutas[4] . " €";

echo "<br>";
echo "<h3> 3. Actividad de media</h3>";
/* 
3º
Calcular la media 
> Si < 5 --> $calificacion será "SUSPENSO"
> Si la media es 7 o 8 será "NOTABLE"
> Si la media es 9 o 10 será "SOBRESALIENTE"
*/
$notas2 = array(5, 3, 2, 7, 10, 9, 8, 2, 4);
$media = 0;
$calificacion = "";
$media = ($notas2[0] + $notas2[1] + $notas2[2] + $notas2[3] + $notas2[4] + $notas2[5] + $notas2[6] + $notas2[7] + $notas2[8]) / 9;
if ($media < 5){
    $calificacion = "SUSPENSO";
} elseif ($media >= 7  && $media <= 8){
    $calificacion = "NOTABLE";
} elseif ($media >= 9 && $media <= 10){
    $calificacion = "SOBRESALIENTE";
} else {
    $calificacion = "APROBADO";
}
echo "La media de las notas es: " . $media;
echo "<br>";
echo "La calificación es: " . $calificacion;

//otra forma



echo "<h3>Actividad 2 de switch</h3>";
$frutas2 = array(10, 11.3, 1.28, 4.7, 2);
switch ($frutas2){
case ($frutas2[0] >= 4):
    $frutas2[0] = $frutas2[0] - ($frutas2[0] * 10 / 100);
    break;
case ($frutas2[0] < 4):
    $frutas2[0] = $frutas2[0] + ($frutas2[0] * 5 / 100);
    break;
case ($frutas2[1] >= 4):
    $frutas2[1] = $frutas2[1] - ($frutas2[1] * 10 / 100);
    break;
case ($frutas2[1] < 4):
    $frutas2[1] = $frutas2[1] + ($frutas2[1] * 5 / 100);
    break;
case ($frutas2[2] >= 4):
    $frutas2[2] = $frutas2[2] - ($frutas2[2] * 10 / 100);
    break;
case ($frutas2[2] < 4):
    $frutas2[2] = $frutas2[2] + ($frutas2[2] * 5 / 100);
    break;
case ($frutas2[3] >= 4):
    $frutas2[3] = $frutas2[3] - ($frutas2[3] * 10 / 100);
break;
case ($frutas2[3] < 4):
    $frutas2[3] = $frutas2[3] + ($frutas2[3] * 5 / 100);
    break;
case ($frutas2[4] >= 4):
    $frutas2[4] = $frutas2[4] - ($frutas2[4] * 10 / 100);
    break;
case ($frutas2[4] < 4):
    $frutas2[4] = $frutas2[4] + ($frutas2[4] * 5 / 100);
}
echo "El precio de la fruta 1 es: " . $frutas2[0] . " €";
echo "<br>";
echo "El precio de la fruta 2 es: " . $frutas2[1] . " €";
echo "<br>";
echo "El precio de la fruta 3 es: " . $frutas2[2] . " €";
echo "<br>";
echo "El precio de la fruta 4 es: " . $frutas2[3] . " €";
echo "<br>";
echo "El precio de la fruta 5 es: " . $frutas2[4] . " €";

echo "<h3>Actividad 3 de switch</h3>";
$notas2 = array(5, 3, 2, 7, 10, 9, 8, 2, 4);
$media = 0;
$calificacion = "";
$media = ($notas2[0] + $notas2[1] + $notas2[2] + $notas2[3] + $notas2[4] + $notas2[5] + $notas2[6] + $notas2[7] + $notas2[8]) / 9;
if ($media < 5){
    $calificacion = "SUSPENSO";
} elseif ($media >= 7  && $media <= 8){
    $calificacion = "NOTABLE";
} elseif ($media >= 9 && $media <= 10){
    $calificacion = "SOBRESALIENTE";
} else {
    $calificacion = "APROBADO";
}
echo "La media de las notas es: " . $media;
echo "<br>";
echo "La calificación es: " . $calificacion;


$i = 1;
/*$i++ es igual que $i=$i + 1
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
}

// Siempre se ejecuta ala menos una vez el contenido del do.
do {
  echo "estoy dentro de Do while <BR>";
  echo $i;
  echo "<BR>"
} while ($i < 6);  
*/
//ejercicios 1 con bucle 
$elementos= count($notas);//cuenta los elementos del arry notas
//while
$i = 0;
$aprobados = 0;
$suspensos = 0;
while ($i < $elementos) {//La nota es mayor igual que 5
    if ($notas[$i] >= 5) {
        $aprobados= $aprobados + 1 ;//$aprobados ++
    } 
    else {
        $suspensos= $suspensos +1;
    }
    $i++; //$i = $i +1
}
 echo "Los aprobados son:" . $aprobados . "<br>";
    echo "Los suspensos son " . $suspensos . "<br>";
//do
$elementos= count($notas);
$i = 0;
$aprobados = 0;
$suspensos = 0;
do 
{
    if ($notas[$i] >= 5) {
        $aprobados= $aprobados + 1 ;//$aprobados ++
    } 
    else {
        $suspensos= $suspensos +1;
    }
    $i++; //$i = $i +1
}
while ($i <count (value: $notas));
    echo "Los aprobados son:" . $aprobados . "<br>";
    echo "Los suspensos son " . $suspensos . "<br>";

// for loop
$aprobados = 0;
$suspensos = 0;
for ($i = 0; $i < count($notas); $i++){
        if ($notas[$i] >= 5) {
        $aprobados = $aprobados + 1 ;//$aprobados ++
    } 
    else {
        $suspensos= $suspensos +1;
    }
    $i++;
}
echo "Los aprobados son:" . $aprobados . "<br>";
echo "Los suspensos son " . $suspensos . "<br>";
//$anno=array ()comprobar si un año es Bisiesto
$anno=2024;
if (($anno % 4 == 0 && $anno % 100 != 0)        || ($anno % 400 == 0)) {
    echo "$anno es un año bisiesto";
} else {
    echo "$anno no es un año bisiesto";
}           

//imprimir la lista de los 100 primeros numeros pares y almacenarla en un array
$numerosPares = array();
for ($i = 0; $i <= 200; $i += 2)    {
    $numerosPares[] = $i; // Agrega el número par al array
}   
echo "<br>Los primeros 100 números pares son: <br>";
for ($i = 0; $i < count($numerosPares); $i++) {
    echo $numerosPares[$i] . " ";
}

echo "<br><h3>Actividad 1</h3>";
//1- Crea un programa que recorra del 1 al 30 e imprima:"Fizz" si el número es múltiplo de 3,"Buzz" si es múltiplo de 5,"FizzBuzz" si es múltiplo de ambos,o el número en caso contrario.//
for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $i . "<br>";
    }
}  //Poner primero la condicion de tenga mas requisitos en este caso multiplo de 3 y 5 antes que la 3 y 5 por separado

echo "<br><h3>Actividad 2</h3>";
//2.- Escribe un programa que aconseje con un mensaje por pantalla la necesidad de llevar paraguas en función del tiempo.$a tomará los valores: 0 si no llueve y 1 si sí llueve. $b tomara los valores: 0 si no hace viento y 1 si hace viento.Si llueve y no hace viento, "Se necesita paraguas".Si llueve y sí hace viento, "No se necesita paraguas".En cualquier otro caso "No se necesita paraguas"//
$a = 1; // 0 si no llueve, 1 si llueve
$b = 0; // 0 si no hace viento, 1 si hace viento
if ($a == 1 && $b == 0) {
    echo "Se necesita paraguas";
} elseif ($a == 1 && $b == 1) {
    echo "No se necesita paraguas";
} else {
    echo "No se necesita paraguas";
}
echo "<br><h3>Actividad 3</h3>";
//3.- Modifica el ejercicio anterior para añadir una tercera variable.$c tomará los valores posibles de temperatura en ºC.Considera que si la temperatura es mayor a 37ºC y no llueve, ni hace viento, deberán tambien sacar un paraguas.
$c = 38; // temperatura en ºC
if ($a == 1 && $b == 0) {
    echo "Se necesita paraguas";
} elseif ($a == 1 && $b == 1) {
    echo "No se necesita paraguas";
} elseif ($c > 37 && $a == 0 && $b == 0) {
    echo "Se necesita paraguas";
} else {
    echo "No se necesita paraguas";
}
echo "<br><h3>Actividad 4</h3>";
//4.- Haz un programa que pida tres números y determine si al menos uno de ellos es mayor que 100, usando operadores lógicos y condicionales.$numero = readline("Por favor, ingresa un número: ");
$numero1 = 150;
$numero2 = 80;
$numero3 = 45;
if ($numero1 > 100 || $numero2 > 100 || $numero3 > 100) {
    echo "Al menos uno de los números es mayor que 100.";
} else {
    echo "Ninguno de los números es mayor que 100.";
}
echo "<br><h3>Actividad 5</h3>";
//5.- Escribe un programa que pida un número y usando un bucle while, imprima todos los números desde ese número hasta cero, pero solo si el número es positivo.
$numero = 5; // Número de inicio
if ($numero >= 0) { // Verifica si el número es positivo
    while ($numero >= 0) { // Bucle mientras el número sea mayor o igual a cero
        echo $numero . "<br>"; // Imprime el número actual
        $numero--; // Decrementa el número en 1
    }
} else { // Si el número no es positivo
    echo "El número no es positivo."; 
}   

echo "<br><h3>Actividad 6</h3>";
//6.- Escribe un programa que calcule un número al azar, y luego pida un número al usuario repetidamente, hasta que el usuario acierte.Cuando acierte muestrale un mensaje por pantalla de enhorabuena e indicale el número de intentos que ha necesitado.$numero =rand(1, 100);
$numeroSecreto = rand(1, 100); // Número aleatorio entre 1 y 100
$intentos = 0; //  Contador de intentos
do {
    $numeroUsuario = rand(1, 100); // Simulamos la entrada del usuario con un número aleatorio
    $intentos++; // Incrementa el contador de intentos
} while ($numeroUsuario != $numeroSecreto); // Repite hasta que el usuario acierte
echo "¡Enhorabuena! Has acertado el número $numeroSecreto en $intentos intentos."; // Mensaje de felicitación

echo "<br><h3>Actividad 7</h3>";
//7.- Crea un programa que pida un número y verifique si es un número primo o no. Usa bucles y condicionales.
$numero = 29; // Número a verificar
$esPrimo = true; // Suponemos que el número es primo
if ($numero <= 1) { // Los números menores o iguales a 1 no son primos
    $esPrimo = false; // Cambiamos la suposición
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) { // Verificamos divisores desde 2 hasta la raíz cuadrada del número
        if ($numero % $i == 0) { // Si encontramos un divisor 
            $esPrimo = false; // Cambiamos la suposición
            break;
        }
    }
}
if ($esPrimo) {
    echo "$numero es un número primo."; // Si la suposición se mantiene
} else {
    echo "$numero no es un número primo."; // Si encontramos un divisor
}
echo "<br><h3>Actividad 8</h3>";
//8.- Calculadora. Menu: pulsa 0 para salir, 1 para sumar, 2 para restar, 3 multiplica y 4 dividir. Si pulsa 1, 2, 3, o 4, debe pedirle al usuario los números y mostrarle el resultado de la operación seleccionada.
$operacion = 4; // Simulamos la selección de operación
$num1 = 10; // Primer número
$num2 = 5; // Segundo número
do {
   
    echo "<br>===== CALCULADORA =====<br>";
    echo "0 - Salir<br>";
    echo "1 - Sumar<br>";
    echo "2 - Restar<br>";
    echo "3 - Multiplicar<br>";
    echo "4 - Dividir<br>";
    $opcion = readline("Elije una opcion: ");

    if ($opcion >= 1 && $opcion <= 4) {
        $num1 = readline("Ingresa el primer numero: ");
        $num2 = readline("Ingresa el segundo numero: ");
        $resultado = 0;

        if ($opcion == 1) {
            $resultado = $num1 + $num2;
            echo "El resultado de la suma es: $resultado<br>";
        } elseif ($opcion == 2) {
            $resultado = $num1 - $num2;
            echo "El resultado de la resta es: $resultado<br>";
        } elseif ($opcion == 3) {
            $resultado = $num1 * $num2;
            echo "El resultado de la multiplicacion es: $resultado<br>";
        } elseif ($opcion == 4) {
            if ($num2 == 0) {
                echo "Error: no se puede dividir por cero.<br>";
            } else {
                $resultado = $num1 / $num2;
                echo "El resultado de la divicion es: $resultado<br>";
            }
        } 
    } elseif ($opcion != 0) {
        echo "Opcion no valida. Intentalo de nuevo.\n";
    }

} while ($opcion != 0);
echo "Saliendo de la calculadora...<br>";
//echo strlen("Hello world!"); para contar caracteres
//echo strpos("Hello world!", "world"); para encontrar la posicion de una palabra
$nombre = "Javier Corredera Contreras";
$pos = strpos($nombre, "Corredera");
$apellido = substr($nombre, $pos, 100);
echo "<br> El apellido es: " . $apellido;

//echo str_word_count("Hello world!"); para contar palabras
$nombre = "Javier Corredera Contreras";
$J = str_word_count($nombre);
echo substr($nombre, 0, 6);
//$x = "Hello World!"; echo strtoupper($x); // convierte a mayusculas
//$x = "Hello World!"; echo strtolower($x); // convierte a minusculas
//$x = "Hello World!"; echo str_replace("World", "Dolly", $x); // reemplaza una palabra por otra
//$x = "Hello World!"; echo strrev($x); // invierte una cadena
//$x = " Hello World! "; echo trim($x); // elimina espacios en blanco al inicio y al final de una cadena 

//$x = "Hello World!";
//$y = explode(" ", $x);
//Use the print_r() function to display the result:
//print_r($y); 

//Result:
//Array ( [0] => Hello [1] => World! ) convierte una cadena en un array basandose en el caracter que le digamos

//$x = "Hello";
//$y = "World";
//$z = $x . $y;
//echo $z; // concatena dos cadenas

//$x = "Hello World!";
//echo substr($x, 6,); // devuelve una parte de una cadena empezando desde la posicion que le digamos,el 6 es al posicion que empieza y el segundo nuemro hasta donde llega


echo "<br><h3>Actividad 9</h3>";
//9.-  (en clase)Escribe un programa que pida un nombre de usuario y una contraseña, y verifique si ambos cumplen con estas condiciones: a) El nombre de usuario debe tener más de 5 caracteres.b) La contraseña debe tener al menos 8 caracteres y contener al menos un número.c) Usa condicionales con operadores AND y OR para validar.

//hacer un explode con nombre compuesto



// fin del codigo PHP
?>


</body>
</html>