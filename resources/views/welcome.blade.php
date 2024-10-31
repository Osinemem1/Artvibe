    @extends('layout.app')

    @section("content")


    <section class="hero" id="home">
        <div class="items1">
            <img src="{{asset('assets/img/wallpaperflare.com_wallpaper.jpg')}}" alt="">
        </div>

        <div class="items">
            <div class="Art">
                <h1><span class="font">W</span>elcome to Art/vibe</h1>
                <p>We draw, creat and inspire.</p>
                <div class="bot">
                    <a href="#">View</a>
                </div>
            </div>

            <div>
                <div class="bot2" id="slide1">
                    <img src="{{asset('assets/img/pexels-fernando-ortiz-p-522599658-18505361-removebg-preview (1).png')}}" alt="">
                </div>
                <div class="bot2" id="slide2">
                    <img src="{{asset('assets/img/pexels-3motional-studio-407102-1081685-removebg-preview.png')}}" alt="">
                </div>

                <div class="bot2" id="slide1">
                    <img src="{{asset('assets/img/pexels-dom-j-7304-297494-removebg-preview.png')}}" alt="">
                </div>

                <div class="bot2" id="slide1">
                    <img src="{{asset('assets/img/pexels-jarosz-1727658-removebg-preview.png')}}" alt="">
                </div>

                <div class="bot2" id="slide1">
                    <img src="{{asset('assets/img/pexels-lrbarbosa-2234685-removebg-preview.png')}}" alt="">
                </div>
            </div>


        </div>
        </div>
    </section>

    <div class="about" id="about">

        <div>
            <h1>
                <hr>
                About-Me.
                <hr>
            </h1>
        </div>
        <div class="about-one">
            <p>Welcome to my world of Art [Cynthia Maduka] a passionate illustrator with a deep love for bringing stories and emotions to life through my drawing's.Weather am working on intricate porrait's, imaginative land scapes or abstract designs, i put my heart and soul into every peace. And feel free to explore my gallery.am always open to colaborating on cretive projects and turning ideas into reality.Thank you for visiting my site,i hope my work inspires you as much as it inspires me.</p>
            <div class="tools">
                <div class="tools1"><img src="{{asset('assets/img/color-pencil.png')}}" alt=""></div>
                <div class="tools1"><img src="{{asset('assets/img/colored-pencils.png')}}" alt=""></div>
                <div class="tools1"><img src="{{asset('assets/img/colored.png')}}" alt=""></div>
                <div class="tools1"><img src="{{asset('assets/img/drawing.png')}}" alt=""></div>
                <div class="tools1"><img src="{{asset('assets/img/homework.png')}}" alt=""></div>
            </div>
        </div>
    </div>



    <div class="art-work" id="portfolio">

        <div class="cheese">
            <h1>
                <hr class="line">
                My Art Work's.
                <hr class="line">
            </h1>
        </div>


        <section class="slider">
            <div class="slide"><img src="{{asset('assets/image5/WhatsApp Image 2024-08-26 at 17.55.54 (2).jpeg')}}" alt=""></div>
            <div class="slide"><img src="{{asset('assets/image5/WhatsApp Image 2024-08-26 at 17.55.50 (2).jpeg')}}" alt=""></div>
            <div class="slide"><img src="{{asset('assets/img/pexels-dom-j-7304-297494-removebg-preview.png')}}" alt=""></div>

            <button class="slider__btn slider__btn--left">&larr;</button>
            <button class="slider__btn slider__btn--right">&rarr;</button>
            <div class="dots"></div>
        </section>




        <div class="photo">

            <div class="photo-one">
                <div class="photo-two">
                    <img src="{{asset('assets/image5/WhatsApp Image 2024-08-26 at 17.55.54 (2).jpeg')}}" alt="">
                </div>
                <div class="text">
                    <button>View insights</button>
                </div>
            </div>


            <div class="photo-one">
                <div class="photo-two">
                    <img src="{{asset('assets/image5/WhatsApp Image 2024-08-26 at 17.55.50 (2).jpeg')}}" alt="">
                </div>
                <div class="text">
                    <button>View insights</button>
                </div>
            </div>


            <div class="photo-one">
                <div class="photo-two">
                    <img src="{{asset('assets/image5/WhatsApp Image 2024-08-26 at 17.55.51 (1).jpeg')}}" alt="">
                </div>
                <div class="text">
                    <button>View insights</button>
                </div>
            </div>


            <div class="photo-one">
                <div class="photo-two">
                    <img src="{{asset('assets/image5/WhatsApp Image 2024-08-26 at 17.55.54 (3).jpeg')}}" alt="">
                </div>
                <div class="text">
                    <button>View insights</button>
                </div>
            </div>

            <div class="photo-one">
                <div class="photo-two">
                    <img src="{{asset('assets/image5/kodex (3).jpeg')}}" alt="">
                </div>
                <div class=" text">
                    <button>View insights</button>
                </div>
            </div>

            <div class="photo-one">
                <div class="photo-two">
                    <img src="{{asset('assets/image5/kodex (4).jpeg')}}" alt="">
                </div>

                <div class=" text">
                    <button>View insights</button>
                </div>
            </div>


            <div class="photo-one">
                <div class="photo-two">
                    <img src="{{asset('assets/image5/kodex (6).jpeg')}}" alt="">
                </div>

                <div class=" text">
                    <button>View insights</button>
                </div>
            </div>

        </div>

        <div class="blog" id="blog">
            <!-- <h1>

                <hr>
                Contact Us.
                <hr>
            </h1> -->

            <div class="blog-body" id="contact">
                <div class="card-container">
                    <div class="contact-card">
                        <h1>
                            <i class="ri-map-pin-2-line"></i>
                        </h1>
                        <h2>MAIN OFFICE</h2>
                        <p>Soho Broadway st.New York,NY101</p>
                    </div>
                    <div class="contact-card">
                        <h1>
                            <i class="ri-phone-line"></i>
                        </h1>
                        <h2>PHONE NUMBER</h2>
                        <p>234-9876-5400</p>
                        <p>888-0123-4567(Toll-Free)</p>
                    </div>
                    <div class="contact-card">
                        <h1>
                            <i class="ri-building-3-line"></i>
                        </h1>
                        <h2>FAX</h2>
                        <p>1-234-567-8900</p>
                    </div>
                    <div class="contact-card">
                        <h1>
                            <i class="ri-mail-line"></i>
                        </h1>
                        <a href="#">hell@theme.com</a>
                    </div>
                </div>
                <form action="">
                    <div class="inptt"><input type="text" name="name" placeholder="First Name"></div>
                    <div class="inptt"><input type="text" name="last_name" placeholder="Last Name"></div>

                    <div class="inptt"> <input type="email" name="email" placeholder="Email"></div>
                    <div class="inptt"> <input type="text" name="phone" placeholder="Phone"></div>

                    <div class="inptt"> <textarea name="" id=""></textarea></div>

                    <div> <button>send</button>



                </form>

            </div>

        </div>

        @endsection













        <!-- <button id="scrollToTopBtn">arrow</button> -->