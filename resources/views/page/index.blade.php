<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lap Trinh PHP - KhoaPhamTraining</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>
<body>
    <div id="wrap-vp">
        <div id="header-vp">
            <div id="logo"><img src="images/logo.gif" /></div>
        </div>
        <div>
            @include('page.blocks.menu')
            <!--block/menu.php-->
        </div>
        <div id="midheader-vp">
            <div id="left">
                <ul class="list_arrow_breakumb">
                    <li class="start">
                        <a href="javascript:;">Trang nhất</a>
                        <span class="arrow_breakumb">&nbsp;</span>
                    </li>
                </ul>
            </div>
            <div id="right">
                @include('page.blocks.general_information')
                <!--blocks/thongtinchung.php-->
            </div>
        </div>
        <div class="clear"></div>
        <div id="slide-vp">
            @include('page.blocks.top_home')
            <!--blocks/top_trang_chu.php-->
            <div id="slide-right">
                @include('page.blocks.advertisement_top_right')
                <!--blocks/quangcao_top_phai.php-->
            </div>
        </div>
        <div id="content-vp">
            <div id="content-left">
                @include('page.blocks.left_colunm')
                <!--blocks/cot_trai.php-->
            </div>
            <div id="content-main">
                @yield('content')
            </div>
            <div id="content-right">
                @include('page.blocks.right_colunm')
                <!--blocks/cot_phai.php-->
            </div>
            <div class="clear"></div>
        </div>
        <div id="thongtin">
            @include('page.blocks.business_information')
            <!--blocks/thongtindoanhnghiep.php-->
        </div>
        <div class="clear"></div>
        <div id="footer">
            @include('page.blocks.footer')
            <!--blocks/footer.php-->
            <div class="ft-bot">
                <div class="bot1"><img src="images/logo.gif" /></div>
                <div class="bot2">
                    <p>© <span>Copyright 1997 VnExpress.net,</span> All rights reserved</p>
                    <p>® VnExpress giữ bản quyền nội dung trên website này.</p>
                </div>
                <div class="bot3">
                    <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a> <a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="/contactus">Liên hệ Tòa soạn</a></p>
                    <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>0123.888.0123</span> (HN) - <span>0129.233.3555</span> (TP HCM)</p>
                </div>
            </div>
        </div>
    </div>
    @yield('script')
</body>
</html>