@extends('page.index')
@section('content')
@foreach($category as $ct)

<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#">{{$ct->name}}</a>
        </div>
        <div class="child-cat">
        	@foreach($ct->type as $t)
            	<a href="type/{{$t->id}}">{{$t->name}}</a>
            @endforeach
        </div>
        <?php
        	$data = $ct->news->sortByDesc('id')->take(4);
        	$first = $data->shift();
		?>
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
            	@if($first!=null)
	                <div class="news">
	                    <h3 class="title"><a href="#">{{$first['title']}}</a></h3>
	                    <img class="images_news" src="upload/tintuc/{{$first['urlImage']}}" align="left" />
	                    <div class="des">{{$first['summary']}}</div>
	                    <div class="clear"></div>

	                </div>
	            @else
		            <div class="news">
	                    <h3 class="title"><a href="#"></a></h3>
	                    <img class="images_news" src="" align="left" />
	                    <div class="des"></div>
	                    <div class="clear"></div>

	                </div>
	            @endif
            </div>
            <div class="col2">
            	@foreach($data as $n)
                <p class="tlq"><a href="#">{{$n->title}}</a>
                    </a>
                </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
@endforeach
@endsection