<x-app-layout>

<div style="
padding:35px;
max-width:800px;">

    <div style="
    background:white;
    padding:30px;
    border-radius:16px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);">

        <h2 style="
        font-size:38px;
        font-weight:700;
        color:#111827;
        margin-bottom:30px;">
            Edit KRS
        </h2>

        <form action="{{ route('krs.update',$krs->id) }}"
            method="POST">

            @csrf
            @method('PUT')

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

                    @foreach($mahasiswas as $m)

                        <option
                            value="{{ $m->npm }}"
                            {{ $krs->npm == $m->npm ? 'selected' : '' }}>

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

                    @foreach($matakuliahs as $mk)

                        <option
                            value="{{ $mk->kode_matakuliah }}"
                            {{ $krs->kode_matakuliah == $mk->kode_matakuliah ? 'selected' : '' }}>

                            {{ $mk->kode_matakuliah }}
                            - {{ $mk->nama_matakuliah }}

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
                    background:#1e40af;
                    color:white;
                    border:none;
                    border-radius:10px;
                    font-size:15px;
                    font-weight:600;
                    cursor:pointer;">
                    Update
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