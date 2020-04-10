<!-- Portfolio Section -->
  	<section class="page-section portfolio" id="portfolio">
    	<div class="container px-0">

      		<!-- Portfolio Section Heading -->
      		<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

      		<!-- Icon Divider -->
      		<div class="divider-custom mb-5">
	        	<div class="divider-custom-line"></div>
	        
	        	<div class="divider-custom-icon">
	          		<i class="fas fa-paint-brush"></i>
	        	</div>
	        	
	        	<div class="divider-custom-line"></div>
      		</div>

      		<!-- Portfolio Grid Items -->
      		<div class="row">
			  	@foreach($categories as $category)
					<!-- Portfolio Item -->
					<div class="col-md-6 col-lg-4">
						<h3 class="text-center text-uppercase text-secondary mb-2">{{ $category->name }}</h3>

						<a href="{{ route('web.portfolio', $category->name) }}">
							<div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
								<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
									<div class="portfolio-item-caption-content text-center text-white">
										View Gallery
									</div>
								</div>
								
								<img class="img-fluid" src="{{ $category->renderCoverPhoto() }}">
							</div>
						</a>
					</div>
				@endforeach
      		</div>
      		<!-- /.row -->
    	</div>
  	</section>