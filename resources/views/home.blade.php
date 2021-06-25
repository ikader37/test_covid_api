@extends('app')

@section('content')
<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Souscription</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">820</span>
                    <span>Nombre total de souscriptions</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="souscription-chart" height="50px"></canvas>
                </div>
              </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('myscript')
<script src="{{ asset('dist/chart/Chart.js') }}"></script>
<script>
    var ctx = document.getElementById('souscription-chart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!!json_encode($labelGarantie)!!},
            datasets: [{
                label: '# Garantie',
                data: {!!json_encode($garantieData)!!},
                backgroundColor: [
                  '#614E1A',
                  '#A9A9A9',
                  '#D4AF37'
            ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
@endsection