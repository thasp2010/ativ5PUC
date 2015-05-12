<div class="corpo">

    <div  >
        <div class="">

            <div class="col-sm-3 floatleft">
                <div class="tile-progress " style="width: 250px;height: 250px">
                    <a href="<?php echo base_url()?>galeria_fotos" >Alterar Foto</a>
                    <img src="<?php echo base_url()?>/assets" >
                </div>
            </div>

            <div class="col-sm-3 floatleft" >
                <div style="width: 550px;height: 250px; border: 1px solid grey; 
                     border-radius: 10px">

                    <table>
                        <?php
                        if (isset($dados)) {
                                ?>

                                <td>
                                    <?php echo $dados->nomeCompleto ?>
                                </td>


                                <td>
                                    <?php echo $dados->nomecid ?> - <?php echo $dados->SIGLA ?> 
                                </td>
                                <tr>
                                    <td>
                                        <?php echo $dados->email ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $dados->descricao ?>
                                    </td>
                                </tr>

                                <?php
                            }
                        
                        ?>
                    </table>

                </div>
            </div>

        </div>
    </div>


</div>
<?php $this->load->view('partes/rodape') ?>
        