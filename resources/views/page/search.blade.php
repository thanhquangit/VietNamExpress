

@extends('page.index')
@section('content')
<div class="row">
    <a href="./">Trang chủ</a> >> <a href="#">Tìm kiếm</a> >> <a href="#">{{$key}}</a>
</div>
<?php 
    function changeColor($str, $key){
        return str_replace($key, "<span style='color:red;font-weight:bold;'>$key</span>", $str);
    }
?>
@foreach($news_search as $nt)
<div class="box-cat">
    <div class="cat1">
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col0 col1">
                <div class="news">
                    <h3 class="title" ><a href="#">{!!changeColor($nt->title,$key)!!}/a></h3>
                    <img class="images_news" src="upload/tintuc/{{$nt->urlImage}}" align="left" />
                    <div class="des">{!!changeColor($nt->summary,$key)!!}</div>
                    <div class="clear"></div>
                   
                </div>
            </div>
            
        </div>
    </div>
</div>
@endforeach
<div class="text-center">
    {{$news_search->links()}}
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
@endsection