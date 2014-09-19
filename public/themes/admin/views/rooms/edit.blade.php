{{ Form::open(array('action' => array('RoomsController@update', $room->id), 'method' => 'put', 'class' => 'form-horizontal bucket-form' , 'enctype' => 'multipart/form-data')) }}

	<section class="panel">
		<header class="panel-heading">
			แปลนห้อง
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
				
				<div class="form-group">
				<label class="control-label col-md-2">รูปภาพ</label>
					<div class="col-md-10">
						<div class="fileupload fileupload-{{ !empty($room->image) ? 'exists' : 'new'}}" data-provides="fileupload">
							<div class="fileupload-new thumbnail" style="width: 300px; height: 250px;">
								<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=image" alt="">
							</div>
							<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 300px; max-height: 250px; line-height: 20px;">
								@if(!empty($room))
								<img src='{{ !empty($room->image) ? $room->image : "" }}'>
								@endif
							</div>
							<div>
								<span class="btn btn-white btn-file">
								<span class="fileupload-new"><i class="fa fa-paper-clip"></i> เลือก</span>
								<span class="fileupload-exists"><i class="fa fa-undo"></i> เปลี่ยน </span>
								<input type="file" name="image" class="default">
								</span>
								<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> ลบ</a>
							</div>
						</div>
					</div>
					
					
				</div>
				<div class="tab-content">
					@foreach ($languages as $language)

					<div id="data-{{ $language->id }}" class="tab-pane {{ $language->id == 1 ? 'active' : ''}}">
						<div class="form-group">
							<label class="col-sm-2 control-label">ชื่อ ({{ $language->name }})</label>
							<div class="col-sm-6">
								<input name="room_description[{{ $language->id }}][name]" value="{{ $language->rooms->find($room->id)->pivot->name }}" type="text" class="form-control" required>
							</div>
							
						</div>
					</div>
					@endforeach
				</div>
			</div>
			
			
		</div>
	</section>
{{ Form::close() }}
