@extends('Layout.main')

@section('content')
<div>
			<h4>>>Data Karyawan</h4>
			<a href="/Karyawan/create" class="btn btn-info btn-md p-2 mb-3">Tambah Data</a>
		</div>
		<div class="col-12 ps-1">
			<table class="table table-bordered border-dark">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">Jabatan</th>
						<th scope="col">Nama Karyawan</th>
						<th scope="col">Alamat</th>
						<th scope="col">No. Handphone</th>
						<th scope="col">Tempat Lahir</th>
						<th scope="col">Tanggal Lahir</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Status</th>
						<th scope="col">Jumlah Anak</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">01</th>
						<td>Kepala Divisi IT</td>
						<td>Eko</td>
						<td>Bogor</td>
						<td>0895xxx</td>
						<td>Bogor</td>
						<td>20 Agustus 1987</td>
						<td>Laki - Laki</td>
						<td>Menikah</td>
						<td>2</td>
						<td>
							<a href="/Karyawan/edit" class="btn btn-warning btn-sm">Edit</a>
							<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Sure?')">Delete</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
@endsection