<!-- Main Sidebar Container -->

<!-- Left Sidebar - style you can find in sidebar.scss  -->

        <!-- ============================================================== -->

        <aside class="left-sidebar" data-sidebarbg="skin5">

            <!-- Sidebar scroll-->

            <div class="scroll-sidebar">

                <!-- Sidebar navigation-->

                <nav class="sidebar-nav">

                    <ul id="sidebarnav" class="p-t-30">

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('home') }}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

						<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Users </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('users') }}" class="sidebar-link"><i class="mdi mdi-emoticon"></i><span class="hide-menu"> All Users </span></a></li>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Orders </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('orders') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Orders </span></a></li>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Categories </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('categories') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Categories </span></a></li>

                                <li class="sidebar-item"><a href="{{ url('addcategories') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Category </span></a></li>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Brands </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"><a href="{{ url('brands') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Brands </span></a></li>

                                <li class="sidebar-item"><a href="{{ url('addbrand') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Brand </span></a></li>

                            </ul>

                        </li>

                        

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Products </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('products') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Products </span></a></li>

                                <li class="sidebar-item"><a href="{{ url('addproduct') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Products </span></a></li>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Configuration </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('configs') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Configurations </span></a></li>

                                <li class="sidebar-item"><a href="{{ url('addconfig') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Configs </span></a></li>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Questions </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"><a href="{{ url('questions') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Questions </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('addquestion') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Question </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('device-age') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Device Ages </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('add-device-age') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Device Age </span></a></li>                              
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Accessories </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
								<li class="sidebar-item"><a href="{{ url('accessories') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Accessories </span></a></li>
                                <li class="sidebar-item"><a href="{{ url('add-accessories') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> Add Accessories </span></a></li>                     
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Sell Request </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('sell-requests') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Requests </span></a></li>

                            </ul>

                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Quaries </span></a>

                            <ul aria-expanded="false" class="collapse  first-level">

								<li class="sidebar-item"><a href="{{ url('quaries') }}" class="sidebar-link"><i class="mdi mdi-border-inside"></i><span class="hide-menu"> All Quaries </span></a></li>

                            </ul>

                        </li>

                    </ul>

                </nav>

                <!-- End Sidebar navigation -->

            </div>

            <!-- End Sidebar scroll-->

        </aside>

        <!-- ============================================================== -->

        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

