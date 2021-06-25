@extends('app')

@section('content')

<form method="post" action="{{ url('/updates/editer') }}">
@csrf

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Modifier mise à jour</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Editer mise à jour</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Mise à jour</h3>
        </div>
        <div class="card-body">
            <input required hidden type="text" id="id" name="id" value="{{$update²->id}}">

            <div class="form-group">
                <label for="package">Package</label>
                <input required type="text" id="package" name="package" class="form-control" value="{{$update->package}}">
            </div>

            <div class="form-group">
                <label for="version">Version</label>
                <input required id="version" name="version" class="form-control" rows="4" value="{{$update->version}}">
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <input required type="text" id="message" name="message" class="form-control" value="{{$update->message}}">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="{{url('/updates')}}" class="btn btn-secondary">Annuler</a>
            <input type="submit" value="Enregistrer" class="btn btn-success float-right">
        </div>
    </div>
    <!-- /.card -->
</section>

</form>

@endsection