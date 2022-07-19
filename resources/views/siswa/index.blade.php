<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <center>
    <fieldset>
        <legend><h3>Data Siswa</h3></legend>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nomor Induk Siswa</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($siswa as $data)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $data->id}}</td>
                    <td>{{ $data->nama}}</td>
                    <td>{{ $data->nis}}</td>
                    <td>{{ date('d M Y', strtotime($data->tgl_lahir))}}</td>
                    <td>{{ $data->jk}}</td>
                    <td>{{ $data->alamat}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    </fieldset>
    </center>
</body>
</html>