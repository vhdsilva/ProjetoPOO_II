<div class="jumbotron blog-home">
    <div class="container">
        <h2 class="display-4 text-center" style="margin-bottom: 40px; color: black;">Carrinho</h2>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Preço</th>
                <th></th>
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
                            <th scope="row" colspan="4">&nbsp;</th>
                        </tr>
                        <?php
                    }else{
                        $total = $total + $preco;
                        ?>
                        <tr>
                            <td><?php echo $produto;?></td>
                            <td>R$ <?php echo number_format($preco,2,",",".");?></td>
                            <td><button type="button" class="btn btn-danger">Excluir</button></td>
                        </tr>

                        <?php
                    }
                }
            ?>
            </tbody>
            <tfoot class="bg-dark text-white">
            <!-- <tr>
                <td colspan="1" class="text-right" >Total</td>
                <td colspan="2" class=""><?php echo number_format($total,2,",",".");?></td>
            </tr> -->
            <tr>
                <td colspan=""><button type="button"  class="btn btn-primary">Voltar as Compras</button></td>
                <td colspan="" class="text-right">
                    <button type="button" class="btn btn-warning">Total <?php echo number_format($total,2,",",".");?></button>
                </td>
                <td colspan=""><button type="button" class="btn btn-success">Finalizar Pedido</button></td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
