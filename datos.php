<?php

// if($conn){
//     echo "conectado";
// }else{
//     echo "error de conecion";
// }

$dni=$_REQUEST ['dni'];
$clave=$_REQUEST ['contrasenia'];
try{
    $conexion= new pdo('mysql:host=localhost;dbname=datos', 'root','');
}catch(pdoxeptioon$e){
    echo 'Error: '.$e->getmessage();
}
$statement=$conexion-> prepare('SELECT * from usuarios where dni =:dni and clave =:clave');
$statement ->execute (array(':dni'=> $dni,':clave'=>$clave));
$resultado= $statement->fetch();

if($resultado){
    echo'aceso permitido';
}else {
    echo '<script>
    const form = document.querySelector("#form")
    function f(){
        form.EventPrevenDefault();
    }
    document.getElementById("stop").innerHTML="error"
    </script>';
}
?>