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
    
    <div class="content mt-3">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-12">
            <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Cidade</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $sql = "SELECT * FROM Cadastro";
                                            $consulta =  $conexao ->  query($sql);

                                            while($linha = $consulta-> fetch_assoc()){
                                                echo "<tr>";
                                                echo "<td>" .$linha ["id_cliente"]."</td>";
                                                echo "<td>" .$linha ["nome_cliente"]."</td>";
                                                echo "<td>" .$linha ["email_cliente"]."</td>";
                                                echo "<td>" .$linha ["cidade"]."</td>";
                                                echo 
                                                "<td>
                                                    <button type='button' class='btn btn-primary'>Editar</button>
                                                    <button type='button' class='btn btn-danger'>Deletar</button>
                                                </td>";
                                                echo "</tr>";

                                            }
                                        
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
            <!--/.col-->
    </div> <!-- .content -->
    <!-- Fim Painel Direito -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
