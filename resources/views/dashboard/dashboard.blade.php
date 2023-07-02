@extends('dashboard.app')


@section('content')
    <div class="page">
        <div id="page_top" class="section-body ">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">
                        <h1 class="page-title">Cryptocurrency</h1>
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
                            {{-- dropdown profile kanan --}}
                            @include('include.dropdownprofile')
                            {{-- end --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" id="Crypto-tab" data-toggle="tab"
                                href="#Crypto-Dashboard">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" id="Crypto-tab" data-toggle="tab"
                                href="#Crypto-list">Transaction List</a></li>
                    </ul>
                    <div class="header-action">
                        <button type="button" class="btn btn-outline-primary"><i
                                class="fe fe-plus mr-2"></i>Create</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="Crypto-Dashboard" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Available Balance</h6>
                                        <h3 class="pt-3"><i class="fa fa-bitcoin"></i> <span
                                                class="counter">136.25402</span></h3>
                                        <h5>$1,25,451.23</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Total Investment</h6>
                                        <h3 class="pt-3"><i class="fa fa-bitcoin"></i> <span
                                                class="counter">251.25402</span></h3>
                                        <h5>$3,80,451.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Profit in Bitcoin</h6>
                                        <h3 class="pt-3"><i class="fa fa-bitcoin"></i> <span
                                                class="counter">32.96512</span></h3>
                                        <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i>
                                                65.27%</span> Since last month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Profit in USD</h6>
                                        <h3 class="pt-3"><i class="fa fa-dollar"></i> <span
                                                class="counter">98,532.02</span></h3>
                                        <span><span class="text-danger mr-2"><i class="fa fa-long-arrow-up"></i>
                                                165.27%</span> Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix row-deck">
                            <div class="col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Crypto Statistics</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-remove"
                                                data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                <a href="javascript:void(0)" data-toggle="dropdown"><i
                                                        class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-md-flex justify-content-between">
                                            <div>
                                                <h5 class="mb-1">BTC $<span class="counter">12,159.32</span></h5>
                                                <span class="text-muted">Note Enim omittam, ex quo dictas complectitur<a
                                                        href="#">View more</a></span>
                                            </div>
                                            <div>
                                                <div class="selectgroup w250">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="low"
                                                            class="selectgroup-input" checked="">
                                                        <span class="selectgroup-button">7 Day</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="medium"
                                                            class="selectgroup-input">
                                                        <span class="selectgroup-button">15 Day</span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="intensity" value="high"
                                                            class="selectgroup-input">
                                                        <span class="selectgroup-button">30 Day</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="apex-Crypto_statistics"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">Transaction History</h2>
                                        <div class="card-options">
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i
                                                    class="fe fe-x"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                <a href="javascript:void(0)" data-toggle="dropdown"><i
                                                        class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-donut" style="height: 15rem"></div>
                                    </div>
                                    <table class="table card-table">
                                        <tbody>
                                            <tr>
                                                <td class="width45"><span class="avatar avatar-green"><i
                                                            class="fa fa-check"></i></span></td>
                                                <td>
                                                    <p class="mb-0">Payment from #1598</p>
                                                    <span class="text-muted font-13">Feb 21, 2019, 3:30pm</span>
                                                </td>
                                                <td class="text-right">
                                                    <p class="mb-0">$300</p>
                                                    <span class="text-success font-13">Done</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width45"><span class="avatar avatar-green"><i
                                                            class="fa fa-truck"></i></span></td>
                                                <td>
                                                    <p class="mb-0">Process to #85236</p>
                                                    <span class="text-muted font-13">March 14, 2019, 2:30pm</span>
                                                </td>
                                                <td class="text-right">
                                                    <p class="mb-0">$300</p>
                                                    <span class="text-success font-13">Faild</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width45"><span class="avatar avatar-orange"><i
                                                            class="fa fa-angle-left"></i></span></td>
                                                <td>
                                                    <p class="mb-0">Process refund #4568</p>
                                                    <span class="text-muted font-13">March 18, 2019, 6:30pm</span>
                                                </td>
                                                <td class="text-right">
                                                    <p class="mb-0">$300</p>
                                                    <span class="text-success font-13">Done</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="width45"><span class="avatar avatar-red"><i
                                                            class="fa fa-cc-visa"></i></span></td>
                                                <td>
                                                    <p class="mb-0">Payment failed from #32658</p>
                                                    <span class="text-muted font-13">April 27, 2019, 3:48pm</span>
                                                </td>
                                                <td class="text-right">
                                                    <p class="mb-0">$300</p>
                                                    <span class="text-danger font-13">Declined</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix row-deck">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ICO Token</label>
                                                    <input type="email" class="form-control" placeholder="23097">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ETH</label>
                                                    <input type="email" class="form-control" placeholder="2">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Select</label>
                                                    <select class="custom-select">
                                                        <option selected="">ETH</option>
                                                        <option value="1">BTC</option>
                                                        <option value="2">LTC</option>
                                                        <option value="3">USDT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Wallet address</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="0OXD38D9EEB5B93E1D3862727635E9">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success btn-block">Buy
                                                        now</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ICO Token</label>
                                                    <input type="email" class="form-control" placeholder="23097">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-label">ETH</label>
                                                    <input type="email" class="form-control" placeholder="2">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Select</label>
                                                    <select class="custom-select">
                                                        <option selected="">ETH</option>
                                                        <option value="1">BTC</option>
                                                        <option value="2">LTC</option>
                                                        <option value="3">USDT</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-label">Wallet address</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="0OXD38D9EEB5B93E1D3862727635E9">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-danger btn-block">Sale
                                                        now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Current Active Trades</h3>
                                        <div class="card-options">
                                            <a href="javascript:void(0)" class="card-options-remove"
                                                data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                <a href="javascript:void(0)" data-toggle="dropdown"><i
                                                        class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-cloud-download"></i> Download</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i
                                                            class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-sm-flex mb-3">
                                            <div class="top_counter mb-2 mr-4">
                                                <div class="icon bg-green"><i class="fa fa-area-chart"></i> </div>
                                                <div class="content">
                                                    <span>Buy</span>
                                                    <h5 class="number mb-0">$2,02,150.52</h5>
                                                </div>
                                            </div>
                                            <div class="top_counter mb-2">
                                                <div class="icon bg-red"><i class="fa fa-area-chart"></i> </div>
                                                <div class="content">
                                                    <span>Sale</span>
                                                    <h5 class="number mb-0">$92,150.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-3">
                                            <table class="table table-striped mb-0 table-vcenter">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Currency</th>
                                                        <th>Balance</th>
                                                        <th>Buying Rate</th>
                                                        <th>Curre Rate</th>
                                                        <th>Status</th>
                                                        <th>Last Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>BTC</td>
                                                        <td>54,124.25</td>
                                                        <td>$205.41</td>
                                                        <td>$209.98</td>
                                                        <td>$521.32 <i class="fa fa-sort-down"></i></td>
                                                        <td>$251.00</td>
                                                        <td><button type="submit"
                                                                class="btn btn-danger btn-sm">Close</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>ETH</td>
                                                        <td>54,124.25</td>
                                                        <td>$205.11</td>
                                                        <td>$209.98</td>
                                                        <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                        <td>$251.00</td>
                                                        <td><button type="submit"
                                                                class="btn btn-danger btn-sm">Close</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>XRP</td>
                                                        <td>54,124.25</td>
                                                        <td>$205.41</td>
                                                        <td>$209.98</td>
                                                        <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                        <td>$251.00</td>
                                                        <td><button type="submit"
                                                                class="btn btn-danger btn-sm">Close</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>BCH</td>
                                                        <td>54,124.25</td>
                                                        <td>$880.41</td>
                                                        <td>$209.98</td>
                                                        <td>$521.65 <i class="fa fa-sort-down"></i></td>
                                                        <td>$251.00</td>
                                                        <td><button type="submit"
                                                                class="btn btn-success btn-sm">Open</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>XLM</td>
                                                        <td>54,124.25</td>
                                                        <td>$205.41</td>
                                                        <td>$209.98</td>
                                                        <td>$521.65 <i class="fa fa-sort-down"></i></td>
                                                        <td>$105.00</td>
                                                        <td><button type="submit"
                                                                class="btn btn-success btn-sm">Open</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>EOS</td>
                                                        <td>54,124.25</td>
                                                        <td>$205.41</td>
                                                        <td>$209.98</td>
                                                        <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                        <td>$251.00</td>
                                                        <td><button type="submit"
                                                                class="btn btn-danger btn-sm">Close</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>LTC</td>
                                                        <td>54,124.25</td>
                                                        <td>$205.41</td>
                                                        <td>$209.98</td>
                                                        <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                        <td>$102.00</td>
                                                        <td><button type="submit"
                                                                class="btn btn-success btn-sm">Open</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>ADA</td>
                                                        <td>54,124.25</td>
                                                        <td>$205.41</td>
                                                        <td>$65.98</td>
                                                        <td>$521.65 <i class="fa fa-sort-asc"></i></td>
                                                        <td>$250.00</td>
                                                        <td><button type="submit"
                                                                class="btn btn-danger btn-sm">Close</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Crypto-list" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-hover text-wrap table-custom spacing8 mb-0">
                                <tbody>
                                    <tr>
                                        <td class="w60"><img src="../assets/images/crypto/BTC.svg" alt=""
                                                class="w30 rounded"></td>
                                        <td>
                                            <p class="mb-0">Bitcoin</p>
                                        </td>
                                        <td><span>11:20AM 17 Nov 2018</span></td>
                                        <td><span>OX874JKHJKFG76767DFD67</span></td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td><strong>0.108762 BTC</strong></td>
                                        <td class="w100 text-info"><strong>$8,309</strong></td>
                                        <td><button type="button"
                                                class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img src="../assets/images/crypto/ETH.svg" alt=""
                                                class="w30 rounded"></td>
                                        <td>
                                            <p class="mb-0">Ethereum Classic</p>
                                        </td>
                                        <td><span>11:20AM 17 Nov 2018</span></td>
                                        <td><span>OX874JKHJKFG76767DFD67</span></td>
                                        <td><span class="badge badge-warning">Processing</span></td>
                                        <td><strong>0.108762 ETC</strong></td>
                                        <td class="w100 text-info"><strong>$8,309</strong></td>
                                        <td><button type="button"
                                                class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img src="../assets/images/crypto/ETC.svg" alt=""
                                                class="w30 rounded"></td>
                                        <td>
                                            <p class="mb-0">Ethereum</p>
                                        </td>
                                        <td><span>11:20AM 17 Nov 2018</span></td>
                                        <td><span>OX874JKHJKFG76767DFD67</span></td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td><strong>0.108762 ETH</strong></td>
                                        <td class="w100 text-info"><strong>$11,309</strong></td>
                                        <td><button type="button"
                                                class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img src="../assets/images/crypto/neo.svg" alt=""
                                                class="w30 rounded"></td>
                                        <td>
                                            <p class="mb-0">NEO</p>
                                        </td>
                                        <td><span>12:20PM 5 Nov 2018</span></td>
                                        <td><span>OX874JKHJKFG76767DFD67</span></td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td><strong>0.108762 NEO</strong></td>
                                        <td class="w100 text-info"><strong>$3,102</strong></td>
                                        <td><button type="button"
                                                class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img src="../assets/images/crypto/LTC.svg" alt=""
                                                class="w30 rounded"></td>
                                        <td>
                                            <p class="mb-0">Litecoin</p>
                                        </td>
                                        <td><span>11:20AM 7 Nov 2018</span></td>
                                        <td><span>OX874JKHJKFG76767DFD67</span></td>
                                        <td><span class="badge badge-danger">Stopped</span></td>
                                        <td><strong>0.108762 LTC</strong></td>
                                        <td class="w100 text-info"><strong>$8,309</strong></td>
                                        <td><button type="button"
                                                class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img src="../assets/images/crypto/qtum.svg" alt=""
                                                class="w30 rounded"></td>
                                        <td>
                                            <p class="mb-0">Qtum</p>
                                        </td>
                                        <td><span>12:20PM 5 Nov 2018</span></td>
                                        <td><span>OX874JKHJKFG76767DFD67</span></td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td><strong>0.108762 QTUM</strong></td>
                                        <td class="w100 text-info"><strong>$3,102</strong></td>
                                        <td><button type="button"
                                                class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                    </tr>
                                    <tr>
                                        <td class="w60"><img src="../assets/images/crypto/XRP.svg" alt=""
                                                class="w30 rounded"></td>
                                        <td>
                                            <p class="mb-0">Tether</p>
                                        </td>
                                        <td><span>12:20PM 5 Nov 2018</span></td>
                                        <td><span>OX874JKHJKFG76767DFD67</span></td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                        <td><strong>0.108762 USDT</strong></td>
                                        <td class="w100 text-info"><strong>$102</strong></td>
                                        <td><button type="button"
                                                class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                    </tr>
                                </tbody>
                            </table>
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
