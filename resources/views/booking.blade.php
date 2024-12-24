@extends('layout.main')
@section('main')
 <div class="mt-5"></div>
 <!-- Booking Start -->
 <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Booking</h6>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
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
                                        <option value="Destination 1" {{ old('city') == 'Destination 1' ? 'selected' : '' }}>Destination 1</option>
                                        <option value="Destination 2" {{ old('city') == 'Destination 2' ? 'selected' : '' }}>Destination 2</option>
                                        <option value="Destination 3" {{ old('city') == 'Destination 3' ? 'selected' : '' }}>Destination 3</option>
                                    </select>
                                    <label for="city">City</label>
                                    @error('city')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="contact_no" name="contact_no" placeholder="Contact" value="{{ old('contact_no') }}">
                                    <label for="contact_no">Contact</label>
                                    @error('contact_no')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                    
                            <div class="col-6">
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
   @endsection