<div class="content" id="createFormBank">
  <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Bank
            <button class="btn btn-primary pull-right" id="backViewBank">
              Kembali
            </button>
          </h4>
        </div>
          <div class="container-fluid">
            <form enctype="multipart/form-data" id="createData">
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
                <label class="control-label">Nomor Rekening</label>
                <input type="text" class="form-control border-input" placeholder="Nomor Rekening" name="number" id="number" required>
              </div>

               <div class="form-group">
                <label class="control-label">Pemilik</label>
                <input type="text" class="form-control border-input" placeholder="Nama Pemilik" name="owner" id="owner" required>
              </div>
      
           <input type="hidden" user_id" value="{{ Auth::user()->id }}" required>

            <div class="form-group">
              <label class="control-label">Nama Bank</label>
              <select name="master_bank_id" class="form-control border-input" id="pilihbank" required>
                <option>Pilih Bank</option>
              </select>
            </div>

              <div class="form-group">
                <button class="btn btn-primary" type="submit">Save</button>
              </div>
            </div>  

          </form>
          </div>
      </div>
  </div>
</div>
