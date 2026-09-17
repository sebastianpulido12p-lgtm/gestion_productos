<h1>Listado de Categoria</h1>

<table border="1">

    <tr>
        <th>ID Categoria</th>
        <th>Nombre</th>
        <th>Descripcion</th>
    </tr>

    <?php foreach ($categorias as $categoria): ?>

        <tr>
            <td><?= $categoria['id_categoria'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion'] ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<h1>Categoria Consultada</h1>

<table border="1">

    <tr>
        <th>ID Categoria</th>
        <th>Nombre</th>
        <th>Descripcion</th>
    </tr>

    <?php if (!empty($categoriaConsultada)): ?>

        <tr>
            <td><?= $categoriaConsultada['id_categoria'] ?></td>
            <td><?= $categoriaConsultada['nombre'] ?></td>
            <td><?= $categoriaConsultada['descripcion'] ?></td>
        </tr>

    <?php endif; ?>

</table>