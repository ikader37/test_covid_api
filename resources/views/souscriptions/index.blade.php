@extends('app')

@section('mycss')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Garanties</h3>
  </div>
  <div class="card-body p-0">
    <table id="table" class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 14%">
                    Garantie
                </th>
                <th style="width: 14%">
                    Nom
                </th>
                <th style="width: 14%">
                    Téléphone
                </th>
                <th style="width: 14%">
                    Type de moto
                </th>
                <th style="width: 14%">
                    Date
                </th>
                <th style="width: 14%">
                    Traité
                </th>
                <th style="width: 16%">
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($souscriptions as $souscription)
            <tr @if($souscription->traite != 1) class="non-trait" @endif>
                <td>
                </td>
                <td>
                    {{$souscription->nom}}
                </td>
                <td>
                    {{$souscription->nom_prenom}}
                </td>
                <td>
                    {{$souscription->telephone}}
                </td>
                <td>
                    {{$souscription->moto_type}}
                </td>
                <td>
                    {{$souscription->created_at}}
                </td>
                <td id="traite-{{$souscription->id}}">
                    @if($souscription->traite == 1)
                    <a class="btn btn-success btn-sm" href="#">
                        Traité
                        <i class="fas fa-check-circle">
                        </i>
                    </a>
                    @else
                    <button class="btn btn-primary btn-sm traite" value="{{$souscription->id}}">
                        Traité
                    </button>
                    @endif
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="{{url('/souscriptions/detail/'.$souscription->id)}}">
                        <i class="fas fa-folder">
                        </i>
                        Voir
                    </a>
                    <a class="btn btn-info btn-sm" href="{{url('/souscriptions/modifier/'.$souscription->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editer
                    </a>
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

        $('.traite').click((event) => {
            var id = event.target.value;
            $.post("{{url('/api/souscriptions/traite')}}", {id:event.target.value})
                .done(res => {
                    if(res.resultat == 1) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Souscription marquée comme traitée.'
                        });

                        $('#traite-'+id).html(`
                            <a class="btn btn-success btn-sm" href="#">
                                Traité
                                <i class="fas fa-check-circle">
                                </i>
                            </a>
                        `);
                    } 
                    else Toast.fire({
                        icon: 'danger',
                        title: 'Echec de l\'opération!'
                    })
                }).fail(err => {
                    Toast.fire({
                        icon: 'danger',
                        title: 'Echec de l\'opération!'
                    })
                });
        });
    })
    
</script>
@endsection