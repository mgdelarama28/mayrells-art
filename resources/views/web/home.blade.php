@extends('web.layouts.app')


@section('content')
	<header id="home" class="masthead bg-primary text-white text-center">
	    <div class="container d-flex align-items-center flex-column">

			@if(session('success'))
				<div class="text-center alert alert-success">{{ session('success') }}</div>
			@endif

	        <!-- Masthead Avatar Image -->
	        <img class="masthead-avatar mb-5" id="profile-picture" src="{{ $user->renderProfilePicture() }}" alt="Profile Picture">

	        <!-- Masthead Heading -->
	        <h1 class="masthead-heading text-uppercase mb-0">Mayrell Joyce Mandac</h1>

	        <!-- Icon Divider -->
	        <div class="divider-custom divider-light">
	            <div class="divider-custom-line"></div>
	                <div class="divider-custom-icon">
	                    <i class="fas fa-paint-brush"></i>
	                </div>
	            <div class="divider-custom-line"></div>
	        </div>

	        <!-- Masthead Subheading -->
	        <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Calligrapher - Illustrator</p>
	  	</div>
	</header>

	@include('web.includes.sections.portfolio')

	@include('web.includes.sections.about')

  	@include('web.includes.sections.contact')
@endsection