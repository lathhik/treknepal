@extends('Backend.master')
@section('content')
    <div class="right_col" role="main">

        <h2>Places Gallery
            <small> Available places</small>
        </h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                            class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
        <div class="x_content">
            <div class="row">
                <p>Most Popular Places</p>
                @foreach($places as $place)
                    <div class="col-md-55">
                        <div class="thumbnail">
                            <div class="image view view-first">
                                <img style="
                            width: 100%; display: block;" src="{{asset('custom/Backend/img/places/'.$place->image)}}"
                                     alt="image">
                                <div class="mask no-caption">
                                    <div class="tools tools-bottom">
                                        <a href="{{route('edit-place',$place->id)}}"><i class="fa fa-edit"></i></a>
                                        <a href="{{'delete-place/'.$place->id}}"><i class="fa fa-times-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="caption">
                                <p><strong>{{$place->title}}</strong>
                                </p>
                                <p>{{str_limit($place->description,25)}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection