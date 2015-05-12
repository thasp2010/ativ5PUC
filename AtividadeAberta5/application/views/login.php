<!Doctype html>
<html>
    <head>
        <title>Administração</title>
        <meta charset="UTF-8">
      
        <link rel="stylesheet"  type="text/css" href="assets/css/estilo_admin.css"/>
        <link rel="stylesheet"  type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
       
    </head>

    <body class="back_login">
       
            <?php
            if (isset($erro)) { 
                echo ' <div class=" alert alert-error">';
                echo $erro;
                echo '</div>';
            }
            ?>
        
        <div class="container">

            <form class="form-signin" action="<?php echo base_url()?>autenticacao" method="POST">
                <h2 class="form-signin-heading">YearBook Puc Minas</h2>
                <input type="text" class="input-block-level" placeholder="Usuario " name="login" id="login">
                <input type="password" class="input-block-level" placeholder="senha" name="senha" id="senha">
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Manter-me logado
                </label>
                <button class="btn btn-large btn-primary" type="submit">Entrar</button>
                <a class="btn btn-large btn"  href="<?php echo base_url() ?>cadastro_participantes">Cadastrar</a>
            </form>

        </div> 

        
    </body>
</html>
