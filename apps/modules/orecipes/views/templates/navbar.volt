<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger text-white" href="/"><strong><b>Orecipes</b></strong></a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                {% if session.has('id') %}
                    <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary" href="/orecipes/logout">Logout</a></li>
                {% else %}
                    <li class="nav-item mx-0 mx-lg-1"><a class="btn btn-primary" href="/orecipes/login">Login</a></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav><br>