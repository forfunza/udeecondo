<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="{{ action('RegistersController@index') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>ผู้ลงทะเบียน</span>
                </a>
            </li>
            <!-- <li>
                <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>จัดการข้อมูลโครงการ</span>
                </a>
            </li> -->
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-road"></i>
                    <span>จัดการข้อมูลโครงการ</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ action('ProjectsController@edit',1) }}">รายละเอียด</a></li>
                    <li><a href="{{ action('UnitsController@index') }}">ยูนิต</a></li>
                    <li><a href="{{ action('ConceptsController@index') }}">แนวคิด</a></li>
                    <li><a href="{{ action('RoomsController@index') }}">แปลนห้อง</a></li>
                    <li><a href="{{ action('FacilitiesController@index') }}">สิ่งอำนวยความสะดวก</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ action('GalleriesController@index') }}">
                    <i class="fa fa-picture-o"></i>
                    <span>รูปภาพ</span>
                </a>
            </li>
            <li>
                <a href="{{ action('SlideshowsController@index') }}">
                    <i class="fa fa-bullhorn"></i>
                    <span>สไลด์โชว์</span>
                </a>
            </li>
            <li>
                <a href="{{ action('NewsController@index') }}">
                    <i class="fa fa-bullhorn"></i>
                    <span>ข่าวสาร</span>
                </a>
            </li>
            <li>
                <a href="{{ action('ProgressesController@index') }}">
                    <i class="fa fa-cog"></i>
                    <span>ความคืบหน้าโครงการ</span>
                </a>
            </li>
            <li>
                <a href="{{ action('JobsController@index') }}">
                    <i class="fa fa-user"></i>
                    <span>งาน</span>
                </a>
            </li>
            
        </ul></div>        
<!-- sidebar menu end-->
    </div>
</aside>