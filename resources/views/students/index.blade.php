@extends('layout.base')
@section('title','Mahasiswa - LaravelBasic')

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
				<div class="card-body ">
					<table class="table table-borderless ">
					  <thead>
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Nama lengkap</th>
					      <th scope="col" class="text-right"><a href="https://akuonline.host/LaravelBasic/public/mahasiswa/tambah" class="btn btn-sm btn-outline-primary" style="border-radius: 0px 15px ">Tambah Mahasiswa <i class="fas fa-plus fa-fw"></i></a></th>
					    </tr>
					  </thead>
					  <tbody>
					  	@foreach ($students as $key => $student)
					    <tr>
					      <th scope="row">{{$key+1}}</th>
					      <td>{{$student->nama}}</td>
					      <td class="text-right"><a href="https://akuonline.host/LaravelBasic/public/mahasiswa/{{$student->id}}" class="btn btn-sm btn-outline-info" style="border-radius: 15px 0px">Detail <i class="fas fa-info fa-fw"></i></a></td>
					    </tr>
					    @endforeach
					  </tbody>
					</table>
				</div>
		</div>
	</div>
</div>
@endsection