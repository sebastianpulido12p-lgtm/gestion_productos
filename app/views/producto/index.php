<h1> Listado Producto </h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria Producto</th>
        <th>Proveedor</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto['producto_nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><?= $producto['categoria_nombre'] ?></td>
                <td><?= $producto['proveedor_nombre'] ?></td>
            </tr>
        <?php endforeach; ?>

</table>

<h1>Detalle del producto</h1>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>ID Categoria</th>
        <th>Categoria Producto</th>
        <th>ID Proveedor</th>
        <th>Proveedor</th>
    </tr>
    <?php if (!empty($producto)): ?>
        <tr>
            <td><?= $producto['producto_nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['id_categoria'] ?></td>
            <td><?= $producto['categoria_nombre'] ?></td>
            <td><?= $producto['id_proveedor'] ?></td>
            <td><?= $producto['proveedor_nombre'] ?></td>
        </tr>
    <?php endif; ?>
</table>

