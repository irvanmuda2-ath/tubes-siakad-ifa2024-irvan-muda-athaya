```php
<x-app-layout>

<div style="padding:35px;max-width:800px;">

    <h1 style="
    font-size:42px;
    font-weight:700;
    color:#111827;
    margin-bottom:25px;">
        Edit Jadwal
    </h1>

    <div style="
    background:white;
    padding:30px;
    border-radius:16px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);">

        <form action="{{ route('jadwal.update',$jadwal->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div style="margin-bottom:20px;">

                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    Mata Kuliah
                </label>

                <select
                    name="kode_matakuliah"
                    style="
                    width:100%;
                    padding:12px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:14px;">

                    @foreach($matakuliahs as $mk)

                    <option
                        value="{{ $mk->kode_matakuliah }}"
                        {{ $jadwal->kode_matakuliah == $mk->kode_matakuliah ? 'selected' : '' }}>

                        {{ $mk->nama_matakuliah }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div style="margin-bottom:20px;">

                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    Dosen
                </label>

                <select
                    name="nidn"
                    style="
                    width:100%;
                    padding:12px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:14px;">

                    @foreach($dosens as $dosen)

                    <option
                        value="{{ $dosen->nidn }}"
                        {{ $jadwal->nidn == $dosen->nidn ? 'selected' : '' }}>

                        {{ $dosen->nama }}

                    </option>

                    @endforeach

                </select>

            </div>

            <div style="margin-bottom:20px;">

                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    Kelas
                </label>

                <input
                    type="text"
                    name="kelas"
                    value="{{ $jadwal->kelas }}"
                    style="
                    width:100%;
                    padding:12px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:14px;">

            </div>

            <div style="margin-bottom:20px;">

                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    Hari
                </label>

                <input
                    type="text"
                    name="hari"
                    value="{{ $jadwal->hari }}"
                    style="
                    width:100%;
                    padding:12px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:14px;">

            </div>

            <div style="margin-bottom:25px;">

                <label style="
                display:block;
                margin-bottom:8px;
                font-weight:600;
                color:#374151;">
                    Jam
                </label>

                <input
                    type="time"
                    name="jam"
                    value="{{ $jadwal->jam }}"
                    style="
                    width:100%;
                    padding:12px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:14px;">

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
                Update
            </button>

            <a href="{{ route('jadwal.index') }}"
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
```
