
//tao scroll to top, slide down a bar on scroll page
        window.onscroll = function(){
            scrolltoTop();
        }
            
        function scrolltoTop(){
            if(document.body.scrollTop > 300 || document.documentElement.scrollTop >300)
            {
                document.getElementById("scrolltop").style.display = "block";
                document.getElementById("slideDown").style.top = 0;
            }
            else{
                document.getElementById("scrolltop").style.display = "none";
                document.getElementById("slideDown").style.top = "-60px";
            }
        }
            document.getElementById("scrolltop").addEventListener("click", function()
            {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            });

//--------------------------------------------------------------------------------------------------------
//tao slideShow banner picture
var slideIndex = 0;
	carousel();
				
	function carousel() {
		var i;
		var x = document.getElementsByClassName("picture");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none"; 
		}
		slideIndex++;
		if (slideIndex > x.length) 
        {
            slideIndex = 1
        } 
		x[slideIndex-1].style.display = "block"; 
		setTimeout(carousel, 4000); 
	}
    function prevSlide(){
	    slideIndex--;
		carousel();
		clearTimeout(carousel);
		//setTimeout(carousel, 6000); 
				
	}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
//----------------------------------------------------------------------------------------------






