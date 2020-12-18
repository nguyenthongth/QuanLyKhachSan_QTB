<?php
class App{
    //http://localhost:8012/Home/SayHi/1/2/3
    rotected $controller="Home";
    rotected $action ="SayHi";
    rotected $params=[];

    function _construct(){
        //Array ( [0] => Home[1] => SayHi [2] => 1)
        $arr = $this ->UrlProcess();

        // xu li controller
        if(file_exists("./mvc/controllers/".$arr[0]".php")){
             $this->controller = $arr[0];
        }
         require_once "./mvc/controllers/".$arr[0]".php";

         // xu ly action
         if(isset($arr[1])){
             if( method_exists("Home", "Show")){

        }
    }

    function UrlProcess(){
        //Home/SayHi/1/2/3
        if( isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"])))
        }
    }
}
?>