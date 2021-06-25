@extends('app')

@section('mycss')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

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
    <h3 class="card-title">Assurés</h3>
  </div>
  <div class="card-body p-0">
    <table id="table" class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 20%">
                    Nom & Prénom
                </th>
                <th style="width: 19%">
                    Téléphone
                </th>
                <th style="width: 20%">
                    Email
                </th>
                <th style="width: 20%">
                    Adresse
                </th>
                <th style="width: 20%">
                    Profession
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($assures as $assure)
            <tr>
                <td>
                    #
                </td>
                <td>
                    {{$assure->nom_prenom}}
                </td>
                <td>
                    {{$assure->telephone}}
                </td>
                <td>
                    {{$assure->email}}
                </td>
                <td>
                    {{$assure->adresse}}
                </td>
                <td>
                    {{$assure->profession}}
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

@section('myscript')

<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script language="javascript">
    $(() => {
        $('#table').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
    })
    
</script>
@endsection