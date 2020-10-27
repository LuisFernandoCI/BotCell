<!DOCTYPE html>
<html lang="es">
<head>
    <link  rel="icon"   href="imagenes/Mlogo.jpg" type="image/png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot Para Muller Lewis</title>
    <link rel="stylesheet" href="CSS/MullerStyle.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script>
            $(document).ready(function(){
                $('#Boton').click(function(){
                $("#botones").load("botones.php");
                                             });
        </script>
</head>

<body>
    <div class="wrapper">
        <div class="header">
                        <h4> <img src='imagenes/Mlogo.png' class='imgRedonda'/> <br>CHATBOT Muller Lewis</h4>           
                    </div>
        <div class="form" method="post" autocomplete="no">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <img src='imagenes/chat.png' class='imgRedonda2'>
                </div>
                <div class="msg-header">
                    <p>Hola! Soy soy la asistente inteligente de Muller Lewis y te ayudaré a mejorar tu experiencia con nosotros.<br>Gracias por contactarte.<br>¿Dime, cómo te puedo ayudar hoy?</p>
                    <button type="button" class="btn btn-primary" id="MostrarProductos" onclick="MostrarProductos();">
                    Mostrar Productos</button>
                    <br><br>
                    <button type="button" class="btn btn-warning" id="EstatusCompra" onclick="EstatusCompra();">
                    Estatus Compra</button>
                    <br><br>
                    <button type="button" class="btn btn-info" onclick="AtencionClientes();">
                    Atencion Clientes</button>
                    <br><br>
                    <button type="button" class="btn btn-danger" id="CancelarCompra" onclick="CancelarCompra();">
                    Cancelar Compra</button>
                </div>
            </div>
        </div>
        <form>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribe tu pregunta..." required>
                <button id="send-btn">Enviar</button>
            </div>
        </div>
        </form>
    </div>

  <?php
  $saludo= "hola";
  ?>
  
   <script type="text/javascript">
    function MostrarProductos(){
        alert( "<?php echo $saludo; ?>" );
    }
       
    function EstatusCompra(){
        alert("EstatusCompra");
    }
       
    function AtencionClientes(){
        alert("AtencionClientes");
    }
       
    function CancelarCompra(){
        alert("CancelarCompra");
    }
   </script>
   
   
   
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // Codigo AJAX
                $.ajax({
                    url: 'PHP/conexion.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><img src="imagenes/chat.png" class="imgRedonda2"></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        //Esto es para que la barra baje al ultimo chat.
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    <!--Mandar la alerta con el contacto-->
    <SCRIPT LANGUAGE="JavaScript">
        function Contactanos () {
        alert ("Comunicate al numero +52 55-18-47-89 ");
        }
        function Reservar(){
            window.open("https://www.youtube.com/watch?v=h1aoYXl850Y", "_blank ")
        }
        </SCRIPT>
</body>
</html>