@extends('layout.base')
@section('title','Informasi Mahasiswa - LaravelBasic')

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
					<h3>Informasi Mahasiswa</h3>
				</div>
				<div class="card-body ">
					<dl class="row">
					  <dt class="col-sm-6 text-right">Nama Lengkap</dt>
					  <dd class="col-sm-6">{{$student->nama}}</dd>

					  <dt class="col-sm-6 text-right">No. Induk Mahasiswa</dt>
					  <dd class="col-sm-6">{{$student->nim}}</dd>

					  <dt class="col-sm-6 text-right">Email</dt>
					  <dd class="col-sm-6">{{$student->email}}</dd>

					  <dt class="col-sm-6 text-right">Program Studi</dt>
					  <dd class="col-sm-6">{{$student->prodi}}</dd>

					  <dt class="col-sm-6 text-right">Fakultas</dt>
					  <dd class="col-sm-6">{{$student->fakultas}}</dd>

					  <dt class="col-sm-6 text-right">Universitas</dt>
					  <dd class="col-sm-6">{{$student->universitas}}</dd>
					</dl>
				</div>
				<div class="card-footer">
					<div class="d-flex justify-content-between align-items-center">
						<div>
							<a href="https://akuonline.host/LaravelBasic/public/" class="btn btn-sm btn-secondary"><i class="fas fa-chevron-left fa-fw"></i> Kembali</a>
						</div>
						<div>
							<a href="https://akuonline.host/LaravelBasic/public/mahasiswa/{{$student->id}}/edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit fa-fw"></i> Ubah</a>
							<form class="d-inline" action="https://akuonline.host/LaravelBasic/public/mahasiswa/{{$student->id}}" method="post">
								@method('delete')
		                        @csrf
								<button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash fa-fw"></i> Hapus</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection