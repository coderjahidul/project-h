<?php 
class MyException extends Exception{}
class NetworkException extends Exception{}

function testExceptions(){
    throw new NetworkException();
}

try{
    testExceptions();
}catch(MyException $e){
    echo "My Exception Caught \n";
}catch(NetworkException $e){
    echo "Network Exception Caught \n";
}catch(Exception $e){
    echo "Exception Caught \n";
}finally{
    echo "Finally";
}