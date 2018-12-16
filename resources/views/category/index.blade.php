@extends('layouts.admin')
@section('scripts')
<script>
  function CategoryEdit(id)
  {
    console.log(id);
    // var dataUrl=$('.barangEdit').data('id-url');
    $('.categories').hide();
    $('#CategoryEdit').show();
    $('.editCategory').attr('hidden',false);
    $.ajax({
        url:'http://127.0.0.1:8000/api/category',
        type:'get',
        cache: true,
        contentType: false,
        processData: false,
        async:false,
        dataType: 'json',
        success:function(data){
          console.log(data);
          $("input#id").val(data.data.id);
          $("input#image").val(data.data.image);
          $("input#name").val(data.data.name);
        },
        complete: function() {
            $('#indexCategory').attr('hidden', false);
        }
    });
  }
</script>
<script>
  $('#TableCategory').DataTable( {
    ajax: {
        url: 'http://127.0.0.1:8000/api/category',
        dataType: "json",
        type: "GET",
        serverSide: true,
        processing: true,
    },
    columns: [
        { data: "id" },
        { data: "image",
               "render" : function (image) {
          return '<img height="50" width="50" src="'+'http://127.0.0.1:8000/backEnd/images/barang/'+''+image+'"/>';
          }
        },
        { data: "name" },
        { data: "action", 
          "render" : function ( id ) {
            return '<div class="btn-group mr-1 mb-1">'+
                   '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                      '<i class="la la-navicon"></i>'+
                   '</button>'+
                   '<ul class="dropdown-menu">'+
                      '<li><a onclick="CategoryEdit('+id+')" id="CategoryEdit">Edit</a>'+
                      '<li><a onclick="CategoryHapus" id="CategoryHapus">Hapus</a>'+
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
          url:'http://127.0.0.1:8000/api/category',
          type:'POST',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:false,
          dataType: 'json',
          success:function(formData){
              swal("Berhasil!", "Tambah Data Kategori!", "success");
              $('#createFormCategory').attr('hidden', true);
              $('#TableCategory').DataTable().ajax.reload();
          },
          complete: function() {
              $("#indexCategory").attr('hidden', false);
              $("#createData")[0].reset();
          }
      });
  });
  $('#myFormEdit').submit(function(e){
        var formData    = new FormData($('#myFormEdit')[0]);
        e.preventDefault();
        $.ajax({
            url:'http://127.0.0.1:8000/api/category/{id}',
            type:'put',
            data:formData,
            cache: true,
            contentType: false,
            processData: false,
            async:false,
            dataType: 'json',
            success:function(respone){
                if (respone.status == 'success') {
                    swal("Berhasil!", "Edit Data Barang!", "success");
                    dataTableBarang.ajax.reload( null, false );
                    $('#createFormBarang').attr('hidden',true);
                } else {
                    
                }
            },
            complete: function() {
                $('#indexTableBarang').attr('hidden', false);
            }
        });
    });
</script>
<script>
  $('.image').dropify();
</script>
@endsection
@section('content')
<div class="content categories" id="indexCategory">
  <div class="col-md-12">
    <div class="row">
      <div class="card">
        <div class="header">
          <h4 class="title">Category
            <button class="btn btn-primary pull-right" id="changeViewCategory">
              Tambah Data
            </button>
          </h4>
        </div>
        <div class="container-fluid">
          <div class="content table-responsive table-full-width">
            <table class="table table-striped" id="TableCategory">
              <thead>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Action</th>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('category.create')
@include('category.edit')
@endsection