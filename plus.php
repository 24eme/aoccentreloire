<?php

include('aoc.php');

$aoc = $aoc_contacts[$_GET['aoc']];
$documents = $aoc_documents[$_GET['aoc']];

if (isset($aoc['url_plusdinfo'])) {
    header('Location: '.$aoc['url_plusdinfo']."\n");
    exit;
}

?><!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="La plateforme de télédéclarations des AOC Centre Loire">
    <meta name="author" content="AOC Centre Loire & 24eme">

    <title>OpenODG : <?php echo $aoc['title']; ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap-4.0.0.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/color.css"/>
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
          <h1 class="jumbotron-heading"><?php echo $aoc['title']; ?></h1>
          <p class="lead text-muted"><?php echo $aoc['adresse']; ?></p>
          <p class="lead text-muted"><?php echo $aoc['contact']; ?></p>
        </div>
      </section>

      <div class="my-5 py-1">
         <div class="container" id="document">
            <div class="row">
            <?php foreach($documents as $doc): ?>
              <?php if ($doc[0] != $actualtitle): $actualtitle = $doc[0]; ?>
                <?php if ($actualtitle): ?>
                </ul>
                </div>
                <?php endif; ?>
                <div class="col-sm-12">
                <h2 id="<?php echo str_replace(" ", "_", strtolower($actualtitle)); ?>"><?php echo $actualtitle; ?></h2>
                <ul>
              <?php endif; ?>
              <li><?php echo preg_replace('/(\d+)-(\d+)-(\d+)/', '$3/$2/$1', $doc[1]); ?> : <a href="documents/<?php echo $_GET['aoc'].'/'.$doc[3]?>"><?php echo $doc[2]; ?></a></li>
            <?php endforeach; ?>
         </div>
      </div>
      <div class="py-5 bg-light">
      </div>
    </main>
  </body>
 </html>
