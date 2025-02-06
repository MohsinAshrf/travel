@extends('layout.main')
@section('main')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white animated slideInDown">Packages</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-primary" href="{{route('index')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Packages</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

 <!-- Package Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
            <h1 class="mb-5">Awesome Packages</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="row g-4 justify-content-center">
                @foreach ($pkg as $item )
             <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                 <div class="package-item">
                     <div class="overflow-hidden">
                         <img class="img-fluid" src="{{ $item->image }}" alt="" style="width:350px;height:232px">
                     </div>
                     <div class="d-flex border-bottom">
                         <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ Str::title($item->location) }}</small>
                         <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i> {{ $item->day }} days</small>
                         {{-- <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2 Person</small> --}}
                     </div>
                     <div class="text-center p-4">
                         {{-- <h3 class="mb-0">$149.00</h3> --}}
                         <div class="mb-3">
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                         </div>
                         <p>{{ Str::limit($item->content, 25, '...') }}</p>
                         <div class="d-flex justify-content-center mb-2">
                             <a href="{{ route('more',$item->id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                             <a href="{{ route('booked' , $item->id )}}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>
                         </div>
                     </div>
                 </div>
             </div>
          
             @endforeach
        </div>
    </div>
</div>
</div>
<!-- Package End -->
 <!-- Booking Start -->
 <div class="container-fluid p-0 py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid p-0">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Booking</h6>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="mb-4 text-bold text-primary"><h4 class="text-primary">Don't wait to plan your dream trip!</h4> Book now and enjoy easy travel with the best services made just for you.                        </p>
                    <p class="mb-4">Ready to explore? Booking your trip has never been easier! Choose your destination, pick your package, and let us handle the rest. Whether it’s a relaxing escape or a thrilling adventure, we’re here to make your journey unforgettable. Secure your spot today and start making memories!"</p>
                    {{-- <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a> --}}
                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4">Book A Tour</h1>
                    <form method="POST" action="{{ route('book.store') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}">
                                    <label for="name">Your Name</label>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="age" name="age" placeholder="Your Age" value="{{ old('age') }}">
                                    <label for="age">Your Age</label>
                                    @error('age')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="cnic" name="cnic" placeholder="Your CNIC" value="{{ old('cnic') }}">
                                    <label for="cnic">Your CNIC</label>
                                    @error('cnic')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-transparent" name="city" id="city">
                                        <option value="" selected disabled>Chose City</option>
                                        <option value="Skardu" {{ old('city') == 'Skardu' ? 'selected' : '' }}>Sakardu</option>
                                        <option value="Azad Kashmir" {{ old('city') == 'Azad Kashmir' ? 'selected' : '' }}>Azad Kashmir</option>
                                        <option value="Naran Kaghan" {{ old('city') == 'Naran Kaghan' ? 'selected' : '' }}>Naran Kaghan</option>
                                        <option value="Swat Kalam" {{ old('city') == 'Swat Kalam' ? 'selected' : '' }}>Swat Kalam</option>
                                        <option value="Hunza" {{ old('city') == 'Hunza' ? 'selected' : '' }}>Hunza</option>
                                        <option value="Muree/Islamabad" {{ old('city') == 'Muree/Islamabad' ? 'selected' : '' }}>Muree/Islamabad</option>
                                    </select>
                                    <label for="city">City</label>
                                    @error('city')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="contact_no" name="contact_no" placeholder="Contact" value="{{ old('contact_no') }}">
                                    <label for="contact_no">Contact</label>
                                    @error('contact_no')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="address" name="address" placeholder="Address" value="{{ old('address') }}">
                                    <label for="address">Address</label>
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="col-12">
                                <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Booking Start -->

  <!-- Process Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
            <h1 class="mb-5">3 Easy Steps</h1>
        </div>
        <div class="row gy-5 gx-4 justify-content-center">
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-globe fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Choose A Destination</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-dollar-sign fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Pay Online</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-plane fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Fly Today</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Tempor erat elitr rebum clita dolor diam ipsum sit diam amet diam eos erat ipsum et lorem et sit sed stet lorem sit</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Start -->

@endsection