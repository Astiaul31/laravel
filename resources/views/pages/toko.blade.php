<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
</head>
<body>
    <fieldset>
        <legend><h3>Toko Trunojoyo</h3></legend>
        @foreach ($toko as $beli)
        Nama : {{ $beli['nama'] }} <br>
        @php
            $total = 0;
        @endphp
        @foreach ($beli['belanja'] as $toko)
            - Jenis  : {{ $toko['jenis'] }} <br>
            &nbsp Harga: {{ $toko['harga'] }} <br>

                @php
                    $total += $toko['harga'];
                @endphp

                @endforeach
        <br>
            Total Harga : Rp. {{$total}}
            @php
                $diskon;
                if($total > 500000) {
                    $diskon = (10 / 100) * $total;
                }elseif($total > 250000){
                    $diskon = (5 / 100) * $total;
                }else{
                    $diskon = 0;
                }
            @endphp
            <br>
            Cashback : {{$diskon}} <br>
            <strong>Total Bayar : Rp. {{$total - $diskon}}</strong>
            <hr>
            @endforeach
    </fieldset>
</body>
</html>