@extends("public.base")


{{-- page title--}}
@section("page-title")
    Betaroid | Learning web development from scratch
@endsection


{{--meta tags--}}
@section("title")
    Betaroid | Learning web development from scratch with us
@endsection


@section("keywords")
    web development, learning, web basics, web starters, web fresher, web tutorial, html learning, css learning, javascript learning, php learning, nodejs learning, python learning, webpack learning.
@endsection


@section("description")

@endsection


{{--og tags--}}
@section("og-image")

@endsection


@section("og-url")

@endsection


{{--meta robots--}}
@section("meta-robots")
    noindex, nofollow, archive
@endsection



@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-9">
                <h2>All Posts</h2>
                @foreach($posts as $post)
                    <a href="/blogs/{{ $post->id }}">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ $post->post_title }}
                            </div>
                            <div class="panel-body">
                                {{ substr($post->post_detail->post_text, 0, 360) }}... Read More
                            </div>
                            <div class="panel-footer">
                                {{ $post->user->name }} | {{ $post->updated_at }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Popular Posts
                    </div>
                    <div class="panel-body">
                        @foreach($posts as $post)
                            <a href="/blogs/{{ $post->id }}">
                                <dt>{{ $post->post_title }}</dt>
                                <dd>{{ $post->user->name }} | {{ $post->updated_at }}</dd>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                {{ $posts }}
            </div>
        </div>
    </div>
@endsection