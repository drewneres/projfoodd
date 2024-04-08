<form method="post" action="controller/inserirComida.php" enctype="multipart/form-data">
    <p>
        <label>Nome: </label>
        <input type="text" name="txtPrato" required>
    </p>
    <p>
        <label>Descrição: </label>
        <input type="text" name="txtDescricao" required>
    </p>
    <p>
        <label>Preço: </label>
        <input type="number" name="txtPreco" required>
    </p>
    <p>
        <label>Restaurante: </label>
        <select name="cbxRest">
        <option value=""></option>
        </select>
    </p>
    <p>
        <input type="submit" value="Enviar">
    </p>

</form>