<?php 
include 'header.php';

    
if (!isset($_SESSION['id'])) {
    
    echo "<script>alert('You are not logged in')
    window.location='../Auto_admin/signin'
    </script>";
 }
 ?>
<main>
                <div class="vd jd tto vv oq ar ri">

                    <!-- Page header -->
                    <div class="ry">
                        <h1 class="gg zj text-slate-800 font-bold">Products ✨</h1>
                    </div>

                    <div class="ck border-slate-200">

                        <!-- Components -->
                        <div class="la ie">

                            <!-- Input Types -->
                            <div>
                                <h2 class="gg text-slate-800 font-bold rb">Add Products</h2>
        
                                <?php update(); ?>
                                <div class="sq fx qz">
                                    
                                    <div>
                                        
                                        <!-- Start -->
                                <form action="" method="post" enctype="multipart/form-data">
                                        <div>
                                            <label class="block text-sm gk rx" for="default">Product Name</label>
                                            <input id="default" class="tn oq" value="<?php  getdata('Product_name') ?>" type="text" name="productname">
                                        </div>
                                        <!-- End -->
                                    </div>
                                    
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="flex items-center fg">
                                                <label class="block text-sm gk rx" for="tooltip">Product Brand</label>
                                                <div class="td r_" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="" aria-expanded="false">
                                                        <svg class="ue on db yu" viewBox="0 0 16 16">
                                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="nv tp tz ne fe ag">
                                                        <div class="uz pa ya v_ mt rounded lq in" x-show="open" x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 ak" x-transition:enter-end="bv ax" x-transition:leave="wr wh wf" x-transition:leave-start="bv" x-transition:leave-end="opacity-0" style="display: none;">
                                                            <div class="text-sm">Excepteur sint occaecat cupidata non proident, sunt in.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input id="tooltip"value="<?php  getdata('Product_brand') ?>"  class="tn oq" type="text" name="productbrand">
                                        </div>
                                        <!-- End -->
                                    </div>
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="flex items-center fg">
                                                <label class="block text-sm gk rx" for="tooltip">Product Mileage</label>
                                                <div class="td r_" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="" aria-expanded="false">
                                                        <svg class="ue on db yu" viewBox="0 0 16 16">
                                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="nv tp tz ne fe ag">
                                                        <div class="uz pa ya v_ mt rounded lq in" x-show="open" x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 ak" x-transition:enter-end="bv ax" x-transition:leave="wr wh wf" x-transition:leave-start="bv" x-transition:leave-end="opacity-0" style="display: none;">
                                                            <div class="text-sm">Excepteur sint occaecat cupidata non proident, sunt in.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input id="tooltip"value="<?php  getdata('Product_Mileage') ?>"  class="tn oq" type="text" name="productmileage">
                                        </div>
                                        <!-- End -->
                                    </div>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="mandatory">product Year <span class="yl">*</span></label>
                                            <!-- <select name="productmodel" id="" class="tn oq" > -->
                                            <!-- <option value=" -->
                                            <?php 
                                            //  getdata('Product_Year')
                                              ?><?php
                                            //    getdata('Product_Year')
                                                ?>
                                                <!-- </option> -->
                                             <?php
                                            //   echo  year() ; ?>
                                            </select>
                                            <input id="mandatory" class="tn oq" name="productyear"  type="text"value="<?php  getdata('Product_year') ?>">
                                            
                                        </div>
                                        <!-- End -->
                                    </div>
                                    
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="prefix">Product price</label>
                                            <div class="td">
                                                <input id="prefix" value="<?php  getdata('Product_price') ?>" class="tn oq my" type="number" name="productprice"> 
                                                <div class="tp tm tg flex items-center pointer-events-none">
                                                    <span class="text-sm yu gk me">NGN</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End -->
                                    </div>
                                    
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="suffix">Date of Upload</label>
                                            <div class="td">
                                                <input id="suffix" value="<?php  getdata('Date_uploaded') ?>" class="tn oq mb" type="date" name="dateofupload">
                                                <div class="tp tm nt flex items-center pointer-events-none">
                                                    <!-- <span class="text-sm yu gk me">%</span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End -->
                                    </div>
                                    
                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <label class="block text-sm gk rx" for="placeholder">Product Image</label>
                                            <input id="placeholder"value="<?php  getdata('Product_image') ?>"  class="tn oq" type="file" name="files[]" multiple>
                                        </div>
                                        <!-- End -->
                                    </div>
                                                                        
                                    <div>
                                            <div class="flex items-center fg">
                                                <label class="block text-sm gk rx" for="tooltip">Product Description</label>
                                                <div class="td r_" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                                                    <button class="block" aria-haspopup="true" :aria-expanded="open" @focus="open = true" @focusout="open = false" @click.prevent="" aria-expanded="false">
                                                        <svg class="ue on db yu" viewBox="0 0 16 16">
                                                            <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                                        </svg>
                                                    </button>
                                                    <div class="nv tp tz ne fe ag">
                                                        <div class="uz pa ya v_ mt rounded lq in" x-show="open" x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 ak" x-transition:enter-end="bv ax" x-transition:leave="wr wh wf" x-transition:leave-start="bv" x-transition:leave-end="opacity-0" style="display: none;">
                                                            <div class="text-sm">Excepteur sint occaecat cupidata non proident, sunt in.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <textarea name="productdescription" id="toolclip" class="tn oq my cols"="30" rows="5"><?php  getdata('Product_description') ?></textarea>                                      
                                          </div>
                                          <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="td">
                                            </div>
                                            </div>
                                        </div>
                                        <!-- End -->
                                    </div><br><br>

                                    <div>
                                        <!-- Start -->
                                        <div>
                                            <div class="td">
                                            <button type="submit" class="btn hk xf yo tn oq" name="update">Update</button>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- End -->
                                    </div>
                                </form>

                                        <!-- End -->
                                    </div>
                            
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </main>
<?php include 'footer.php' ?>
