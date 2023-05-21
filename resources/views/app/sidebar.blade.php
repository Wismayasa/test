<div class="sidebar shadow-lg" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <img src="{{ asset('asset') }}/img/brand-img.png" alt="" width="40px">
        <h1 class="brand-text text-white">Toko Cat Citra Warna</h1>
        <button class="btn d-md-none d-block px-1 py-0" id="close-btn"><i class="fa-solid fa-bars"></i></button>
    </div>

    <ul class="list-unstyled px-2 ">
        <li class="{{ $page === 'dashboard' ? 'active' : '' }}"><a href="{{ route('dashboard') }}" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-house"></i> Dashboard</a></li>
        <li class="{{ $page === 'barang' ? 'active' : '' }}"><a href="{{ route('barang.index') }}" class="text-decoration-none px-3 py-2 d-block" ><i class="fa-solid fa-door-open icon-sidebar"></i> Stok Barang</a></li>
        <li class="{{ $page === 'barangmasuk' ? 'active' : '' }}"><a href="{{ route('barangmasuk.index') }}" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-door-open icon-sidebar"></i> Barang Masuk</a></li>
        <li class="{{ $page === 'barangkeluar' ? 'active' : '' }}"><a href="{{ route('barangkeluar.index') }}" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-door-closed"></i> Barang Keluar</a></li>
        <li class="{{ $page === 'user' ? 'active' : '' }}"><a href="{{ route('user.index') }}" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user"></i>  User</a></li>
    </ul>
</div>