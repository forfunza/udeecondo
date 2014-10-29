<div class="bg-project-info"><img src="{{ asset('themes/default/assets/images/info-img.jpg') }}" /></div>
<div class="pi-content">
    <h2 class="infotoppic">{{{ trans('project.info') }}}</h2>
    <span class="projectinfoLeft">{{{ trans('project.name') }}} </span>   <span class="projectinfoRight"> {{ $project->first()->pivot->name }}</span>

<span class="projectinfoLeft">{{{ trans('project.location') }}}   </span>   <span class="projectinfoRight"> {{ $project->first()->pivot->address }} </span>

<span class="projectinfoLeft">{{{ trans('project.type') }}} </span>
<span class="projectinfoRight">
	<ul>
        @foreach ($units as $unit) 
        <li>{{ $unit->pivot->name }} :  {{ $unit->pivot->building }} {{{ trans('project.with') }}}  {{ $unit->unit }} {{{ trans('project.units') }}}</li>
        @endforeach
    </ul>

</span>
<span class="projectinfoLeft">{{{ trans('project.price') }}} </span>  <span class="projectinfoRight"> {{ $project->first()->price }}</span>

<span class="projectinfoLeft">{{{ trans('project.unit') }}} </span>
<span class="projectinfoRight ">
	<ul>
        @foreach ($rooms as $room) 
        <li> {{ $room->pivot->name }}  </li>
        @endforeach 
    </ul>
</span>

<span class="projectinfoLeft">{{{ trans('project.parking') }}}</span>
<span class="projectinfoRight">
<ul>
    @foreach ($units as $unit) 
    <li> {{ $unit->pivot->name }} :  {{ $unit->parking }} {{{ trans('project.car') }}}</li>
    @endforeach
</ul>
</span>

<span class="projectinfoLeft">{{{ trans('project.facility') }}} </span>
<span class="projectinfoRight">
<ul>
    	<li> 
        @foreach ($facilities as $facility) 
            {{ $facility->pivot->name.',' }} 
        @endforeach 
        </li>
</ul>
</span>

<span class="projectinfoLeft">{{{ trans('project.secure') }}}  </span>
<span class="projectinfoRight">
<ul>
    <li> {{ $project->first()->pivot->security }}  </li>
</ul>

</span>
</div>