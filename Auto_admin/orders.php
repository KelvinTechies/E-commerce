<?php
    // require 'Authentication.php';

    if (!isset($_SESSION['id'])) {
    
        echo "<script>alert('You are not logged in')
        window.location='../Auto_admin/signin'
        </script>";
     }

// Ordered_pro();
?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from preview.cruip.com/mosaic/orders by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Apr 2022 11:13:34 GMT -->

<head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Orders</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="style.a49749f4fb5cff923e10.css" rel="stylesheet">
</head>

<body class="gm bf hy ys" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ page: 'ecommerce-orders', sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }"
    x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

    <script>
        if (localStorage.getItem('sidebar-expanded') == 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>

    <!-- Page wrapper -->
    <!-- <div class="flex ot lq"> -->

        <?php
    require 'header2.php';
?>        
<div class="ad">
<div class="bg-white by rounded-sm border border-slate-200 ry">
                        <!-- <header class="mn mr">
                            <h2 class="g_ text-slate-800">All Orders
                                <span class="yu gk">442</span>
                            </h2>
                        </header> -->
                        <div x-data="handleSelect">
                            <div class="lz">
                                <table class="av oq lg lb">
                                    <thead class="gb gq text-slate-500 hq ck border-slate-200">
                                        <tr>
                                            <th class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select all</span>
                                                        <input id="parent-checkbox" class="to" type="checkbox"
                                                            @click="toggleAll"> </label>
                                                </div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Product</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Product Brand</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Quantity</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Product Name</div>
                                            </th>
                                            <!-- <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Status</div>
                                            </th> -->
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Status</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Price</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Total</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Time</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Date</div>
                                            </th>
                                            
                                            <?php

    Order_table()
?>                                            
                                            <!-- <th class="v_ wk xe vm co">
                                                <div class="g_">Items</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Location</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Payment type</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <span class="tc">Menu</span>
                                            </th> -->
                                        </tr>
                                    </thead>
                                    
                                    <!-- <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01"> </div>
                                                    <div class="gk yj">#143567</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>22/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Dominik Lamakani</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg"z>Refunded</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk pe yh rounded-full gp vk vy">$129.00</div>
                                            </td> -->
                                            <!-- <td class="v_ wk xe vm co">
                                                <div class="gp">1</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇨🇳 Shanghai, CN</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td> -->
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-01">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <!-- <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path> -->
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr id="description-01" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td> -->
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <!-- <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td> -->
                                            <!-- <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01"> </div>
                                                    <div class="gk yj">#227799</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>22/01/2021</div>
                                            </td> -->
                                            <!-- <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Mark Cameron</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$89.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk hz yf rounded-full gp vk vy">Approved</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">2</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇲🇽 Mexico City, MX</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-02">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="description-02" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-02.svg" width="20" height="20" alt="Icon 02"> </div>
                                                    <div class="gk yj">#143567</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>22/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Carolyn McNeail</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$89.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk hz yf rounded-full gp vk vy">Approved</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">2</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇮🇹 Milan, IT </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"></path>
                                                    </svg>
                                                    <div>One-time</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-03">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="description-03" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01"> </div>
                                                    <div class="gk yj">#664491</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>22/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Brian Halligan</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$59.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk hy text-slate-500 rounded-full gp vk vy">Pending</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">1</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇨🇳 Shanghai, CN</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"></path>
                                                    </svg>
                                                    <div>One-time</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-04">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="description-04" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-03.svg" width="20" height="20" alt="Icon 03"> </div>
                                                    <div class="gk yj">#780044</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>22/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Cool Robot</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$39.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk pe yh rounded-full gp vk vy">Refunded</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">1</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇫🇷 Marseille, FR</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-05">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="description-05" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01"> </div>
                                                    <div class="gk yj">#786512</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Sergio Gonnelli</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$59.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk hz yf rounded-full gp vk vy">Approved</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">1</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇮🇹 Bologna, IT</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"></path>
                                                    </svg>
                                                    <div>One-time</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-06">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="description-06" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-03.svg" width="20" height="20" alt="Icon 03"> </div>
                                                    <div class="gk yj">#664679</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">James Gill</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$89.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk hz yf rounded-full gp vk vy">Approved</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">1</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇫🇷 Paris, FR</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-07">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="description-07" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-03.svg" width="20" height="20" alt="Icon 03"> </div>
                                                    <div class="gk yj">#112467</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Alex Brooks</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$129.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk hz yf rounded-full gp vk vy">Approved</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">2</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇬🇧 London, UK</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg>
                                                    <div>Subscription</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-08">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="description-08" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-02.svg" width="20" height="20" alt="Icon 02"> </div>
                                                    <div class="gk yj">#379912</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Manuel Garbaya</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$89.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk hy text-slate-500 rounded-full gp vk vy">Pending</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">2</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇺🇸 New York, USA</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M11.4 0L10 1.4l2 2H8.4c-2.8 0-5 2.2-5 5V12l-2-2L0 11.4l3.7 3.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l3.7-3.7L7.4 10l-2 2V8.4c0-1.7 1.3-3 3-3H12l-2 2 1.4 1.4 3.7-3.7c.4-.4.4-1 0-1.4L11.4 0z"></path>
                                                    </svg>
                                                    <div>One-time</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-09">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr id="description-09" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody class="text-sm" x-data="{ open: false }">
                                        <tr>
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <label class="inline-flex">
                                                        <span class="tc">Select</span>
                                                        <input class="table-item to" type="checkbox" @click="uncheckParent"> </label>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center text-slate-800">
                                                    <div class="ua ol ap flex items-center justify-center hy rounded-full mr-2 _f">
                                                        <img class="rq" src="images/icon-01.svg" width="20" height="20" alt="Icon 01"> </div>
                                                    <div class="gk yj">#664499</div>
                                                </div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div>21/01/2021</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gk text-slate-800">Glenn Thomas</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh gk yg">$59.00</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="inline-flex gk pe yh rounded-full gp vk vy">Refunded</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gp">1</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="gh">🇬🇧 Sheffield, UK</div>
                                            </td>
                                            <td class="v_ wk xe vm co">
                                                <div class="flex items-center">
                                                    <svg class="ue on db yu ap mr-2" viewBox="0 0 16 16">
                                                        <path d="M4.3 4.5c1.9-1.9 5.1-1.9 7 0 .7.7 1.2 1.7 1.4 2.7l2-.3c-.2-1.5-.9-2.8-1.9-3.8C10.1.4 5.7.4 2.9 3.1L.7.9 0 7.3l6.4-.7-2.1-2.1zM15.6 8.7l-6.4.7 2.1 2.1c-1.9 1.9-5.1 1.9-7 0-.7-.7-1.2-1.7-1.4-2.7l-2 .3c.2 1.5.9 2.8 1.9 3.8 1.4 1.4 3.1 2 4.9 2 1.8 0 3.6-.7 4.9-2l2.2 2.2.8-6.4z"></path>
                                                    </svg> -->
                                                    <!-- <div>Subscription</div>
                                                </div>
                                            </td> -->
                                            <td class="v_ wk xe vm co ut">
                                                <div class="flex items-center">
                                                    <button class="yu xm fe" :class="{ 'az': open }" @click.prevent="open = !open"
                                                        :aria-expanded="open" aria-controls="description-10">
                                                        <span class="tc">Menu</span>
                                                        <svg class="uu of db" viewBox="0 0 32 32">
                                                            <path d="M16 20l-5.4-5.4 1.4-1.4 4 4 4-4 1.4 1.4z"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- <tr id="description-10" role="region" x-show="open" x-cloak="">
                                            <td colspan="10" class="v_ wk xe vm">
                                                <div class="flex items-center hq vf ia">
                                                    <svg class="ue on ap db yu mr-2" viewBox="0 0 16 16">
                                                        <path d="M1 16h3c.3 0 .5-.1.7-.3l11-11c.4-.4.4-1 0-1.4l-3-3c-.4-.4-1-.4-1.4 0l-11 11c-.2.2-.3.4-.3.7v3c0 .6.4 1 1 1zm1-3.6l10-10L13.6 4l-10 10H2v-1.6z"></path>
                                                    </svg>
                                                    <div class="gz">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum.</div>
                                                </div>
                                            </td>
                                        </tr> -->
                                        
                                        
                                    </tbody>
                                    
                                </table>
                                <!-- <p>Total Price of Products= </p> -->
                            
                                
                            </div>
                        </div>
                    </div>
</div>
<?php require 'footer2.php' ?>

      