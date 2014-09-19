{{ Form::open(array('action' => array('ProjectsController@update', $project->id), 'method' => 'put', 'class' => 'form-horizontal bucket-form' , 'enctype' => 'multipart/form-data')) }}
<section class="panel">
	<header class="panel-heading">
		โครงการ
		<div class="pull-right">
			<button type="submit" class="btn btn-primary">แก้ไข</button>
		</div>
		<div class="clearfix"></div>
	</header>
	<div class="panel-body">
		
		<ul class="nav nav-tabs">
			@foreach ($languages as $language)
			<li class="{{ $language->id == 1 ? 'active' : ''}}">
				<a data-toggle="tab" href="#data-{{ $language->id }}">{{ $language->name }}</a>
			</li>
			@endforeach
			
		</ul>
		<div class="panel-body">
			<div class="tab-content">
				@foreach ($languages as $language)
				<div id="data-{{ $language->id }}" class="tab-pane {{ $language->id == 1 ? 'active' : ''}}">
					<div class="form-group">
						<label class="col-sm-2 control-label">ชื่อ ({{ $language->name }})</label>
						<div class="col-sm-6">
							<input name="project_description[{{ $language->id }}][name]" value="{{ $language->projects->find($project->id)->pivot->name }}" type="text" class="form-control" required>
						</div>
						
					</div>
					<div class="form-group">
						<label class="control-label col-md-2">ที่อยู่ ({{ $language->name }})</label>
						<div class="col-md-10">
							<textarea name="project_description[{{ $language->id }}][address]"  class="form-control">{{ $language->projects->find($project->id)->pivot->address }}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2">ความปลอดภัย ({{ $language->name }})</label>
						<div class="col-md-10">
							<textarea name="project_description[{{ $language->id }}][security]"  class="form-control">{{ $language->projects->find($project->id)->pivot->security }}</textarea>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-2 control-label">ราคา</label>
				<div class="col-sm-6">
					<input name="price" value="{{ $project->price }}" type="text" placeholder="ราคาเริ่มต้น" class="form-control">
				</div>
				
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-6">
					<input name="email" value="{{ $project->email }}" type="text"  class="form-control">
				</div>
				
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">โทรศัพท์</label>
				<div class="col-sm-6">
					<input name="tel1" value="{{ $project->tel1 }}" type="text"  class="form-control">
				</div>
				
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">โทรศัพท์ (สำรอง)</label>
				<div class="col-sm-6">
					<input name="tel2" value="{{ $project->tel2 }}" type="text"  class="form-control">
				</div>
				
			</div>
		</div>
		
		
	</div>
</section>
{{ Form::close() }}