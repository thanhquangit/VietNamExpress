<!--<ul class="width_common" id="menu_web">
  	<li class="active">
  		<a href="./"><img class="logo_icon_home" alt="" src="images/img_logo_home.gif"></a>
  	</li>  
  	<li>
  		@foreach($category as $ct)
      		<a href="" class="mnu_thoisu">{{$ct->name}}</a>
      	@endforeach
  	</li>       
</ul>-->
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu-v.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript">
	ddsmoothmenu.init({
		mainmenuid: "smoothmenu1", //menu DIV id
		orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu', //class added to menu's outer DIV
		//customtheme: ["#1c5a80", "#18374a"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	})
	ddsmoothmenu.init({
		mainmenuid: "smoothmenu2", //Menu DIV id
		orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
		method: 'toggle', // set to 'hover' (default) or 'toggle'
		arrowswap: true, // enable rollover effect on menu arrow images?
		//customtheme: ["#804000", "#482400"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	})
</script>
<div id="smoothmenu1" class="ddsmoothmenu">
    <ul>
        <li><a href="./">Trang chủ</a></li>
        @foreach($category as $ct)
	        <li><a href="#">{{$ct->name}}</a>
	            <ul>
	            	@foreach($ct->type as $t)
	                	<li><a href="type/{{$t->id}}">{{$t->name}}</a></li>
	               	@endforeach
	            </ul>
	        </li>
	    @endforeach
    </ul>
    <br style="clear: left" />
</div>