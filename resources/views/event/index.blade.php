@extends('layouts.admin')
@section('scripts')
<script>
  function EventEdit(id)
  {
    console.log(id);
    // var dataUrl=$('.barangEdit').data('id-url');
    $('.event').hide();
    $('#EventEdit').show();
    $('.editEvent').attr('hidden',false);
    $.ajax({
        url:'http://127.0.0.1:8000/api/event',
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
            $('#indexEvent').attr('hidden', false);
        }
    });
  }
</script>
<script>
  $('#TableEvent').DataTable( {
    ajax: {
        url: 'http://127.0.0.1:8000/api/event',
        dataType: "json",
        type: "GET",
        serverSide: true,
        processing: true,
    },
    columns: [
          { data: "id"},
         { data: "image",
               "render" : function ( url, type, full) {
          return '<img height="50" width="50" src="'+'http://127.0.0.1:8000/backEnd/images/barang/'+''+url+'"/>';
          }
        },
          { data: "title" },
          { data: "desc" },
          { data: "category_id" },
          { data: "harga_limit" },
          { data: "status" },
          { data: "user_id" },
          { data: "action", 
          "render" : function ( btn ) {
            return '<div class="btn-group mr-1 mb-1">'+
                   '<button type="button" class="btn btn-icon btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'+
                      '<i class="la la-navicon"></i>'+
                   '</button>'+
                   '<ul class="dropdown-menu">'+
                      '<li><a onclick="EventEdit" id="EventEdit">Detail</a>'+
                      '<li><a onclick="EventHapus" id="EventHapus">Hapus</a>'+
                   '</ul>'+
                   '</div>'
          }
        },
    ]
  });
</script>

 <!--  
 ======================== Source Code Append / Foreach -->
<script>
  $.get('http://127.0.0.1:8000/api/user', function(data) {
    $('#pilihUser').empty();
    $('#pilihUser').append(  
      '<option value="0">Pilih User</option>'
    );

  $.each(data.data, function(index, value){
      $('#pilihUser').append(
         '<option value="'+value.id+'">'+value.name+'</option>'
      );
    })
  });

   $.get('http://127.0.0.1:8000/api/category', function(data) {
    $('#pilihCategory').empty();
    $('#pilihCategory').append(
         '<option value="0">Pilih Category</option>'
    );

    $.each(data.data, function(index, value){
      $('#pilihCategory').append(
        '<option value="'+value.id+'">'+value.name+'</option>'
      );
    })
  });


  $('#createData').submit(function(e){
      var formData    = new FormData($('#createData')[0]);
      e.preventDefault();
      $.ajax({
          url:'http://127.0.0.1:8000/api/event',
          type:'POST',
          data:formData,
          cache: true,
          contentType: false,
          processData: false,
          async:true,
          dataType: 'json',
          success:function(response){
              swal("Good Job!", "Tambah Data Event!", "success");
              $('#createFormEvent').attr('hidden', true);
              $('#TableEvent').DataTable().ajax.reload();
          },
          complete: function() {
              $("#indexEvent").attr('hidden', false);
              $("#createData")[0].reset();
          }
      });
  });
</script>
<script>
  ClassicEditor
    .create( document.querySelector('#editan' ) )
    .catch( error => {
          console.error( error );
        } );
  
</script>
<script>
  $('.image').dropify();
</script>
@endsection
@section('content')
<div class="content event" id="indexEvent">
  <div class="col-md-12">
    <div class="row">
      <div class="card">
        <div class="header">
          <h4 class="title">Event
            <button class="btn btn-primary pull-right" id="changeViewEvent">
              Tambah Data
            </button>
          </h4>
        </div>
        <div class="container-fluid">
          <div class="content table-responsive table-full-width">
            <table class="table table-striped" id="TableEvent">
              <thead>
                <th>No</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Name</th>
                <th width="300">Action</th> 
              </thead>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
@include('event.create')
@endsection