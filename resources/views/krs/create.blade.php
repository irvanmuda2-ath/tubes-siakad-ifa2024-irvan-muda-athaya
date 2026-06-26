<x-app-layout>

<div style="
padding:35px;
max-width:800px;">

    <div style="
    background:white;
    padding:30px;
    border-radius:16px;
    box-shadow:0 2px 10px rgba(0,0,0,.08);">

        <h2 style="
        font-size:38px;
        font-weight:700;
        color:#111827;
        margin-bottom:30px;">
            Tambah KRS
        </h2>

        <form action="{{ route('krs.store') }}" method="POST">
            @csrf

            <div style="margin-bottom:20px;">
                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    Mahasiswa
                </label>

                <select
                    name="npm"
                    required
                    style="
                    width:100%;
                    padding:12px 15px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:15px;
                    outline:none;">

                    <option value="">Pilih Mahasiswa</option>

                    @foreach($mahasiswas as $m)
                        <option value="{{ $m->npm }}">
                            {{ $m->npm }} - {{ $m->nama }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div style="margin-bottom:30px;">
                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    Mata Kuliah
                </label>

                <select
                    name="kode_matakuliah"
                    required
                    style="
                    width:100%;
                    padding:12px 15px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:15px;
                    outline:none;">

                    <option value="">Pilih Mata Kuliah</option>

                    @foreach($matakuliahs as $mk)
                        <option value="{{ $mk->kode_matakuliah }}">
                            {{ $mk->kode_matakuliah }} -
                            {{ $mk->nama_matakuliah }}
                        </option>
                    @endforeach

                </select>
            </div>

            <div style="
            display:flex;
            gap:12px;">

                <button
                    type="submit"
                    style="
                    min-width:120px;
                    height:45px;
                    background:#2563eb;
                    color:white;
                    border:none;
                    border-radius:10px;
                    font-size:15px;
                    font-weight:600;
                    cursor:pointer;">
                    Simpan
                </button>

                <a href="{{ route('krs.index') }}"
                    style="
                    min-width:120px;
                    height:45px;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    background:#374151;
                    color:white;
                    text-decoration:none;
                    border-radius:10px;
                    font-size:15px;
                    font-weight:600;">
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>