@extends('backend.layouts.master')
@section('content')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="{{asset('')}}backend/img/faces/avatar.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                {{--<h6 class="card-category text-gray">Junior Laravel Developer</h6>--}}
                                <h4 class="card-title">Laravel Developer</h4>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href="#pablo" class="btn btn-rose btn-round">Riyadul</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection