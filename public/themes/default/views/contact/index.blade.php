<div class="cml">
	<a id="map1" href="{{ asset('themes/default/assets/images/b-map.png') }}"><img src="{{ asset('themes/default/assets/images/b-map.png') }}" alt="" /></a>
    <ul>
    	<li><a href="https://www.google.com/maps/d/viewer?mid=zL__n7pq94wg.kA0G0twairc8" target="_blank"><span class="google-map"></span></a></li>
        <li><a id="map2" href="{{ asset('themes/default/assets/images/b-map.png') }}"><span class="zoom-map"></span></a></li>
        <!-- <li><a onclick="openWin()"><span class="print-map"></span></a></li> -->

    </ul>

    <div class="clear"></div>
</div>
<div class="cmr">
	<div class="cb">
    	<h1>โครงการอยู่ดี คอนโด</h1>
        <div class="cd">
        	<span>ต.โสธร อ.เมืองฉะเชิงเทรา จ.เมืองฉะเชิงเทรา</span>
            <span> โทร. 09 2259 2259 , 09 2279 2279</span>
            <span> โทรสาร. 038 514 064 </span>     
            <span>E-mail : <a href="#">info@udeecondo.com</a></span>
            <span> เวลาทำการ : เปิดบริการทุกวัน</span> 
         </div>
    </div>
    <div class="cb">
    	<h1>ติดต่อขอข้อมูลเพิ่มเติม</h1>
        {{ Form::open(array('action' => array('HomeController@handleContact'), 'method' => 'post')) }}
        	<input type="text" name="firstname" class="st" placeholder="ชื่อ :" required />
            <input type="text" name="lastname" class="st" placeholder="นามสกุล :" required />
            <input type="text" name="tel" class="st" placeholder="โทร :" />
            <input type="text" name="email" class="st" placeholder="อีเมล์ :" required />
            <input type="text" name="topic"  placeholder="หัวข้อ :" required />
            <textarea name="message" placeholder="ข้อความ :" required ></textarea>
            <input type="submit" name="submit" value="ยืนยัน" />
            <input type="reset" name="reset" value="ล้างข้อมูล" />
        {{ form::close() }}
        <div class="clear"></div>
    </div>
    <div class="job"><a href="{{ action('HomeController@job') }}"><i class="jmem"></i>ร่วมงานกับเรา<i class="jar"></i></a></div>
</div>

<script type="text/javascript">

$(document).ready(function() {
    $("#map2").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
         type: 'image'
    });

   
    $("#map1").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
         type: 'image'
    });

    
});

</script>