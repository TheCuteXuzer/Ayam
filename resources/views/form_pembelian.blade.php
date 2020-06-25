@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card mb-3">
			<div class="card-header">
				<div class="card-title">
					Form Pembelian
				</div>
			</div>
			<div class="card-body">
				<form action="/pembelian/tambah" method="post">
					{{csrf_field()}}
					<div class="form-row">
						<div class="form-group col-md-8">
							<label>Nama Barang :</label>
							<input type="text" name="namaBarang" class="form-control" required>
						</div>
						<div class="form-group col-md-4">
							<label>Jenis Pembelian :</label>
							<select name="jenisPembelian" class="form-control" required>
								@foreach($jenisPembelian as $item)
								<option value="{{$item->id_jenis_pembelian}}">{{$item->nama_jenis_pembelian}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label>Jumlah : </label>
							<input type="number" name="jumlah" required class="form-control" id="jumlah">
						</div>
						<div class="form-group col-md-4">
							<label>Harga Satuan : </label>
							<input type="number" name="hargaSatuan" required  class="form-control" id="hargaSatuan">
						</div>
						<div class="form-group col-md-4">
							<label>Satuan : </label>
							<input type="text" name="satuan" required class="form-control">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Total Harga :</label>
							<input type="text" readonly required name="totalHarga" class="form-control" id="totalHarga">
						</div>
						<div class="form-group col-md-6">
							<label>Tanggal Pembelian :</label>
							<input type="date" value="{{date('Y-m-d')}}" name="tanggalPembelian" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label>Lokasi :</label>
						<textarea class="form-control" required name="lokasi"></textarea>
					</div>
					<div class="text-right">
						<input type="submit" name="submit" class="btn btn-primary" value="Tambah">	
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$('#jumlah').keyup(totalHarga)
	$('#hargaSatuan').keyup(totalHarga)
	function totalHarga()
	{
		jumlah = $('#jumlah').val()
		hargaSatuan = $('#hargaSatuan').val()
		total = hargaSatuan * jumlah
		$('#totalHarga').val(total)
	}
	
</script>
@endsection