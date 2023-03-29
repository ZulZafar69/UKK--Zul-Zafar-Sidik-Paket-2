<!DOCTYPE html>
<html>
<head>
	
	{{-- <img src="../img/logo.png"  width="" height=""> --}}
	{{-- <link rel="logo.png" href="{{ asset('assets/img/logo.png') }}" /> --}}
	<title>Laporan Pengaduan Masyarakat</title>
	{{-- <img src="../img-logo/logo4.jpg" width="15%" height="10%"> --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
		{{-- <img height="5%" width="10%" src="../img/logo.png/"> --}}

		{{-- <img src="https://www.w3schools.com/images/lamp.jpg" alt="Lamp" width="32" height="32"> --}}
		{{-- <img height="50" width="50" src="{{ asset('assets/img-logo/logoo.png') }}"> --}}
		{{-- <img src="../img/logo4.htm"  width="" height=""> --}}
		{{-- <img src="logo4.png" alt="logo4.png"> --}}
		
		{{-- <img src="{{ public_path('public/assets/img/logo.jpg.') }}" width="15%" height="10%"> --}}
		{{-- <img style="https://png.pngtree.com/png-clipart/20200709/original/pngtree-travel-logo-design-free-logo-design-template-png-image_2944350.jpg" width="100"> --}}
		
		{{-- <img src="../img-logo/logo.png"  width="15%" height="10%"> --}}
		{{-- <link rel="logo.png" href="{{ asset('assets/img/logo.png') }}" /> --}}
		{{-- <td>Laporan Pengaduan masyarakat</td> --}}
	
	<style type="text/css">
table {
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
  font-size: 14px;
}

th, td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}
	</style>
	<center>
		<img src="{{ public_path('../assets/img/logo.jpg.') }}" alt="" style="width: 50px; height: 50px;">
		{{-- <img src="https://png.pngtree.com/png-clipart/20200709/original/pngtree-travel-logo-design-free-logo-design-template-png-image_2944350.jpg" width="100"> --}}
		{{-- <img src="../assets/img/logo.jpg" alt=""> --}}
		<h5>Laporan Pengaduan Masyarakat</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>NIK</th>
				<th>Nama</th>
				<th>Tanggal Pengaduan</th>
				<th>Status</th>
				<th>Isi Laporan</th>
				<th>Tanggapan</th>
				<th>Tanggal Tanggapan</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($data as $item)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$item->nik ?? ''}}</td>
				<td>{{$item->nama ?? ''}}</td>
				<td>{{$item->tgl_pengaduan ?? ''}}</td>
				<td>{{$item->status ?? ''}}</td>
				<td>{{$item->isi_laporan ?? ''}}</td>
				<td>{{$item->tanggapan->tanggapan ?? ''}}</td>
				<td>{{$item->tanggapan->tgl_tanggapan ?? ''}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>