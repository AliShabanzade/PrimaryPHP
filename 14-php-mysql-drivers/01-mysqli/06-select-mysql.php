<?php
include_once '01-connection.php';
include_once 'styles.php';
echo "<hr>";

//*set a query in a variable
// $sql= "select * from people where id>10";

//*save a query in a variable
// mysqli_result Represents the result set obtained from a query against the database
// $result = $mysqli-> query($sql);




// print_r($result);




// *Fetch all rows and return the result-set as an associative array:
// print_r($result -> fetch_all());




//* mysqli_result::fetch_assoc -- mysqli_fetch_assoc — 
// *Fetch the next row of a result set as an associative array
// print_r($result -> fetch_assoc());
// print_r($result -> fetch_assoc());
// print_r($result -> fetch_assoc());
// echo "<hr>";



// while($row = $result -> fetch_assoc()){
  
//     print_r($row);

    
// }

// echo "<hr>";


//*The order of the columns is based on the query we specified for fetch_assoc()
// $sql2 = "select fullname , id from people where id < 10";
// $result2 = $mysqli -> query($sql2);
 
// while($row = $result2 -> fetch_assoc() ){ 

//     print_r($row);

// }





//*mysqli_result::fetch_array -- mysqli_fetch_array —
// * Fetch the next row of a result set as an associative, a numeric array, or both
// while($row1 = $result2->fetch_array()){

//     print_r($row1);

// }
 



// while($row2 = $result2 -> fetch_object()){
  
//     print_r($row2);

// }
// echo "<table>";
// while($row = $result -> fetch_object()){
//     echo "<tr>";
//     foreach($row as $key => $value){
//         echo "<td>$value</td>";
//     }
//     echo "<tr>";
// }
//  echo "</table>";


// $sql3 = "select avg(age) as age_avrage , count(*) as population from people ";
// $stmt = $mysqli -> prepare($sql3);
// $stmt -> execute();
// $stmt -> bind_result($age_avrage , $population);
// $stmt -> fetch();
// echo "age avrage is : " . $age_avrage . "<br>";
// echo "population is : " . $population . "<hr>"; 


// $sql4 = "select fullname , age from people";
// $stmt2= $mysqli->prepare($sql4);
// $stmt2->execute();
// $stmt2->bind_result($fullname,$age);
// $stmt2->fetch();
// echo "fullname is : " .$fullname . "<br>";
// echo "age is : " .$age;  

// $sql5 = "select id , age , sex from people";
// $stmt3 = $mysqli->prepare($sql5);
// $stmt3->execute();
// $stmt3->bind_result($id,$age,$sex);
// while($stmt3->fetch()){
//     echo "<div>$id : $age : $sex</div>";
// }

$sql6 = "select * from people";
$stmt4 = $mysqli->prepare($sql6);
$stmt4->execute();
//* mysqli::store_result -- mysqli_store_result — Transfers a result set from the last query
$stmt4->store_result();
echo "Total rows is : " .$stmt4->affected_rows;



