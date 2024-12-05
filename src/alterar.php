<?php require_once "header.php";
require "conexao.php";

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    ?>
    <div class="alert alert-danger" role="alert">
        <h4>Falha ao abrir formulário para edição.</h4>
        <p>ID está vazio.</p>
    </div>
    <?php
    exit;
}

$sql = "select title, author FROM livro where ID = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

$registroLivro = $stmt->fetch();
?>

<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <div id="event-create-container" class="col-md-6 offset-md-3">
                    <h1>Editar livro</h1>
                    <form action="/destino-alterar.php" method="POST">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="form-group text-start mb-3">
                            <label for="title">Título:</label>
                            <input type="text" class="form-control" id="title" name="title" required value="<?=$registroLivro["title"]?>">
                        </div>
                        <div class="form-group text-start mb-3">
                            <label for="author">Autor:</label>
                            <input type="text" class="form-control" id="author" name="author" required value="<?=$registroLivro["author"]?>">
                        </div>
                        

                        <input type="submit" class="btn btn-primary btn-cadastrar" value="Cadastrar livro">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once "footer.php"; ?>