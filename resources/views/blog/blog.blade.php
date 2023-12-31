@extends('dashboard.app')

@section('content')
    <div class="page">
        <div id="page_top" class="section-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Blog</h1>
                        <select class="custom-select">
                            <option>Year</option>
                            <option>Month</option>
                            <option>Week</option>
                        </select>
                        <div class="input-group xs-hide">
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </div>
                    <div class="right">
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Language</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                            src="../assets/images/flags/us.svg" alt="">English</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                            src="../assets/images/flags/es.svg" alt="">Spanish</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                            src="../assets/images/flags/jp.svg" alt="">japanese</a>
                                    <a class="dropdown-item" href="#"><img class="w20 mr-2"
                                            src="../assets/images/flags/bl.svg" alt="">France</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Reports</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-excel-o"></i>
                                        MS Excel</a>
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-word-o"></i>
                                        MS Word</a>
                                    <a class="dropdown-item" href="#"><i class="dropdown-icon fa fa-file-pdf-o"></i>
                                        PDF</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false">Project</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Graphics Design</a>
                                    <a class="dropdown-item" href="#">Angular Admin</a>
                                    <a class="dropdown-item" href="#">PSD to HTML</a>
                                    <a class="dropdown-item" href="#">iOs App Development</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Home Development</a>
                                    <a class="dropdown-item" href="#">New Blog post</a>
                                </div>
                            </li>
                        </ul>
                        <div class="notification d-flex">
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                    data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                        class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w250 p-0">
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="../assets/images/xs/avatar4.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Donald Gardner</span>
                                                        <span class="message">Designer, Blogger</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="../assets/images/xs/avatar5.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Wendy Keen</span>
                                                        <span class="message">Java Developer</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="../assets/images/xs/avatar2.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Matt Rosales</span>
                                                        <span class="message">CEO, anchortheme</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);">
                                                <div class="media">
                                                    <img class="media-object " src="../assets/images/xs/avatar3.jpg"
                                                        alt="">
                                                    <div class="media-body">
                                                        <span class="name">Phillip Smith</span>
                                                        <span class="message">Writter, Mag Editor</span>
                                                        <span class="badge badge-outline status"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)"
                                        class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                    data-toggle="dropdown"><i class="fa fa-bell"></i><span
                                        class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-danger">Issue Fixed <small
                                                        class="float-right text-muted">11:05</small></h4>
                                                <small>WE have fix all Design bug with Responsive</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">New User <small
                                                        class="float-right text-muted">10:45</small></h4>
                                                <small>I feel great! Thanks team</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Feedback <small
                                                        class="float-right text-muted">Today</small></h4>
                                                <small>It will give a smart finishing to your site</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title text-warning">Server Warning <small
                                                        class="float-right text-muted">10:50</small></h4>
                                                <small>Your connection is not private</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                            <div class="feeds-body">
                                                <h4 class="title">7 New Orders <small
                                                        class="float-right text-muted">11:35</small></h4>
                                                <small>You received a new oder from Tina.</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)"
                                        class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            {{-- dropfown profile --}}
                            @include('include.dropdownprofile')
                            {{-- end --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('blogadd') }}" class="btn btn-primary mr-2">New Post</a>
                                <div class="page-subtitle ml-0">1 - 12 of 125 Post</div>
                                <div class="page-options d-flex">
                                    <select class="form-control custom-select w-auto">
                                        <option value="asc">- Select -</option>
                                        <option value="asc">Newest</option>
                                        <option value="desc">Oldest</option>
                                    </select>
                                    <div class="input-icon ml-2">
                                        <span class="input-icon-addon">
                                            <i class="fe fe-search"></i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Search Post">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-columns">
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/1.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/2.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="text-muted">The Knights Who Say Ni demand a sacrifice!...</div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar2.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/3.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!...
                                    </div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar3.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/4.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!...
                                    </div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/5.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/6.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="text-muted">The Knights Who Say Ni demand a sacrifice!...</div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar2.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/7.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="text-muted">t is a long established fact that a reader will be distracted
                                        by the readable content of a page when looking at its layout.</div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar3.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/6.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="text-muted">The Knights Who Say Ni demand a sacrifice!...</div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar2.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <a href="#"><img class="card-img-top" src="../assets/images/gallery/8.jpg"
                                        alt="And this isn&#39;t my nose. This is a false one."></a>
                                <div class="card-body d-flex flex-column">
                                    <h5><a href="#">And this isn't my nose. This is a false one.</a></h5>
                                    <div class="text-muted">Look, my liege! The Knights Who Say Ni demand a sacrifice!...
                                    </div>
                                    <div class="d-flex align-items-center pt-5 mt-auto">
                                        <img class="avatar avatar-md mr-3" src="../assets/images/xs/avatar4.jpg"
                                            alt="" />
                                        <div>
                                            <a href="#">Rose Bradley</a>
                                            <small class="d-block text-muted">3 days ago</small>
                                        </div>
                                        <div class="ml-auto text-muted">
                                            <a href="#" class="icon d-none d-md-inline-block ml-3"><i
                                                    class="fe fe-heart mr-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2019 <a href="javascript:void(0)">PuffinTheme</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)"
                                        class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
