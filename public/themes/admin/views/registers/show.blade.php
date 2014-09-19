<form class="form-horizontal bucket-form ">
    <section class="panel">
        <header class="panel-heading">
            รายละเอียด
            <div class="pull-right">
                <a href="{{ action('RegistersController@index') }}" class="btn btn-primary">กลับ</a>
            </div>
            <div class="clearfix"></div>
        </header>
        <div class="panel-body">
        <div class="form-group">
            <label class="control-label col-md-2">ชื่อ</label>
            <label class="col-md-10">{{ $register->firstname }}</label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">นามสกุล</label>
            <label class="col-md-10">{{ $register->lastname }}</label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">เบอร์โทร</label>
            <label class="col-md-10">{{ $register->tel }}</label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">อีเมลล์</label>
            <label class="col-md-10">{{ $register->email }}</label>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2">ข้อความ</label>
            <label class="col-md-10">{{ $register->message }}</label>
        </div>
            
            
        </div>
    </section>
</form>