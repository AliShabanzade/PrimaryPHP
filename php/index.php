<?php



$a = 'hello';
$b = 'world';
echo $a.$b ;
echo '<br>';
echo $a;
echo '<br>';
echo $a .= $b;// like += in int variable
echo '<br>';
echo $a;
echo '<br>';
$c = 'green';
$d = 'and';
$e = 'blue';
echo $a .= $c .= $d .= $e;
echo '<br>';
echo $a;
echo '<br>';
echo $c;
echo '<br>';
echo $d;
echo "<hr>";

// spaceship oprator introduce in php 7 exit: (if1=1)=0 (if1<2)=-1 (if2>1)=1

$e = 10;
$f = 10;
echo $e <=> $f;// exit: 0
echo "<br>";
$g = 20;
echo $e <=> $g; // exit: -1
echo "<br>";
echo $g <=> $e;// exit: 1
echo '<br>';
// <=> between characters like A and B
$h = 'a';
$i = 'a';
$j =  'b';
$u = 'c';
echo $h <=> $i;
echo '<br>';
echo $h <=> $j;
echo '<br>';
echo $u <=> $j;
echo '<hr>';
// Logical Oprators 

// Oprator && or AND
$A = 10 ;
$B = 20;
$C = 10;
if($A==$C && $A<$B AND $B>$C){// can put 3 operand . can use and
  echo "true";
}
echo "<br>";
if($B<$A && $A==$C){
   echo 'true';

}else{
    echo 'false';
}
 echo '<hr>';

 if($A==$C or $A<$B || $B>$C){// can put 3 operand . can use and
    echo "true";
  }
  echo "<br>";
  if($B<$A || $C==$B){
     echo 'true';
  
  }else{
      echo 'false';
  }
   echo '<hr>';

   // xor oprator : agar tedade sharthaye dorost fard bashad true pasokh midehad va agar zoj bashad false midehad

   if($B==20 xor $C==10 xor $A==10 xor $A==$C xor $B>$C){// mitavand chand amalvand dashthe bashad
     echo "tedade sharthaye dorost FARD ast";
   }else{
    echo "tedade sharthaye dorost ZOJ ast ";
    
   }

   echo "<br>";
   if($B==20 xor $C==10 xor $A==10 xor $A==$C ){// mitavand chand amalvand dashthe bashad
    echo "tedade sharthaye dorost FARD ast";
  }else{
   echo "tedade sharthaye dorost ZOJ ast ";
   
  }

echo "<hr>";

// oprator !=  and !==
if (10 != 10){
    echo "true";
}else {
    echo "false";
}
echo "<br>";

if(11 != 10 ){
    echo " true";
}else {
    echo "false";
}
echo "<br>";
if("20" !== 20){
    echo "true";
}
echo "<br>";
if("20" != "20"){
    echo "true";
}else{
    echo "false";
}

echo "<hr>";

$D = array("r" => "10" , "b" => "bluuuuue" , "g" => "green");
print_r($D);
echo "<br>";
$E = array ("o" => "orang" , "y" => "yellow" , "w" => "white" ,  "b1" => " black ");

print_r($E);
echo "<br>";
$plus_array = $D + $E;
print_r($plus_array);
echo "<br>";
var_dump($D == $E);
echo "<br>";
$F = array("r" => 10 , "b" => "bluuuuue" , "g" => "green");
echo "<br>";
var_dump($F == $D);//  faghat moghayese meghdarha
echo "<br>";
$G = array("r" => "red" , "g" => "green", "b" => "bluuuuue"); 
var_dump($D == $G);
echo "<br>";
var_dump($D === $G);// moghayese no , meghdar , jabejaee andisha yani bayad nazir be nazir bashad
echo "<br>";
var_dump($D != $F);
echo "<br>";
var_dump($D !== $F);
echo "<br>";
var_dump($D <> $F);// not equality  <>  =  !=  , daghighan mesle amal mikonad 
echo "<br>";
var_dump($D <> $F);



