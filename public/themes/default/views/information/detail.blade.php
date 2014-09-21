<div class="bg-project-info"><img src="{{ asset('themes/default/assets/images/info-img.jpg') }}" /></div>
<div class="pi-content"><span class="projectinfoLeft">ชื่อโครงการ :</span>   <span class="projectinfoRight"> {{ $project->first()->pivot->name }}</span>

<span class="projectinfoLeft">ทำเลที่ตั้ง   :</span>   <span class="projectinfoRight"> ตำบลโสธร อำเภอเมือง จ.ะเชิงเทราติดโรบินสัน ใกล้สนามบินสุวรรณภูมิ {{ $project->first()->pivot->address }} </span>

<span class="projectinfoLeft infoau">จำนวน (ชั้น/ยูนิต) :</span>
<span class="projectinfoRight nl">
	<ul>
    	<li>เฟส 1 :  อาคารชุดสูง 7 ชั้น  4  อาคาร จำนวน  316 ยูนิต</li>
        <li>เฟส 2 :  อาคารชุดสูง 8 ชั้น  4  อาคาร จำนวน  607 ยูนิต</li>
    </ul>
@foreach ($units as $unit) 
{{ $unit->pivot->name }} :  {{ $unit->pivot->building }} จำนวน  {{ $unit->pivot->unit }} ยูนิต
@endforeach
</span>
<span class="projectinfoLeft">ราคาเริ่มต้น :</span>  <span class="projectinfoRight"> {{ $project->first()->price }}</span>

<span class="projectinfoLeft infoau">รูปแบบห้องชุด :</span>
<span class="projectinfoRight nl ml">
	<ul>
    	<li> :  ห้องชุดขนาด 22.5  ตารางเมตร</li>
        <li> :  ห้องชุดขนาด 24  ตารางเมตร </li>
    </ul>
@foreach ($rooms as $room) 
:   {{ $room->pivot->name }} 
@endforeach 
</span>

<span class="projectinfoLeft infoau">พื้นที่จอดรถ :</span>
<span class="projectinfoRight nl ml">
<ul>
    	<li> เฟส 1 :  120 คัน</li>
        <li> เฟส 2 :  180 คัน </li>
    </ul>
@foreach ($units as $unit) 
{{ $unit->pivot->name }} :  {{ $unit->parking }} คัน
@endforeach
</span>

<span class="projectinfoLeft infoau">สิ่งอำนวยความสะดวก : </span>
<span class="projectinfoRight nl ml">
<ul>
    	<li> สโมสร , สระว่ายน้ำ , ฟิตเนต , 
                ร้านอาหาร , ร้านสะดวกซื้อ ,
                สวนสาธารณะ , Joggin Track</li>
    </ul>
@foreach ($facilities as $facility) 
{{ $facility->pivot->name }} 
@endforeach 
</span>

<span class="projectinfoLeft infoau">ระบบรักษาความปลอดภัย  : </span>
<span class="projectinfoRight nl ml">
<ul>
    	<li>  ระบบรักษาความปลอดภัยด้วย รปภ.
                24 ชั่วโมง  เข้า-ออกโครงการและ
                ตัวอาคารชุด้วยระบบ Access Card
                เพิ่มพื้นที่ส่วนตัวสำหรับคุณ </li>
    </ul>
{{ $project->first()->pivot->security }} 
</span>
</div>