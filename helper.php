<?php 
    function dd($arr){
        echo "<h3>Print_R :</h3>";

        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        echo "<hr>";
        echo "<h3>Var_Dump :</h3>";
        var_dump($arr);
    }




    // Custom View Method Like Laravel
    function view($path,$data=[]){
        extract($data);
        require $_SERVER['DOCUMENT_ROOT'].'/views/'.$path.'.php';  
    }
?>