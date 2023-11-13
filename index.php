<?php include('aoc.php'); ?><!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="La plateforme de télédéclarations des AOC Centre Loire">
    <meta name="author" content="AOC Centre Loire & 24eme">

    <title>La plateforme de télédéclarations des AOC Centre Loire</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap-4.0.0.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/color.css"/>

    <link rel="shortcut icon" type="image/x-icon" href="/images/favico_centre.ico" />
    <link rel="icon" type="image/x-icon" href="/images/favico_centre.ico" />
    <link rel="icon" type="image/png" href="/images/favico_centre.png" />
  </head>
  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Portail des AOC Centre Loire</h4>
              <p class="text-muted">Réalisez vos obligations déclaratives et téléchargez les documents des Syndicats viticoles et Organisme d'Inspection des AOC du Centre Loire</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white"></h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white"></a></li>
                <li><a href="#" class="text-white"></a></li>
                <li><a href="#" class="text-white"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="/" class="navbar-brand d-flex align-items-center">
            <strong>Portail des AOC Centre Loire</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <div class="offset-2 col-8">
          <img class="jumbotron-heading" src="/images/AOC.png" style="height: 200px" alt="Logo FUVC"/>
          <h1 class="jumbotron-heading">AOC Centre Loire</h1>
          <p class="lead text-muted">Réalisez vos obligations déclaratives et téléchargez les documents des Syndicats viticoles et Organisme d'Inspection des AOC du Centre Loire.</p>
          <p>
            <a href="https://declaration.aoc-centre-loire.fr/"  class="btn btn-primary my-2">Accéder au portail déclaratif</a>
            <a href="#documents"  class="btn btn-secondary my-2">Voir les documents officiels</a>
          </p>
          </div>
        </div>
      </section>

      <div class="album py-5 bg-light">
      <div class="container" id="documents">
      <div class="row">
<?php foreach($aoc_contacts as $aoc => $params): ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <div style="height: 225px;" class="d-flex">
                      <img class="mx-auto align-self-center" src="images/logos/<?php echo $params['logo']; ?>" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=<?php echo $params['title']; ?>" alt="Logo <?php echo $params['title']; ?>"  style="max-height: 225px;">
                  </div>
                  <h5 class="py-1 px-3 card-title text-center"><?php echo $params['title']; ?></h5>
                    <div class="d-flex">
                    <a class="btn btn-block btn-secondary" href="plus.php?aoc=<?php echo $aoc; ?>">Accéder aux documents</a>
                    </div>
                </div>
              </div>
            </div>
<?php endforeach; ?>
      </div>
      </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a>Fédération des unions viticoles du Centre</a>
        </p>
        <p>Portail de télédéclaration des AOC Centre Loire.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="/js/popper-1.12.9.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="/js/bootstrap-4.0.0.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/holder-2.9.0.js"></script>
  </body>
</html>
