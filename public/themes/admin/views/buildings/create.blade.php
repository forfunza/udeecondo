{{ Form::open(array('action' => array('BuildingsController@store'), 'method' => 'post', 'class' => 'form-horizontal bucket-form' , 'enctype' => 'multipart/form-data')) }}
	<section class="panel">
		<header class="panel-heading">
			อาคาร
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
								<input name="building_description[{{ $language->id }}][name]" value="" type="text" class="form-control" required>
							</div>
							
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="panel-body">
			<div class="form-group">
				<label class="control-label col-md-2"> จำนวนชั้น</label>
				<div class="col-md-4">
					<input name="floor" value="" type="number" class="form-control" required>
				</div>
			</div>
			</div>
		</div>
	</section>
{{ form::close() }}