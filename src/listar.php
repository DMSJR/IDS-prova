<?php
require 'header.php';
?>
<style>
    .whiteFont{
        color: lightgray;
        font-size: 24px;
    }
</style>
<section class="signup-section" id="signup">

    <div class="container px-4 px-lg-5 whiteFont">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-10 mx-auto text-center">
                <div id="event-create-container" class="col-md-10 offset-md-1">
                    <h1>Lista de livros</h1>

                    <?php
                    require "conexao.php";

                    $sql = "select id, title, author 
            FROM livro order by id";
                    $stmt = $conn->query($sql);

                    $count = $stmt->rowCount();

                    if ($count == 0) {
                        ?>
                        <div class="alert alert-warning" role="alert">
                            <h4>Atenção</h4>
                            <p>Não há nenhum registro na tabela <b>livro</b></p>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="table-responsive">
                            <table class="table whiteFont">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 10%;">ID</th>
                                        <th scope="col" style="width: 15%;">Título</th>
                                        <th scope="col" style="width: 10%;">Autor</th>


                                        <th scope="col" style="width: 20%;" colspan="2"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $stmt->fetch()) {
                                        ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['title'] ?></td>
                                            <td><?= $row['author'] ?></td>

                                            <td>
                                                <a class="btn btn-sm btn-warning" href="alterar.php?id=<?= $row['id']; ?>">
                                                    <span data-feather="edit"></span>
                                                    Editar
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" href="excluir.php?id=<?= $row['id']; ?>"
                                                    onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                                                    <span data-feather="trash-2"></span>
                                                    Excluir
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>
</section>




<?php
require 'footer.php';
?>