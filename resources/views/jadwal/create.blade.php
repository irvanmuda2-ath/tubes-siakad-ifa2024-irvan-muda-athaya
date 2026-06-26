```php
<x-app-layout>

<div style="padding:35px;max-width:800px;">

    <h1 style="
    font-size:42px;
    font-weight:700;
    color:#111827;
    margin-bottom:25px;">
        Tambah Jadwal
    </h1>

    <div style="
    background:white;
    padding:30px;
    border-radius:16px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);">

        <form action="{{ route('jadwal.store') }}"
              method="POST">

            @csrf

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
                    font-size:14px;"
                    required>

                    <option value="">
                        Pilih Mata Kuliah
                    </option>

                    @foreach($matakuliahs as $mk)

                    <option value="{{ $mk->kode_matakuliah }}">
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
                    font-size:14px;"
                    required>

                    <option value="">
                        Pilih Dosen
                    </option>

                    @foreach($dosens as $dosen)

                    <option value="{{ $dosen->nidn }}">
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
                    style="
                    width:100%;
                    padding:12px;
                    border:1px solid #d1d5db;
                    border-radius:10px;
                    font-size:14px;"
                    required>

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
                    placeholder="Contoh: Senin"
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
                    Jam
                </label>

                <input
                    type="time"
                    name="jam"
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
