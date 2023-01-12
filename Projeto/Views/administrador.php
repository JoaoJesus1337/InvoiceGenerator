<label class="ok">BEM VINDO <?= $_SESSION["username"] ?></label><label class="ok3">[Administrador]</label>
<br>
<div align="center">
    <a href="index.php?r=user/show&i=funcionario" class="btn btn-primary" id="coids">Register Worker</a>
    <br>
    <a href="index.php?r=user/gestao" class="btn btn-primary" id="coids">Manage Workers</a>
    <br>
    <a href="index.php?r=produto/index" class="btn btn-primary" id="coids">Manage Products</a>
    <br>
    <a href="index.php?r=iva/index" class="btn btn-primary" id="coids">Manage Taxes</a>
    <br>
    <a href="index.php?r=user/show&i=cliente" class="btn btn-danger" id="coids">Registe Cliente</a>
    <br>
    <a href="index.php?r=user/show&i=update" class="btn btn-primary" id="coids">Alter Email / Password</a>
    <br>
    <a href="index.php?r=fatura/show" class="btn btn-primary" id="coids">Issue Invoice</a>
    <br>
    <a href="index.php?r=fatura/index&i=<?= $_SESSION["username"] ?>" class="btn btn-warning" id="coids">Invoice History</a>
    <br>
    <a href="index.php?r=empresa/index" class="btn btn-secundary" id="coids">Manage Company</a>
    <br>
    <a href='index.php?r=auth/logout' class="btn btn-primary" role="button" id="coids">Log Out</a>
</div>