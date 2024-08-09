<?php require_once "header.php"; ?>


<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <div id="event-create-container" class="col-md-6 offset-md-3">
                    <h1>Cadastro de Livros</h1>
                    <form action="/destino-cadastrar.php" method="POST" >
                        
                        <div class="form-group text-start mb-3">
                            <label for="title">Título:</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                        </div>
                        <div class="form-group text-start mb-3">
                            <label for="author">Autor:</label>
                            <input type="text" class="form-control" id="author" name="author" placeholder="Autor">
                        </div>
                        
                        
                        <input type="submit" class="btn btn-primary btn-cadastrar" value="Cadastrar livro">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require_once "footer.php"; ?>