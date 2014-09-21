<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				สไลด์โชว์
			</header>
			<div class="panel-body">
				<div class="adv-table editable-table ">
					<div class="clearfix">
						<div class="btn-group">
							<a href="{{ action('SlideshowsController@create') }}">
								<button id="editable-sample_new" class="btn btn-primary">
								เพิ่ม <i class="fa fa-plus"></i>
								</button>
							</a>
						</div>
					</div>
					<div class="space15"></div>
					<table class="table table-striped table-hover table-bordered" id="editable-sample">
						<thead>
							<tr>
								<th>รูปภาพ</th>
								<th width="150">แก้ไข</th>
								<th width="150">ลบ</th>
							</tr>
						</thead>
						<tbody>
							@if(!empty($slideshows))
							@foreach ($slideshows as $slide)
							<tr>
								<td>
									<div class="fileupload fileupload-new">
										<div class="fileupload-new thumbnail" style="width: 200 !important; height: 150px !important;">
											<img src="{{ $slide->image }}" alt="">
										</div>
									</div>
								</td>
								<td><a class="btn btn-info" href="{{ action('SlideshowsController@edit',$slide->id) }}">แก้ไข</a></td>
								<td>
									{{ Form::open(array('action' => array('SlideshowsController@destroy', $slide->id), 'method' => 'delete')) }}
									<button type="submit" class="btn btn-danger">ลบ</button>
									{{ Form::close() }}
								</td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>