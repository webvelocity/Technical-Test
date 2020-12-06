<section id="latest-news-feature">
    <div class="container py-5 text-center">
        <div class="row">
            <div class="col-12 my-md-4">
                <h3>Latest News</h3>
            </div>
            @foreach($posts as $post)
                <div class="col-md-4 mb-3">
                    <article>
                        <img src="{{asset('/img/posts/post.png')}}" alt="{{$post->title}}" class="mb-3 w-100">
                        <div class="px-5 px-md-2 px-lg-5">
                            <header>
                                <h4>{{$post->title}}</h4>
                            </header>
                            <div class="mb-3">
                                <span class="date mr-2"> 02 Jul 2019</span>
                                <a href="#"
                                   class="category text-capitalize">{{$post->category}}</a> {{--  with category slug as URL--}}

                                {{--                                {{ \Carbon\Carbon::createFromTimestamp(strtotime($post->published_at->from_date))->format('d-m-Y')}}--}}
                            </div>
                            <p>
                                {{$post->content}}
                            </p>

                            <a href="#" class="read-more mt-2 mb-3 px-5 py-2  d-inline-block">Read more</a>
                        </div>
                    </article>

                </div>
            @endforeach

            <div class="col-12 mt-3">
                <a href="#" class="view-all-cta">View All <i class="fa fa-chevron-right font-weight-light"></i></a>
            </div>
        </div>
    </div>
</section>



