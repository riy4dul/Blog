@extends('backend.layouts.master')
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-rose card-header-icon">
						{{--<a href="{{route('item.create')}}" class="btn btn-info btn-md">Add New</a>--}}
						@include('backend.layouts.msg')
						<h3 class="card-title text-center">ALL Post</h3>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="datatables" class="table">
								<thead>
									<tr>
										<th>ID</th>
		                                <th>Title</th>
		                                <th>Image</th>
		                                {{--<th>Category</th>--}}
		                                <th>Description</th>
										<th>Status</th>
		                                <th>Time</th>
		                                <th class="disabled-sorting text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($posts as $key=>$post)
									<tr>
										<td>{{$key + 1}}</td>
										<td>{{$post->title}}</td>
										<td><img src="{{asset('backend/img/post/'.$post->image)}}" alt="" height="50px" width="100"></td>
										{{--<td>{{$post->name}}</td>--}}
										<td>{{$post->description}}</td>
										<td>
											@if($post->status == true)
												<button class="btn btn-success btn-sm">Active</button>
											@else
												<button class="btn btn-danger btn-sm">Inactive</button>
											@endif
										</td>
										<td>{{$post->created_at->format('d M Y')}}</td>
										<td class="td-actions text-right">
											<a href="{{route('postEdit',$post->id)}}" class="btn btn-success"><i class="material-icons">edit</i></a>
											<form id="delete-form-{{ $post->id }}" action="{{ route('postDestroy',$post->id) }}" style="display: none;" method="POST">
												@csrf
												{{--@method('DELETE')--}}
											</form>
											<button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
											event.preventDefault();
											document.getElementById('delete-form-{{ $post->id }}').submit();
											}else {
											event.preventDefault();
											}"><i class="material-icons">delete</i></button>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
				</div> <!-- end col-md-12 -->
				</div> <!-- end row -->
			</div>
		</div>
		@endsection