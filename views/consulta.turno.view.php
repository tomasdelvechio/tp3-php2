<!DOCTYPE html>

<html>
    <head>
        <title>Turno Paciente</title>
        <link rel="stylesheet" href="css/contenido.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/cabecera.css">
        <link rel="Shortcut Icon" href="img/favicon.ico" type=”image/x-icon” />
    </head>
    <body>
        <main>
        <?php include "views/estructura/cabecera.view.php"; ?>
        <h1>Turno del Paciente <?=  $this->turno[0]['nombre_paciente']; 
            // echo($this->imgController->getTamanioEnMB()); 
        ?></h1>
        <form action="edicion_turno" method='POST'>
            <table id="turnos">
                <tr>
                    <th>Fecha del Turno</th>
                    <th>Horario del Turno</th>
                    <th>Nombre del Paciente</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Edad</th>
                    <th>Talla del Calzado</th>
                    <th>Altura</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Color de Pelo</th>
                    <th>Receta Cargada</th>
                </tr>
                    <tr>
                        <td><?= $this->turno[0]['fecha_turno'];?></td>
                        <td><?= $this->turno[0]['hora_turno'];?></td> 
                        <td><?= $this->turno[0]['nombre_paciente']; ?></td> 
                        <td><?= $this->turno[0]['telefono'];?></td>
                        <td><?= $this->turno[0]['email']; ?></td> 
                        <td><?= $this->turno[0]['edad']; ?></td>                
                        <td><?= $this->turno[0]['talla_calzado']; ?></td>                
                        <td><?= $this->turno[0]['altura']; ?></td>                
                        <td><?= $this->turno[0]['fecha_nacimiento']; ?></td>                
                        <td><?= $this->turno[0]['color_pelo']; ?></td>                
                        <td><img src='<?php echo("{$this->imgController->cargarImagen()}"); ?>' alt="imagen" class="receta_cargada"></td>
                    </tr>
            </table>
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['nombre_paciente']; ?>" name="nombre_paciente" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['email']; ?>" name="email" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['telefono']; ?>" name="telefono" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['edad']; ?>" name="edad" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['talla_calzado']; ?>" name="talla_calzado" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['altura']; ?>" name="altura" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['fecha_nacimiento']; ?>" name="fecha_nacimiento" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['color_pelo']; ?>" name="color_pelo" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['fecha_turno']; ?>" name="fecha_turno" hidden="true">
                <input class="input_oculto" type="text" value="<?= $this->turno[0]['hora_turno']; ?>" name="hora_turno" hidden="true">

            <button class="boton" type="submit" name='baja_turno' value="<?= $this->turno[0]['id']; ?>" >Eliminar Turno</button>
            <button class="boton" type="submit" name='modificacion_turno' value="<?= $this->turno[0]['id']; ?>" >Modificar Turno</button>
        </form>
        </main>
        <?php include "views/estructura/footer.view.php"; ?>

    </body>
</html>