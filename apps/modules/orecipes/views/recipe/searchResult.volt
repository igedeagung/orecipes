<!DOCTYPE html>
<html lang="en">
<head>
  {% include 'templates\header.volt' %}
  <title>Orecipes - Cari Resep</title>
</head>

<body class="bg-dark">

  {% include 'templates\navbar.volt' %}

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

  <style>
    html,body{
      height: 100%;
    }
  </style>

</body>
