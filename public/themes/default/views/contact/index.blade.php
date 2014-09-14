<div class="cml">
	<a class="fancybox" href="{{ asset('themes/default/assets/images/b-map.png') }}"><img src="{{ asset('themes/default/assets/images/b-map.png') }}" alt="" /></a>
    <ul>
    	<li><a href="https://maps.google.co.th/maps/ms?msid=205255050427221366018.0004cdfd497b40f7fb5dd&msa=0&ie=UTF8&ll=13.76672,100.599575&spn=0.005554,0.010568&t=m&output=embed" target="_blank"><span class="google-map"></span></a></li>
        <li><a class="fancybox" href="{{ asset('themes/default/assets/images/b-map.png') }}"><span class="zoom-map"></span></a></li>
        <li><a onclick="openWin()"><span class="print-map"></span></a></li>
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
        <form action="#">
        	<input type="text" name="name" class="st" placeholder="ชื่อ :" />
            <input type="text" name="name" class="st" placeholder="นามสกุล :" />
            <input type="text" name="name" class="st" placeholder="โทร :" />
            <input type="text" name="name" class="st" placeholder="อีเมล์ :" />
            <input type="text" name="name"  placeholder="หัวข้อ :" />
            <textarea  placeholder="ข้อความ :" ></textarea>
            <input type="submit" name="submit" value="ยืนยัน" />
            <input type="reset" name="reset" value="ล้างข้อมูล" />
        </form>
        <div class="clear"></div>
    </div>
    <div class="job"><a href="{{ action('HomeController@job') }}"><i class="jmem"></i>ร่วมงานกับเรา<i class="jar"></i></a></div>
</div>