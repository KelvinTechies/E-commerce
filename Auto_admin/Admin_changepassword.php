<?php

// require '../Auto_admin/Authentication.php';
require 'header.php';

// countries();
signout();
signup();
// bill_address()
Address();
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

                        <!-- Title -->
                        <h1 class="gg zj text-slate-800 font-bold">Account Settings ✨</h1>

                    </div>

                    <div class="bg-white by rounded-sm ry">
                        <div class="flex fh zt qo">

                            <!-- Sidebar -->
                            <!-- <div class="flex fp cn ta qh zp me mu cx zm zg border-slate-200 uz zh">
                                <div>
                                    <div class="gb g_ yu gq it">Business settings</div>
                                    <ul class="flex fp qh rk ql">
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'account' &amp;&amp; 'ph'"
                                                href="settings">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'account' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'account' ? 'text-indigo-500' : 'xx'">My Account</span>
                                            </a>
                                        </li>
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'plans' &amp;&amp; 'ph'"
                                                href="dashboard">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xx'">Back to Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'notifications' &amp;&amp; 'ph'"
                                                href="notifications">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'notifications' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'notifications' ? 'text-indigo-500' : 'xx'">My Notifications</span>
                                            </a>
                                        </li>
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'apps' &amp;&amp; 'ph'"
                                                href="connected-apps">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'apps' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M3.414 2L9 7.586V16H7V8.414l-5-5V6H0V1a1 1 0 011-1h5v2H3.414zM15 0a1 1 0 011 1v5h-2V3.414l-3.172 3.172-1.414-1.414L12.586 2H10V0h5z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'apps' ? 'text-indigo-500' : 'xx'">Connected Apps</span>
                                            </a>
                                        </li>
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'plans' &amp;&amp; 'ph'"
                                                href="plans">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xx'">Plans</span>
                                            </a>
                                        </li> -->
                                        <!-- <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'plans' &amp;&amp; 'ph'"
                                                href="changepassword">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xx'">Change Password</span>
                                            </a>
                                        </li> -->
                                        <!-- <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'billing' &amp;&amp; 'ph'"
                                                href="billing">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'billing' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M15 4c.6 0 1 .4 1 1v10c0 .6-.4 1-1 1H3c-1.7 0-3-1.3-3-3V3c0-1.7 1.3-3 3-3h7c.6 0 1 .4 1 1v3h4zM2 3v1h7V2H3c-.6 0-1 .4-1 1zm12 11V6H2v7c0 .6.4 1 1 1h11zm-3-5h2v2h-2V9z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'billing' ? 'text-indigo-500' : 'xx'">Billing &amp; Invoices</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="gb g_ yu gq it">Experience</div>
                                    <ul class="flex fp qh rk ql">
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'feedback' &amp;&amp; 'ph'"
                                                href="feedback">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'feedback' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M7.001 3h2v4h-2V3zm1 7a1 1 0 110-2 1 1 0 010 2zM15 16a1 1 0 01-.6-.2L10.667 13H1a1 1 0 01-1-1V1a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1zM2 11h9a1 1 0 01.6.2L14 13V2H2v9z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'feedback' ? 'text-indigo-500' : 'xx'">Give Feedback</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                            <!-- Panel -->
                            <div class="ad">

                                <!-- Panel body -->
                                <div class="vs fz">
                                    <h2 class="gg text-slate-800 font-bold id">My Account</h2>

                                    <!-- Picture -->
                                    <!-- <section>
                                        <div class="flex items-center">
                                            <div class="mr-4">
                                                <img class="uy os rounded-full" src="images/user-avatar-80.png" width="80" height="80" alt="User upload">
                                            </div>
                                            <button class="tt hb xs yo">Change</button>
                                        </div>
                                    </section> -->

                                    <!-- Business Profile -->
                                    <section>
                                        <!-- <h3 class="gy yt text-slate-800 font-bold rx">Business Profile</h3>
                                        <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunts
                                            mollit.</div> -->

                                            <?php

                                                if (isset($_GET['error'])) {

                                                    if ($_GET['error']=='allfieldsarerequired') {

                                                         echo '<div x-show="open" x-data="{ open: true }">
                                                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                                        <div class="flex oq fg fd">
                                                            <div class="flex">
                                                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                                                </svg>
                                                                <div class="gk">All fields are required</div>
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
                                                }elseif ($_GET['error']=='invalidemail') {

                                                    
                                                    echo '<div x-show="open" x-data="{ open: true }">
                                                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                                        <div class="flex oq fg fd">
                                                            <div class="flex">
                                                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                                                </svg>
                                                                <div class="gk">Invalid Email</div>
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
                                                }elseif ($_GET['error']=='onlynumbersareallowed') {

                                                    echo '<div x-show="open" x-data="{ open: true }">
                                                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                                        <div class="flex oq fg fd">
                                                            <div class="flex">
                                                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                                                </svg>
                                                                <div class="gk">Only Numbers are Allowed</div>
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
                                                    
                                                }elseif ($_GET['error']=='sqlerror') {

                                                    echo '<div x-show="open" x-data="{ open: true }">
                                                    <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                                        <div class="flex oq fg fd">
                                                            <div class="flex">
                                                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                                                </svg>
                                                                <div class="gk">Sql error</div>
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
                                                }elseif ($_GET['success']=='saved') {

                                                    echo'<div x-show="open" x-data="{ open: true }">
                                                    <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
                                                        <div class="flex oq fg fd">
                                                            <div class="flex">
                                                                <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                                                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                                                </svg>
                                                                <div class="gk">Saved</div>
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

                                            }

                                                ?>

                         
  <form action="" method="POST">
    <section> 
                          
                          <?php
setPwd();
                                            ?>
                           <!-- <div class="_y jn ln ju jl ig">  -->
      <h3 class="gy yt text-slate-800 font-bold rx">Password</h3>
      <div class="text-sm">You can set your New password here to Overide your Previous Password.</div>
      <div class="ig">
            <div class="_x">
                <label class="block text-sm gk rx" for="location">Recent Password</label>
                <input id="location" class="tn oq"  name="recent_pwd" type="password" placeholder = " Recent Password">

</div>
         <div class="ig">
            <div class="_x">
                <label class="block text-sm gk rx" for="location">New Password</label>
                <input id="location" class="tn oq"  name="new_pwd" type="password" placeholder = " New Password">

</div>
<div class="ig">
            <div class="_x">
                <label class="block text-sm gk rx" for="location">Confim New Password</label>
                <input id="location" class="tn oq"  name="c_new_pwd" type="password" placeholder = " Confirm Password">

</div>
    <button type="submit" name="pwd"  class="btn border-slate-200 bw text-indigo-500">Set New Password</button>
</div> 
</section>  
           </div>

            </div>
        </div>

     </div>
            </main>

        </div>

    </div>

<?php
require 'footer.php';
?>
<!-- <!DOCTYPE html>
<html lang="en"> -->
<!-- Mirrored from preview.cruip.com/mosaic/settings by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 11:20:33 GMT -->

<!-- <head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - My Account</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="style.a49749f4fb5cff923e10.css" rel="stylesheet">
</head>

<body class="gm bf hy ys" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ page: 'settings-account', settingsPanel: 'account', sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script> -->

    <!-- Page wrapper -->
    <!-- <div class="flex ot lq"> -->

        <!-- Sidebar -->
        <!-- <div>
            <div class="th tm bg-slate-900 pb nb tec tei wi wf" :class="sidebarOpen ? 'bv' : 'opacity-0 pointer-events-none'"
                aria-hidden="true" x-cloak=""></div>
            <div id="sidebar" class="flex fh tp nb tb tk zq ten ter tek fe ot cr ttn ta uk teg ttg 2xl:!w-64 ap pa va wo wf wc"
                :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false"
                x-cloak="lg">
                <div class="flex fg iv gu jm">
                    <button class="tec text-slate-500 xv" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                        <span class="tc">Close sidebar</span>
                        <svg class="ur oo db" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                        </svg>
                    </button>
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
                            <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z"
                                fill="#4F46E5"></path>
                            <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z"
                                fill="url(#logo-a)"></path>
                            <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z"
                                fill="url(#logo-b)"></path>
                        </svg>
                    </a>
                </div>
                <div class="la">
                    <div>
                        <h3 class="gb gq text-slate-500 g_ ga">
                            <span class="hidden tea ttv 2xl:hidden gp ur" aria-hidden="true">•••</span>
                            <span class="tec ttd 2xl:block">Pages</span>
                        </h3>
                        <ul class="im">
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('dashboard-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('dashboard-'))">
                                <a class="block ya xw ci wr wu" :class="page.startsWith('dashboard-') &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db yu" :class="page.startsWith('dashboard-') &amp;&amp; '!text-indigo-500'"
                                                    d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                                                <path class="db ys" :class="page.startsWith('dashboard-') &amp;&amp; 'text-indigo-600'"
                                                    d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                                <path class="db yu" :class="page.startsWith('dashboard-') &amp;&amp; 'text-indigo-200'"
                                                    d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Dashboard</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'dashboard-main' &amp;&amp; '!text-indigo-500'"
                                                href="user_dashboard">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Main</span>
                                            </a>
                                        </li>
                                        <!-- <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'dashboard-analytics' &amp;&amp; '!text-indigo-500'"
                                                href="analytics">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Analytics</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'dashboard-fintech' &amp;&amp; '!text-indigo-500'"
                                                href="fintech">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Fintech</span>
                                            </a>
                                        </li>
                                    </ul> -->
                                <!-- </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('ecommerce-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('ecommerce-'))">
                                <a class="block ya xw ci wr wu" :class="page.startsWith('ecommerce-') &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db yu" :class="page.startsWith('ecommerce-') &amp;&amp; 'text-indigo-300'"
                                                    d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                                <path class="db bo" :class="page.startsWith('ecommerce-') &amp;&amp; '!text-indigo-600'"
                                                    d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                                <path class="db ys" :class="page.startsWith('ecommerce-') &amp;&amp; 'text-indigo-500'"
                                                    d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">E-Commerce</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-customers' &amp;&amp; '!text-indigo-500'"
                                                href="customers">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Customers</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-orders' &amp;&amp; '!text-indigo-500'"
                                                href="orders">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Orders</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-invoices' &amp;&amp; '!text-indigo-500'"
                                                href="invoices">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Invoices</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-shop' &amp;&amp; '!text-indigo-500'"
                                                href="shop">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Shop</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-shop-2' &amp;&amp; '!text-indigo-500'"
                                                href="shop-2">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Shop 2</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-product' &amp;&amp; '!text-indigo-500'"
                                                href="product">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Single Product</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-cart' &amp;&amp; '!text-indigo-500'"
                                                href="cart">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Cart</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-cart-2' &amp;&amp; '!text-indigo-500'"
                                                href="cart-2">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Cart 2</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'ecommerce-cart-3' &amp;&amp; '!text-indigo-500'"
                                                href="cart-3">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Cart 3</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" href="pay">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Pay</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('community-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('community-'))">
                                <a class="block ya xw ci wr wu" :class="page.startsWith('community-') &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys" :class="page.startsWith('community-') &amp;&amp; 'text-indigo-500'"
                                                    d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                                <path class="db yu" :class="page.startsWith('community-') &amp;&amp; 'text-indigo-300'"
                                                    d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Community</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'community-tabs' &amp;&amp; '!text-indigo-500'"
                                                href="users-tabs">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Users - Tabs</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'community-tiles' &amp;&amp; '!text-indigo-500'"
                                                href="users-tiles">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Users - Tiles</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'community-profile' &amp;&amp; '!text-indigo-500'"
                                                href="profile">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Profile</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'community-feed' &amp;&amp; '!text-indigo-500'"
                                                href="feed">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Feed</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'community-forum' &amp;&amp; '!text-indigo-500'"
                                                href="forum">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Forum</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'community-forum-post' &amp;&amp; '!text-indigo-500'"
                                                href="forum-post">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Forum - Post</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'community-meetups' &amp;&amp; '!text-indigo-500'"
                                                href="meetups">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Meetups</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'community-meetups-post' &amp;&amp; '!text-indigo-500'"
                                                href="meetups-post">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Meetups - Post</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('finance-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('finance-'))">
                                <a class="block ya xw ci wr wu" :class="page.startsWith('finance-') &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db yu" :class="page.startsWith('finance-') &amp;&amp; 'text-indigo-300'"
                                                    d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z"></path>
                                                <path class="db bo" :class="page.startsWith('finance-') &amp;&amp; '!text-indigo-500'"
                                                    d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z"></path>
                                                <path class="db ys" :class="page.startsWith('finance-') &amp;&amp; 'text-indigo-600'"
                                                    d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Finance</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'finance-cards' &amp;&amp; '!text-indigo-500'"
                                                href="credit-cards">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Cards</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'finance-transactions' &amp;&amp; '!text-indigo-500'"
                                                href="transactions">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Transactions</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'finance-transaction-details' &amp;&amp; '!text-indigo-500'"
                                                href="transaction-details">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Transaction Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('job-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('job-'))">
                                <a class="block ya xw ci wr wu" :class="page.startsWith('job-') &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db bo" :class="page.startsWith('job-') &amp;&amp; '!text-indigo-600'"
                                                    d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z"></path>
                                                <path class="db ys" :class="page.startsWith('job-') &amp;&amp; '!text-indigo-500'"
                                                    d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z"></path>
                                                <path class="db yu" :class="page.startsWith('job-') &amp;&amp; '!text-indigo-300'"
                                                    d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Job Board</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'job-listing' &amp;&amp; '!text-indigo-500'"
                                                href="job-listing">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Listing</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'job-post' &amp;&amp; '!text-indigo-500'"
                                                href="job-post">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Job Post</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'job-company' &amp;&amp; '!text-indigo-500'"
                                                href="company-profile">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Company Profile</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('tasks-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('tasks-'))">
                                <a class="block ya xw ci wr wu" :class="page.startsWith('tasks-') &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys" :class="page.startsWith('tasks-') &amp;&amp; 'text-indigo-500'"
                                                    d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                                <path class="db ys" :class="page.startsWith('tasks-') &amp;&amp; 'text-indigo-500'"
                                                    d="M1 1h22v23H1z"></path>
                                                <path class="db yu" :class="page.startsWith('tasks-') &amp;&amp; 'text-indigo-300'"
                                                    d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Tasks</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'tasks-kanban' &amp;&amp; '!text-indigo-500'"
                                                href="tasks-kanban">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Kanban</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'tasks-list' &amp;&amp; '!text-indigo-500'"
                                                href="tasks-list">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="page === 'messages' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu" :class="page === 'messages' &amp;&amp; 'hover--text-slate-200'"
                                    href="messages">
                                    <div class="flex items-center fg">
                                        <div class="ad flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys" :class="page === 'messages' &amp;&amp; 'text-indigo-500'"
                                                    d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z"></path>
                                                <path class="db yu" :class="page === 'messages' &amp;&amp; 'text-indigo-300'"
                                                    d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Messages</span>
                                        </div>
                                        <div class="flex ah r_">
                                            <span class="inline-flex items-center justify-center oy gb gk yo hb v_ rounded">4</span>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <!-- <li class="me vg rounded-sm ib wj" :class="page === 'inbox' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu" :class="page === 'inbox' &amp;&amp; 'hover--text-slate-200'"
                                    href="inbox">
                                    <div class="flex items-center">
                                        <svg class="ap oo ur" viewBox="0 0 24 24">
                                            <path class="db ys" :class="page === 'inbox' &amp;&amp; 'text-indigo-500'" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
                                            <path class="db yu" :class="page === 'inbox' &amp;&amp; 'text-indigo-300'"
                                                d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z"></path>
                                        </svg>
                                        <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Inbox</span>
                                    </div>
                                </a>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="page === 'calendar' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu" :class="page === 'calendar' &amp;&amp; 'hover--text-slate-200'"
                                    href="calendar">
                                    <div class="flex items-center">
                                        <svg class="ap oo ur" viewBox="0 0 24 24">
                                            <path class="db ys" :class="page === 'calendar' &amp;&amp; 'text-indigo-500'" d="M1 3h22v20H1z"></path>
                                            <path class="db yu" :class="page === 'calendar' &amp;&amp; 'text-indigo-300'"
                                                d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                        </svg>
                                        <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Calendar</span>
                                    </div>
                                </a>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="page === 'campaigns' &amp;&amp; 'bg-slate-900'">
                                <a class="block ya xw ci wr wu" :class="page === 'campaigns' &amp;&amp; 'hover--text-slate-200'"
                                    href="campaigns">
                                    <div class="flex items-center">
                                        <svg class="ap oo ur" viewBox="0 0 24 24">
                                            <path class="db ys" :class="page === 'campaigns' &amp;&amp; 'text-indigo-500'" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path>
                                            <path class="db yu" :class="page === 'campaigns' &amp;&amp; 'text-indigo-300'"
                                                d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                                        </svg>
                                        <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Campaigns</span>
                                    </div>
                                </a>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('settings-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('settings-'))">
                                <a class="block ya xw ci wr wu" :class="page.startsWith('settings-') &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys" :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-500'"
                                                    d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                                                <path class="db yu" :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-300'"
                                                    d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                                                <path class="db ys" :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-500'"
                                                    d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                                                <path class="db yu" :class="page.startsWith('settings-') &amp;&amp; 'text-indigo-300'"
                                                    d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Settings</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'settings-account' &amp;&amp; '!text-indigo-500'"
                                                href="settings">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">My Account</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'settings-notifications' &amp;&amp; '!text-indigo-500'"
                                                href="notifications">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">My Notifications</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'settings-apps' &amp;&amp; '!text-indigo-500'"
                                                href="connected-apps">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Connected Apps</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'settings-plans' &amp;&amp; '!text-indigo-500'"
                                                href="plans">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Plans</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'settings-billing' &amp;&amp; '!text-indigo-500'"
                                                href="billing">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Billing &amp; Invoices</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'settings-feedback' &amp;&amp; '!text-indigo-500'"
                                                href="feedback">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Give Feedback</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('utility-') }" x-data="{ open: false }"
                                x-init="$nextTick(() => open = page.startsWith('utility-'))">
                                <a class="block ya xw ci wr wu" :class="page.startsWith('utility-') &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <circle class="db yu" :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-300'"
                                                    cx="18.5" cy="5.5" r="4.5"></circle>
                                                <circle class="db ys" :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-500'"
                                                    cx="5.5" cy="5.5" r="4.5"></circle>
                                                <circle class="db ys" :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-500'"
                                                    cx="18.5" cy="18.5" r="4.5"></circle>
                                                <circle class="db yu" :class="page.startsWith('utility-') &amp;&amp; 'text-indigo-300'"
                                                    cx="5.5" cy="18.5" r="4.5"></circle>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Utility</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="open &amp;&amp; 'fe az'" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="!open &amp;&amp; 'hidden'" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'utility-changelog' &amp;&amp; '!text-indigo-500'"
                                                href="changelog">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Changelog</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'utility-roadmap' &amp;&amp; '!text-indigo-500'"
                                                href="roadmap">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Roadmap</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'utility-faqs' &amp;&amp; '!text-indigo-500'"
                                                href="faqs">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">FAQs</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'utility-empty-state' &amp;&amp; '!text-indigo-500'"
                                                href="empty-state">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Empty State</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'utility-404' &amp;&amp; '!text-indigo-500'"
                                                href="404">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">404</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'utility-kb' &amp;&amp; '!text-indigo-500'"
                                                href="knowledge-base">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Knowledge Base</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="gb gq text-slate-500 g_ ga">
                            <span class="hidden tea ttv 2xl:hidden gp ur" aria-hidden="true">•••</span>
                            <span class="tec ttd 2xl:block">More</span>
                        </h3>
                        <ul class="im">
                            <li class="me vg rounded-sm ib wj" x-data="{ open: false }">
                                <a class="sidebar-expander-link block ya xw wr wu" :class="open &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys" d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path>
                                                <path class="db yu" d="M15 12L8 6v5H0v2h8v5z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Authentication</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="{ 'fe az': open }" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="{ 'hidden': !open }" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" href="signin">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Sign In</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" href="signup">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Sign up</span>
                                            </a>
                                        </li> -->
                                        <!-- <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" href="reset-password">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Reset Password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" x-data="{ open: false }">
                                <a class="sidebar-expander-link block ya xw wr wu" :class="open &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <path class="db ys" d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z"></path>
                                                <path class="db yu" d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z"></path>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Onboarding</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="{ 'fe az': open }" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="{ 'hidden': !open }" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" href="onboarding-01">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Step 1</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" href="onboarding-02">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Step 2</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" href="onboarding-03">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Step 3</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" href="onboarding-04">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Step 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="me vg rounded-sm ib wj" :class="{ 'bg-slate-900': page.startsWith('component-') }"
                                x-data="{ open: false }" x-init="$nextTick(() => open = page.startsWith('component-'))">
                                <a class="sidebar-expander-link block ya xw wr wu" :class="open &amp;&amp; 'hover--text-slate-200'"
                                    href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                    <div class="flex items-center fg">
                                        <div class="flex items-center">
                                            <svg class="ap oo ur" viewBox="0 0 24 24">
                                                <circle class="db ys" :class="page.startsWith('component-') &amp;&amp; 'text-indigo-500'"
                                                    cx="16" cy="8" r="8"></circle>
                                                <circle class="db yu" :class="page.startsWith('component-') &amp;&amp; 'text-indigo-300'"
                                                    cx="8" cy="16" r="8"></circle>
                                            </svg>
                                            <span class="text-sm gk ml-3 ttl ttb 2xl:opacity--100 wf">Components</span>
                                        </div>
                                        <div class="flex ap r_ ttl ttb 2xl:opacity--100 wf">
                                            <svg class="w-3 h-3 ap rq db yu" :class="{ 'fe az': open }" viewBox="0 0 12 12">
                                                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                                <div class="tec ttd 2xl:block">
                                    <ul class="mf iu" :class="{ 'hidden': !open }" x-cloak="">
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-button' &amp;&amp; '!text-indigo-500'"
                                                href="component-button">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Button</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-form' &amp;&amp; '!text-indigo-500'"
                                                href="component-form">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Input Form</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-dropdown' &amp;&amp; '!text-indigo-500'"
                                                href="component-dropdown">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Dropdown</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-alert' &amp;&amp; '!text-indigo-500'"
                                                href="component-alert">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Alert &amp; Banner</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-modal' &amp;&amp; '!text-indigo-500'"
                                                href="component-modal">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Modal</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-pagination' &amp;&amp; '!text-indigo-500'"
                                                href="component-pagination">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Pagination</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-tabs' &amp;&amp; '!text-indigo-500'"
                                                href="component-tabs">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Tabs</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-breadcrumb' &amp;&amp; '!text-indigo-500'"
                                                href="component-breadcrumb">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Breadcrumb</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-badge' &amp;&amp; '!text-indigo-500'"
                                                href="component-badge">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Badge</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-avatar' &amp;&amp; '!text-indigo-500'"
                                                href="component-avatar">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Avatar</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-tooltip' &amp;&amp; '!text-indigo-500'"
                                                href="component-tooltip">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Tooltip</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-accordion' &amp;&amp; '!text-indigo-500'"
                                                href="component-accordion">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Accordion</span>
                                            </a>
                                        </li>
                                        <li class="rx wj">
                                            <a class="block yu hover--text-slate-200 wr wu ci" :class="page === 'component-icons' &amp;&amp; '!text-indigo-500'"
                                                href="component-icons">
                                                <span class="text-sm gk ttl ttb 2xl:opacity--100 wf">Icons</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <!-- <div class="gi hidden tel 2xl:hidden justify-end sm">
                    <div class="me vg">
                        <button @click="sidebarExpanded = !sidebarExpanded">
                            <span class="tc">Expand / collapse sidebar</span>
                            <svg class="ur oo db kj" viewBox="0 0 24 24">
                                <path class="yu" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                                <path class="ys" d="M3 23H1V1h2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Content area -->
        <!-- <div class="td flex fh ac ce ct"> -->

            <!-- Site header -->
            <!-- <header class="tv tk bg-white cx border-slate-200 ng">
                <div class="vd jd tto">
                    <div class="flex items-center fg op sn">
                        <div class="flex">
                            <button class="text-slate-500 hover--text-slate-600 tec" @click.stop="sidebarOpen = !sidebarOpen"
                                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                                <span class="tc">Open sidebar</span>
                                <svg class="ur oo db" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="4" y="5" width="16" height="2"></rect>
                                    <rect x="4" y="11" width="16" height="2"></rect>
                                    <rect x="4" y="17" width="16" height="2"></rect>
                                </svg>
                            </button>
                        </div>
                        <div class="flex items-center lu">
                            <div x-data="{ searchOpen: false }">
                                <button class="uu of flex items-center justify-center hy xl wr wu rounded-full" :class="{ 'hw': searchOpen }"
                                    @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});"
                                    aria-controls="search-modal">
                                    <span class="tc">Search</span>
                                    <svg class="ue on" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="db text-slate-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                        <path class="db yu" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                    </svg>
                                </button>
                                <div class="th tm bg-slate-900 pb nm wi" x-show="searchOpen" x-transition:enter="wr wh wf"
                                    x-transition:enter-start="opacity-0" x-transition:enter-end="bv" x-transition:leave="wr wh wa"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                                <div id="search-modal" class="th tm nm lq flex fd nn rw justify-center fe vd jd" role="dialog"
                                    aria-modal="true" x-show="searchOpen" x-transition:enter="wr wc wf" x-transition:enter-start="opacity-0 a_"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wc wf" x-transition:leave-start="bv ax"
                                    x-transition:leave-end="opacity-0 a_" x-cloak="">
                                    <div class="bg-white lj ai oq ok rounded by" @click.outside="searchOpen = false" @keydown.escape.window="searchOpen = false">
                                        <form class="cx border-slate-200">
                                            <div class="td">
                                                <label for="modal-search" class="tc">Search</label>
                                                <input id="modal-search" class="oq cw ks bl fu vm mh mk" type="search"
                                                    placeholder="Search Anything…" x-ref="searchInput">
                                                <button class="tp tm tg kp" type="submit" aria-label="Search">
                                                    <svg class="ue on ap db yu kv ix mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="mr v_">
                                            <div class="it wj">
                                                <div class="gb g_ yu gq v_ in">Recent searches</div>
                                                <ul class="text-sm">
                                                    <li>
                                                        <a class="flex items-center vc text-slate-800 xw xh rounded kp" href="#0"
                                                            @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Form Builder - 23 hours on-demand video</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center vc text-slate-800 xw xh rounded kp" href="#0"
                                                            @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Access Mosaic on mobile and TV</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center vc text-slate-800 xw xh rounded kp" href="#0"
                                                            @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Product Update - Q4 2021</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center vc text-slate-800 xw xh rounded kp" href="#0"
                                                            @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Master Digital Marketing Strategy course</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center vc text-slate-800 xw xh rounded kp" href="#0"
                                                            @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Dedicated forms for products</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center vc text-slate-800 xw xh rounded kp" href="#0"
                                                            @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                            </svg>
                                                            <span>Product Update - Q4 2021</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="it wj">
                                                <div class="gb g_ yu gq v_ in">Recent pages</div>
                                                <ul class="text-sm">
                                                    <li>
                                                        <a class="flex items-center vc text-slate-800 xw xh rounded kp" href="#0"
                                                            @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg>
                                                            <span>
                                                                <span class="gk text-slate-800 kg">Messages</span> - Conversation / … / Mike Mills</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="flex items-center vc text-slate-800 xw xh rounded kp" href="#0"
                                                            @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                            <svg class="ue on db yu kg kb ap rk" viewBox="0 0 16 16">
                                                                <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                            </svg>
                                                            <span>
                                                                <span class="gk text-slate-800 kg">Messages</span> - Conversation / … / Eva Patrick</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="td inline-flex" x-data="{ open: false }">
                                <button class="uu of flex items-center justify-center hy xl wr wu rounded-full" :class="{ 'hw': open }"
                                    aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="tc">Notifications</span>
                                    <svg class="ue on" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="db text-slate-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path>
                                        <path class="db yu" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path>
                                    </svg>
                                    <div class="tp tk tw uf oc pr cy ht rounded-full"></div>
                                </button>
                                <div class="am nv tp tq tw ip _l u_ bg-white border border-slate-200 ms rounded by lq iu"
                                    @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wr wh wf fe"
                                    x-transition:enter-start="opacity-0 aw" x-transition:enter-end="bv ax" x-transition:leave="wr wh wf"
                                    x-transition:leave-start="bv" x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="gb g_ yu gq mp mv vd">Notifications</div>
                                    <ul>
                                        <li class="cx border-slate-200 wz">
                                            <a class="block vg vd xo" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm in">📣
                                                    <span class="gk text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident,
                                                    sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block gb gk yu">Feb 12, 2021</span>
                                            </a>
                                        </li>
                                        <li class="cx border-slate-200 wz">
                                            <a class="block vg vd xo" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm in">📣
                                                    <span class="gk text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident,
                                                    sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block gb gk yu">Feb 9, 2021</span>
                                            </a>
                                        </li>
                                        <li class="cx border-slate-200 wz">
                                            <a class="block vg vd xo" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                                <span class="block text-sm in">🚀
                                                    <span class="gk text-slate-800">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident,
                                                    sunt in culpa qui officia deserunt mollit anim.</span>
                                                <span class="block gb gk yu">Jan 24, 2020</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="td inline-flex" x-data="{ open: false }">
                                <button class="uu of flex items-center justify-center hy xl wr wu rounded-full" :class="{ 'hw': open }"
                                    aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="tc">Info</span>
                                    <svg class="ue on" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                        <path class="db text-slate-500" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                    </svg>
                                </button>
                                <div class="am nv tp tq tw uj bg-white border border-slate-200 ms rounded by lq iu" @click.outside="open = false"
                                    @keydown.escape.window="open = false" x-show="open" x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf" x-transition:leave-start="bv"
                                    x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="gb g_ yu gq mp mv me">Need help?</div>
                                    <ul>
                                        <li>
                                            <a class="gk text-sm text-indigo-500 xd flex items-center mt me" href="#0" @click="open = false"
                                                @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 db text-indigo-300 ap mr-2" viewBox="0 0 12 12">
                                                    <rect y="3" width="12" height="9" rx="1"></rect>
                                                    <path d="M2 0h8v2H2z"></path>
                                                </svg>
                                                <span>Documentation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="gk text-sm text-indigo-500 xd flex items-center mt me" href="#0" @click="open = false"
                                                @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 db text-indigo-300 ap mr-2" viewBox="0 0 12 12">
                                                    <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z"></path>
                                                </svg>
                                                <span>Support Site</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="gk text-sm text-indigo-500 xd flex items-center mt me" href="#0" @click="open = false"
                                                @focus="open = true" @focusout="open = false">
                                                <svg class="w-3 h-3 db text-indigo-300 ap mr-2" viewBox="0 0 12 12">
                                                    <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"></path>
                                                </svg>
                                                <span>Contact us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="ut oo hw">
                            <div class="td inline-flex" x-data="{ open: false }">
                                <button class="inline-flex justify-center items-center kp" aria-haspopup="true" @click.prevent="open = !open"
                                    :aria-expanded="open">
                                    <img class="uu of rounded-full" src="images/user-avatar-32.png" width="32" height="32" alt="User">
                                    <div class="flex items-center ci">
                                        <span class="ci r_ text-sm gk km">Acme Inc.</span>
                                        <svg class="w-3 h-3 ap rq db yu" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </button>
                                <div class="am nv tp tq tw uj bg-white border border-slate-200 ms rounded by lq iu" @click.outside="open = false"
                                    @keydown.escape.window="open = false" x-show="open" x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw"
                                    x-transition:enter-end="bv ax" x-transition:leave="wr wh wf" x-transition:leave-start="bv"
                                    x-transition:leave-end="opacity-0" x-cloak="">
                                    <div class="mm mv me rx cx border-slate-200">
                                        <div class="gk text-slate-800">Acme Inc.</div>
                                        <div class="gb text-slate-500 gz"><?php 
                                        // echo $_SESSION['user']
                                        ?></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a class="gk text-sm text-indigo-500 xd flex items-center mt me" href="settings"
                                                @click="open = false" @focus="open = true" @focusout="open = false">Settings</a>
                                        </li>
                                        <li>
                                            <form action="" method="post">
                                            <button type="submit" name="signout" class="gk text-sm text-indigo-500 xd flex items-center mt me"
                                                @click="open = false" @focus="open = true" @focusout="open = false">Sign Out</button>
                                                </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header> -->

            <!-- <main>
                <div class="vd jd tto vv oq ar ri"> -->

                    <!-- Page header -->
                    <!-- <div class="ry"> -->

                        <!-- Title -->
                        <!-- <h1 class="gg zj text-slate-800 font-bold">Account Settings ✨</h1>

                    </div>

                    <div class="bg-white by rounded-sm ry">
                        <div class="flex fh zt qo"> -->

                            <!-- Sidebar -->
                            <!-- <div class="flex fp cn ta qh zp me mu cx zm zg border-slate-200 uz zh">
                                <div>
                                    <div class="gb g_ yu gq it">Business settings</div>
                                    <ul class="flex fp qh rk ql">
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'account' &amp;&amp; 'ph'"
                                                href="settings">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'account' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'account' ? 'text-indigo-500' : 'xx'">My Account</span>
                                            </a>
                                        </li>
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'plans' &amp;&amp; 'ph'"
                                                href="dashboard">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xx'">Back to Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'notifications' &amp;&amp; 'ph'"
                                                href="notifications">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'notifications' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M14.3.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-8 8c-.2.2-.4.3-.7.3-.3 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l8-8zM15 7c.6 0 1 .4 1 1 0 4.4-3.6 8-8 8s-8-3.6-8-8 3.6-8 8-8c.6 0 1 .4 1 1s-.4 1-1 1C4.7 2 2 4.7 2 8s2.7 6 6 6 6-2.7 6-6c0-.6.4-1 1-1z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'notifications' ? 'text-indigo-500' : 'xx'">My Notifications</span>
                                            </a>
                                        </li>
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'apps' &amp;&amp; 'ph'"
                                                href="connected-apps">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'apps' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M3.414 2L9 7.586V16H7V8.414l-5-5V6H0V1a1 1 0 011-1h5v2H3.414zM15 0a1 1 0 011 1v5h-2V3.414l-3.172 3.172-1.414-1.414L12.586 2H10V0h5z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'apps' ? 'text-indigo-500' : 'xx'">Connected Apps</span>
                                            </a>
                                        </li>
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'plans' &amp;&amp; 'ph'"
                                                href="plans">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xx'">Plans</span>
                                            </a>
                                        </li> -->
                                        <!-- <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'plans' &amp;&amp; 'ph'"
                                                href="changepassword">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xx'">Change Password</span>
                                            </a>
                                        </li> -->
                                        <!-- <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'billing' &amp;&amp; 'ph'"
                                                href="billing">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'billing' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M15 4c.6 0 1 .4 1 1v10c0 .6-.4 1-1 1H3c-1.7 0-3-1.3-3-3V3c0-1.7 1.3-3 3-3h7c.6 0 1 .4 1 1v3h4zM2 3v1h7V2H3c-.6 0-1 .4-1 1zm12 11V6H2v7c0 .6.4 1 1 1h11zm-3-5h2v2h-2V9z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'billing' ? 'text-indigo-500' : 'xx'">Billing &amp; Invoices</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <div class="gb g_ yu gq it">Experience</div>
                                    <ul class="flex fp qh rk ql">
                                        <li class="sa ql qc">
                                            <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'feedback' &amp;&amp; 'ph'"
                                                href="feedback">
                                                <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'feedback' &amp;&amp; 'text-indigo-400'"
                                                    viewBox="0 0 16 16">
                                                    <path d="M7.001 3h2v4h-2V3zm1 7a1 1 0 110-2 1 1 0 010 2zM15 16a1 1 0 01-.6-.2L10.667 13H1a1 1 0 01-1-1V1a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1zM2 11h9a1 1 0 01.6.2L14 13V2H2v9z"></path>
                                                </svg>
                                                <span class="text-sm gk ys" :class="settingsPanel === 'feedback' ? 'text-indigo-500' : 'xx'">Give Feedback</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->

                            <!-- Panel -->
                            <!-- <div class="ad"> -->

                                <!-- Panel body -->
                                <!-- <div class="vs fz">
                                    <h2 class="gg text-slate-800 font-bold id">My Account</h2> -->

                                    <!-- Picture -->
                                    <!-- <section>
                                        <div class="flex items-center">
                                            <div class="mr-4">
                                                <img class="uy os rounded-full" src="images/user-avatar-80.png" width="80" height="80" alt="User upload">
                                            </div>
                                            <button class="tt hb xs yo">Change</button>
                                        </div>
                                    </section> -->

                                    <!-- Business Profile -->
                                    <!-- <section> -->
                                        <!-- <h3 class="gy yt text-slate-800 font-bold rx">Business Profile</h3>
                                        <div class="text-sm">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunts
                                            mollit.</div> -->

                                            <?php

                                            //     if (isset($_GET['error'])) {

                                            //         if ($_GET['error']=='allfieldsarerequired') {

                                            //              echo '<div x-show="open" x-data="{ open: true }">
                                            //         <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                            //             <div class="flex oq fg fd">
                                            //                 <div class="flex">
                                            //                     <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                            //                         <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                            //                     </svg>
                                            //                     <div class="gk">All fields are required</div>
                                            //                 </div>
                                            //                 <button class="bd ke ml-3 if" @click="open = false">
                                            //                     <div class="tc">Close</div>
                                            //                     <svg class="ue on db">
                                            //                         <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                            //                     </svg>
                                            //                 </button>
                                            //             </div>
                                            //         </div>
                                            //     </div>';
                                            //     }elseif ($_GET['error']=='invalidemail') {

                                                    
                                            //         echo '<div x-show="open" x-data="{ open: true }">
                                            //         <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                            //             <div class="flex oq fg fd">
                                            //                 <div class="flex">
                                            //                     <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                            //                         <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                            //                     </svg>
                                            //                     <div class="gk">Invalid Email</div>
                                            //                 </div>
                                            //                 <button class="bd ke ml-3 if" @click="open = false">
                                            //                     <div class="tc">Close</div>
                                            //                     <svg class="ue on db">
                                            //                         <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                            //                     </svg>
                                            //                 </button>
                                            //             </div>
                                            //         </div>
                                            //     </div>';
                                            //     }elseif ($_GET['error']=='onlynumbersareallowed') {

                                            //         echo '<div x-show="open" x-data="{ open: true }">
                                            //         <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                            //             <div class="flex oq fg fd">
                                            //                 <div class="flex">
                                            //                     <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                            //                         <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                            //                     </svg>
                                            //                     <div class="gk">Only Numbers are Allowed</div>
                                            //                 </div>
                                            //                 <button class="bd ke ml-3 if" @click="open = false">
                                            //                     <div class="tc">Close</div>
                                            //                     <svg class="ue on db">
                                            //                         <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                            //                     </svg>
                                            //                 </button>
                                            //             </div>
                                            //         </div>
                                            //     </div>';
                                                    
                                            //     }elseif ($_GET['error']=='sqlerror') {

                                            //         echo '<div x-show="open" x-data="{ open: true }">
                                            //         <div class="inline-flex u_ vd vg rounded-sm text-sm pr yo">
                                            //             <div class="flex oq fg fd">
                                            //                 <div class="flex">
                                            //                     <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                            //                         <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm3.5 10.1l-1.4 1.4L8 9.4l-2.1 2.1-1.4-1.4L6.6 8 4.5 5.9l1.4-1.4L8 6.6l2.1-2.1 1.4 1.4L9.4 8l2.1 2.1z"></path>
                                            //                     </svg>
                                            //                     <div class="gk">Sql error</div>
                                            //                 </div>
                                            //                 <button class="bd ke ml-3 if" @click="open = false">
                                            //                     <div class="tc">Close</div>
                                            //                     <svg class="ue on db">
                                            //                         <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                            //                     </svg>
                                            //                 </button>
                                            //             </div>
                                            //         </div>
                                            //     </div>';
                                            //     }elseif ($_GET['success']=='saved') {

                                            //         echo'<div x-show="open" x-data="{ open: true }">
                                            //         <div class="inline-flex u_ vd vg rounded-sm text-sm hk yo">
                                            //             <div class="flex oq fg fd">
                                            //                 <div class="flex">
                                            //                     <svg class="ue on ap db bp if rk" viewBox="0 0 16 16">
                                            //                         <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zM7 11.4L3.6 8 5 6.6l2 2 4-4L12.4 6 7 11.4z"></path>
                                            //                     </svg>
                                            //                     <div class="gk">Saved</div>
                                            //                 </div>
                                            //                 <button class="bd ke ml-3 if" @click="open = false">
                                            //                     <div class="tc">Close</div>
                                            //                     <svg class="ue on db">
                                            //                         <path d="M7.95 6.536l4.242-4.243a1 1 0 111.415 1.414L9.364 7.95l4.243 4.242a1 1 0 11-1.415 1.415L7.95 9.364l-4.243 4.243a1 1 0 01-1.414-1.415L6.536 7.95 2.293 3.707a1 1 0 011.414-1.414L7.95 6.536z"></path>
                                            //                     </svg>
                                            //                 </button>
                                            //             </div>
                                            //         </div>
                                            //       </div>';
                                            //     }

                                            // }

                                                ?>

                         
  <!-- <form action="" method="POST">
    <section>  -->
                          
                          <?php
// setPwd();
                                            ?>
                           <!-- <div class="_y jn ln ju jl ig">  -->
      <!-- <h3 class="gy yt text-slate-800 font-bold rx">Password</h3>
      <div class="text-sm">You can set your New password here to Overide your Previous Password.</div>
      <div class="ig">
            <div class="_x">
                <label class="block text-sm gk rx" for="location">Recent Password</label>
                <input id="location" class="tn oq"  name="recent_pwd" type="password" placeholder = " Recent Password">

</div>
         <div class="ig">
            <div class="_x">
                <label class="block text-sm gk rx" for="location">New Password</label>
                <input id="location" class="tn oq"  name="new_pwd" type="password" placeholder = " New Password">

</div>
<div class="ig">
            <div class="_x">
                <label class="block text-sm gk rx" for="location">Confim New Password</label>
                <input id="location" class="tn oq"  name="c_new_pwd" type="password" placeholder = " Confirm Password">

</div>
    <button type="submit" name="pwd"  class="btn border-slate-200 bw text-indigo-500">Set New Password</button>
</div> 
</section>  
           </div>

            </div>
        </div>

     </div>
            </main>

        </div>

    </div>

    <script src="main.f640b348fcfd37dfcd91.js"></script>

    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-125021779-1'></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-125021779-1', { 'anonymize_ip': true });</script>
    <script>console.log("%cImportant!", "color: blue; font-size: x-large"); console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script>
    <script>const pagesList = [{ "name": "Dashboard", "url": "https://preview.cruip.com/mosaic/index", "active": false }, { "name": "Analytics", "url": "https://preview.cruip.com/mosaic/analytics", "active": false }, { "name": "Fintech", "url": "https://preview.cruip.com/mosaic/fintech", "active": false }, { "name": "Customers", "url": "https://preview.cruip.com/mosaic/customers", "active": false }, { "name": "Orders", "url": "https://preview.cruip.com/mosaic/orders", "active": false }, { "name": "Invoices", "url": "https://preview.cruip.com/mosaic/invoices", "active": false }, { "name": "Shop", "url": "https://preview.cruip.com/mosaic/shop", "active": false }, { "name": "Shop 2", "url": "https://preview.cruip.com/mosaic/shop-2", "active": false }, { "name": "Single Product", "url": "https://preview.cruip.com/mosaic/product", "active": false }, { "name": "Cart", "url": "https://preview.cruip.com/mosaic/cart", "active": false }, { "name": "Cart 2", "url": "https://preview.cruip.com/mosaic/cart-2", "active": false }, { "name": "Cart 3", "url": "https://preview.cruip.com/mosaic/cart-3", "active": false }, { "name": "Pay", "url": "https://preview.cruip.com/mosaic/pay", "active": false }, { "name": "Campaigns", "url": "https://preview.cruip.com/mosaic/campaigns", "active": false }, { "name": "Users Tabs", "url": "https://preview.cruip.com/mosaic/users-tabs", "active": false }, { "name": "Users Tiles", "url": "https://preview.cruip.com/mosaic/users-tiles", "active": false }, { "name": "Profile", "url": "https://preview.cruip.com/mosaic/profile", "active": false }, { "name": "Feed", "url": "https://preview.cruip.com/mosaic/feed", "active": false }, { "name": "Forum", "url": "https://preview.cruip.com/mosaic/forum", "active": false }, { "name": "Forum Post", "url": "https://preview.cruip.com/mosaic/forum-post", "active": false }, { "name": "Meetups", "url": "https://preview.cruip.com/mosaic/meetups", "active": false }, { "name": "Meetups Post", "url": "https://preview.cruip.com/mosaic/meetups-post", "active": false }, { "name": "Cards", "url": "https://preview.cruip.com/mosaic/credit-cards", "active": false }, { "name": "Transactions", "url": "https://preview.cruip.com/mosaic/transactions", "active": false }, { "name": "Transaction Details", "url": "https://preview.cruip.com/mosaic/transaction-details", "active": false }, { "name": "Jobs Listing", "url": "https://preview.cruip.com/mosaic/job-listing", "active": false }, { "name": "Jobs Post", "url": "https://preview.cruip.com/mosaic/job-post", "active": false }, { "name": "Company Profile", "url": "https://preview.cruip.com/mosaic/company-profile", "active": false }, { "name": "Kanban", "url": "https://preview.cruip.com/mosaic/tasks-kanban", "active": false }, { "name": "Tasks List", "url": "https://preview.cruip.com/mosaic/tasks-list", "active": false }, { "name": "Messages", "url": "https://preview.cruip.com/mosaic/messages", "active": false }, { "name": "Inbox", "url": "https://preview.cruip.com/mosaic/inbox", "active": false }, { "name": "Calendar", "url": "https://preview.cruip.com/mosaic/calendar", "active": false }, { "name": "Applications", "url": "https://preview.cruip.com/mosaic/applications", "active": false }, { "name": "My Account", "url": "https://preview.cruip.com/mosaic/settings", "active": true }, { "name": "My Notifications", "url": "https://preview.cruip.com/mosaic/notifications", "active": false }, { "name": "Connected Apps", "url": "https://preview.cruip.com/mosaic/connected-apps", "active": false }, { "name": "Plans", "url": "https://preview.cruip.com/mosaic/plans", "active": false }, { "name": "Billing & Invoices", "url": "https://preview.cruip.com/mosaic/billing", "active": false }, { "name": "Give Feedback", "url": "https://preview.cruip.com/mosaic/feedback", "active": false }, { "name": "Changelog", "url": "https://preview.cruip.com/mosaic/changelog", "active": false }, { "name": "Roadmap", "url": "https://preview.cruip.com/mosaic/roadmap", "active": false }, { "name": "FAQs", "url": "https://preview.cruip.com/mosaic/faqs", "active": false }, { "name": "Empty State", "url": "https://preview.cruip.com/mosaic/empty-state", "active": false }, { "name": "Page Not Found", "url": "https://preview.cruip.com/mosaic/404", "active": false }, { "name": "Knowledge Base", "url": "https://preview.cruip.com/mosaic/knowledge-base", "active": false }, { "name": "Sign in", "url": "https://preview.cruip.com/mosaic/signin", "active": false }, { "name": "Sign up", "url": "https://preview.cruip.com/mosaic/signup", "active": false }, { "name": "Reset password", "url": "https://preview.cruip.com/mosaic/reset-password", "active": false }, { "name": "Onboarding 1", "url": "https://preview.cruip.com/mosaic/onboarding-01", "active": false }, { "name": "Onboarding 2", "url": "https://preview.cruip.com/mosaic/onboarding-02", "active": false }, { "name": "Onboarding 3", "url": "https://preview.cruip.com/mosaic/onboarding-03", "active": false }, { "name": "Onboarding 4", "url": "https://preview.cruip.com/mosaic/onboarding-04", "active": false }, { "name": "Button", "url": "https://preview.cruip.com/mosaic/component-button", "active": false }, { "name": "Input Form", "url": "https://preview.cruip.com/mosaic/component-form", "active": false }, { "name": "Dropdown", "url": "https://preview.cruip.com/mosaic/component-dropdown", "active": false }, { "name": "Alert & Banner", "url": "https://preview.cruip.com/mosaic/component-alert", "active": false }, { "name": "Modal", "url": "https://preview.cruip.com/mosaic/component-modal", "active": false }, { "name": "Pagination", "url": "https://preview.cruip.com/mosaic/component-pagination", "active": false }, { "name": "Tabs", "url": "https://preview.cruip.com/mosaic/component-tabs", "active": false }, { "name": "Breadcrumb", "url": "https://preview.cruip.com/mosaic/component-breadcrumb", "active": false }, { "name": "Badge", "url": "https://preview.cruip.com/mosaic/component-badge", "active": false }, { "name": "Avatar", "url": "https://preview.cruip.com/mosaic/component-avatar", "active": false }, { "name": "Tooltip", "url": "https://preview.cruip.com/mosaic/component-tooltip", "active": false }, { "name": "Accordion", "url": "https://preview.cruip.com/mosaic/component-accordion", "active": false }, { "name": "Icons", "url": "https://preview.cruip.com/mosaic/component-icons", "active": false }]; if (window != top) { window.parent.postMessage(pagesList, "https://cruip.com/") };</script>
</body> -->
<!-- Mirrored from preview.cruip.com/mosaic/settings by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 11:20:33 GMT -->

<!-- </html> -->