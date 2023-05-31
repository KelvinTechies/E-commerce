<?php include 'header.php';
    // require '../Auto_admin/Authentication.php';

// search();

?>


    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-4) -->
    <div class="ltn__slider-area ltn__slider-4 position-relative fix">
        <div class="ltn__slide-one-active----- slick-slide-arrow-1----- slick-slide-dots-1----- arrow-white----- ltn__slide-animation-active">
            <video autoplay muted loop id="myVideo">
                <source src="media/1.mp4" type="video/mp4">
            </video>
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-7 bg-image--- bg-overlay-theme-black-30" data-bs-bg="img/slider/41.jpg">
                <div class="ltn__slide-item-inner text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 align-self-center">
                                <div class="slide-item-car-dealer-form">
                                    <div class="section-title-area ltn__section-title-2 text-center">
                                        <h1 class="section-title  text-color-white">Find Your <span class="ltn__secondary-color-3">Perfect</span> Car</h1>
                                    </div>
                                    <div class="ltn__car-dealer-form-tab">
                                        <div class="ltn__tab-menu  text-uppercase text-center mb-30">
                                            <div class="nav">
                                                <a class="active show" data-bs-toggle ="tab" href="#ltn__form_tab_1_1"><i class="fas fa-car"></i>All</a>
                                                <a data-bs-toggle ="tab" href="#ltn__form_tab_1_2" class=""><i class="far fa-user"></i>New</a>
                                                <a data-bs-toggle ="tab" href="#ltn__form_tab_1_3" class=""><i class="fas fa-cogs"></i>Used</a>
                                            </div>
                                        </div>
                                        <div class="tab-content pb-10">
                                            <div class="tab-pane fade active show" id="ltn__form_tab_1_1">
                                                <div class="car-dealer-form-inner">
                                                    <form action="#" method="get" class="ltn__car-dealer-form-box row">
                                                    <div class="col-md-6">
                                    <div class="input-item input-item-email ltn__custom-icon w-100">
                                        <input type="text" name="cars" placeholder="Search for cars">
                                    </div>
                                </div> 
                                                        <!-- <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                            <select class="nice-select" name="kind">
                                                            <option> -->
                                                            <?php
                                                            //  echo  SearchModels('Product_name')
                                                             
                                                             ?>
                                                             <!-- </option>
                                                            
                                                                <option>All Makes</option>
                                                                <option>Audi</option>
                                                                <option>BMW</option>
                                                                <option>Honda</option>
                                                                <option>Nissan</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-3 col-md-6">
                                                            <select class="nice-select" name="models">
                                                                 <option> -->
                                                                 <?php
                                                                //   echo SearchModels('Product_brand')
                                                                  ?>
                                                                  <!-- </option>
                                                                // <option>6 Series (1)</option>
                                                                // <option>7 Series (1)</option>
                                                                // <option>8 Series (1)</option>
                                                            // </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                            <select class="nice-select" name="year">
                                                            <option> -->
                                                            <?php
                                                            //  echo SearchModels('Product_year')
                                                             ?>
                                                             <!-- </option>
                                                            
                                                                <option>Select Year</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                            </select>
                                                        </div> -->
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                            <div class="btn-wrapper text-center mt-0">
                                                                <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                                                <!-- <a href="shop-car-right-sidebar" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search</a> -->
                                                                <button type="submit" name="search" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="ltn__form_tab_1_2">
                                                <div class="car-dealer-form-inner">
                                                    <form action="#" class="ltn__car-dealer-form-box row"> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                            <select class="nice-select">
                                                                <option>All Makes</option>
                                                                <option>Audi</option>
                                                                <option>BMW</option>
                                                                <option>Honda</option>
                                                                <option>Nissan</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-3 col-md-6">
                                                            <select class="nice-select">
                                                                <option>All Models</option>
                                                                <option>Any</option>
                                                                <option>6 Series (1)</option>
                                                                <option>7 Series (1)</option>
                                                                <option>8 Series (1)</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Select Year</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                            </select>
                                                        </div>
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                            <div class="btn-wrapper text-center mt-0">
                                                                <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                                                <a href="shop-car-right-sidebar" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="ltn__form_tab_1_3">
                                                <div class="car-dealer-form-inner">
                                                    <form action="#" class="ltn__car-dealer-form-box row"> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-car col-lg-3 col-md-6">
                                                            <select class="nice-select">
                                                                <option>All Makes</option>
                                                                <option>Audi</option>
                                                                <option>BMW</option>
                                                                <option>Honda</option>
                                                                <option>Nissan</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-meter col-lg-3 col-md-6">
                                                            <select class="nice-select">
                                                                <option>All Models</option>
                                                                <option>Any</option>
                                                                <option>6 Series (1)</option>
                                                                <option>7 Series (1)</option>
                                                                <option>8 Series (1)</option>
                                                            </select>
                                                        </div> 
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                            <select class="nice-select">
                                                                <option>Select Year</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                            </select>
                                                        </div>
                                                        <div class="ltn__car-dealer-form-item ltn__custom-icon ltn__icon-calendar col-lg-3 col-md-6">
                                                            <div class="btn-wrapper text-center mt-0">
                                                                <!-- <button type="submit" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search Inventory</button> -->
                                                                <a href="shop-car-right-sidebar" class="btn theme-btn-1 btn-effect-1 text-uppercase">Search</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                          
    <?php
search();
?>
    <!-- SLIDER AREA END -->
    <!-- PRODUCT TAB AREA START (product-item-3) -->
    <div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// Cars</h6>
                        <h1 class="section-title">Car Best Deals</h1>
                    </div>
                    <div class="ltn__tab-menu ltn__tab-menu-top-right--- text-uppercase text-center">
                        <div class="nav">
                            <a class="active show" data-bs-toggle ="tab" href="#liton_tab_2_1">New Cars</a>
                            <a data-bs-toggle ="tab" href="#liton_tab_2_2" class="">Old Cars</a>
                            <a data-bs-toggle ="tab" href="#liton_tab_2_3" class="">Used Cars</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_2_1">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                   
                                   <?php pro_view() ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_2_3">
                            <div class="ltn__product-tab-content-inner">
                                <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/2.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">BMW 4 Series</a></h2>
                                                <div class="product-price">
                                                    <span>$50,000</span>
                                                    <del>$62,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>95kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/3.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">Hot</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Tesla Model S</a></h2>
                                                <div class="product-price">
                                                    <span>$49,000</span>
                                                    <del>$55,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>80kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/3.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">Hot</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Tesla Model S</a></h2>
                                                <div class="product-price">
                                                    <span>$49,000</span>
                                                    <del>$55,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>80kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/9.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Volkswagen Polo</a></h2>
                                                <div class="product-price">
                                                    <span>$40,000</span>
                                                    <del>$43,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2018
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>80kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/8.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">Hot</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Ford Ranger</a></h2>
                                                <div class="product-price">
                                                    <span>$59,000</span>
                                                    <del>$62,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2017
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>92kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/2.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">BMW 4 Series</a></h2>
                                                <div class="product-price">
                                                    <span>$50,000</span>
                                                    <del>$62,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2020
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>95kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/9.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Volkswagen Polo</a></h2>
                                                <div class="product-price">
                                                    <span>$40,000</span>
                                                    <del>$43,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2018
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>80kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/6.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Nissan Skyline</a></h2>
                                                <div class="product-price">
                                                    <span>$39,000</span>
                                                    <del>$42,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2019
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>75kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/10.png" alt="#"></a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Honda Freed</a></h2>
                                                <div class="product-price">
                                                    <span>$40,000</span>
                                                    <del>$43,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2019
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>80kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a href="product-details"><img src="img/product-2/8.png" alt="#"></a>
                                                <div class="product-badge">
                                                    <ul>
                                                        <li class="soldout-badge">Hot</li>
                                                    </ul>
                                                </div>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" title="Quick View" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                                <i class="far fa-heart"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h2 class="product-title"><a href="product-details">Ford Ranger</a></h2>
                                                <div class="product-price">
                                                    <span>$59,000</span>
                                                    <del>$62,000</del>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li>
                                                            <i class="fas fa-car"></i>2017
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-cog"></i>Auto
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-road"></i>92kph
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->

    <!-- CALL TO ACTION START (call-to-action-4) -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120" data-bs-bg="img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-center">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  any question you have  //</h6>
                            <h1 class="section-title white-color">08072220405, </h1>
                            <h1 class="section-subtitle ltn__secondary-color">09082224141</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a href="tel:+123456789" class="theme-btn-1 btn btn-effect-1">MAKE A CALL</a>
                            <a href="contact" class="btn btn-transparent btn-effect-4 white-color">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__call-to-4-img-1">
            <img src="img/bg/12.png" alt="#">
        </div>
        <div class="ltn__call-to-4-img-2">
            <img src="img/bg/11.png" alt="#">
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- BANNER AREA START -->
    <div class="ltn__banner-area pb-90 mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop"><img src="img/banner/Best-Car-Discounts-Offers-This-Diwali-e1540635638213.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ltn__banner-item">
                        <div class="ltn__banner-img">
                            <a href="shop"><img src="img/banner/2.jpg" alt="Banner Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER AREA END -->

   
    <!-- BRAND LOGO AREA START -->
    <div class="ltn__brand-logo-area ltn__brand-logo-1 bg-image bg-overlay-theme-black-90 pt-290 pb-110 plr--9" data-bs-bg="img/bg/7.jpg">
        <div class="container-fluid">
            <div class="row ltn__brand-logo-active">
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/lexuslogo.jpg" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/mercedeslogo.jpg" height="70" width="150" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/freevector-ferrari-logo.jpg" height="70" width="150" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/bmw-logo-HP0RBK.jpg" height="70" width="150" alt="Brand Logo">
                    </div>
                </div>
                <!-- <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/b5.png" alt="Brand Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__brand-logo-item">
                        <img src="img/brand-logo/b3.png" alt="Brand Logo">
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- BRAND LOGO AREA END -->

    <!-- TESTIMONIAL AREA START (testimonial-3) -->
    <!-- <div class="ltn__testimonial-area bg-image pt-115 pb-70" data-bs-bg="img/bg/8.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  Testimonials</h6>
                        <h1 class="section-title">Clients Feedbacks<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__testimonial-slider-2-active slick-arrow-3">
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="img/blog/4.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Jacob William</h4>
                                    <h6>Founder, Browni Co.</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="img/blog/5.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Ethan James</h4>
                                    <h6>Admin</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="img/blog/6.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Jacob William</h4>
                                    <h6>Founder, Browni Co.</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="img/blog/1.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Liam Mason</h4>
                                    <h6>Officer</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__testimonial-item ltn__testimonial-item-3">
                        <div class="ltn__testimonial-img">
                            <img src="img/blog/2.jpg" alt="#">
                        </div>
                        <div class="ltn__testimoni-info">
                            <p>Lorem ipsum ctetur elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. </p>
                            <div class="ltn__testimoni-info-inner">
                                <div class="ltn__testimoni-img">
                                    <img src="img/testimonial/1.jpg" alt="#">
                                </div>
                                <div class="ltn__testimoni-name-designation">
                                    <h4>Noah Alexander</h4>
                                    <h6>Professor</h6>
                                </div>
                            </div>
                            <div class="ltn__testimoni-bg-icon">
                                <i class="far fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            <!-- </div>
        </div>
    </div>  -->
    <!-- TESTIMONIAL AREA END -->

    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area">
        <div class="container-fluid">
            <div class="row ltn__image-slider-4-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                
                <?php pro_view2() ?>
                
                <!-- <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/22.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/22.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="portfolio-details">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/23.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/23.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="portfolio-details">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/24.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/24.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="portfolio-details">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-12">
                    <div class="ltn__img-slide-item-4">
                        <a href="img/img-slide/22.jpg" data-rel="lightcase:myCollection">
                            <img src="img/img-slide/22.jpg" alt="Image">
                        </a>
                        <div class="ltn__img-slide-info">
                            <div class="ltn__img-slide-info-brief">
                                <h6>Sports Car</h6>
                                <h1><a href="portfolio-details">BMW Pro Street Car</a></h1>
                            </div>
                            <div class="btn-wrapper">
                                <a href="portfolio-details" class="btn theme-btn-1 btn-effect-1 text-uppercase">Details</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- BLOG AREA START (blog-4) -->
    <div class="ltn__blog-area pt-85 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// blog & insights</h6>
                        <h1 class="section-title">News Feeds<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1">
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bs-bg="img/blog/1.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bs-bg="img/blog/2.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bs-bg="img/blog/3.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4 bg-image" data-bs-bg="img/blog/4.jpg">
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-4">
                        <!-- <div class="ltn__blog-img">
                            <a href="blog-details"><img src="img/blog/21.jpg" alt="#"></a>
                        </div> -->
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-envelope"></i> by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="far fa-envelope"></i> Services</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details">The branch of biology that deals with the normal.</a></h3>
                            <p>Lorem ipsum labore et dolore mag na aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include 'footer.php' ?>