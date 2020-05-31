<!DOCTYPE html>
<html lang="en">
<head>
  {% include 'templates\header.volt' %}
  <title>Orecipes - Tulis Resep</title>
</head>

<body class="bg-dark">
    <style>
        html,body{
            height: 100%;
        }
    </style>
    <div class="d-flex justify-content-center h-100">
      <div class="my-auto" style="width: 25%;">
        <div class="container">
          <div class="sessionMessage">
            <p><?php $this->flashSession->output() ?></p>
          </div>
        </div>
        <div class="card shadow " >
          <div class="card-body">
              <h3 class="card-title font-weight-bolder p-3 text-center">Tambah Resep</h3>
              <hr style="height:1.5px;border-width:0;color:gray;background-color:gray">
              <form action="/orecipes/recipe/addSubmit" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul</label>
                  <input type="text" name="judul"class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Isi</label>
                  <textarea name="isi" class="form-control" rows="8" required>Bahan-bahan : Langkah : </textarea>
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