<?php
if (!empty($_POST)){
    $archivo = explode('.',$_POST['imagen']['name']);
    $nombrei = '';
    $extension = $archivo[count($archivo)-1];

    for($i = 0;$i < (count($archivo)-1);$i++){
        $nombrei = $nombrei . $archivo[$i] . '.';
    }

    $nombre_final = $nombrei . time() . '-' . mt_rand(1000,9999) . '.' . $extension;
    $url = 'imagenes/' . $nombre_final;
    move_uploaded_file($_POST['imagen']['tmp_name'], $url);


    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];



    try {

        $pdo=new PDO('mysql:dbname=estudiantes;host:127.0.0.1','root','1234');
        $stms = $pdo->prepare("INSERT INTO estudiante (nombre_completo, imagen,correo)
                                        VALUES (?,?,?)");
        $stms->bindValue(1, $nombre);
        $stms->bindValue(2, $url);
        $stms->bindValue(3, $correo);
        $stms->execute();
        echo 'Registro de Estudiante guardado con exito';
    } catch (PDOException $e){
        echo $e->getMessage();
    }


}

?>