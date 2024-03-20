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
            <a href="/" class="sidebar-link">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/input" class="sidebar-link">
                <i class="bi bi-bar-chart"></i>
                <span>Input Data</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="/tabel" class="sidebar-link">
                <i class="bi bi-list-ul"></i>
                <span>List Prangkat</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">type
        <a href="/login" class="sidebar-link">
            <i class="bi bi-box-arrow-in-right"></i>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
            <span><button type="submit">Logout</button></span>
        </a>
    </div>
</aside>
