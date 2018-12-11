<?php
    include("conexion.php");

/////////////////////////////////////// CONSULTA A LA BASE DE DATOS //////////////////////////////////////
    $doctores = "SELECT * FROM doctores";
    $resDoctores=$conexion->query($doctores);

    $pacientes = "SELECT * FROM pacientes";
    $resPacientes=$conexion->query($pacientes);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 2 - PHP Y MYSQL</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <h2 class="text-center">Lista de Doctores con sus pacientes</h2>
            <hr />
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Codigo</th>
                        <th>Doctor</th>
                        <th>Paciente</th>
                        <th>Enfermedad</th>
                    </tr>
                    <?php
                        while($registroDoctores = $resDoctores->fetch(PDO::FETCH_BOTH) and $registroPacientes = $resPacientes->fetch(PDO::FETCH_BOTH))
                        {   
                            echo'<tr>
                                 <td>'.$registroDoctores['codigo'].'</td>
                                 <td>'.$registroDoctores['nombres']." ".$registroDoctores['apellidos'].'</td>
                                 <td>'.$registroPacientes['nombres'].'</td>
                                 <td>'.$registroPacientes['enfermedad'].'</td>
                                 </tr>';
                        } 
                    ?>     
                </table>
            </div>
        </div>
    </div>
    <center>
        <p>&copy; Ejercicio 2 BALVIN OCHOA ERICK - PHP Y MYSQL <?php echo date("Y");?></p>
    </center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>