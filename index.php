<?php require_once('config.php') ?>
<?php include('public_function.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

<title>Express News a Entertainment Category Flat Bootstarp responsive Website Template | Home :: w3layouts</title>
</head>
<body>


	<!-- header-section-starts-here -->

	<?php include( ROOT_PATH . '/includes/navbar.php') ?>
	<!-- header-section-ends-here -->




	<div class="wrap">
		<div class="move-text">
			<div class="breaking_news">
				<h2>Breaking News</h2>
			</div>
			<div class="marquee">
				<div class="marquee1"><a class="breaking" href="single.html">>>The standard chunk of Lorem Ipsum used since the 1500s is reproduced..</a></div>
				<div class="marquee2"><a class="breaking" href="single.html">>>At vero eos et accusamus et iusto qui blanditiis praesentium voluptatum deleniti atque..</a></div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
			<script>
			  $('.marquee').marquee({ pauseOnHover: true });
			  //@ sourceURL=pen.js
			</script>
		</div>
	</div>
	<!-- content-section-starts-here -->
	<div class="main-body">
		<div class="wrap">
			<div class="col-md-8 content-left">
				<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
							<li>
								<img src="images/3.jpg" alt="">
								<div class="caption">
									<a href="single.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a>
								</div>
							</li>
							<li>
								<img src="images/2.jpg" alt="">
								<div class="caption">
									<a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</a>
								</div>
							</li>
							<li>
								<img src="images/1.jpg" alt="">
								<div class="caption">
									<a href="single.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="articles">
					<header>
						<h3 class="title-head">All around the world</h3>
					</header>
					<?php foreach ($posts as $post): ?>
					    <div class="article">
						    <div class="article-left">
							    <a href="single.php?post-slug=<?php echo $post['slug']; ?>"><img src="<?php echo BASE_URL.'/images/'.$post['image']; ?>"></a>
						    </div>
						    <div class="article-right">
							    <div class="article-title">
								    <p><?php echo date("F j, Y ", strtotime($post["created_at"])); ?> <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>104 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>52</a></p>
								    <?php if (isset($post['topic']['name'])): ?>
			                            <a
				                            href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>">
				                            <?php echo $post['topic']['name'] ?>
			                            </a>
		                            <?php endif ?>
								    <a class="title" href="single.php"><?php echo $post['title'] ?></a>
							    </div>
							    <div class="article-text">
								    <p>The standard chunk of Lorem Ipsum used since the 1500s. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" exact original.....</p>
								    <a href="single.html"><img src="images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							   </div>
						    </div>
						    <div class="clearfix"></div>
						</div>
				    <?php endforeach?>

					<div class="article">
						<div class="article-left">
							<iframe width="100%" src="https://www.youtube.com/embed/mbDg4OG7z4Y" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="article-right">
							<div class="article-title">
								<p>On Apr 11, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>54 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>18</a></p>
								<a class="title" href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random</a>
							</div>
							<div class="article-text">
								<p>It is a long established fact that a reader will be distracted by the readable.....</p>
								<a href="single.html"><img src="images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="article">
						<div class="article-left">
							<a href="single.html"><img src="images/article3.jpg"></a>
						</div>
						<div class="article-right">
							<div class="article-title">
								<p>On Jun 21, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>181 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>89</a></p>
								<a class="title" href="single.html">There are many variations that focuses on presenting</a>
							</div>
							<div class="article-text">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.....</p>
								<a href="single.html"><img src="images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="article">
						<div class="article-left">
							<iframe width="100%" src="https://www.youtube.com/embed/GxXxvJYUpxk" frameborder="0" allowfullscreen></iframe>
						</div>
						<div class="article-right">
							<div class="article-title">
								<p>On Mar 14, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
								<a class="title" href="single.html">On the other hand, we denounce with righteous indignation</a>
							</div>
							<div class="article-text">
								<p>It is a long established fact that a reader will be distracted by the readable.....</p>
								<a href="single.html"><img src="images/more.png" alt="" /></a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="life-style">
					<header>
						<h3 class="title-head">Life Style</h3>
					</header>
					<div class="life-style-grids">
						<div class="life-style-left-grid">
							<a href="single.html"><img src="images/l1.jpg" alt="" /></a>
							<a class="title" href="single.html">It is a long established fact that a reader will be distracted.</a>
						</div>
						<div class="life-style-right-grid">
							<a href="single.html"><img src="images/l2.jpg" alt="" /></a>
							<a class="title" href="single.html">There are many variations of passages of Lorem Ipsum available.</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="life-style-grids">
						<div class="life-style-left-grid">
							<a href="single.html"><img src="images/l3.jpg" alt="" /></a>
							<a class="title" href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random text.</a>
						</div>
						<div class="life-style-right-grid">
							<a href="single.html"><img src="images/l4.jpg" alt="" /></a>
							<a class="title" href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
					<div class="sports-top">
							<div class="s-grid-left">
								<div class="cricket">
									<header>
										<h3 class="title-head">Business</h3>
									</header>
									<div class="c-sports-main">
											<div class="c-image">
												<a href="single.html"><img src="images/bus1.jpg" alt="" /></a>
											</div>
											<div class="c-text">
												<h6>Lorem Ipsum</h6>
												<a class="power" href="single.html">It is a long established fact that a reader</a>
												<p class="date">On Feb 25, 2015</p>
												<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="s-grid-small">
											<div class="sc-image">
												<a href="single.html"><img src="images/bus2.jpg" alt="" /></a>
											</div>
										<div class="sc-text">
											<h6>Lorem Ipsum</h6>
											<a class="power" href="single.html">It is a long established fact that a reader</a>
											<p class="date">On Mar 21, 2015</p>
											<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
												<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										</div>
										<div class="s-grid-small">
											<div class="sc-image">
												<a href="single.html"><img src="images/bus3.jpg" alt="" /></a>
											</div>
										<div class="sc-text">
											<h6>Lorem Ipsum</h6>
											<a class="power" href="single.html">It is a long established fact that a reader</a>
											<p class="date">On Jan 25, 2015</p>
											<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
												<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										</div>
										<div class="s-grid-small">
											<div class="sc-image">
												<a href="single.html"><img src="images/bus4.jpg" alt="" /></a>
											</div>
										<div class="sc-text">
											<h6>Lorem Ipsum</h6>
											<a class="power" href="single.html">It is a long established fact that a reader</a>
											<p class="date">On Jul 19, 2015</p>
											<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
												<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										</div>
									</div>
								</div>
							<div class="s-grid-right">
								<div class="cricket">
									<header>
										<h3 class="title-popular">Technology</h3>
									</header>
									<div class="c-sports-main">
											<div class="c-image">
												<a href="single.html"><img src="images/tec1.jpg" alt="" /></a>
											</div>
											<div class="c-text">
												<h6>Lorem Ipsum</h6>
												<a class="power" href="single.html">It is a long established fact that a reader</a>
												<p class="date">On Apr 22, 2015</p>
												<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
												<div class="clearfix"></div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="s-grid-small">
											<div class="sc-image">
												<a href="single.html"><img src="images/tec2.jpg" alt="" /></a>
											</div>
										<div class="sc-text">
											<h6>Lorem Ipsum</h6>
											<a class="power" href="single.html">It is a long established fact that a reader</a>
											<p class="date">On Jan 19, 2015</p>
											<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
												<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										</div>
										<div class="s-grid-small">
											<div class="sc-image">
												<a href="single.html"><img src="images/tec3.jpg" alt="" /></a>
											</div>
										<div class="sc-text">
											<h6>Lorem Ipsum</h6>
											<a class="power" href="single.html">It is a long established fact that a reader</a>
											<p class="date">On Jun 25, 2015</p>
											<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
												<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										</div>
										<div class="s-grid-small">
											<div class="sc-image">
												<a href="single.html"><img src="images/tec4.jpg" alt="" /></a>
											</div>
										<div class="sc-text">
											<h6>Lorem Ipsum</h6>
											<a class="power" href="single.html">It is a long established fact that a reader</a>
											<p class="date">On Jul 19, 2015</p>
											<a class="reu" href="single.html"><img src="images/more.png" alt="" /></a>
												<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
				</div>






			<div class="col-md-4 side-bar">
			<div class="first_half">





<!-- newsletter sidebar  -->

				<div class="newsletter">
					<h1 class="side-title-head">Newsletter</h1>
					<p class="sign">Sign up to receive our free newsletters!</p>
					<form action="" method="post">
						<input type="text" class="text" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
						<input type="submit" value="submit">
					</form>
				</div>


<!-- newsletter ends -->




<!-- list vertical (accordian section) sidebar -->

				<!--
				<div class="list_vertical">
		         	 	<section class="accordation_menu">
						  <div>
						    <input id="label-1" name="lida" type="radio" checked/>
						   <label for="label-1" id="item1"><i class="ferme"> </i>Popular Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
						    <div class="content" id="a1">
						    	<div class="scrollbar" id="style-2">
								 <div class="force-overflow">
									<div class="popular-post-grids">
										<div class="popular-post-grid">
											<div class="post-img">
												<a href="single.html"><img src="images/bus2.jpg" alt="" /></a>
											</div>
											<div class="post-text">
												<a class="pp-title" href="single.html"> The section of the mass media industry</a>
												<p>On Feb 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="popular-post-grid">
											<div class="post-img">
												<a href="single.html"><img src="images/bus1.jpg" alt="" /></a>
											</div>
											<div class="post-text">
												<a class="pp-title" href="single.html"> Lorem Ipsum is simply dummy text printing</a>
												<p>On Apr 14 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="popular-post-grid">
											<div class="post-img">
												<a href="single.html"><img src="images/bus3.jpg" alt="" /></a>
											</div>
											<div class="post-text">
												<a class="pp-title" href="single.html">There are many variations of Lorem</a>
												<p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="popular-post-grid">
											<div class="post-img">
												<a href="single.html"><img src="images/bus4.jpg" alt="" /></a>
											</div>
											<div class="post-text">
												<a class="pp-title" href="single.html">Sed ut perspiciatis unde omnis iste natus</a>
												<p>On Jan 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									</div>
                                </div>
                              </div>
						  </div>
						  <div>
						    <input id="label-2" name="lida" type="radio"/>
						    <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Recent Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
						    <div class="content" id="a2">
						       <div class="scrollbar" id="style-2">
								   <div class="force-overflow">
									<div class="popular-post-grids">
											<div class="popular-post-grid">
												<div class="post-img">
													<a href="single.html"><img src="images/tec2.jpg" alt="" /></a>
												</div>
												<div class="post-text">
													<a class="pp-title" href="single.html"> The section of the mass media industry</a>
													<p>On Feb 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>3 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="popular-post-grid">
												<div class="post-img">
													<a href="single.html"><img src="images/tec1.jpg" alt="" /></a>
												</div>
												<div class="post-text">
													<a class="pp-title" href="single.html"> Lorem Ipsum is simply dummy text printing</a>
													<p>On Apr 14 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>2 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="popular-post-grid">
												<div class="post-img">
													<a href="single.html"><img src="images/tec3.jpg" alt="" /></a>
												</div>
												<div class="post-text">
													<a class="pp-title" href="single.html">There are many variations of Lorem</a>
													<p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="popular-post-grid">
												<div class="post-img">
													<a href="single.html"><img src="images/tec4.jpg" alt="" /></a>
												</div>
												<div class="post-text">
													<a class="pp-title" href="single.html">Sed ut perspiciatis unde omnis iste natus</a>
													<p>On Jan 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>1 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								</div>
						    </div>
						  </div>
						  <div>
						    <input id="label-3" name="lida" type="radio"/>
						    <label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i>Comments<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
						    <div class="content" id="a3">
						       <div class="scrollbar" id="style-2">
							    <div class="force-overflow">
								 <div class="response">
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 21, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MARCH 26, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>MAY 25, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>FEB 13, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>JAN 28, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>APR 18, 2015</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="media response-info">
							<div class="media-left response-text-left">
								<a href="#">
									<img class="media-object" src="images/icon1.png" alt="" />
								</a>
								<h5><a href="#">Username</a></h5>
							</div>
							<div class="media-body response-text-right">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<ul>
									<li>DEC 25, 2014</li>
									<li><a href="single.html">Reply</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					</div>

                                </div>
						    </div>
						  </div>
						</section>
					 </div>
 -->

<!-- list vertical (accordian section) sidebar  ends here -->


<!-- side-bar article  -->

					 <!-- <div class="side-bar-articles">
						<div class="side-bar-article">
							<a href="single.html"><img src="images/sai.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="single.html">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
							</div>
						</div>
						<div class="side-bar-article">
							<a href="single.html"><img src="images/sai2.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="single.html">There are many variations of passages of Lorem</a>
							</div>
						</div>
						<div class="side-bar-article">
							<a href="single.html"><img src="images/sai3.jpg" alt="" /></a>
							<div class="side-bar-article-title">
								<a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
							</div>
						</div>
					 </div> -->

<!-- ends -->



					 </div>





					 <div class="secound_half">

<!-- Sidebar tags -->

					 <!-- <div class="tags">
						<header>
							<h3 class="title-head">Tags</h3>
						</header>
						<p>
						<a class="tag1" href="single.html">At vero eos</a>
						<a class="tag2" href="single.html">doloremque</a>
						</p>
					 </div> -->

					 <!--  Sidebar tags ends -->

<!-- Sidebar Popular News -->

					 <!--
					 <div class="popular-news">
						<header>
							<h3 class="title-popular">popular News</h3>
						</header>
						<div class="popular-grids">
							<div class="popular-grid">
								<a href="single.html"><img src="images/popular-4.jpg" alt="" /></a>
								<a class="title" href="single.html">It is a long established fact that a reader will be distracted</a>
								<p>On Aug 31, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
							</div>
							<div class="popular-grid">
								<a href="single.html"><img src="images/popular-1.jpg" alt="" /></a>
								<a class="title" href="single.html">It is a long established fact that a reader will be distracted</a>
								<p>On Mar 14, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
							</div>
							<div class="popular-grid">
								<iframe width="100%" src="https://www.youtube.com/embed/LGMn_yi_62k" frameborder="0" allowfullscreen></iframe>
								<a class="title" href="single.html">Aishwarya Rai Bachchan's Latest SHOCKING News For Ex Salman Khan</a>
								<p>On Mar 14, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
							</div>
							<div class="popular-grid">
								<a href="single.html"><img src="images/popular-3.jpg" alt="" /></a>
								<a class="title" href="single.html">It is a long established fact that a reader will be distracted</a>
								<p>On Mar 14, 2015 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>250 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-thumbs-up"></span>68</a></p>
							</div>
						</div>
					</div> -->

<!-- ppn ends -->

					</div>





					<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- content-section-ends-here -->





	<!-- footer-section-starts-here -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
