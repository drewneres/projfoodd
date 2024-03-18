<form method="post" action="controller/inserirRestaurante.php" enctype="multipart/form-data">
    <p>
        <label>Nome: </label>
        <input type="text" name="txtRestaurante" required>
    </p>
    <p>
        <label>Descrição: </label>
        <input type="text" name="txtDescricao" required>
    </p>
    <p>
        <label>Categoria: </label>
        <input type="text" name="txtCategoria" required>
    </p>
    <p>
        <label>Imagem: </label>
        <input type="file" name="arquivo" required>
    </p>
    <p>
        <input type="submit" value="Enviar">
    </p>

</form>