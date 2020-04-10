@extends('admin.layouts.master')

@section('pageTitle', 'Drawings')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Drawings</h1>

	                    <a href="{{ route('admin.drawings.create') }}" class="btn btn-primary mt-2"><i class="nav-icon fa fa-plus"></i> Add Drawing</a>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Drawings</a></li>
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
	                                Drawings
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
	                            		<table id="drawings" class="table table text-center">
						            		<thead>
						            			<tr>
						            				<th>ID</th>
						            				<th>Category</th>
						            				<th>Image</th>
						            				<th>Name</th>
						            				<th>Description</th>
						            				<th>Actions</th>
						            			</tr>
						            		</thead>

						            		<tbody>
						            			@foreach($drawings as $drawing)
													<tr>
														<td>{{ $drawing->id }}</td>
														<td>{{ $drawing->category->renderName() }}</td>
														<td><img src="{{ $drawing->renderImage() }}" alt="" height="100px" width="100px"></td>
														<td>{{ $drawing->name }}</td>
														<td>{{ $drawing->description }}</td>
														<td>
															<a href="{{ route('admin.drawings.show', $drawing->id) }}" class="btn btn-primary"><i class="far fa-eye"></i></a>
															<a href="{{ route('admin.drawings.edit', $drawing->id) }}" class="btn btn-primary"><i class="far fa-edit"></i></a>
															<a href="{{ route('admin.drawings.destroy', $drawing->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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
			$('#drawings').dataTable();
		});
	</script>
@endsection