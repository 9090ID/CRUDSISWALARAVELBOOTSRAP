
	@extends('layouts.master')
	@section('content')
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Posts</h3>
									<div class="right">
									<a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Add Posts</a>	
								
									</div>
									</div>
								<div class="panel-body">
									<table class="table table-striped" id="posttable">
										<thead>
											<tr>
												<th>Nomor</th>
												<th>TITLE</th>
												<th>USER</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody>
											@php
												$nomor = 1;
											@endphp
											@foreach($posts as $post)
											<tr>
											<td>{{$nomor}}</td>
											<td>{{$post->title}}</td>
											<td>{{$post->user->name}}</td>
											<td>
												<a href="{{route('site.single.post',$post->slug)}}" class="btn btn-info btn-sm" target="_blank">View</a>
												<a href="#" class="btn btn-warning btn-sm">Edit</a>
												<a href="#" class="btn btn-danger btn-sm delete" siswa-id="#">Delete</a>
											</td>
											</tr>
											@php
												$nomor ++;
											@endphp
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


	@stop
	<!--Sweet Alert-->
	@section('footer')
	<script>
	$('#posttable').DataTable();

		$('.delete').click(function(){
			var siswa_id = $(this).attr('siswa-id');
			swal({
					  title: "Yakin Mau dihapus?",
					  text: "Dihapus untuk siswa dengan id "+siswa_id + " ??",
					  icon: "warning",
					  buttons: true,
					  dangerMode: true,
					})
					.then((willDelete) => {
					console.log(willDelete);
					  
					  if (willDelete) {
					  	window.location = "/siswa/"+siswa_id+"/delete";
					  }
			});
		});
	</script>
	@stop