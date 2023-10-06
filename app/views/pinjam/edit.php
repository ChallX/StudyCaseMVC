<div class="container">
    <h3 class="mb-3">Edit Peminjaman :</h3>
    <form action="<?= BASE_URL; ?>/pinjam/updatePinjam" method="post">
        <div class="class-body">
            <input type="hidden" name="id" value="<?= $data['pinjam']['id']; ?>">
            <div class="form-group mb-3">
                <label for="judul">Nama Peminjam</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['pinjam']['nama_peminjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $data['pinjam']['jenis_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="judul">No Barang</label>
                <input type="text" class="form-control" id="nomor" name="nomor" value="<?= $data['pinjam']['no_barang'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai">Tanggal Pinjam</label>
                <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $data['pinjam']['tgl_pinjam'] ?>">
            </div>
            <div class="form-group mb-3">
                <label for="tgl_selesai">Tanggal Kembali</label>
                <input type="datetime-local" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $data['pinjam']['tgl_kembali'] ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>