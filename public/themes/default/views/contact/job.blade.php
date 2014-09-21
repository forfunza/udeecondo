<div class="jl">
<h1>ร่วมงานกับเรา</h1>
  <div id="Accordion1" class="Accordion" tabindex="0">
  @if(!empty($jobs))
  @foreach ($jobs as $job)
  <div class="AccordionPanel">
    <div class="AccordionPanelTab">{{ $job->pivot->name }}</div>
    <div class="AccordionPanelContent">
      	<strong>รายละเอียดงาน :</strong><br />
          {{ $job->pivot->description }}
          <strong>คุณสมบัติ :</strong><br />
          {{ $job->pivot->requirement }}
          <strong>ติดต่อสอบถามข้อมูลเพิ่มเติม :</strong>
	{{ $job->pivot->information }}
      </div>
  </div>
  @endforeach
  @endif
</div>
</div>
<div class="jr">
	<img src="{{ asset('themes/default/assets/images/jr.jpg') }}" />
</div>