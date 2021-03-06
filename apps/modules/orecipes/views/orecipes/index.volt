<!DOCTYPE html>
<html lang="en">
    <head>
        {% include 'templates\header.volt' %}
        <title>Orecipes</title>
    </head>

    <body id="page-top">

        {% include 'templates\navbar.volt' %}
        
        <!-- Masthead-->
        <header class="masthead bg-dark text-white">
            <div class="container d-flex justify-content-between">
                    <div class="align-self-center">
                        <h1 class=" mb-0">Let Food Be Your Medicine</h1>
                        <p class="lead" style="font-size: 16px;">Obati rasa laparmu dengan berbagai resep yang menarik</p>
                        <a href="orecipes/profil/register" class="btn btn-lg btn-primary"> Daftar Sekarang</a>
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
        
    </body>
</html>
