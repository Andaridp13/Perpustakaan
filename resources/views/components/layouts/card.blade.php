<div id="dashboard" class="mb-4">
    <h2>Sekilas Info</h2>
    <div class="row">
        <!-- Keanggotaan -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success h-100">
                <div class="card-header d-flex align-items-center">
                    <span data-feather="users" class="mr-2"></span> Keanggotaan
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total: {{ $member }}</h5>
                    <p class="card-text">Jumlah Keanggotaan</p>
                </div>
            </div>
        </div>

        <!-- Buku -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success h-100">
                <div class="card-header d-flex align-items-center">
                    <span data-feather="book" class="mr-2"></span> Buku
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total: {{ $buku }}</h5>
                    <p class="card-text">Buku yang dipinjam</p>
                </div>
            </div>
        </div>

        <!-- Peminjaman -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success h-100">
                <div class="card-header d-flex align-items-center">
                    <span data-feather="file-text" class="mr-2"></span> Peminjaman
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total: {{ $pinjam }}</h5>
                    <p class="card-text">Jumlah Peminjam</p>
                </div>
            </div>
        </div>

        <!-- Pengembalian -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success h-100">
                <div class="card-header d-flex align-items-center">
                    <span data-feather="clock" class="mr-2"></span> Pengembalian
                </div>
                <div class="card-body">
                    <h5 class="card-title">Total: {{ $kembali }}</h5>
                    <p class="card-text">Pinjaman Melebihi Waktu</p>
                </div>
            </div>
        </div>
    </div>
</div>
