<div class="content CategoryEdit" id="CategoryEdit">
  <div class="col-md-12">
    <div class="row">
      <div class="card">
        <div class="header">
          <h4 class="title">Category
            <button class="btn btn-primary pull-right" id="backViewCategory">
              Kembali
            </button>
          </h4>
        </div>
          <div class="container-fluid">
            <form enctype="multipart/form-data" id="myFormEdit">
            <input type="hidden" name="_method" value="PATCH">
            @csrf

            <br>
            <div class="col-md-6">
              <div class="form-group">
                  <label class="control-label">Image</label>
                  <input type="file" name="image" id="image" class="image" data-height="300" />
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label class="control-label">Nama Kategori</label>
                <input type="text" class="form-control border-input" placeholder="Nama Kategori" name="name" id="name" required>
              </div>

              <div class="form-group">
                <button class="btn btn-success" type="submit">Save</button>
              </div>
            </div>  

          </form>
          </div>
      </div>
    </div>
  </div>
</div>