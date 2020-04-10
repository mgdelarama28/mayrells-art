@extends('admin.layouts.master')

@section('pageTitle', 'Messages')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Messages</h1>

	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.messages.index') }}">Messages</a></li>
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
	                                Messages
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
	                            		<table id="messages" class="table table text-center">
						            		<thead>
						            			<tr>
						            				<th>ID</th>
						            				<th>Sender Name</th>
						            				<th>Sender Email</th>
                                                    <th>Subject</th>
						            				<th>Actions</th>
						            			</tr>
						            		</thead>

						            		<tbody>
						            			@foreach($messages as $message)
													<tr>
														<td>{{ $message->id }}</td>
														<td>{{ $message->renderSenderName() }}</td>
														<td>{{ $message->renderSenderEmail() }}</td>
														<td>{{ $message->renderSubject() }}</td>
														<td>
															<a href="{{ route('admin.messages.show', $message->id) }}" class="btn btn-primary"><i class="far fa-eye"></i></a>
															<a href="{{ route('admin.messages.destroy', $message->id) }}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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
			$('#messages').dataTable();
		});
	</script>
@endsection