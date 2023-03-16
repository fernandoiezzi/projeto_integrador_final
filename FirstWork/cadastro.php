<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First work</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <!--<div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./img/logotipo.png" width="200px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
                    <a class="nav-link nav-link-1" aria-current="page" href="index.php">Categorias</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link nav-link-3" href="about.php">Sobre</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link nav-link-4" href="contact.php">Contato</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link nav-link-4 active" href="cadastro.php">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="cadastrovaga.php">Cadastro de vagas</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

<section class="page-section" id="usuarios">
    
        <div class="container-fluid tm-mt-60">
        
            <div class="col-lg-22 col-14 mb-5">
                <h2 class="tm-text-primary text-center mb-5">Faça já o seu cadastro</h2>

                     <?php if($_GET) : ?>
                          <h3 class="section-subheading"><strong>Ocoreu um erro ao tentar cadastrar no banco.</strong></h3>
                     <?php endif; ?>

                <form id="usuarioForm" data-sb-form-api-token="API_TOKEN" method="POST" action="php/usuario.cadastro.php" class="tm-contact-form mx-auto">

                    <div class="form-group">
                         <input class="form-control" id="nome" name="inputNome" type="text" placeholder="Informe o nome"
                         data-sb-validations="required" />
                         <div class="invalid-feedback" data-sb-feedback="name:required">O nome é requirida.</div>
                    </div>

                    <div class="form-group">
                         <input class="form-control" id="CPF" name="inputCPF" type="text" placeholder="Informe o CPF"
                         data-sb-validations="required" />
                         <div class="invalid-feedback" data-sb-feedback="CPF:required">O CPF é requirida.</div>
                    </div>

                    <div class="form-group">
                         <input type="text" id="telefone" name="inputTelefone" class="form-control rounded-0" placeholder="telefone" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="telefone:required">O Telefone é requirido.</div>
                    </div>


                    <div class="form-group">
                         <input type="date" id="Data_nascimento" name="inputData_nascimento" class="form-control rounded-0" placeholder="Data Nascimento" data-sb-validations="required" />
                         <div class="invalid-feedback" data-sb-feedback="Data_nascimento:required">A Data de Nascimento é requirido.</div>
                    </div>


                    <div class="form-group">
                        <input type="text" id="Endereco" name="inputEndereco" class="form-control rounded-0" placeholder="Endereco" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="Endereco:required">O Endereco é requirida.</div>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" id="Bairro" name="inputBairro" class="form-control rounded-0" placeholder="Bairro" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="Bairro:required">O Bairro é requirida.</div>
                    </div>

                    <div class="form-group">
                        <input type="text" id="Estado" name="inputEstado" class="form-control rounded-0" placeholder="Estado" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="Estado:required">O Estado é requirida.</div>
                    </div>

                    <div class="form-group">
                        <input type="email" id="email" name="inputEmail" class="form-control rounded-0" placeholder="Email" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">O email é requirida.</div>
                    </div>


                    <div class="form-group">
                        <input type="text" id="descr" name="inputDescr" class="form-control rounded-0" placeholder="Descrição" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="descr:required">A Descrição é requirida.</div>
                    </div>


                    <div class="form-group">
                        <input type="text" id="img" name="inputImg" class="form-control rounded-0" placeholder="Imagem" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="img:required">A imagem é requirida.</div>
                    </div>


                    <div class="form-group">
                        <input type="text" id="rede_social" name="inputRede_social" class="form-control rounded-0" placeholder="Rede Social" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="rede_social:required">A Rede Social é requirida.</div>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="contact-select" name="inquiry">
                            <option value="-">Tipo de Usuário</option>
                            <option value="sales">Contratante</option>
                            <option value="creative">Usuário comum</option>
                        </select>
                    </div>

                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                        </div>
                    </div>


                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Cadastrar</button></div>


                </form>                
            </div>
        </div>
    </section>
    
    <!-- container-fluid, tm-container-content -->

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Sobre o First Work</h3>
                    <p>Estamos Construindo essa plataforma que vai auxiliar jovens inexperientes a ingressar no mercado de trabalho</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Our Links</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2020 Catalog-Z Company. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">TemplateMo</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>