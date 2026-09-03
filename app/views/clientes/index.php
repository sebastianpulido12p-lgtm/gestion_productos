<h1>Listado Clientes</h1>

<table border="1">

    <tr>
        <th>Nombre</th>
        <th>Documento</th>
        <th>Correo</th>
        <th>Telefono</th>
    </tr>

    <?php foreach ($clientes as $cliente): ?>

        <tr>
            <td><?= $cliente['nombre'] ?></td>
            <td><?= $cliente['documento'] ?></td>
            <td><?= $cliente['correo'] ?></td>
            <td><?= $cliente['telefono'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>