<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                ผู้ลงทะเบียน
                
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>ชื่อ</th>
                                <th>นามสกุล</th>
                                <th>อีเมลล์</th>
                                <th width="150">รายละเอียด</th>
                                <th width="150">ลบ</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($registers))
                            @foreach ($registers as $register)
                            <tr>
                                <td>{{ $register->firstname }}</td>
                                <td>{{ $register->lastname }}</td>
                                <td>{{ $register->email }}</td>
                                <td><a href="{{ action('RegistersController@show',$register->id) }}" class="btn btn-info">รายละเอียด</a></td>
                                <td>
                                {{ Form::open(array('action' => array('RegistersController@destroy', $register->id), 'method' => 'delete')) }}
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