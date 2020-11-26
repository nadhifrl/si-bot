<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Cetak Tiket Taman Botani</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width:95px">
            <tr>
                <th scope="col">Kode Tiket</th>
                <th scope="col">Nama</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Pembelian</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Total Pembayaran</th>

            </tr>

            <tr>
                <td>B0321312s{{$detailtiket->id}}</td>
                <td>{{$detailtiket->nama}}</td>
                <td>{{$detailtiket->nomortelepon}}</td>
                <td>{{$detailtiket->alamat}}</td>
                <td>{{$detailtiket->tanggalpembelian}}</td>
                <td>{{$detailtiket->jumlahtiket}}</td>
                <td>{{$detailtiket->totalharga}}</td>
            </tr>
        </table>
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>