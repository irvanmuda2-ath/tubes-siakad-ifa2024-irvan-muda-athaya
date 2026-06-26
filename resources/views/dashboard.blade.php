<x-app-layout>

<div style="padding:30px;background:#f8fafc;min-height:100vh;">

    <div style="
    margin-bottom:30px;">

        <h1 style="
        font-size:38px;
        font-weight:bold;
        color:#111827;
        margin:0;">
            Selamat Datang
        </h1>

        <p style="
        color:#6b7280;
        margin-top:8px;">
            Berikut ringkasan informasi akademik saat ini.
        </p>

    </div>

    <div style="
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-bottom:30px;">

        <div style="
        background:white;
        padding:25px;
        border-radius:18px;
        border:1px solid #e5e7eb;">

            <div style="font-size:16px;color:#374151;">
                Dosen
            </div>

            <h1 style="
            font-size:42px;
            margin-top:10px;
            color:#1e40af;">
                {{ $jumlahDosen }}
            </h1>

            <span style="color:#6b7280;">
                Total Dosen
            </span>

        </div>

        <div style="
        background:white;
        padding:25px;
        border-radius:18px;
        border:1px solid #e5e7eb;">

            <div style="font-size:16px;color:#374151;">
                Mahasiswa
            </div>

            <h1 style="
            font-size:42px;
            margin-top:10px;
            color:#16a34a;">
                {{ $jumlahMahasiswa }}
            </h1>

            <span style="color:#6b7280;">
                Total Mahasiswa
            </span>

        </div>

        <div style="
        background:white;
        padding:25px;
        border-radius:18px;
        border:1px solid #e5e7eb;">

            <div style="font-size:16px;color:#374151;">
                Mata Kuliah
            </div>

            <h1 style="
            font-size:42px;
            margin-top:10px;
            color:#7c3aed;">
                {{ $jumlahMatakuliah }}
            </h1>

            <span style="color:#6b7280;">
                Total Mata Kuliah
            </span>

        </div>

        <div style="
        background:white;
        padding:25px;
        border-radius:18px;
        border:1px solid #e5e7eb;">

            <div style="font-size:16px;color:#374151;">
                Jadwal
            </div>

            <h1 style="
            font-size:42px;
            margin-top:10px;
            color:#ea580c;">
                {{ $jumlahJadwal }}
            </h1>

            <span style="color:#6b7280;">
                Total Jadwal
            </span>

        </div>

        <div style="
        background:white;
        padding:25px;
        border-radius:18px;
        border:1px solid #e5e7eb;">

            <div style="font-size:16px;color:#374151;">
                KRS
            </div>

            <h1 style="
            font-size:42px;
            margin-top:10px;
            color:#06b6d4;">
                {{ $jumlahKrs }}
            </h1>

            <span style="color:#6b7280;">
                Total KRS
            </span>

        </div>

    </div>

    <div style="
    background:white;
    padding:30px;
    border-radius:18px;
    border:1px solid #e5e7eb;
    margin-bottom:25px;">

        <h2 style="
        font-size:28px;
        font-weight:bold;
        color:#111827;
        margin-bottom:15px;">
            Informasi Sistem
        </h2>

        <p style="
        color:#6b7280;
        line-height:1.9;
        font-size:16px;">
            Sistem Informasi Akademik (SIAKAD) digunakan untuk mengelola
            data dosen, mahasiswa, mata kuliah, jadwal perkuliahan,
            dan Kartu Rencana Studi (KRS) secara lebih mudah,
            cepat, dan terstruktur.
        </p>

    </div>

    <div style="
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;">

        <div style="
        background:white;
        padding:25px;
        border-radius:18px;
        border:1px solid #e5e7eb;">

            <h3 style="margin-bottom:15px;">
                📅 Jadwal Hari Ini
            </h3>

            <p style="
            color:#6b7280;">
                Belum ada jadwal perkuliahan hari ini.
            </p>

        </div>

        <div style="
        background:white;
        padding:25px;
        border-radius:18px;
        border:1px solid #e5e7eb;">

            <h3 style="margin-bottom:15px;">
                📚 Mata Kuliah
            </h3>

            <p style="
            color:#6b7280;">
                Total mata kuliah tersedia:
                {{ $jumlahMatakuliah }}
            </p>

        </div>

    </div>

</div>

</x-app-layout>