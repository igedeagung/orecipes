<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Orecipes</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger text-white" href="/"><strong><b>Orecipes</b></strong></a>
                <div class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                    {% if session.has('id') %}
                        <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary" href="/orecipes/logout">Logout</a></li>
                    {% else %}
                        <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary" href="/orecipes/login">Login</a></li>
                    {% endif %}
                </ul>
                </div>
            </div>
          </nav><br>
        <!-- Masthead-->
        <header class="masthead bg-dark text-white">
            <div class="container d-flex justify-content-between">
                    <div class="align-self-center">
                        <h1 class=" mb-0">Let Food Be Your Medicine</h1>
                        <p class="lead" style="font-size: 16px;">Obati rasa laparmu dengan berbagai resep yang menarik</p>
                        <a href="orecipes/register" class="btn btn-lg btn-primary"> Daftar Sekarang</a>
                        <a href="orecipes/recipe" class="btn btn-lg btn-primary">Lihat Resep</a>
                    </div>
                    <div class="just">
                        <img src="assets/img/logo.png" style="height: 447px; width: 697px; object-fit: contain;" alt="" srcset="">
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Footer--><br>
        <footer class="footer text-center" id="about">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Developer</h4>
                        <p class="lead mb-0">I Gede Agung K.P</p>
                        <p class="lead mb-0">Kholishotul Amaliah</p>
                        <p class="lead mb-0">Sudrajad Hadi Saputra</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <!-- <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="#"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div> -->
                    <!-- Footer About Text-->
                    <div class="col-lg-6">
                        <h4 class="text-uppercase mb-4">About This</h4>
                        <p class="lead mb-0">Website ini dibuat dalam rangka menyelesaikan tugas akhir mata kuliah APL</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © orecipes.local 2020</small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!-- Third party plugin JS-->
        
    </body>
</html>
