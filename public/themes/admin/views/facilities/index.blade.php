<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                สิ่งอำนวยความสะดวก
                
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                        <div class="btn-group">
                            <a href="{{ action('FacilitiesController@create') }}">
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
                                <th>ชื่อ</th>
                                <th width="150">แก้ไข</th>
                                <th width="150">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($facilities))
                            @foreach ($facilities as $facility)
                            <tr>
                                <td>{{ $facility->languages->first()->pivot->name }}</td>
                                <td><a class="btn btn-info" href="{{ action('FacilitiesController@edit',$facility->id) }}">แก้ไข</a></td>
                                <td>
                                {{ Form::open(array('action' => array('FacilitiesController@destroy', $facility->id), 'method' => 'delete')) }}
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