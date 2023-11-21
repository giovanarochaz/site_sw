<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
    require('conecta.php');
    include_once('cabecalho.php');

?>

<body>

    <div class="col-sm-12">
        <form action='insere.php' method='POST'> 
            <div class="form-group">
                <label for="nome_cliente" class="form-label">Nome do Cliente</label>
                <input type="text" class="form-control" name="nome_cliente">
            </div>
            <div class="form-group">
                <label for="email_cliente" class="form-label">Email do Cliente</label>
                <input type="email" class="form-control" name="email_cliente">
            </div>
            <div class="form-group">
                <label for="cidade" class="form-label">Cidade do Cliente</label>
                <input type="text" class="form-control" name="cidade">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>    
    </div> <!-- .content -->
    <!-- Fim Painel Direito -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
