var downBtn = $('#scroll-down-btn');

var y = $(window).scrollTop();

downBtn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop: y + 1000});
});


var btn = $('#scroll-up-btn');

$(window).scroll(function() {
    if ($(window).scrollTop() > 990) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
});
  
btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0});
});

function scrollWin(x, y) {
  window.scrollBy(x, y);
}

// Smooth Scroll

window.scroll({ 
  left: 0, 
  behavior: 'smooth'
});

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('nav').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('nav').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('nav').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}

 
 
 //Accordion 

var acc = document.getElementsByClassName("accordion-heading");
  var i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      /* Toggle between adding and removing the "active" class,
      to highlight the button that controls the panel */
      this.classList.toggle("accordion-active");
  
      /* Toggle between hiding and showing the active panel */
      var panel = this.nextElementSibling;
      var panels = this.nextElement;
      var triangles = this.childNodes[3];
      if (panel.style.display === "block") {
        panel.style.display = "none";
        triangles.style.transform = "rotate(0deg)";
      } else {
        panel.style.display = "block";
        triangles.style.transform = "rotate(90deg)";
      }
    });
}

// Hamburger menu

let burger = document.getElementById('burger'),
   nav    = document.getElementById('main-nav'),
   navLink = document.querySelector('.main-nav-link-1'),
   navLinkTwo = document.querySelector('.main-nav-link-2'),
   navLinkThree = document.querySelector('.main-nav-link-3'),
   navLinkFour = document.querySelector('.main-nav-link-4'),
   navLinkFive = document.querySelector('.main-nav-link-5'),
	 slowmo = document.getElementById('slowmo');

burger.addEventListener('click', function(e){
	this.classList.toggle('is-open');
	nav.classList.toggle('is-open');
});

/* Onload demo - dirty timeout */
let clickEvent = new Event('click');

window.addEventListener('load', function(e) {
	slowmo.dispatchEvent(clickEvent);
	burger.dispatchEvent(clickEvent);
	
	setTimeout(function(){
		burger.dispatchEvent(clickEvent);
		
		setTimeout(function(){
			slowmo.dispatchEvent(clickEvent);
		}, 3500);
	}, 5500);
}); 



