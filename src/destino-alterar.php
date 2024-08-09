<?php
require 'header.php'
    ?>

<style>
    .largeText{
        font-size: 30px;
    }
</style>
 
<div class="signup-section largeText">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <div  class="col-md-6 offset-md-3">
                    <h1>Livro alterado</h1>


                    <?php
                    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
                    $author = filter_input(INPUT_POST, "author", FILTER_SANITIZE_SPECIAL_CHARS);


                    echo "<p>Titulo: $title</p>";
                    echo "<p>Autor: $author</p>";


                    require "conexao.php";

                     $sql = "update livro SET title = ?, author = ?";

                    try {
                        $stmt = $conn->prepare($sql);
                        $result = $stmt->execute([$title, $author]);
                    } catch (Exception $e) {
                        $result = false;
                        $error = $e->getMessage();
                    }

                    if ($result == true) {
                        ?>
                        <p class="msg text-white-50 mx-auto mt-2 mb-5">Dados alterados com sucesso</p>
                        <?php
                    } else {
                        ?>
                        <p class="msg text-white-50 mx-auto mt-2 mb-5">Falha na alteração</p>
                        <?php
                    }
                    ?>

                </div>

            </div>
        </div>
    </div>
</div>

</section>
<?php
require 'footer.php'
    ?>