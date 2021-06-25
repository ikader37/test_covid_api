@extends('app')

@section('content')

<form method="post" action="{{ url('/mode-paiements/editer') }}">
@csrf

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Modifier Mode de Paiement</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Modifier Mode de Paiement</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Mode de Paiement</h3>
        </div>
        <div class="card-body">
            <input required hidden type="text" id="id" name="id" class="form-control" value="{{$modePaiement->id}}">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input required type="text" id="nom" name="nom" class="form-control" value="{{$modePaiement->nom}}">
            </div>

            <div class="form-group">
                <label for="detail">Opérateur</label>
                <input required id="operateur" name="operateur" class="form-control" rows="4" value="{{$modePaiement->operateur}}">
            </div>

            <div class="form-group">
                <label for="prime">Code</label>
                <input required type="text" id="code" name="code" class="form-control" value="{{$modePaiement->code}}">
            </div>

            <div class="form-group">
                <label for="prime_alias">Logo</label>
                <input required type="text" id="logo" name="logo" class="form-control" value="{{$modePaiement->logo}}">
            </div>

            <div class="form-group">
                <label for="couleur">Couleur</label>
                <input required type="text" id="couleur" name="couleur" class="form-control" value="{{$modePaiement->couleur}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="{{url('/mode-paiements')}}" class="btn btn-secondary">Annuler</a>
            <input type="submit" value="Enregistrer" class="btn btn-success float-right">
        </div>
    </div>
    <!-- /.card -->
</section>

</form>

@endsection