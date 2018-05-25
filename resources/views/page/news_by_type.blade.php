

@extends('page.index')
@section('content')
<div class="row">
    <a href="./">Trang chủ</a> >> <a href="#">{{$type->category->name}}</a> >> <a href="type/{{$type->id}}">{{$type->name}}</a>
</div>
@foreach($news_type as $nt)
<div class="box-cat">
    <div class="cat1">
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col0 col1">
                <div class="news">
                    <h3 class="title" ><a href="#">{{$nt->title}}/a></h3>
                    <img class="images_news" src="upload/tintuc/{{$nt->urlImage}}" align="left" />
                    <div class="des">{{$nt->summary}}</div>
                    <div class="clear"></div>
                   
                </div>
            </div>
            
        </div>
    </div>
</div>
@endforeach
<div class="text-center">
    {{$news_type->links()}}
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
@endsection