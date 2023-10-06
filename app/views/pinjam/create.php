<div class="container">
    <h3 class="mb-3">Tambah Peminjaman</h3>
    <form action="<?= BASE_URL; ?>/pinjam/simpanPinjam/" method="post">
    <div class="class-body">
        <div class="form-group mb-3">
            <label for="judul">Nama Peminjam</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group mb-3">
            <label for="penulis">Jenis Barang</label>
            <select class="form-select" name="jenis" id="jenis">
                <option hidden value="">Pilih
                <option value="Laptop">Laptop</option>
                <option value="Handphone">Handphone</option>
                <option value="Adaptor LAN">Adaptor LAN</option></option>
            </select>
        </div>
        <div class="form-group-mb-3">
            <label for="">Nomor Barang</label>
            <input type="text" class="form-control" id="no" name="nomor">
        </div>
        <div class="form-group mb-3">
            <label for="tgl_selesai">Tanggal Pinjam</label>
            <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam">
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>