@extends('layouts.app')
@section('body')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Inspection</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Detail Inspection</li>
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
          <h3 class="card-title">Today</h3>

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
            <iframe
                src="http://10.1.1.88:3000/public/question/e2a1dc8e-15f3-43b4-b88e-1ff68b6f2f40"
                frameborder="0"
                width="100%"
                height="600"
                allowtransparency
            ></iframe>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Weekly</h3>

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
            <iframe
                src="http://10.1.1.88:3000/public/question/1fb5a7ee-2c97-4b94-a343-cb8c15aef775"
                frameborder="0"
                width="100%"
                height="600"
                allowtransparency
            ></iframe>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Monthly</h3>

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
            <iframe
                src="http://10.1.1.88:3000/public/question/cdc466f8-9767-4add-bfa2-3e302f1822aa"
                frameborder="0"
                width="100%"
                height="600"
                allowtransparency
            ></iframe>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Yearly</h3>

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
            <iframe
                src="http://10.1.1.88:3000/public/question/7ccab83b-747a-43b5-8bd4-35a49b723124"
                frameborder="0"
                width="100%"
                height="600"
                allowtransparency
            ></iframe>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection