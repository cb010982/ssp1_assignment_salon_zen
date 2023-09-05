@extends('layouts.app')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex mb-3"><span class="flaticon-facial-treatment"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Skin &amp; Beauty Care</h3>
                            <p>Elevate your beauty with our expert skin care services, designed to enhance your natural
                                charm and leave you feeling fabulous.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex mb-3"><span class="flaticon-cosmetics"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Makeup &amp; Dressings</h3>
                            <p>Discover the secret to radiant beauty with our salon's harmonious blend of makeup artistry
                                and impeccable dressing services, tailored just for you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex mb-3"><span class="flaticon-curl"></span></div>
                        <div class="media-body">
                            <h3 class="heading">Hair Styling</h3>
                            <p>Unlock the power of perfect hair with our salon's cutting and styling expertise, where
                                creativity and precision combine to craft your signature look.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info text-center">
                <p class="nav-link"><a href="#" class="nav-item">More...</a></p>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Beauty Experts</h2>
                    <p>Passionately Crafting Your Perfect Look – Our Stylists, Your Beauty Architects.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_1.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="#">Mellisa Smith</a></h3>
                            <span class="position">Makeup Stylist</span>
                            <div class="text">
                                <p>I'm dedicated to elevating your natural beauty and confidence. With 12 years of
                                    experience, I specialize in bridal, special occasion, and photoshoot makeup.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_2.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="#">Marie Bush</a></h3>
                            <span class="position"> Massage Therapist</span>
                            <div class="text">
                                <p>Welcome to Salon Zen . Having 20 years of experience, I offer a range of therapeutic
                                    massage techniques tailored to your unique needs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/person_3.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="#">Ana Holland</a></h3>
                            <span class="position">Nail Specialist </span>
                            <div class="text">
                                <p>With a keen eye for detail and a passion for nail artistry, I create stunning,
                                    long-lasting manicures and pedicures tailored to your style.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                    <div class="staff">
                        <div class="img mb-4" style="background-image: url(images/work-5.jpg);"></div>
                        <div class="info text-center">
                            <h3><a href="#">Iris Anderson</a></h3>
                            <span class="position">Hairdresser</span>
                            <div class="text">
                                <p>Welcome to Salon Zen, where your dream hairstyle becomes a reality. I specialize in
                                    crafting personalized hair transformations to create your signature look.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info text-center">
                <p class="nav-link"><a href="#" class="nav-item">More...</a></p>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-discount img" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-5 discount ftco-animate">
                    <h3>Save up to 50% Off</h3>
                    <h2 class="mb-4">Referral Discount</h2>
                    <p class="mb-4">Double the Beauty, Double the Savings! Refer a friend to our salon, and you both enjoy
                        exclusive discounts on your next visit. Spread the word and let the beauty savings multiply!</p>
                    <p><a href="#appointments" class="btn btn-white btn-outline-white px-4 py-3">Book Now !</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Work</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-9.jpg" class="img-fluid" alt="Beauty products">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Make-up</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-2.jpg" class="img-fluid" alt="Beauty products">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Hair Coloring</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-10.jpg" class="img-fluid" alt="Beauty products">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Manicure</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-partner bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Products</h2>
                </div>
            </div>
            <div class="row partner justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 ftco-animate">
                            <a href="#" class="partner-entry">
                                <img src="images/product1.jpg" class="img-fluid" alt="Beauty products">
                            </a>
                        </div>
                        <div class="col-md-3 ftco-animate">
                            <a href="#" class="partner-entry">
                                <img src="images/product2.jpg" class="img-fluid" alt="Beauty products">
                            </a>
                        </div>
                        <div class="col-md-3 ftco-animate">
                            <a href="#" class="partner-entry">
                                <img src="images/product7.jpg" class="img-fluid" alt="Beauty products">
                            </a>
                        </div>
                        <div class="col-md-3 ftco-animate">
                            <a href="#" class="partner-entry">
                                <img src="images/product9.jpg" class="img-fluid" alt="Beauty products">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="info text-center">
                <p class="nav-link"><a href="#" class="nav-item">More...</a></p>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Beauty Pricing</h2>
                    <p>Unlock Your Inner Beauty, Within Your Budget.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Waxing</h3>
                        </div>
                        <ul>
                            <li>Eyebrow Waxing : Rs 1000</li>
                            <li>Upper Lip Waxing : Rs 800</li>
                            <li>Chin Waxing : Rs 800</li>
                            <li>Full Face Waxing : Rs 5000</li>
                            <li>Underarm Waxing : Rs 4000</li>
                        </ul>
                        <p class="button text-center"><a href="#"
                                class="btn btn-primary btn-outline-primary px-4 py-3">More</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Pedicure</h3>
                        </div>
                        <ul>
                            <li>Basic Pedicure : Rs 2500</li>
                            <li>Deluxe Pedicure : Rs 6200</li>
                            <li>Spa Pedicure : Rs 4000</li>
                            <li>Gel Pedicure : Rs 5000</li>
                            <li>French Pedicure : Rs 4500</li>
                        </ul>
                        <p class="button text-center"><a href="#"
                                class="btn btn-primary btn-outline-primary px-4 py-3">More</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <!--	<div class="pricing-entry active pb-5 text-center">-->
                    <div class="pricing-entry pb-5 text-center">
                        <!--<div class="pricing-entry active pb-5 text-center">  // to get the pink outline permanently-->
                        <div>
                            <h3 class="mb-4">Manicure</h3>
                        </div>
                        <ul>
                            <li>Basic Manicure : Rs 1500</li>
                            <li>Deluxe Manicure : Rs 5200</li>
                            <li>Spa Manicure : Rs 3000</li>
                            <li>Gel Manicure : Rs 4000</li>
                            <li>French Manicure : Rs 3500</li>
                        </ul>
                        <p class="button text-center"><a href="#appointments"
                                class="btn btn-primary btn-outline-primary px-4 py-3">More</a></p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Massage</h3>

                        </div>
                        <ul>
                            <li>Collagen Facial : Rs 15000</li>
                            <li>Hydrating Facial - Rs.20000</li>
                            <li>Anti-Aging Facial : Rs 35000</li>
                            <li>Gold Facial : Rs 30000</li>
                            <li>Exfoliating Facial : Rs 15000</li>
                        </ul>
                        <p class="button text-center"><a href="#"
                                class="btn btn-primary btn-outline-primary px-4 py-3">More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-flower"></span></div>
                                    <span>Products sold</span>
                                    <strong class="number" data-number="3500">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-flower"></span></div>
                                    <span>Hair treatment</span>
                                    <strong class="number" data-number="1000">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-flower"></span></div>
                                    <span>Happy Client</span>
                                    <strong class="number" data-number="5400">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-flower"></span></div>
                                    <span>Skin Treatment</span>
                                    <strong class="number" data-number="900">0</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">New Arrivals</h2>
                    <p>Introducing Beauty's Latest Obsession – Explore Our New Arrivals and Stay Ahead of the Trends.</p>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('images/work-11.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <!--          <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
                            </div>
                            <h3 class="heading mt-2"><a href="#">DreamSkin Night Cream</a></h3>
                            <p>Our night creams provide skin repair and renewal Where your skin undergoes a natural repair
                                and regeneration process during night time. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('images/product3.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <!--          <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
                            </div>
                            <h3 class="heading mt-2"><a href="#">Pure Radiance Vitamin C Boost Serum</a></h3>
                            <p>One of our best facial serums for oily and acne-prone skins.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="#" class="block-20" style="background-image: url('images/product4.jpg');">
                        </a>
                        <div class="text py-4 d-block">
                            <div class="meta">
                                <!--          <div><a href="#">Sept 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
                            </div>
                            <h3 class="heading mt-2"><a href="#">Ageless Elegance Renewal Cream</a></h3>
                            <p>Our well known anti-aging cream reduces the appearance of fine lines and wrinkles on your
                                skin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-appointment" id="appointments">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md-2"></div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="appointment-info text-center p-5">
                        <div class="mb-4">
                            <h3 class="mb-3">Address</h3>
                            <p> No 12. High-level Road, Nugegoda, Sri Lanka </p>
                        </div>
                        <div class="mb-4">
                            <h3 class="mb-3">Phone</h3>
                            <p class="day"><strong>+94 112 807 979</strong> or <strong>+94 777 605 000</strong></p>
                        </div>
                        <div>
                            <h3 class="mb-3">Opening Hours</h3>
                            <p class="day"><strong>Monday - Friday</strong></p>
                            <span>08:00am - 09:00pm</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 appointment pl-md-5 ftco-animate">
                    <h3 class="mb-3">Appointments</h3>
                    <form action="{{ route('submit-appointment') }}" method="POST" class="appointment-form">
                        @csrf
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row form-group d-flex">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="first_name" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row form-group d-flex">
                            <div class="col-md-6">
                                <div class="input-wrap">
                                    <div class="icon"><span class="ion-md-calendar"></span></div>
                                    <input type="text" id="appointment_date" class="form-control"
                                        name="appointment_date" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Book now !" class="btn btn-white btn-outline-white py-3 px-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
