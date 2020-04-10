@extends('web.layouts.portfolio')

@section('pageTitle', 'Baybayin')

<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">{{ $category->name }}</h1>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
            <div class="divider-custom-line"></div>
        </div>
    </div>
</header>

<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Grid Items -->
        <div class="row">
            @foreach ($drawings as $drawing)
                <!-- Portfolio Item -->
                <div class="col-md-6 col-lg-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal{{ $drawing->id }}">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white">
                                <i class="fas fa-eye fa-3x"></i>
                            </div>
                        </div>
                        
                        <img class="img-fluid" src="{{ $drawing->renderImage() }}" alt="{{ $drawing->renderName() }}">
                    </div>
                </div>

                <!-- Portfolio Modal 1 -->
                <div class="portfolio-modal modal fade" id="portfolioModal{{ $drawing->id }}" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="fas fa-times"></i>
                                </span>
                            </button>

                            <div class="modal-body text-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title -->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $drawing->renderName() }}</h2>

                                            <!-- Icon Divider -->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                
                                                <div class="divider-custom-icon">
                                                    <i class="fas fa-paint-brush"></i>
                                                </div>
                                                
                                                <div class="divider-custom-line"></div>
                                            </div>

                                            <!-- Portfolio Modal - Image -->
                                            <img class="img-fluid rounded mb-5" src="{{ $drawing->renderImage() }}" alt="{{ $drawing->renderName() }}">
                                            
                                            <!-- Portfolio Modal - Text -->
                                            <p>{{ $drawing->renderDescription() }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- /.row -->
    </div>
</section>