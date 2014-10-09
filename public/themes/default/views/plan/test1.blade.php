<h1>เฟส 2 : จำนวนทั้งหมด 4 อาคาร</h1>
<span class="mtip">กรุณาเลือกอาคารที่ท่านต้องการดูรายละเอียดเพิ่มเติม</span>
<div class="map-box">
	<a href="{{ action('HomeController@floor_detail',5) }}">อาคาร ฉลองชัย <img src="{{ asset('themes/default/assets/images/plan/floor-5.jpg') }}" ></a>
    <a href="{{ action('HomeController@floor_detail',6) }}">อาคาร ชัยชนะ <img src="{{ asset('themes/default/assets/images/plan/floor-6.jpg') }}" ></a>
    <a href="{{ action('HomeController@floor_detail',7) }}">อาคาร ดวงดี <img src="{{ asset('themes/default/assets/images/plan/floor-7.jpg') }}" ></a>
    <a href="{{ action('HomeController@floor_detail',8) }}">อาคาร ทองแท้ <img src="{{ asset('themes/default/assets/images/plan/floor-8.jpg') }}" ></a>
     <div class="clear"></div> 
</div>
<div class="clear"></div>
<a href="{{ action('HomeController@floor') }}" class="more-btn fbtn" style="margin-top:20px !important;"><i class="marl notop"></i> กลับไปเลือกเฟส</a>