<div class="modal fade" id="formbarangModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form barang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="barang">
                @csrf
                <div id="method"></div>
                <div class="modal-body">
            <form method="post" action="barang">
              @csrf
              <div id="method"></div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Nama barang</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nama_barang" value="" name="nama_barang">
                </div>
              </div>

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Id Produk</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="produk_id" value="" name="produk_id">
                </div>
              </div>

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Kode</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="kode" value="" name="kode">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Stok</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="stok" value="" name="stok">
                </div>
              </div>

              <div class="input-group mb-3">
                <label for="staticEmail" class="col-sm-4 col-form-label">Harga</label>
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp.</span>
                </div>
                <input type="number" class="form-control" id="harga" placeholder="Harga" name="harga">
              </div>

              <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Jenis</label>
                  <div class="col-sm-8">
                        <select class="custom-select" name='jenis' id="jenis">
                          <option value="Makanan">Makanan</option>
                          <option value="Peralatan">Peralatan</option>
                          <option value="Pakaian">Pakaian</option>
                        </select>
                    </div>
                  </div> 
                 
      </div>

                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>