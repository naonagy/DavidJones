<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        *{
    margin: 0px;
    padding: 0px;

}
body, html{
    height: 100%;
    background-color: #040804;
}

.wrapper {
  position: relative;
}

.back {
  position: relative;
  z-index: 1;
  border: dashed;
  height: 8em;
  margin-bottom: 1em;
  margin-top: 2em;
}
.gold-box {
  position: absolute;
  z-index: 3; /* put .gold-box above .green-box and .dashed-box */
  background: gold;
  width: 100%;
  height: 100%;
}
.green-box {
  position: absolute;
  z-index: 2; /* put .green-box above .dashed-box */
  background: lightgreen;
  width: 20%;
  left: 65%;
  top: -25px;
  height: 7em;
  opacity: 0.9;
}


.bx-viewport, .bx-wrapper{
    position:relative;
    width:100%;
    height:100% !important;
    top:0;
    left:0;
}
.slider, .slider li{
    height: 100% !important;
}
.slider li{
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
}
.bx-wrapper .bx-viewport{
    border: none !important;
}
.bx-wrapper{
  border: none !important;

}
svg {
  height: inherit;
}
.headtext
{
  background: rgba(255,255,255,0);
-webkit-backdrop-filter: blur(1px);
backdrop-filter: blur(1px);
border: 1px solid rgba(255,255,255,0);
}




button {
  border: none;
  background: none;
}

a,
a:hover {
  color: inherit;
}

figure {
  margin: 0;
}


/* MAIN STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.container {
  max-width: 1100px;
}

.section-with-carousel .swiper-slide figure {
  position: relative;
  overflow: hidden;
}

.section-with-carousel .swiper-slide img {
  width: 100%;
  height: 320px;
  object-fit: cover;
}

.section-with-carousel .swiper-slide figcaption {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  transform: translateY(20%);
  display: flex;
  align-items: baseline;
  justify-content: center;
  padding: 20px;
  text-align: center;
  opacity: 0;
  visibility: hidden;
  color: white;
  background: rgba(0, 0, 0, 0.5);
  transition: all 0.4s;
}

.section-with-carousel .swiper-slide figcaption svg {
  flex-shrink: 0;
  fill: white;
  margin-right: 10px;
}

.section-with-carousel .swiper-slide-active figcaption {
  opacity: 1;
  visibility: visible;
  transform: none;
}

.section-with-carousel .carousel-controls {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  transform: translateY(-50%);
  display: flex;
  justify-content: space-between;
  padding: 0 12px;
  z-index: 1;
}

.section-with-carousel .carousel-controls .carousel-control {
  opacity: 0.25;
  transition: opacity 0.3s;
}

.section-with-carousel .carousel-controls .carousel-control:hover {
  opacity: 1;
}

.section-with-carousel .swiper-pagination-bullets {
  position: static;
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

.section-with-carousel .swiper-pagination-bullets .swiper-pagination-bullet {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: auto;
  height: auto;
  background: transparent;
  opacity: 0.5;
  margin: 0 8px;
  border-radius: 0;
  transition: opacity 0.3s;
}

.section-with-carousel
  .swiper-pagination-bullets
  .swiper-pagination-bullet
  .line {
  width: 3px;
  height: 3px;
  background: black;
  transition: transform 0.3s;
}

.section-with-carousel
  .swiper-pagination-bullets
  .swiper-pagination-bullet
  .number {
  opacity: 0;
  transform: translateY(-7px);
  transition: all 0.3s;
}

.section-with-carousel
  .swiper-pagination-bullets
  .swiper-pagination-bullet.swiper-pagination-bullet-active {
  opacity: 1;
}

.section-with-carousel
  .swiper-pagination-bullets
  .swiper-pagination-bullet.swiper-pagination-bullet-active
  .line {
  transform: scaleX(8);
}

.section-with-carousel
  .swiper-pagination-bullets
  .swiper-pagination-bullet.swiper-pagination-bullet-active
  .number {
  opacity: 1;
  transform: none;
}

.copyright .col-auto:not(:last-child) {
  position: relative;
}

.copyright .col-auto:not(:last-child)::before {
  content: "•";
  position: absolute;
  top: 50%;
  right: -2px;
  transform: translateY(-50%);
}

@media (min-width: 768px) {
  .section-with-carousel .swiper-slide img {
    height: 370px;
  }
}

@media (min-width: 1200px) {
  .section-with-carousel .swiper-slide img {
    height: 420px;
  }

  .section-with-carousel .carousel-controls {
    padding: 0 50px;
  }
}


</style>
</head>
<body>
<!--
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider').bxSlider({
            auto: true,
            autoControls: false,
            stopAutoOnClick: false,
            captions: true,

            pager: false,
            controls: false,
        });    
    });
</script>
<ul class="slider">
  <li>
    <img style= "background-image" src="{{ URL('storage/i1.png') }}" title="Caption 1">
  </li>
  <li>
    <img style= "background-image" src="{{ URL('storage/i2.png') }}" title="Caption 1">
  </li>
  <li> 
    <img style= "background-image" src="{{ URL('storage/i3.jpg') }}" title="Caption 1">
  </li>
  <li>
    <img style= "background-image" src="{{ URL('storage/i4.jpg') }}" title="Caption 1">
  </li>
</ul>


    <div class="container d-flex justify-content-center">

        <div class="slider">
          <div class="slider-img">
            <img src="{{ URL('storage/i1.png') }}" id="firstslider">
          </div>
          <div class="slider-img">
            <img src="{{ URL('storage/i2.png') }}">
          </div>
          <div class="slider-img">
            <img src="{{ URL('storage/i3.jpg') }}">
          </div>
          <div class="slider-img">
            <img src="{{ URL('storage/i4.jpg') }}">
          </div>
       </div>
      </div>
    -->
      
   
    
    <svg id="10015.io" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" >
      <path fill="rgba(153, 186, 34, 0.66)" d="M401,327.5Q341,415,244,408Q147,401,76,320.5Q5,240,70.5,150Q136,60,247,47.5Q358,35,409.5,137.5Q461,240,401,327.5Z" />
    </svg>

    

    
   

    
    <section class="section-with-carousel section-with-left-offset position-relative mt-5">
      <div class="container">
        <h2 class="mb-3">Tanzania Through Photos</h2>
      </div>
      <div class="carousel-wrapper">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="carousel-inner" width="640" height="427">
                <div class="carousel-item active">
                  <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-inner" width="640" height="427">
                <div class="carousel-item active">
                  <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-inner" width="640" height="427">
                <div class="carousel-item active">
                  <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-inner" width="640" height="427">
                <div class="carousel-item active">
                  <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-inner" width="640" height="427">
                <div class="carousel-item active">
                  <div class="card">
                      <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                      <div class="card-body">
                        <h4 class="card-title">Special title treatment</h4>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="carousel-controls">
        <div class="carousel-control carousel-control-left">
          <svg xmlns="http://www.w3.org/2000/svg" >
            <path fill-rule="evenodd" d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.75.75 0 111.06 1.06L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z"></path>
          </svg>
        </div>
        <div class="carousel-control carousel-control-right">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="40" height="40">
            <path fill-rule="evenodd" d="M13.22 19.03a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06l-6.25-6.25a.75.75 0 10-1.06 1.06l4.97 4.97H3.75a.75.75 0 000 1.5h14.44l-4.97 4.97a.75.75 0 000 1.06z"></path>
          </svg>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </section>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.3.1/swiper-bundle.min.js"></script>


<script>
  const sectionsWithCarousel = document.querySelectorAll(".section-with-carousel");

  createOffsets();
  window.addEventListener("resize", createOffsets);

function createOffsets() {
  const sectionWithLeftOffset = document.querySelector(
    ".section-with-left-offset"
  );
  const sectionWithLeftOffsetCarouselWrapper = sectionWithLeftOffset.querySelector(
    ".carousel-wrapper"
  );
  const offset = (window.innerWidth - 1100) / 2;
  const mqLarge = window.matchMedia("(min-width: 1200px)");

  if (sectionWithLeftOffset && mqLarge.matches) {
    sectionWithLeftOffsetCarouselWrapper.style.marginLeft = offset + "px";
  } else {
    sectionWithLeftOffsetCarouselWrapper.style.marginLeft = 0;
  }
}

for (const section of sectionsWithCarousel) {
  let slidesPerView = [1.5, 2.5, 3.5];
  if (section.classList.contains("section-with-left-offset")) {
    slidesPerView = [1.5, 1.5, 2.5];
  }
  const swiper = section.querySelector(".swiper");
  new Swiper(swiper, {
    slidesPerView: slidesPerView[0],
    spaceBetween: 15,
    loop: true,
    lazyLoading: true,
    keyboard: {
      enabled: true
    },
    navigation: {
      prevEl: section.querySelector(".carousel-control-left"),
      nextEl: section.querySelector(".carousel-control-right")
    },
    pagination: {
      el: section.querySelector(".swiper-pagination"),
      clickable: true,
      renderBullet: function (index, className) {
        return `<div class=${className}>
            <span class="number">${index + 1}</span>
            <span class="line"></span>
        </div>`;
      }
    },
    breakpoints: {
      768: {
        slidesPerView: slidesPerView[1]
      },
      1200: {
        slidesPerView: slidesPerView[2]
      }
    }
  });
}
    </script>



<section class="pt-5 pb-5">
  <div class="container">
      <div class="row">
          <div class="col-6">
              <h3 class="mb-3">Carousel cards title </h3>
          </div>
          <div class="col-6 text-right">
              <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left"></i>
              </a>
              <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                  <i class="fa fa-arrow-right"></i>
              </a>
          </div>
          <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                  
              </div>
          </div>
      </div>
  </div>
</section>


</body>
</html>
