<?php
    use App\News;
    $first = $news->shift();
    $news_release = News::where('type_id',1)->orderBy('id','desc')->take(3)->skip(1)->get();
?>
<div id="slide-left">
  <div id="slideleft-main">
    <img src="upload/tintuc/02.jpg" /><br />
    <h2 class="title"><a href="#">{{$first['title']}}</a> </h2>
    <div class="des">
        {{$first['summary']}}
    </div>
    @foreach($news_release as $nr)
      <p class="tlq"><a href="#">{{$nr->title}}</a></p>
    @endforeach
  </div>
  <div id="slideleft-scroll">
    <div class="content_scoller width_common">
      <ul>
        @foreach($news as $n)
          <li>
            <div class="title_news">
              <a href="#" class="txt_link">{{$n->title}}</a>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
    <div id="gocnhin">
      <!--<img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>-->
      <div class="title_news"></div>
    </div>
  </div>
</div>