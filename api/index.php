<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
<?php 
	include_once 'lib/api.php';
?>
<!-- homev206:52-->
<head>
	<!-- Basic need -->
	<title>Layarkaca21 | Gratisss</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--preloading -->
<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!-- end of preloading-->
<!--login form popup-->
<?php // include_once 'pages/section/login.php'?>
<!--end of login form popup-->
<!--signup form popup-->
<?php // include_once 'pages/section/register.php' ?>
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<?php // include_once 'pages/section/header.php' ?>
<!-- END | Header -->

<div class="slider sliderv2">
	<div class="container">
		<div class="row">
	    	<div class="slider-single-item">
	    		<div class="movie-item">
					<?php 
						$seriesById = fetchDataFromApi('series/avatar-the-last-airbender-2024');
					?>
	    			<div class="row">
	    				<div class="col-md-8 col-sm-12 col-xs-12">
	    					<div class="title-in">
			    				<div class="cate">
			    					<span class="blue"><a href="#"><?=$seriesById['genres'][0]?></a></span>
			    					<span class="yell"><a href="#"><?=$seriesById['genres'][1]?></a></span>
			    					<span class="orange"><a href="#"><?=$seriesById['genres'][2]?></a></span>
			    				</div>
			    				<h1><a href="#"><?=$seriesById['title']?><!--<span>2015</span>--></a></h1>
								<div class="social-btn">
									<a href="<?=$seriesById['trailerUrl']?>" target="_blank" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
									<a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
									<div class="hover-bnt">
										<a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
										<div class="hvr-item">
											<a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
											<a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
										</div>
									</div>		
								</div>
			    				<div class="mv-details">
			    					<p><i class="ion-android-star"></i><span><?=$seriesById['rating']?></span> /10</p>
			    					<ul class="mv-infor">
			    						<li>  Episode: <?=$seriesById['seasons'][0]['totalEpisodes']?> </li>
			    						<li>  Status: <?=$seriesById['status']?> </li>
			    						<li>  Release: <?=$seriesById['releaseDate']?></li>
			    					</ul>
			    				</div>
			    				<div class="btn-transform transform-vertical">
									<div><a href="seriessingle.php?id=<?=$seriesById['_id']?>" class="item item-1 redbtn">more detail</a></div>
									<div><a href= "seriessingle.php?id=<?=$seriesById['_id']?>" class="item item-2 redbtn hvrbtn">more detail</a></div>
								</div>		
			    			</div>
	    				</div>
	    				<div class="col-md-4 col-sm-12 col-xs-12">
		    				<div class="mv-img-2">
			    				<a href="#"><img src="<?=$seriesById['posterImg']?>" alt="<?=$seriesById['title']?>"></a>
			    			</div>
		    			</div>
	    			</div>	
	    		</div>
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>in series</h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links">
					<li class="active"><a href="#tab1-h2">#Popular</a></li>
					<li><a href="#tab2-h2"> #Coming soon</a></li>
					<!--<li><a href="#tab3-h2">  #Top rated  </a></li>
					<li><a href="#tab4-h2"> #Most reviewed</a></li>  -->                      
				</ul>
			    <div class="tab-content">
			        <div id="tab1-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								<?php 
									$listSeries = fetchDataFromApi('popular/series');
									foreach ($listSeries as $item){
								?>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="<?=$item['posterImg']?>" alt="<?=$item['title']?>">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="seriessingle.php?id=<?=$item['_id']?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#"><?=$item['title']?></a></h6>
				            				<p><i class="ion-android-star"></i><span><?=$item['rating']?></span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								<?php } ?>
			            	</div>
			            </div>
			        </div>
					<!-- 
			        <div id="tab2-h2" class="tab">
			           <div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
			        </div>
			        <div id="tab3-h2" class="tab">
			        	<div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it1.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								<div class="slide-it">
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it2.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
								</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it3.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
		       	 	</div>
		       	 	 <div id="tab4-h2" class="tab">
			        	<div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
		       	 	</div> -->
			    </div>
			</div>
			<!-- <div class="title-hd">
				<h2>on tv</h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links-2">
					<li class="active"><a href="#tab21-h2">#Popular</a></li>
					<li><a href="#tab22-h2"> #Coming soon</a></li>
					<li><a href="#tab23-h2">  #Top rated  </a></li>
					<li><a href="#tab24-h2"> #Most reviewed</a></li>                        
				</ul>
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
								<div class="slide-it">
									<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The revenant</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
								</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it9.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
			        </div>
			        <div id="tab22-h2" class="tab">
			           <div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
			        </div>
			        <div id="tab23-h2" class="tab">
			        	<div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="movie-item">
			            			<div class="mv-img">
			            				<img src="images/uploads/mv-it1.jpg" alt="">
			            			</div>
			            			<div class="hvr-inner">
			            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
			            			</div>
			            			<div class="title-in">
			            				<h6><a href="#">Interstellar</a></h6>
			            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			            			</div>
			            		</div>
								<div class="movie-item">
			            			<div class="mv-img">
			            				<img src="images/uploads/mv-it2.jpg" alt="">
			            			</div>
			            			<div class="hvr-inner">
			            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
			            			</div>
			            			<div class="title-in">
			            				<h6><a href="#">The revenant</a></h6>
			            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			            			</div>
			            		</div>
			            		<div class="movie-item">
			            			<div class="mv-img">
			            				<img src="images/uploads/mv-it3.jpg" alt="">
			            			</div>
			            			<div class="hvr-inner">
			            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
			            			</div>
			            			<div class="title-in">
			            				<h6><a href="#">Die hard</a></h6>
			            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			            			</div>
			            		</div>
			            		<div class="movie-item">
			            			<div class="mv-img">
			            				<img src="images/uploads/mv-it4.jpg" alt="">
			            			</div>
			            			<div class="hvr-inner">
			            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
			            			</div>
			            			<div class="title-in">
			            				<h6><a href="#">The walk</a></h6>
			            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			            			</div>
			            		</div>
			            		<div class="movie-item">
			            			<div class="mv-img">
			            				<img src="images/uploads/mv-it3.jpg" alt="">
			            			</div>
			            			<div class="hvr-inner">
			            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
			            			</div>
			            			<div class="title-in">
			            				<h6><a href="#">Die hard</a></h6>
			            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
			            			</div>
			            		</div>
			            	</div>
			            </div>
		       	 	</div>
		       	 	 <div id="tab24-h2" class="tab">
			        	<div class="row">
			            	<div class="slick-multiItem2">
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it4.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">The walk</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it5.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it6.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Interstellar</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it7.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="slide-it">
			            			<div class="movie-item">
				            			<div class="mv-img">
				            				<img src="images/uploads/mv-it8.jpg" alt="">
				            			</div>
				            			<div class="hvr-inner">
				            				<a  href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i> </a>
				            			</div>
				            			<div class="title-in">
				            				<h6><a href="#">Die hard</a></h6>
				            				<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </div>
		       	 	</div>
			    </div> -->
			</div>
		</div>
	</div>
</div>

<!-- <div class="trailers full-width">
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="title-hd">
					<h2>in spotlight</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
					   <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/1Q8fG0TtVAY"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/w0qQkSuWOS8"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/44LdLqgOpjo"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/gbug3zTm3Ws"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/e3Nl_TCQXuw"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/NxhEZG0k9_w"></iframe>
					    </div>

					</div>
					<div class="slider-nav-2 thumb-ft">
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer7.jpg"  alt="photo by Barn Images" width="4096" height="2737">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Wonder Woman</h4>
	                        	<p>2:30</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer2.jpg"  alt="photo by Barn Images" 	width="350" height="200">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Oblivion: Official Teaser Trailer</h4>
	                        	<p>2:37</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer6.jpg" alt="photo by Joshua Earle" width="509" height="301">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Exclusive Interview:  Skull Island</h4>
	                        	<p>2:44</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer3.png" alt="photo by Alexander Dimitrov" width="100" height="56">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Logan: Director James Mangold Interview</h4>	
	                        	<p>2:43</p>
	                        </div>
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer4.png"  alt="photo by Wojciech Szaturski" width="100" height="56">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Beauty and the Beast: Official Teaser Trailer 2</h4>	
	                        	<p>2: 32</p>
	                        </div>	
						</div>
						<div class="item">
							<div class="trailer-img">
								<img src="images/uploads/trailer5.jpg"  alt="photo by Wojciech Szaturski" width="360" height="189">
							</div>
							<div class="trailer-infor">
	                        	<h4 class="desc">Fast&Furious 8</h4>	
	                        	<p>3:11</p>
	                        </div>	
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="celebrities">
						<h4 class="sb-title">Spotlight Celebrities</h4>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava1.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Samuel N. Jack</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava2.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Benjamin Carroll</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava3.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Beverly Griffin</a></h6>
								<span>Actor</span>
							</div>
						</div>
						<div class="celeb-item">
							<a href="#"><img src="images/uploads/ava4.jpg" alt="" width="70" height="70"></a>
							<div class="celeb-author">
								<h6><a href="#">Justin Weaver</a></h6>
								<span>Actor</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
</div> -->
<!-- latest new v2 section-->
<div class="latestnew full-width">
		<div class="row">
			<div class="col-md-12">
				<!--
				<div class="ads adsv2">
					<img src="images/uploads/ads2.png" alt="">
				</div>
				-->
				<div class="title-hd">
					<h2>Latest news</h2>
					<a href="bloggrid.html" class="viewall">see all news <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="latestnewv2">
					<div class="blog-item-style-2">
						<a href="blogdetail.html"><img src="images/uploads/blogv21.jpg" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="blogdetail.html">Godzilla: King Of The Monsters Adds O’Shea Jackson Jr</a></h3>
							<span class="time">27 Mar 2017</span>
							<p>Looks like Kong: Skull Island started a tradition with its casting of Straight ...</p>
						</div>
					</div>
					<div class="blog-item-style-2">
						<a href="blogdetail.html"><img src="images/uploads/blogv22.jpg" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="blogdetail.html">First Official Images of Alicia Vikander As Tomb Raider’s Lara Croft</a></h3>
							<span class="time">27 Mar 2017</span>
							<p>Aside from the her digital incarnation, the most recognisable image of Tomb ...</p>
						</div>
					</div>
					<div class="blog-item-style-2">
						<a href="blogdetail.html"><img src="images/uploads/blogv23.jpg" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="blogdetail.html">New Spider-Man: Homecoming Poster Finds Peter Parker At Rest</a></h3>
							<span class="time">27 Mar 2017</span>
							<p>He might be a primary protector of New York City, but at heart, Peter Parker is ...</p>
						</div>
					</div>
					<div class="blog-item-style-2">
						<a href="blogdetail.html"><img src="images/uploads/blogv24.jpg" alt=""></a>
						<div class="blog-it-infor">
							<h3><a href="blogdetail.html">Joseph Gordon-Levitt Directing Moive Musical Comedy Wingmen</a></h3>
							<span class="time">27 Mar 2017</span>
							<p>A little over a year ago, we learned that Joseph Gordon-Levitt and Channing ...</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="sidebar">
					<!--
					<div class="sb-facebook sb-it">
						<h4 class="sb-title">Find us on Facebook</h4>
						<iframe src="#" data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftemplatespoint.net%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"  height="315" style="width:100%;border:none;overflow:hidden" ></iframe>
					</div>
					<div class="sb-twitter sb-it">
						<h4 class="sb-title">Tweet to us</h4>
						<div class="slick-tw">
							<div class="tweet item" id=""> 
							</div>
							<div class="tweet item" id="">
							</div>
						</div>					
					</div> -->
				</div>
			</div>
		</div>
	
</div>
<!--end of latest new v2 section-->
<!-- footer v2 section-->
<footer class="ht-footer full-width-ft">
	<div class="row">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
				 <p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
		<div class="ft-copyright">
			<div class="ft-left">
				<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
			</div>
			<div class="backtotop">
				<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
			</div>
		</div>
	</div>
</footer>
<!-- end of footer v2 section-->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>

<!-- homev207:28-->
</html>