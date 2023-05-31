<?php
    require 'Authentication.php';
    
?>
<!DOCTYPE html><html lang="en">
<!-- Mirrored from preview.cruip.com/mosaic/signin by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 11:20:37 GMT -->
<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Sign in</title>
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
                            <a class="block" href="../autixir">
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
    
                    <div class="as ri vd vv">
        
                        <h1 class="text-3xl text-slate-800 font-bold rb">Welcome back! ✨</h1>
                                        <?php
                                        // customers();
                                            if (isset($_GET['error'])) {
                                                $error = $_GET['error'];
                                                    echo "<p class='alert alert-danger'><b>$error</b></p>";
                                                }elseif (isset($_GET['Success'])) {
                                                $Success = $_GET['Success'];
                                                     if ($_SESSION['admin_name']== 'admin') {

                                                    header('Location:dashboard');
                                                      
                            
                                                  }elseif( $_SESSION['admin_name']== 'customer') {
                            
                                                    header('location:user_dashboard');
                                                  }         
                                                    echo "<div class='alert alert-success'><b>$Success</b></div>";
                                                  
                                                    // header('location:dashboard');
                                                  header('Location:user_dashboard');
                                                                   
    
                                            }
                                         
                                            
                                        ?>
                        <!-- Form -->
                        <form action="" method="post">
                            <div class="ln">
                                <div>
                                    <label class="block text-sm gk rx" for="email">Email Address</label>
                                    <input id="email" class="tn oq" type="email" name="email">
                                </div>
                                <div>
                                    <label class="block text-sm gk rx" for="password">Password</label>
                                    <input name="password" class="tn oq" type="password" autocomplete="on">
                                </div>
                            </div>
                            <div class="flex items-center fg ir">
                                <div class="mr-1">
                                    <a class="text-sm bu xz" href="reset-password">Forgot Password?</a>
                                </div>
                                    <button type="submit" class="btn hb xs yo ml-3" name="signin">signin</button>
                            </div>
                        </form>
                        <!-- Footer -->
                        <div class="gn ir ck border-slate-200">
                            <div class="text-sm">
                                Don’t you have an account? <a class="gk text-indigo-500 xd" href="signup">Sign Up</a>
                            </div>
                            <!-- Warning -->
                            <div class="ig">
                                <div class="pe yh me vg rounded">
                                    <svg class="inline w-3 h-3 ap db" viewBox="0 0 12 12">
                                        <path d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z"></path>
                                    </svg>
                                    <span class="text-sm">
                                        To support you during the pandemic super pro features are free until March 31st.
                                    </span>
                                </div>
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

<script async src='https://www.googletagmanager.com/gtag/js?id=UA-125021779-1'></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-125021779-1', { 'anonymize_ip': true });</script><script>console.log("%cImportant!", "color: blue; font-size: x-large");console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script><script>const pagesList = [{"name":"Dashboard","url":"https://preview.cruip.com/mosaic/index","active":false},{"name":"Analytics","url":"https://preview.cruip.com/mosaic/analytics","active":false},{"name":"Fintech","url":"https://preview.cruip.com/mosaic/fintech","active":false},{"name":"Customers","url":"https://preview.cruip.com/mosaic/customers","active":false},{"name":"Orders","url":"https://preview.cruip.com/mosaic/orders","active":false},{"name":"Invoices","url":"https://preview.cruip.com/mosaic/invoices","active":false},{"name":"Shop","url":"https://preview.cruip.com/mosaic/shop","active":false},{"name":"Shop 2","url":"https://preview.cruip.com/mosaic/shop-2","active":false},{"name":"Single Product","url":"https://preview.cruip.com/mosaic/product","active":false},{"name":"Cart","url":"https://preview.cruip.com/mosaic/cart","active":false},{"name":"Cart 2","url":"https://preview.cruip.com/mosaic/cart-2","active":false},{"name":"Cart 3","url":"https://preview.cruip.com/mosaic/cart-3","active":false},{"name":"Pay","url":"https://preview.cruip.com/mosaic/pay","active":false},{"name":"Campaigns","url":"https://preview.cruip.com/mosaic/campaigns","active":false},{"name":"Users Tabs","url":"https://preview.cruip.com/mosaic/users-tabs","active":false},{"name":"Users Tiles","url":"https://preview.cruip.com/mosaic/users-tiles","active":false},{"name":"Profile","url":"https://preview.cruip.com/mosaic/profile","active":false},{"name":"Feed","url":"https://preview.cruip.com/mosaic/feed","active":false},{"name":"Forum","url":"https://preview.cruip.com/mosaic/forum","active":false},{"name":"Forum Post","url":"https://preview.cruip.com/mosaic/forum-post","active":false},{"name":"Meetups","url":"https://preview.cruip.com/mosaic/meetups","active":false},{"name":"Meetups Post","url":"https://preview.cruip.com/mosaic/meetups-post","active":false},{"name":"Cards","url":"https://preview.cruip.com/mosaic/credit-cards","active":false},{"name":"Transactions","url":"https://preview.cruip.com/mosaic/transactions","active":false},{"name":"Transaction Details","url":"https://preview.cruip.com/mosaic/transaction-details","active":false},{"name":"Jobs Listing","url":"https://preview.cruip.com/mosaic/job-listing","active":false},{"name":"Jobs Post","url":"https://preview.cruip.com/mosaic/job-post","active":false},{"name":"Company Profile","url":"https://preview.cruip.com/mosaic/company-profile","active":false},{"name":"Kanban","url":"https://preview.cruip.com/mosaic/tasks-kanban","active":false},{"name":"Tasks List","url":"https://preview.cruip.com/mosaic/tasks-list","active":false},{"name":"Messages","url":"https://preview.cruip.com/mosaic/messages","active":false},{"name":"Inbox","url":"https://preview.cruip.com/mosaic/inbox","active":false},{"name":"Calendar","url":"https://preview.cruip.com/mosaic/calendar","active":false},{"name":"Applications","url":"https://preview.cruip.com/mosaic/applications","active":false},{"name":"My Account","url":"https://preview.cruip.com/mosaic/settings","active":false},{"name":"My Notifications","url":"https://preview.cruip.com/mosaic/notifications","active":false},{"name":"Connected Apps","url":"https://preview.cruip.com/mosaic/connected-apps","active":false},{"name":"Plans","url":"https://preview.cruip.com/mosaic/plans","active":false},{"name":"Billing & Invoices","url":"https://preview.cruip.com/mosaic/billing","active":false},{"name":"Give Feedback","url":"https://preview.cruip.com/mosaic/feedback","active":false},{"name":"Changelog","url":"https://preview.cruip.com/mosaic/changelog","active":false},{"name":"Roadmap","url":"https://preview.cruip.com/mosaic/roadmap","active":false},{"name":"FAQs","url":"https://preview.cruip.com/mosaic/faqs","active":false},{"name":"Empty State","url":"https://preview.cruip.com/mosaic/empty-state","active":false},{"name":"Page Not Found","url":"https://preview.cruip.com/mosaic/404","active":false},{"name":"Knowledge Base","url":"https://preview.cruip.com/mosaic/knowledge-base","active":false},{"name":"Sign in","url":"https://preview.cruip.com/mosaic/signin","active":true},{"name":"Sign up","url":"https://preview.cruip.com/mosaic/signup","active":false},{"name":"Reset password","url":"https://preview.cruip.com/mosaic/reset-password","active":false},{"name":"Onboarding 1","url":"https://preview.cruip.com/mosaic/onboarding-01","active":false},{"name":"Onboarding 2","url":"https://preview.cruip.com/mosaic/onboarding-02","active":false},{"name":"Onboarding 3","url":"https://preview.cruip.com/mosaic/onboarding-03","active":false},{"name":"Onboarding 4","url":"https://preview.cruip.com/mosaic/onboarding-04","active":false},{"name":"Button","url":"https://preview.cruip.com/mosaic/component-button","active":false},{"name":"Input Form","url":"https://preview.cruip.com/mosaic/component-form","active":false},{"name":"Dropdown","url":"https://preview.cruip.com/mosaic/component-dropdown","active":false},{"name":"Alert & Banner","url":"https://preview.cruip.com/mosaic/component-alert","active":false},{"name":"Modal","url":"https://preview.cruip.com/mosaic/component-modal","active":false},{"name":"Pagination","url":"https://preview.cruip.com/mosaic/component-pagination","active":false},{"name":"Tabs","url":"https://preview.cruip.com/mosaic/component-tabs","active":false},{"name":"Breadcrumb","url":"https://preview.cruip.com/mosaic/component-breadcrumb","active":false},{"name":"Badge","url":"https://preview.cruip.com/mosaic/component-badge","active":false},{"name":"Avatar","url":"https://preview.cruip.com/mosaic/component-avatar","active":false},{"name":"Tooltip","url":"https://preview.cruip.com/mosaic/component-tooltip","active":false},{"name":"Accordion","url":"https://preview.cruip.com/mosaic/component-accordion","active":false},{"name":"Icons","url":"https://preview.cruip.com/mosaic/component-icons","active":false}];if(window != top){window.parent.postMessage(pagesList, "https://cruip.com/")};</script></body>
<!-- Mirrored from preview.cruip.com/mosaic/signin by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 11:20:51 GMT -->
</html>