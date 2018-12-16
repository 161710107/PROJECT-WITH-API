<div class="content" id="createFormTransfer">
  <div class="col-md-12">
    <div class="row">
      <div class="card">
        <div class="header">
          <h4 class="title">Transfer
            <button class="btn btn-primary pull-right" id="backViewTransfer">
              Kembali
            </button>
          </h4>
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
              <label class="control-label">Status</label>
              <input type="text" class="form-control border-input" placeholder="Status" name="status" id="status" required>
            </div>

            <div class="form-group">
              <label class="control-label">User</label>
              <select class="form-control border-input" name="user_id" id="pilihUser" required>
                
              </select>
            </div>

            <div class="form-group">
              <label class="control-label">Bank</label>
              <select class="form-control border-input" name="bank_id" id="pilihBank" required>
                
              </select>
            </div>

            <div class="form-group">
              <label class="control-label">Judul Event</label>
              <select class="form-control border-input" name="event_id" id="pilihEvent" required="">
                
              </select>
            </div>

            <div class="form-group">
              <button class="btn btn-primary" type="submit">Save</button>
            </div>

          </form>
          </div>
      </div>
    </div>
  </div>
</div>
