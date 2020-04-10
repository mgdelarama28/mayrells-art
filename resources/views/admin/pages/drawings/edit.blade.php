@extends('admin.layouts.master')

@section('pageTitle', 'Drawing')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Edit Drawing</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Drawings</a></li>
	                        <li class="breadcrumb-item active"><a href="#">Edit</a></li>
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
	                                Drawing
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<form action="{{ route('admin.drawings.update', $drawing->id) }}" method="POST" enctype="multipart/form-data">
	                            			@csrf

	                            			<div class="row mb-2">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="name">Name</label>
				                                        <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{ $drawing->name }}">
				                                    </div>
												</div>
												
												<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="category_id">Category</label>
				                                        <select class="form-control" name="category_id" id="category_id">
															@foreach($categories as $category)
																@if($category->id == $drawing->category_id)
																	<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
																@else
																	<option value="{{ $category->id }}">{{ $category->name }}</option>
																@endif

															@endforeach
														</select>
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row mb-2">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="description">Description</label>
				                                        <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Description">{{ $drawing->description }}</textarea>
				                                    </div>
												</div>
												
												<div class="col-md-6">
	                            					<div class="form-group">
	                            						<label for="date_created">Date Created</label>
														<input type="date" name="date_created" id="date_created" class="form-control mt-2" value="{{ $drawing->date_created }}">
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row mb-2">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
	                            						<label for="image_path">Image</label><br>
				                                        <img src="{{ $drawing->renderImage() }}" alt="" width="300px" height="300px">
				                                        <input type="file" name="image_path" id="image_path" class="form-control mt-2">
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row mb-2">
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

@section('scripts')
	<script>
		$(document).ready(function(){
			$('#profile_picture_path').change(function() {
				var input = this;
			    var url = $(this).val();
			    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();

			    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
			     {
			        var reader = new FileReader();

			        reader.onload = function (e) {
			           $('#profile_picture').attr('src', e.target.result);
			        }

			       reader.readAsDataURL(input.files[0]);
			    } else
			    {
			      $('#profile_picture').attr('src', '/storage/no_image.png');
			    }
			});
		});
	</script>
@endsection