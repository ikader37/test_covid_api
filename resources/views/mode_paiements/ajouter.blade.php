@extends('app')

@section('content')

<form method="post" action="{{ url('/mode-paiements/enregistrer') }}">
@csrf

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Ajouter Mode de Paiement</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
            <li class="breadcrumb-item active">Ajouter Mode de Paiement</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Nouveau Mode de Paiement</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input required type="text" id="nom" name="nom" class="form-control" placeholder="Nom">
            </div>

            <div class="form-group">
                <label for="detail">Opérateur</label>
                <input required id="operateur" name="operateur" class="form-control" rows="4" placeholder="Opérateur">
            </div>

            <div class="form-group">
                <label for="prime">Code</label>
                <input required type="text" id="code" name="code" class="form-control" placeholder="*144*2*1*00000000*montant#">
            </div>

            <div class="form-group">
                <label for="prime_alias">Logo</label>
                <input required type="text" id="logo" name="logo" class="form-control" placeholder="Logo">
            </div>

            <div class="form-group">
                <label for="couleur">Couleur</label>
                <input required type="text" id="couleur" name="couleur" class="form-control" placeholder="#000000">
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