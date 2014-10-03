{{ Form::open(array('action' => array('BuildingsController@update',$building->id), 'method' => 'put', 'class' => 'form-horizontal bucket-form' , 'enctype' => 'multipart/form-data')) }}
    <section class="panel">
        <header class="panel-heading">
            รูปภาพ
            <div class="pull-right">
                <button type="submit" class="btn btn-primary">แก้ไข</button>
            </div>
            <div class="clearfix"></div>
        </header>
        <div class="panel-body">
            <div class="panel-body">
                        <table class="table  table-hover general-table">
                            <thead>
                            <tr>
                                <th> ชั้น</th>
                                <th>รูปภาพ</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($floors as $floor)
                            <tr>
                                <td>{{ $floor->no }}</td>
                                <td>
                                    <div class="fileupload fileupload-{{ !empty($floor->image) ? 'exists' : 'new'}}" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 400px; height: 350px;">
                                            <img src="http://www.placehold.it/400x350/EFEFEF/AAAAAA&amp;text=image" alt="">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 350px; line-height: 20px;">
                                            @if(!empty($floor))
                                            <img src='{{ !empty($floor->image) ? $floor->image : "" }}'>
                                            @endif
                                        </div>
                                        <div>
                                            <span class="btn btn-white btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> เลือก</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> เปลี่ยน </span>
                                            <input type="file" name="image[{{$floor->id}}]" class="default">
                                            </span>
                                            <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> ลบ</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
    </section>
{{ Form::close() }}
