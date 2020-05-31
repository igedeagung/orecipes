<!DOCTYPE html>
<html lang="en">
<head>
  {% include 'templates\header.volt' %}
  <title>Orecipes - Resep</title>
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
      <center>
        <form action="/orecipes/recipe/search" method="post">
            <div class="box">
              <div class="container-1">
                  <span class="icon"><i class="fa fa-search"></i></span>
                  <input type="search" name="search" id="search" placeholder="Cari Resep" />
              </div>
            </div>
        </form><br>
      </center>

        {% if session.has('id') %}
        <center><a href="/orecipes/recipe/add"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Resep</button></a></center><br>
        {% endif %}

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
      </div>
  
    </section>
    <!--Section: Content-->
  
    <style>
      html,body{
            height: 100%;
      }
        
      .container-1{
        width: 500px;
        vertical-align: middle;
        position: relative;
      }
      .container-1 input#search{
        width: 500px;
        height: 50px;
        background: #1b1e24;
        border: none;
        font-size: 10pt;
        color: #868e96 ;
        padding-left: 45px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
      }
      .container-1 .icon{
        position: absolute;
        margin-left: 17px;
        margin-top: 13px;
        z-index: 1;
        color: #4f5b66;
      }
      .container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
        outline:none;
        background: #ffffff;
      }
    </style>
  
  </div>

</body>
