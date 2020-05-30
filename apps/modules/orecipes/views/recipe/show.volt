<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link href="css/styles.css" rel="stylesheet" />
    <style>
        html,body{
            height: 100%;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="d-flex justify-content-center h-100">
      <div class="my-auto" style="width: 25%;">
        <div class="container">
          {{ flash.output() }}
        </div>
        <div class="card shadow " style="background-color:white">
          <div class="card-body">
              <h3 class="card-title font-weight-bolder p-3 text-center">Detail Resep</h3><br><br>
              <h5>{{ recipe[0]['judul'] }}</h5>
              <p><br>{{ recipe[0]['isi'] }}</p>
          </div>
          {% if session.has('id') %}
            {% if flagLike == 0 %}
            <a href="/orecipes/recipe/like/{{ recipe[0]['id'] }}" class="btn btn-primary float-right"><i class="fa fa-heart">   Suka</i></a>
            {% else %}
            <a href="/orecipes/recipe/unlike/{{ recipe[0]['id'] }}" class="btn btn-primary float-right"><i class="fa fa-times">     Batalkan Suka</i></a>
            {% endif %}
          {% endif %}
        </div>

        <center><div>
          <br><br>
          <a href="/orecipes/recipe/index" class="btn btn-primary">Kembali</a>
          {% if session.has('id') AND session.get('id') === recipe[0]['id_user'] %}
            <a href="/orecipes/recipe/edit/{{ recipe[0]['id'] }}" class="btn btn-primary float-left"><i class="fa fa-pencil"> Edit</i></a>
            <a href="/orecipes/recipe/delete/{{ recipe[0]['id'] }}" class="btn btn-primary float-right"><i class="fa fa-trash"> Hapus</i></a>
          {% endif %}
        </div></center>
      </div>
    </div>
</body>
</html>
