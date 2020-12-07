<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <?php
            $cont = 0;
            foreach ($this->Dados['banner'] as $banner) {
                extract($banner);
                ?>
                <div class="carousel-item <?php if ($cont == 0) {
                    echo "active";
                } ?>">
                    <img src="<?php echo URL; ?>/assets/imagens/carousel/<?php echo $id; ?>/<?php echo $imagem; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block <?php echo $posicao_text; ?>">
                        <h5><?php echo $titulo; ?> </h5>
                        <p><?php echo $descricao; ?></p>
                    </div>
                </div>
                <?php
                $cont++;
            }
        ?>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

