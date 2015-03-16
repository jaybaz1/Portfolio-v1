
var common = {

	skills: {
				"Photoshop":[8,2],
				"HTML (5)":[7,3],
				"Javascript":[4,6],
				"D3.js":[2,8],
				"Illustrator":[3,7],
				"CSS":[7,3],
				"JQuery":[5,5],
				"Sass":[2,8]
			}
	
}


// Define all behavioural functions
var behaviours = (function(){

	var init = function(){
			console.log("BEHAVIOURS INIT ===========================================");
			// Load all users interactions
			details();
			sections();
		},
	
		// short description hover over
		details = function(){
			$("#projects_wrapper li").on("mouseenter", "a", function(){
				$(this).removeClass("close").addClass("open");
			})
			.on("mouseleave", "a", function(){
				$(this).removeClass("open").addClass("close");
			});
		},
		
		sections = function(){
			$('header li a, .next_section').click(function(){
				var href = $(this).attr('href');
				scrollToAnchor(href);
				return false;
			});
		},
	
		scrollToAnchor = function(link){
	    	var aTag = $(link);
			$('html,body').animate({scrollTop: aTag.offset().top},1000);
		}
	
	// Return public function and properties
	return {
		init:init,
		scrollToAnchor : scrollToAnchor
	}
})();

var parallax = function(){

	var sectionH,
		elems,
	
	init = function(){
	
		resize();
		
		$.stellar();
		
		// Store common properties
		sectionH = document.getElementById("portfolio").clientHeight;	
		elems = $("#first, #second");
		
		// Add parallaxing effect on background elements
		elems.stellar();
	},
	
	resize = function(){
		var newHeight = ($(window).width() / 3.5)  * 2,
			containerH = (newHeight / 3.5) * 2;
			
		console.log(newHeight, containerH);
			
		$('.break_wrapper').height(containerH);
		
 	},
 	
 	destory = function(){
	 	$.stellar('destroy');
 	}
	
	return {
		init : init,
		resize : resize,
		destory : destory
	}
}();

/*
function Parallax(div){
	this.div = $(div);
}

Parallax.prototype = function(){
	
	var init = function(){

		// Cache the Window object
		var $window = $(window);
		
		// For each element that has a data-type attribute

		// Store some variables based on where we are
		var $self = this.div,
			offsetCoords = $self.offset(),
			topOffset = offsetCoords.top;
			
		
		// When the window is scrolled...
	    $window.scroll(function() {
	
			// If this section is in view
			if ( ($window.scrollTop() + $window.height()) > (topOffset) &&
				 ( (topOffset + $self.height()) > $window.scrollTop() ) ) {
				 
				 $self.css('position', 'fixed');
	
				// Scroll the background at var speed
				// the yPos is a negative value because we're scrolling it UP!								
				var yPos = -($window.scrollTop() * 0.1); 
				
				// Put together our final background position and move background
				//$self.css({ top: });
				$self.animate({ "top": yPos + 'px' }, 0);
			}
			else{
				$self.css('position', 'relative');
			}
		});		
	}
	
	return{
		init:init
	}	
}();
*/

var pieChart = (function(){

	var width = 150,
		height = 150,
		radius = Math.min(width, height) / 2,

	init = function(data){
		console.log("CHART INIT ===========================================");
		$.each(data.skills, function(key, value){
			chart(key, value);
		});
		
	},
	
	chart = function(skill, level){
		
		var color = d3.scale.linear().range(["#fff","#666"])
		
		var pie = d3.layout.pie()
		    .sort(null);
		
		var arc = d3.svg.arc()
		    .innerRadius(radius - 15)
		    .outerRadius(radius - 30);
		
		var svg = d3.select("#skills").append("svg")
		    .attr("width", width)
		    .attr("height", height)
		    .append("g")
		    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
		
		var path = svg.selectAll("path")
		    .data(pie(level))
		  .enter().append("path")
		    .attr("fill", function(d, i) { return color(i); })
		    .attr("d", arc);
		    
		var label = svg.append("text")
						.text(skill)
						.attr("text-anchor", 'middle')
						.attr("transform", "translate(0, -5)");
		
		var label = svg.append("text")
						.data(level)
						.attr("class", "years")
						.text(function(d){return d;})
						.attr("text-anchor", 'middle')
						.attr("transform", "translate(0, 25)");
		
	};
	
	return {
		init : init
	}
})();

var project = function(){

	var projWrapper,
		projs;
	
	var init = function(){
		
		projs = $("#projects_wrapper");
		projs.find("li a").on("click", function(){
			
			if(this.parentNode.id !== 'codepen'){
				// Remove click from back id
				if(projWrapper){
					projWrapper.find("button").unbind("click");
				}
			
				var parentID = this.parentNode.id;
				xhr(parentID);
				return false;
			}
			else{
				return true;
			}
			
		});
	},
	
	xhr = function(project){
		$.get( "projects/index.php?project=" + project, function( data ) {
		  callback(data);
		});
	}
	
	loading = function(){
		
	},
	
	callback = function(data){
		//console.log(data);
		projWrapper = $("div#single_project_wrapper");		
		projDiv = projWrapper.find("div#single_project");
		
		// Scroll to top of portfolio section
		behaviours.scrollToAnchor("#portfolio");
		
		// Clear existing data from div
		projDiv.empty();
		
		projDiv.html(data);
		
		// Hide all projects
		projs.fadeOut("fast", function(){
			projWrapper.fadeIn("fast");
			
			// Init fancybox
			projWrapper.find(".fancybox").fancybox();
			
			//Reset parallax effect for new position
			parallax.destory();
			parallax.init();
			
			restore();
		});	
		
	},
	
	restore = function(){
		projWrapper.find("#back").click(function(){
			projWrapper.fadeOut("fast", function(){
				projs.fadeIn("fast");
				
				//Reset parallax effect for new position
				parallax.destory();
				parallax.init();

				projWrapper.find(".fancybox").unbind('click.fb-start');
			});
		});
	} 
	
	return {
		init : init
	}
}();


// On document load
$(document).ready(function(){
	console.log("READY ===========================================");
	
	behaviours.init();
	project.init();
	pieChart.init(common);
	
	if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		parallax.init();
 	}
 	
 	$(window).resize(function(){
 		// Destory stellar plugin
 		parallax.destory();
 		// Resize the parent div for background
	 	parallax.resize();
	 	// ReInit the stellar plugin
	 	parallax.init();	 	
 	})

});