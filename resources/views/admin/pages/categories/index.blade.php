@extends('admin.layouts.master')

@section('pageTitle', 'Category')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Categories</h1>

	                    {{-- <a href="{{ route('admin.samples.create') }}" class="btn btn-primary mt-2"><i class="nav-icon fa fa-plus"></i> Add Category</a> --}}
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Category</a></li>
	                        <li class="breadcrumb-item active"><a href="#">Index</a></li>
	                    </ol>
	                </div><!-- /.col -->
	            </div><!-- /.row -->
	        </div><!-- /.container-fluid -->
	    </div>
	    <!-- /.content-header -->

	    <!-- Main content -->
	    <div class="content">
	        <div class="container-fluid">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="card card-primary card-outline">
	                        <div class="card-body">
	                            <p class="card-text">
	                                Categories
								</p>
								
								@if(session('success'))
									<div class="alert alert-success text-center">
										{{ session('success') }}
									</div>
								@endif

								@if(session('delete'))
									<div class="alert alert-danger text-center">
										{{ session('delete') }}
									</div>
								@endif

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<table id="categories" class="table table text-center">
						            		<thead>
						            			<tr>
						            				<th>ID</th>
						            				<th>Cover Photo</th>
						            				<th>Name</th>
						            				<th>Actions</th>
						            			</tr>
						            		</thead>

						            		<tbody>
						            			@foreach($categories as $category)
													<tr>
														<td>{{ $category->id }}</td>
														<td><img src="{{ ($category->renderCoverPhoto()) }}" alt="Cover Photo" height="100px" width="100px"></td>
														<td>{{ $category->name }}</td>
														<td>
															<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
															<a href="{{ route('admin.categories.destroy', $category->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
														</td>
													</tr>
						            			@endforeach
						            		</tbody>
						            	</table>
	                            	</div>
	                            	<!-- /.col-md-12 -->
					            </div>
					            <!-- /.row -->
	                        </div>
	                    </div>
	                    <!-- /.card -->
	                </div>
	                <!-- /.col-md-12 -->
	            </div>
	            <!-- /.row -->
	        </div>
	        <!-- /.container-fluid -->
	    </div>
	    <!-- /.content -->
	</div>
@endsection

@section('scripts')
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#categories').dataTable();
		});
	</script>
@endsection