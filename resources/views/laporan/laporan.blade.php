<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
h1 {
  /* h1 elements always start on the top of a new page. */
  page-break-before: always;
}

section.city-map {
  /* this section always occupies it's own page or pages. */
  page-break-before: always;
  page-break-after: always;
}

table {
  /* tables don't split across pages if possible. */
  page-break-inside: avoid;
}
    </style>

</head>

<body>

    <center>
        {{-- <img src="{{@url('monster/assets/images/fav-dlhk.png')}}" alt="" srcset=""> --}}
        <h1>Laporan Surat Masuk</h1>
        <h1>Dinas Kehutanana Dan Lingkungan Hidup</h1>
        <h1>Provinsi Bali</h1>
    </center>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>No. Surat</th>
                <th>No. Agenda</th>
                <th>Jenis Surat</th>
                <th>Tipe</th>
                <th>Tanggal Kirim</th>
                {{-- @if ($tipe=='masuk') --}}
                <th>Tanggal Terima</th>
                {{-- @endif --}}
                <th>Pengirim</th>
                <th>Perihal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cetak as $si => $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->no_surat }}</td>
                <td>{{ $s->no_agenda }}</td>
                <td>{{ $s->jenis_surat->name }}</td>
                <td>{{$s->tipe}}</td>
                <td>{{ \Carbon\Carbon::parse($s->tanggal_kirim)->format('d/m/Y') }}</td>
                {{-- @if ($tipe=='masuk') --}}
                <td>{{ \Carbon\Carbon::parse($s->tanggal_terima)->format('d/m/Y') }}</td>
                {{-- @endif --}}
                <td>{{ $s->pengirim }}</td>
                <td>{{ $s->perihal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>