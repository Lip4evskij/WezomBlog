@extends('default')

@section('content')



    @foreach($posts as $p)


        <div class="post_section"><span class="bottom"></span>


            <h2><a href="{{route('articleShow',['title'=>$p->slug])}}">{{$p->title}}</a></h2>

            <strong>Дата: </strong>{{$p->created_at}}<strong>| Категория: </strong> {{$p->categories}}

            <img src="{{$p->image}}" style=" width: 450px; height: 350px;" alt="image 1" />


            <p> {{substr($p->content,0,200).'...'}}</p>

            <div class="cleaner"></div>
            <div class="category">Tags: <a href="{{route('ShowTags',['tag_en_name'=>$p->tag_en_name])}}">{{$p->tags}}</a></div> <div class="button float_r"><a href="{{route('articleShow',['title'=>$p->slug])}}" class="more">Read more</a></div>
            <div class="cleaner"></div>

        </div>

    @endforeach

@endsection
