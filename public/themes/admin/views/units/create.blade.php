{{ Form::open(array('action' => array('UnitsController@store'), 'method' => 'post', 'class' => 'form-horizontal bucket-form')) }}
	<section class="panel">
		<header class="panel-heading">
			อาคาร/ยูนิต
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
			<div class="tab-content">
				@foreach ($languages as $language)
				<div id="data-{{ $language->id }}" class="tab-pane {{ $language->id == 1 ? 'active' : ''}}">
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">ชื่อ ({{ $language->name }})</label>
							<div class="col-sm-6">
								<input name="unit_description[{{ $language->id }}][name]" value="" type="text" class="form-control" required>
							</div>
							
						</div>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label class="col-sm-2 control-label">อาคาร ({{ $language->name }})</label>
							<div class="col-sm-6">
								<input name="unit_description[{{ $language->id }}][building]" value="" type="text" class="form-control" >
							</div>
							
						</div>
					</div>
					
				</div>
				@endforeach
			</div>
			
			<div class="panel-body">
				<div class="form-group">
					<label class="col-sm-2 control-label">จำนวน</label>
					<div class="col-sm-6">
						<input name="unit" value="" type="text" placeholder="จำนวนยูนิต" class="form-control">
					</div>
					
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">ที่จอดรถ</label>
					<div class="col-sm-6">
						<input name="parking" value="" type="text" placeholder="จำนวนคัน" class="form-control">
					</div>
					
				</div>
			</div>
		</div>
	</section>
{{ Form::close() }}