<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">Tin xem nhiều</a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            @foreach($news_view as  $nv)
                <div class="col1">
                    <div class="news">
                        <img class="images_news" src="upload/tintuc/{{$nv->urlImage}}" />
                        <h3 class="title"><a href="#">{{$nv->title}}</a><span class="hit">{{count($nv->comment)}}</span></h3>
                        <div class="clear"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="clear"></div>