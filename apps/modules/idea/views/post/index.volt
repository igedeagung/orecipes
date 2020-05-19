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

<body>

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
        ul{
            overflow:hidden;
            padding:3em;
        }
        ul li .sticky {
            text-decoration:none;
            color:#000;
            background:#f6ff7a;
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
        ul li{
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
        ul li:nth-child(even) .sticky {
            -o-transform:rotate(4deg);
            -webkit-transform:rotate(4deg);
            -moz-transform:rotate(4deg);
            position:relative;
            top:5px;
        }
        ul li:nth-child(3n) .sticky {
            -o-transform:rotate(-3deg);
            -webkit-transform:rotate(-3deg);
            -moz-transform:rotate(-3deg);
            position:relative;
            top:-5px;
            background:#f26b6b;
        }
        ul li:nth-child(5n) .sticky {
            -o-transform:rotate(5deg);
            -webkit-transform:rotate(5deg);
            -moz-transform:rotate(5deg);
            position:relative;
            top:-10px;
            background: #6bbcf2;
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
        
        form label {
            color: #000 !important;
        }
    </style>

    <div class="sessionMessage">
        <p><?php $this->flashSession->output() ?></p>
    </div>

    <div>
        <center><img src="{{ url('assets/img/logo.png') }}" style="height:50%;width:50%"></center>
    </div>

    <div >
        <a href="/idea/post/add" class="btn btn-primary">Tambah Resep</a>
    </div>

    <ul>
        {% for post in posts %}
        <li>
            <div class="sticky">
                <a href="/idea/post/show/{{ post['id'] }}"><h2>Judul: {{ post['judul'] }}</h2></a>
                <p>Isi: {{ post['isi'] }}</p>
            </div>
        </li>
        {% endfor %}
    </ul>

    <div class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group">
                            <label for="">Rating</label>
                            <input type="number" class="form-control" name="value" required>
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <button class="btn btn-success btn-form-rate">Rate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>