<section class="news">
    <div class="container">
        <div class="row custom-header-top">
            <div class="col-md-3"></div>
            <div class="col-md-12">
                @if($allnews->count() == 0)
                    <h3>Your search  did not match any news.</h3>
                @else
                    @foreach($allnews as $news)
                        <div class="row">
                            <div class="col-md-2">
                                @if($news->image)
                                    <a href="{{route('news.single',$news->id)}}">
                                        <img src="{{ env('S3_URL') }}{{$news->image}}" class="mr-3 img-fluid news-index-img" alt="...">
                                    </a>
                                @endif
                            </div>
                            <div class="col-md-10">
                                <a href="{{route('news.single',$news->id)}}"><h5 class="pt-3 pt-md-0">{{ $news->heading }}</h5></a>
                                <a href="{{route('news.single',$news->id)}}"><p class="text-justify">{{ implode(' ', array_slice(explode(' ', strip_tags($news->body) ), 0, 70))}}</p></a>
                                <a href="{{route('news.single',$news->id)}}">See More ></a>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                @endif    
            </div>
            <div class="col-md-12 my-5">
                <div class="row justify-content-center">
                    {{ $allnews->links() }}
                </div>
            </div>
        </div>
    </div>
</section>