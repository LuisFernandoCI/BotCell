<?php
/* Conectar a la base de datos
$conn =mysqli_connect("hstng01.ci4cd.net:3306","lpichardo","HmAmw4sDw7Mz7hF5","lpichardo") or die("Database Error");
*/

$conn = mysqli_connect("ramptors.net/mysql:3306","chatsell","ChatSell*#969798","chatsell") or die("Database Error");

// Recibir el mensaje del cliente.
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// variables globales


switch ($getMesg) {
  case "Mostrar Productos":
         // Revisar si la consulta existe en nuestra base de ser asi muestra todos los productos 
        $check_productos = "SELECT prod_NOM,prod_PRECIO,prod_STOCK,prod_IMAGE from producto where prod_STATUS = 'ALTA'";
        $resultados = mysqli_query($conn, $check_productos) or die("Error");
         break;
  case "Estatus Compra":
        //Revisar si la consulta existe muestra el estatus de la compra 
        $check_statusCom = "SELECT pedi_STATUS_PED from pedido where pedi_ID = '%$getMesg%'";
        $resultados = mysqli_query($conn, $check_productos) or die("Error");
        break;
  case "Atención Clientes":
        break;
  case "Cancelar Compra":
        break;
  case "Estatus Compra":
        break;

  case "Campaña":
         echo "NEZAHUALCÓYOTL PHP RAMPTORS <br />
        This is a growing users group in Nezahualcóyotl, Metropolitan Mexico City area for Apache, MySQL, PHP and related topics. The objective is to provide an open group for discussion and knowledge sharing. We have been meeting for several months and have had several speaker presentations on topics related to this technology. One of our goals is to promote the usage of Apache, MySQL and PHP. Beginners and advanced users are all invited and there are several sub-groups related to different topics.";
         break;
   default :
    // Revisar si la consulta existe en nuestra base

}





// Revisar si la consulta existe de ser asi muestra un producto
$check_producto = "SELECT prod_NOM,prod_PRECIO,prod_STOCK,prod_IMAGE from producto where prod_NOM LIKE '%$getMesg%'";
$run_query2 = mysqli_query($conn, $check_producto) or die("Error producto");


//Si la consulta existe dara el resultado de un producto
if(mysqli_num_rows($run_query2) > 0){
    //Da la respuesta del cliente
    $fetch_data = mysqli_fetch_assoc($run_query2);
    //almacena la respuesta en el AJAX
    $replay = $fetch_data['prod_NOM'];
    echo 'Muller lewis te ofrece un :'. $replay."<br />"; 
     $replay = $fetch_data['prod_PRECIO'];
    echo 'el cual tiene un precio de : $'. $replay."<br />" ; 
    $replay = $fetch_data['prod_STOCK'];
    echo 'el stock es de: '. $replay." disponibles <br />" ;
    $replay = $fetch_data['prod_IMAGE'];
?>
  <img src=
<?php
    echo '"'.$replay.'" width="100" height="100">'."<br />" ;
//Para Reservar 
     echo "Adquierelo pronto<br>";
    ?> 
    <i class="fas fa-phone-alt"></i>
    <input type=button class="Contact" value="Reservar" onClick="Reservar()"><br>
     <?php 
     echo "O ";
}

// Si la consulta existe dara el resultado de la respuesta 
$check_data = "SELECT Respuesta FROM cpr WHERE Pregunta LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error pregunta");

if(!mysqli_num_rows($run_query) > 0){
    echo "Contacta con un ejecutivo de <br>Muller Lewis.<br>";
    ?> 
    <i class="fas fa-phone-alt"></i>
    <input type=button class="Contact" value="Contactarlo" onClick="Contactanos()">
     <?php 
}else{ // Si No existe su consulta mandara lo siguiente.
    //Da la respuesta del cliente
    $fetch_data = mysqli_fetch_assoc($run_query);
    //almacena la respuesta en el AJAX
    $replay = $fetch_data['Respuesta'];
    echo $replay;
}

// Si la consulta existe dara el resultado de los productos
if(mysqli_num_rows($resultados) > 0) {

    while ($fetch_data = mysqli_fetch_array($resultados)) {
      $replay = $fetch_data['prod_NOM'];
    echo 'Muller lewis te ofrece un :'. $replay."<br />"; 
     $replay = $fetch_data['prod_PRECIO'];
    echo 'el cual tiene un precio de : $'. $replay."<br />" ; 
    $replay = $fetch_data['prod_STOCK'];
    echo 'el stock es de: '. $replay." disponibles <br />" ;
    $replay = $fetch_data['prod_IMAGE'];
?>
  <img src=
<?php
    echo '"'.$replay.'" width="100" height="100">'."<br />" ;
//Para Reservar 
     echo "Adquierelo pronto<br>";
    ?> 
     <i class="fas fa-phone-alt"></i>
    <input type=button class="Contact" value="Reservar" onClick="Reservar()"><br>
     <?php 
     echo "O ";
    }
    
}

?>