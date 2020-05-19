<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        html,body{
            height: 100%;
        }
    </style>
</head>

<body>

  <nav class="navbar navbar-light navbar-expand-lg bg-primary text-uppercase fixed-top">
    <div class="container">
        <a class="btn btn-primary" href="/idea/post/index">Orecipes</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                {% if session.has('id') %}
                    <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary" href="/idea/logout">Logout</a></li>
                {% else %}
                    <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary" href="/idea/login">Login</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
  </nav>
  <br>

  <div class="sessionMessage">
    <p><?php $this->flashSession->output() ?></p>
  </div>

  <div class="container my-5">
    <!--Section: Content-->
    <section class="">
      <!-- Section heading -->
        <div>
          <center><img src="{{ url('assets/img/logo.png') }}" style="height:50%;width:50%"></center>
          <br>
        </div>
        <div class="row">
          {% for post in posts %}
          <!--Grid column-->
          <div class="col-md-4 mb-4">
            <!--Card-->
            
            <div class="card">
              
              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title"><strong>{{ post['judul'] }}</strong></h4>
                <hr>
                <!--Text-->
                <p class="card-text mb-3"><p>Isi: {{ post['isi'] }}</p>

                </p>
                <p class="text-right mb-0 font-small font-weight-bold"><a href="/idea/post/show/{{ post['id'] }}">read more <i class="fas fa-angle-right"></i></a></p>
              </div>
              <!--/.Card content-->
              
            </div>
            <!--/.Card-->
          
    
          </div>
          <!--Grid column-->
          {% endfor %}
        </div>
        <!--Grid column-->
      </div>
      
      <div class="text-center mt-4 mb-5">
        <a class="black-text font-weight-bold" href="#!">Browse all articles <i class="fa fa-angle-right"></i></a>
      </div>
  
    </section>
    <!--Section: Content-->
  
  
  </div>

</body>
