            <!-- Slide Nav -->
            <div class="header-wrapper d-none d-sm-none d-md-none d-lg-block">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-menu-list d-flex bg-white rt_nav_header horizontal-layout nav-bottom">
                                <div class="append mr-auto my-0 my-md-0 mr-auto">
                                    <ul class="list-group list-group-horizontal-md mr-auto">
                                        <li class="mr-1 {{request()->segment(1) == 'mkad' && request()->segment(2) == null ? 'active' : ''}}">
                                            <a href="{{ url('mkad') }}"
                                                class="btn-ctm-space text-dark header_class"><span
                                                    class="lnr lnr-home pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="mr-1 {{request()->segment(1) == 'mkad' && request()->segment(2) == 'form-jaminan' || request()->segment(2) == 'form-jaminan-pensiunan' ? 'active' : ''}}">
                                            <a href="{{ url('mkad/form-jaminan') }}"
                                                class="btn-ctm-space text-dark header_class"><span
                                                    class="fa fa-list pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Form Jaminan</span>
                                            </a>
                                        </li>
                                        <li class="mr-1 {{request()->segment(1) == 'mkad' && request()->segment(2) == 'ubah-password' ? 'active' : ''}}">
                                            <a href="{{ url('mkad/ubah-password') }}"
                                                class="btn-ctm-space text-dark header_class"><span
                                                    class="fa fa-key pr-0 pr-lg-2"></span><span
                                                    class="d-none d-lg-inline">Ubah Password</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Slide Nav -->
