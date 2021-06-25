@extends('app')

@section('content')

<form method="post" action="{{ url('/types/editer') }}">
@csrf

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Modifier type de moto</h1>
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
            <h3 class="card-title">Type de moto</h3>
        </div>
        <div class="card-body">
            <input required hidden type="text" id="id" name="id" value="{{$type->id}}">

            <div class="form-group">
                <label for="nom">Nom</label>
                <input required type="text" id="nom" name="nom" class="form-control" value="{{$type->nom}}">
            </div>

            <div class="form-group">
                <label for="detail">Marque</label>
                <input required id="marque" name="marque" class="form-control" rows="4" value="{{$type->marque}}">
            </div>

            <div class="form-group">
                <label for="prime">Genre</label>
                <input required type="text" id="genre" name="genre" class="form-control" value="{{$type->genre}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="{{url('/types')}}" class="btn btn-secondary">Annuler</a>
            <input type="submit" value="Enregistrer" class="btn btn-success float-right">
        </div>
    </div>
    <!-- /.card -->
</section>

</form>

@endsection