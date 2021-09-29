@extends('layouts.app')
@section('body')
       <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Defect</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Detail Defect</li>
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
                src="http://10.1.1.88:3000/public/question/fd4a95f9-3a18-4f8d-bb5a-a739573ca93e"
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
                src="http://10.1.1.88:3000/public/question/f1501348-58ee-4120-94e6-a20d63d34bd5"
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
                src="http://10.1.1.88:3000/public/question/cb3fe6eb-49ff-4c23-9961-462416c62360"
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
                src="http://10.1.1.88:3000/public/question/e5666a01-73a4-4bd3-8a68-e93cee7701b5"
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