@extends('layouts.admin')
@section('scripts')
<script>
  $('#TableMasterBank').DataTable( {
    ajax: {
        url: 'http://127.0.0.1:8000/api/masterbank',
        dataType: "json",
        type: "GET",
    },
    columns: [
        { data: "id" },
        { data: "name" },
           { data: "action", 
          "render" : function ( btn ) {
            return '<div class="btn-group mr-1 mb-1">'+
                   '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                      '<i class="la la-navicon"></i>'+
                   '</button>'+
                   '<ul class="dropdown-menu">'+
                      '<li><a onclick="MasterBank" id="MasterBank">Detail</a>'+
                      '<li><a onclick="MasterBank" id="HapusMasterBank">Hapus</a>'+
                   '</ul>'+
                   '</div>'
          }
        },
    ]
  });
</script>
<script>
  $('#createData').submit(function(e){
      var formData    = new FormData($('#createData')[0]);
      e.preventDefault();
      $.ajax({
          url:'http://127.0.0.1:8000/api/masterbank',
          type:'POST',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:false,
          dataType: 'json',
          success:function(formData){
              swal("Good Job!", "Tambah Data Master Bank!", "success");
              $('#createFormMasterBank').attr('hidden', true);
              $('#TableMasterBank').DataTable().ajax.reload();
          },
          complete: function() {
              $("#indexMasterBank").attr('hidden', false);
              $("#createData")[0].reset();
          }
      });
  });
</script>
@endsection
@section('content')
<div class="content masterbank" id="indexMasterBank">
  <div class="col-md-12">
    <div class="row">
      <div class="card">
        <div class="header">
          <h4 class="title">Master Bank
            <button class="btn btn-primary pull-right" id="changeViewMasterBank">
              Tambah Data
            </button>
          </h4>
        </div>
        <div class="container-fluid">
          <div class="content table-responsive table-full-width">
            <table class="table table-striped" id="TableMasterBank">
              <thead>
                <th>No</th>
                <th>Nama Bank</th>
                <th width="300">Action</th>
              </thead>
            </table>
        
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@include('masterbank.create')
@endsection