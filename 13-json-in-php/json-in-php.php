<?php
// include  'sftp.json';

//json object 
$configStr =file_get_contents(__DIR__ .'/sftp.json');
echo $configStr;


//convert json string to php object
$convertJsonToPhpObj= json_decode($configStr);

// call status key from php object
echo $convertJsonToPhpObj -> status;
echo PHP_EOL;

//change value of value of php object 
$convertJsonToPhpObj -> country = "IRAN";

// echo $convertJsonToPhpObj -> country;
echo $convertJsonToPhpObj -> country;
echo PHP_EOL;



// print_r($convertJsonToPhpObj);
echo PHP_EOL;

//convert php object to json string
$convertPhpObjToJsonString = json_encode($convertJsonToPhpObj);

echo $convertPhpObjToJsonString;
echo PHP_EOL;


//* check if json string is valid return true otherwise return false
function json_Validate($data){
    if(json_decode($data)){
        echo "true";
    }else{
        echo "false";
    }
}

json_Validate($configStr);