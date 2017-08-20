@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to My Blog</h1>
            <p class="lead">Thank you so much for visiting. This is my test website bulit in Laravel. Please read my latest post!</p>
            <p><a class="btn btn-primary" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
    </div><!-- End of header row -->

    <div class="row">
      <div class="col-md-8">

      @foreach($posts as $post)

        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
            <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary btn-xs">Read More</a>        
        </div>

      @endforeach

      </div>
      <div class="col-md-3 col-md-offset-1 ">
        <h3>Sidebar</h3>
      </div>  
     
    </div><!-- End of row-->
@endsection