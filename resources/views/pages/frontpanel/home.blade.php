@extends('layouts.frontview.master')
@section('title','Home')
@section('content')
<div class="clearfix"> </div>
	<div class="container">
		<!--start-image-slider-->
		<div class="image-slider">
			<!-- Slideshow 1 -->
		    <ul class="rslides" id="slider1">
		      <li><img src="{!!url('frontview/images/boko5.jpg') !!}" alt=""></li>
		      <li><img src="{!!url('frontview/images/boko10.jpg') !!}" alt=""></li>
		      <li><img src="{!!url('frontview/images/boko1.jpg') !!}" alt=""></li>
		    </ul>
			 <!-- Slideshow 2 -->
		</div>
		<!--End-image-slider-->
		 </div>
		 <!--start-content-->
		 <div class="content">
		      <div class="container">
				 <div class="content-grids">
					 <h2>Open Arms Relief Foundation for Children and Community Development</h2>					 
					 <div class="col-md-4 contnt-grids">
						 <img src="{!!url('frontview/images/boko3.jpg') !!}" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="#">Social Issues & Charities</a></h3>							 
						 </div>
					 </div>
					 <div class="col-md-4 contnt-grids cntr">
						 <img src="{!!url('frontview/images/boko9.jpg') !!}" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="#">Education & Research</a></h3>							 
						 </div>
					 </div>
					 <div class="col-md-4 contnt-grids">
						 <img src="{!!url('frontview/images/boko10.jpg') !!}" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="#">Health Issues & Nutrition</a></h3>							 
						 </div>
					 </div>
					 <div class="clearfix"></div>
				</div>
		     </div>
	     </div>
		 <!--start-content//-->
		 <div class="recent">
			 <div class="container">
				 <div class="recent-head">
					 <h3>OUR CHARITIES</h3>
					 <p>Donec tempus justo quis justo lobortis pulvinar. Proin non ex ac ante rutrum elementum quis quis urna. Nulla facilisi.
					 Suspendisse risus lorem, bibendum id augue et, viverra vulputate odio. Vestibulum ut dolor aliquet. </p>
				 </div>
				 <div class="charitys">
					 <div class="col-md-4 chrt_grid">
						 <div class="chrty">
							  <h3>Adoption Child</h3>
							  <p>Curabitur convallis rutrum erat nec vestibulum. Sed iaculis hendrerit lectus sit amet lobortis. 
							  Suspendisse ultrices nec justo nec condimentum. Fusce vel justo sem.Donec vulputate magna finibus molestie tellus.</p>
						 </div>
					 </div>
					 <div class="col-md-4 chrt_grid middle">
						 <div class="chrty">
							  <h3>Charity actions</h3>
							  <p>Curabitur convallis rutrum erat nec vestibulum. Sed iaculis hendrerit lectus sit amet lobortis. 
							  Suspendisse ultrices nec justo nec condimentum. Fusce vel justo sem.Donec vulputate magna finibus molestie tellus.</p>
						 </div>
					 </div>
					 <div class="col-md-4 chrt_grid">
						 <div class="chrty">
							  <h3>Child Protection</h3>
							  <p>Curabitur convallis rutrum erat nec vestibulum. Sed iaculis hendrerit lectus sit amet lobortis. 
							  Suspendisse ultrices nec justo nec condimentum. Fusce vel justo sem.Donec vulputate magna finibus molestie tellus.</p>
						 </div>
					 </div>
					 <div class="clearfix"></div>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>		 
		 <!---->
		 <div class="join">
			 <div class="container">
				 <div class="col-md-9 join-info">
				 <h3>We Do A Let To Make All The Childern Of The World Happy</h3>
				 <p>Donec tempus justo quis justo lobortis pulvinar. Proin non ex ac ante rutrum elementum quis quis urna. Nulla facilisi.</p>
				 </div>
				 <div class="col-md-3 join-link">
				 <a href="{!!url('/donate')!!}">Donate</a>
				 </div>
				 <div class="clearfix"></div>
			 </div>
		 </div>
		 <!---->
		 <div class="featured">
			 <div class="container">
			 <div class="project_grids">
				 <div class="col-md-4 project1 fetur">
					 <h3>FEATURED PROJECTS</h3>
					 <img src="{!! url('frontview/images/r1.jpg') !!}" class="img-responsive" alt=""/>
					 <p>Cras malesuada aliquet lorem, ac varius arcu mattis egestas. Sed molestie tincidunt ex, ac finibus felis porttitor id. Fusce eleifend magna eget nibh pharetra condimentum sit amet molestie erat.</p>
				 </div>
				 <div class="col-md-4 project2 fetur">
					 <h3>NEWS & EVENTS</h3>
					 <div class="event">
						 <h5><a href="#">12 November, 2014</a></h5>
						 <p>Etiam efficitur porttitor tortor nec accumsan. Mauris et orci ante. Ut sed tortor rhoncus massa accumsan egestas. Sed fringilla at mauris sed ullamcorper.</p>
					 </div>
					 <div class="event">
						 <h5><a href="#">12 November, 2014</a></h5>
						 <p>Etiam efficitur porttitor tortor nec accumsan. Mauris et orci ante. Ut sed tortor rhoncus massa accumsan egestas. Sed fringilla at mauris sed ullamcorper.</p>
					 </div>
					 <div class="event">
						 <h5><a href="#">12 November, 2014</a></h5>
						 <p>Etiam efficitur porttitor tortor nec accumsan. Mauris et orci ante. Ut sed tortor rhoncus massa accumsan egestas. Sed fringilla at mauris sed ullamcorper.</p>
					 </div>
				 </div>
				 <div class="col-md-4 project3 fetur">
					 <h3>PROGRAM AREAS</h3>
					 <ul>
						 <li><a href="#">> Child Protection</a></li>
						 <li><a href="#">> Health and Nutrition</a></li>
						 <li><a href="#">> HIV/AIDS</a></li>
						 <li><a href="#">> Livelihoods</a></li>
						 <li><a href="#">> Kidsave International</a></li>
						 <li><a href="#">> Union Rescue Mission</a></li>
						 <li class="last"><a href="#">> Child Attivities</a></li>
				     </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
			 </div>
		 </div>
		 <!---->
@stop