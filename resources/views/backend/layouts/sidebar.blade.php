<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('')}}backend/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="" class="simple-text logo-mini">
            EF
        </a>
        <a href="" class="simple-text logo-normal">
            Event Factory
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('')}}backend/img/faces/avatar.jpg" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{Auth::user() ->name}}
                        {{--<b class="caret"></b>--}}
                    </span>
                </a>
                {{--<div class="collapse" id="collapseExample">--}}
                    {{--<ul class="nav">--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="#">--}}
                                {{--<span class="sidebar-mini"> MP </span>--}}
                                {{--<span class="sidebar-normal"> My Profile </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="#">--}}
                                {{--<span class="sidebar-mini"> EP </span>--}}
                                {{--<span class="sidebar-normal"> Edit Profile </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item">--}}
                            {{--<a class="nav-link" href="#">--}}
                                {{--<span class="sidebar-mini"> S </span>--}}
                                {{--<span class="sidebar-normal"> Settings </span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item {{ Request::is('home') ? 'active' : ''}}">
                <a class="nav-link" href="{{ URL::to('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            {{--  =======================For Post============================= --}}
            <li class="nav-item {{ Request::is('post*') ? 'active' : ''}}">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">content_paste</i>
                    <p> Post
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ Request::is('post*') ? 'show' : ''}}" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('post-list') ? 'active' : ''}} ">
                            <a class="nav-link" href="{{ URL::to('post-list')}}">
                                <i class="material-icons">view_list</i>
                                <span class="sidebar-normal">List Post</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('item/create') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('item/create')}}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal">Add Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  =======================For Category============================= --}}
            <li class="nav-item {{ Request::is('category*') ? 'active' : ''}}">
                <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p>  Categories
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ Request::is('category*') ? 'show' : ''}}" id="componentsExamples">
                    <ul class="nav">
                        <li class="nav-item {{ Request::is('category-list') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('category-list')}}">
                                <i class="material-icons">view_list</i>
                                <span class="sidebar-normal">List Category</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('category/create') ? 'active' : ''}}">
                            <a class="nav-link" href="{{ URL::to('category/create')}}">
                                <i class="material-icons">add</i>
                                <span class="sidebar-normal">Add Category</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{--  =======================For Contact============================= --}}
            <li class="nav-item {{ Request::is('contact') ? 'active' : ''}}">
                <a class="nav-link" href="{{ URL::to('contact')}}">
                    <i class="material-icons">
                    contacts
                    </i>
                    <p> Contact </p>
                </a>
            </li>



        </ul>
    </div>
</div>