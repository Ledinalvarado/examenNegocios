<?php

$pdo=new PDO('mysql:dbname=estudiantes;host:127.0.0.1','root','1234');
$sql = 'SELECT nombre_completo, imagen, correo FROM estudiante';
//foreach ($pdo->query($sql) as $row) {
//
//    echo $row['nombre_completo'] . "\t"."\t"."\t"."\n";
//    echo $row['imagen'] . "\t"."\t"."\t"."\n";
//    echo $row['correo'] . "\n";
//}

?>


<html>
<head>

</head>

<body>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>URL Imagen</th>
            <th>Correo ELectronico</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($pdo->query($sql) as $row) :   ?>
    <tr>
        <td><?php echo $row['nombre_completo']?></td>
        <td> <?php echo $row['imagen'] ?></td>
        <td><?php echo $row['correo']?></td>
    </tr>

<?php endforeach;?>
    </tbody>
</table>

</body>
</html>
