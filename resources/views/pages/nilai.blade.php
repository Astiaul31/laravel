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
        <legend>NILAI SISWA</legend>
        @foreach ($nilai as $murid)
        @php
            $nilaii = 0;
        @endphp
        <hr>
            Nama Siswa : {{ $murid['nama'] }} <br>
            Jurusan : {{ $murid['jurusan'] }} <br>
            <hr> 
            @foreach ($murid['nilai'] as $nilai)
                Mata Pelajaran : {{ $nilai['matpel'] }} <br>
                Nilai : {{ $nilai['nilai'] }} <br>
                
                @php
                    $nilaii += $nilai['nilai'];
                @endphp
                
            @endforeach
            @php
                $rata = $nilaii / 4;
            @endphp
            Rata-rata : {{ $rata }} <br>
            
            @if ($rata >= 85 && $rata <= 100)
                Grade : A
            @elseif ($rata >= 75 && $rata <= 84)
                Grade : B
            @elseif ($rata >= 60 && $rata <= 75)
                Grade : C
            @elseif ($rata >= 50 && $rata <= 59)
                Grade : D
            @else
                Grade : E
            @endif
            <br>
        @endforeach
        
    </fieldset>
</body>
</html>