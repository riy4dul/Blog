@extends('backend.layouts.master')
@section('content')
<div class="container-fluid">
                       <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-success card-header-icon">
                                            <div class="card-icon">
                                                 <i class="material-icons">library_books</i>
                                            </div>
                                            <p class="card-category">Total Post</p>
                                            <h3 class="card-title">{{ $postCount }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons text-danger">local_offer</i>Total Post
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-rose card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">content_copy</i>
                                            </div>
                                            <p class="card-category">Total Category</p>
                                            <h3 class="card-title">{{ $categoryCount }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">date_range</i>Total Category
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-danger card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">library_books</i>
                                            </div>
                                            <p class="card-category">Pending Post</p>
                                            <h3 class="card-title">{{ $pendingpostCount }}</h3>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                 <i class="material-icons">local_offer</i>Pending Post
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-info card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">calendar_today</i>
                                            </div>
                                            <p class="card-category">Date</p>
                                            <h5 class="card-title">{{ date('j-F-Y')}}</h5>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">date_range</i> Today
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                            {{-- <h3>Manage Listings</h3>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-product">
                                        <div class="card-header card-header-image" data-header-animation="true">
                                            <a href="#pablo">
                                                <img class="img" src="{{asset('')}}backend/img/card-2.jpg">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-actions text-center">
                                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                                </button>
                                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <h4 class="card-title">
                                            <a href="#pablo">Cozy 5 Stars Apartment</a>
                                            </h4>
                                            <div class="card-description">
                                                The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Barcelona.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="price">
                                                <h4>$899/night</h4>
                                            </div>
                                            <div class="stats">
                                                <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-product">
                                        <div class="card-header card-header-image" data-header-animation="true">
                                            <a href="#pablo">
                                                <img class="img" src="{{asset('')}}backend/img/card-3.jpg">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-actions text-center">
                                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                                </button>
                                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <h4 class="card-title">
                                            <a href="#pablo">Office Studio</a>
                                            </h4>
                                            <div class="card-description">
                                                The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the night life in London, UK.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="price">
                                                <h4>$1.119/night</h4>
                                            </div>
                                            <div class="stats">
                                                <p class="card-category"><i class="material-icons">place</i> London, UK</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card card-product">
                                        <div class="card-header card-header-image" data-header-animation="true">
                                            <a href="#pablo">
                                                <img class="img" src="{{asset('')}}backend/img/card-1.jpg">
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-actions text-center">
                                                <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                                <i class="material-icons">build</i> Fix Header!
                                                </button>
                                                <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="View">
                                                <i class="material-icons">art_track</i>
                                                </button>
                                                <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-link" rel="tooltip" data-placement="bottom" title="Remove">
                                                <i class="material-icons">close</i>
                                                </button>
                                            </div>
                                            <h4 class="card-title">
                                            <a href="#pablo">Beautiful Castle</a>
                                            </h4>
                                            <div class="card-description">
                                                The place is close to Metro Station and bus stop just 2 min by walk and near to "Naviglio" where you can enjoy the main night life in Milan.
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="price">
                                                <h4>$459/night</h4>
                                            </div>
                                            <div class="stats">
                                                <p class="card-category"><i class="material-icons">place</i> Milan, Italy</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
@endsection