<nav class="col-md-2 bg-dark sidebar">

<style>
.sidebar {
    background: linear-gradient(135deg, #43a047 0%, #1e88e5 100%) !important;
    min-height: 100vh;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
}

.sidebar-sticky {
    position: sticky;
    top: 0;
    padding-top: 20px;
}

.nav-item {
    margin-bottom: 5px;
}

.nav-link {
    padding: 12px 20px;
    transition: all 0.3s ease;
    border-radius: 8px;
    margin: 0 10px;
}

.nav-link:hover {
    background: rgba(255, 255, 255, 0.1);
    transform: translateX(5px);
}

.nav-link.active {
    background: rgba(255, 255, 255, 0.2);
    font-weight: 600;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

[data-feather] {
    width: 20px;
    height: 20px;
    margin-right: 10px;
    vertical-align: text-bottom;
    stroke-width: 2;
}
</style>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="{{ route('home') }}">
                                <span data-feather="grid"></span>
                                Papan Informasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('member') }}">
                                <span data-feather="user"></span>
                                Keanggotaan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('buku') }}">
                                <span data-feather="archive"></span>
                                Pengelolaan Buku
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('pinjam') }}">
                                <span data-feather="rotate-ccw"></span>
                                Peminjaman
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('kembali') }}">
                                <span data-feather="check-circle"></span>
                                Pengembalian
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('kategoris') }}">
                                <span data-feather="layers"></span>
                                Kategori Buku
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('user') }}">
                                <span data-feather="users"></span>
                                Pengguna
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>