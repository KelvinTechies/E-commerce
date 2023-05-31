<?php
    require 'header.php';
// Ordered_pro();
    
?>

    

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image plr--9" data-bs-bg="img/bg/9.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Welcome to our company</h6>
                            <h1 class="section-title white-color">Product Details</h1>
                        </div>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index">Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-details-inner">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">
                                    
                                                                          <?php  
                                        $image =json_decode(preview ('Product_image'));
                                         for ($a=0; $a < count($image);$a++): ?>
                                        <div class="single-large-img">
                                            <a href="../auto_admin/images/<?php echo $image[$a]?>" data-rel="lightcase:myCollection">
                                                <img src="../auto_admin/images/<?php echo $image[$a]?>" alt="<?php  echo preview ('Product_brand')?>">
    
                                            </a>
                                        </div>
                                       <?php endfor; ?>
                                    </div>
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        
                                    <?php  
                                        $image =json_decode(preview ('Product_image'));
                                         for ($a=0; $a < count($image);$a++): ?>
                                        <div class="single-small-img">
                                            <img src="../auto_admin/images/<?php echo $image[$a]?>" alt="Image">
                                        </div>
                                        <?php endfor; ?>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="shop-details-info modal-product-info">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                        </ul>
                                    </div>
                                    <h3><?php echo preview ('Product_name')?></h3>
                                    <div class="product-price">
                                        <span>NGN<?php echo number_format(preview ('Product_price'))?></span>
                                        <del>$65.00</del>
                                    </div>
                                    <div class="modal-product-brief">
                                        <p><b>Description:</b> <?php echo preview ('Product_description')?></p>
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1 mb-30">
                                        <ul>
                                            <li>                              
                                                <div class="ltn__color-widget clearfix">
                                                <strong class="alignleft">Product Year:</strong>
                                                <span>
                                                <?php echo preview ('Product_year')?>
                                                </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ltn__tagcloud-widget ltn__size-widget clearfix">
                                                    <strong class="alignleft">Product Mileage:</strong>
                                                    <span>
                                                <?php echo preview ('Product_Mileage')?>
                                                </span>
                                                </div>
                                            </li>
                                            <li>
                                                <strong>Categories:</strong> 
                                                <span>
                                                <?php echo preview ('Product_brand')?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__countdown ltn__countdown-2 mb-10" data-countdown="2021/01/01"></div>
                                    <hr>
                                    <div class="ltn__product-details-menu-2">
                                            <?php add_cart()?>
                                        <ul>
                                        <form action="" method="post">
                                            
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="1" min-lengths='1' name="pro_quantity" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                <a class="theme-btn-1 btn btn-effect-1" title="Add to Cart">
                                                    
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span><button type="submit" name="add_to_cart">ADD TO CART</button></span>
                                                    
                                                </a>
                                            </li>
                                            </form>
                                        </ul>
                                    </div>

                                    <form action="" method="post">
                                   
                                    <div class="ltn__product-details-menu-3">
                                        <ul>
                                            <li>
                                                <a  class="" title="Wishlist">
                                                    <i class="far fa-heart"></i>
                                                    <span><button type="submit" name ="add_wishlist">Add to Wishlist</button></span>
                                                </a>
                                            </li>
 
                                        </ul>
                                    </form>
                                    </div>
                                    <hr>
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li>Share:</li>
                                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <hr>
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- SHOP DETAILS TAB AREA START -->
    <div class="ltn__shop-details-tab-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-details-tab-inner">
                        <div class="ltn__shop-details-tab-menu">
                            <div class="nav">
                                <a class="active show" data-bs-toggle ="tab" href="#liton_tab_details_1_1">Description</a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <h4 class="title-2"><?php echo preview ('Product_name')?></h4>
                                            <p> <?php echo preview ('Product_description')?></p>
                                </div>
                            </div>
   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS TAB AREA END -->

    <!-- PRODUCT SLIDER AREA START -->

    <div class="ltn__product-slider-area ltn__product-gutter pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">//  cars</h6>
                        <h1 class="section-title">Related Products<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__related-product-slider-one-active slick-arrow-1">
                <!-- ltn__product-item -->
            <?php relatedcars(); ?>
    </div>
    <!-- PRODUCT SLIDER AREA END -->

    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
    <footer class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
        <div class="footer-top-area  section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-5">
                        <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bs-bg="img/bg/4.jpg">
                            <h6 class="ltn__secondary-color text-uppercase">// time shedule</h6>
                            <h4 class="footer-title">Meet In Timeline.</h4>
                            <ul>
                                <li>Monday <span>07:00AM - 20:00PM</span></li>
                                <li>Tuesday <span>07:00AM - 20:00PM</span></li>
                                <li>Wednesday <span>07:00AM - 20:00PM</span></li>
                                <li>Thursday <span>07:00AM - 20:00PM</span></li>
                                <li>Friday <span>07:00AM - 20:00PM</span></li>
                                <li>Saturday <span>07:00AM - 20:00PM</span></li>
                                <li>Sunday <span>Official Holiday</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                            <h4 class="footer-title">Services.</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service.html">Engine Diagnostics</a></li>
                                    <li><a href="service.html">Vehicles Damaged</a></li>
                                    <li><a href="service.html">Air Conditioning Evac</a></li>
                                    <li><a href="service.html">Anti Lock Brake Service</a></li>
                                    <li><a href="service.html">Computer Diagnostics</a></li>
                                    <li><a href="service.html">Performance Upgrades</a></li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="service.html">Car Wash & Cleaning</a></li>
                                    <li><a href="service.html">Choose your Repairs</a></li>
                                    <li><a href="service.html">Free Consultancy</a></li>
                                    <li><a href="service.html">Emergency Time</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-blog-widget">
                            <h4 class="footer-title">News Feeds.</h4>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                            <div class="ltn__footer-blog-item">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-envelope"></i> June 24, 2020</li>
                                    </ul>
                                </div>
                                <h4 class="ltn__blog-title"><a href="blog-details.html">The branch of biology that
                                    deals with the normal.</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index"><img src="img/logo-2.png" alt="Logo"></a>
                            </div>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h6>Copyright & Design By</h6>
                                    <h4>Company - <span class="current-year"></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    <div class="ltn__modal-area ltn__quick-view-modal-area">
        <div class="modal fade" id="quick_view_modal" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <!-- <i class="fas fa-times"></i> -->
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/4.png" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="modal-product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                </ul>
                                            </div>
                                            <h3>Brake Conversion Kit</h3>
                                            <div class="product-price">
                                                <span>$149.00</span>
                                                <del>$165.00</del>
                                            </div>
                                            <div class="modal-product-meta ltn__product-details-menu-1">
                                                <ul>
                                                    <li>
                                                        <strong>Categories:</strong> 
                                                        <span>
                                                            <a href="#">Parts</a>
                                                            <a href="#">Car</a>
                                                            <a href="#">Seat</a>
                                                            <a href="#">Cover</a>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="ltn__product-details-menu-2">
                         
                                            <form action="" method="post">
                                                <ul>
                                                    <li>
                                                        <div class="cart-plus-minus">
                                                            <input type="text" value="02" name="pro_quantity" class="cart-plus-minus-box">
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                            <span><button type ="submit" name="addtocart"> ADD TO CART</button></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </form>
                                            </div>
                                            <form action="" method="post">
                                                
                                            <div class="ltn__product-details-menu-3">
                                            <?php
                                                wishlist()
                                                ?>
                                                <ul>
                                                    <li>
                                                        <a href="#" class="" title="Wishlist" data-bs-toggle ="modal" data-bs-target="#liton_wishlist_modal">
                                                            <i class="far fa-heart"></i>
                                                            <span><button type="submit" name ="add_wishlist">Add to Wishlist</button></span>
                                                        </a>
                                                    </li>
                                                    </form>
                                                    <li>
                                                        <a href="#" class="" title="Compare" data-bs-toggle ="modal" data-bs-target="#quick_view_modal">
                                                            <i class="fas fa-exchange-alt"></i>
                                                            <span>Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li>Share:</li>
                                                    <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    
                                                </ul>
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            
                                            <img src="../auto_admin/images/<?php echo $image[$a]?>" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
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
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="modal-product-img">
                                            <img src="img/product/7.png" alt="#">
                                        </div>
                                         <div class="modal-product-info">
                                            <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i>  Successfully added to your Wishlist</p>
                                            <div class="btn-wrapper">
                                                <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                            </div>
                                         </div>
                                         <!-- additional-info -->
                                         <div class="additional-info d-none">
                                            <p>We want to give you <b>10% discount</b> for your first order, <br>  Use discount code at checkout</p>
                                            <div class="payment-method">
                                                <img src="img/icons/payment.png" alt="#">
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
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
  
</body>

<!-- Mirrored from tunatheme.com/tf/html/autixir-preview/autixir/product-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 13:26:59 GMT -->
</html>

