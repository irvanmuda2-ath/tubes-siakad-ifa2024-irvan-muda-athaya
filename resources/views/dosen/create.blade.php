<x-app-layout>

<div style="padding:35px;max-width:800px;">

    <h1 style="
    font-size:42px;
    font-weight:700;
    color:#111827;
    margin-bottom:25px;">
        Tambah Dosen
    </h1>

    @if ($errors->any())
        <div style="
        background:#fee2e2;
        color:#991b1b;
        padding:15px;
        border-radius:10px;
        margin-bottom:20px;
        border:1px solid #fecaca;">

            <ul style="margin:0;padding-left:20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

    <div style="
    background:white;
    padding:30px;
    border-radius:16px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);">

        <form action="{{ route('dosen.store') }}" method="POST">

            @csrf

            <div style="margin-bottom:20px;">

                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    NIDN
                </label>

                <input
                    type="text"
                    name="nidn"
                    style="
                    width:100%;
                    padding:12px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:14px;"
                    required>

            </div>

            <div style="margin-bottom:25px;">

                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    Nama Dosen
                </label>

                <input
                    type="text"
                    name="nama"
                    style="
                    width:100%;
                    padding:12px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:14px;"
                    required>

            </div>

            <button
                type="submit"
                style="
                background:#1e40af;
                color:white;
                padding:10px 18px;
                border:none;
                border-radius:8px;
                font-size:13px;
                font-weight:600;
                cursor:pointer;
                margin-right:8px;">
                Simpan
            </button>

            <a href="{{ route('dosen.index') }}"
                style="
                display:inline-block;
                background:#6b7280;
                color:white;
                padding:10px 18px;
                border-radius:8px;
                text-decoration:none;
                font-size:13px;
                font-weight:600;">
                Kembali
            </a>

        </form>

    </div>

</div>

</x-app-layout>