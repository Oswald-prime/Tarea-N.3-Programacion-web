<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear un arreglo asociativo</title>
</head>
<body>

<?php
    $Juan = array(
        "nombre" => "Juan",
        "apellido" => "carlos",
        "cedula" => "11873084",
        "sueldo" => "15",
        "departamento" => "01",
        "lugar de trabajo" => "maracaibo"
    );

    $Oswaldo = array(
        "nombre" => "Oswaldo",
        "apellido" => "Gamboa",
        "cedula" => "26635140",
        "sueldo" => "30",
        "departamento" => "03",
        "lugar de trabajo" => "miami"
    );

    $Fernando = array(
        "nombre" => "Fernando",
        "apellido" => "Jimenez",
        "cedula" => "25524039",
        "sueldo" => "12",
        "departamento" => "02",
        "lugar de trabajo" => "Texas"
    );
?>
    
<h1 style="text-align: center;">Lista de empleados</h1>

<h2 style="text-align: center;">
     1.Juan carlos
    <br>
    2.Oswaldo Gamboa
    <br>
    3.Fernando Jimenez
    <br></br>
</h2>

<form action= "<?php $_SERVER['PHP_SELF'] ?>" method="post" style="text-align: center;">
        <h3 style="text-align: center;">Empleados</h3>
            <br></br>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre"/>
            <br> <br/>
        <input type="submit" name="buscar" id="buscar" value="buscar"/>
        <input type="submit" name="limpiar" id="limpiar" value="Limpiar"/>
</form>
 
<div class="informacion" style="text-align: center;"> <br>
<?php
if(isset($_POST["buscar"]) && $_POST["buscar"]){
    if(isset($_POST["nombre"]) && !empty($_POST["nombre"])){
        if($_POST["nombre"] === "Juan carlos"){
            echo "Nombre: ". $Juan['nombre'];
            echo "</br>";
            echo "Apellido: ". $Juan['apellido'];
            echo "</br>";
            echo "Cedula: ". $Juan['cedula'];
            echo "</br>";
            echo "Sueldo: ". $Juan['sueldo'];
            echo "</br>";
            echo "Departamento: ". $Juan['departamento'];
            echo "</br>";
            echo "Lugar de trabajo: ". $Juan['lugar de trabajo'];
        }elseif($_POST["nombre"] === "Oswaldo Gamboa"){
            echo "Nombre: ". $Oswaldo['nombre'];
            echo "</br>";
            echo "Apellido: ". $Oswaldo['apellido'];
            echo "</br>";
            echo "Cedula: ". $Oswaldo['cedula'];
            echo "</br>";
            echo "Sueldo: ". $Oswaldo['sueldo'];
            echo "</br>";
            echo "Departamento: ". $Oswaldo['departamento'];
            echo "</br>";
            echo "Lugar de trabajo: ". $Oswaldo['lugar de trabajo'];
        }elseif($_POST["nombre"] === "Fernando Jimenez"){
            echo "Nombre: ". $Fernando['nombre'];
            echo "</br>";
            echo "Apellido: ". $Fernando['apellido'];
            echo "</br>";
            echo "Cedula: ". $Fernando['cedula'];
            echo "</br>";
            echo "Sueldo: ". $Fernando['sueldo'];
            echo "</br>";
            echo "Departamento: ". $Fernando['departamento'];
            echo "</br>";
            echo "Lugar de trabajo: ". $Fernando['lugar de trabajo'];
        } 
    }
}
?>
</div>


</body>
</html>