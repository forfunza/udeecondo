<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                อาคาร
                
            </header>
            <div class="panel-body">
                <div class="adv-table editable-table ">
                    <div class="clearfix">
                       
                    </div>
                    <div class="space15"></div>
                    <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                            <tr>
                                <th>อาคาร</th>
                                <th width="150">แก้ไข</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($buildings))
                            @foreach ($buildings as $building)
                            <tr>
                                <td>{{ $building->languages->first()->pivot->name }}</td>
                                <td><a class="btn btn-info" href="{{ action('BuildingsController@edit',$building->id) }}">แปลนชั้น</a></td>
                                
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