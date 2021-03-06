<?php
  require_once ('UsuarioController.php');
    verificaUsuario();
?>
<?php
  require_once ("header.php");
  require_once ("model/Categoria.php");
  require_once ("CategoriaDAO.php");
  $categoria = new Categoria();
  $categoria->id  = $_GET['id'];
  $categoria      = buscaCategoria($conexao,$categoria);
?>

<div class="padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="wow fadeInRight" data-wow-duration=".75s">Formulário</h1>
        <h1 class="wow fadeInRight" data-wow-duration="1.25s">Altera Categoria</h1>
        <br>
      </div>
    </div>
    <form class="form-horizontal wow fadeInRight" action="categoria-action-altera.php" method="POST">
      <fieldset>
        <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5 wow fadeInRight" data-wow-duration="1.25s">
          <div class="md-form">
            <input type="hidden"  name="id" value="<?= $categoria->id ?>">
            <input id="inputNome" type="text" class="form-control" name="nome" value="<?= $categoria->nome ?>">
            <label for="inputNome" class="">Nome da Categoria</label>
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
        <div class="row">
        <div class="form-group">
          <div class="col-md-4 col-md-offset-1">
            <button type="reset" class="btn btn-default btn-rounded">Limpar</button>
            <button type="submit" class="btn btn-primary btn-rounded">Salvar</button>
          </div>
        </div>
      </div>
      </fieldset>
    </form>
  </div>
</div>

<?php require_once ("footer.php"); ?>
