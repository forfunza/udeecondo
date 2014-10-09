<div class="bg-project-info"><img src="{{ asset('themes/default/assets/images/info-img.jpg') }}" /></div>
<div class="pi-content">
    <h2 class="infotoppic">ข้อมูลโครงการ</h2>
    <span class="projectinfoLeft">ชื่อโครงการ </span>   <span class="projectinfoRight"> {{ $project->first()->pivot->name }}</span>

<span class="projectinfoLeft">ทำเลที่ตั้ง   </span>   <span class="projectinfoRight"> {{ $project->first()->pivot->address }} </span>

<span class="projectinfoLeft">จำนวน (ชั้น/ยูนิต) </span>
<span class="projectinfoRight">
	<ul>
        @foreach ($units as $unit) 
        <li>{{ $unit->pivot->name }} :  {{ $unit->pivot->building }} จำนวน  {{ $unit->unit }} ยูนิต</li>
        @endforeach
    </ul>

</span>
<span class="projectinfoLeft">ราคาเริ่มต้น </span>  <span class="projectinfoRight"> {{ $project->first()->price }}</span>

<span class="projectinfoLeft">รูปแบบห้องชุด </span>
<span class="projectinfoRight ">
	<ul>
        @foreach ($rooms as $room) 
        <li> {{ $room->pivot->name }}  </li>
        @endforeach 
    </ul>
</span>

<span class="projectinfoLeft">พื้นที่จอดรถ</span>
<span class="projectinfoRight">
<ul>
    @foreach ($units as $unit) 
    <li> {{ $unit->pivot->name }} :  {{ $unit->parking }} คัน</li>
    @endforeach
</ul>
</span>

<span class="projectinfoLeft">สิ่งอำนวยความสะดวก </span>
<span class="projectinfoRight">
<ul>
    	<li> 
        @foreach ($facilities as $facility) 
            {{ $facility->pivot->name.',' }} 
        @endforeach 
        </li>
</ul>
</span>

<span class="projectinfoLeft">ระบบรักษาความปลอดภัย  </span>
<span class="projectinfoRight">
<ul>
    <li> {{ $project->first()->pivot->security }}  </li>
</ul>

</span>
</div>