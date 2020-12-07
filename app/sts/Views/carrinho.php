<div class="jumbotron blog-home">
    <div class="container">
        <h2 class="display-4 text-center" style="margin-bottom: 40px;">Carrinho</h2>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
            </tr>
            </thead>
            <tbody>


            <?php
                //var_dump($this->Dados['carrinho']);
                $total = 0;
                foreach ($this->Dados['carrinho'] as $carrinho) {
                    extract($carrinho);

                    if($id_carrinho == null){
                        ?>
                        <tr>
                            <th scope="row" colspan="3">&nbsp;</th>
                        </tr>
                        <?php
                    }else{
                        $total = $total + $preco;
                        ?>
                        <tr>
                            <th scope="row"><?php echo $cliente;?></th>
                            <td><?php echo $produto;?></td>
                            <td>R$ <?php echo number_format($preco,2,",",".");?></td>
                        </tr>

                        <?php
                    }
                }
            ?>
            </tbody>
            <tfoot class="bg-dark text-white">
            <tr>
                <td colspan="2" class="text-right" >Total</td>
                <td colspan="3" class=""><?php echo number_format($total,2,",",".");?></td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
