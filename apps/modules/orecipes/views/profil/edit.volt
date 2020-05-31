<!DOCTYPE html>
<html lang="en">
<head>
  {% include 'templates\header.volt' %}
  <title>Orecipes - Edit Profil</title>
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
              <h3 class="card-title font-weight-bolder p-3 text-center">EDIT PROFIL</h3>
              <form action="/orecipes/profil/edit" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama"class="form-control" value="{{ user[0]['nama'] }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ user[0]['email'] }}" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                  </div>
                </form>
          </div>
        </div>
      </div>
    </div>
    <style>
        html,body{
            height: 100%;
        }
    </style>
</body>
</html>