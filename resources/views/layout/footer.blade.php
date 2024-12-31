
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">PeaksnSlopeGallery</h4>
                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt rerum molestiae tempore, officia ipsam tenetur!</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Khalid Road,Near Gol masjid,opposite to Sanatzar Near Dar-ul-Shifa Hospital,Sheikhupura</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+923344512693</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>peaksnslopegallery@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://wa.me/03008840170"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <iframe
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3394.3230350220456!2d73.9770283!3d31.707069699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3918c376b40c9f91%3A0xef98601efe8f2d3a!2sSanat%20Zar!5e0!3m2!1sen!2s!4v1734026135045!5m2!1sen!2s" 
                         height="300"
                         style="border:0;"
                         allowfullscreen=""
                         loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade"></iframe>
                         <!-- <img class="img-fluid bg-light p-1" src="img/package-1.jpg" alt=""> -->
                        </div>
                    </div> --}}
                </div>
              
            </div>
        </div>
        <div class="container-fluid border-top  bg-dark">
            <div class=" container-fluid copyright    w-50">
                <div class="container">
                    <div class="col-lg-12 text-center py-4  ">
                        &copy; {{date('Y')}} <a class=" text-white" href="{{route('index')}}">PeaksnSlopeGallery</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                      
                        <div class="row mt-1">
                    <div class="bg-dark col-lg-2"></div>
                    <div class="col-lg-8"> <a class="text-white  " href="#">   Designed By Mohsin </a></div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('lib/easing/easing.min.js')}}"></script>
    {{-- <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script> --}}
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
    {{-- <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script> --}}
    <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>