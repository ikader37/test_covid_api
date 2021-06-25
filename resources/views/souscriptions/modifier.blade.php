@extends('app')

@section('content')

<form method="post" action="{{ url('/souscriptions/editer') }}">
@csrf

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Modifier souscription</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Editer souscription</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Assuré</h3>
        </div>
        <div class="card-body">
            <input required type="text" hidden id="id" name="id" value="{{$souscription->id}}">

            <input required type="text" hidden id="assure_id" name="assure_id" value="{{$souscription->assure_id}}">

            <div class="form-group">
                <label for="nom">Police</label>
                <input type="text" id="police" name="police" class="form-control" value="{{$souscription->police}}">
            </div>

            <div class="form-group">
                <label for="detail">Nom & Prénom</label>
                <input required id="nom_prenom" name="nom_prenom" class="form-control" rows="4" value="{{$assure->nom_prenom}}">
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input required type="text" id="telephone" name="telephone" class="form-control" value="{{$assure->telephone}}">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="{{$assure->email}}">
            </div>

            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse" class="form-control" value="{{$assure->adresse}}">
            </div>

            <div class="form-group">
                <label for="profession">Profession</label>
                <input required type="text" id="profession" name="profession" class="form-control" value="{{$assure->profession}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-header">
            <h3 class="card-title">Moto</h3>
        </div>

        <div class="card-body">
            <input required type="text" hidden id="moto_id" name="moto_id" value="{{$souscription->moto_id}}">

            <div class="form-group">
                <label for="moto_type">Type</label>
                <input required type="text" id="moto_type" name="moto_type" class="form-control" value="{{$moto->moto_type}}">
            </div>

            <div class="form-group">
                <label for="moto_genre">Genre</label>
                <input required id="moto_genre" name="moto_genre" class="form-control" rows="4" value="{{$moto->moto_genre}}">
            </div>

            <div class="form-group">
                <label for="moto_marque">Marque</label>
                <input required type="text" id="moto_marque" name="moto_marque" class="form-control" value="{{$moto->moto_marque}}">
            </div>
            
            <div class="form-group">
                <label for="valeur_moto">Valeur de la moto</label>
                <input type="text" id="valeur_moto" name="valeur_moto" class="form-control" value="{{$moto->valeur_moto}}">
            </div>

            <div class="form-group">
                <label for="puissance">Puissance</label>
                <input type="text" id="puissance" name="puissance" class="form-control" value="{{$moto->puissance}}">
            </div>

            <div class="form-group">
                <label for="adresse">Date de prémière mise en circulation</label>
                <input type="text" id="premiere_mise_circulation" name="premiere_mise_circulation" class="form-control" value="{{$moto->premiere_mise_circulation}}">
            </div>

            <div class="form-group">
                <label for="numero_chassis">Numéro chassis</label>
                <input required type="text" id="numero_chassis" name="numero_chassis" class="form-control" value="{{$moto->numero_chassis}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="{{url('/souscriptions')}}" class="btn btn-secondary">Annuler</a>
            <input type="submit" value="Enregistrer" class="btn btn-success float-right">
        </div>
    </div>
    <!-- /.card -->
</section>

</form>

@endsection