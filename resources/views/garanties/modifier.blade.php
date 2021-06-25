@extends('app')

@section('content')

<form method="post" action="{{ url('/garanties/editer') }}">
@csrf

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Modifier garantie</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Modifier garantie</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Garantie</h3>
        </div>
        <div class="card-body">
            <input required type="text" hidden id="id" name="id" value="{{$garantie->id}}">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input required type="text" id="nom" name="nom" class="form-control" value="{{$garantie->nom}}">
            </div>

            <div class="form-group">
                <label for="detail">Détail</label>
                <textarea required id="detail" name="detail" class="form-control" rows="4">{{$garantie->detail}}</textarea>
            </div>

            <div class="form-group">
                <label for="prime">Prime</label>
                <input required type="text" id="prime" name="prime" class="form-control" value="{{$garantie->prime}}">
            </div>

            <div class="form-group">
                <label for="prime_alias">Prime alias</label>
                <input required type="text" id="prime_alias" name="prime_alias" class="form-control" value="{{$garantie->prime_alias}}">
            </div>

            <div class="form-group">
                <label for="couleur">Couleur</label>
                <input required type="text" id="couleur" name="couleur" class="form-control" value="{{$garantie->couleur}}">
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