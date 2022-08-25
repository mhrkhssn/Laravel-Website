@extends('Admin.layouts.main')


@section('title')
    Dashboard
@endsection
@section('content')
    @php
        $services = App\Models\Category::all();
        $projects = App\Models\Sub_Category::all();
        $blogs = App\Models\Blog::all();
        $posts = App\Models\Post::all();
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-box pb-5 pt-3 pr-5 pl-2"
                     style="box-shadow: 13px 13px 13px grey;background-image: linear-gradient(to bottom right, #eca520 0%, #321c69 100% );color: white!important;border-radius: 5px">
                                        <span class="info-box-icon"><i class="fa fa-bell-o"></i></span>
                    <a href="{!! route('admin.categorys.index') !!}" class="text-white">
                        <div class="info-box-content mt-4 ml-3">
                            <span class="info-box-text" style="text-shadow: 3px 3px 8px white;">Total Services</span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                    <span class="info-box-number ml-3 float-right mt-1" style="font-size: 250%;text-shadow: 3px 3px 8px white;">({!! count($services) !!})</span>
                </div>
                <!-- /.info-box -->
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="info-box pb-5 pt-3 pr-5 pl-2"
                     style="box-shadow: 13px 13px 13px grey;background-image: linear-gradient(to bottom right, #eca520 0%, #321c69 100% );color: white!important;border-radius: 5px">
                    {{--                    <span class="info-box-icon"><i class="fa fa-bell-o"></i></span>--}}
                    <a href="{!! route('admin.sub_categorys.index') !!}" class="text-white">
                        <div class="info-box-content mt-4 ml-3">
                            <span class="info-box-text" style="text-shadow: 3px 3px 8px white;">Total Projects</span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                    <span class="info-box-number ml-3 float-right mt-1" style="font-size: 250%;text-shadow: 3px 3px 8px white;">({!! count($projects) !!})</span>
                </div>
                <!-- /.info-box -->
            </div>
        </div>
        <br><br><br><br>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="info-box pb-5 pt-3 pr-5 pl-2"
                     style="box-shadow: 13px 13px 13px grey;background-image: linear-gradient(to bottom right, #eca520 0%, #321c69 100% );color: white!important;border-radius: 5px">
                    {{--                    <span class="info-box-icon"><i class="fa fa-bell-o"></i></span>--}}
                    <a href="{!! route('admin.blogs.index') !!}" class="text-white">
                        <div class="info-box-content mt-4 ml-3">
                            <span class="info-box-text" style="text-shadow: 3px 3px 8px white;">Total Blogs</span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                    <span class="info-box-number ml-3 float-right mt-1" style="font-size: 250%;text-shadow: 3px 3px 8px white;">({!! count($blogs) !!})</span>
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="info-box pb-5 pt-3 pr-5 pl-2"
                     style="box-shadow: 13px 13px 13px grey;background-image: linear-gradient(to bottom right, #eca520 0%, #321c69 100% );color: white!important;border-radius: 5px">
                    {{--                    <span class="info-box-icon"><i class="fa fa-bell-o"></i></span>--}}
                    <a href="{!! route('admin.posts.index') !!}" class="text-white">
                        <div class="info-box-content mt-4 ml-3">
                            <span class="info-box-text" style="text-shadow: 3px 3px 8px white;">Total Posts</span>
                        </div>
                        <!-- /.info-box-content -->
                    </a>
                    <span class="info-box-number ml-3 float-right mt-1" style="font-size: 250%;text-shadow: 3px 3px 8px white;">({!! count($posts) !!})</span>
                </div>
                <!-- /.info-box -->
            </div>
        </div>
    </div>




@endsection
