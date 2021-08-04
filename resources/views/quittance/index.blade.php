<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QUITTANCE</title>
  <!-- css personnel -->
  <link rel="stylesheet" href="{{ asset('dist/css/quittance.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="layout-fixed">
<div class="wrapper">

<div style="text-align: center; border: solid 1px black; border-radius: 10px; margin-left: 6%; margin-right: 6%" class="content-wrapper">
 <div>
   <!--  <img src="{{ asset('public/img/burkina-faso.png') }}" width="100px" >
    <span style="margin-left: 6%; margin-right: 6%; text-size: 150%">Quittance de paiement</span>
    <img src="{{ asset('public/img/ministere_de_la_sante.png') }}" width="150px" >
    
  -->
  <center><h3>RECU DE PAIEMENT COVID-19</h3></center>
  </div>
  
  <div>
  <div class="row">
    <div class="col-lg-8" style="text-align:left;">
    Nom et prénom(s):
    </div>
    <div  class=col-lg-4" style="text-align:right;">
    {!!$personne->nom_prenom;!!}
    </div>
    <div class="row">
    <div class="col-lg-8" style="text-align:left;">
    Numéro de téléphone:
    </div>
    <div  class="col-lg-4" style="text-align:right;">
    {!!$personne->telephone;!!}
    </div>

   
    <div class="row">
    <div class="col-lg-8" style="text-align:left;">
    Montant TTC:
    </div>
    <div  class="col-lg-4" style="text-align:right;">
    {!!$personne->nom_prenom;!!}
    </div>
    <div class="row">
    <div class="col-lg-8" style="text-align:left;">
    Date de naissance:
    </div>
    <div  class="col-lg-4" style="text-align:right;">
    {!!$personne->naissance;!!}
    </div>

    <div class="row">
    <div class="col-lg-8" style="text-align:left;">
    Date de prélèvement:
    </div>
    <div  class="col-lg-4" style="text-align:right;">
    04\09\1999
    </div>
    <div class="row">
    <div class="col-lg-8" style="text-align:left;">
    Date:
    </div>
    <div  class="col-lg-4" style="text-align:right;">
    04\09\1999
    </div>
    <div class="row">
    <div class="col-lg-8" style="text-align:left;">
    Passport/CNIB:
    </div>
    <div  class="col-lg-4" style="text-align:right;">
    010999
    </div>
  </div>
  <hr/>
  <div>
  <div class="row">
  <div class="col-lg-8" style="text-align:left;">
<span>Scannez le QRcode pour vérifier l'authencité du récu</span>
  </div>
  <div class="col-lg-4">
{!! QrCode::generate(serialize($personne)); !!}
  </div>
  <div class="col-lg-4" style="text-align:right;">
  </div>
  </div>
  </div>
   
  </div>
<div>

</div>
<!-- ./wrapper -->

</body>
</html>