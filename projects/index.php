<?php

$project = $_GET["project"];

switch($project){

	// ITV
	case "itv":
		echo "<div id='projectWrapper'>
				<div id='projectInfo'>
				<h3>ITV</h3>
				<p>As the second most popular page on ITV.com averaging over one million hits a day it was a great challenge and responsibility to implement the redesigned TV Guide for the ITV brand relaunch. Under a quite tight deadline we successfully completed and launched the redesigned TV Guide with many added functionality, performance and UI improvements.</p>
				<h4>Role</h4>
				<p>Front-end Developer</p>
				<h4>Tools</h4>
				<ul>
					<li>HTML</li>
					<li>CSS/Sass</li>
					<li>Javascript</li>
				</ul>
				<h4>Link</h4>
				<a href='http://www.itv.com/tvguide/' target='_blank'>http://www.itv.com/tvguide/</a>
			</div>
			<div id='projectThumb'>
				<a class='fancybox' href='assets/img/large/itv.jpg'>
					<img src='assets/img/large/itv.jpg'/>
				</a>
			</div>";
	break;
	
	// REDDISCOVER
	case "sandbox":
		echo "<div id='projectWrapper'>
				<div id='projectInfo'>
				<h3>Reddiscover</h3>
				<p>Primarily used as a sales tool at trade shows and sales meeting. The RedDiscover sandbox highlighted two key area which RedBee Media wanted to capitalise on, EPG data and Recommendations. The sandbox consisted of a EPG and Recommendations demo and a section where potential clients could upload their own data and tune the recommendation outputs. </p>
				<h4>Role</h4>
				<p>Designer & Front-end Developer</p>
				<h4>Tools</h4>
				<p>Photoshop, Javascript, JQuery, CSS, SASS, HTML 5 and D3.js</p>
				<h4>Link</h4>
				<a href='http://reddiscover.redbeemedia.com/index.html' target='_blank'>http://reddiscover.redbeemedia.com/index.html</a>
				<a href='http://reddiscover.redbeemedia.com/recommendations/index.html' target='_blank'>http://reddiscover.redbeemedia.com/recommendations/index.html</a>
			</div>
			<div id='projectThumb'>
				<a class='fancybox' href='assets/img/large/reddiscover/sandbox.jpg'>
					<img src='assets/img/large/reddiscover/sandbox.jpg'/>
				</a>
				<ul>
					<li>
						<a class='fancybox' rel='group' href='assets/img/large/reddiscover/recommendations.jpg'>
							<img src='assets/img/large/reddiscover/recommendations.jpg'/>
						</a>
					</li>
					<li>
						<a class='fancybox' rel='group' href='assets/img/large/reddiscover/yourData.jpg'>
							<img src='assets/img/large/reddiscover/yourData.jpg'/>
						</a>
					</li>
				</ul>
			</div>";
	break;
	
	// AVALA
	case "avala":
		echo "<div id='projectWrapper'>
				<div id='projectInfo'>
				<h3>Avala</h3>
				<p>The idea behind Avala was to create a website whereby users could receive feedback about their job performances from colleagues past and present in the form of a short questionnaire. The users performance data would then be analysed and presented in a fully customisable public profile page. </p>
				<h4>Role</h4>
				<p>Designer</p>
				<h4>Tools</h4>
				<p>Photoshop</p>
			</div>
			<div id='projectThumb'>
				<a class='fancybox' rel='group' href='assets/img/large/avala/avala-1.jpg'>
					<img src='assets/img/large/avala/avala-1.jpg'/>
				</a>
				<ul>
					<li>
						<a class='fancybox' rel='group' href='assets/img/large/avala/avala-2.jpg'>
							<img src='assets/img/large/avala/avala-2.jpg'/>
						</a>
					</li>
					<li>
						<a class='fancybox' rel='group' href='assets/img/large/avala/avala-3.jpg'>
							<img src='assets/img/large/avala/avala-3.jpg'/>
						</a>
					</li>
					<li>
						<a class='fancybox' rel='group' href='assets/img/large/avala/avala-4.jpg'>
							<img src='assets/img/large/avala/avala-4.jpg'/>
						</a>
					</li>
				</ul>
			</div>";
	break;
	
	// SKY
	case "sky":
		echo "<div id='projectWrapper'>
				<div id='projectInfo'>
				<h3>Sky Accessible</h3>
				<p>One of the most rewarding projects i’ve been involved with during my time at RedBee Media. We were given the opportunity to create a fully accessible TV Guide that would cater for users with visual impairments and blindness.  What we produced was an EPG with Sky’s integrated Remote Record functionality that met the W3C AA+ level accessibility rating.</p>
				<h4>Role</h4>
				<p>Front-end Developer</p>
				<h4>Tools</h4>
				<p>HTML and CSS
				<h4>Link</h4>
				<a href='http://accessibility.sky.com/whats-on-tv' target='_blank'>http://accessibility.sky.com/whats-on-tv</a>
			</div>
			<div id='projectThumb'>
				<a class='fancybox' href='assets/img/large/sky.jpg'>
					<img src='assets/img/large/sky.jpg'/>
				</a>
			</div>";
	break;
	
	// SES DASHBOARD
	case "dashboard":
		echo "<div id='projectWrapper'>
				<div id='projectInfo'>
				<h3>SES SatRecord Dashbaord</h3>
				<p>SatRecord is a service whereby users can record shows remotely on their satellite connected set top box through a mobile device or webpage. I was tasked with creating a dashboard which monitors the service in real time. The dashboard visualises a number of data points ranging from total recording set in a day/week/month to displaying hourly status checks.</p>
				<h4>Role</h4>
				<p>Designer & Front-end Developer</p>
				<h4>Tools</h4>
				<p>Photoshop, Javascript, CSS3, SASS, HTML 5 and D3.js</p>
				<h4>Link</h4>
				<a href='http://demos.tvgenius.net/astra/dashboard/' target='_blank'>http://demos.tvgenius.net/astra/dashboard/</a>
			</div>
			<div id='projectThumb'>
				<a class='fancybox' href='assets/img/large/dashboard.jpg'>
					<img src='assets/img/large/dashboard.jpg'/>
				</a>
			</div>";
	break;
	
	// TRAVEL	
	case "travel":
		echo "<div id='projectWrapper'>
				<div id='projectInfo'>
				<h3>Travel Project</h3>
				<p>In my personal time i like to experiment with new concepts and third party api’s and i find the best way to do this is to work on your own projects. This is exactly what the travel project is about, the goal for this project is to allow the user to create a personal itinerary of places they’re planning to visit.</p>
				<p>As it’s still very much in the design and UI phase i currently only have a small selection of images to present at this time. More will follow in the near future.</p>
				<h4>Tools</h4>
				<ul>
					<li>Balsamiq</li>
					<li>Photoshop</li>
				</ul>
			</div>
			<div id='projectThumb'>
				<a class='fancybox' rel='group' href='assets/img/large/travel/travel-1.jpg'>
					<img src='assets/img/large/travel/travel-1.jpg'/>
				</a>
				<ul>
					<li>
						<a class='fancybox' rel='group' href='assets/img/large/travel/travel-2.jpg'>
							<img src='assets/img/large/travel/travel-2.jpg'/>
						</a>
					</li>
				</ul>				
			</div>";
	break;

	// FREEVIEW	
	case "freeview":
		echo "<div id='projectWrapper'>
				<div id='projectInfo'>
				<h3>Freeview</h3>
				<p>Currently the third version of the Freeview EPG i’ve had the pleasure of developing. Started as a simple web EPG but has evolved into a fully featured TV Guide with integrated catchup data. </p>
				<h4>Role</h4>
				<p>Front-end Developer</p>
				<h4>Tools</h4>
				<p>JQuery and CSS</p>
				<h4>Link</h4>
				<a href='http://www.freeview.co.uk/whats-on/tv-guide' target='_blank'>http://www.freeview.co.uk/whats-on/tv-guide</a>
			</div>
			<div id='projectThumb'>
				<a class='fancybox' href='assets/img/large/freeview.jpg'>
					<img src='assets/img/large/freeview.jpg'/>
				</a>
			</div>";
	break;
	
	// SURE TV
	case "sure":
		echo "<div id='projectWrapper'>
				<div id='projectInfo'>
				<h3>Sure TV</h3>
				<p>Sure TV are a multi-platform service provider in the Channel Islands, they first approached RedBee Media regarding the creation of a TV related mobile app that provided customers with an EPG with remote record functionality. My role in the project was to create designs for both web and mobile that followed Sure TV’s branding guidelines while incorporated all the requested features.</p>
				<h4>Role</h4>
				<p>Designer</p>
				<h4>Tools</h4>
				<p>Photoshop, Illustrator</p>
				<h4>Download the App</h4>
				<a href='https://itunes.apple.com/gb/app/sure-tv/id561953577?mt=8' target='_blank'>https://itunes.apple.com/gb/app/sure-tv/id561953577?mt=8</a>
			</div>
			<div id='projectThumb' class='portrait'>
				<a class='fancybox' rel='group' href='assets/img/large/sure/sure.jpg'>
					<img src='assets/img/large/sure/sure.jpg'/>
				</a>
				<ul>
					<li>
						<a class='fancybox' rel='group' href='assets/img/large/sure/order.jpg'>
							<img src='assets/img/large/sure/order.jpg'/>
						</a>
					</li>
					<li>
						<a class='fancybox' rel='group' href='assets/img/large/sure/search.jpg'>
							<img src='assets/img/large/sure/search.jpg'/>
						</a>
					</li>
				</ul>
			</div>";
	break;
	
}