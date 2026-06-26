<div style="
width:260px;
min-height:100vh;
background:linear-gradient(180deg,#0f172a,#1e3a8a);
position:fixed;
left:0;
top:0;
box-shadow:4px 0 15px rgba(0,0,0,.15);
display:flex;
flex-direction:column;">

    <div style="
    padding:25px 20px;
    text-align:center;
    border-bottom:1px solid rgba(255,255,255,.1);">

        <h2 style="
        color:white;
        font-size:22px;
        font-weight:700;
        margin:0;">
            SIAKAD
        </h2>

        <p style="
        color:#cbd5e1;
        margin-top:6px;
        font-size:12px;">
            Sistem Informasi Akademik
        </p>

    </div>

    <div style="
    padding:15px 8px;
    flex:1;">

        <a href="{{ route('dashboard') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:6px;
           color:white;
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('dashboard') ? '#1e40af' : 'transparent' }};
           font-size:15px;">
            <i class="fas fa-gauge-high" style="width:22px;"></i>
            Dashboard
        </a>

        @if(Auth::user()->role == 'admin')

        <a href="{{ route('dosen.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:6px;
           color:white;
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('dosen.*') ? '#1e40af' : 'transparent' }};
           font-size:15px;">
            <i class="fas fa-chalkboard-teacher" style="width:22px;"></i>
            Dosen
        </a>

        <a href="{{ route('mahasiswa.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:6px;
           color:white;
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('mahasiswa.*') ? '#1e40af' : 'transparent' }};
           font-size:15px;">
            <i class="fas fa-user-graduate" style="width:22px;"></i>
            Mahasiswa
        </a>

        <a href="{{ route('matakuliah.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:6px;
           color:white;
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('matakuliah.*') ? '#1e40af' : 'transparent' }};
           font-size:15px;">
            <i class="fas fa-book-open" style="width:22px;"></i>
            Mata Kuliah
        </a>

        <a href="{{ route('jadwal.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:6px;
           color:white;
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('jadwal.*') ? '#1e40af' : 'transparent' }};
           font-size:15px;">
            <i class="fas fa-calendar-days" style="width:22px;"></i>
            Jadwal
        </a>

        <a href="{{ route('krs.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:6px;
           color:white;
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('krs.*') ? '#1e40af' : 'transparent' }};
           font-size:15px;">
            <i class="fas fa-clipboard-list" style="width:22px;"></i>
            KRS
        </a>

        @endif

        @if(Auth::user()->role == 'mahasiswa')

        <a href="{{ route('jadwal.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:6px;
           color:white;
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('jadwal.*') ? '#1e40af' : 'transparent' }};
           font-size:15px;">
            <i class="fas fa-calendar-days" style="width:22px;"></i>
            Jadwal
        </a>

        <a href="{{ route('krs.index') }}"
           style="
           display:block;
           padding:10px 18px;
           margin-bottom:6px;
           color:white;
           text-decoration:none;
           border-radius:10px;
           background:{{ request()->routeIs('krs.*') ? '#1e40af' : 'transparent' }};
           font-size:15px;">
            <i class="fas fa-clipboard-list" style="width:22px;"></i>
            KRS
        </a>

        @endif

    </div>

    <div style="padding:15px;">

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
                style="
                width:100%;
                background:#0b1220;
                color:white;
                border:none;
                padding:8px;
                border-radius:8px;
                cursor:pointer;
                font-size:13px;
                font-weight:600;">
                <i class="fas fa-right-from-bracket"></i>
                Logout
            </button>

        </form>

    </div>

</div>