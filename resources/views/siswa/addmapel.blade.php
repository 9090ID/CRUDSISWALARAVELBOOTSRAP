
	@extends('layouts.master')
	@section('content')
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Mata Pelajaran</h3>
									<div class="right">
										
									<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle" ></i></button>
								</div>
									</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Kode Mata Pelajaran</th>
												<th>Nama Mata Pelajaran</th>
												<th>Semester</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											@foreach($data_mapel as $mta)
											<tr>
											<td><a>{{$mta->kode}}</a></td>
											<td><a>{{$mta->nama}}</a></td>
											<td>{{$mta->semester}}</td>
											<td><a href="" class="btn btn-warning btn-sm">Edit</a>
												<a href="" class="btn btn-danger btn-sm" onclick="return confirm ('BENARINNI MAU DIHAPUS?')">Delete</a>
											</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="/siswa/create" method="POST" enctype="multipart/form-data">
       	{{csrf_field()}}
	  <div class="form-group{{$errors->has('nama_depan') ? 'has-error' : ''}}">
	    <label for="exampleInputEmail1">Nama Depan</label>
	    <input type="text" class="form-control" name="nama_depan" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama Depan" value="{{old('nama_depan')}}">
	    @if($errors->has('nama_depan'))
	    <span class="help-block">{{$errors->first('nama_depan')}}</span>
	    @endif
	  </div>
	  <div class="form-group">
	  <label for="exampleInputEmail1">Nama Belakang</label>
	    <input type="text" class="form-control" name="nama_belakang" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama Belakang" value="{{old('nama_belakang')}}">
	  </div>

	   <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
	  <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" value="{{old('email')}}">
	    @if($errors->has('email'))
	    <span class="help-block">{{$errors->first('email')}}</span>
	    @endif
	  </div>

	   <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
	    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
	    <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
	      <option value="L">Laki-Laki</option>
	      <option value="P">Perempuan</option>
	    </select>
	    @if($errors->has('jenis_kelamin'))
	    <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
	    @endif
  </div>
  <div class="form-group">
	  <label for="exampleInputEmail1">Agama</label>
	    <input type="text" class="form-control" name="agama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{old('agama')}}">
	  </div>
	   <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
  </div>
  <div class="form-group{{$errors->has('avatar') ? 'has-error' : ''}}">
						    <label for="exampleFormControlTextarea1">Avatar</label>
						     <input type="file" class="form-control" name="avatar" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{old('avatar')}}" >
						  </div>
						 @if($errors->has('avatar'))
	    <span class="help-block">{{$errors->first('avatar')}}</span>
	    @endif  
   </div>
 

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
      </div>
    </div>
  </div>

	@stop