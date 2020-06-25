@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card mb-3">
			<div class="card-header-tab card-header-tab-animation card-header">
				<div class="card-title">
					Penjualan
				</div>
			</div>
			<div class="card-body">
				@if(!empty(session('error')))
				<div class="alert alert-danger">
					<ul>
						<li>{{session('error')}}</li>
					</ul>
				</div>
				@endif
				<form action="/penjualan/tambah" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<label>Batch Ayam :</label>
						<input type="text" name="idAyam" list="id_ayam" class="form-control" required>
						<datalist id="id_ayam">
							@foreach($ayam as $item)
							<option value="{{$item->id_ayam}}">ID Ayam: {{$item->id_ayam}} | Sisa: {{$item->sisa_ayam}}</option>
							@endforeach
						</datalist>
					</div>
					<div class="form-group">
						<label>Jumlah Ayam :</label>
						<input type="number" name="jumlahAyam" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Total Kg</label>
						<input type="number" onkeyup="hitung_total()" name="totalKg" id="total_kg" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga /kg :</label>
						<input type="number" name="hargaKg" onkeyup="hitung_total()" id="harga_kg" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga Total :</label>
						<input type="number" name="hargaTotal" id="harga_total" required class="form-control">
					</div>
					<div class="form-group">
						<label>Lokasi :</label>
						<textarea class="form-control" name="lokasi" required></textarea>
					</div>
					<div class="text-right">
						<input type="submit" name="submit" class="btn btn-lg btn-primary" value="Tambah">	
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	function hitung_total() {
		var total_kg = $('#total_kg').val()
		var harga_kg = $('#harga_kg').val()
		var total = total_kg * harga_kg
		$('#harga_total').val(total)
	}
</script>
@endsection