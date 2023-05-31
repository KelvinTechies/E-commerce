<?php

// require '../Auto_admin/Authentication.php';
require 'header2.php';

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
    <h1 class="gg zj text-slate-800 font-bold">My Account✨</h1>

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
                            href="user_settings">
                            <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'account' &amp;&amp; 'text-indigo-400'"
                                viewBox="0 0 16 16">
                                <path d="M12.311 9.527c-1.161-.393-1.85-.825-2.143-1.175A3.991 3.991 0 0012 5V4c0-2.206-1.794-4-4-4S4 1.794 4 4v1c0 1.406.732 2.639 1.832 3.352-.292.35-.981.782-2.142 1.175A3.942 3.942 0 001 13.26V16h14v-2.74c0-1.69-1.081-3.19-2.689-3.733zM6 4c0-1.103.897-2 2-2s2 .897 2 2v1c0 1.103-.897 2-2 2s-2-.897-2-2V4zm7 10H3v-.74c0-.831.534-1.569 1.33-1.838 1.845-.624 3-1.436 3.452-2.422h.436c.452.986 1.607 1.798 3.453 2.422A1.943 1.943 0 0113 13.26V14z"></path>
                            </svg>
                            <span class="text-sm gk ys" :class="settingsPanel === 'account' ? 'text-indigo-500' : 'xx'">My Account</span>
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
                    </li>
                    <li class="sa ql qc">
                        <a class="flex items-center vk vg rounded co" :class="settingsPanel === 'plans' &amp;&amp; 'ph'"
                            href="changepassword">
                            <svg class="ue on ap db yu mr-2" :class="settingsPanel === 'plans' &amp;&amp; 'text-indigo-400'"
                                viewBox="0 0 16 16">
                                <path d="M5 9h11v2H5V9zM0 9h3v2H0V9zm5 4h6v2H5v-2zm-5 0h3v2H0v-2zm5-8h7v2H5V5zM0 5h3v2H0V5zm5-4h11v2H5V1zM0 1h3v2H0V1z"></path>
                            </svg>
                            <span class="text-sm gk ys" :class="settingsPanel === 'plans' ? 'text-indigo-500' : 'xx'">Change Password</span>
                        </a>
                    </li>
                    <li class="sa ql qc">
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

                <!-- Business Profile -->
                <section>
                    
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
      
                    
<form action="" method="post">

<div class="_y jn ln ju jl ig">
                    
<div class="_x">
 <label class="block text-sm gk rx" for="name">Business Name</label>
 <input id="name" class="tn oq" type="text" name = "bussnme" placeholder ="Business Name" value="<?php  echo settings('Business name') ?> ">
</div>

<div class="_x">
 <label class="block text-sm gk rx" for="location">House Address</label>
 <input id="location" class="tn oq" type="text" name = "house" value="<?php  echo settings('House Address') ?>" placeholder ="House Address">
</div>

<div class="_x">
 <label class="block text-sm gk rx" for="location">State</label>
 <input id="location" class="tn oq" type="text" name="state" value="<?php  echo settings('State') ?>" placeholder ="State">

</div>
<div class="_x">
<label class="block text-sm gk rx" for="location">City/Town</label>
<input id="location" class="tn oq" type="text" name="city" value="<?php  echo settings('City') ?>" placeholder ="City/Town">

</div>
<div class="_x">
 <label class="block text-sm gk rx" for="location">Phone Number</label>
 <input id="location" class="tn oq" name="fone" type="text" value="<?php  echo settings('Phone number') ?>" placeholder = "+234000000">

</div>

</div>
</section>


<section>
<div class="_y jn ln ju jl ig">

<div class="_x">
 <label class="block text-sm gk rx" for="location">Email</label>
 <input id="location" class="tn oq" name="email" type="email" value="<?php  echo settings('email') ?>" placeholder = " example@gmail.com">

</div>

<div class="_x">
 <label class="block text-sm gk rx" for="business-id">Company Address</label>
 <input id="business-id" class="tn oq" type="text" name ="cmpnme" value="<?php  echo settings('Company Adress') ?>" placeholder ="Optional">
</div>

<div class="_x">
<label class="block text-sm gk rx" for="location">Country</label>

<select class="tn oq" name ="country" id=""> 

 <option  name="country" class="tn oq" value="" disabled>Select Your Country</option>
 
 <?php  countries(); ?>


</select>
</div>
</section>



<section>
<h3 class="gy yt text-slate-800 font-bold rx">Email</h3>
<div class="text-sm">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
<div class="flex flex-wrap ig">
<div class="mr-2">
 <label class="tc" for="email">Business email</label>
 <input id="email" class="tn" type="email" disabled value="<?php  echo settings('email') ?>" placeholder="You can change your email">
</div>

</div>

</section>


                <section> 
                <div class="_y jn ln ju jl ig"> 

                     <!-- <div class="_x">
                            <label class="block text-sm gk rx" for="location">Email</label>
                            <input id="location" class="tn oq" name="Email" type="email" placeholder = " example@gmail.com">
            
                    </div> 

                    <div class="_x">
                            <label class="block text-sm gk rx" for="business-id">Company Address</label>
                            <input id="business-id" class="tn oq" type="text" name ="cmpnme" placeholder ="Optional">
                        </div>   -->
                   


                <!-- Email -->
                <!-- <section>
                    <h3 class="gy yt text-slate-800 font-bold rx">Email</h3>
                    <div class="text-sm">Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia.</div>
                    <div class="flex flex-wrap ig">
                        <div class="mr-2">
                            <label class="tc" for="email">Business email</label>
                            <input id="email" class="tn" type="email" placeholder="You can change your email">
                        </div>
                        <button class="btn border-slate-200 hover--border-slate-300 bw text-indigo-500">Change</button>
                    </div>
                </section>  -->

                <!-- Password -->
                <!-- <form action="" method="post"> -->
                
                        <?php
setPwd();
sec_Address();

                        ?>
                         
                <!-- </form> -->
               
                <!-- Smart Sync -->
                <!-- <section>
                    <h3 class="gy yt text-slate-800 font-bold rx">Smart Sync update for Mac</h3>
                    <div class="flex items-center ig" x-data="{ checked: true }">
                        <div class="tf">
                            <input type="checkbox" id="toggle" class="tc" x-model="checked">
                            <label class="pf" for="toggle">
                                <span class="bg-white bw" aria-hidden="true"></span>
                                <span class="tc">Enable smart sync</span>
                            </label>
                        </div>
                        <div class="text-sm yu gz r_" x-text="checked ? 'On' : 'Off'"></div>
                    </div>
                </section>
            </div> -->

            <!-- Panel footer -->
            <footer>
                <div class="flex fh vw vx ck border-slate-200">
                    <div class="flex lk">
                        <button type="submit" name="cancel" class="btn border-slate-200 hover--border-slate-300 ys">Cancel</button>
                        <button type="submit" name="save" class="btn hb xs yo ml-3">Save Changes</button>
                    </div>
                    </form>
                </div>
            </footer>

        </div>

    </div>
</div>

</div>
</main>

</div>

</div>

<?php require 'footer2.php' ?>


