<!-- Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- header modal-->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <!-- body modal-->
            <div class="modal-body">
                Data yang dihapus tidak akan bisa dikembalikan.
            </div>
            
            <!-- footer modal-->
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Model for add item to Database-->
<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--Header modal-->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

                <form action="index.php/products/add" class="form-horizontal" method="post">
                    <!--Body Modal-->
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama Barang</label>
                            <div class="col-xs-3">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Barang">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Keterangan</label>
                            <div class="col-xs-3">
                                <input type="text" name="keterangan" class="form-control" placeholder="Nama Barang">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Jumlah</label>
                            <div class="col-xs-3">
                                <input type="text" name="jumlah" class="form-control" placeholder="Nama Barang">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Harga Rp:</label>
                            <div class="col-xs-3">
                                <input type="text" name="harga" class="form-control" placeholder="Nama Barang">
                            </div>
                        </div>
                    </div>

                    <!--Footer Modal-->
                    <div class="modal-footer">
                        <button class="btn btn-secondary">Add</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<!-- Modal for update item-->
<!-- Model for add item to Database-->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--Header modal-->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

                <form action="index.php/products/update" class="form-horizontal" method="post">
                    <input type="hidden" id="idModal" name="id">
                    <!--Body Modal-->
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-xs-3">Nama Barang</label>
                            <div class="col-xs-3">
                                <input type="text" name="nama" id="namaModal" class="form-control" placeholder="Nama Barang" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Keterangan</label>
                            <div class="col-xs-3">
                                <input type="text" name="keterangan" id="keteranganModal" class="form-control" placeholder="Nama Barang" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Jumlah</label>
                            <div class="col-xs-3">
                                <input type="text" name="jumlah" id="jumlahModal" class="form-control" placeholder="Nama Barang" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3">Harga Rp:</label>
                            <div class="col-xs-3">
                                <input type="text" name="harga" id="hargaModal" class="form-control" placeholder="Nama Barang" value="">
                            </div>
                        </div>
                    </div>

                    <!--Footer Modal-->
                    <div class="modal-footer">
                        <button class="btn btn-secondary">Update</button>
                    </div>
                </form>
        </div>
    </div>
</div>