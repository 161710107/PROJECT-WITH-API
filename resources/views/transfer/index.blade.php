@extends('layouts.front')
@section('scripts')
<script>
  $('#TableTransfer').DataTable( {
    ajax: {
        url: 'http://127.0.0.1:8000/api/transfer',
        dataType: "json",
        type: "GET",
    },
    columns: [
      { data: "id" },
      { data: "nominal" },
      { data: "desc" },
      { data: "status" },
      { data: "user_id" },
      { data: "bank_id" },
      { data: "event_id" },
        { data: "action", 
          "render" : function ( btn ) {
            return '<div class="btn-group mr-1 mb-1">'+
                   '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                      '<i class="la la-navicon"></i>'+
                   '</button>'+
                   '<ul class="dropdown-menu">'+
                      '<li><a onclick="Transfer" id="Transfer">Detail</a>'+
                      '<li><a onclick="Transfer" id="HapusTransfer">Hapus</a>'+
                   '</ul>'+
                   '</div>'
          }
        },
    ]
  });
  
</script>
<script>
  $.get('http://127.0.0.1:8000/api/user', function(data){
    $('#pilihUser').empty();
    $('#pilihUser').append(
      '<option value="0">Pilih User</option>'

      );
    $.each(data.data, function(index, value){
      $('#piihUser').append(
          '<option value="'+value.id+'">'+value.name+'</option>'
       );
    })
  });
    
    $.get('http://127.0.0.1:8000/api/masterbank', function(data) {
      $('#pilihBank').empty();
      $('#pilihBank').append(
        '<option value="0">Pilih Bank</option>'
    );

    $.each(data.data, function(index, value) {
      $('#pilihBank').append(
        '<option value="'+value.id+'">'+value.name+'</option>'
      );
    })
  });

     $.get('http://127.0.0.1:8000/api/event', function(data) {
    $('#pilihEvent').empty();
    $('#pilihEvent').append(  
      '<option value="0">Pilih Judul Event</option>'
    );

      // console.log(); 
    $.each(data.data, function(index, value) {
      $('#pilihEvent').append(
        '<option value="'+value.id+'">'+value.title+'</option>'
      );
    })
  });

     $('#createData').submit(function(e){
      var formData    = new FormData($('#createData')[0]);
      e.preventDefault();
      $.ajax({
          url:'http://127.0.0.1:8000/api/transfer',
          type:'POST',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:true,
          dataType: 'json',
          success:function(response){
              swal("Berhasil!", "Tambah Data Transfer!", "success");
              $('#createFormTransfer').attr('hidden', true);
              $('#TableTransfer').DataTable().ajax.reload();
          },
          complete: function() {
              $("#indexTransfer").attr('hidden', false);
              $("#createData")[0].reset();
          }
      });
  });
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editan' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
@section('content')
<div class="section" id="createFormTransfer">
  <div class="container">
      <div class="card">
        <div class="header">
        </div>
          <div class="container-fluid">
            <form enctype="multipart/form-data" id="createData">
            @csrf

            <br>
            <div class="form-group">
              <label class="control-label">Nominal</label>
              <input type="number" class="form-control border-input" placeholder="Rp. " name="nominal" id="nominal" required>
            </div>

            <div class="form-group">
              <label class="control-label">Description</label>
              <textarea name="desc" class="form-control border-input"></textarea>
            </div>

            <div class="form-group">
              <label class="control-label">Bank</label>
              <select class="form-control border-input" name="bank_id" id="selectBank" required>
                
              </select>
            </div>

            <div class="form-group">
              <button class="btn btn-success" type="submit">Save</button>
            </div>

          </form>
          </div>
      </div>
    </div>
  </div>
@endsection