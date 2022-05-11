<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar | Order Fast</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylelogin.css'); ?>">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body>
    <div class="cub_form">
        <div class="cub_desfoque"></div>
        <div class="cub_ajuste">
          <?php if($alerta != null){?>
            <div class="alert alert-<?php echo $alerta["class"]; ?> alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <?php echo $alerta["mensagem"]; ?>
            </div>
          <?php } ?>
            <form action="<?php echo base_url('admin_dashboard/sign_in'); ?>" method="post">
                <input type="hidden" name="captcha">
                <label for="email"></label><input type="text" id="email" name="email" class="txt bradius" placeholder="E-Mail" value="<?php echo set_value('email'); ?>"/>
                <label for="senha"></label><input type="password" id="senha" name="senha" class="txt bradius" placeholder="Senha" value="<?php echo set_value('senha'); ?>"/>
                <button type="submit" name="entrar" value="entrar" class="btn bradius">Entrar</button>
            </form>
            <div>
                <div class="forgotPassword">
                    <a href="#">Esqueceu sua Senha?</a><br />
                </div>
            </div>
        </div>
    </div>
