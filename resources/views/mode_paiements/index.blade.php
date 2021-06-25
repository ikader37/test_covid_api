@extends('app')

@section('content')
<!-- Main content -->
<section class="content">

@if($supprimer != null && $supprimer == 0)
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
    Echec de la suppression
</div>
@endif

@if($supprimer != null && $supprimer == 1)
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Alert!</h5>
    Suppression effectuée avec succès
</div>
@endif

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Mode de Paiements</h3>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 17%">
                    Nom
                </th>
                <th style="width: 17%">
                    Opérateur
                </th>
                <th style="width: 17%">
                    Code
                </th>
                <th style="width: 16%">
                    Logo
                </th>
                <th style="width: 16%">
                    Couleur
                </th>
                <th style="width: 16%">
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($modePaiements as $modePaiement)
            <tr>
                <td>
                    #
                </td>
                <td>
                    {{$modePaiement->nom}}
                </td>
                <td>
                    {{$modePaiement->operateur}}
                </td>
                <td>
                    {{$modePaiement->code}}
                </td>
                <td>
                    {{$modePaiement->logo}}
                </td>
                <td>
                    <span style="background: {{$modePaiement->couleur}}; color: white" class="badge">{{$modePaiement->couleur}}</span>
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ url('/mode-paiements/modifier/'.$modePaiement->id) }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editer
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modal-default-{{$modePaiement->id}}">
                        <i class="fas fa-trash">
                        </i>
                        Supprimer
                    </a>

                    <div class="modal fade" id="modal-default-{{$modePaiement->id}}">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h4 class="modal-title">Supprimer</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <p style="text-align:center">Êtes-vous sûr de vouloir supprimer?</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <form method="post" action="{{ url('/mode-paiements/supprimer') }}">
                                @csrf
                                <input hidden name="id" value="{{$modePaiement->id}}">
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->

<a href="{{ url('/mode-paiements/ajouter') }}" class="btn-ajouter">
    <i class="fas fa-plus"></i>
</a>

@endsection