@extends('layouts.app')

@section('content')

<div class="hero-wrap" style="background-image: url({{asset('images/eo4.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Eventees HUB</h1>
                {{-- <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Created by <a
                        href="#">Colorlib.com</a></p>--}}

                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="https://vimeo.com/45830194"
                        class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span
                            class="icon-play mr-2"></span>Watch Video</a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Pelatihan JTI</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-cause owl-carousel">
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img" style="background-image: url({{asset('images/cause-1.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Clean water for the urban area</a></h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life</p>
                                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                <div class="progress custom-progress-success">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                        aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img" style="background-image: url({{asset('images/cause-2.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Clean water for the urban area</a></h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life</p>
                                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                <div class="progress custom-progress-success">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                        aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img" style="background-image: url({{asset('images/cause-3.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Clean water for the urban area</a></h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life</p>
                                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                <div class="progress custom-progress-success">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                        aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img" style="background-image: url({{asset('images/cause-4.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Clean water for the urban area</a></h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life</p>
                                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                <div class="progress custom-progress-success">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                        aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img" style="background-image: url({{asset('images/cause-5.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Clean water for the urban area</a></h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life</p>
                                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                <div class="progress custom-progress-success">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                        aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img" style="background-image: url({{asset('images/cause-6.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Clean water for the urban area</a></h3>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life</p>
                                <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
                                <div class="progress custom-progress-success">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 28%"
                                        aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <span class="fund-raised d-block">$12,000 raised of $30,000</span>
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
                <h2 class="mb-4">Latest Donations</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url({{('images/person_5.jpg')}});"></div>
                        <div class="info ml-4">
                            <h3><a href="teacher-single.html">Eka Evita Anggraini</a></h3>
                            <span class="position">Founder EventeesHub</span>
                            <div class="text">
                                <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url({{('images/person_1.jpg')}});"></div>
                        <div class="info ml-4">
                            <h3><a href="teacher-single.html">M Rohmatul Mauludi</a></h3>
                            <span class="position">Co Founder EventeesHub</span>
                            <div class="text">
                                <p>Donated <span>$300</span> for <a href="#">Children Needs Food</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url({{('images/person_6.jpg')}});"></div>
                        <div class="info ml-4">
                            <h3><a href="teacher-single.html">Achmad Rachmandika Rizky Pratama</a></h3>
                            <span class="position">Co Founder EventeesHub</span>
                            <div class="text">
                                <p>Donated <span>$150</span> for <a href="#">Children Needs Food</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url({{('images/person_3.jpg')}});"></div>
                        <div class="info ml-4">
                            <h3><a href="teacher-single.html">Muhammad Rafi Prabowo</a></h3>
                            <span class="position">Co Founder EventeesHub/span>
                            <div class="text">
                                <p>Donated <span>$250</span> for <a href="#">Children Needs Food</a></p>
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
                <h2 class="mb-4">Recent from blog</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{asset('images/image_1.jpg')}});">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sept 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{('images/image_2.jpg')}});">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sept 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{('images/image_3.jpg')}});">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sept 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-3"><a href="#">Hurricane Irma has devastated Florida</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Latest Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{('images/event-1.jpg')}});">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sep. 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                        <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                            <span><i class="icon-map-o"></i> Venue Main Campus</span>
                        </p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                        <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{('images/event-2.jpg')}});">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sep. 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                        <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                            <span><i class="icon-map-o"></i> Venue Main Campus</span>
                        </p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                        <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url({{('images/event-3.jpg')}});">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sep. 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                        <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                            <span><i class="icon-map-o"></i> Venue Main Campus</span>
                        </p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                        <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-3 img" style="background-image: url({{asset('images/bg_3.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch" style="background-image: url({{asset('images/bg_4.jpg')}});">
                </div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Be a volunteer</h3>
                <form action="#" class="volunter-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script>
    $(document).ready(function() {
            $('#alert-login').click(function() {
                // berikan waktu 1 detik, lalu arahkan ke halaman login

                {{--if (!{{ auth()->check() }}) {--}}
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'You must login first!',
                    footer: '<a href="/login">Login</a>'
                })
                // }
            });

            //buatkan javascript jika tombol donate di klik maka akan menampilkan alert
            {{--document.getElementById('alert-login').onclick = function() {--}}
            {{--    // jika belum melakukan login maka akan menampilkan alert--}}
            {{--    if (!{{ auth()->check() }}) {--}}
            {{--        Swal.fire({--}}
            {{--            icon: 'error',--}}
            {{--            title: 'Oops...',--}}
            {{--            text: 'You must login first!',--}}
            {{--            footer: '<a href="/login">Login</a>'--}}
            {{--        })--}}
            {{--    }--}}
            {{--    Swal.fire({--}}
            {{--        icon: 'error',--}}
            {{--        title: 'Oops...',--}}
            {{--        text: 'Something went wrong!',--}}
            {{--        footer: '<a href="">Why do I have this issue?</a>'--}}
            {{--    })--}}
            {{--};--}}
        })
</script>
@endsection