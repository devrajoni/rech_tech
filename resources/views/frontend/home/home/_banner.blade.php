<!-- banner start here -->
@foreach($heroSections as $heroSection)
    <section class="banner" style="background-image: url({{ $heroSection->getFirstMediaUrl('slider', 'hero') }}); background-size: cover;">

        <div class="overlay text-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6 col-xxl-4 col-md-10 col-12">
                        <div class="banner-content">
                            <div class="banner-heading">
                                <h2>Let's...Go </h2>
                                <h2>With <span>Envi Share</span></h2>
                                <h2>Protects The Wild</h2>
                                <h2><span>Planting Trees.</span></h2>
                            </div>
                            <p>Convene Expole Marke Drven Meta Servce the are Futue Profer Moes Energstce Sndicate Compete Comunes Aftering of Bledng Edge Conten Interactively other awesome theme Reconceptualze</p>
                            <a href="#" class="custom-btn">Donate Now <i class="fas fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endforeach
<!-- banner ending here -->