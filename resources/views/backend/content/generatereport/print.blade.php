<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengaduan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Laporan Pengaduan</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Pengaduan</th>
                <th>Nama Pengadu</th>
                <th>Kategori</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengaduans as $index => $pengaduan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $pengaduan->judul_pengaduan }}</td>
                    <td>{{ $pengaduan->user->name ?? 'Tidak Tersedia' }}</td>
                    <td>{{ $pengaduan->kategori->nama_kategori ?? 'Tidak Tersedia' }}</td>
                    <td>{{ $pengaduan->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>