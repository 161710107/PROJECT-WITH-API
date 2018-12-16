@extends('layouts.admin')
@section('scripts')



<script>
  function BankEdit(id)
  {
    console.log(id);
    // var dataUrl=$('.barangEdit').data('id-url');
    $('.bank').hide();
    $('#BankEdit').show();
    $('.editBank').attr('hidden',false);
    $.ajax({
        url:'http://127.0.0.1:8000/api/bank',
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
            $('#indexBank').attr('hidden', false);
        }
    });
  }
</script>

<script>
  $('#TableBank').DataTable( {
    ajax: {
        url: 'http://127.0.0.1:8000/api/bank',
        dataType: "json",
        type: "GET",
        serverSide: true,
        processing: true,
    },
    columns: [
        { data: "id" },
        { data: "image",
          "render" : function ( url, type, full) {
          return '<img height="50" width="50" src="'+'http://127.0.0.1:8000/backEnd/images/barang/'+''+url+'"/>';
          }
        },
        { data: "number" },
        { data: "user_id" },
        { data: "master_bank_id" },
         { data: "action", 
          "render" : function ( btn ) {
            return '<div class="btn-group mr-1 mb-1">'+
                   '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                      '<i class="la la-navicon"></i>'+
                   '</button>'+
                   '<ul class="dropdown-menu">'+
                     '<li><a onclick="BankEdit('+id+')" id="BankEdit">Edit</a>'+
                      '<li><a onclick="BankHapus" id="BankHapus">Hapus</a>'+
                   '</ul>'+
                   '</div>'
          }
        },
    ]
  });


 
</script>
<script>
  $.get('http://127.0.0.1:8000/api/masterbank', function(data) {
    $('#pilihbank').empty();
    $('#pilihbank').append(  
      '<option value="0">Pilih Bank</option>'
    );

      
    $.each(data.data, function(index, value) {
      $('#pilihbank').append(
        '<option value="'+value.id+'">'+value.name+'</option>'
      );
    })
  });

  $('#createData').submit(function(e){
      var formData    = new FormData($('#createData')[0]);
      e.preventDefault();
      $.ajax({
          url:'http://127.0.0.1:8000/api/bank',
          type:'POST',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:true,
          dataType: 'json',
          success:function(response){
              swal("Berhasil!", "Tambah Data Bank!", "success");
              $('#createFormBank').attr('hidden', true);
              $('#TableBank').DataTable().ajax.reload();
          },
          complete: function() {
              $("#indexBank").attr('hidden', false);
              $("#createData")[0].reset();
          }
      });
  });
</script>
<script>
  $('.image').dropify();
</script>
@endsection
@section('content')
<div class="content bank" id="indexBank">
  <div class="col-md-12">
    <div class="row">
      <div class="card">
        <div class="header">
          <h4 class="title">Bank
            <button class="btn btn-primary pull-right" id="changeViewBank">
              Tambah Data
            </button>
          </h4>
        </div>
        <div class="container-fluid">
          <div class="content table-responsive table-full-width">
            <table class="table table-striped" id="TableBank">
              <thead>
                <th>#</th>
                <th>Image</th>
                <th>Number</th>
                <th>Owner</th>
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
@include('bank.create')
@endsection