<!-- box cat -->
<?php
    use App\News;
    use App\Type;
    $id = 1;
    $news_type = News::where('type_id',$id)->take(4)->get();
    $first = $news_type->shift();
    $type = Type::find($id);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">{{$type->name}}</a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title"><a href="#">{{$first['title']}}</a></h3>
                    <img class="images_news" src="upload/tintuc/{{$first['urlImage']}}" align="left" />
                    <div class="des">{{$first['summary']}}</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col2">
                @foreach($news_type as $nt)
                    <h3 class="tlq"><a href="#">{{$nt->title}}</a></h3>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php
    $id = 2;
    $news_type = News::where('type_id',$id)->take(4)->get();
    $first = $news_type->shift();
    $type = Type::find($id);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">{{$type->name}}</a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title"><a href="#">{{$first['title']}}</a></h3>
                    <img class="images_news" src="upload/tintuc/{{$first['urlImage']}}" align="left" />
                    <div class="des">{{$first['summary']}}</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col2">
                @foreach($news_type as $nt)
                    <h3 class="tlq"><a href="#">{{$nt->title}}</a></h3>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php
    $id = 3;
    $news_type = News::where('type_id',$id)->take(4)->get();
    $first = $news_type->shift();
    $type = Type::find($id);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">{{$type->name}}</a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title"><a href="#">{{$first['title']}}</a></h3>
                    <img class="images_news" src="upload/tintuc/{{$first['urlImage']}}" align="left" />
                    <div class="des">{{$first['summary']}}</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col2">
                @foreach($news_type as $nt)
                    <h3 class="tlq"><a href="#">{{$nt->title}}</a></h3>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php
    $id = 6;
    $news_type = News::where('type_id',$id)->take(4)->get();
    $first = $news_type->shift();
    $type = Type::find($id);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">{{$type->name}}</a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title"><a href="#">{{$first['title']}}</a></h3>
                    <img class="images_news" src="upload/tintuc/{{$first['urlImage']}}" align="left" />
                    <div class="des">{{$first['summary']}}</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col2">
                @foreach($news_type as $nt)
                    <h3 class="tlq"><a href="#">{{$nt->title}}</a></h3>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php
    $id = 11;
    $news_type = News::where('type_id',$id)->take(4)->get();
    $first = $news_type->shift();
    $type = Type::find($id);
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">{{$type->name}}</a>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                    <h3 class="title"><a href="#">{{$first['title']}}</a></h3>
                    <img class="images_news" src="upload/tintuc/{{$first['urlImage']}}" align="left" />
                    <div class="des">{{$first['summary']}}</div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="col2">
                @foreach($news_type as $nt)
                    <h3 class="tlq"><a href="#">{{$nt->title}}</a></h3>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<!-- //box cat -->