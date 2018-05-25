@extends('page.index')
@section('content') 
<h1 class="title">{{$detail->title}}</h1>
<div class="des">
    {{$detail->summary}}
</div>
<div class="chitiet">
    <!--noi dung-->
    {!!$detail->content!!}
    <p class="right"><strong>{{$detail->users->name}}</strong></p>
    <!--//noi dung-->
</div>
<div class="clear"></div>
<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="21"></a>
<div class="number_count"><span id="like-total-1000000-3023795">{{$detail->qtyView}}</span></div>
<!--face-->
<div class="left">
    <div class="fb-like fb_iframe_widget" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-href="http://vnexpress.net/tin-tuc/the-gioi/ukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html" fb-xfbml-state="rendered"
        fb-iframe-plugin-query="app_id=&amp;href=http%3A%2F%2Fvnexpress.net%2Ftin-tuc%2Fthe-gioi%2Fukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=450"></div>
</div>
<!--twister-->
<div class="left"></div>
<!--google-->
<div class="left">
    <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div>
</div>
<div class="clear"></div>
<div id="tincungloai">
    <?php
        use App\News;
        $news_cl = News::where('type_id',$detail->type_id)->orderByDesc('id')->take(3)->get();
    ?>
    <div class="clear"></div>
    <ul>
        @foreach($news_cl as $nc)
            <li>
                <a href="detail/{{$nc->id}}"><img src="upload/tintuc/{{$nc->urlImage}}" alt="{{$nc->title}}"></a> <br />
                <a class="title" href="detail/{{$nc->id}}">{{$nc->title}}</a>
                <span class="no_wrap">   
            </li>
        @endforeach
    </ul>
</div>
<div class="clear"></div>
@endsection