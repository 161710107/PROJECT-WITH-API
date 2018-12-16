@extends('layouts.admin')
@section('scripts')
<script>
  $('#TableUser').DataTable( {
    ajax: {
        url: 'http://127.0.0.1:8000/api/user',
        dataType: "json",
        type: "GET",
    },
    columns: [
        { data: "id" },
        { data: "name" },
        { data: "email" },
    { data: "action", 
          "render" : function ( btn ) {
            return '<div class="btn-group mr-1 mb-1">'+
                   '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                      '<i class="la la-navicon"></i>'+
                   '</button>'+
                   '<ul class="dropdown-menu">'+
                      '<li><a onclick="User" id="User">Detail</a>'+
                      '<li><a onclick="User" id="HapusUser">Hapus</a>'+
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
          url:'http://127.0.0.1:8000/api/user',
          type:'POST',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:false,
          dataType: 'json',
          success:function(formData){
              swal("Good Job!", "Tambah Data User!", "success");
              $('#createFormUser').attr('hidden', true);
              $('#TableUser').DataTable().ajax.reload();
          },
          complete: function() {
              $("#indexUser").attr('hidden', false);
              $("#createData")[0].reset();
          }
      });
  });
</script>
@endsection
@section('content')
<div class="content user" id="indexUser">
  <div class="col-md-12">
    <div class="row">
      <div class="card">
        <div class="header">
          <h4 class="title">User
            <button class="btn btn-primary pull-right" id="changeViewUser">
              Tambah Data
            </button>
          </h4>
        </div>
        <div class="container-fluid">
          <div class="content table-responsive table-full-width">
            <table class="table table-striped" id="TableUser">
              <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th width="300">Action</th>
              </thead>
            </table>
        
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@include('user.create')
@endsection