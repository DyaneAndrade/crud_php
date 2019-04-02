    <tr>
        <td>Nome</td>

        <td>
            <input type="text" name="nome" class="form-control" value="<?=$produto['nome']?>" />
        </td>
    </tr>

    <tr>
        <td>Preço</td>
        <td>
            <div class="input-group">
                <span class="input-group-addon" id="preco"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></span>
                <input type="number" name="preco" class="form-control" aria-describedby="preco" value="<?=$produto['preco']?>" />
        </td>
    </tr>
    <tr>
        <td>Descrição</td>
        <td>
            <textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea>
        </td>
    </tr>
    <tr>
        <td></td>
        <td class="usado">
            <input type="checkbox" name="usado" value="true" <?=$usado?>> Usado
        </td>
    </tr>
    <tr>
            <td>Categoria</td>
            <td>
                <select name="categoria_id" class="form-control">
                    <?php foreach($categorias as $categoria) :
                        $categoria_selec = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $categoria_selec ? "selected='selected'" : "";
                        ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>>
                            <?=$categoria['nome']?>
                        </option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>