<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><strong>个人信息</strong></h1>
    <form action= "<?php echo site_url('ims/ims_basicInfo/update')?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <!--<img src="8790.jpg" class="img-responsive"-->
                <!--style="margin-top: 10px; height:200px; width: 200px; background-size: cover"/>-->
                <!--<img src="..." alt="..." class="img-circle">-->
                <a href="#" class="thumbnail" style="margin-top :5px; margin-bottom: 5px">
                    <img class="img-responsive" src="<?php echo base_url()?>images/123.jpg" alt="..." style="height:300px overflow: hidden">
                </a>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default">上传</button>
                    </span>
                </div>
                <hr>
                <div>
                    <h4><strong>说明:</strong></h4>
                    <p style="text-indent: 2em">xxxx</p>
                    <p style="text-indent: 2em">xxxx</p>
                    <p style="text-indent: 2em">xxxx</p>


                </div>
            </div>
            <div class="col-md-8">
                <div class="row" id="row1">
                    <div class="col-md-5">
                        <div class="input-group" id="name">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 姓名
                            </span>
                            <input name="name" type="text" class="form-control" value="<?php echo $basicInfo['name'];?>"readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group" id="sex">
                            <span class="input-group-addon">
                                <span  class="glyphicon glyphicon-adjust" aria-hidden="true"></span> 性别
                            </span>
                            <select name="sex" class="form-control">
                                <option></option>
                                <?php if ($basicInfo['sex'] == 0): ?>
                                <option value="0" selected>男</option>
                                <option value="1">女</option>
                            <?php elseif ($basicInfo['sex'] == 1): ?>
                            <option value="0">男</option>
                            <option value="1" selected>女</option>
                        <?php else: ?>
                        <option value="0">男</option>
                        <option value="1">女</option>
                    <?php endif;?>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group" id="nations">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span> 民族
                </span>

                <select name="nation" id="nation" class="form-control">
                    <option value="汉族">汉族</option>
                    <option value="蒙古族">蒙古族</option>
                    <option value="回族">回族</option>
                    <option value="藏族">藏族</option>
                    <option value="维吾尔族">维吾尔族</option>
                    <option value="苗族">苗族</option>
                    <option value="彝族">彝族</option>
                    <option value="壮族">壮族</option>
                    <option value="布依族">布依族</option>
                    <option value="朝鲜族">朝鲜族</option>
                    <option value="满族">满族</option>
                    <option value="侗族">侗族</option>
                    <option value="瑶族">瑶族</option>
                    <option value="白族">白族</option>
                    <option value="土家族">土家族</option>
                    <option value="哈尼族">哈尼族</option>
                    <option value="哈萨克族">哈萨克族</option>
                    <option value="傣族">傣族</option>
                    <option value="黎族">黎族</option>
                    <option value="傈僳族">傈僳族</option>
                    <option value="佤族">佤族</option>
                    <option value="畲族">畲族</option>
                    <option value="高山族">高山族</option>
                    <option value="拉祜族">拉祜族</option>
                    <option value="水族">水族</option>
                    <option value="东乡族">东乡族</option>
                    <option value="纳西族">纳西族</option>
                    <option value="景颇族">景颇族</option>
                    <option value="柯尔克孜族">柯尔克孜族</option>
                    <option value="土族">土族</option>
                    <option value="达斡尔族">达斡尔族</option>
                    <option value="仫佬族">仫佬族</option>
                    <option value="羌族">羌族</option>
                    <option value="布朗族">布朗族</option>
                    <option value="撒拉族">撒拉族</option>
                    <option value="毛难族">毛难族</option>
                    <option value="仡佬族">仡佬族</option>
                    <option value="锡伯族">锡伯族</option>
                    <option value="阿昌族">阿昌族</option>
                    <option value="普米族">普米族</option>
                    <option value="塔吉克族">塔吉克族</option>
                    <option value="怒族">怒族</option>
                    <option value="乌孜别克族">乌孜别克族</option>
                    <option value="俄罗斯族">俄罗斯族</option>
                    <option value="鄂温克族">鄂温克族</option>
                    <option value="德昂族">德昂族</option>
                    <option value="保安族">保安族</option>
                    <option value="裕固族">裕固族</option>
                    <option value="京族">京族</option>
                    <option value="塔塔尔族">塔塔尔族</option>
                    <option value="独龙族">独龙族</option>
                    <option value="鄂伦春族">鄂伦春族</option>
                    <option value="赫哲族">赫哲族</option>
                    <option value="门巴族">门巴族</option>
                    <option value="珞巴族">珞巴族</option>
                    <option value="基诺族">基诺族</option>
                    <option value="留学生">留学生</option>
                    <option value="其它">其它</option>
                    <option value="" selected></option>
                    <script  type = "text/javascript">
                        document.getElementById("nation").value="<?php echo $basicInfo['nation']?>";
                    </script>
                </select>

            </div>
        </div>
    </div>
    <div class="row" id="row2">
        <div class="col-md-5">
            <div class="input-group" id="hometown">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> 籍贯
                </span>
                <!--<input type="text" class="form-control" readonly>-->
                <select name="province" class="form-control" style="width:auto">
                    <option value="北京">北京</option>
                    <option value="天津">天津</option>
                    <option value="河北">河北</option>
                    <option value="山西">山西</option>
                    <option value="内蒙古">内蒙古</option>
                    <option value="辽宁">辽宁</option>
                    <option value="吉林">吉林</option>
                    <option value="黑龙江">黑龙江</option>
                    <option value="上海">上海</option>
                    <option value="江苏">江苏</option>
                    <option value="浙江">浙江</option>
                    <option value="安徽">安徽</option>
                    <option value="福建">福建</option>
                    <option value="江西">江西</option>
                    <option value="山东">山东</option>
                    <option value="河南">河南</option>
                    <option value="湖北">湖北</option>
                    <option value="湖南">湖南</option>
                    <option value="广东">广东</option>
                    <option value="广西">广西</option>
                    <option value="海南">海南</option>
                    <option value="重庆">重庆</option>
                    <option value="四川">四川</option>
                    <option value="贵州">贵州</option>
                    <option value="云南">云南</option>
                    <option value="西藏">西藏</option>
                    <option value="陕西">陕西</option>
                    <option value="甘肃">甘肃</option>
                    <option value="青海">青海</option>
                    <option value="宁夏">宁夏</option>
                    <option value="新疆">新疆</option>
                    <option value="台湾">台湾</option>
                    <option value="香港">香港</option>
                    <option value="澳门">澳门</option>
                    <option value="" selected></option>
                    <script type="text/javascript">

                    </script>
                </select>
                <select name="city" class="form-control" style="width:auto">
                    <option>杭州市</option>
                </select>
            </div>
        </div>
        <div class="col-md-7">
            <div class="input-group" id="identity">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> 身份证
                </span>
                <input name="identity" type="text" class="form-control" readonly>
            </div>
        </div>

    </div>
    <div class="row" id="row3">
        <div class="col-md-6">
            <div class="input-group" id="birthday">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-gift" aria-hidden="true"></span> 生日
                </span>
                <input name="birthday" type="text" class="form-control" value="<?php echo $basicInfo['birthday']?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group" id="politic affiliation">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span> 政治面貌
                </span>
                <input name="politic" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="row" id="row4">
        <div class="col-md-6">
            <div class="input-group" id="email">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 电子邮箱
                </span>
                <input name="email" type="text" class="form-control" value="<?php echo $basicInfo['email']?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group" id="phone">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> 联系电话
                </span>
                <input name="phone" type="text" class="form-control" value="<?php echo $basicInfo['phone']?>">
            </div>
        </div>
    </div>
    <div class="row" id="row5">
        <div class="col-md-6">
            <div class="input-group" id="uid">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 学号
                </span>
                <input name="uid" type="text" class="form-control" value="<?php echo $basicInfo['uid']?>" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group" id="class">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-flag" aria-hidden="true"></span> 行政班级
                </span>
                <input name="class" type="text" class="form-control" value="<?php echo $basicInfo['class']?>" readonly>
            </div>
        </div>

    </div>
    <div class="row" id="row6">
        <div class="col-md-6">
            <div class="input-group" id="college">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-tower" aria-hidden="true"></span> 学院
                </span>
                <input name="college" type="text" class="form-control" value="<?php echo $basicInfo['college']?>" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group" id="department">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-pawn" aria-hidden="true"></span> 系
                </span>
                <input name="department" type="text" class="form-control" value="<?php echo $basicInfo['department']?>" readonly>
            </div>
        </div>
    </div>
    <div class="row" id="row7">
        <div class="col-md-6">
            <div class="input-group" id="major">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-education" aria-hidden="true"></span> 专业
                </span>
                <input  name="major" type="text" class="form-control" readonly>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group" id="minor">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span> 辅修
                </span>
                <input name="minor" type="text" class="form-control" readonly>
            </div>
        </div>
    </div>
    <div class="row" id="row8">
        <div class="col-md-4">
            <div class="input-group" id="grade">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 年级
                </span>
                <input name="grade" type="text" class="form-control" value="<?php echo $basicInfo['grade']?>" readonly>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group" id="length">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 学制
                </span>
                <input name="length" type="text" class="form-control" readonly>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group" id="state">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span> 学籍状态
                </span>
                <input name="state" type="text" class="form-control" readonly>
            </div>
        </div>
    </div>
    <div class="row" id="row9">
        <div class="col-md-7">
            <div class="input-group" id="dorm">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 宿舍
                </span>
                <input name="dorm" type="text" class="form-control" readonly>
            </div>
        </div>
        <div class="col-md-5">
            <div class="input-group" id="health">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 健康状况
                </span>
                <input name="health" type="text" class="form-control" readonly>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-md-3 col-md-offset-2">
        <button class="form-control" type="submit" name="save" value="save">保存</button>
    </div>
    <div class="col-md-3 col-md-offset-1">
        <button class="form-control" type="submit" name="cancel" value="cancel">取消</button>
    </div>
</div>
</form>

</div>