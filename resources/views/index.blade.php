  @extends('layouts.master')
 @section('content')


 <div class="container d-flex justify-content-center w-75 h-75 w-md-100 mb-0 mb-md-1 mb-lg-2 mb-xl-2">

  <div class="slider" id="slider">
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
 

 <div class="container col-xxl-8 px-4 py-3">
  <div class="row flex-lg-row-reverse align-items-center justify-content-center g-5 py-xl-5 py-lg-5 py-md-5 py-3">
    <div class="col-12 col-lg-6">
      <img 
      src="{{ URL('storage/img1.jpg') }}" 
      alt="dvjones" 
      class="p-0"
      width="560"
      height="300">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Rasfata-te, iar noi te rasplatim</h1>
      <p class="lead">Noiembrie este luna REDUCERILOR! Tine-te bine si pregateste-te pentru reducerile cutremuratoare pe care le-am pregatit pentru exclusiv pentru tine!</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <button type="button" class="btn green-button btn-lg px-4 me-md-2">Vreau sa vad reducerile!</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Anunta-ma la reduceri noi</button>
      </div>
    </div>
  </div>
</div>

<div class="container">  
  <div class="pt-5">
    <h2 class="separator display-6 text-center pb-5 fw-semibold">Oferte speciale</h2>
  </div>
 
<section class="section-with-carousel section-with-left-offset position-relative">
  <div class="carousel-wrapper">
    <div class="swiper">
      <div class="swiper-wrapper">

        @if(count((array) $produse )>0)

@foreach ($discounts as $discount)      
  @foreach ($produse as $produs)
  
    @if ($produs->id===$discount->product_id)

        <div class="swiper-slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card h-50" style="border: none">
                  <img class="img-fluid" alt="100%x280" src="{{ asset('images/' .  $produs->product_image) }}">
                  <div class="card-body text-center">
                    <h4 class="card-title fs-5"><a href="{{route('produse.show',$produs->id)}}">{{ $produs->product_name }}</a></h4>
                    <div class="card-text d-flex flex-row justify-content-center">
                      <div class="text-decoration-line-through px-1">{{ $discount->product_price}} RON</div>
                      <div class="fw-semibold text-danger px-1">{{ $discount->new_price }} RON</div>

                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        @endif
        @endforeach
        @endforeach
        @else
        <tr>
            <td colspan="4">
                Nu exista produse
            </td>
        </tr>
        @endif

      </div>
    </div>
  </div>
  <div class="carousel-controls">
    <div class="carousel-control carousel-control-left">
      <i class="bi bi-arrow-left"></i>
    </div>
    <div class="carousel-control carousel-control-right">
      <i class="bi bi-arrow-right"></i>
    </div>
  </div>
</section>

</div>

<div class="container d-flex justify-content-center">
  <div class="temp1 p-xl-5 p-lg-5 p-md-5 p-4 w-75 m-5">

  <p class="lead temp1-1 rounded p-3">Noiembrie este luna REDUCERILOR! Tine-te bine si pregateste-te pentru reducerile cutremuratoare pe care le-am pregatit pentru exclusiv pentru tine!</p>

 </div>
</div>

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
let slidesPerView = [1.5, 2.5, 3.5, 4.5];
if (section.classList.contains("section-with-left-offset")) {
slidesPerView = [1.5, 1.5, 2.5, 3.5];
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
breakpoints: {
  460:{
    slidesPerView: slidesPerView[1]
  },
  768: {
    slidesPerView: slidesPerView[2]
  },
  1200: {
    slidesPerView: slidesPerView[3]
  }
}
});
}
</script>

@endsection