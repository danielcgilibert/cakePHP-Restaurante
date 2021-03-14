<h2>Detalles del Mesero <?php echo $mesero['Mesero']['nombre'] ?></h2>

<table>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>telefono</td>
        <td>created</td>
        <td>modified</td>

    </tr>

    <?php foreach ($mesero as $datosMesero) { ?>
        <tr>
            <td><?php echo $datosMesero['id']?></td>
            <td><?php echo $datosMesero['nombre']?></td>
            <td><?php echo $datosMesero['apellido']?></td>
            <td><?php echo $datosMesero['telefono']?></td>
            <td><?php echo $datosMesero['created']?></td>
            <td><?php echo $datosMesero['modified']?"si":"no"?></td>
        </tr>
   <?php }?>