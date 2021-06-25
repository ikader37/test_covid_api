@extends('app')

@section('content')

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Détail de la souscription</h3>
        </div>
        <div class="card-body">
            <div>
                  <p class="lead">Assuré</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Garantie:</th>
                        <td>{{$garantie->nom}}</td>
                      </tr>
                      <tr>
                        <th style="width:50%">Nom & Prénom:</th>
                        <td>{{$assure->nom_prenom}}</td>
                      </tr>
                      <tr>
                        <th>Téléphone:</th>
                        <td>{{$assure->telephone}}</td>
                      </tr>
                      <tr>
                        <th>Email:</th>
                        <td>{{$assure->email}}</td>
                      </tr>
                      <tr>
                        <th>Adresse:</th>
                        <td>{{$assure->adresse}}</td>
                      </tr>
                      <tr>
                        <th>Ville:</th>
                        <td>{{$assure->ville}}</td>
                      </tr>
                      <tr>
                        <th>Profession:</th>
                        <td>{{$assure->profession}}</td>
                      </tr>
                    </table>
                  </div>
                </div>

                <div>
                  <p class="lead">Moto</p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Type:</th>
                        <td>{{$moto->moto_type}}</td>
                      </tr>
                      <tr>
                        <th>Marque:</th>
                        <td>{{$moto->moto_marque}}</td>
                      </tr>
                      <tr>
                        <th>Genre:</th>
                        <td>{{$moto->moto_genre}}</td>
                      </tr>
                      <tr>
                        <th>Valeur de la moto:</th>
                        <td>{{$moto->valeur_moto}}</td>
                      </tr>
                      <tr>
                        <th>Puissance:</th>
                        <td>{{$moto->puissance}}</td>
                      </tr>
                      <tr>
                        <th>Numéro chassis:</th>
                        <td>{{$moto->numero_chassis}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
<section>    
@endsection