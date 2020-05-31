<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orecipes - Cari Resep</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body{
            height: 100%;
        }
    </style>
</head>

<body class="bg-dark">

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

  <div class="container my-5">
    <div class="sessionMessage">
      <p><?php $this->flashSession->output() ?></p>
    </div>
    
    <!--Section: Content-->
    <section class="">
      <!-- Section heading -->
        <div class="row">
          {% for recipe in recipes %}
          <!--Grid column-->
          <div class="col-md-4 mb-4">
            <!--Card-->
            
            <div class="card">
              
              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title"><strong>{{ recipe['judul'] }}</strong></h4>
                <hr>
                <!--Text-->
                <p class="card-text mb-3"><p>{{ recipe['isi'] }}</p>
                </p>
                <p class="text-right mb-0 font-small font-weight-bold"><a href="/orecipes/recipe/show/{{ recipe['id'] }}">read more <i class="fa fa-angle-right"></i></a></p>
              </div>
              <!--/.Card content-->
              
            </div>
            <!--/.Card-->
          
    
          </div>
          <!--Grid column-->
          {% endfor %}
        </div>
        <!--Grid column-->
        <a href="/orecipes/recipe/index" class="btn btn-primary">Kembali ke semua resep</a>
      </div>
  
    </section>
    <!--Section: Content-->
  
  </div>

</body>
