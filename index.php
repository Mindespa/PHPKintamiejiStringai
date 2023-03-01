<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- 
1. Kintamieji ir sąlygos

 Uždavinių sprendimui nenaudoti, masyvų, ciklų ir savo parašytų funkcijų. PHP funkcijas žinoma naudokite (pageidautina).

1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". -->

  <?php

      echo "1 uzduotis" . "<br>". "<br>";

     

  $name = "Mindaugas";
  $surname = "Spakauskas";
  $birthdate = 1984;
  $date = 2023;

  echo "<p>AS esu" . " " . $name . " " . $surname . " " . "Man yra" . ($birthdate - $date) . " " . "metai</p>";


  // <!-- Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand()
  //  jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės.
  //   Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio. -->

  echo "<p>" . "2 uzduotis" . "</p>";
  echo "<br>";
  echo "<hr>";
  
  $num1 = rand(0, 4);
  $num2 = rand(0, 4);
  echo "<p>" . $num1 . " " . $num2 . "</p>";
  echo "<br>";
  // echo round($num1 / $num2 * 100) / 100;

  if ($num1 != 0 && $num2 != 0) {
    if ($num1 < $num2) {
    echo "<p>" . round ($num2 / $num1 * 100) / 100 . "</p>";
    } else {
     echo "<p>" . (round ($num1 / $num2 * 100) / 100) . "</p>";
    }
  }else{
    echo "<p>" . "Dalyba is nulio negalima" . "</p>";

  }


  // Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() 
  // jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
  
  echo "<p>" . "3 uzduotis" . "</p>";

   $D = rand(0, 25);
   $E = rand(0, 25);
   $F = rand(0, 25);

   echo "D E ir F skaiciu vertes: ".$D. " ". $E. " ". $F. "<br>";

   if (($E < $D && $D < $F)  || ($E > $D && $D > $F)) {
    echo $D;
   }
   if (($D < $E && $E < $F)  || ($D > $E && $E > $F)) {
    echo $E;
   }
   if (($E < $F && $F < $D)  || ($E > $F && $F > $D)) {
    echo $F;
   }
  if ($D == $E || $E == $F) {
    echo "<p>" . "Atsakymas negalimas" . "</p>";
  }

  echo "<p>" . "4 uzduotis" . "</p>";

$a = rand (1, 10);
$b = rand (1, 10);
$c = rand (1, 10);

echo "<p>". $a . " ". $b . " " .$c ."</p>";

if ($a + $b > $c && $a + $c > $b && $b + $c > $a){
    echo "<p>" . "turime trikampi" . "</p>";
}else{
  echo "<p>" . "neturime " . "</p>";
}

echo "<p>" . "5 uzduotis" . "</p>";

// Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
// reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

$num21 = rand(0, 2);
$num22 = rand(0, 2);
$num23 = rand(0, 2);
$num24 = rand(0, 2);

$zeros = 0;
$ones = 0;
$twos = 0;
// echo $num21 . " " . $num22 . " " . $num23 . " " . $num24;

if ($num21 == 0){
  $zeros++;
}
if ($num22 == 0){
  $zeros++;
}
if ($num23 == 0){
  $zeros++;
}
if ($num24 == 0){
  $zeros++;
}

if ($num21 == 0){
  $ones++;
}
if ($num22 = 0){
  $ones++;
}
if ($num23 = 0){
  $ones++;
}
if ($num24 = 0){
  $ones++;
}

if ($num21 == 0){
  $twos++;
}
if ($num22 = 0){
  $twos++;
}
if ($num23 = 0){
  $twos++;
}
if ($num24 = 0){
  $twos++;
}
echo $zeros ." " . $ones ." ". $twos;

//spausdinti zeros ones ir twos

echo "<p>" . "6 uzduotis" . "</p>";   

// Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage.
//  Pvz skaičius 3- rezultatas: <h3>3</h3>

$num10 = rand(1, 6);
echo "<h1>" . $num10 . "</h1>";




// Sukurti du kintamuosius.
// Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis).
//  Atspausdinti trumpesnį stringą.
         
                          //  STRINGAI


echo "<p>" . "1 uzduotis" . "</p>";      


 $name =  "Benicccio";
 $surname = "Deltoro";
 echo strlen($name) ;
 echo strlen($surname); 

 if (strlen($name) < strlen($surname)){
  echo "<p>" . $name . "</p>";

 }else{
  echo "<p>" . $surname . "</p>";
}
  
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
//  Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.


echo "<p>" . "2 uzduotis" . "</p>";  

$name = strtoupper("Benicccio"); 
$surname = strtolower("Deltoro");
echo "<p>" . $name . " ".  $surname . "</p>";

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
//  Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių.
//   Jį atspausdinti.

echo "<p>" . "3 uzduotis" . "</p>";  

$name = "Benicccio"; 
$surname = "Deltoro";
$res = substr($name,0,1) . substr($surname,0,1) ;
echo $res;


// echo "<p>" . $name . " ".  $surname . "</p>";

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
//  Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių.
//   Jį atspausdinti.


echo "<p>" . "4 uzduotis" . "</p>";  

$name = "Benicccio"; 
$surname = "Deltoro";
$res = substr($name,-3) . substr($surname, -3);
echo $res;


// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”. 
//  Rezultatą atspausdinti.


echo "<p>" . "5 uzduotis" . "</p>";  

$movie = "An American in Paris";
$res = str_ireplace("a", "*", $movie);
echo $res;

// Sukurti kintamąjį su stringu: “An American in Paris”.
// Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

echo "<p>" . "6 uzduotis" . "</p>";  

$movie = "An American in Paris";
$res = substr_count(strtolower($movie), "a");
echo $res;


// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti.
//  Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

echo "<p>" . "7 uzduotis" . "</p>"; 

$movie1 = "An American in Paris";
$movie2 = "Breakfast at Tiffany's";
$movie3 = "2001: A Space Odyssey";
$movie4 = "It's a Wonderful Life";

$res1 = preg_replace("/[aeioyu]/i", "", $movie1);
$res2 = preg_replace("/[aeioyu]/i", "", $movie2);
$res3 = preg_replace("/[aeioyu]/i", "", $movie3);
$res4 = preg_replace("/[aeioyu]/i", "", $movie4);

echo $res1 . "||" . $res2 . " || " . $res3 . " || " . $res4;


// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) .
//  ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

echo "<p>" . "8 uzduotis" . "</p>"; 

$lngmovie = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $lngmovie;
echo "<br>";
echo preg_replace("/[^0-9]/i", "", $lngmovie);



?>

</body>
</html>