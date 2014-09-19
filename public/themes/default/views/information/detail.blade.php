<div class="bg-project-info"><img src="{{ asset('themes/default/assets/images/info-img.jpg') }}" /></div>
<div class="pi-content">ชื่อโครงการ :   {{ $project->first()->pivot->name }}

ทำเลที่ตั้ง   :   {{ $project->first()->pivot->address }} 

จำนวน (ชั้น/ยูนิต) :
@foreach ($units as $unit) 
{{ $unit->pivot->name }} :  {{ $unit->pivot->building }} จำนวน  {{ $unit->pivot->unit }} ยูนิต
@endforeach
ราคาเริ่มต้น :   {{ $project->first()->price }}

รูปแบบห้องชุด :
@foreach ($rooms as $room) 
:   {{ $room->pivot->name }} 
@endforeach 

พื้นที่จอดรถ :
@foreach ($units as $unit) 
{{ $unit->pivot->name }} :  {{ $unit->parking }} คัน
@endforeach

สิ่งอำนวยความสะดวก : 
@foreach ($facilities as $facility) 
{{ $facility->pivot->name }} 
@endforeach 

ระบบรักษาความปลอดภัย  :  
{{ $project->first()->pivot->security }} 
</div>