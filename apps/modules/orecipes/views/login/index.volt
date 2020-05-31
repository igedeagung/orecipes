<!DOCTYPE html>
<html lang="en">
    <head>
        {% include 'templates\header.volt' %}
        <title>Orecipes - Login</title>
    </head>
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
                <h3 class="card-title font-weight-bolder p-3 text-center">LOGIN</h3>
                <form action="/orecipes/login" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" required>
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