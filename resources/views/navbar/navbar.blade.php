        {{-- <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="bi bi-list"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="/home">Seamolec</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/home" class="sidebar-link">
                        <i class="bi bi-house-door-fill"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-database-fill-add"></i>
                        <span>Input Data</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/cek/create" class="sidebar-link">Maintenance</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/barang/create" class="sidebar-link">Input Barang</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/tipe/create" class="sidebar-link">Input Tipe</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/ssid/create" class="sidebar-link">Input SSID</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/ruangan/create" class="sidebar-link">Input Ruangan</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/divisi/create" class="sidebar-link">Input Divisi</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="bi bi-list-check"></i>
                        <span>Data</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/cek" class="sidebar-link">Data Maintenance</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/barang" class="sidebar-link">Data Barang</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/tipe" class="sidebar-link">Data Tipe</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/ssid" class="sidebar-link">Data SSID</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/ruangan" class="sidebar-link">Data Ruangan</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/divisi" class="sidebar-link">Data Divisi</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="/login" class="sidebar-link">
                    <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                        @csrf
                        @method('DELETE')
                        <i class="bi bi-caret-left-square-fill"></i>
                        <span><button type="submit" class="logout">Logout</button></span>
                    </form>
                </a>
            </div>
        </aside> --}}
