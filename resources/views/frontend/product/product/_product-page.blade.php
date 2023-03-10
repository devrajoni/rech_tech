<section class="shop-page padding-tb">
    @foreach($products as $product)
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12 sticky-widget">
                    <div class="shop-title d-flex flex-wrap justify-content-between">
                        <p>Showing 01 - 12 of 139 Results</p>
                        <div class="product-view-mode">
                            <a class="active" data-target="grid"><i class="fas fa-th"></i></a>
                            <a data-target="list"><i class="fas fa-list"></i></a>
                        </div>
                    </div>
                    <div class="shop-product-wrap grid row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <img src="{{ $product->getFirstMediaUrl('product', 'image') }}" alt="shope">
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">{{ $product->name }}</a></h5>
                                    <p>
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </p>
                                    <h6>{{ $product->price }}</h6>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <img src="{{ $product->getFirstMediaUrl('product', 'image') }}" alt="shope">
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="far fa-eye"></i></a>
                                        <a href="#"><i class="far fa-heart"></i></a>
                                        <a href="#"><i class="fas fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">{{ $product->title }}</a></h5>
                                    <p>
                                        <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                    </p>
                                    <h6>
                                        {{ $product->price }}
                                    </h6>
                                    <p>
                                        {{ $product->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-area d-flex flex-wrap justify-content-center">
                        <ul class="pagination d-flex flex-wrap m-0">
                            <li class="prev">
                                <a href="#"><i class="fas fa-angle-double-left"></i></a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#"  class="active d-none d-md-block">2</a></li>
                            <li><a href="#" class="d-none d-md-block">3</a></li>
                            <li><a href="#" class="dot">....</a></li>
                            <li><a href="#" class="d-none d-md-block">4</a></li>
                            <li class="next">
                                <a href="#"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-12 sticky-widget">
                    <div class="sidebar-widget">
                        <div class="widget-search">
                            <h4>Search Keyword</h4>
                            <form action="action">
                                <input type="text" placeholder="Search Here..." name="s">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="shop-widget">
                            <div class="widget-title">
                                <h4>Category</h4>
                            </div>
                            <div class="widget-wrapper">
                                <ul class="shop-menu">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="#0">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="letest-product">
                            <div class="widget-title">
                                <h4>Latests Products</h4>
                            </div>
                            <div class="widget-wrapper">
                                <ul>
                                    <li>
                                        <div class="product-thumb">
                                            <img src="{{ asset('frontend/assets/images/shope/01.jpg') }}" alt="shope">
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#">Product Text Here</a></h6>
                                            <p>
                                                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> <span>(3 review)</span>
                                            </p>
                                            <h6>$200</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-thumb">
                                            <img src="{{ asset('frontend/assets/images/shope/02.jpg') }}" alt="shope">
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#">Product Text Here</a></h6>
                                            <p>
                                                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> <span>(3 review)</span>
                                            </p>
                                            <h6>$200</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-thumb">
                                            <img src="{{ asset('frontend/assets/images/shope/03.jpg') }}" alt="shope">
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#">Product Text Here</a></h6>
                                            <p>
                                                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> <span>(3 review)</span>
                                            </p>
                                            <h6>$200</h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-thumb">
                                            <img src="{{ asset('frontend/assets/images/shope/04.jpg') }}" alt="shope">
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#">Product Text Here</a></h6>
                                            <p>
                                                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> <span>(3 review)</span>
                                            </p>
                                            <h6>$200</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal" id="quick_view">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
                        <div class="modal-body">
                            <div class="product-details-inner">
                                <div class="row">
                                    <div class="col-lg-5 col-12">
                                        <div class="popup-slide">
                                            <div class="slider-for">
                                                <div class="thumb">
                                                    <img src="{{ $product->getFirstMediaUrl('product', 'image') }}" alt="shope">
                                                </div>
                                            </div>
                                            <div class="slider-nav">
                                                <div class="thumb">
                                                    <img src="{{ $product->getFirstMediaUrl('product', 'image') }}" alt="shope">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="product-content">
                                            <h5><a href="#">Product Title Here</a></h5>
                                            <p>
                                                <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                            </p>
                                            <h6>
                                                $200
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            </p>
                                        </div>
                                        <div class="cart-button">
                                            <div class="cart-plus-minus">
                                                <div class="dec qtybutton">-</div>
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                                <div class="inc qtybutton">+</div>
                                            </div>
                                            <a href="#" class="custom-btn">Add to Cart <i class="fas fa-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</section>