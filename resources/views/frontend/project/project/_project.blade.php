<section class="project-section style-2 padding-tb">
    <div class="container">
        <div class="section-wrapper">
            @foreach($projects as $project)
                <div class="post-item">
                    <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                        <a href="#"><img src="{{ $project->getFirstMediaUrl('project', 'data') }}" alt="project"></a>
                    </div>
                    <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                        <h4><a href="#">{{ $project->title }}</a></h4>
                        <ul>
                            <li><i class="fas fa-folder-open"></i><a href="#">{{ $project->category }}</a></li>
                            <li><i class="fas fa-home"></i><a href="#">{{ $project->name }}</a></li>
                        </ul>
                        <p>{{ $project->description }}</p>
                        <a href="#" class="custom-btn">Order Now <i class="fas fa-heart"></i></a>
                    </div>
                </div>
            @endforeach
        </div>

        <ul class="pagination" data-aos="fade-up" data-aos-duration="700">
            <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
            <li><a href="#" class="d-none d-sm-block">1</a></li>
            <li><a href="#" class="active">2</a></li>
            <li><a href="#" class="dot">...</a></li>
            <li><a href="#" class="d-none d-sm-block">9</a></li>
            <li><a href="#" class="d-none d-sm-block">10</a></li>
            <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
        </ul>
    </div>
</section>