<?php
    require 'Authentication.php';
    signup();
    
;?>


<!DOCTYPE html><html lang="en">
<!-- Mirrored from preview.cruip.com/mosaic/signup by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 11:20:51 GMT -->
<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Sign up</title>
<meta name="viewport" content="width=device-width,initial-scale=1"><link href="style.a49749f4fb5cff923e10.css" rel="stylesheet"></head>

<body class="gm bf hy ys">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>    

    <main class="bg-white">

        <div class="td flex">

            <!-- Content -->
            <div class="oq qw">

                <div class="oj or flex fh wd">

                    <!-- Header -->
                    <div class="ac">
                        <div class="flex items-center fg op vd jd tto">
                            <!-- Logo -->
                            <a class="block" href="index">
                                <svg width="32" height="32" viewBox="0 0 32 32">
                                    <defs>
                                        <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                            <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#A5B4FC" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                            <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                            <stop stop-color="#38BDF8" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                                    <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                                    <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                                    <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="as ri oq vd vv">
        
                        <h1 class="text-3xl text-slate-800 font-bold rb">Create your Account ✨</h1>
                        <!-- Form -->
                        <?php

                            if (isset($_GET['error'])) {
                                $error = $_GET['error'];
                                echo '<div x-show="open" x-data="{ open: true }">
                                <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                    <div class="flex oq fg fd">
                                        <div class="flex">
                                            <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                                <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                            </svg>
                                            <div class="gk">'.$error.'</div>
                                        </div>
                                        <button class="bd ke ml-3 if" @click="open = false">
                                            <div class="tc">Close</div>
                                            <svg class="ue on db">
                                                <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>';
                                    // echo "<p class='alert alert-danger'><b>$error</b></p>";
                            }elseif (isset($_GET['Congratulations'])) {

                               $congrats = $_GET['Congratulations'];

                               echo'<div x-show="open" x-data="{ open: true }">
                               <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
                                   <div class="flex oq fg fd">
                                       <div class="flex">
                                           <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                               <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                           </svg>
                                           <div class="gk">'.$congrats.'</div>
                                       </div>
                                       <button class="bd ke ml-3 if" @click="open = false">
                                           <div class="tc">Close</div>
                                           <svg class="ue on db">
                                               <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                           </svg>
                                       </button>
                                   </div>
                               </div>
                           </div>';
                            }
                                // }elseif (isset($_GET['Success'])) {
                                // $Success = $_GET['Success'];
                                //     if ($_SESSION['admin_name']== 'admin') {

                                //     header('Location:dashboard');
                                    

                                // }elseif( $_SESSION['admin_name']== 'customer') {

                                //     header('location:user_dashboard');
                                // }         
                                //     echo "<div class='alert alert-success'><b>$Success</b></div>";
                                
                                //     // header('location:dashboard');
                                // header(

                        ?>
                        <form action="" method="post">
                            <div class="ln">
                                <div>
                                    <label class="block text-sm gk rx" for="email">Email Address <span class="yl">*</span></label>
                                    <input name="email" class="tn oq" type="email">
                                </div>
                                <div>
                                    <label class="block text-sm gk rx" for="name">Full Name <span class="yl">*</span></label>
                                    <input name="name" class="tn oq" type="text">
                                </div>
                                <div>

                                </div>
                                <div>
                                    <label class="block text-sm gk rx" for="password">Password</label>
                                    <input name="password" class="tn oq" type="password" autocomplete="on">
                                </div>
                                <div>
                                    <label class="block text-sm gk rx" for="password">Confirm Password</label>
                                    <input name="cpassword" class="tn oq" type="password" autocomplete="on">
                                </div>
                            </div>
                            <div class="flex items-center fg ir">
                                <div class="mr-1">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="to">
                                        <span class="text-sm r_">Email me about product news.</span>
                                    </label>
                                </div>
                                <input class="btn hb xs yo ml-3 co" type="submit" name="signup" value="Sign Up">
                                <!-- <a class="btn hb xs yo ml-3 co" href="index">Sign Up</a> -->
                            </div>
                        </form>
                        <!-- Footer -->
                        <div class="gn ir ck border-slate-200">
                            <div class="text-sm">
                                Have an account? <a class="gk text-indigo-500 xd" href="signin">Sign In</a>
                            </div>
                        </div>
        
                    </div>

                </div>

            </div>

            <!-- Image -->
            <div class="hidden qh tp tk ty tw qw" aria-hidden="true">
                <img class="vr vi oq or" src="images/auth-image.jpg" width="760" height="1024" alt="Authentication image">
                <img class="tp ns tb fe ag st hidden tea" src="images/auth-decoration.png" width="218" height="224" alt="Authentication decoration">
            </div>

        </div>

    </main>

<script src="main.f640b348fcfd37dfcd91.js"></script>

<script async src='https://www.googletagmanager.com/gtag/js?id=UA-125021779-1'></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-125021779-1', { 'anonymize_ip': true });</script><script>console.log("%cImportant!", "color: blue; font-size: x-large");console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script><script>const pagesList = [{"name":"Dashboard","url":"https://preview.cruip.com/mosaic/index","active":false},{"name":"Analytics","url":"https://preview.cruip.com/mosaic/analytics","active":false},{"name":"Fintech","url":"https://preview.cruip.com/mosaic/fintech","active":false},{"name":"Customers","url":"https://preview.cruip.com/mosaic/customers","active":false},{"name":"Orders","url":"https://preview.cruip.com/mosaic/orders","active":false},{"name":"Invoices","url":"https://preview.cruip.com/mosaic/invoices","active":false},{"name":"Shop","url":"https://preview.cruip.com/mosaic/shop","active":false},{"name":"Shop 2","url":"https://preview.cruip.com/mosaic/shop-2","active":false},{"name":"Single Product","url":"https://preview.cruip.com/mosaic/product","active":false},{"name":"Cart","url":"https://preview.cruip.com/mosaic/cart","active":false},{"name":"Cart 2","url":"https://preview.cruip.com/mosaic/cart-2","active":false},{"name":"Cart 3","url":"https://preview.cruip.com/mosaic/cart-3","active":false},{"name":"Pay","url":"https://preview.cruip.com/mosaic/pay","active":false},{"name":"Campaigns","url":"https://preview.cruip.com/mosaic/campaigns","active":false},{"name":"Users Tabs","url":"https://preview.cruip.com/mosaic/users-tabs","active":false},{"name":"Users Tiles","url":"https://preview.cruip.com/mosaic/users-tiles","active":false},{"name":"Profile","url":"https://preview.cruip.com/mosaic/profile","active":false},{"name":"Feed","url":"https://preview.cruip.com/mosaic/feed","active":false},{"name":"Forum","url":"https://preview.cruip.com/mosaic/forum","active":false},{"name":"Forum Post","url":"https://preview.cruip.com/mosaic/forum-post","active":false},{"name":"Meetups","url":"https://preview.cruip.com/mosaic/meetups","active":false},{"name":"Meetups Post","url":"https://preview.cruip.com/mosaic/meetups-post","active":false},{"name":"Cards","url":"https://preview.cruip.com/mosaic/credit-cards","active":false},{"name":"Transactions","url":"https://preview.cruip.com/mosaic/transactions","active":false},{"name":"Transaction Details","url":"https://preview.cruip.com/mosaic/transaction-details","active":false},{"name":"Jobs Listing","url":"https://preview.cruip.com/mosaic/job-listing","active":false},{"name":"Jobs Post","url":"https://preview.cruip.com/mosaic/job-post","active":false},{"name":"Company Profile","url":"https://preview.cruip.com/mosaic/company-profile","active":false},{"name":"Kanban","url":"https://preview.cruip.com/mosaic/tasks-kanban","active":false},{"name":"Tasks List","url":"https://preview.cruip.com/mosaic/tasks-list","active":false},{"name":"Messages","url":"https://preview.cruip.com/mosaic/messages","active":false},{"name":"Inbox","url":"https://preview.cruip.com/mosaic/inbox","active":false},{"name":"Calendar","url":"https://preview.cruip.com/mosaic/calendar","active":false},{"name":"Applications","url":"https://preview.cruip.com/mosaic/applications","active":false},{"name":"My Account","url":"https://preview.cruip.com/mosaic/settings","active":false},{"name":"My Notifications","url":"https://preview.cruip.com/mosaic/notifications","active":false},{"name":"Connected Apps","url":"https://preview.cruip.com/mosaic/connected-apps","active":false},{"name":"Plans","url":"https://preview.cruip.com/mosaic/plans","active":false},{"name":"Billing & Invoices","url":"https://preview.cruip.com/mosaic/billing","active":false},{"name":"Give Feedback","url":"https://preview.cruip.com/mosaic/feedback","active":false},{"name":"Changelog","url":"https://preview.cruip.com/mosaic/changelog","active":false},{"name":"Roadmap","url":"https://preview.cruip.com/mosaic/roadmap","active":false},{"name":"FAQs","url":"https://preview.cruip.com/mosaic/faqs","active":false},{"name":"Empty State","url":"https://preview.cruip.com/mosaic/empty-state","active":false},{"name":"Page Not Found","url":"https://preview.cruip.com/mosaic/404","active":false},{"name":"Knowledge Base","url":"https://preview.cruip.com/mosaic/knowledge-base","active":false},{"name":"Sign in","url":"https://preview.cruip.com/mosaic/signin","active":false},{"name":"Sign up","url":"https://preview.cruip.com/mosaic/signup","active":true},{"name":"Reset password","url":"https://preview.cruip.com/mosaic/reset-password","active":false},{"name":"Onboarding 1","url":"https://preview.cruip.com/mosaic/onboarding-01","active":false},{"name":"Onboarding 2","url":"https://preview.cruip.com/mosaic/onboarding-02","active":false},{"name":"Onboarding 3","url":"https://preview.cruip.com/mosaic/onboarding-03","active":false},{"name":"Onboarding 4","url":"https://preview.cruip.com/mosaic/onboarding-04","active":false},{"name":"Button","url":"https://preview.cruip.com/mosaic/component-button","active":false},{"name":"Input Form","url":"https://preview.cruip.com/mosaic/component-form","active":false},{"name":"Dropdown","url":"https://preview.cruip.com/mosaic/component-dropdown","active":false},{"name":"Alert & Banner","url":"https://preview.cruip.com/mosaic/component-alert","active":false},{"name":"Modal","url":"https://preview.cruip.com/mosaic/component-modal","active":false},{"name":"Pagination","url":"https://preview.cruip.com/mosaic/component-pagination","active":false},{"name":"Tabs","url":"https://preview.cruip.com/mosaic/component-tabs","active":false},{"name":"Breadcrumb","url":"https://preview.cruip.com/mosaic/component-breadcrumb","active":false},{"name":"Badge","url":"https://preview.cruip.com/mosaic/component-badge","active":false},{"name":"Avatar","url":"https://preview.cruip.com/mosaic/component-avatar","active":false},{"name":"Tooltip","url":"https://preview.cruip.com/mosaic/component-tooltip","active":false},{"name":"Accordion","url":"https://preview.cruip.com/mosaic/component-accordion","active":false},{"name":"Icons","url":"https://preview.cruip.com/mosaic/component-icons","active":false}];if(window != top){window.parent.postMessage(pagesList, "https://cruip.com/")};</script></body>
<!-- Mirrored from preview.cruip.com/mosaic/signup by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 11:20:51 GMT -->
</html>