@extends('master')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card mb-3">
			<div class="card-header">
				<div class="card-title">
					Tambah Ayam
				</div>
			</div>
			<div class="card-body">
				<form action="/ayam/tambah" method="post">
					{{csrf_field()}}
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Jumlah Ayam</label>
							<input type="number" name="jumlahAyam" class="form-control">
						</div>
						<div class="form-group col-md-4">
							<label>Tanggal Masuk</label>
							<input type="date" name="tanggalMasuk" class="form-control" value="{{date('Y-m-d')}}">
						</div>
						<div class="form-group col-md-2">
							<label>Panen</label>
							<select class="form-control" name="panen">
								<option>Tidak</option>
								<option>Ya</option>
							</select>
						</div>
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