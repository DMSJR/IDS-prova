<?php
require 'header.php'
    ?>


<div class="row signup-section ">
    <div class="col-md-10 col-lg-8 mx-auto text-center">
        <?php
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

        require "conexao.php";

        $sql = "delete from livro where ID = ?";

        try {
            $stmt = $conn->prepare($sql);
            $result = $stmt->execute([$id]);
        } catch (Exception $e) {
            $result = false;
            $error = $e->getMessage();
        }

        if ($result == true) {
            ?>

            <p class="msg text-white-50 mx-auto mt-2 mb-5">Registro excluído com sucesso</p>

            <?php
        } else {
            ?>

            <p class="msg text-white-50 mx-auto mt-2 mb-5">Falha ao efetuar exclusão</p>
            <p><?php echo $error; ?></p>

            <?php
        }
        ?>

        <a href="listar.php" class="btn btn-info ms-5" role="button">Voltar</a>
    </div>
</div>


<?php
require 'footer.php'
    ?>