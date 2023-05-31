<?php
include 'header.php';

if (!isset($_SESSION['id'])) {
    
    echo "<script>alert('You are not logged in')
    window.location='../Auto_admin/signin'
    </script>";
 }
?>
            <main>

                <!-- Content -->
                <div class="vd jd tto vv oq ar ri">

                    <!-- Page header -->
                    <div class="_y js jn rw qa">

                        <!-- Left: Title -->
                        <div class="rw _a">
                            <!-- <h1 class="gg zj text-slate-800 font-bold">$47,347.09</h1> -->
                        </div>

                        <!-- Right: Actions -->
                        <div class="sq fa _j fm ji fy">
                            <div class="table-items-action hidden">
                                <div class="flex items-center">
                                    <div class="hidden tnn text-sm gz mr-2 co">
                                        <span class="table-items-count"></span> items selected</div>
                                    <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xb">Delete</button>
                                </div>
                            </div>
                            <div class="hidden _m">
                                <form class="td">
                                    <label for="action-search" class="tc">Search</label>
                                    <input id="action-search" class="tn mf kn" type="search" placeholder="Search…">
                                    <button class="tp tm tg kp" type="submit" aria-label="Search">
                                        <svg class="ue on ap db yu kv ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                            <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <button class="btn hb xs yo">Export Transactions</button>
                        </div>

                    </div>

                    <div class="id">
                        <span>Transactions from </span>
                        <div class="td inline-flex" x-data="{ open: false }">
                            <button class="inline-flex justify-center items-center kp" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                <div class="flex items-center ci">
                                    <span class="ci gk text-indigo-500 ky">My Personal Account</span>
                                    <svg class="w-3 h-3 ap rq db text-indigo-400" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </button>
                            <div class="am nv tp tq tb uj bg-white border border-slate-200 ms rounded by lq iu" @click.outside="open = false" @keydown.escape.window="open = false"
                                x-show="open" x-transition:enter="wr wh wf fe" x-transition:enter-start="opacity-0 aw" x-transition:enter-end="bv ax"
                                x-transition:leave="wr wh wf" x-transition:leave-start="bv" x-transition:leave-end="opacity-0"
                                x-cloak="">
                                <ul>
                                    <li>
                                        <a class="gk text-sm ys xy flex items-center mt me" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Business Account</a>
                                    </li>
                                    <li>
                                        <a class="gk text-sm ys xy flex items-center mt me" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">Family Account</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Filters -->
                    <div class="id">
                        <ul class="flex flex-wrap -m-1">
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gk yr rounded-full me mt border he bw hb yo wu wc">View All</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gk yr rounded-full me mt border border-slate-200 hover--border-slate-300 bw bg-white text-slate-500 wu wc">Completed</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gk yr rounded-full me mt border border-slate-200 hover--border-slate-300 bw bg-white text-slate-500 wu wc">Pending</button>
                            </li>
                            <li class="m-1">
                                <button class="inline-flex items-center justify-center text-sm gk yr rounded-full me mt border border-slate-200 hover--border-slate-300 bw bg-white text-slate-500 wu wc">Canceled</button>
                            </li>
                        </ul>
                    </div>

                    <!-- Table -->
  
                    <?php delete(); ?>
                    <div class="bg-white">
                        <div x-data="handleSelect">
                            <div class="lz">
                                <table class="av oq" @click.stop="$dispatch('set-transactionopen', true)">
                                    <thead class="gb g_ gq text-slate-500 ck cx border-slate-200">
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
                                                <div class="g_ gh">Products Name</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Products Brand</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Products Mileage</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Product Year</div>
                                            </th>

                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">product Price</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gd">Product Upload</div>
                                            </th>
                                            <th class="v_ wk xe vm co">
                                                <div class="g_ gh">Product Description</div>
                                            </th>


                                        </tr>
                                    </thead>
                                    <tbody class="text-sm lg lb cx border-slate-200">
                                      <?php pro_list(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <script>document.addEventListener("alpine:init", () => { Alpine.data("handleSelect", () => ({ selectall: !1, selectAction() { countEl = document.querySelector(".table-items-action"), countEl && (checkboxes = document.querySelectorAll("input.table-item:checked"), document.querySelector(".table-items-count").innerHTML = checkboxes.length, checkboxes.length > 0 ? countEl.classList.remove("hidden") : countEl.classList.add("hidden")) }, toggleAll() { this.selectall = !this.selectall, checkboxes = document.querySelectorAll("input.table-item"), [...checkboxes].map(e => { e.checked = this.selectall }), this.selectAction() }, uncheckParent() { this.selectall = !1, document.getElementById("parent-checkbox").checked = !1, this.selectAction() } })) })</script>

                    <!-- Pagination -->
                    <div class="ie">
                        <div class="flex fh _z jn js">
                            <nav class="rw _a _e" role="navigation" aria-label="Navigation">
                                <ul class="flex justify-center">
                                    <li class="ml-3 first--ml-0">
                                        <a class="btn bg-white border-slate-200 yv fr" href="#0" disabled="disabled">&lt;- Previous</a>
                                    </li>
                                    <li class="ml-3 first--ml-0">
                                        <a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0">Next -&gt;</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="text-sm text-slate-500 gp jy"> Showing
                                <span class="gk ys">1</span> to
                                <span class="gk ys">10</span> of
                                <span class="gk ys">467</span> results </div>
                        </div>
                    </div>

                </div>
            </main>

<?php
include 'footer.php';
?>