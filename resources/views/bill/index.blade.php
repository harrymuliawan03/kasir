<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption>
                Steak Uhuyyy
            </caption>
            <thead>
                <tr>
                    <th colspan="3">Invoice <strong>#{{ $order->id }}</strong></th>
                    <td>{{ $order->created_at->format('D, d M Y') }}</td>
                </tr>
                <tr>
                    <th colspan="3">Nama Pemesan</strong></th>
                    <td>{{ $order->nama_pemesan }}</td>
                </tr>
                <tr>
                    <th colspan="3">Nama Menu</th>
                    <td>{{ $order->nama_menu }}</td>
                </tr>
                <tr>
                    <th colspan="3">Jumlah Porsi</th>
                    <td>{{ $order->jml_porsi }}</td>
                </tr>
                 <tr>
                    <th colspan="3">Total Harga</th>
                    <td>{{ $order->total_harga }}</td>
                </tr>
                 <tr>
                    <th colspan="3">Potongan Harga</th>
                    <td>{{ $order->potongan_harga }}</td>
                </tr>
                 <tr>
                    <th colspan="3">Grand Total</th>
                    <td>{{ $order->grand_total }}</td>
                </tr>
                <tr>
                    <th colspan="3">Pajak (10%)</th>
                    <td>{{ $order->grand_total * 10 / 100 }}</td>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="3">Total</th>
                    <td>Rp {{ number_format($order->grand_total + $order->grand_total * 10 / 100) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>