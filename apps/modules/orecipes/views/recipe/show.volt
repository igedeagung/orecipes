<!DOCTYPE html>
<html lang="en">
<head>
  {% include 'templates\header.volt' %}
  <title>Orecipes - Detail Resep</title>
</head>

<body class="bg-dark">
    <div class="d-flex justify-content-center h-100">
      <div class="my-auto" style="width: 25%;">
        <div class="container">
          <div class="sessionMessage">
            <p><?php $this->flashSession->output() ?></p>
          </div>
        </div>
        <div class="card shadow " style="background-color:white">
          <div class="card-body">
              <h3 class="card-title font-weight-bolder p-3 text-center">Detail Resep</h3>
              <hr style="height:1.5px;border-width:0;color:gray;background-color:gray">
              <h5>{{ recipe[0]['judul'] }}</h5>
              <p><br>{{ recipe[0]['isi'] }}</p>
              <span class="float-left" style="font-size:12px;color:gray">{{ recipe[0]['nama'] }} menerbitkan resep ini</span>
              {% if session.has('id') %}
                {% if flagLike == 0 %}
                <a href="/orecipes/recipe/like/{{ recipe[0]['id'] }}"><span class="float-right"><i class="fa fa-heart-o fa-2x"></i></span></a>
                {% else %}
                <a href="/orecipes/recipe/unlike/{{ recipe[0]['id'] }}"><span class="float-right"><i class="fa fa-heart fa-2x"></i></span></a>
                {% endif %}
              {% endif %}
          </div>
        </div>

        <center><div>
          <br><br>
          <a href="/orecipes/recipe/index" class="btn btn-primary">Kembali</a>
          {% if session.has('id') AND session.get('id') === recipe[0]['id_user'] %}
            <a href="/orecipes/recipe/edit/{{ recipe[0]['id'] }}" class="btn btn-primary float-left"><i class="fa fa-pencil"></i> Edit</a>
            <a href="/orecipes/recipe/delete/{{ recipe[0]['id'] }}" class="btn btn-primary float-right"><i class="fa fa-trash"></i> Hapus</a>
          {% endif %}
        </div></center>
      </div>
    </div>
    <style>
        html,body{
            height: 100%;
        }
    </style>
</body>
</html>
