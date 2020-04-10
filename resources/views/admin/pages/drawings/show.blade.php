@extends('admin.layouts.master')

@section('pageTitle', 'Drawing')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Show Drawing</h1>

	                    <a href="{{ route('admin.drawings.edit', $drawing->id) }}" class="btn btn-primary mt-2">Edit Drawing</a>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Drawings</a></li>
	                        <li class="breadcrumb-item active"><a href="#">Show</a></li>
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
	                                {{-- Drawing --}}
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<form action="{{ route('admin.drawings.update', $drawing->id) }}" method="POST" enctype="multipart/form-data">
	                            			@csrf

	                            			<div class="row">
	                            				<div class="col-md-6">
				                                    <p><strong>Name</strong></p>
				                                    <p>{{ $drawing->renderName() }}</p>
	                            				</div>

	                            				<div class="col-md-6">
				                                    <p><strong>Date Created</strong></p>
				                                    <p>{{ $drawing->renderDateCreated() }}</p>
	                            				</div>
	                            			</div>

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                       <p><strong>Description</strong></p>
				                                    	<p>{{ $drawing->renderDescription() }}</p>
				                                    </div>
	                            				</div>
												
												<div class="col-md-6">
	                            					<div class="form-group">
				                                    	<p><strong>Category</strong></p>
				                                        <p>{{ $drawing->category->name }}</p>
				                                    </div>
	                            				</div>
											</div>
											
											<div class="row">
												<div class="col-md-6">
	                            					<div class="form-group">
				                                    	<p><strong>Image</strong></p>
				                                        <img src="{{ $drawing->renderImage() }}" alt="" width="300px" height="300px">
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