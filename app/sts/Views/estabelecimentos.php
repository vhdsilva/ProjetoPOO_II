<div class="jumbotron blog-home">
    <div class="container">
        <h2 class="display-4 text-center" style="margin-bottom: 40px;">Estabelecimentos</h2>


        <?php
            $cont = 1;
            $max = 3;
        ?>



            <?php
                foreach ($this->Dados['esta'] as $Estabelecimento) {
                    extract($Estabelecimento);
                    if($cont == 1){
                        echo '<div class="card-deck blog-text">';
                    }
                    ?>
                        <div class="card anim_bottom">
                            <a href="" alt="">
                                <img class="card-img-top" src="<?php echo URL;?>/assets/imagens/estabelecimentos/<?php echo $imagem; ?>" alt="">
                            </a>
                            <div class="card-body">
                                <a href="" alt="">
                                    <h5 class="card-title text-center text-danger" <?php echo $id; ?>/<?php echo $imagem; ?>><?php echo $titulo; ?></h5>
                                </a>
                                <p class="card-text"><?php echo $descricao; ?></p>
                                <p class="text-center"><a href="<?php echo URL . "estabelecimento/".$slug; ?>" alt="" class="btn btn-danger">Mais Detalhes</a></p>
                            </div>
                        </div>


                    <?php
                    if($cont == $max){
                        echo '</div><br>';
                        $cont=0;
                    }
                    $cont++;
                }
            ?>

    </div>
</div>