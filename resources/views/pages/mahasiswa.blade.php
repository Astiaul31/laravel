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
           <h3> Data Mahasiswa</h3>
        </legend>
        @foreach ($mahasiswa as $kuliah)
        @php
            $total = 0;
        @endphp
            Nama Dosen : {{ $kuliah['dosen']}} <br>
            Mata Kuliah : {{ $kuliah['matakuliah']}} <br>
            <strong>Mahasiswa :</strong>
            @foreach($kuliah['mahasiswa'] as $mahasiswa) <br>   
            <li>Nama : {{ $mahasiswa['nama'] }} <br></li>
            &nbsp&nbsp&nbsp&nbsp&nbspNilai :{{ $mahasiswa['nilai'] }} <br>
            @php $total += $mahasiswa['nilai'] @endphp
            @endforeach
            @php $rata = $total / count($kuliah['mahasiswa']) @endphp <br>
            Total Nilai : {{$total}} <br>
            Rata-rata : {{$rata}} <br>
            <hr />
            @endforeach
    </fieldset>
</body>
</html>