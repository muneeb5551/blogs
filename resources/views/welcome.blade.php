@extends('layouts.masterlayout')
@section('content')
    <header id="header" role="header">
        <section id="title-section">

        </section>
    </header>

    <main id="main" role="main">
        <section id="image-section">
            <div class="container-fluid p-0">

                <article id="contain-image">

                    <img src="https://picsum.photos/id/526/3000/2000.jpg" alt="The wonderful magic of image sliders"
                        class="img" id="img1">
                    <img src="https://picsum.photos/id/521/3000/2000.jpg" alt="The wonderful magic of image sliders"
                        class="img" id="img2">
                    <img src="https://picsum.photos/id/857/3000/2000.jpg" alt="The wonderful magic of image sliders"
                        class="img" id="img3">
                    <img src="https://picsum.photos/id/1084/3000/2000.jpg" alt="The wonderful magic of image sliders"
                        class="img" id="img4">
                    <img src="https://picsum.photos/id/524/3000/2000.jpg" alt="The wonderful magic of image sliders"
                        class="img" id="img5">
                    <img src="https://picsum.photos/id/64/3000/2000.jpg" alt="The wonderful magic of image sliders"
                        class="img" id="img6">
                    <img src="https://picsum.photos/id/435/3000/2000.jpg" alt="The wonderful magic of image sliders"
                        class="img" id="img7">

                    <div id="contain-button">
                        <ion-icon name="radio-button-on" class="button" id="button1"></ion-icon>
                        <ion-icon name="radio-button-on" class="button" id="button2"></ion-icon>
                        <ion-icon name="radio-button-on" class="button" id="button3"></ion-icon>
                        <ion-icon name="radio-button-on" class="button" id="button4"></ion-icon>
                        <ion-icon name="radio-button-on" class="button" id="button5"></ion-icon>
                        <ion-icon name="radio-button-on" class="button" id="button6"></ion-icon>
                        <ion-icon name="radio-button-on" class="button" id="button7"></ion-icon>
                    </div>

                </article>

            </div>
        </section>
    </main>

    <footer id="footer" role="footer">
        <section id="footer-section">
            <div class=container>
                <p id="signature">At Quick Post, we bring the flavors of your favorite restaurants right to your
                    doorstep. From savory bites to sweet treats, enjoy a delicious meal without the wait. With quick
                    delivery and exclusive deals, satisfying your hunger has never been easier.</p>
            </div>
        </section>
    </footer>


    <div class="container-fluid">
        <div class="container services-sub">
            <h1 class="services-h1">Our Services</h1>

        </div>
        <div class="container p-0 scard-main">
            <div class="services-card">  
            <div class="services-card-sub">
                <h1 class="scard-logo"><i class="bi bi-amazon"></i></h1>
            </div>
            <div class="scard-text">
                <h1 class="sct-h1">Online Delivery</h1>
                <div class="">
                    <p class="sct-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora alias sapiente
                        necessitatibus sequi voluptas excepturi, quaerat repellat repellendus quas corporis,
                        placeat, dolor magni reiciendis deserunt corrupti.</p>
                    </div>
                </div>
                <div class="arrow-circle"><p class="arrow-size"><i class="bi bi-caret-right-fill"></i></p></div>
            </div>
            
            <div class="services-card">  
                <div class="services-card-sub">
                    <h1 class="scard-logo"><i class="bi bi-truck"></i></h1>
                </div>
                <div class="scard-text">
                    <h1 class="sct-h1">Pick & Drop</h1>
                    <div class="">
                        <p class="sct-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora alias sapiente
                            necessitatibus sequi voluptas excepturi, quaerat repellat repellendus quas corporis,
                            placeat, dolor magni reiciendis deserunt corrupti.</p>
                        </div>
                    </div>
                    <div class="arrow-circle"><p class="arrow-size"><i class="bi bi-caret-right-fill"></i></p></div>
                </div>
            
                <div class="services-card">  
                    <div class="services-card-sub">
                        <h1 class="scard-logo"><i class="bi bi-boxes"></i></h1>
                    </div>
                    <div class="scard-text">
                        <h1 class="sct-h1">Packaging</h1>
                        <div class="">
                            <p class="sct-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora alias sapiente
                                necessitatibus sequi voluptas excepturi, quaerat repellat repellendus quas corporis,
                                placeat, dolor magni reiciendis deserunt corrupti.</p>
                            </div>
                        </div>
                        <div class="arrow-circle"><p class="arrow-size"><i class="bi bi-caret-right-fill"></i></p></div>
                    </div>
            
                    <div class="services-card">  
                        <div class="services-card-sub">
                            <h1 class="scard-logo"><i class="bi bi-houses"></i></h1>
                        </div>
                        <div class="scard-text">
                            <h1 class="sct-h1">Warehousing</h1>
                            <div class="">
                                <p class="sct-para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora alias sapiente
                                    necessitatibus sequi voluptas excepturi, quaerat repellat repellendus quas corporis,
                                    placeat, dolor magni reiciendis deserunt corrupti.</p>
                                </div>
                            </div>
                            <div class="arrow-circle"><p class="arrow-size"><i class="bi bi-caret-right-fill"></i></p></div>
                        </div>
        </div>




    </div>

    <div class="container-fluid traking-main">
        <div class="container traking-sub">
            
        </div>
    </div>
@endsection
