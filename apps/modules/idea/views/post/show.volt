<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="card shadow " style="background-color:#e68b87">
          <div class="card-body">
              <h3 class="card-title font-weight-bolder p-3 text-center">Detail Resep</h3>
              <h5>Judul: {{ post[0]['judul'] }}</h5>
              <p>Isi:<br>{{ post[0]['isi'] }}</p>
          </div>
        </div>
        <center><div>
          <br><br><a href="/idea/post/index" class="btn btn-primary">Kembali</a>
        </div></center>
      </div>
    </div>
</body>
</html>
