<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Villiers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 4px}

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #	#DCDCDC;
      height: 10%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color:#F2F2F2;
      color: black;
      padding: 5px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>

<body>
<header>
<nav class="navbar navbar-default">

  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li><a href="../index.php"><img src="../villiers-sur-marne-94.png" alt="logo/home" style="width:37px;height:37px;">
</a></li>

        <li><a href="presentation.html">Présentation</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Prestations<span class="caret"></span> </a>
        <ul class="dropdown-menu">
          <li><a href="../prestations.html">Activités</a></li>
          <li><a href="../prestations.html">Horaires</a></li>
          <li><a href="../prestations.html">Tarifs</a></li>

        </ul>
      </li>

        <li><a href="../inscription.html">Espace famille</a></li>
        <li><a href="../contact.html">Contact</a></li>
      </ul>
      <img src="../villiers_logo.png" class="img-thumbnail" alt="e" width="304" height="136">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../Controleur/c_connexion.php">Connexion<span class="glyphicon glyphicon-log-in"></span></a>
            </li>  </ul>
    </div>
  </div>
</nav>
</header>