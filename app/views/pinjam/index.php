<div class="container">
    <h3 class="mb-3">Daftar Peminjaman</h3>
    <br>
        <a href="<?= BASE_URL; ?>/pinjam/tambah" class="btn btn-primary">Tambah Peminjaman</a>

        <form class="d-flex float-end" style="width: 25%;" role="search" id="searchForm">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchInput">
    <button class="btn btn-success mx-2" type="button" onclick="searchFunction()">Search</button>
    <button class="btn btn-danger" type="button" onclick="resetFunction()">Reset</button>
</form>
      <br>
    <br>
    <table class="table table-white table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach ($data['pinjam'] as $row) :?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_peminjam']; ?></td>
                <td><?= $row['jenis_barang']; ?></td>
                <td><?= $row['no_barang']; ?></td>
                <td><?= $row['tgl_pinjam']; ?></td>
                <td><?= $row['tgl_kembali']; ?></td>
                <td>
                <?php if ($row['tgl_pinjam'] >=  $row['tgl_kembali']) : ?>
            <span class="badge text-bg-success">Sudah Dikembalikan</span>
        <?php else :?>
            <span class="badge text-bg-danger">Belum Dikembalikan</span>
        <?php endif; ?>
    </td>

    <td>
        <?php if ($row['tgl_pinjam'] < $row['tgl_kembali']) : ?>
            <a href="<?= BASE_URL ?>/pinjam/edit/<?=$row['id'] ?>" class="btn btn-primary">Edit</a>
        <?php endif; ?>

        <a href="<?= BASE_URL ?>/pinjam/hapus/<?=$row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data?');">Hapus</a>
    </td>
</tr>
<?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>

<script>

var form = document.getElementById("searchForm");
form.addEventListener("submit", function(event) {
    event.preventDefault();
    searchFunction();
});

    function searchFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.querySelector(".table");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1]; //
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function resetFunction() {
        var input = document.getElementById("searchInput");
        input.value = ""; 
        var table = document.querySelector(".table");
        var tr = table.getElementsByTagName("tr");

        for (var i = 0; i < tr.length; i++) {
            tr[i].style.display = ""; // Menampilkan kembali semua baris yang disembunyikan
        }
    }
</script>