<div class="container" align="center">
    <label class="ok3">
        <h2>Taxes</h2>
    </label>

    <table class="table tablestriped">
        <thead>
            <th>
                Id
            </th>
            <th>
                Taxa
            </th>
            <th>
                Descrição
            </th>
            <th>
                Vigor
            </th>
            <th>
            </th>
        </thead>
        <tbody>
            <?php foreach ($ivas as $iva) { ?>
                <tr>
                    <td><?= $iva->id ?></td>
                    <td><?= $iva->percentagem ?></td>
                    <td><?= $iva->descricao ?></td>
                    <td><?= $iva->vigor ?></td>
                    <td>
                        <a href="index.php?r=iva/update&i=<?= $iva->id ?>" class="btn btn-info" role="button">Edit</a>

                        <a href="index.php?r=iva/delete&i=<?= $iva->id ?>" class="btn btn-info" role="button">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <br>

    <a href="index.php?r=iva/show" class="btn btn-primary" id="coids" role="button"> Regist Tax</a>
    <br>
    <a href="index.php" class="btn btn-primary" id="coids" role="button">Back</a>