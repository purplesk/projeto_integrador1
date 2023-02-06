<?php require("conexao.php") ?>]

<?php include("./includes/header.php") ?>

<style>
    body {
        background-color: black;
    }

    .row {
        margin-top: 150px;
    }

    h1 {
        color: white;
    }
    p{
        color: white;
        text-decoration: none;
    }
</style>

<main class="container p-4 ">
    <div class="row">
        <div class="col-md-4 mx-auto  ">
            <div class="card card-body bg-dark border border-dark">
                <form action="salvar.php" method="post">
                    <div class="col-md-8">
                        <h1>Cadastro</h1>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control bg-transparent text-light" name="nome" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control bg-transparent text-light" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control bg-transparent text-light" name="data" placeholder="">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control bg-transparent text-light" name="senha" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Salvar"  class="btn btn-block btn-dark" >
                        <a href="login.php"> voltar </a>
                        
                        </div>
                </form>

            </div>
        </div>
    </div>




</main>




<?php include("./includes/footer.php") ?>