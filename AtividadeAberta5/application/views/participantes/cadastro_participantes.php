<!Doctype html>
<html>
    <head>
        <title>Administração</title>
        <meta charset="UTF-8">

        <link rel="stylesheet"  type="text/css" href="<?php echo base_url(); ?>assets/css/estilo_admin.css"/>
        <link rel="stylesheet"  type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" />
    </head>
    <body>
        <div id="conteudo_geral">
            <div class="cadastro">

                <fieldset class="fieldset">
                    <legend>Cadastro de Participantes</legend>
                   
                    <form  action="<?php echo base_url() ?>cadastro_participantes/salvarParticipante" enctype="multipart/form-data"  method="POST">
                        <div class="form-group">
                            <label for="Login">Login</label>
                            <input type="text" class="form-control" id="Login" name="Login" required>
                        </div>

                        <div class="form-group">
                            <label for="Senha">Senha</label>
                            <input type="password" class="form-control" id="Senha" name="Senha" required>  
                        </div>

                        <div class="form-group">
                            <label for="Nome">Nome Completo</label>
                            <input type="text" class="form-control" id="Nome" name="Nome" required>
                        </div>





                        <div class="form-group">
                            <label for="Estado">Estado</label>
                            <select name="Estado" id="Estado"
                                    class="form-control" required
                                    onchange="CarregaCidades(this.value)">
                                <option value=""></option>

                                <?php
                                if (isset($estados)) {

                                    foreach ($estados as $valor) {
                                        ?>
                                        <option value="<?php echo $valor->CODIGO_ESTADO ?>"><?php echo $valor->NOME; ?> </option>
                                        <?php
                                    }
                                }
                                ?>

                            </select>
                        </div>
                        

                        <div class="form-group">
                            <label for="Cidade">Cidade</label>
                            <select name="Cidade" id="Cidade"
                                    class="form-control" required>
                                <option value=""></option>

                                <?php
                                if (isset($cidades)) {
                                    foreach ($cidades as $valor) {
                                        ?>
                                        <option value="<?php echo $valor->CODIGO_CIDADE ?>"><?php echo $valor->NOME; ?> </option>
                                        <?php
                                    }
                                }
                                ?>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email" name="Email" required>
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
                        </div>






                        <button id="save" type="submit"  class="btn btn-primary">
                            Salvar
                        </button>
                        <a id="save" class="btn btn" href="<?php echo base_url() ?>home" >
                            Login
                        </a>
                    </form>
                </fieldset>


            </div>
        </div>
    </body>
</html>

