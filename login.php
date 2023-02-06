<?php include("./includes/header.php"); ?>

<?php 

require('conexao.php');

if (isset($_POST['login'])) {

    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM `cadastro`  WHERE `email`='$usuario' and `senha`='$senha'";

    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) >= 1) {
        $_SESSION['email'] = $usuario;
        $_SESSION['senha'] = $senha;

        $_SESSION['tipo_msg'] = 'success';
        $_SESSION['msg'] = 'Bem-vindo!!!';

        header("location:index.php");
    } else {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);

        $_SESSION['tipo_msg'] = 'danger';
        $_SESSION['msg'] = "Usuario ou senhas invalidos";

        header("location:login.php");
    }
}

if (isset($_POST['salvar'])) {
    $email = $_POST['email'];

    $query = "INSERT INTO `cadastro`(`email`,`senha`) VALUES ('$email','$senha')";

    $result = mysqli_query($conexao, $query);

    $_SESSION['tipo_msg'] = 'success';
    $_SESSION['msg'] = 'usuario cadastrado com sucesso';
}

?>

<style>

    
body {
      background-color: black;
    }

    .row {
      margin-top: 240px;
    }

    h1 {
      color: white;
    }

    p {
      color: white;
      float: right;
      text-decoration: none;
    }

    p:hover {
      color: sky;}
</style>


<div class="container">
    <div class="">
        <?php if (isset($_SESSION['msg'])) { ?>
        <div class="alert alert-<?php echo $_SESSION['tipo_msg'] ?> alert-dimissible fade show" role="alert">
            <?php echo $_SESSION['msg'] ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php } ?>


        <main class="container p-4 ">
            <div class="row">
                <div class="col-md-4 mx-auto  ">
                    <div class="card card-body bg-dark border border-dark">
                        <form action="login.php" method="post">
                            <div class="col-md-8">
                                <h1>Login</h1>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control bg-transparent text-light" name="email"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control bg-transparent text-light" name="senha"
                                    placeholder="Senha">
                            </div>
                            <a href="cadastro.php">
                                <p>Cadastrar-se</p>
                            </a>
                            <div class="form-group">
                                <input type="submit" name="login" value="Entrar" class="btn btn-dark btn-lg btn-dark">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

<script>
const $alerta = document.querySelector(".alert");
if ($alerta) {
    setTimeout(() => {
        $alerta.remove();
    }, 2000);
}
<?php include("./includes/footer.php"); ?>