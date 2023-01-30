@foreach($heroSections as $heroSection)
<section class="page-header" style="background-image: url({{ $heroSection->getFirstMediaUrl('slider', 'hero') }}); background-size: cover;">
    <div class="page-header-area">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-title">
                    <h2>About</h2>
                    <h2><span>Welcome to EnviShare</span></h2>
                </div>
                <ul class="breadcamp">
                    <li>
                        <a href="#"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li>
                        <a class="active">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endforeach