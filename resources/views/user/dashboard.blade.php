@extends('layouts.user')

@section('title')
    Dashboard
@endsection

@section('content')
		<div class="gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div id="page-contents" class="row merged20">
							<div class="col-lg-3">
								<aside class="sidebar static left">
									<div class="widget whitish low-opacity">
										<img src="images/time-clock.png" alt="">
										<div class="bg-image" style="background-image: url(images/resources/time-bg.jpg)"></div>
										<div class="date-time">
											<div class="realtime">
												<span id="hours">00</span>
												<span id="point">:</span>
												<span id="min">00</span>
											</div>
											<span id="date"></span>
										</div>
									</div>
									<div class="widget">
										<h4 class="widget-title">Complete Your Profile</h4>
										<span>Your Profile is missing followings!</span>
										<div data-progress="tip" class="progress__outer" data-value="0.67">
											<div class="progress__inner">82%</div>
										</div>
										<ul class="prof-complete">
											<li><i class="icofont-plus-square"></i> <a href="#" title="">Upload Your Picture</a><em>10%</em></li>
											<li><i class="icofont-plus-square"></i> <a href="#" title="">Your University?</a><em>20%</em></li>
											<li><i class="icofont-plus-square"></i> <a href="#" title="">Add Payment Method</a><em>20%</em></li>
										</ul>
									</div><!-- complete profile widget -->
								</aside>
							</div>
							<div class="col-lg-6">
								<ul class="filtr-tabs">
									<li><a class="active" href="#" title="">Dashboard</a></li>
									<li><a href="#" title="">Recent</a></li>
									<li><a href="#" title="">Favourit</a></li>
								</ul><!-- tab buttons -->
								<div class="main-wraper">
									<span class="new-title">Create New Post</span>
									<div class="new-post">
										<form method="post">
											<i class="icofont-pen-alt-1"></i>
											<input type="text" placeholder="Create New Post">
										</form>
										<ul class="upload-media">
											<li>
												<a href="#" title="">
													<i><img src="images/image.png" alt=""></i>
													<span>Photo/Video</span>
												</a>
											</li>
											<li>
												<a href="#" title="">
													<i><img src="images/activity.png" alt=""></i>
													<span>Feeling/Activity</span>
												</a>
											</li>
											<li>
												<a href="live-stream.html" title="">
													<i><img src="images/live-stream.png" alt=""></i>
													<span>Live Stream</span>
												</a>
											</li>
										</ul>
									</div>
								</div><!-- create new post -->
								<div class="story-card">
									<div class="story-title">
										<h5>Recent Stories</h5>
										<a href="#" title="">See all</a>
									</div>
									<div class="story-wraper ">
										<img src="images/resources/story-card5.jpg" alt="">
										<div class="users-dp">
											<img src="images/resources/user3.jpg" alt="">
										</div>
										<a class="add-new-stry" href="#" title=""><i class="icofont-plus"></i></a>
										<span>Add Your Story</span>
									</div>
									<div class="story-wraper">
										<img src="images/resources/story-card.jpg" alt="">
										<div class="users-dp">
											<img src="images/resources/user6.jpg" alt="">
										</div>
										<span>Tamana Bhatia</span>
									</div>
									<div class="story-wraper">
										<img src="images/resources/story-card2.jpg" alt="">
										<div class="users-dp">
											<img src="images/resources/user7.jpg" alt="">
										</div>
										<span>Emily Caros</span>
									</div>
									<div class="story-wraper">
										<img src="images/resources/story-card3.jpg" alt="">
										<div class="users-dp">
											<img src="images/resources/user8.jpg" alt="">
										</div>
										<span>Daniel Cardos</span>
									</div>
									<div class="story-wraper">
										<img src="images/resources/story-card4.jpg" alt="">
										<div class="users-dp">
											<img src="images/resources/user4.jpg" alt="">
										</div>
										<span>Emma Watson</span>
									</div>
								</div><!-- stories -->
								<div class="main-wraper">
									<div class="chatroom-title">
										<i>
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv"><rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect><polyline points="17 2 12 7 7 2"></polyline></svg></i>
										<span>Chat Rooms <em>Video chat with friends</em></span>
										<a class="create-newroom" href="#" title="">Create Room</a>
									</div>
									<ul class="chat-rooms">
										<li>
											<div class="room-avatar">
												<img src="images/resources/user2.jpg" alt="">
												<span class="status online"></span>
											</div>
											<span>Sara's Room</span>
											<a class="join" href="#" title="Join Room">Join</a>
											<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
										</li>
										<li>
											<div class="room-avatar">
												<img src="images/resources/user3.jpg" alt="">
												<span class="status offline"></span>
											</div>
											<span>jawad's Room</span>
											<a class="join" href="#" title="Join Room">Join</a>
											<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
										</li>
										<li>
											<div class="room-avatar">
												<img src="images/resources/user4.jpg" alt="">
												<span class="status away"></span>
											</div>
											<span>Jack's Room</span>
											<a class="join" href="#" title="Join Room">Join</a>
											<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
										</li>
										<li>
											<div class="room-avatar">
												<img src="images/resources/user5.jpg" alt="">
												<span class="status online"></span>
											</div>
											<span>jobidn's Room</span>
											<a class="join" href="#" title="Join Room">Join</a>
											<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
										</li>
										<li>
											<div class="room-avatar">
												<img src="images/resources/user6.jpg" alt="">
												<span class="status offline"></span>
											</div>
											<span>Emily's Room</span>
											<a class="join" href="#" title="Join Room">Join</a>
											<a class="say-hi send-mesg" href="#" title="Send Message"><i class="icofont-facebook-messenger"></i></a>
										</li>
									</ul>
								</div><!-- chat rooms -->
								<div class="main-wraper">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<i class="icofont-learn"></i>
											</figure>
											<div class="friend-name">
												<ins><a title="" href="time-line.html">Suggested</a></ins>
												<span><i class="icofont-runner-alt-1"></i> Follow similar People</span>
											</div>
											<ul class="suggested-caro">
												<li>
													<figure><img src="images/resources/speak-1.jpg" alt=""></figure>
													<span>Amy Watson</span>
													<ins>Department of Socilolgy</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</li>
												<li>
													<figure><img src="images/resources/speak-2.jpg" alt=""></figure>
													<span>Muhammad Khan</span>
													<ins>Department of Socilolgy</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</li>
												<li>
													<figure><img src="images/resources/speak-3.jpg" alt=""></figure>
													<span>Sadia Gill</span>
													<ins>Department of Socilolgy</ins>
													<a href="#" title="" data-ripple=""><i class="icofont-star"></i> Follow</a>
												</li>
											</ul>
										</div>
									</div>
								</div><!-- suggested friends -->

								<div class="loadmore">
									<div class="sp sp-bars"></div>
									<a href="#" title="" data-ripple="">Load More..</a>
								</div><!-- loadmore buttons -->
							</div>
							<div class="col-lg-3">
								<aside class="sidebar static right">
									<div class="widget">
										<h4 class="widget-title">Your Groups</h4>
										<ul class="ak-groups">
											<li>
												<figure><img src="images/resources/your-group1.jpg" alt=""></figure>
												<div class="your-grp">
													<h5><a href="group-detail.html" title="">Good Group</a></h5>
													<a href="#" title=""><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
													<a href="group-feed.html" title="" class="promote">view feed</a>
												</div>
											</li>
											<li>
												<figure><img src="images/resources/your-group2.jpg" alt=""></figure>
												<div class="your-grp">
													<h5><a href="group-detail.html" title="">E-course Group</a></h5>
													<a href="#" title=""><i class="icofont-bell-alt"></i>Notifilactions <span>13</span></a>
													<a href="group-feed.html" title="" class="promote">view feed</a>
												</div>
											</li>
										</ul>
									</div><!-- Your groups -->
									<div class="widget stick-widget">
										<h4 class="widget-title">Who's follownig</h4>
										<ul class="followers" >
											<li>
												<figure><img alt="" src="images/resources/friend-avatar.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Kelly Bill</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar2.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Issabel</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar3.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Andrew</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar4.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Sophia</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
											<li>
												<figure><img alt="" src="images/resources/friend-avatar5.jpg"></figure>
												<div class="friend-meta">
													<h4>
														<a title="" href="time-line.html">Allen</a>
														<span>Dept colleague</span>
													</h4>
													<a class="underline" title="" href="#">Follow</a>
												</div>
											</li>
										</ul>
									</div><!-- whos following -->
								</aside>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection


