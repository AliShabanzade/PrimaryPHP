<?php
//namespace should create on the first line the script
namespace testTheNameSpace;
// __LINE__
echo "line number is : " . __LINE__  . "<hr>";

// show full path of the current file
echo "file full path is : " . __FILE__  . "<hr>";

//__DIR__ show directory of current
echo "file full directory is : " . __DIR__  . "<hr>";

//__FUNCTION__ show the name of currnet function
function test_function(){
    echo "the name of current function is : " . __FUNCTION__ . "<hr>";
}
test_function();


//__CLASS__ show the current class 
//Making class
class TestClass{
    function test(){
        return "class name is " . __CLASS__ . "<hr>";
    }
}
//making istance of TestClass
$instans = new TestClass;
//call test function of instance
echo $instans -> test();




//__NAMESPACE__

//Making class
class TestClass3{
    function testNamespace(){
        return "THE NAMESPACE is " . __NAMESPACE__ . "<hr>" ;
    }
}
//making istance of TestClass2
$instans = new TestClass3;
//call testMETHOD function of instance
echo $instans -> testNamespace();