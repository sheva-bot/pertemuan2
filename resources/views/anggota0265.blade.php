<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Document</title>
</head>
<style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin-top: 100px;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
    </style>
<body>
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Data Buku</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Data Buku</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Data Buku</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large">Data Buku</a>
        </div>
    </div>

    <table id="customers">
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Telp</th>
        </tr>
        @foreach ($item as $i)
        <tr>
            <td>{{ $i->anggota_nama }}</td>
            <td>{{ $i->anggota_alamat }}</td>
            <td>{{ $i->anggota_jk }}</td>
            <td>{{ $i->anggota_telp }}</td>
        </tr>
        @endforeach
      </table>
</body>
</html>