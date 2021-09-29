@extends('layouts.app')
@section('body')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Data Produksi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Master Data Produksi</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          {{-- <h3 class="card-title">Master Data Produksi</h3> --}}

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <table id="table_produksi" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        {{-- <th>No</th> --}}
                        <th>Create By</th>
                        <th>Created Date</th>
                        <th>Gac Date</th>
                        <th>Igac Date</th>
                        <th>Ogac Date</th>
                        <th>Rgac Date</th>
                        <th>City</th>
                        <th>Product Desc</th>
                        <th>JO PPIC</th>
                        <th>Line Code</th>
                        <th>Po Item</th>
                        <th>Po No</th>
                        <th>Demand Class</th>
                        <th>Org Id</th>
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @push('scripts')
    <script type="text/javascript">
      
      $(function () {
          var table_masterproduksi = $('#table_produksi').DataTable({
              "scrollY": 200,
              "scrollX": true,
              paging: true,
              processing: true,
              serverSide: true,
              ajax: '{{route('json_masterproduksi')}}',
              "columns": [
                    { data: 'created_by', name: 'created_by' },
                    { data: 'created_date', name: 'created_date' },
                    { data: 'gac_date', name: 'gac_date' },
                    { data: 'igac_date', name: 'igac_date' },
                    { data: 'ogac_date', name: 'ogac_date' },
                    { data: 'rgac_date', name: 'rgac_date' },
                    { data: 'product_desc', name: 'product_desc' },
                    { data: 'jo_ppic', name: 'jo_ppic' },
                    { data: 'line_code', name: 'line_code' },
                    { data: 'po_item', name: 'po_item' },
                    { data: 'po_no', name: 'po_no' },
                    { data: 'demand_class', name: 'demand_class' },
                    { data: 'org_id', name: 'org_id' },
                ],
                "columnDefs": [
                    {"className": "dt-center", "targets": "_all"}
                ]
            });
        } );
    </script>
  @endpush
@endsection