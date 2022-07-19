<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <legend>
           <h3> Data kampus</h3>
        </legend>
        @foreach ($kampus as $kuliah)
            Nama Dosen : {{ $kuliah['dosen']}} <br>
            Nomor Induk Dosen : {{ $kuliah['induk']}} <br>
            <strong>Mahasiswa :</strong>
            @foreach($kuliah['mahasiswa'] as $mahasiswa) <br>   
            Nama : {{ $mahasiswa['nama'] }} <br>
            Nomor Induk : {{ $mahasiswa['noinduk'] }} <br>
            Jurusan : {{ $mahasiswa['jurusan'] }} <br>
            Mata Kuliah : 
            @foreach($mahasiswa['matakuliah'] as $matkul)
            <li>{{$matkul}}</li>
            @endforeach
            @endforeach
            <hr />
            @endforeach
    </fieldset>
</body>
</html>