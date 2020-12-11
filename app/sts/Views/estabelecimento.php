<div class="jumbotron blog-home">
    <div class="container">
        <h2 class="display-4 text-center" style="margin-bottom: 40px;">Estabelecimentos</h2>

        <?php
            //var_dump($this->Dados['produtos']);

            foreach ($this->Dados['produtos'] as $Estabelecimento) {
                extract($Estabelecimento);

                if($id_produto == null){
                    ?>
                    <h5>EM MANUTENÇÃO!!</h5>
                    <?php
                }else{
                    ?>
                    <div class="card anim_bottom">
                        <div class="card" style="width: 18rem;">
                            <img src="..\assets\imagens\estabelecimentos\<?php echo $slug;?>\<?php echo $imagem_produto;?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nome;?></h5>
                                <p class="card-text"><?php echo $descricao;?></p>
                                <p class="card-text">R$ <?php echo number_format($preco,2,",",".");?></p>
                                <a href="<?php echo URL . "carrinho/new/".$id_produto; ?>" class="btn btn-primary">Adicionar ao carrinho</a>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }
        ?>
    </div>
</div>