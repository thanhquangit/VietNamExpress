<div class="thongtin-title">
    <div class="right">

        <a href="/"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>

        <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>

    </div>
</div>
<div class="thongtin-content">
    @foreach($category as $ct)
        <ul class="ulBlockMenu" style="width:120px;">
            <li class="liFirst">
                <h2>
                    <a class="mnu_giaoduc" href="">{{$ct->name}}</a>
                </h2>
            </li>
            @foreach($ct->type as $t)
            <li class="liFollow">
                <h2>
                    <a href="/tin-tuc/the-gioi/">{{$t->name}}</a>
                </h2>
            </li>
            @endforeach
        </ul>
    @endforeach
</div>