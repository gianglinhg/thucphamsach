<?php include_once('model/database.php');      ?>
<?php include_once('model/products.php');      ?>
<form action="index.php?page=home&act=delete">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">
                                                <?php
                                                $sql = "SELECT COUNT(*) as total FROM category";
                                                $count = queryOne($sql);
                                                echo $count['total'];
                                                ?>
                                            </h4>
                                            <h6 class="text-white m-b-0">Số danh mục</h6>
                                        </div>
                                        <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" src="./Adminty - Premium Admin Template by Colorlib_files/saved_resource.html"></iframe>
                                            <canvas id="update-chart-1" height="50" style="display: block; width: 91px; height: 50px;" width="91"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><a href="index.php?page=products_category">View all</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-green update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">

                                                <?php
                                                // viết hàm tính tổng số sản phẩm
                                                $sql = "SELECT COUNT(*) as total FROM products";
                                                $count = queryOne($sql);
                                                echo $count['total'];



                                                ?>




                                                <h6 class="text-white m-b-0">Sản phẩm</h6>
                                        </div>
                                        <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" src="./Adminty - Premium Admin Template by Colorlib_files/saved_resource(1).html"></iframe>
                                            <canvas id="update-chart-2" height="50" width="91" style="display: block; width: 91px; height: 50px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><a href="index.php?page=products">View all</a> </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">
                                                <?php
                                                $sql = "SELECT COUNT(*) as total FROM news";
                                                $count = queryOne($sql);
                                                echo $count['total'];
                                                ?>



                                            </h4>
                                            <h6 class="text-white m-b-0">Tin tức</h6>
                                        </div>
                                        <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" src="./Adminty - Premium Admin Template by Colorlib_files/saved_resource(2).html"></iframe>
                                            <canvas id="update-chart-3" height="50" width="91" style="display: block; width: 91px; height: 50px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0"><a href="index.php?page=users">View all</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-lite-green update-card">
                                <div class="card-block">
                                    <div class="row align-items-end">
                                        <div class="col-8">
                                            <h4 class="text-white">
                                                <?php
                                                $sql = "SELECT COUNT(*) as total FROM users";
                                                $count = queryOne($sql);
                                                echo $count['total'];
                                                ?>
                                            </h4>
                                            <h6 class="text-white m-b-0">Số khách hàng</h6>
                                        </div>
                                        <div class="col-4 text-right"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" src="./Adminty - Premium Admin Template by Colorlib_files/saved_resource(3).html"></iframe>
                                            <canvas id="update-chart-4" height="50" width="91" style="display: block; width: 91px; height: 50px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <p class="text-white m-b-0">
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-9 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sales Analytics</h5>
                                    <span class="text-muted">For more details about usage, please refer <a href="https://www.amcharts.com/online-store/" target="_blank">amCharts</a> licences.</span>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div id="sales-analytics" style="height: 265px; overflow: hidden; text-align: left;">
                                        <div class="amcharts-main-div" style="position: relative;">
                                            <div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 1142px; height: 265px; padding: 0px; cursor: default; touch-action: auto;"><svg version="1.1" style="position: absolute; width: 1142px; height: 265px; top: -0.203125px; left: -0.203125px;">
                                                    <desc>JavaScript chart by amCharts 3.21.5</desc>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,0.5 L1141.5,0.5 L1141.5,264.5 L0.5,264.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path>
                                                        <path cs="100,100" d="M0.5,0.5 L1091.5,0.5 L1091.5,179.5 L0.5,179.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(50,55)"></path>
                                                    </g>
                                                    <g>
                                                        <g transform="translate(50,0)" visibility="hidden"></g>
                                                        <g transform="translate(50,55)">
                                                            <g>
                                                                <path cs="100,100" d="M0.5,0.5 L0.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M97.5,0.5 L97.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M195.5,0.5 L195.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M292.5,0.5 L292.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M390.5,0.5 L390.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M487.5,0.5 L487.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M584.5,0.5 L584.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M682.5,0.5 L682.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M779.5,0.5 L779.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M877.5,0.5 L877.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M974.5,0.5 L974.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                            <g>
                                                                <path cs="100,100" d="M1072.5,0.5 L1072.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,179)"></path>
                                                            </g>
                                                        </g>
                                                        <g transform="translate(50,55)" visibility="visible"></g>
                                                    </g>
                                                    <g transform="translate(50,55)" clip-path="url(#AmChartsEl-3)">
                                                        <g visibility="hidden">
                                                            <g transform="translate(0,0)" visibility="hidden">
                                                                <rect x="0.5" y="0.5" width="20" height="179" rx="0" ry="0" stroke-width="0" fill="#000000" stroke="#000000" fill-opacity="0" stroke-opacity="0" transform="translate(-11,0)"></rect>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g></g>
                                                    <g></g>
                                                    <g></g>
                                                    <g>
                                                        <g transform="translate(50,55)">
                                                            <g clip-path="url(#AmChartsEl-6)">
                                                                <path cs="100,100" d="M10,162 C15,161,19,140,29,137 C39,135,39,122,49,120 C59,119,58,111,68,112 C78,114,78,150,88,152 C98,155,97,157,107,158 C117,159,117,172,127,170 C137,168,136,124,146,121 C156,118,156,109,166,109 C176,109,175,120,185,121 C195,122,195,130,205,130 C215,129,214,113,224,112 C234,111,234,112,244,111 C254,111,254,105,263,107 C273,110,272,158,282,160 C292,162,292,148,302,146 C312,145,311,134,321,134 C331,133,331,134,341,134 C351,134,350,137,360,136 C370,135,370,110,380,109 C390,109,389,118,399,120 C409,121,409,142,419,141 C429,141,428,120,438,117 C448,115,448,92,458,94 C468,95,467,143,477,146 C487,148,487,137,497,138 C507,138,506,155,516,153 C526,151,526,106,536,104 C546,102,545,119,555,119 C565,118,565,100,575,98 C585,97,584,94,594,94 C604,93,604,85,614,86 C624,87,623,106,633,105 C643,105,643,75,653,76 C663,76,662,109,672,111 C682,113,682,114,692,114 C702,114,701,104,711,102 C721,100,721,77,731,75 C741,74,740,75,750,75 C760,76,760,89,770,89 C780,88,779,63,789,62 C799,61,799,68,809,70 C819,72,818,95,828,96 C838,97,838,89,848,88 C858,87,858,78,867,77 C877,75,876,59,886,59 C896,60,896,83,906,82 C916,81,915,48,925,44 C935,41,935,9,945,9 C955,10,954,52,964,54 C974,57,974,61,984,60 C994,59,993,36,1003,34 C1013,32,1013,25,1023,25 C1033,24,1032,23,1042,23 C1052,23,1052,28,1062,28 C1072,28,1076,23,1081,23 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="2" stroke-opacity="0.9" stroke="#fe9365"></path>
                                                            </g>
                                                            <g clip-path="url(#AmChartsEl-5)">
                                                                <path cs="100,100" d="M10,162 C15,161,19,140,29,137 C39,135,39,122,49,120 C59,119,58,111,68,112 C78,114,78,150,88,152 C98,155,97,157,107,158 C117,159,117,172,127,170 C137,168,136,124,146,121 C156,118,156,109,166,109 C176,109,175,120,185,121 C195,122,195,130,205,130 C215,129,214,113,224,112 C234,111,234,112,244,111 C254,111,254,105,263,107 C273,110,272,158,282,160 C292,162,292,148,302,146 C312,145,311,134,321,134 C331,133,331,134,341,134 C351,134,350,137,360,136 C370,135,370,110,380,109 C390,109,389,118,399,120 C409,121,409,142,419,141 C429,141,428,120,438,117 C448,115,448,92,458,94 C468,95,467,143,477,146 C487,148,487,137,497,138 C507,138,506,155,516,153 C526,151,526,106,536,104 C546,102,545,119,555,119 C565,118,565,100,575,98 C585,97,584,94,594,94 C604,93,604,85,614,86 C624,87,623,106,633,105 C643,105,643,75,653,76 C663,76,662,109,672,111 C682,113,682,114,692,114 C702,114,701,104,711,102 C721,100,721,77,731,75 C741,74,740,75,750,75 C760,76,760,89,770,89 C780,88,779,63,789,62 C799,61,799,68,809,70 C819,72,818,95,828,96 C838,97,838,89,848,88 C858,87,858,78,867,77 C877,75,876,59,886,59 C896,60,896,83,906,82 C916,81,915,48,925,44 C935,41,935,9,945,9 C955,10,954,52,964,54 C974,57,974,61,984,60 C994,59,993,36,1003,34 C1013,32,1013,25,1023,25 C1033,24,1032,23,1042,23 C1052,23,1052,28,1062,28 C1072,28,1076,23,1081,23 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="2" stroke-opacity="0.9" stroke="#fe5d70"></path>
                                                            </g>
                                                            <clippath id="AmChartsEl-5">
                                                                <rect x="0" y="0" width="1091" height="107" rx="0" ry="0" stroke-width="0"></rect>
                                                            </clippath>
                                                            <clippath id="AmChartsEl-6">
                                                                <rect x="0" y="107" width="1091" height="72" rx="0" ry="0" stroke-width="0"></rect>
                                                            </clippath>
                                                            <g></g>
                                                        </g>
                                                    </g>
                                                    <g></g>
                                                    <g>
                                                        <path cs="100,100" d="M0.5,107.5 L1091.5,107.5 L1091.5,107.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(50,55)"></path>
                                                        <path cs="100,100" d="M0.5,37.5 L1092.5,37.5 L1092.5,37.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(50,0)"></path>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,0.5 L1091.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(0,55)"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,55.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(50,0)" visibility="hidden"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,0.5 L1091.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(50,234)"></path>
                                                        </g>
                                                        <g>
                                                            <path cs="100,100" d="M0.5,0.5 L0.5,179.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(50,55)" visibility="visible"></path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g transform="translate(50,55)" clip-path="url(#AmChartsEl-4)" style="pointer-events: none;">
                                                            <path cs="100,100" d="M0.5,0.5 L1091.5,0.5 L1091.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.5" stroke="#000000" visibility="hidden"></path>
                                                        </g>
                                                        <clippath id="AmChartsEl-4">
                                                            <rect x="0" y="0" width="1091" height="179" rx="0" ry="0" stroke-width="0"></rect>
                                                        </clippath>
                                                    </g>
                                                    <g>
                                                        <g visibility="visible" transform="translate(50,0)" style="touch-action: none;">
                                                            <rect x="0.5" y="0.5" width="1092" height="55" rx="0" ry="0" stroke-width="1" fill="#000000" stroke="#000000" fill-opacity="0" stroke-opacity="0"></rect>
                                                            <rect x="0.5" y="0.5" width="1091" height="56" rx="0" ry="0" stroke-width="0" fill="#888888" stroke="#888888" fill-opacity="0.1" stroke-opacity="0.1" transform="translate(0,0)"></rect>
                                                            <g transform="translate(0,0)">
                                                                <g></g>
                                                                <g>
                                                                    <path cs="100,100" d="M10,48 C15,48,19,43,29,43 C39,42,39,40,49,39 C59,39,58,37,68,38 C78,38,78,45,88,46 C98,46,97,47,107,47 C117,47,117,50,127,49 C137,49,136,40,146,39 C156,39,156,37,166,37 C176,37,175,39,185,39 C195,40,195,41,205,41 C215,41,214,38,224,38 C234,37,234,38,244,37 C254,37,254,36,263,37 C273,37,272,47,282,48 C292,48,292,45,302,45 C312,44,311,42,321,42 C331,42,331,42,341,42 C351,42,350,43,360,43 C370,42,370,37,380,37 C390,37,389,39,399,39 C409,39,409,44,419,44 C429,44,428,39,438,39 C448,38,448,34,458,34 C468,34,467,44,477,44 C487,45,487,43,497,43 C507,43,506,46,516,46 C526,46,526,36,536,36 C546,36,545,39,555,39 C565,39,565,35,575,35 C585,35,584,34,594,34 C604,34,604,32,614,32 C624,32,623,36,633,36 C643,36,643,30,653,30 C663,30,662,37,672,37 C682,38,682,38,692,38 C702,38,701,36,711,36 C721,35,721,30,731,30 C741,30,740,30,750,30 C760,30,760,33,770,33 C780,33,779,28,789,27 C799,27,799,29,809,29 C819,29,818,34,828,34 C838,34,838,33,848,33 C858,32,858,31,867,30 C877,30,876,27,886,27 C896,27,896,32,906,31 C916,31,915,24,925,24 C935,23,935,16,945,17 C955,17,954,25,964,26 C974,26,974,27,984,27 C994,27,993,22,1003,22 C1013,21,1013,20,1023,20 C1033,20,1032,19,1042,19 C1052,19,1052,20,1062,20 C1072,20,1076,19,1081,19 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="1" stroke-opacity="0.2" stroke="#c2c2c2"></path>
                                                                </g>
                                                                <g></g>
                                                            </g>
                                                            <g transform="translate(0,0)" clip-path="url(#AmChartsEl-7)">
                                                                <g></g>
                                                                <g>
                                                                    <path cs="100,100" d="M10,48 C15,48,19,43,29,43 C39,42,39,40,49,39 C59,39,58,37,68,38 C78,38,78,45,88,46 C98,46,97,47,107,47 C117,47,117,50,127,49 C137,49,136,40,146,39 C156,39,156,37,166,37 C176,37,175,39,185,39 C195,40,195,41,205,41 C215,41,214,38,224,38 C234,37,234,38,244,37 C254,37,254,36,263,37 C273,37,272,47,282,48 C292,48,292,45,302,45 C312,44,311,42,321,42 C331,42,331,42,341,42 C351,42,350,43,360,43 C370,42,370,37,380,37 C390,37,389,39,399,39 C409,39,409,44,419,44 C429,44,428,39,438,39 C448,38,448,34,458,34 C468,34,467,44,477,44 C487,45,487,43,497,43 C507,43,506,46,516,46 C526,46,526,36,536,36 C546,36,545,39,555,39 C565,39,565,35,575,35 C585,35,584,34,594,34 C604,34,604,32,614,32 C624,32,623,36,633,36 C643,36,643,30,653,30 C663,30,662,37,672,37 C682,38,682,38,692,38 C702,38,701,36,711,36 C721,35,721,30,731,30 C741,30,740,30,750,30 C760,30,760,33,770,33 C780,33,779,28,789,27 C799,27,799,29,809,29 C819,29,818,34,828,34 C838,34,838,33,848,33 C858,32,858,31,867,30 C877,30,876,27,886,27 C896,27,896,32,906,31 C916,31,915,24,925,24 C935,23,935,16,945,17 C955,17,954,25,964,26 C974,26,974,27,984,27 C994,27,993,22,1003,22 C1013,21,1013,20,1023,20 C1033,20,1032,19,1042,19 C1052,19,1052,20,1062,20 C1072,20,1076,19,1081,19 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="1" stroke-opacity="1" stroke="#888888"></path>
                                                                </g>
                                                                <g></g>
                                                            </g>
                                                            <g transform="translate(0,0)"></g>
                                                            <g transform="translate(0,0)" visibility="visible"><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(3,43.5)">
                                                                    <tspan y="6" x="0">1950</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(100,43.5)">
                                                                    <tspan y="6" x="0">1955</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(198,43.5)">
                                                                    <tspan y="6" x="0">1960</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(295,43.5)">
                                                                    <tspan y="6" x="0">1965</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(393,43.5)">
                                                                    <tspan y="6" x="0">1970</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(490,43.5)">
                                                                    <tspan y="6" x="0">1975</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(587,43.5)">
                                                                    <tspan y="6" x="0">1980</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(685,43.5)">
                                                                    <tspan y="6" x="0">1985</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(782,43.5)">
                                                                    <tspan y="6" x="0">1990</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(880,43.5)">
                                                                    <tspan y="6" x="0">1995</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(977,43.5)">
                                                                    <tspan y="6" x="0">2000</tspan>
                                                                </text><text y="6" fill="#888888" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(1075,43.5)">
                                                                    <tspan y="6" x="0">2005</tspan>
                                                                </text></g>
                                                            <rect x="0.5" y="0.5" width="1092" height="55" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005"></rect>
                                                            <rect x="0" y="0.5" width="1091" height="55" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" aria-label="Zoom chart using cursor arrows" role="menuitem" style="cursor: -webkit-grab;"></rect>
                                                            <g aria-label="Zoom chart using cursor arrows" role="menuitem" transform="translate(-17,10)" visibility="visible">
                                                                <image x="0" y="0" width="35" height="35" xlink:href="https://colorlib.com//polygon/adminty/files/assets/pages/widget/amchart/images/dragIconRoundBig.svg"></image>
                                                                <rect x="0.5" y="0.5" width="25" height="55" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(5,-10)"></rect>
                                                            </g>
                                                            <g aria-label="Zoom chart using cursor arrows" role="menuitem" transform="translate(1074,10)" visibility="visible">
                                                                <image x="0" y="0" width="35" height="35" xlink:href="https://colorlib.com//polygon/adminty/files/assets/pages/widget/amchart/images/dragIconRoundBig.svg"></image>
                                                                <rect x="0.5" y="0.5" width="25" height="55" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(5,-10)"></rect>
                                                            </g>
                                                            <clippath id="AmChartsEl-7">
                                                                <rect x="0" y="0" width="1091" height="56" rx="0" ry="0" stroke-width="0"></rect>
                                                            </clippath>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g transform="translate(0,0)"></g>
                                                        <g transform="translate(0,0)"></g>
                                                        <g transform="translate(50,55)">
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(10,162)" aria-label=" 1950 -0.307"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(29,137)" aria-label=" 1951 -0.168"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(49,120)" aria-label=" 1952 -0.073"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(68,112)" aria-label=" 1953 -0.027"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(88,152)" aria-label=" 1954 -0.251"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(107,158)" aria-label=" 1955 -0.281"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(127,170)" aria-label=" 1956 -0.348"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(146,121)" aria-label=" 1957 -0.074"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(166,109)" aria-label=" 1958 -0.011"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(185,121)" aria-label=" 1959 -0.074"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(205,130)" aria-label=" 1960 -0.124"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(224,112)" aria-label=" 1961 -0.024"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(244,111)" aria-label=" 1962 -0.022"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(263,107)" aria-label=" 1963 0"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(282,160)" aria-label=" 1964 -0.296"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(302,146)" aria-label=" 1965 -0.217"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(321,134)" aria-label=" 1966 -0.147"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(341,134)" aria-label=" 1967 -0.15"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(360,136)" aria-label=" 1968 -0.16"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(380,109)" aria-label=" 1969 -0.011"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(399,120)" aria-label=" 1970 -0.068"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(419,141)" aria-label=" 1971 -0.19"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(438,117)" aria-label=" 1972 -0.056"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(458,94)" aria-label=" 1973 0.077"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(477,146)" aria-label=" 1974 -0.213"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(497,138)" aria-label=" 1975 -0.17"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(516,153)" aria-label=" 1976 -0.254"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(536,104)" aria-label=" 1977 0.019"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(555,119)" aria-label=" 1978 -0.063"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(575,98)" aria-label=" 1979 0.05"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(594,94)" aria-label=" 1980 0.077"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(614,86)" aria-label=" 1981 0.12"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(633,105)" aria-label=" 1982 0.011"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(653,76)" aria-label=" 1983 0.177"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(672,111)" aria-label=" 1984 -0.021"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe9365" stroke="#fe9365" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(692,114)" aria-label=" 1985 -0.037"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(711,102)" aria-label=" 1986 0.03"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(731,75)" aria-label=" 1987 0.179"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(750,75)" aria-label=" 1988 0.18"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(770,89)" aria-label=" 1989 0.104"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(789,62)" aria-label=" 1990 0.255"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(809,70)" aria-label=" 1991 0.21"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(828,96)" aria-label=" 1992 0.065"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(848,88)" aria-label=" 1993 0.11"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(867,77)" aria-label=" 1994 0.172"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(886,59)" aria-label=" 1995 0.269"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(906,82)" aria-label=" 1996 0.141"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(925,44)" aria-label=" 1997 0.353"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(945,9)" aria-label=" 1998 0.548"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(964,54)" aria-label=" 1999 0.298"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(984,60)" aria-label=" 2000 0.267"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(1003,34)" aria-label=" 2001 0.411"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(1023,25)" aria-label=" 2002 0.462"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(1042,23)" aria-label=" 2003 0.47"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(1062,28)" aria-label=" 2004 0.445"></circle>
                                                            <circle r="4" cx="0" cy="0" fill="#fe5d70" stroke="#fe5d70" fill-opacity="1" stroke-width="2" stroke-opacity="0" transform="translate(1081,23)" aria-label=" 2005 0.47"></circle>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g></g>
                                                    </g>
                                                    <g>
                                                        <g transform="translate(50,0)" visibility="hidden"></g>
                                                        <g transform="translate(50,55)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(3,191.5)">
                                                                <tspan y="6" x="0">1950</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(100,191.5)">
                                                                <tspan y="6" x="0">1955</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(198,191.5)">
                                                                <tspan y="6" x="0">1960</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(295,191.5)">
                                                                <tspan y="6" x="0">1965</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(393,191.5)">
                                                                <tspan y="6" x="0">1970</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(490,191.5)">
                                                                <tspan y="6" x="0">1975</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(587,191.5)">
                                                                <tspan y="6" x="0">1980</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(685,191.5)">
                                                                <tspan y="6" x="0">1985</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(782,191.5)">
                                                                <tspan y="6" x="0">1990</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(880,191.5)">
                                                                <tspan y="6" x="0">1995</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(977,191.5)">
                                                                <tspan y="6" x="0">2000</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(1075,191.5)">
                                                                <tspan y="6" x="0">2005</tspan>
                                                            </text></g>
                                                        <g transform="translate(50,55)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,178)">
                                                                <tspan y="6" x="0">-0.4</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,142)">
                                                                <tspan y="6" x="0">-0.2</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,106)">
                                                                <tspan y="6" x="0">0.0</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,71)">
                                                                <tspan y="6" x="0">0.2</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,35)">
                                                                <tspan y="6" x="0">0.4</tspan>
                                                            </text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)">
                                                                <tspan y="6" x="0">0.6</tspan>
                                                            </text></g>
                                                    </g>
                                                    <g></g>
                                                    <g transform="translate(50,55)"></g>
                                                    <g></g>
                                                    <g></g>
                                                    <clippath id="AmChartsEl-3">
                                                        <rect x="-1" y="-1" width="1093" height="181" rx="0" ry="0" stroke-width="0"></rect>
                                                    </clippath>
                                                </svg>
                                                <a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 55px; top: 60px;">JS chart by amCharts</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12">
                            <div class="card user-card2">
                                <div class="card-block text-center">
                                    <h6 class="m-b-15">Sản phẩm hoàn thành</h6>
                                    <div class="risk-rate">
                                        <span><b>5</b></span>
                                    </div>
                                    <h6 class="m-b-10 m-t-10">Cấp độ của quản trị viên</h6>
                                    <a href="https://colorlib.com//polygon/adminty/default/index.html#!" class="text-c-yellow b-b-warning"><?php echo $_SESSION['login_user']; ?></a>
                                    <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                                        <div class="col m-t-15 b-r-default">
                                            <h6 class="text-muted">Nr</h6>
                                            <h6>AWS 2455</h6>
                                        </div>
                                        <div class="col m-t-15">
                                            <h6 class="text-muted">Created</h6>
                                            <h6>30th Sep</h6>
                                        </div>
                                    </div>
                                </div>
                 
                            </div>
                        </div>

                        <div class="col-xl-8 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>5 sản phẩm mới nhất</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover  table-borderless">
                                
                                      

                                      
                                             
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Name</th>
                                                    <th>Price</th>
                                                    <th>Date</th>
                                                  
                                                </tr>
                                            </thead>

                                            <?php
                                    $list=list_new_5_products();
                                    ?>
                                    <?php
                                    $i=0;
                                    foreach ($list as $row) {
                                        $i++;
                                        ?>
                                        <tr>
                                            <td>
                                              
                                                <div class="d-inline-block">
                                                    <h6><?php echo $row['name']; ?></h6>
                                                   
                                                </div>

                                            </td>
                                            <td>
                                                <h6 class="m-b-0"><?php echo $row['price_output']; ?></h6>
                                            </td>
                                            <td>
                                                <h6 class="m-b-0"><?php echo $row['createdAt']; ?></h6>
                                            </td>
                                            </tr>
                                    <?php
                                    }
                                    ?>
                                        </table>
                                        <div class="text-center">
                                            <a href="index.php?page=products" class=" b-b-primary text-primary">View all Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                require_once 'thongke2.php';
                ?>
                        <div class="col-xl-6 col-md-12">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25">
                                                <img src="upload/<?php echo $_SESSION['login_ava']; ?>" class="img-radius" alt="User-Profile-Image" width="100px" height="100px">
                                            </div>
                                            <h6 class="f-w-600"><?php echo $_SESSION['login_fullname']; ?></h6>
                                            <p><?php echo $_SESSION['login_level']; ?></p>
                                            <i class="feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Email</p>
                                                    <h6 class="text-muted f-w-400">jeny@gmail.com</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Phone</p>
                                                    <h6 class="text-muted f-w-400">0023-333-526136</h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Recent</p>
                                                    <h6 class="text-muted f-w-400">Guruable Admin</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Most Viewed</p>
                                                    <h6 class="text-muted f-w-400">Able Pro Admin</h6>
                                                </div>
                                            </div>
                                            <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                <li><a href="https://colorlib.com//polygon/adminty/default/index.html#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook"><i class="feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="https://colorlib.com//polygon/adminty/default/index.html#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter"><i class="feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="https://colorlib.com//polygon/adminty/default/index.html#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram"><i class="feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-md-6">
                            <div class="card social-card bg-simple-c-blue">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">Mail</h6>
                                            <p>231.2w downloads</p>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://colorlib.com//polygon/adminty/default/index.html#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card social-card bg-simple-c-pink">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">twitter</h6>
                                            <p>231.2w downloads</p>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://colorlib.com//polygon/adminty/default/index.html#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card social-card bg-simple-c-green">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">Instagram</h6>
                                            <p>231.2w downloads</p>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://colorlib.com//polygon/adminty/default/index.html#!" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="styleSelector">
                <div class="selector-toggle">
                    <a href="javascript:void(0)"></a>
                </div>
                <ul>
                    <li>
                        <p class="selector-title main-title st-main-title"><b>Adminty </b>Customizer</p><span class="text-muted">Live customizer with tons of options</span>
                    </li>
                    <li>
                        <p class="selector-title">Main layouts</p>
                    </li>
                    <li>
                        <div class="theme-color"><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="navbar-theme" navbar-theme="themelight1"><span class="head"></span><span class="cont"></span></a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="navbar-theme" navbar-theme="theme1"><span class="head"></span><span class="cont"></span></a></div>
                    </li>
                </ul>
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: calc(100vh - 440px);">
                    <div class="style-cont m-t-10" style="overflow: hidden; width: auto; height: calc(100vh - 440px);">
                        <ul class="nav nav-tabs  tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="https://colorlib.com//polygon/adminty/default/index.html#sel-layout" role="tab">Layouts</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="https://colorlib.com//polygon/adminty/default/index.html#sel-sidebar-setting" role="tab">Sidebar Settings</a></li>
                        </ul>
                        <div class="tab-content tabs">
                            <div class="tab-pane active" id="sel-layout" role="tabpanel">
                                <ul>
                                    <li class="theme-option">
                                        <div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="sidebar-position" name="sidebar-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Sidebar Position</span></label></div>
                                    </li>
                                    <li class="theme-option">
                                        <div class="checkbox-fade fade-in-primary"><label><input type="checkbox" value="false" id="header-position" name="header-position" checked=""><span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span><span>Fixed Header Position</span></label></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane" id="sel-sidebar-setting" role="tabpanel">
                                <ul>
                                    <li class="theme-option">
                                        <p class="sub-title drp-title">Menu Type</p>
                                        <div class="form-radio" id="menu-effect">
                                            <div class="radio radio-inverse radio-inline" data-toggle="tooltip" title="" data-original-title="simple icon"><label><input type="radio" name="radio" value="st6" onclick="handlemenutype(this.value)" checked="true"><i class="helper"></i><span class="micon st6"><i class="feather icon-command"></i></span></label></div>
                                            <div class="radio  radio-primary radio-inline" data-toggle="tooltip" title="" data-original-title="color icon"><label><input type="radio" name="radio" value="st5" onclick="handlemenutype(this.value)"><i class="helper"></i><span class="micon st5"><i class="feather icon-command"></i></span></label></div>
                                        </div>
                                    </li>
                                    <li class="theme-option">
                                        <p class="sub-title drp-title">SideBar Effect</p><select id="vertical-menu-effect" class="form-control minimal">
                                            <option name="vertical-menu-effect" value="shrink">shrink</option>
                                            <option name="vertical-menu-effect" value="overlay">overlay</option>
                                            <option name="vertical-menu-effect" value="push">Push</option>
                                        </select>
                                    </li>
                                    <li class="theme-option">
                                        <p class="sub-title drp-title">Hide/Show Border</p><select id="vertical-border-style" class="form-control minimal">
                                            <option name="vertical-border-style" value="solid">Style 1</option>
                                            <option name="vertical-border-style" value="dotted">Style 2</option>
                                            <option name="vertical-border-style" value="dashed">Style 3</option>
                                            <option name="vertical-border-style" value="none">No Border</option>
                                        </select>
                                    </li>
                                    <li class="theme-option">
                                        <p class="sub-title drp-title">Drop-Down Icon</p><select id="vertical-dropdown-icon" class="form-control minimal">
                                            <option name="vertical-dropdown-icon" value="style1">Style 1</option>
                                            <option name="vertical-dropdown-icon" value="style2">style 2</option>
                                            <option name="vertical-dropdown-icon" value="style3">style 3</option>
                                        </select>
                                    </li>
                                    <li class="theme-option">
                                        <p class="sub-title drp-title">Sub Menu Drop-down Icon</p><select id="vertical-subitem-icon" class="form-control minimal">
                                            <option name="vertical-subitem-icon" value="style1">Style 1</option>
                                            <option name="vertical-subitem-icon" value="style2">style 2</option>
                                            <option name="vertical-subitem-icon" value="style3">style 3</option>
                                            <option name="vertical-subitem-icon" value="style4">style 4</option>
                                            <option name="vertical-subitem-icon" value="style5">style 5</option>
                                            <option name="vertical-subitem-icon" value="style6">style 6</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                            <ul>
                                <li>
                                    <p class="selector-title">Header Brand color</p>
                                </li>
                                <li class="theme-option">
                                    <div class="theme-color"><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="logo-theme" logo-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="logo-theme" logo-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="logo-theme" logo-theme="theme3"><span class="head"></span><span class="cont"></span></a>
                                        <a href="https://colorlib.com//polygon/adminty/default/index.html#" class="logo-theme" logo-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="logo-theme" logo-theme="theme5"><span class="head"></span><span class="cont"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <p class="selector-title">Header color</p>
                                </li>
                                <li class="theme-option">
                                    <div class="theme-color"><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="header-theme" header-theme="theme1"><span class="head"></span><span class="cont"></span></a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="header-theme" header-theme="theme2"><span class="head"></span><span class="cont"></span></a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="header-theme" header-theme="theme3"><span class="head"></span><span class="cont"></span></a>
                                        <a href="https://colorlib.com//polygon/adminty/default/index.html#" class="header-theme" header-theme="theme4"><span class="head"></span><span class="cont"></span></a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="header-theme" header-theme="theme5"><span class="head"></span><span class="cont"></span></a>
                                        <a href="https://colorlib.com//polygon/adminty/default/index.html#" class="header-theme" header-theme="theme6"><span class="head"></span><span class="cont"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <p class="selector-title">Active link color</p>
                                </li>
                                <li class="theme-option">
                                    <div class="theme-color"><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme1">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme2">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme3">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme4">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme5">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme6">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme7">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme8">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme9">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme10">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme11">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="active-item-theme small" active-item-theme="theme12">&nbsp;</a></div>
                                </li>
                                <li>
                                    <p class="selector-title">Menu Caption Color</p>
                                </li>
                                <li class="theme-option">
                                    <div class="theme-color"><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="leftheader-theme small" lheader-theme="theme1">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="leftheader-theme small" lheader-theme="theme2">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="leftheader-theme small" lheader-theme="theme3">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="leftheader-theme small" lheader-theme="theme4">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="leftheader-theme small" lheader-theme="theme5">&nbsp;</a><a href="https://colorlib.com//polygon/adminty/default/index.html#" class="leftheader-theme small" lheader-theme="theme6">&nbsp;</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 438.737px;"></div>
                    <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
                </div>
                <ul>
                    <li><a href="http://html.codedthemes.com/Adminty/doc" target="_blank" class="btn btn-primary btn-block m-r-15 m-t-5 m-b-10">Online Documentation</a></li>
                    <li class="text-center"><span class="text-center f-18 m-t-15 m-b-15 d-block">Thank you for sharing !</span><a href="https://colorlib.com//polygon/adminty/default/index.html#!" target="_blank" class="btn btn-facebook soc-icon m-b-20"><i class="feather icon-facebook"></i></a>
                        <a href="https://colorlib.com//polygon/adminty/default/index.html#!" target="_blank" class="btn btn-twitter soc-icon m-l-20 m-b-20"><i class="feather icon-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</form>