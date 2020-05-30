<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orecipes - Edit Resep</title>
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
          <div class="sessionMessage">
            <p><?php $this->flashSession->output() ?></p>
          </div>
        </div>
        <div class="card shadow " >
          <div class="card-body">
              <h3 class="card-title font-weight-bolder p-3 text-center">Edit Resep</h3>
              <hr style="height:1.5px;border-width:0;color:gray;background-color:gray">
              <form action="/orecipes/recipe/editSubmit" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" name="judul"class="form-control" value="{{ recipe[0]['judul'] }}" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Isi</label>
                  <textarea name="isi" class="form-control" rows="8" style="white-space: pre-wrap" required>{{ recipe[0]['isi'] }}</textarea>
                </div>
                <div class="form-group">
                  <input type="hidden" name="recipeId" value="{{ recipe[0]['id'] }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>