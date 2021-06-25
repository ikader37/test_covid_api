<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QUITTANCE</title>
  <!-- css personnel -->
  <link rel="stylesheet" href="{{ asset('dist/css/quittance.css') }}">
</head>
<body class="layout-fixed">
<div class="wrapper">

<!-- Content Wrapper. Contains page content -->
<div style="text-align: center; border: solid 1px black; border-radius: 10px; margin-left: 6%; margin-right: 6%" class="content-wrapper">
  <div>
    <img src="{{ asset('public/img/burkina-faso.png') }}" width="100px" >
    <span style="margin-left: 6%; margin-right: 6%; text-size: 150%">Quittance de paiement</span>
    <img src="{{ asset('public/img/ministere_de_la_sante.png') }}" width="150px" >
  </div>
  <div>
    <table style="margin: auto; padding: 3%; padding-top: 10%">
      <tr>
        <td style="text-align: right; magin-right: 5%">
          Kuela Abdoul Raof <br><br>
          CMU POGBI <br><br>
          65795700 <br><br>
          50000 FCFA
        </td>
        <td width="25%"></td>
        <td style="text-align: left; magin-left: 5%">
          {!! QrCode::generate('MyNotePaper'); !!}
        </td>
      </tr>
    </table>
  </div>
<div>

</div>
<!-- ./wrapper -->

</body>
</html>