<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>List Pemesanan</legend>
       @if ($a == null)
       <strong>{{$a}}</strong>
       @elseif($a == 'Mie Goreng')
            Makanan : <strong>{{$a}}</strong> <br>
            Harga : Rp. 5000
        @elseif($a == 'Seblak')
            Makanan : <strong>{{$a}}</strong> <br>
            Harga : Rp. 7500
        @elseif($a == 'Nasi Goreng')
            Makanan : <strong>{{$a}}</strong> <br>
            Harga : Rp. 15000
        @else
            Makanan : <strong>{{$a}}</strong> <br>
        @endif
        <hr>

        @if ($b == null)
       <strong>{{$b}}</strong>
       @elseif($b == 'Kopi')
            Minuman : <strong>{{$b}}</strong> <br>
            Harga : Rp. 5000
        @elseif($b == 'Teh')
            Minuman : <strong>{{$b}}</strong> <br>
            Harga : Rp. 7500
        @elseif($b == 'Jus')
            Minuman : <strong>{{$b}}</strong> <br>
            Harga : Rp. 10000
        @else
            Minuman : <strong>{{$b}}</strong> <br>
        @endif
        <hr>

        @if ($c == null)
       <strong>{{$c}}</strong>
       @elseif($c == 'Kecil')
            Ukuran : <strong>{{$c}}</strong> <br>
            Harga : Rp. 2500
        @elseif($c == 'Sedang')
            Ukuran : <strong>{{$c}}</strong> <br>
            Harga : Rp. 5000
        @elseif($c == 'Besar')
            Ukuran : <strong>{{$c}}</strong> <br>
            Harga : Rp. 10000
        @else
            Ukuran : <strong>{{$c}}</strong> <br>
        @endif
        <hr>
            
    </fieldset>
</body>

</html>