<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="/">Seamolec</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="/home" class="sidebar-link">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/cek/create" class="sidebar-link">
                <i class="bi bi-bar-chart"></i>
                <span>Input Data</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/cek" class="sidebar-link">
                <i class="bi bi-list-ul"></i>
                <span>List Prangkat</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">type
        <a href="/login" class="sidebar-link">
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
            <i class="bi bi-box-arrow-in-right"></i>
            <span><button type="submit" class="logout">Logout</button></span>
            </form>
        </a>
    </div>
</aside>
