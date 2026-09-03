<h1> Listado Producto </h1>

<table>
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th>categoria</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><?= $producto['categoria'] ?></td>
            </tr>
        <?php endforeach; ?>

        
</table>
