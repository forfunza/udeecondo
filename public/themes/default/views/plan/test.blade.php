<h1>เฟส 1 : จำนวนทั้งหมด 4 อาคาร</h1>
<span class="mtip">กรุณาเลือกอาคารที่ท่านต้องการดูรายละเอียดเพิ่มเติม</span>
<div class="map-box">
	<a href="{{ action('HomeController@floor_detail',1) }}">อาคาร ก้าวหน้า <img src="{{ asset('themes/default/assets/images/plan/floor-1.jpg') }}" ></a>
    <a href="{{ action('HomeController@floor_detail',2) }}">อาคาร ขุมทรัพย์ <img src="{{ asset('themes/default/assets/images/plan/floor-2.jpg') }}" ></a>
    <a href="{{ action('HomeController@floor_detail',3) }}">อาคาร งอกงาม <img src="{{ asset('themes/default/assets/images/plan/floor-3.jpg') }}" ></a>
    <a href="{{ action('HomeController@floor_detail',4) }}">อาคาร จงเจริญ <img src="{{ asset('themes/default/assets/images/plan/floor-4.jpg') }}" ></a>
    <div class="clear"></div>
</div>
<div class="clear"></div>
<a href="{{ action('HomeController@master') }}" class="more-btn fbtn" style="margin-top:30px;"><i class="marl notop"></i> กลับไปผังโครงการ</a>
