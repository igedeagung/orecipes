<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger text-white" href="/"><strong><b>Orecipes</b></strong></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                {% if !(session.has('id')) %}
                <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary" href="/orecipes/profil/login">Login</a></li>
                {% else %}
                <li class="nav-item mx-0 mx-lg-1 dropdown">
                    <a class="dropdown-toggle" href="#" data-target="#" data-toggle="dropdown"><i class="fa fa-user-circle-o" style="font-size:40px"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/orecipes/profil/edit">Edit Profil</a></li>
                        <li><a class="dropdown-item" href="/orecipes/profil/logout">Logout</a></li>
                    </ul>
                </li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav><br>
<style>
    .fa-user-circle-o {
        color: white;
    }
    .fa-user-circle-o:hover {
        color: black;
    }
</style>