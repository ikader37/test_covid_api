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
    <h3 class="card-title">Motos</h3>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 17%">
                    Type
                </th>
                <th style="width: 17%">
                    Marque
                </th>
                <th style="width: 17%">
                    Genre
                </th>
                <th style="width: 16%">
                    Puissance
                </th>
                <th style="width: 16%">
                    Numéro chassis
                </th>
                <th style="width: 16%">
                    Première mise en circulation
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($motos as $moto)
            <tr>
                <td>
                    #
                </td>
                <td>
                    {{$moto->moto_type}}
                </td>
                <td>
                    {{$moto->moto_marque}}
                </td>
                <td>
                    {{$moto->moto_genre}}
                </td>
                <td>
                    {{$moto->puissance}}
                </td>
                <td>
                    {{$moto->numero_chassis}}
                </td>
                <td>
                    {{$moto->premiere_mise_circulation}}
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

@endsection