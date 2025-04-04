# Código 1
```<?php
// r0.php
$dato = $_SERVER['REQUEST_METHOD'];
echo $dato;
switch ($_SERVER['REQUEST_METHOD']){

case 'POST':
        echo "POST";
        break;
case 'GET':
        echo "GET";
        break;
case 'PUT':
        echo "PUT";
        break;

}


?>
```

# Codigo 2

```
<?php
// r1.php
$nombre = $_POST['midato'];



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 if (isset($_REQUEST['dato'])){
    $rfid = $_REQUEST['dato'];
  }else{
   echo "no existe variable";
}
        echo $rfid;
}
?>
```

#Código 3

```<?php
//r2.php
$nombre = $_POST['midato'];



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
 $datos= json_decode(file_get_contents('php://input'));
echo $datos->nombre;
echo ("\n");
echo $datos->ap;
}
?>
```

# PHP para insertar datos
```<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO registro (sensor, valor)
VALUES ('temperatura', 22)";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo registro creado exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>```
