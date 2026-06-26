<x-app-layout>

<div style="padding:35px;">

    <div style="
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;">

        <h1 style="
        font-size:42px;
        font-weight:700;
        color:#111827;
        margin:0;">
            Data Jadwal
        </h1>

        @if(Auth::user()->role == 'admin')
        <a href="{{ route('jadwal.create') }}"
            style="
            background:#1e40af;
            color:white;
            padding:10px 16px;
            border-radius:10px;
            text-decoration:none;
            font-size:13px;
            font-weight:600;">
            + Tambah Jadwal
        </a>
        @endif

    </div>

    @if(session('success'))
        <div style="
        background:#dcfce7;
        color:#166534;
        padding:15px;
        border-radius:10px;
        margin-bottom:20px;
        border:1px solid #bbf7d0;">
            {{ session('success') }}
        </div>
    @endif

    <div style="
    background:white;
    border-radius:16px;
    overflow:hidden;
    box-shadow:0 2px 12px rgba(0,0,0,.08);">

        <table
            width="100%"
            cellpadding="18"
            style="
            border-collapse:collapse;
            text-align:center;">

            <thead>

                <tr style="
                background:#eff6ff;
                color:#1e40af;">

                    <th style="border:1px solid #d1d5db;">Mata Kuliah</th>
                    <th style="border:1px solid #d1d5db;">Dosen</th>
                    <th style="border:1px solid #d1d5db;">Kelas</th>
                    <th style="border:1px solid #d1d5db;">Hari</th>
                    <th style="border:1px solid #d1d5db;">Jam</th>

                    @if(Auth::user()->role == 'admin')
                    <th style="border:1px solid #d1d5db;" width="180">
                        Aksi
                    </th>
                    @endif

                </tr>

            </thead>

            <tbody>

                @forelse($jadwals as $jadwal)

                <tr>

                    <td style="border:1px solid #d1d5db;">
                        {{ $jadwal->mataKuliah->nama_matakuliah }}
                    </td>

                    <td style="border:1px solid #d1d5db;">
                        {{ $jadwal->dosen->nama }}
                    </td>

                    <td style="border:1px solid #d1d5db;">
                        {{ $jadwal->kelas }}
                    </td>

                    <td style="border:1px solid #d1d5db;">
                        {{ $jadwal->hari }}
                    </td>

                    <td style="border:1px solid #d1d5db;">
                        {{ $jadwal->jam }}
                    </td>

                    @if(Auth::user()->role == 'admin')
                    <td style="border:1px solid #d1d5db;">

                        <a href="{{ route('jadwal.edit',$jadwal->id) }}"
                            style="
                            display:inline-block;
                            background:#1e40af;
                            color:white;
                            padding:7px 12px;
                            border-radius:8px;
                            text-decoration:none;
                            font-size:12px;
                            font-weight:600;
                            margin-right:4px;">
                            Edit
                        </a>

                        <form action="{{ route('jadwal.destroy',$jadwal->id) }}"
                            method="POST"
                            style="display:inline-block;">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Yakin hapus data?')"
                                style="
                                background:#ef4444;
                                color:white;
                                padding:7px 12px;
                                border:none;
                                border-radius:8px;
                                font-size:12px;
                                font-weight:600;
                                cursor:pointer;">
                                Hapus
                            </button>

                        </form>

                    </td>
                    @endif

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        style="
                        border:1px solid #d1d5db;
                        padding:30px;
                        color:#6b7280;">
                        Belum ada data jadwal
                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>