<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo URL . "home"; ?>">MTF</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URL . "home"; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo URL . "estabelecimentos"; ?>">Estabelecimentos</a>
                    <a class="dropdown-item" href="#"></a>
                    <!-- <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div> -->
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li> -->
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <a href="<?php echo URL . "carrinho/index"; ?>"><i class="fas fa-shopping-cart">Carrinho</i></a>
        </div>

        <div>&nbsp;&nbsp;-&nbsp;&nbsp;</div>
        
        <div class="form-inline my-2 my-lg-0">
            <label class="mr-3"><?php echo $_SESSION['usuario_nome'] ; ?></label>
            <a class="btn btn-danger" href="<?php echo URL . "logout"; ?>">SAIR</a>
        </div>
    </div>
</nav>