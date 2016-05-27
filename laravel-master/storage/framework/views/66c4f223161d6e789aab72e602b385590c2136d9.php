<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=8,chrome=1" />
    <meta name="keywords" content=""/>
    <meta name="description" content="" />
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet"  type="text/css">
    <link href="http://staticnew.mayi.com/resourcesWeb/css/account.css" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/PCenter.css?V=201310081852" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/room_userinfo.css" rel="stylesheet" type="text/css" />
    <title>房源-个人信息</title>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ajaxfileupload.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/CutPic.js?V=201508051200"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ui/jquery-ui-1.9.2.custom.min.js" ></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/room_userinfo.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/regx/idcard.js"></script>
    <script type="text/javascript">
        //图片异步上传
        function ajaxFileUpload(obj){
            if(validateImage(obj)){
                $.ajaxFileUpload({
                    url:'/user/account/originalheadimage/upload.do',   //需要链接到服务器地址
                    secureuri:false,
                    fileElementId:'imageupload',                        //文件选择框的id属性
                    dataType: 'json',                                     //服务器返回的格式，可以是json
                    success: function (data, status){            //相当于java中try语句块的用法
                        if(data.error){
                            layer.alert(data.error.message,8);
                        }else{
                            $("#isHavePic").val(data.data.result);
                            $("#ImageDrag").attr("src", data.data.result);
                            $("#ImageIcon").attr("src",data.data.result);
                            $("#picture").attr("value",data.data.result);
                            img.src = data.data.result;
                        }
                    },
                    error: function (data, status, e){
                        layer.alert("图片上传失败",8);
                    }
                });
            }
        }

        function validateImage(obj) {
            var file = obj;
            var tmpFileValue = file.value;

            //校验图片格式
            if(/^.*?\.(gif|png|jpg|jpeg|bmp)$/.test(tmpFileValue.toLowerCase())){
                return true;
            } else {
                layer.alert("请您上传jpg、jpeg、png、bmp或gif格式的图片！",8);
                return false;
            }

            //校验图片大小,这段代码需调整浏览器安全级别(调到底级)和添加可信站点(将服务器站点添加到可信站点中)
            if(file.value == ""){
                layer.alert("请选择上传的文件!",8);
                return false;
            }
        }
        //下拉框 有选中时删除 请选择 选项
        function optionChange(obj){
            $("#"+obj+" option[value='-1']").remove();
            $("#"+obj).removeAttr("onchange");
        }
    </script>
    <!-- 有道统计所需js
    <script type="text/javascript">
    var youdao_conv_id = 279356;
    </script>
    <script type="text/javascript" src="http://conv.youdao.com/pub/conv.js"></script>
    -->

    <!-- 百度SEM统计所需js-->
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?02fc96fc6232fcb90748551f45e3bfa1";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

    <!--  推广360dsp -->
    <script type="text/javascript">
        var _mvq = _mvq || [];
        _mvq.push(['$setAccount', 'm-196892-0']);

        _mvq.push(['$logConversion']);
        (function() {
            var mvl = document.createElement('script');
            mvl.type = 'text/javascript'; mvl.async = true;
            mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(mvl, s);
        })();

    </script>
</head>
<body>
<!-- Header -->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/searchlist/index_searchlist_public.js"></script>
<script type="text/javascript">
    $(function(){
        $(".close-alert1").click(function(){
            $(".alert-box1").hide();
        })
    })

    function loginowner(userid){

        var ctx = $('#ctx').val();
        $.get(ctx+"/user/checkFrozenAccount?frozenOwnerid="+userid,function(re){

            if(re==1){
                $(".alert-box1").show();
            }else{
                var ctx = $('#ctx').val();
                location.href =ctx+"/landlord/"+userid+"/orders";
            }
        });
    }

    function publish(userid){

        var ctx = $('#ctx').val();
        $.get(ctx+"/user/checkFrozenAccount?frozenOwnerid="+userid,function(re){

            if(re==1){
                $(".alert-box1").show();
            }else{
                var ctx = $('#ctx').val();
                location.href =ctx+"/room/publish/basicinfo";
            }
        });
    }

    function menufrozen(userid,url,frozentype){

        var ctx = $('#ctx').val();
        var furl = ctx+"/user/checkFrozenAccount?frozenOwnerid="+userid;
        if(frozentype == "user"){
            furl += "&frozentype="+frozentype;
        }
        $.get(furl,function(re){
            if(re==1){
                if(frozentype=='user'){
                    $(".frozeninfo").text("对不起，用户账号被封禁");
                }
                $(".alert-box1").show();
            }else{
                location.href =url;
            }
        });
    }
    function getSuggest(e){
        var s = $('#searchcityin').val().trim();
        var ctx = $('#ctx').val();
        if(!e) var e=window.event;
        var code = e.keyCode;
        if(code==27){
            $('.error_tip_list').css('display','none');
            $('.suggest_results').css('display','none');
            return false;
        }
        if(code==13||code==37||code==38||code==39||code==40){
            return false;
        }
        if(null!=s && s.length>0 && s!='目的地、景点、商圈等'){
            var sugurl = ctx+'/getSuggest';
            getSuggestResult(sugurl,s,0,'list');
        }else{
            $('.error_tip_list').html('请输入关键字');
            $('.error_tip_list').css('display','block');
            $('.suggest_results').css('display','none');
        }
    }
    function pressEve(e){
        var e=e||window.event;
        var code = e.keyCode;
        var sugcss = $('.suggest_results').css('display');

        if(sugcss!='none'){
            if(code==13){
                doSearch();
            }else if(code==38){
                movePrev();
            }else if(code==40){
                moveNext();
            }
        }
    }

</script>
<style>
    .logo58{background:url(http://staticnew.mayi.com/resourcesWeb/images/index/58logo.png) no-repeat;left:14px !important;top:16px !important;}
    .logomayi{left:200px !important;}
    .alert-box1{width:100%;height: 100%;z-index: 300000;position: absolute;display:none;line-height:40px;}
    .surveYY1{background: #000;width:100%;height:100%;opacity: 0.7;position: fixed;top: 0px;left: 0px;}
    .offmax_no{width:400px;height:186px;position:fixed;top:50%;margin-top:-93px;left:50%;margin-left:-200px;background-color:#fff;z-index:999;text-align:center;box-shadow:0px 0px 4px #ccc;border-radius:2px;}
    .offmax_no p{padding:0 20px;line-height:25px;}
    .alert_tit1{border-bottom:1px solid #e0e0e0;font-size:18px;margin-bottom:20px;}
    .close-alert1{cursor:pointer;width:50%;margin:20px auto;background-color:#22bb62;text-align:center;color:#fff;border-radius:2px;}
</style>
<input  type="hidden" name="ctx" id="ctx" value="" />
<div class='header relave'>
    <a href="/"><div class='asote head_left' style="background:url(http://localhost/head.jpg);background-repeat:no-repeat"></div></a>
    <div class='head_cnt relave'>
        <span class='search'></span>
        <ul class="nav_R asote nav_right">
            <li>
                <div class="showinfo">
                    <a href="javascript:menufrozen(851671587,'/tenant/851671587/orders','user')" target="_self"><img src="http://i1.mayi.com/gjfs15/M05/C7/30/CgEHP1cxdOXUq,Q-AABd0owykF8682.jpg_35x35c.jpg" id="aaa" class="user_img">
                        <span class="name" id="head_nickname"></span></a>
                    <div class="head_pop">
                        <div class="pop_column">
                            <p><a href="javascript:menufrozen(851671587,'/tenant/851671587/orders','user')" target="_self" id="myorder" rel="nofollow">我的订单</a></p>
                            <p><a href="javascript:menufrozen(851671587,'/user/tenant/accountmanager','user')" target="_self" id="myorder" rel="nofollow" class="slideactive">我的账户</a></p>
                            <p><a href="javascript:menufrozen(851671587,'/user/tenant/mycollection','user')" target="_self" id="mycollect" rel="nofollow">我的收藏</a></p>
                            <p><a href="javascript:menufrozen(851671587,'/user/tenant/msgmanager','user')" target="_self" id="mymsg" rel="nofollow">消息通知</a></p>
                            <p class="textCt"><a href="javascript:void(0)" id="loginoutbut" target="_self" class="stclick" clicktag="1_6">退出登录</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="showinfo">
                    <a href="javascript:loginowner(851671587)" target="_self" class="stclick">我是房东</a>
                    <div class="head_pop">
                        <div class="pop_column plr10">
                            <p><a href="javascript:menufrozen(851671587,'/landlord/851671587/orders','landlord')">订单管理</a></p>
                            <p><a href="javascript:menufrozen(851671587,'/user/landlord/roommanager','landlord')">房源管理</a></p>
                            <p><a href="javascript:menufrozen(851671587,'/landlord/851671587/settlements','landlord')">结算管理</a></p>
                            <p><a href="javascript:menufrozen(851671587,'/user/landlord/msgmanager','landlord')">消息通知</a></p>
                            <p><a href="javascript:menufrozen(851671587,'/user/landlord/accountmanager','landlord')">账户管理</a></p>
                            <p><a href="/user/landlord/landlordhelper/">下载房东助手</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="showinfo">
                    <a href="/activity/app50" target="_blank">APP下单立送55元</a>
                    <div class="b-app-img head_pop"><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/mark_quick.jpg"></div>
                </div>
            </li>
            <li>
                <a class="recruit" href="/landlord/recruit" target="_blank">房东招募</a>
            </li>
            <li>
                <a rel="nofollow" href="javascript:publish(851671587)" class="room-btn f16 t-center" >免费发布房源</a>
            </li>
        </ul>
        <b style="width:1px;height:100%;background-color:#f00;display:block;"></b>
    </div>

</div>
<!--公共头部结束-->
<div class="alert-box1">
    <div class="surveYY1"></div>
    <div class="offmax_no">
        <div class="alert_tit1">温馨提示</div>
        <p class="frozeninfo">对不起，房东账号被封禁</p>
        <p>如有疑问，请联系蚂蚁短租客服400-069-6060</p>
        <div class="close-alert1">我知道了</div>
    </div>
</div>
<input  type="hidden" name="subdomain" id="subdomain" value="" />
<input  type="hidden" name="mainsite" id="mainsite" value="" />
<input  type="hidden" name="ctx" id="ctx" value="" />
<input  type="hidden" name="ctx1" id="ctx1" value="http://staticnew.mayi.com" />
<input  type="hidden" name="uid" id="uid" value="851671587" />
<input  type="hidden" name="loginurl" id="loginurl" value="none" />
<input type="hidden" name="head_userName" id="head_userName" value="☞☜">
<script type="text/javascript">
    $(function() {
        var userName=$("#head_userName").val();
        if(userName!='' && userName.length>0){
            var realLength = 0;
            var len = userName.length;
            var charCode = -1;
            for (var i = 0; i < len; i++) {
                charCode = userName.charCodeAt(i);
                if (charCode >= 0 && charCode <= 128){
                    realLength += 1;
                }else{
                    realLength += 2;
                }
                if(realLength>20){
                    $("#head_nickname").html(userName.substring(0,i)+"...");
                    break;
                }
            }
            if(realLength <= 20){
                $("#head_nickname").html(userName);
            }
        }

        $(".showinfo").hover(function(){
            $(this).children(".head_pop").css("display","block");
        }).mouseleave(function(){
            $(this).children(".head_pop").css("display","none");
        })

    });
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/c.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im/im_n.js"></script>

    <link rel="stylesheet" href="http://staticnew.mayi.com/resourcesWeb/im/css/IM.css" />
</head>
<body>
<input type="hidden" id="MAYIUID" value="851671587" />
<div id="point" class="contacts_landlord clearfloat IM_content ui-draggable" style="display:none;">
    <span class="right_open_btn"></span>
</div>
<a class='IM_btn' style='display:none;' href='javascript:;'><span class='IM_btn_span' ><i style="display:none;">0</i></span>站内信</a>
<div class="IM_cancel" style="display:none;">
    <div class="IM_cancel_bg"></div>
    <div class="IM_cancel_box">
        <p class="c322c27 f18 lineht45 t-center mb10">即日起，PC端IM功能暂停使用</p>
        <p class="c777776 t-center lineheight20 mt10 mb5">扫描下方二维码，下载APP查看消息。<br>随时随地沟通，不再错过。</p>
        <ul class="IM_to_app mt10 clearfloat">
            <li class="fl t-center">
                <img src="http://staticnew.mayi.com/resourcesWeb/im/images/dz_pcim.png" alt="">
                <p class="lineht45 c322c27">我是房客</p>
            </li>
            <li class="fr t-center">
                <img src="http://staticnew.mayi.com/resourcesWeb/im/images/zs_pcim.png" alt="">
                <p class="lineht45 c322c27">我是房东</p>
            </li>
        </ul>
        <i class="close_imapp"></i>

    </div>
</div>
<style>
    .c322c27{color:#322c27;}
    .lineheight20{line-height:20px;}
    .IM_cancel_bg{z-index:100000; background-color:#000; opacity:0.3; filter:alpha(opacity=30);position:fixed;width:100%;height:100%;top:0;left:0;}
    .IM_cancel_box{width:442px;position:fixed;background-color:#fff;top:50%;left:50%;margin-left:-221px;margin-top:-165px;z-index:100001;padding:30px 70px;box-sizing:border-box;}
    .IM_to_app img{width:121px;height:121px;display:inline-block;vertical-align:middle;}
    .close_imapp{background:url(http://staticnew.mayi.com/resourcesWeb/im/images/close_icon.png) no-repeat center center;background-size:18px 18px;position: absolute;display:inline-block;width: 28px;height: 28px;cursor:pointer;top:5px;right:5px;}
    .close_imapp:hover{background-color:#f2f2f2;border-radius:50%;}
</style>
</body>
<script>
    var uid=$('#MAYIUID').val();
    if(uid!='')
    {
        $('.IM_btn').css('display','block');
        var ctx = $('#ctx').val();
        var url = ctx+"/im/getNotice";
        $.ajax({
            url :url,
            type : 'POST',
            async:true,
            dataType:'json',
            timeout: 5000,
            error: function(data){
                //getToken();
                //alert("im登录失败，请刷新后重试");
            },
            success : function(data)
            {
                if(data.error||data.data==0)
                {
                    imTimer.init();
                }
            }
        });
    }
</script>

</html><!-- Header END -->
<!-- Content -->
<div class="main">
    <input type="hidden" value="850454724" id="roomId"/>
    <link href="http://staticnew.mayi.com/resourcesWeb/css/flow_chart.css" rel="stylesheet"  type="text/css">
    <div class='one_workflow yes_person'>
        <div class='workflow relave'>
            <div class='progress progress_5'></div>
            <b class='workflow1'>房源信息</b>
            <b class='workflow2'>房源描述</b>
            <b class='workflow3'>房源图片</b>
            <b class='workflow4'>价格要求</b>
            <b class='workflow5'>个人信息</b>
            <b class='workflow6'>发布成功</b>
            <span class='workflow1_1'><a href="/room/publish/basicinfo/850454724" class='a_after'>1</a></span>
            <span class='workflow1_2'><a href="/room/publish/detailinfo/850454724" class='a_after'>2</a></span>
            <span class='workflow1_3'><a href="/room/publish/imageinfo/850454724" class='a_after'>3</a></span>
            <span class='workflow1_4'><a href="/room/publish/priceinfo/850454724" class='a_after'>4</a></span>
            <span class='workflow1_5'><a href="/room/publish/userinfo/850454724" class='a_after'>5</a></span>
            <span class='workflow1_6'><a href="javascript:;" class='duigo'></a></span>
        </div>
    </div>
    <!--增加房东上传头像功能开始-->
    <div>
    <form action="<?php echo e('basicinfosix'); ?>" method="post">
    <div class="homes-con">
        <div class="homesTitle" >
            <div class="homesTitlebg">个人信息</div>
            <p class="beizhu">个人信息首次填写成功，下次发布无需填写</p>
        </div>
    </div>
    <!--增加房东上传头像功能结束-->
    <!--当前头像-->
    <p class='tips'>小贴士：填写真实的昵称可以增加房客信任感，对提高订单有很大的帮助</p>
    <dl class='clearfloat bas_content'>
        <dt class='fl phone_fl'><span class="fr">当前头像：</span><em class="notNull"></em></dt>
        <dd class='fl relave'>
            <img id="headimage" style="width:100px;height:100px;" src="http://localhost/laravel-master/public/images/1.jpg" alt=""/>



            <?php /*<p style=" width:100px; text-align:center; "><a id="upheadimgdo" class="alertAvatar" rel="nofollow"href="javascript:void(0)">[修改头像]</a></p>*/ ?>
            <?php /*<input type="hidden" id="isHavePic" value="http://i1.mayi.com/gjfs15/M05/C7/30/CgEHP1cxdOXUq,Q-AABd0owykF8682.jpg_110x110c.jpg">*/ ?>
        </dd>
    </dl>
    <!--增加房东上传头像功能结束-->
    <?php /*<!--昵称-->*/ ?>
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">昵称：</span><em class="notNull"></em></dt>
        <dd class='fl phone_fr'>
            <div>
                <?php /*<input id="nickname" type="text" class='nickname'/><span class='nickname_prompt C_777776'>一个悦耳昵称可以大大提升您的亲切值呢，若您实在没有好的想法，试试下面的吧</span></div>*/ ?>

            <input class="tel_phone" type="text" name="store_name" /><span class='nickname_prompt C_777776'>一个悦耳昵称可以大大提升您的亲切值呢，若您实在没有好的想法，试试下面的吧</span>
    </div>
        </dd>
    </dl>
    <!--个性化描述-->
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">个性化描述：</span><em class="notNull"></em></dt>
        <dd class='fl'>
            <textarea name="introduce" id="introduce" class='describes'></textarea><span class='describes_prompt C_777776'>为了让房客更好的认识你，说点什么吧，300字之内</span>

        </dd>
    </dl>
    <!--收款账号-->
    <?php /*<dl class='clearfloat bas_content money_dl'>*/ ?>
        <?php /*<dt class='fl'><span class="fr" style="margin-top: 2px;">收款账号：</span><em class="notNull"></em></dt>*/ ?>
        <?php /*<dd class='fl'>*/ ?>
            <?php /*<div class="MtList" style="display: block;">*/ ?>
                <?php /*<table class="gathering bas_gather" id="paymenttable" name="paymenttable">*/ ?>
                <?php /*</table>*/ ?>
                <?php /*<div class='add_btnParent'>*/ ?>
                    <?php /*<a class="AddNewAt-btn fl" id="addnewpayment" name="addnewpayment" rel="nofollow" href="javascript:void(0)">+添加账号</a><span class='C_777776'>该账号为房费的打款账号，请放心填写 （支付宝、财付通需实名认证才能正常结算房款）</span>*/ ?>
                <?php /*</div>*/ ?>
            <?php /*</div>*/ ?>
        <?php /*</dd>*/ ?>
    <?php /*</dl>*/ ?>
    <!--手机号-->
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">手机号：</span><em class="notNull"></em></dt>
        <dd class='fl'>
            <input class="tel_phone" type="text" name="mobile" id="mobile" value=""  />
            <?php /*<a id="validmobile" class="checking" href="javascript:void(0)">[验证手机]</a>*/ ?>
            <span style="margin-left:50px;padding:1px 10px;left:351px;">此为用作接单的手机号码</span>
        </dd>
    </dl>
    <!--备用手机号-->
    <?php /*<dl class='clearfloat bas_content'>*/ ?>
        <?php /*<dt class='fl'><span class="fr">备用手机号：</span></dt>*/ ?>
        <?php /*<dd class='fl'>*/ ?>
            <?php /*<div class="dayPrice" id="addOtherDiv" >*/ ?>
                <?php /*<a href="javascript:void(0)" name="addMobile" id="addMobile" class="addAdress-btn" style="float:left;line-height:28px;margin-top:0px;">+添加</a>*/ ?>
                <?php /*<span style="margin-left:30px;padding:1px 10px;float:left;margin-top:7px;">填写备用手机号码，以便特殊情况下可及时联系到您</span>*/ ?>
            <?php /*</div>*/ ?>
            <?php /*<div class="dayPrice" id="otherDiv"  style="display:none" >*/ ?>
                <?php /*<input class="tel_phone" type="text" name="othermobile" id="othermobile" disabled="disabled" value=""/>*/ ?>
                <?php /*<a id="updateothermobile" class="checking" href="javascript:void(0)">[修改手机]</a>*/ ?>
                <?php /*<a id="delothermobile" class="checking" href="javascript:void(0)">[删除]</a>*/ ?>
            <?php /*</div>*/ ?>
        <?php /*</dd>*/ ?>
    <?php /*</dl>*/ ?>
    <!--身份证号码-->
    <dl class='clearfloat bas_content'>
        <dt class='fl'><span class="fr">身份证号码：</span></dt>
        <dd class='fl'>
            <input type="text" class='tel_phone' value="" id="paperno" name="paperno"/><span class='tel_span C_777776'>为了保障您和房客的安全，请填写本人真实身份证号码</span>
        </dd>
    </dl>
    <div class="submit-wrap">
        <input class="save" style="background:greenyellow" type="submit" value="保存下一步"/>
    </div>
    </form>
        </div>
</div>

<!-- 修改头像 -->
<div id="headimagediv" class="smallalert-box" style="display: none;" >
    <div class="alert-title">
        修改头像
        <a id="headimagedivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <div class="alteravatar">
            <!-- 图像裁剪层 start  -->
            <div id="Canvas" class="uploaddiv">
                <div id="ImageDragContainer">
                    <img id="ImageDrag" class="imagePhoto"  style="border-width:0px;" />
                </div>
                <div id="IconContainer">
                    <img id="ImageIcon" class="imagePhoto" style="border-width:0px;" />
                </div>
            </div>
            <!-- 图像裁剪层  end -->
        </div>
        <div class="uploaddiv">
            <table>
                <tr>
                    <td id="Min">
                        <img alt="缩小" src="http://staticnew.mayi.com/resourcesWeb/images/account/_c.gif" onmouseover="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/_c.gif';" onmouseout="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/_h.gif';" id="moresmall" class="smallbig" />
                    </td>
                    <td>
                        <div id="bar">
                            <div class="child"></div>
                        </div>
                    </td>
                    <td id="Max">
                        <img alt="放大" src="http://staticnew.mayi.com/resourcesWeb/images/account/c.gif" onmouseover="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/c.gif';" onmouseout="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/h.gif';" id="morebig" class="smallbig" />
                    </td>
                </tr>
            </table>
        </div>
        <div class="btn-box pdtop20">
            <input class="small-btn fontsize12 mglt20 uploadinput" id="imageupload" type="file" value="选取照片" name="imageupload" accept="image/jpg,image/png,image/gif,image/bmp,image/jpeg" onchange="ajaxFileUpload(this);"  />
            <input id="cancelUpdateHeadImage" class="blue mglt110 btn" type="button" value="取消" name=""/>
            <input class="checking-btn samll-bton nomargin displayinline" type="button" id="saveheadimage" value="保存" name=""/>

            <div id="headimageparamImage"  style="display: none;">
                <input name="picture"  type="hidden" value="" id="picture" /> <!--   图片url-->
                <input name="txt_width"  type="hidden"  value="1" id="txt_width" /> <!-- 图片实际宽度-->
                <input name="txt_height"  type="hidden"  value="1" id="txt_height" /> <!-- 图片实际高度-->
                <input name="txt_top"  type="hidden" value="82" id="txt_top" /><!-- 距离顶部-->
                <input name="txt_left"  type="hidden"  value="73" id="txt_left" /><!--  距离左边-->
                <input name="txt_DropWidth"  type="hidden"  value="120" id="txt_DropWidth" /><!--  截取框的宽-->
                <input name="txt_DropHeight"  type="hidden"  value="120" id="txt_DropHeight" /><!--  截取框的高-->
                <input name="txt_Zoom"  type="hidden"  id="txt_Zoom" /><!--  放大倍数-->
            </div>
        </div>
    </div>
</div>
<!-- 修改头像 END -->
<!-- Footer -->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jQuery.md5.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/login.js?v=20151027"></script>

<script src="http://sta.ganji.com/cgi/ganji_sta.php?file=ganji&documentDomain=mayi.com&cookieDomain=mayi.com"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function getCookie(objName) {
            var arrStr = document.cookie.split("; ");
            for(var i = 0;i < arrStr.length;i ++){
                var temp = arrStr[i].split("=");
                if(temp[0] == objName) return unescape(temp[1]);
            }
        }

        function deleteCookie(name, path) {
            var name = escape(name);
            var expires = new Date(0);
            path = path == "" ? "" : ";path=" + path;
            document.cookie = name + "=" + ";expires=" + expires.toUTCString() + path;
        }

        //修正cookie中的MayiUserInfo
        var user = getCookie('MayiUserInfo');
        if (user != null) {
            var pattern = new RegExp(/^\".+\"$/);
            if (pattern.exec(user)) {
                user = user.substring(1,user.length-1);
                deleteCookie('MayiUserInfo', '/');
                document.cookie = "MayiUserInfo=" + escape(user) + ";path=/;domain=.mayi.com";
            }
        }
        //未登录的登录后才能显示站内信
        //加载IM
        //GJ.use('tool/webim_v1/js/webim.js');
    });

    function sinaWeibo(){
        window.open("http://widget.weibo.com/dialog/follow.php?fuid=2357071361");
    }
</script>
<div class="foot index-foot clearfloat">
    <div class="w1190 pb20 clearfloat">
        <div class="link_end">
            <p class="t-center f12 c777776">客户服务：400-069-6060&nbsp;&nbsp;010-60642468&nbsp;&nbsp;010-89177759 |<a href="http://www.mayi.com/tenantlogin/" target="_blank" class="c777776">&nbsp;帮助中心&nbsp;|</a><a href="http://www.mayi.com/aboutcompany/" target="_blank" class="c777776">&nbsp;公司信息&nbsp;|</a><a href="http://www.mayi.com/activity/app50" target="_blank" class="c777776">&nbsp;app下载&nbsp;|</a>关注我们
        <span class="mr10 cursorpt showinfo relave" style="display:inline-block;vertical-align:middle;">
            <img src="http://staticnew.mayi.com/resourcesWeb/images/weixin_logo_s.png">
            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/weixin.jpg" class="head_pop absot" style="bottom:24px;left:-32px;">
        </span>
        <span class="cursorpt" style="display:inline-block;vertical-align:middle;">
            <img src="http://staticnew.mayi.com/resourcesWeb/images/xinlang_logo_s.png" onclick="sinaWeibo();">
        </span>
            </p>
            <p class="t-center f12 c777776">网站备案/许可证号：京ICP证130021号 易云游网络技术（北京）有限公司</p>
            <p class="t-center f12 c777776">京公网安备11010802018218号</p>
        </div>
    </div>
</div>
<!--[statistics start]-->
<script src="http://staticnew.mayi.com/resources/js/mayi/mayi.js" type="text/javascript" charset="utf-8"></script><!-- Footer END -->
<!-- 登录弹窗 -->
<div class="loginbox" id="loginboxdiv" nexturl="none" name="loginboxdiv" style="display:none;">
    <div class="login-type">
        <span id="logindivtitle">手机验证码登录</span>

    </div><!-- 蚂蚁账号登陆-->
    <a class="login-colse"  id="loginclose" name="loginclose" onclick="" href="javascript:void(0)"></a>
    <!-- 手机登陆 -->
    <div class="login-input" id="loginbymadiv" name="loginbymadiv" >
        <div class="input">
            <span class="phone-icon"></span>
            <input class="dlargeinput" type="text" id="loginmobile" name="loginmobile" placeholder="手机号" value=""/>
        </div>
        <div class="largeinputbox small-top clearfix">
            <div class="dinput fl" >
                <span class="verification-icon"></span>
                <input class="dsmallinput" type="text" id="imagecode" placeholder="图形验证码" value=""/>
            </div>
            <div class="yz-code fr">
                <img src=""  id="loginauthimage" title="点击刷新" />
            </div>
        </div>
        <div class="largeinputbox small-top clearfix" id="maerrordiv">
            <div class="dinput fl" id="maerrordiv">
                <span class="password-icon"></span>
                <input class="dsmallinput" type="text" id="loginphonecode" name="loginphonecode" placeholder="短信验证码" value=""/>
            </div>
            <div class="yz-code fr">
                <input class="sendnumber defaultsend" type="button" id="getloginphonecode" name="getloginphonecode" value="获取验证码"/>
            </div>
        </div>
        <div class="logincheckbox large-top clearfix">
            <label class="fl">
                <input class="selectcheckbox" type="checkbox" name="rememberloginstate" checked="checked" value=""/>自动登录
            </label>
        </div>
        <div class="logincheckbox large-top clearfix"><font>无需注册，您可用手机号和验证码直接登录!</font></div>
        <div class="btn-wrap btnpdt20">
            <a href="javascript:void(0)" id="loginbymado">登录</a>
        </div>
    </div>
    <!-- 手机登陆 end  -->
    <!-- 密码登陆 start -->
    <div class="login-input" id="loginbyupdiv" name="loginbyupdiv" style="display:none;">
        <div class="input">
            <span class="user-icon"></span>
            <input class="dlargeinput" type="text"  id="loginnamein" name="loginnamein"  placeholder="手机号/邮箱/账号" value=""/>
        </div>
        <div class="input large-top" >
            <span class="password-icon"></span>
            <input class="dlargeinput" type="password" id="loginpassin" name="loginpassin" placeholder="密码" value=""/>
            <!--<span class="errorprompt">密码输入错误</span>-->
        </div>
        <div class="largeinputbox small-top clearfix" id="uperrordiv">
            <div class="dinput fl" id="yui_3_5_1_1_1434542056373_108">
                <span class="verification-icon"></span>
                <input type="text" class="dsmallinput" id="imagecode1" placeholder="图形验证码" value="">
            </div>
            <div class="yz-code fr">
                <img src="" id="loginauthimage1" title="点击刷新">
            </div>
        </div>
        <div class="logincheckbox large-top clearfix">
            <label class="fl">
                <input class="selectcheckbox" type="checkbox" name="rememberpass" checked="checked" value=""/>自动登录
            </label>
        </div>
        <div class="btn-wrap btnpdt20">
            <a href="javascript:void(0)" id="loginbyupdo">登录</a>
        </div>
        <p class="otherwaytitle mt20">没有账号密码请 <a href="javascript:void(0)" id="changeloginbymwa">使用手机验证码登录</a></p>
    </div>
    <!-- 密码登陆 end -->
    <ul class="otherway">
        <li>
            <a class="phoneway_current" id="changeloginbyma" href="javascript:void(0)">手机验证码</a>
        </li>
        <li>
            <a class="mayiway" id="changeloginbyup" href="javascript:void(0)">账号密码</a>
        </li>
        <li>
            <a class="qqway" id="loginbyqq" href="javascript:void(0)" >QQ号码</a>
        </li>
        <li>
            <a class="sinaway" id="loginbysina" href="javascript:void(0)" >新浪微博</a>
        </li>
    </ul>
</div>
<!-- 登录弹窗 END -->
<!--公共尾部结束-->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jQuery.md5.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/login.js?v=20151027"></script>

<script src="http://sta.ganji.com/cgi/ganji_sta.php?file=ganji&documentDomain=mayi.com&cookieDomain=mayi.com"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function getCookie(objName) {
            var arrStr = document.cookie.split("; ");
            for(var i = 0;i < arrStr.length;i ++){
                var temp = arrStr[i].split("=");
                if(temp[0] == objName) return unescape(temp[1]);
            }
        }

        function deleteCookie(name, path) {
            var name = escape(name);
            var expires = new Date(0);
            path = path == "" ? "" : ";path=" + path;
            document.cookie = name + "=" + ";expires=" + expires.toUTCString() + path;
        }

        //修正cookie中的MayiUserInfo
        var user = getCookie('MayiUserInfo');
        if (user != null) {
            var pattern = new RegExp(/^\".+\"$/);
            if (pattern.exec(user)) {
                user = user.substring(1,user.length-1);
                deleteCookie('MayiUserInfo', '/');
                document.cookie = "MayiUserInfo=" + escape(user) + ";path=/;domain=.mayi.com";
            }
        }
        //未登录的登录后才能显示站内信
        //加载IM
        //GJ.use('tool/webim_v1/js/webim.js');
    });

    function sinaWeibo(){
        window.open("http://widget.weibo.com/dialog/follow.php?fuid=2357071361");
    }
</script>
<style type="text/css">
    .email{ position:fixed; bottom:0px; right:0px; width:190px; height:35px; line-height:35px; background:#e8e8e8; border:1px #CCCCCC solid; border-right:none; z-index:400000000;}
    .email a{ padding-left:10px; float:left; font-weight:normal; font-family:"宋体"; font-size:12px; width:120px; box-shadow:1px 0px 0px 0px #ccc; border-right:1px #fff solid;}
    .email a img{ margin:12px 3px 0px 0px; float:left; width:16px; height:12px;}
    .imjs-status{color:#55aa39 !important}
    #webIM ul.tab-im .offline-icon,#webIM ul.tab-im .online-icon{background-position:0 !important}
    #webIM .all-list a.on, #webIM .all-list a.off{background-position:-239px -297px !important;color:#2883C3 !important}
    #webIM ul.tab-im a{color:#2883C3 !important}
</style>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<!-- load statistics js -->
<!--[statistics start]-->
<script src="http://staticnew.mayi.com/resources/js/mayi/mayi.js" type="text/javascript" charset="utf-8"></script>

<!-- 蚂蚁统计所需js -->
<script type="text/javascript">
    var _maq = _maq || [];
    _maq.push(['_setAccount', 'mayi']);
    (function ()
    {
        var ma = document.createElement('script');
        ma.type = 'text/javascript';
        ma.async = true;
        ma.src ='http://staticnew.mayi.com/resourcesWeb/js/statistics/stmy.js?v=1311111130';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ma, s);
    })();
</script>

<!--GA 统计所需js 新  2015-06-03-->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-63543541-1', 'auto');
    ga('send', 'pageview');

</script>

<!--GA 统计所需js       
<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26666284-1']);
		_gaq.push(['_setDomainName', '.mayi.com']);
		_gaq.push(['_addIgnoredRef', 'mayi.com']);
		_gaq.push(['_addOrganic', 'sogou', 'query']);
		_gaq.push(['_addOrganic', 'youdao', 'q']);
		_gaq.push(['_addOrganic', 'soso', 'w']);
		_gaq.push(['_addOrganic', 'baidu', 'word']);
		_gaq.push(['_addOrganic', 'baidu', 'q1']);
		_gaq.push(['_addOrganic', 'ucweb', 'keyword']);
		_gaq.push(['_addOrganic', 'ucweb', 'word']);
		_gaq.push(['_addOrganic', '114so', 'kw']);
		_gaq.push(['_trackPageview']);
		(function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script> -->

<!--GANJI 统计所需js-->
<script type="text/javascript">
    var SPEED_RENDER_END = new Date().getTime();
    var gjchparamele = document.getElementById('gjchparam');
    var __gjchparam__ = (gjchparamele?gjchparamele.value:'')||"";

    var gcparamele = document.getElementById('gcparam');
    var __gcparam__ = (gcparamele?gcparamele.value:'')||"";

    var __gjchver__ = "";
    var __gjjs__ = '';
    __gjjs__ = 'http://sta.ganji.com/cgi/ganji_sta.php?file=ganji&documentDomain=mayi.com&cookieDomain=mayi.com';
    (function(){
        if(__gjchparam__){
            if(undefined == window.GJ){
                document.write(unescape("%3Cscript src='"+__gjjs__+"' type='text/javascript' %3E%3C/script%3E"));
            }
            var timer = null;
            var counter = 1000;
            var gjlog = function(from){
                if(undefined == window.__GJ_LOADED__){
                    timer && clearTimeout(timer);
                    if(counter--){
                        timer = setTimeout(gjlog, 20);
                    }
                }else{
                    GJ.use('log_tracker', function(){
                        GJ.LogTracker.gjch = __gjchparam__;
                        GJ.LogTracker.gjchNew = __gcparam__;
                        if(typeof(__gjchver__) !== 'undefined' && __gjchver__ != ''){
                            GJ.LogTracker.gjchver = encodeURI(__gjchver__);
                        }
                        GJ.LogTracker.trackPageView();
                        GJ.LogTracker.bindSpeedEvent();
                        GJ.LogTracker.trackSpeedEvent();
                    });
                }
            };
            gjlog();
        }
    })();
</script>

<!-- 百度统计所需js
<div style="display:none;">
<!--
	<script type="text/javascript"> 
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0294bbb72b1c6a6b342da076397c9af2' type='text/javascript'%3E%3C/script%3E"));
	</script>
 -->

<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?0294bbb72b1c6a6b342da076397c9af2";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<!-- SOUGOU 统计所需js -->
<script  type="text/javascript">
    var _sogou_sa_q = _sogou_sa_q || [];
    _sogou_sa_q.push(['_sid', '90723-93231']);
    (function() {
        var _sogou_sa_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");
        var _sogou_sa_src=_sogou_sa_protocol+"hermes.sogou.com/sa.js%3Fsid%3D90723-93231";
        document.write(unescape("%3Cscript src='" + _sogou_sa_src + "' type='text/javascript'%3E%3C/script%3E"));
    })();
</script>
</div>

<!--[statistics end]--><!-- load End--><!-- 添加账号 弹窗 START -->
<div class="alert-box" id="savepaymentdiv" name="savepaymentdiv" style="display:none;">
    <input  type="hidden" name="paymentidhi" id="paymentidhi" value="0" />
    <input  type="hidden" name="bankidhi" id="bankidhi" value="0" />
    <input  type="hidden" name="bankprovinceidhi" id="bankprovinceidhi" value="0" />
    <input  type="hidden" name="bankcityidhi" id="bankcityidhi" value="0" />
    <input  type="hidden" name="bankbranchidhi" id="bankbranchidhi" value="0" />
    <div class="alert-title">
        添加账号
    </div>
    <a class="alert-close" id="savepaymentlayerclose" name="savepaymentlayerclose" rel="nofollow"onclick="" href="javascript:void(0)"></a>
    <div class="alert-con">
        <div class="add-account">
            <a href="javascript:void(0)" id="showalipayui" name="showalipayui" class="addcurrent">支付宝</a>
            <a href="javascript:void(0)" id="showtenpayui" name="showtenpayui">财付通</a>
            <a href="javascript:void(0)" id="showbankcardui" name="showbankcardui">银行卡</a>
        </div>
        <div class="add-con">
            <ul class="alipay">
                <li id="aliaccountnoli">* 支付宝账号：<input class="add-input" type="text" name="aliaccountno" id="aliaccountno" value=""/>
                    <span class="tooltip">忘记填写支付宝账号啦</span>
                </li>
                <li id="aliaccountnameli">* 支付宝姓名：<input class="add-input" type="text" name="aliaccountname" id="aliaccountname" value=""/></li>
            </ul>
            <ul class="tenpay">
                <li id="tenaccountnoli">* 财付通账号：<input class="add-input" type="text" name="tenaccountno" id="tenaccountno" value=""/></li>
                <li id="tenaccountnameli">* 财付通姓名：<input class="add-input" type="text" name="tenaccountname" id="tenaccountname"  value=""/></li>
            </ul>
            <ul class="bankcard">
                <li id="bankli" >* 开户银行名称：
                    <select class="add-select" id="bankselect">
                        <option value="0">请选择开户银行</option>
                    </select>
                    <!--<span class="tooltip ltleft">请选择开户银行</span>-->
                </li>
                <li id="bankprovinceli">* 开户银行省份：
                    <select class="add-select" id="bankprovinceselect">
                        <option value="0" >请选择</option>
                    </select>
                </li>
                <li id="bankcityli">* 开户银行城市：
                    <select class="add-select" id="bankcityselect">
                        <option value="0" >请选择</option>
                    </select>
                </li>
                <li id="bankbranchli">* 开户支行名称：
                    <!--<span id="selectDiv"  style="display:inline-block;width:175px;overflow:hidden;">-->
                    <!--<span id="selectDiv"  style="width:175px;overflow:hidden;">-->
                    <select class="add-select" id="bankbranchselect">
                    </select>
                    <!--</span>-->
                </li>
                <li id="bankbranchtextli"  style="display:none">* 开户支行名称：<input class="add-input" type="text" name="bankbranchtext" id="bankbranchtext" />
                </li>
                <li id="bankaccountli" >* 开户银行账号：<input class="add-input" type="text" name="bankaccountid" id="bankaccountid" value=""/>
                    <!-- onselectstart="return false" oncopy="return false;" onpaste="return false" id="bankaccountid" value=""/>-->
                </li>
                <li id="rebankaccountli">* 再次确认账号：<input class="add-input" type="text" name="rebankaccountid" id="rebankaccountid" oncontextmenu="window.event.returnValue=false" onpaste="return false" value=""/></li>
                <!-- oncontextmenu="window.event.returnValue=false" oncopy="return false;" onpaste="return false" value=""/></li>-->
                <li>* 账号公私类型：
                    <select class="add-select"  id="pubpriselect">
                        <option selected="selected" value="2">对私账号</option>
                        <option value="1">对公账号</option>
                    </select>
                </li>
                <li id="bankaccountnameli">* 银行开户姓名：<input class="add-input" type="text" name="bankaccountname" id="bankaccountname" value=""/></li>
            </ul>
        </div>
        <div class="btn-box">
            <input class="checking-btn mid-btn" type="button" paytype="alipay" name="savepaymentbtn" id="savepaymentbtn" value="保存账号"/>
        </div>
    </div>
</div>
<!-- 添加账号 弹窗 END -->
<!-- 手机账号 弹窗 Start -->
<!-- 原无手机，文本框填入新手机验证 弹窗 -->
<div id="newmobilevaliddiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="newmobilevaliddivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <ul class="alert-list">
            <li>
                <label class="alert-label alert-labellarge">
                    请输入手机号：
                </label>
                <input class="alert-input" type="text" name="txtnewmobile" id="textnewmobile" value=""/>
                <?php /*<button class="alert-btn" id="txtnewgetcode">获取验证码</button>*/ ?>
                <a id="validmobile" onclick="fun_code()" class="checking" href="javascript:void(0)">[获取手机验证码]</a>
<span id="code"></span>
            </li>
            <li>
                <label class="alert-label alert-labellarge">
                    请输入验证码：
                </label>
                <input class="alert-input" type="text" name="txtnewcode" id="txtnewcode" value=""/>
            </li>
        </ul>
        <div class="btn-box">
            <input class="checking-btn mid-btn" type="button" name="bandtxtnewmobile" id="bandtxtnewmobile" value="马上验证"/>
        </div>
    </div>
</div>

<!-- 原有手机号 验证（修改手机号码 原手机号码验证） -->
<div id="inputmobilevaliddiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="inputmobilevaliddivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <ul class="alert-list">
            <li>
                <label class="alert-label alert-labellarge">
                    手机号码：
                </label>
                <span class="imporant" id="inputmobile"></span>
            </li>
            <li>
                <label class="alert-label alert-labellarge">
                    请输入验证码：
                </label>
                <input class="alert-input" type="text" name="inauthcode" id="inauthcode" value=""/>
                <button class="alert-btn" id="inmgetmobilecode">获取验证码</button><!-- alertactive-btn--><!-- 重新获取 -->
            </li>
        </ul>
        <div class="btn-box">
            <input class="checking-btn mid-btn" type="button" id="dovalidinmobile" name="dovalidinmobile" value="马上验证"/>
        </div>
    </div>
</div>

<!-- 输入新手机号码 弹窗 （修改手机号码 原手机号码已验证，新号码获取验证码） -->
<div id="setnewmobilediv" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="setnewmobiledivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <ul class="alert-list paddingleft">
            <li>
                <span class="rigth"></span>
                <span class="imporant">原手机号已验证，请输入新手机号码</span>
            </li>
            <li>
                <label class="alert-label alert-labelmid">
                    新手机号码：
                </label>
                <input class="alert-input" type="text" name="newmobile" id="newmobile" value=""/>
            </li>
        </ul>
        <div class="btn-box">
            <input class="checking-btn mid-btn" type="button" id="getnewmobilecode" name="getnewmobilecode" value="获取验证码"/>
        </div>
    </div>
</div>

<!-- 新手机号 验证  （修改手机号码 原手机号码已验证，新号码验证）-->
<div id="onewmobilevaliddiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="onewmobilevaliddivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <ul class="alert-list">
            <li>
                <label class="alert-label alert-labellarge">
                    手机号码：
                </label>
                <span class="imporant" id="newmobilesp"></span>
            </li>
            <li>
                <label class="alert-label alert-labellarge">
                    请输入验证码：
                </label>
                <input class="alert-input" type="text" name="newmobileauthcode" id="newmobileauthcode" value=""/>
                <button class="alert-btn" id="newmgetmobilecode" name="newmgetmobilecode">获取验证码</button><!-- alertactive-btn--><!-- 重新获取 -->
            </li>
        </ul>
        <div class="btn-box">
            <input class="checking-btn mid-btn" type="button" id="dovalidnewmobile" name="dovalidnewmobile" value="验证"/>
        </div>
    </div>
</div>

<!-- 手机验证成功 -->
<div id="validmobilesucdiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="validmobilesucdivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <dl class="proving">
            <dt class="succeed"></dt>
            <dd>恭喜验证成功！</dd>
        </dl>
        <div class="btn-box">
            <input class="checking-btn large-btn" type="button" name="" value="关闭"/>
        </div>
    </div>
</div>

<!-- 手机验证失败 -->
<div id="validmobilefail" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="validmobilefailclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <dl class="proving">
            <dt class="fail"></dt>
            <dd class="fail">验证失败！</dd>
        </dl>
        <div class="btn-box">
            <input class="checking-btn large-btn" type="button" name="" value="关闭"/>
        </div>
    </div>
</div>
<!-- 手机验证 END -->

<!-- 备用手机删除提示START -->
<div id="delothermobilesucdiv" class="alert-box" style="display: none;width:370px;">
    <div class="alert-title">
        提示
        <a id="delothermobilesucdivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <dl class="proving" style="padding-left:110px;">
            <p>确定删除备用手机号吗？</p>
        </dl>
        <div class="btn-box" style="padding-bottom:30px;">
            <input class="checking-btn large-btn" style="float:left;margin-left:65px;width:90px;" type="button" name="delothermobileconfirm" id="delothermobileconfirm" value="确定"/>
            <input class="checking-btn large-btn" style="width:90px;color:#999;border:1px solid #999;background:#f5f5f5;" type="button" name="delothermobilecancel" id="delothermobilecancel" value="取消"/>
        </div>
    </div>
</div>
<!--备用手机删除提示 END-->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/room_location.js"></script>
</body>
</html>
<script>
    //获取手机验证码
    function fun_code(){
        var textnewmobile=document.getElementById('textnewmobile').value;

        var ajax=new XMLHttpRequest();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&ajax.status==200){
                if(ajax.responseText==1){
                    document.getElementById('code').innerHTML='请尽快输入您的验证码';
                }else{
                    document.getElementById('code').innerHTML='无法获得验证码';
                }
            }
        }
        ajax.open('post','<?php echo e(URL('fun_code')); ?>','true');
        ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        ajax.send('phone='+textnewmobile);
    }
</script>