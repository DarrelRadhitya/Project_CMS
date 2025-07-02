<nav class="navbar-custom">
    <a href="/" class="logo">
        <!-- Logo image removed as requested -->
    </a>
    <a href="{{ route('home') }}"><i class="fas fa-home"></i> Main Menu</a>
    <div class="dropdown">
        <a href="#" class="dropdown-toggle"><i class="fas fa-layer-group"></i> Kelola Data</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('pelanggan.index') }}">🧑🏻 Pelanggan</a></li>
            <li><a class="dropdown-item" href="{{ route('playstation.index') }}">🎮 Playstation</a></li>
            <li><a class="dropdown-item" href="{{ route('transaksi.index') }}">📝 Transaksi</a></li>
            <li><a class="dropdown-item" href="{{ route('pembayaran.index') }}">💸 Pembayaran</a></li>
        </ul>
    </div>
    <div class="dropdown">
        <a href="#" class="dropdown-toggle"><i class="fas fa-map-marker-alt"></i> Maps</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://maps.app.goo.gl/CNfJYFwUJJHkMQvy6">Google Maps</a></li>
        </ul>
    </div>
</nav>
<hr>

<style>
.navbar-custom {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    background: #fff;
    padding: 10px 30px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.04);
    border-radius: 0 0 12px 12px;
    gap: 24px;
    font-family: 'Segoe UI', Arial, sans-serif;
    position: relative;
    z-index: 10;
}

.navbar-custom .logo {
    margin-right: 32px;
    margin-left: 0;
    display: flex;
    align-items: center;
}

.navbar-custom a {
    color: #2d2d2d;
    text-decoration: none;
    font-weight: 500;
    margin-right: 10px;
    transition: color 0.2s;
}

.navbar-custom a:hover {
    color: #007bff;
}

.navbar-custom .dropdown {
    position: relative;
}

.navbar-custom .dropdown-toggle:after {
    content: ' ▼';
    font-size: 0.7em;
}

.navbar-custom .dropdown-menu {
    display: none;
    position: absolute;
    left: 0;
    top: 100%;
    min-width: 180px;
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.08);
    padding: 8px 0;
    z-index: 100;
    list-style: none;
    margin: 0;
}

.navbar-custom .dropdown:hover .dropdown-menu,
.navbar-custom .dropdown:focus-within .dropdown-menu {
    display: block;
}

.navbar-custom .dropdown-item {
    display: block;
    padding: 8px 24px;
    color: #2d2d2d;
    text-decoration: none;
    font-size: 1em;
    transition: background 0.2s, color 0.2s;
}

.navbar-custom .dropdown-item:hover {
    background: #f0f4ff;
    color: #007bff;
}

@media (max-width: 700px) {
    .navbar-custom {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
        padding: 10px 8px;
    }
    .navbar-custom .logo {
        margin-right: 0;
        margin-bottom: 8px;
    }
    .navbar-custom .dropdown-menu {
        left: 0;
        min-width: 140px;
    }
}
</style>

