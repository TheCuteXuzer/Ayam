@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card mb-3">
			<div class="card-header-tab card-header-tab-animation card-header">
				<div class="card-title">
					History Penjualan
				</div>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>ID Penjualan</th>
							<th>ID Batch Ayam</th>
							<th>Jumlah Ayam</th>
							<th>Total Kg</th>
							<th>Harga Kg</th>
							<th>Total Harga</th>
							<th>Lokasi</th>
							<th>Tanggal Penjualan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($penjualan as $item)
						<tr>
							<td>{{$item->id_penjualan}}</td>
							<td>{{$item->id_ayam}}</td>
							<td>{{$item->jumlah_ayam}}</td>
							<td>{{$item->total_kg}}</td>
							<td>{{$item->harga_kg}}</td>
							<td>{{$item->total_harga}}</td>
							<td>{{$item->lokasi_penjualan}}</td>
							<td>{{$item->tanggal_penjualan}}</td>							
							<td>
								<a href="/penjualan/hapus/{{$item->id_penjualan}}" class="btn btn-danger">Hapus</a>
								<a href="/penjualan/edit/{{$item->id_penjualan}}" class="btn btn-success">Edit</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection