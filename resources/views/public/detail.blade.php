@extends("public.base")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->post_title }}
                    </div>
                    <div class="panel-body">
                        {{ $post->post_detail->post_text }}
                    </div>
                    <div class="panel-footer">
                        {{ $post->user->name }}
                        {{ $post->updated_at }}
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Popular Posts
                    </div>
                    <div class="panel-body">
                        {{--@foreach($posts as $post)
                            <a href="/blogs/{{ $post->id }}">
                                <dt>{{ $post->post_title }}</dt>
                                <dd>{{ $post->user->name }} | {{ $post->updated_at }}</dd>
                            </a>
                        @endforeach--}}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection