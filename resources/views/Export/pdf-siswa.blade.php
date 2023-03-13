<!DOCTYPE html>
<html>
<head>
	<title>PDF SISWA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>

<center>
    <h5>Data Siswa</h5>
</center>
<br>

	<table class='table table-bordered'>
		<thead>
			<tr>
                <th scope="col">ID</th>
                <th scope="col">NISN</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Alamat</th>
                <th scope="col">No.Telp</th>
                <th scope="col">Nominal SPP</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach ($data as $no=> $row)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$row ->nisn}}</td>
                <td>{{$row ->nis}}</td>
                <td>{{$row ->nama}}</td>
                <td>{{$row ->kelas->nama_kelas}} {{$row ->kelas->kompetensi_keahlian}}</td>
                <td>{{$row ->alamat}}</td>
                <td>{{$row ->no_telp}}</td>
                <td>{{'Rp. '. $row ->spp->nominal. '.000'}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>