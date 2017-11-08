<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Book API | GET</title>
    <link href="css/app.css" rel="stylesheet">
</head>
<style>
.paneles:hover {
 background-color:black;
 color:white;
}
.baires:hover {
    color:black;
}
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                  
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                 
                    <a class="navbar-brand" href="{{ url('/') }}">
                      Book API
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
               
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

              
                    <ul class="nav navbar-nav navbar-right">
                     
                   
                            <li><a href="http://www.phpbaires.com/slack.php">Slack</a></li>
                            <li><a class="btn btn-primary paneles" style="border-radius:0%;color:white" href="https://www.meetup.com/es-ES/phpbaires-devs/">Meetup</a></li>
                  
                    </ul>
                </div>
            </div>
        </nav>

<div class="container">
    <div class="row">
      <div class="col-sm-4">
      <center>
      <img src="imagenes/phpbaires.png" width="250" height="250">
      </center>
      <br>

     <a href="get">
      <div class="panel paneles">
      <div class="panel-body">
      <h4>GET</h4>
      </div>
      </div>
       </a>

  
         <a href="post">
      <div class="panel paneles">
      <div class="panel-body">
      <h4>POST</h4>
      </div>
      </div>
       </a>


  <a href="put">
      <div class="panel paneles">
      <div class="panel-body">
      <h4>PUT</h4>
      </div>
      </div>
       </a>

  <a href="delete">
      <div class="panel paneles">
      <div class="panel-body">
      <h4>Delete</h4>
      </div>
      </div>
       </a>



      </div>
      <div class="col-sm-8">

      <div class="panel">
      <div class="panel-body" style="padding:25px;">
      

      <h1>GET</h2>
      <br>
      <br>
      <br>
      <h4>Obtener Todos los Datos</h4>
      <pre>
      http://TUWEB/api/v1/book
      </pre>
      <br>
      <br>
      <br>
      <h4>Obtener 1 dato</h4>
      <pre>
      http://TUWEB/api/v1/book/{id}
      </pre>


      </div>
      </div>

      </div>
    </div>
</div>

    <script src="js/app.js"></script>
