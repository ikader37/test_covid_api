@extends('app')

@section('content')
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Mise à jour</h3>
  </div>
  <div class="card-body p-0">
    <table id="table" class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #
                </th>
                <th style="width: 25%">
                    Package
                </th>
                <th style="width: 25%">
                    Version
                </th>
                <th style="width: 25%">
                    Message
                </th>
                <th style="width: 24%">
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                </td>
                <td>
                    {{$update->package}}
                </td>
                <td>
                    {{$update->version}}
                </td>
                <td>
                    {{$update->message}}
                </td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{url('/updates/modifier/'.$update->id)}}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Editer
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>

@endsection