@extends('app')

@section('content')

<form method="post" action="{{ url('/garanties/enregistrer') }}">
@csrf

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Ajouter garantie</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Editer garantie</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Nouvelle garantie</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input required type="text" id="nom" name="nom" class="form-control" placeholder="Nom de la garantie">
            </div>

            <div class="form-group">
                <label for="detail">Détail</label>
                <textarea required id="detail" name="detail" class="form-control" rows="4" placeholder="Détail sur la garantie"></textarea>
            </div>

            <div class="form-group">
                <label for="prime">Prime</label>
                <input required type="text" id="prime" name="prime" class="form-control" placeholder="15000">
            </div>

            <div class="form-group">
                <label for="prime_alias">Prime alias</label>
                <input required type="text" id="prime_alias" name="prime_alias" class="form-control" placeholder="15 000 FCFA/AN">
            </div>

            <div class="form-group">
                <label for="couleur">Couleur</label>
                <input required type="text" id="couleur" name="couleur" class="form-control" placeholder="#000000">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="{{url('/garanties')}}" class="btn btn-secondary">Annuler</a>
            <input type="submit" value="Enregistrer" class="btn btn-success float-right">
        </div>
    </div>
    <!-- /.card -->
</section>

</form>

@endsection