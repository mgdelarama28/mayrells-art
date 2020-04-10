@extends('admin.layouts.master')

@section('pageTitle', 'Sample')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Add Sample</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Samples</a></li>
	                        <li class="breadcrumb-item active"><a href="#">Create</a></li>
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
	                                Sample
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<form action="{{ route('admin.samples.store') }}" method="POST" enctype="multipart/form-data">
	                            			@csrf

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="name">Name</label>
				                                        <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}" required>
				                                    </div>
	                            				</div>

	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="image_path">Image</label>
				                                        <input name="image_path" type="file" class="form-control" id="image_path" placeholder="Image" value="{{ old('image') }}">
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="description">Description</label>
				                                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row">
												<div class="col-md-1">
		                            				<div class="form-group">
		                            					<button class="btn btn-primary form-control">Submit</button>
		                            				</div>
	                            				</div>
	                            			</div>
	                            		</form>
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