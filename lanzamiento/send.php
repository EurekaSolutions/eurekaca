<?php include_once('conex.php');

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");

header("Cache-Control: post-check=0, pre-check=0", false);

header("Pragma: no-cache");


//use /eureka;


//$link = Conexion::singleton();


function correo($email)
{

    $email = ($email);


    $link = Conexion::singleton();


    $query = "INSERT INTO newsletter(correo) VALUES('" . $email . "')";


    //$result = @pg_query($query);

    $result = $link->prepare($query);

    $result = $result->execute();


    if (!$result) {

        $errormessage = $link->errorInfo();

        echo json_encode(['id'=>0, 'status'=> false, 'message'=> "Vaya, este correo ya ha sido suscrito."]);
        return;
    }


    echo json_encode(['id'=>0, 'status'=> true, 'message'=> "Listo, correo suscrito, te mantendremos informado."]);

    return;

}


function mensaje($datos)

{


    $link = Conexion::singleton();


    /*			 $usuario="eureka";

                  $clave="eureka";

                  $db_host="localhost";

                  $bd_nombre="eureka";

                  $port = 5432;



                 $link = new PDO('pgsql: host='.$db_host.'; dbname='.$bd_nombre.'; port='.$port, $usuario, $clave);



                //var_dump($link);



                */

    $firstname = ($datos['contacto']['nombre']);

    $surname = ($datos['contacto']['apellido']);

    $tlf = ($datos['contacto']['tlf']);

    $emailaddress = ($datos['contacto']['correo']);

    $mensaje = ($datos['contacto']['mensaje']);


    $query = "INSERT INTO mensajes(nombre, apellido, telefono, correo, mensaje) VALUES('" . $firstname . "', '" . $surname . "', '" . $tlf . "', '" . $emailaddress . "', '" . $mensaje . "')";

    $result = $link->prepare($query);

    $result = $result->execute();


    if (!$result) {

        $errormessage = $link->errorInfo();


        echo json_encode(['code' => 0, 'mensaje' => 'Hubo un error procesando tu mensaje, por favor intentalo de nuevo.']);

        return "Error with query: " . $errormessage;


    }


    /*		@mail("eureka@eureksolutions.com",

                    "Mensaje de: ".$firstname." ".$surname,

                    "Datos de contacto: ".$tlf."<br><br>".$mensaje,

                    "From: ". $emailaddress . "\r\n" . "Content-Type: text/html; charset=utf-8"/*,

                    "-fsender@example.com");*/


    // Guardar en archivo.txt

    doLog("Datos de la persona: " . $firstname . " " . $surname . " Teléfono: " . $tlf . " Correo: " . $emailaddress . " Mensaje: " . $mensaje . "", "logs/mensajes.txt");

    // Guardar en archivo CSV

    doLog("" . $firstname . ";" . $surname . ";" . $tlf . ";" . $emailaddress . ";" . $mensaje . "", "logs/mensajes.csv");


    echo json_encode(["code" => 1, "mensaje" => "Listo, tu mensaje ya fue recibido, te contactaremos."]);

    //return  "Listo, tu mensaje ya fue recibido, te contactaremos.";


}


function doLog($text, $filename)

{

    // Abrir archivo log

    $filename = $filename;

    $fh = fopen($filename, "a") or die("No se pudo abrir el archivo de mensajes..");

    fwrite($fh, date("d-m-Y, H:i") . " - $text\n") or die("No se pudo guardar el mensaje en el log!");

    fclose($fh);

}


if (@$_POST) {

    // subscripción
    if (@$_POST['scenario'] == 1) {


        $aux = correo(@$_POST['email']);


        return $aux;

    // Mensajes
    } elseif (@$_POST['scenario'] == 2) {


        parse_str(@$_POST['datos'], $datos);


        $aux = mensaje($datos);


        return $aux;

    }

}

?>