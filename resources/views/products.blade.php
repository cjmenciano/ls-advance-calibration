@extends('layouts.app')

@section('content')
<!-- Breadcrumbs -->
		<div class="breadcrumbs overlay">
			<div class="container">
				<div class="bread-inner">
					<div class="row">
						<div class="col-12">
							<h2>Products</h2>
							<ul class="bread-list">
								<li><a href="index.html">Home</a></li>
								<li><i class="icofont-simple-right"></i></li>
								<li class="active">Products</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
<!-- Pricing Table -->
		<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Product In Resonable Price</h2>
							<img src="img/section-img.png" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					<div class="col-lg-3 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<img src="img/product1.jpg" alt="#">
								</div>
								<h4 class="title">Topcon Digital Theodolite</h4>
								<!--<div class="price">
									<p class="amount"><i class="icofont-peso"></i>45,000.00<span></span></p>
								</div>-->
							</div>
							<div class="table-bottom">
								<a class="btn" href="#">View Details</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
                    <!-- Single Table -->
					<div class="col-lg-3 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<img src="img/product2.jpg" alt="#">
								</div>
								<h4 class="title">Engineering Transit</h4>
								<!--<div class="price">
									<p class="amount"><i class="icofont-peso"></i>25,000.00<span></span></p>
								</div>-->	
							</div>
							<div class="table-bottom">
								<a class="btn" href="#">View Details</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
                    <!-- Single Table -->
					<div class="col-lg-3 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<img src="img/product3.jpg" alt="#">
								</div>
								<h4 class="title">Topcon Digital Total Station</h4>
								<!--<div class="price">
									<p class="amount"><i class="icofont-peso"></i>65,000.00<span></span></p>
								</div>-->	
							</div>
							<div class="table-bottom">
								<a class="btn" href="pdf/product3_manual.pdf" target="_blank">View Details</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
                    <!-- Single Table -->
					<div class="col-lg-3 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<img src="img/product4.jpg" alt="#">
								</div>
								<h4 class="title">6kg Digital Platform Balance</h4>
								<!--<div class="price">
									<p class="amount"><i class="icofont-peso"></i>8,000.00<span></span></p>
								</div>-->	
							</div>
							<div class="table-bottom">
								<a class="btn" href="#">View Details</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
                    <!-- Single Table -->
					<div class="col-lg-3 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<img src="img/product5.jpg" alt="#">
								</div>
								<h4 class="title">3kg Digital Platform Balance</h4>
								<!--<div class="price">
									<p class="amount"><i class="icofont-peso"></i>4,000.00<span></span></p>
								</div>-->	
							</div>
							<div class="table-bottom">
								<a class="btn" href="#">View Details</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
                </div>
            </div>
        </div>
    </section>
@endsection
