@extends('layout.base')
@section('title','Ubah Informasi Mahasiswa - LaravelBasic')

@section('container')
<div class="container mt-5">
	<div class="row" style="min-height: 85vh">
		<div class="col-md-5" style="border-right: 1px solid #ccc;border-left: 1px solid #ccc">
			<h6 class="display-3">Laravel Basic</h6>
			<h2 class="">Sistem Manajemen Data Mahasiswa</h2>
			<hr>
			Code by : Defri Alif Raihan
			<!-- <br><br><br><br><br><br><br><br><br><br><br><br> -->
		</div>
		<div class="col-md-7">
			<div class="card">
				<div class="card-header">
					<h3>Ubah Informasi Mahasiswa</h3>
				</div>
				<div class="card-body ">
					<form action="https://akuonline.host/LaravelBasic/public/mahasiswa/{{$student->id}}" method="post">
						@method('patch')
						@csrf
					  <div class="form-row">
					    <div class="form-group col-md-7">
					      <label for="nama">Nama Lengkap</label>
					      <input type="text" class="form-control" id="nama" name="nama" value="{{$student->nama}}">
					    </div>
					    <div class="form-group col-md-5">
					      <label for="nim">No. Induk Mahasiswa</label>
					      <input type="text" class="form-control" id="nim" name="nim" value="{{$student->nim}}">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="email">Email</label>
					      <input type="email" class="form-control" id="email" name="email" value="{{$student->email}}">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="prodi">Program Studi</label>
					      <input type="text" class="form-control" id="prodi" name="prodi" value="{{$student->prodi}}">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-5">
					      <label for="fakultas">Fakultas</label>
					      <input type="text" class="form-control" id="fakultas" name="fakultas" value="{{$student->fakultas}}">
					    </div>
					    <div class="form-group col-md-7">
					      <label for="universitas">Universitas</label>
					      <input type="text" class="form-control" id="universitas" name="universitas" value="{{$student->universitas}}">
					    </div>
					  </div>
					  
					
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-between align-items-center">
						<div>
							<a href="https://akuonline.host/LaravelBasic/public/" class="btn btn-sm btn-secondary"><i class="fas fa-chevron-left fa-fw"></i> Kembali</a>
						</div>
						<div>
							<button type="submit" class="btn btn-sm btn-success"> <i class="fas fa-sync"></i> Simpan Perubahan</button>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection