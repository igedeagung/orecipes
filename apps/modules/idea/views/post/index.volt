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

<!-- code taken from https://mdbootstrap.com/snippets/jquery/jakubowczarek/893358 -->
<style>
    *{
        margin:0;
        padding:0;
    }
    body{
        font-family:arial,sans-serif;
        font-size:100%;
        margin:3em;
        background:#666;
        color:#fff;
    }
    h2,p{
        font-size:100%;
        font-weight:normal;
        color: black;
    }
    ul,li{
        list-style:none;
    }
    ul .allpost{
        overflow:hidden;
        padding:3em;
    }
    ul li .sticky {
        text-decoration:none;
        color:black;
        background:#e68b87;
        display:block;
        height:15em;
        width:15em;
        padding:1em;
        -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
        /* Safari+Chrome */
        -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
        /* Opera */
        box-shadow: 5px 5px 7px rgba(33,33,33,.7);
        -moz-transition:-moz-transform .15s linear;
        -o-transition:-o-transform .15s linear;
        -webkit-transition:-webkit-transform .15s linear;
    }
    ul li .sticky{
        margin:1em;
        float:left;
    }
    ul li h2{
        font-size:140%;
        font-weight:bold;
        padding-bottom:10px;
    }
    ul li p{
        font-family:"Reenie Beanie",arial,sans-serif;
    }
    ul li .sticky:hover,ul li .sticky:focus{
        -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
        -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
        box-shadow:10px 10px 7px rgba(0,0,0,.7);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
        position:relative;
        z-index:5;
    }
</style>
    
<body>
    
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/"><>ForumTC</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    {% if session.has('id') %}
                        <li class="nav-item mx-0 mx-lg-1"><a class="bg-primary nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/idea/logout">Logout</a></li>
                    {% else %}
                        <li class="nav-item mx-0 mx-lg-1"><a class="bg-primary nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/idea/login">Login</a></li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>

    <div class="sessionMessage">
        <p><?php $this->flashSession->output() ?></p>
    </div>

    <div class="container">
        <div>
            <center><img src="{{ url('assets/img/logo.png') }}" style="height:50%;width:50%"></center>
        </div>

        <div >
            <a href="/idea/post/add" class="btn btn-primary">Tambah Resep</a>
        </div>

        <ul class="allpost">
            {% for post in posts %}
            <li>
                <div class="sticky">
                    <a href="/idea/post/show/{{ post['id'] }}"><h2>Judul: {{ post['judul'] }}</h2></a>
                    <p>Isi: {{ post['isi'] }}</p>
                </div>
            </li>
            {% endfor %}
        </ul>
    </div>
</body>