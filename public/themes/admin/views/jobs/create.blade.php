{{ Form::open(array('action' => array('NewsController@store'), 'method' => 'post', 'class' => 'form-horizontal bucket-form' , 'enctype' => 'multipart/form-data')) }}
	<section class="panel">
		<header class="panel-heading">
			งาน
			<div class="pull-right">
				<button type="submit" class="btn btn-primary">บันทึก</button>
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
							<label class="col-sm-2 control-label">ตำแหน่ง ({{ $language->name }})</label>
							<div class="col-sm-6">
								<input name="job_description[{{ $language->id }}][name]" value="" type="text" class="form-control" required>
							</div>
							
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">รายละเอียด ({{ $language->name }})</label>
							<div class="col-md-10">
								<textarea name="job_description[{{ $language->id }}][description]"  class="wysihtml5 form-control" rows="6"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">คุณสมบัติ ({{ $language->name }})</label>
							<div class="col-md-10">
								<textarea name="job_description[{{ $language->id }}][requirement]"  class="wysihtml5 form-control" rows="6"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">ติดต่อ ({{ $language->name }})</label>
							<div class="col-md-10">
								<input class="form-control" type="text" name="job_description[{{ $language->id }}][information]">
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			
		</div>
	</section>
{{ form::close() }}