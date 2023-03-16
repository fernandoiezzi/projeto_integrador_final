<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->

        <?php 
        require("./header.php");
     ?>
          <!-- Cadastro-->
        <section class="page-section" id="servicos">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Serviços</h2>
                   
                    <?php if($_GET) : ?>
                    <h3 class="section-subheading"><strong>Ocoreu um erro ao tentar cadastrar no banco.</strong></h3>
                    <?php endif; ?>
                </div>
                <form id="servicosForm" data-sb-form-api-token="API_TOKEN" method="POST" action="php/servico.registrar.php">
                    <div class="row align-items-center mb-5 offset-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Image input-->
                                <input class="form-control" id="imagem" name="inputImagem" type="text" placeholder="Informe a imagem *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="imagem:required">A imagem é requirida.</div>
                            </div>
                            <div class="form-group">
                                <!-- Title input-->
                                <input class="form-control" id="title" name="inputTitulo" type="text" placeholder="Informe o titulo *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="title:required">O titulo é requirida.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Description input-->
                                <input class="form-control" id="description" name="inputDescricao" type="text" placeholder="Informe a descrição *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="description:required">A descrição é requirida.</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Registrar</button></div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
