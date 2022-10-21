@extends('layouts.master')
@section('content')

<div class="container">
<a href="{{ route('produse.index') }}" class="btn btn-primary btn-sm float-end">Vezi toate</a>
	
	<div class="container-fluid">
        <div class="row">
        <div class="col-6">
            <div class="container">
                <div class="row">
					<img src="{{ asset('images/' .  $product->product_image) }}" width="100%" class="img-thumbnail" />

                </div>
            </div>

        </div>
        <div class="col-6">
            <div class="container pt-5">
                <div class="row pt-5">
                    <h1 class="pt-5 fs-2s">{{$product->product_name}}</h1>
                </div>
                <div>
					{{$product->product_price}} RON
                </div>
                <div>
					{{$product->description}}
                </div>
                <div>
					{{$product->product_color}}
                </div>
                <div>
					{{$product->quantity}}

                </div>
                <div>
                    Cost transport: 18 RON
                </div>
                <div>
					{{$product->quantity}}
                <a href="{{ route('addToCart', $product->id)}}" class="nav-link px-2 link-dark">Adauga in cos</a>
                </div>
                <div>
					{{$product->id}}
                </div>

            </div>
            <div class="pt-5">
                <h2 class="separator display-6 text-center pb-5 fw-bold"></h2>
              </div>
            <div>
                <Button>Adauga la favorite</Button>
                <Button>Cere informatii</Button>
            </div>
           

        </div>
    </div>
    </div>
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Atribute- descriere produs
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Reviews
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="pt-5">
    <h2 class="separator display-6 text-center pb-5 fw-bold">Produse recomandate</h2>
  </div>
  <div class="container">
    <div class="row pt-3">
      <div class="col-lg-3 d-flex flex-column align-items-center">
        <img src="photos/honest.png" width="140" height="140" alt="">
        <h2 class="fw-normal">Onestitate</h2>
      </div>
      <div class="col-lg-3 d-flex flex-column align-items-center">
        <img src="photos/united.png" width="140" height="140" alt="">
        <h2 class="fw-normal">Spirit de echipă</h2>
      </div>
      <div class="col-lg-3 d-flex flex-column align-items-center">
        <img src="photos/collaborate.png" width="140" height="140" alt="">
        <h2 class="fw-normal">Integritate</h2>
      </div>
      <div class="col-lg-3 d-flex flex-column align-items-center">
        <img src="photos/united.png" width="140" height="140" alt="">
        <h2 class="fw-normal">Spirit de echipă</h2>
      </div>
    </div>
</div>
</div>
</div>




@endsection