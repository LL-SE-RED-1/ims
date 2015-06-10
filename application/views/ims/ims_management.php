
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


  <div class="col-xs-6 col-sm-6 huge-placeholder">

    <h2 class="sub-header">信息管理</h2>

  </div>

  <div class="col-xs-6 col-sm-6 huge-placeholder">

    <!--h2 class="ui header">Search</h2-->

    <div class="ui action left icon input placeholder transparent-seg right floated segment" style="
    margin-right: 2rem;
    ">
    <i class="search icon" style="
    left: auto;
    "></i>
    <input type="text" placeholder="_(:з」∠)_">
    <div class="ui teal button">搜索</div>
  </div>

  <div class="ui hidden divider"></div>
  <div class="ui hidden divider"></div>

  <div class="ui form transparent-seg right floated segment">
    <div class="inline fields">

      <div class="field">
        <div class="ui radio checkbox checked">

          <input id="s_course" type="radio" name="fruit" checked="checked">
          <label for="s_course">搜索课程</label>
        </div>
      </div>

      <div class="field">
        <div class="ui radio checkbox">

          <input id="s_student" type="radio" name="fruit">
          <label for="s_student">搜索学生</label>
        </div>
      </div>


      <div class="field">
        <div class="ui radio checkbox">

          <input id="s_teacher" type="radio" name="fruit">
          <label for="s_teacher">搜索老师</label>

        </div>
      </div>

    </div>
  </div>

</div>

<div class="row placeholder">

  <div class="col-xs-4 col-sm-3 placeholder">

    <a href="<?php echo site_url('ims/ims_addStudent')?>">
      <div class="text-center at-center">
        <img class="ui small circular image at-center" src="<?php echo base_url()?>/images/student.png">
        <p></p>
        <p>添加学生</p>
      </div>
    </a>
  </div>

  <div class="col-xs-4 col-sm-3 placeholder">
    <a href="<?php echo site_url('ims/ims_addTeacher')?>">
      <div class="text-center at-center">
        <img class="ui small circular image at-center" src="<?php echo base_url()?>/images/teacher.png">
        <p></p>
        <p>添加老师</p>
      </div>
    </a>
  </div>


  <div class="col-xs-4 col-sm-3 placeholder">
    <a href="<?php echo site_url('ims/ims_requestManage')?>">
      <div class="text-center at-center">
        <img class="ui small circular image at-center" src="<?php echo base_url()?>/images/validate.jpg">
        <p></p>
        <p>审核课程</p>
      </div>
    </a>
  </div>


  <div class="col-xs-4 col-sm-3 placeholder">

    <div class="text-center at-center">
      <a href="<?php echo site_url('ims/ims_addCourse')?>">
        <img class="ui small circular image at-center" src="<?php echo base_url()?>/images/book.jpg">
        <p></p>
        <p>添加课程</p>
      </a>
    </div>

  </div>

</div>

</div>
</div>
</div>

<script type="text/javascript">
$(document)
.ready(function(){
  $('.ui.dropdown')
  .dropdown()
  ;
  $('.ui.menu .dropdown')
  .dropdown({
    on: 'hover'
  })
  ;
})
;
</script>

</body></html>
