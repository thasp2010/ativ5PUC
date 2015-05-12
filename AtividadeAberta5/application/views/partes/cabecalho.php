<!Doctype html>
<html>
    <head>
        <title>YearBook PUC Minas</title>
        <meta charset="UTF-8">
        <script src="<?php echo base_url() ?>assets/bootstrap/js/jquery-1.10.1.min.js" ></script>
        <script  src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js" ></script>
        <script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js" ></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/estilo_admin.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" />



        <script>
            function mostraDiv() {
                document.getElementById("sucess").style.display = "block";
            }

        </script>


    </head>
    <body>
        <div id="conteudo_geral">

            <header >
                <h1 class="titulo">
                    <img src="<?php echo base_url() ?>assets/img/puc_minas.jpg" class="logo_admin"/>
                    YearBook PUC Minas
                </h1>

                <hr>

             

                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            
                            <div class="nav-collapse">
                                <ul class="nav">
                                    <li class="active"><a href="<?php echo base_url() ?>home/inicio/<?php echo $dados->login ?>">Home</a></li>
                                                  
                                  
                                </ul>    
                                <ul class="nav pull-right">
                                    <li class="divider-vertical"></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configurações de Conta <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <?php if(isset($dados)) { ?>
                                            <li><a href="<?php echo base_url()?>cadastro_participantes/editar/<?php echo $dados->login ?>">Dados da Conta</a></li>
                                            <?php }?>
                                            <li class="divider"></li>
                                            <li><a href="<?php echo base_url()?>home/logout">Sair</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.nav-collapse -->
                        </div>
                    </div><!-- /navbar-inner -->
                </div>


            </header>
            
                <?php
                if (isset($msg)) {
                    echo '<div id="sucess" class="alert alert-success mensagem_sucesso">';
                    echo $msg;
                    echo ' </div>';
                }
                ?>
           

            
                <?php
                if (isset($erro)) {
                    echo '<div id="error" class="alert alert-error mensagem_sucesso">';
                    echo $erro;
                    echo '</div>';
                }
                ?>
            

