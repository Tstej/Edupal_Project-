<div class="slideshow-container" style="background-image: url(quotes.jpg); color:white" >

      <!-- Full-width slides/quotes -->
      <div class="mySlides">
        <q>Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</q>
        <p class="author">- Malcolm X</p>
      </div>
    
      <div class="mySlides">
        <q>An investment in knowledge pays the best interest.</q>
        <p class="author">- Benjamin Franklin</p>
      </div>
    
      <div class="mySlides">
        <q>Education is not the learning of facts, but the training of minds to think.</q>
        <p class="author">- Albert Einstein</p>
      </div>
</div>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>

<style>
    .slideshow-container {
  position: relative;
  background-image: url("quotes.jpg");
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}
</style>