@extends('admin.layouts.master')

@section('pageTitle', 'Drawings')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Add Drawing</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="#">Drawings</a></li>
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
	                                Drawing
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
	                            		<form action="{{ route('admin.drawings.store') }}" method="POST" enctype="multipart/form-data">
	                            			@csrf

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="name">Name</label>
				                                        <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{ old('name') }}">
				                                    </div>
	                            				</div>

	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="category_id">Category</label>
				                                        <select name="category_id" id="category_id" class="form-control">
				                                        	@foreach($categories as $category)
																<option value="{{ $category->id }}">{{ $category->renderName() }}</option>
				                                        	@endforeach
				                                        </select>
				                                    </div>
	                            				</div>
	                            			</div>

	                            			<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="date_created">Date created</label>
				                                        <input type="date" id="date_created" name="date_created" class="form-control" placeholder="Date created">
				                                    </div>
	                            				</div>

	                            				<div class="col-md-6">
	                            					<div class="form-group">
				                                        <label for="image_path">Image</label><br>
														<img id="image" src="{{ asset('storage/default-images/no-image.png') }}" alt="" width="100px" height="100px">
				                                        <input name="image_path" type="file" class="form-control mt-2" id="image_path" placeholder="Image" value="{{ old('image') }}">
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

@section('scripts')
	<script>
		$(document).ready(function(){
			$('#image_path').change(function() {
				var input = this;
			    var url = $(this).val();
			    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();

			    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) 
			     {
			        var reader = new FileReader();

			        reader.onload = function (e) {
			           $('#image').attr('src', e.target.result);
			        }

			       reader.readAsDataURL(input.files[0]);
			    } else
			    {
			      $('#image').attr('src', '/storage/no_image.png');
			    }
			});
		});
	</script>
@endsection