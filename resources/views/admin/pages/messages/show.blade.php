@extends('admin.layouts.master')

@section('pageTitle', 'Message')

@section('content')
	<div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <div class="content-header">
	        <div class="container-fluid">
	            <div class="row mb-2">
	                <div class="col-sm-6">
	                    <h1 class="m-0 text-dark">Show Message</h1>
	                </div><!-- /.col -->
	                
	                <div class="col-sm-6">
	                    <ol class="breadcrumb float-sm-right">
	                        <li class="breadcrumb-item"><a href="{{ route('admin.messages.index') }}">Messages</a></li>
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
	                                {{-- message --}}
	                            </p>

	                            <div class="row">
	                            	<div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>Sender Name</strong></p>
                                                <p>{{ $message->renderSenderName() }}</p>
                                            </div>

                                            <div class="col-md-6">
                                                <p><strong>Sender Email</strong></p>
                                                <p>{{ $message->renderSenderEmail() }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>Sender Contact Number</strong></p>
                                                <p>{{ $message->renderContactNumber() }}</p>
                                            </div>

                                            <div class="col-md-6">
                                                <p><strong>Subject</strong></p>
                                                <p>{{ $message->renderSubject() }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <p><strong>Message</strong></p>
                                                <p>{{ $message->renderMessage() }}</p>
                                                </div>
                                            </div>
                                        </div>
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