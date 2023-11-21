<?php
include('coneccion.php');

if (isset($_POST[('enviar')]))    {
    if (strlen($_POST['destination']) >= 1 && strlen($_POST(['nombre'])) >= 1 &&strlen($_POST['apellido']) >= 1 &&strlen($_POST['pasajes']) >= 1 && strlen($_POST['colectivo']) >= 1 && strlen($_POST['asiento']) >=1 &&strlen($_POST['checkin']) >= 1 &&strlen($_POST['checkout']) >=1 &&strlen($_POST['n_contacto'])>=1){
        $destination = trim($_POST['destination']);
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $pasajes = trim($_POST['pasajes']);
        $colectivo = trim($_POST['colectivo']);
        $asiento = trim($_POST['asiento']);
        $checkin = date($_POST['checkin']);
        $checkout = date($_POST['checkout']);
        $consulta = "INSERT INTO datos(nombre, Dni, fecha_inicio, fecha_vuelta, cantidad, email, n_contacto, destino) VALUES ('$nombre','$dni','$fecha_inicio','$fecha_vuelta','$cantidad','$apellido','$n_contacto','$destination')"
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">Su boleto ha sido reservado con exito</h3>
            <?php
        }   else{
            ?>
            <h3 class="bad">Ha ocurrido un error</h3>
            <?php
        }
        else{
            ?>
            <h3 class="bad">Por favor rellene los datos</h3>
            <?php
        }
    }
}

?>