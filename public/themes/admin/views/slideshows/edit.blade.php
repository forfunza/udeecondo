{{ Form::open(array('action' => array('SlideshowsController@update',$slideshow->id), 'method' => 'put', 'class' => 'form-horizontal bucket-form' , 'enctype' => 'multipart/form-data')) }}
	<section class="panel">
		<header class="panel-heading">
			รูปภาพ
			<div class="pull-right">
				<button type="submit" class="btn btn-primary">บันทึก</button>
			</div>
			<div class="clearfix"></div>
		</header>
		<div class="panel-body">
			<div class="form-group">
					<label class="control-label col-md-2">รูปภาพ</label>
					<div class="col-md-10">
						<div class="fileupload fileupload-{{ !empty($slideshow->image) ? 'exists' : 'new'}}" data-provides="fileupload">
						
							<div class="fileupload-new thumbnail" style="width: 400px; height: 350px;">
								<img src="http://www.placehold.it/400x350/EFEFEF/AAAAAA&amp;text=image" alt="">
							</div>
							<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 350px; line-height: 20px;">
								@if(!empty($slideshow))
								<img src='{{ !empty($slideshow->image) ? $slideshow->image : "" }}'>
								@endif
							</div>
							<div>
								<span class="btn btn-white btn-file">
								<span class="fileupload-new"><i class="fa fa-paper-clip"></i> เลือก</span>
								<span class="fileupload-exists"><i class="fa fa-undo"></i> เปลี่ยน </span>
								<input type="file" name="image" class="default" value="{{ !empty($slideshow->image) ? $slideshow->image : "" }}">
								</span>
								<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> ลบ</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
{{ Form::close() }}