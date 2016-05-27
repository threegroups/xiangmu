<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=8,chrome=1" />
    <meta name="keywords" content=""/>
    <meta name="description" content="" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/global.css?V=201508071525" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/PCenter.css?V=201508071525" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/collection.css" rel="stylesheet" type="text/css">
    <link href="http://staticnew.mayi.com/resourcesWeb/css/account.css?V=201508071525" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/landlord/manage_pub.css" rel="stylesheet" type="text/css" />
    <!-- new header -->
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet"  type="text/css">
    <title>账户管理</title>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ajaxfileupload.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/account.js?v=201601261735"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/regx/idcard.js"></script>

    <!-- 图片裁剪js -->
    <script  type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ui/jquery-ui-1.9.2.custom.min.js" ></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/CutPic.js?V=201508071525"></script>
    <script type="text/javascript">
        $(function(){
            var CenterTab = $('.centerTab li')
            CenterTab.each(function(e){
                CenterTab.eq(e).click(function(){
                    $(this).addClass('active').siblings().removeClass('active');
                    $('.MtList').eq(e).show().siblings().hide();
                });
            });
            //添加账号切换效果
            $('.add-con ul:first').show();
            $('.add-account a').each(function(e){
                $('.add-account a').eq(e).click(function(){
                    $(this).addClass('addcurrent').siblings().removeClass('addcurrent');
                    $('.add-con').children('ul').eq(e).show().siblings().hide();
                    return false;
                });
            });

            $('#papertype').change(function(){
                if($(this).val()==414 ){
                    $('#countryli').css('display','block');
                    var country = $('#country').val();
                    if(country==1){
                        $('#nationli').css('display','block');
                        //$('#locationli').css('display','block');
                        $('#housetownli').css('display','block');
                    }else{
                        $('#nationli').css('display','none');
                    }
                }else{
                    $('#countryli').css('display','none');
                    $('#nationli').css('display','block');
                    //$('#locationli').css('display','block');
                    $('#housetownli').css('display','block');
                }
            });

            $('#country').change(function(){
                if($(this).val()==1||$(this).val()==0){
                    $('#nationli').css('display','block');
                    //$('#locationli').css('display','block');
                    $('#housetownli').css('display','block');
                }else{
                    $('#nationli').css('display','none');
                    //$('#locationli').css('display','none');
                    $('#housetownli').css('display','none');
                }
            });
        });

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
            //var imgSize = 1024 * 100; //最大100K
            //var img = new Image();
            if(file.value != ""){
                //    img.onreadystatechange = function(){
                //        if(img.readyState == "complete"){
                //            if(img.fileSize <=0 || img.fileSize > imgSize){
                //                alert("当前文件大小" + img.fileSize / 1024 + "KB, 超出最大限制 " + imgSize / 1024 + "KB");
                //                return false;
                //            }else{
                //                alert("OK");
                //                return true;
                //            }
                //        }
                //    }
                //return true;
            }else{
                layer.alert("请选择上传的文件!",8);
                return false;
            }
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
    <a href="/"><div class='asote head_left'></div></a>
    <div class='head_cnt relave'>
        <span class='search'></span>
        <ul class="nav_R asote nav_right">
            <li>
                <div class="showinfo">
                    <a href="javascript:menufrozen(851655010,'/tenant/851655010/orders','user')" target="_self">
                        <img src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_35x35c.jpg" id="aaa" class="user_img">
                        <?php /*<img  style="width:100px;height:100px;" src="http://localhost/laravel-master2/public/uploads/images/<?php echo e($user); ?>" height="10px" width="10px"/>*/ ?>
                        <span class="name" id="head_nickname"></span></a>
                    <div class="head_pop">
                        <div class="pop_column">
                            <p><a href="javascript:menufrozen(851655010,'/tenant/851655010/orders','user')" target="_self" id="myorder" rel="nofollow">我的订单</a></p>
                            <p><a href="javascript:menufrozen(851655010,'/user/tenant/accountmanager','user')" target="_self" id="myorder" rel="nofollow" class="slideactive">我的账户</a></p>
                            <p><a href="javascript:menufrozen(851655010,'/user/tenant/mycollection','user')" target="_self" id="mycollect" rel="nofollow">我的收藏</a></p>
                            <p><a href="javascript:menufrozen(851655010,'/user/tenant/msgmanager','user')" target="_self" id="mymsg" rel="nofollow">消息通知</a></p>
                            <p class="textCt"><a href="javascript:void(0)" id="loginoutbut" target="_self" class="stclick" clicktag="1_6">退出登录</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="showinfo">
                    <a href="javascript:loginowner(851655010)" target="_self" class="stclick">我是房东</a>
                    <div class="head_pop">
                        <div class="pop_column plr10">
                            <p><a href="javascript:menufrozen(851655010,'/landlord/851655010/orders','landlord')">订单管理</a></p>
                            <p><a href="javascript:menufrozen(851655010,'/user/landlord/roommanager','landlord')">房源管理</a></p>
                            <p><a href="javascript:menufrozen(851655010,'/landlord/851655010/settlements','landlord')">结算管理</a></p>
                            <p><a href="javascript:menufrozen(851655010,'/user/landlord/msgmanager','landlord')">消息通知</a></p>
                            <p><a href="javascript:menufrozen(851655010,'/user/landlord/accountmanager','landlord')">账户管理</a></p>
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
                <a rel="nofollow" href="javascript:publish(851655010)" class="room-btn f16 t-center" >免费发布房源</a>
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
<input  type="hidden" name="uid" id="uid" value="851655010" />
<input  type="hidden" name="loginurl" id="loginurl" value="none" />
<input type="hidden" name="head_userName" id="head_userName" value="<?php
//session_start();
echo $_SESSION['name']?>">
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
<input type="hidden" id="MAYIUID" value="851655010" />
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

</html>	<!-- Header END -->

<!-- Content -->
<div class="main">
    <style type="text/css">
        .zm_complete{cursor:pointer;}
        .zhima_des{width:274px;padding-bottom:20px;position:absolute;right:0;top:26px;z-index:9;line-height:20px;border:1px solid #e0e0e0;box-shadow: 0 0 3px 2px #EAEAEA;display:none;background-color: #fff;}
        .zhima_green{background-color:#6ac690;color:#fff;padding:15px;box-sizing:border-box;}
        .zm_top{height:84px;}
        .safedetails{position:fixed;width: 100%;height: 100%;z-index: 300000;display:none;}
        .surveYY {background: #000;width: 100%;height: 100%;opacity: 0.7;position: fixed;top: 0px;left: 0px;}
        .shenfen_info,.shouquan_sucess{left: 50%;margin-left: -192px;top: 50%;margin-top: -150px;position: fixed;z-index: 10000;background-color: #FFF;border-radius: 3px;padding-bottom:30px;display:none;}
        .dp_header{line-height: 50px;border-bottom: 1px solid #dce0e0;text-align: center;}
        .shenfen_info,.shouquan_sucess{width:385px;}
        .name_input,.shenfen_input{border:1px solid #d9d9d9;width:220px;height:36px;box-sizing:border-box;padding:0 10px;display:block;margin:10px auto 5px;}
        .green_button{background-color:#22bb62;color:#fff;text-align:center;cursor:pointer;}
        .shouquan,.xuanfang{width:140px;height:36px;line-height:36px;margin:10px auto;display:block;}
        .alert_word{color:#ff5d51;margin-left:92px;display:none;}
        .close_current{width:16px;height:16px;position:absolute;top:5px;right:7px;background:url(http://staticnew.mayi.com/resourcesWeb/images/xclose_btn.png) no-repeat;cursor:pointer;}
        #xinyong_score{color:#22bb62;font-size:30px;}
        .c322c27{color:#322c27 !important;}
    </style>
    <ul class="breadcrumb clearfix">
        <li><a href="/tenant/851655010/orders">我是房客</a> <span class="divider">》</span></li>
        <li>账户管理</li>
    </ul>

    <div class="personalCenter clearfix">
        <!-- Center-sidebar -->
        <ul class="center-sidebar">
            <li><a   href="/tenant/851655010/orders">订单管理<span class="ddgl" ></span></a></li>
            <!--<li><a   href="/user/tenant/commentmanager.html">点评管理<span class="dpgl" ></span></a></li>-->
            <li><a   href="/user/tenant/msgmanager">消息通知<span class="xxtz" ></span></a></li>
            <li><a class="slideactive"   href="/user/tenant/accountmanager">账户管理<span class="zhgl_current" ></span></a></li>
            <li><a    href="/user/tenant/mycollection">我的收藏<span class="save_Li" ></span></a></li>


        </ul>
        <script type="text/javascript">
            //初始化样式展示
            $(document).ready(function(){
                $.ajax({
                    url : "/user/getLastAuditDate.do",
                    type : 'POST',
                    async:true,
                    dataType:'json',
                    timeout: 3000,
                    success : function(data){
                        var lastAuditTime=data;
                        var cookietime = -1;
                        var arr = document.cookie.split("; ");
                        for(var i=0,len=arr.length;i<len;i++){
                            var item = arr[i].split("=");
                            if(item[0]=="MAYI_LA_TIME"){
                                cookietime=item[1];
                                break;
                            }
                        }
                        if(lastAuditTime == 0 || cookietime > lastAuditTime){
                            $(".fdshop").hide();
                            $(".fdshop").remove();
                        }else{
                            $(".fdshop").show();
                        }
                    }
                });
            });
        </script>
        <!-- Center-sidebar END -->
        <div class="centerCon">
            <ul class="centerTab">
                <li class="active">个人信息</li>
                <li>密码设置</li>
                <li id="promotionli" name="promotionli">优惠信息</li>
            </ul>
            <div class="accountMt clearfix">
                <!-- 个人信息 -->
                <input  type="hidden" name="issetpass" id="issetpass" value="false" />
                <input  type="hidden" name="isbandmobile" id="isbandmobile" value="false" />
                <input  type="hidden" name="usertype" id="usertype" value="tenant" />
                <input  type="hidden" name="bjlandlord" id="bjlandlord" value="0"/>
                <div  class="MtList" style="display:block;">
                    <div class="avatar-box">
                        <?php /*<?php foreach($user as $v): ?>*/ ?>
                        <div class="avatar">

                            <?php /*<img id="headimage" style="width:100px;height:100px;" src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_110x110c.jpg" alt=""/>*/ ?>
                            <img  style="width:100px;height:100px;" src="http://localhost/laravel-master/public/uploads/images/<?php echo e($user); ?>" alt=""/>

                        </div>
                        <?php /*<?php endforeach; ?>*/ ?>
                        <p>
                        <form method="POST" action="<?php echo e(URL('up_tou')); ?>" enctype="multipart/form-data">

                            修改头像： <input type="file" name="myfile" />

                            <input type="submit" name="submit" value="Submit" />

                        </form>
                        <?php /*<a id="upheadimgdo" class="alertAvatar" rel="nofollow"href="javascript:void(0)">[修改头像]</a>*/ ?>
                        </p>

                    </div>
                    <form action="<?php echo e(URL('up_users')); ?>" method="post" onsubmit="return fun_all()">
                        <div class="tabCon">
                            <ul class="userInfo">
                                <li class="clearfix"><span class="infoTitle">用 &nbsp;户&nbsp;名：</span>*<?php
                                    echo $_SESSION['name']?></li>
                                <li class="clearfix">
                                    <span class="infoTitle">昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：</span>
                                    <input class="personLargeInput" type="text" name="nickname" placeholder="2-10个汉字"  id="y_nickname" value="" style="width:276px;" onfocus="clear_error('s_nickname')" onblur="fun_nickname()"/><span id="s_nickname"></span>

                                </li>
                                <li class="clearfix">
                                    <span class="infoTitle">真实姓名：</span>
                                    <input class="personLargeInput" type="text" name="realname" id="real_name" placeholder="2-10个汉字" value="" style="width:276px;" onfocus="clear_error('s_realname')" onblur="fun_realname()"/><span id="s_realname"></span>
                                    <span class="zm_complete blue ml10" id="zm_complete"><img src="http://staticnew.mayi.com/resources/images/zm_logo.png" style="vertical-align:middle;margin-right:5px;margin-top:-2px;"><span id="zhima_score_result">芝麻信用授权</span></span>
                                    <span class="namenotice">请务必使用真实姓名，否则影响我们向您的账户支付</span>
                                    <div class="zhima_des" id="zmsq_des" style="display: none;">
                                        <p class="zm_top zhima_green">芝麻信用是依法成立的独立信用评估及管理机构。授权后得到分数越高，代表信用越好。</p>
                                        <div class="zm_bottom plr10 c322c27">在蚂蚁短租，若您的芝麻信用分≥600，可享受优质房源入住免押金的特权服务（免押金房源会有相应标示）</div>
                                        <a class="green_button shouquan">立即授权</a>
                                        <div class="t-center">
                                            <a href="/zmxy/introduce" target="_blank" class="blue clearfloat">了解更多&gt;&gt;</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="userInfo">
                                <li class="clearfix">
                                    <span class="infoTitle">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</span>
                                    <select class="ccitySelect" id="sex" name="sex">
                                        <option value="" >-请选择-</option>
                                        <option value="男" selected="selected">男</option>
                                        <option value="女" >女</option>
                                    </select>
                                </li>
                                <li class="clearfix">
                                    <span class="infoTitle">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</span>
                                    <input class="personLargeInput" type="text" name="email" id="y_email" value=""   onfocus="clear_error('s_email')" onblur="fun_email()"/><span id="s_email"></span>
                                    <a id="validemail" class="checking" rel="nofollow"href="javascript:void(0)"></a>
                                    <!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
                                </li>
                                <li class="clearfix">
                                    <span class="infoTitle">手机号码：</span>
                                    <input class="personLargeInput" type="text" name="mobile" id="y_mobile" value=""  style="color:#000;" onfocus="clear_error('s_phone')" onblur="fun_phone()"/><span id="s_phone"></span>
                                    <a id="validmobile" class="checking"rel="nofollow" href="javascript:void(0)"></a>
                                    <!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
                                </li>
                                <?php /*<li class="clearfix" id="addLi" >*/ ?>
                                <?php /*<span class="infoTitle"  style="margin-left:-27px;width:107px;">备用手机号码： </span>*/ ?>
                                <?php /*<a href="javascript:void(0)" name="addMobile" id="addMobile" class="addAdress-btn" style="float:left;line-height:28px;margin-top:0px;">+添加</a>*/ ?>
                                <?php /*<span style="margin-left:50px;padding:1px 10px;position:absolute;left:135px;">填写备用手机号码，以便特殊情况下可及时联系到您</span>*/ ?>
                                <?php /*</li>*/ ?>
                                <?php /*<li class="clearfix" id="otherLi"  style="display:none">*/ ?>
                                <?php /*<span class="infoTitle"  style="margin-left:-27px;width:107px;">备用手机号码：</span>*/ ?>
                                <?php /*<input style="color:#000;" class="personLargeInput" type="text" name="othermobile" id="othermobile" value=""  />*/ ?>
                                <?php /*<a id="updateothermobile" class="checking"rel="nofollow" href="javascript:void(0)">[修改手机]</a>*/ ?>
                                <?php /*<a id="delothermobile" class="checking" href="javascript:void(0)">[删除]</a>*/ ?>
                                <?php /*</li>*/ ?>

                            </ul>
                            <div class="submit-wrap">
                                <?php /*<a id="saveuser" class="save-btn" rel="nofollow"href="javascript:void(0)">保存</a>*/ ?>
                                <input type="submit" value="保存" class="save-btn"/>

                            </div>
                        </div>
                    </form>
                </div>
                <script>
                    //清除错误提示
                    function clear_error(obj){
                        document.getElementById(obj).innerHTML="";
                    }
                    //验证手机号
                    function  fun_phone(){
                        var y_mobile=document.getElementById('y_mobile').value;
                        var reg=/^1(3|5|8)\d{9}$/;
                        if(y_mobile!=""){
                            if(reg.test(y_mobile)){
                                document.getElementById('s_phone').innerHTML="正确";
                                return true;
                            }else{
                                document.getElementById('s_phone').innerHTML="以18，13，15开头的11位数字";
                                return false;
                            }
                        }else{
                            document.getElementById('s_phone').innerHTML="不能为空";
                            return false;
                        }

                    }
                    //验证邮箱
                    function  fun_email(){
                        var y_email=document.getElementById('y_email').value;
                        var reg=/^\w*@\w+(.com|.net)$/;
                        if(y_email!=""){
                            if(reg.test(y_email)){
                                document.getElementById('s_email').innerHTML="正确";
                                return true;
                            }else{
                                document.getElementById('s_email').innerHTML="格式不对";
                                return false;
                            }
                        }else{
                            document.getElementById('s_email').innerHTML="不能为空";
                            return false;
                        }

                    }
                    //真实姓名
                    function  fun_realname(){
                        var real_name=document.getElementById('real_name').value;
                        var reg=/^[\u4e00-\u9fa5]{2,10}$/;
                        if(real_name!=""){
                            if(reg.test(real_name)){
                                document.getElementById('s_realname').innerHTML="正确";
                                return true;
                            }else{
                                document.getElementById('s_realname').innerHTML="2-10个汉字";
                                return false;
                            }
                        }else{
                            document.getElementById('s_realname').innerHTML="真实姓名不能为空";
                            return false;
                        }

                    }
                    //验证昵称
                    function  fun_nickname(){
                        var nickname=document.getElementById('y_nickname').value;
                        var reg=/^[\u4e00-\u9fa5]{2,10}$/;
                        if(nickname!=""){
                            if(reg.test(nickname)){
                                document.getElementById('s_nickname').innerHTML="正确";
                                return true;
                            }else{
                                document.getElementById('s_nickname').innerHTML="2-10个汉字";
                                return false;
                            }
                        }else{
                            document.getElementById('s_nickname').innerHTML="昵称不能为空";
                            return false;
                        }

                    }
                    //验证所有
                    function fun_all(){
                        if(fun_email()&fun_nickname()&fun_phone()&fun_realname()){
                            return true;
                        }else{
                            return false;
                        }

                    }
                </script>
                <!-- 个人信息 END -->

                <!-- 收款账户 -->
                <!-- 收款账户 END -->

                <!-- 密码设置 START -->
                <div class="MtList">
                    <form action="<?php echo e(URL('up_pwd')); ?>" method="post" onsubmit="return fun_all()">

                        <input  type="hidden" name="issetpass" id="issetpass" value="false" />
                        <input  type="hidden" name="isbandmobile" id="isbandmobile" value="false" />
                        <ul class="userInfo">
                            <li class="clearfix"><span class="infoTitle">用 &nbsp;户&nbsp;名：</span> <?php
                                echo $_SESSION['name']?></li>
                            <li class="clearfix">
                                <span class="infoTitle">输入密码：</span>
                                <input type="password" value="" name="newpass" id="new_pass" class="personLargeInput" onblur="fun_pwd()" onfocus="clear_error('s_pwd')"/><span id="s_pwd"></span>
                                <?php /*<span class="prompt" id="newpassspan" name="newpassspan">6-16个字符</span>*/ ?>
                            </li>
                            <li class="clearfix">
                                <span class="infoTitle">确认密码：</span>
                                <input type="password" value="" name="repass" id="re_pass" class="personLargeInput" onblur="fun_pwd2()" onfocus="clear_error('s_pwd2')"/><span id="s_pwd2"></span>
                                <?php /*<span class="prompt" id="repassspan" name="repassspan">重复输入一次密码</span>*/ ?>
                                <!--<span class="prompterror">两次密码不一致</span>-->
                            </li>
                        </ul>
                        <div class="submit-wrap">
                            <?php /*<a class="save-btn" id="savepassbtn" name="savepassbtn"rel="nofollow" href="javascript:void(0)">保存</a>*/ ?>
                            <input type="submit" value="保存" class="save-btn"/>
                        </div>
                    </form>
                </div>
                <script>
                    //清除错误提示
                    function clear_error(obj){
                        document.getElementById(obj).innerHTML="";
                    }
                    function fun_pwd(){
                        var new_pass=document.getElementById('new_pass').value;
                        var reg=/^\w{6,15}$/;
                        if(new_pass!=""){
                            if(reg.test(new_pass)){
                                document.getElementById('s_pwd').innerHTML="正确";
                                return true;
                            }else{
                                document.getElementById('s_pwd').innerHTML="6-15个字符";
                                return false;
                            }
                        }else{
                            document.getElementById('s_pwd').innerHTML="不能为空";
                            return false;
                        }
                    }
                    //确认密码
                    function fun_pwd2(){
                        var re_pass=document.getElementById('re_pass').value;
                        var new_pass=document.getElementById('new_pass').value;
                        if(re_pass!=""){
                            if(re_pass==new_pass){
                                document.getElementById('s_pwd2').innerHTML="正确";
                                return true;
                            }else{
                                document.getElementById('s_pwd2').innerHTML="两次密码不一致";
                                return false;
                            }
                        }else{
                            document.getElementById('s_pwd2').innerHTML="不能为空";
                            return false;
                        }


                    }
                    //验证所有
                    function fun_all(){
                        if(fun_pwd2()&fun_pwd()){
                            return true;
                        }else{
                            return false;
                        }

                    }
                </script>



                <!-- 密码设置 END-->

                <!-- 优惠信息 -->
                <div class="MtList">
                    <ul class="selectoption clearfix">
                        <li><label><input class="selectradio" type="radio" name="SelectCoupon" value="0" checked="checked" />全部</label></li>
                        <li><label><input class="selectradio" type="radio" name="SelectCoupon" value="2"/>减免券</label></li>
                        <li><label><input class="selectradio" type="radio" name="SelectCoupon" value="1"/>代金券</label></li>
                    </ul>
                    <table class="gathering" id="promotiontable" name="promotiontable" >
                        <tbody>
                        <tr>
                            <th>序列号</th>
                            <th>类型</th>
                            <th>面值</th>
                            <th>
                                <select class="bordercolor" id="status">
                                    <option value="0">全部</option>
                                    <option value="2">已使用</option>
                                    <option value="1">未使用</option>
                                </select>
                            </th>
                            <th>有效期</th>
                            <th>备注</th>
                        </tr>
                        </tbody>
                    </table>

                    <div class="couponbox">
                        <h4>什么是减免券</h4>
                        <p>减免券是蚂蚁短租提供的一种优惠政策，当订单总额满足使用限额时，即可按优惠面值减免支付，例如：满100减10，
                            当订单总额大于等于100元时，即可在线上支付定金时使用该券减免10元。单张订单只能使用一张减免券，且不能与其
                            他任一券叠加使用。</p>
                        <h4>什么是代金券</h4>
                        <p>线上支付时可使用代金券减免支付，单张订单可以使用多张代金券，按面值总额减免，无使用限额。若代金券总额大于线上支付金额，则将差额部分退回。代金券不能与减免券叠加使用。</p>
                        <h4>如何获取减免券/代金券</h4>
                        <p>线上支付时可使用代金券减免支付，单张订单可以使用多张代金券。</p>
                    </div>
                </div>
                <!-- 优惠信息 END -->

            </div>
        </div>
    </div>
</div>
<!-- Content END -->


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
<script src="http://staticnew.mayi.com/resources/js/mayi/mayi.js" type="text/javascript" charset="utf-8"></script>	<!-- Footer END -->
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

<!--[statistics end]--><!-- load End-->
<!-- 个人信息修改 弹窗 START -->
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

<!-- 邮箱验证前进行权限验证 -->
<div id="permissionemaildiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        邮箱修改权限验证
        <a id="permissionemaildivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <ul class="alert-list">
            <li id="emobilevalidli" class="clearfix">
                <label class="alert-label alert-labellarge">
                    <input class="alert-radio" type="radio" name="evalidtype" id="emobilevalidin" value="mobilevalid" checked="checked" />手机验证码：
                </label>
                <input class="alert-input" type="text" id="emoblecode" name="emobilecode" value=""/>
                <button class="alert-btn" id="egetmobilecode">获取验证码</button>
                <!--<button class="alert-btn alertactive-btn"> -->
            </li>
            <li id="epassvalidli" class="clearfix">
                <label class="alert-label alert-labellarge">
                    <input class="alert-radio" type="radio" name="evalidtype" id="epassvalidin" value="passvalid"/> 账 户 密 码：
                </label>
                <input class="alert-input" type="password" id="epass" name="epass" value=""/>
            </li>
        </ul>
        <div class="btn-box">
            <input class="checking-btn mid-btn" type="button" id="edovalid" name="edovalid" value="马上验证"/>
        </div>
    </div>
    <div class="alert-notice">
        <p>1.认证后不可取消认证，可更改邮箱重新认证。</p>
        <p>2.新邮箱修改并通过认证后，可用于登录，旧邮箱不能继续使用。</p>
    </div>
</div>

<!--填写需验证的目标邮箱 -->
<div id="toemaildiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        验证邮箱
        <a id="toemaildivclose" class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <div class="goalmail">
            <label class="alert-label alert-labelmid">目标邮箱：</label>
            <input class="alert-input" style="width:200px;" type="text" name="toemail" id="toemail" value=""/>
        </div>
        <div class="btn-box">
            <input class="checking-btn mid-btn" type="button" name="sendemail" id="sendemail" value="发送认证邮件"/>
        </div>
    </div>
    <div class="alert-notice">
        <p>1.认证后不可取消认证，可更改邮箱重新认证。</p>
        <p>2.新邮箱修改并通过认证后，可用于登录，旧邮箱不能继续使用。</p>
    </div>
</div>

<!-- 查看目标邮箱 -->
<div id="viewemaildiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        验证邮箱
        <a id="viewemaildivclose" class="alert-close"rel="nofollow" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <div class="goalmail">
            请登录到您的邮箱 <a id="gomaila" class="gomail" href="javascript:void(0)" target="_blank"></a>  查收认证邮件
        </div>
        <div class="btn-box">
            <input class="checking-btn mid-btn" type="button" id="gomailb" name="gomailb" url="" value="现在去认证"/>
        </div>
    </div>
    <div class="alert-notice">
        <p>1.认证后不可取消认证，可更改邮箱重新认证。</p>
        <p>2.新邮箱修改并通过认证后，可用于登录，旧邮箱不能继续使用。</p>
    </div>
</div>

<!-- 邮箱认证成功提示 -->
<div id="validemailsucdiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        验证邮箱
        <a id="validemailsucdivclose" rel="nofollow"class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <dl class="proving">
            <dt class="succeed"></dt>
            <dd>恭喜邮箱认证成功！</dd>
        </dl>
        <div class="btn-box">
            <input class="checking-btn large-btn" type="button" name="" value="返回会员中心首页"/>
        </div>
    </div>
    <div class="alert-notice">
        <p>1.认证后不可取消认证，可更改邮箱重新认证。</p>
        <p>2.新邮箱修改并通过认证后，可用于登录，旧邮箱不能继续使用。</p>
    </div>
</div>
<!-- 邮箱验证 END -->

<!-- 原无手机，文本框填入新手机验证 弹窗 -->
<div id="newmobilevaliddiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="newmobilevaliddivclose" rel="nofollow"class="alert-close" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <ul class="alert-list">
            <li>
                <label class="alert-label alert-labellarge">
                    请输入手机号：
                </label>
                <input class="alert-input" type="text" name="txtnewmobile" id="textnewmobile" value=""/>
                <button class="alert-btn" id="txtnewgetcode">获取验证码</button>
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

<!-- 原有手机号 验证 -->
<div id="inputmobilevaliddiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="inputmobilevaliddivclose"rel="nofollow" class="alert-close" href="javascript:void(0)"></a>
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

<!-- 输入新手机号码 弹窗-->
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

<!-- 新手机号 验证 -->
<div id="onewmobilevaliddiv" class="alert-box" style="display: none;">
    <div class="alert-title">
        手机验证
        <a id="onewmobilevaliddivclose" class="alert-close" rel="nofollow" href="javascript:void(0)"></a>
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
        <a id="validmobilesucdivclose"rel="nofollow" class="alert-close" href="javascript:void(0)"></a>
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
        <a id="validmobilefailclose" rel="nofollow"class="alert-close" href="javascript:void(0)"></a>
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
</div><!-- 手机验证 END -->
<!-- 个人信息修改 弹窗 END -->

<!-- 添加账号 弹窗 START -->
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
                    <select class="add-select" id="bankbranchselect">
                    </select>
                </li>
                <li id="bankbranchtextli"  style="display:none">* 开户支行名称：<input class="add-input" type="text" name="bankbranchtext" id="bankbranchtext" />
                </li>
                <li id="bankaccountli" >* 开户银行账号：<input class="add-input" type="text" name="bankaccountid" id="bankaccountid" value=""/>
                </li>
                <li id="rebankaccountli">* 再次确认账号：<input class="add-input" type="text" name="rebankaccountid" id="rebankaccountid" oncontextmenu="window.event.returnValue=false" onpaste="return false" value=""/></li>
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

<!-- 减免券详情弹窗 -->
<div class="alert-box"  id="prodetaildiv" name="prodetaildiv" style="display:none;">
    <div class="alert-title">
        <span class="couponalert" id="serialnosp">序列号：<!--125454545465--></span>
        <span class="couponalert" id="parsp">面值：<!--满100减100--></span>
        <a class="alert-close" id="prodetaildivclose" name="prodetaildivclose" href="javascript:void(0)"></a>
    </div>
    <div class="alert-con">
        <table class="coupontable" id="promdetailtable">
            <tbody>
            <tr>
                <th>使用时间</th>
                <th>使用订单</th>
                <th>使用金额</th>
            </tr>
            </tbody>
        </table>
        <div class="btn-box">
            <input class="checking-btn large-btn" type="button" id="prodetaildivbtn" name="prodetaildivbtn" value="确定"/>
        </div>
    </div>
</div>
<!-- 优惠券弹窗 END-->
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
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/js.js"></script>
<!--芝麻提交身份认证-->
<div class="safedetails">
    <div class="surveYY"></div>
    <div class="offmax shenfen_info">
        <div class="close_current"></div>
        <div class="dp_header">提交身份信息</div>
        <div class="dp_daypicker mt20 mb20">
            <form class="refuse_info_input lineheight clearfloat">
                <input type="text" placeholder="姓名" class="name_input clearfloat" maxlength="20"/>
                <span class="alert_word"></span>
                <input type="text" placeholder="身份证号" class="shenfen_input clearfloat" />
                <span class="alert_word"></span>
            </form>
        </div>
        <a class="green_button shouquan" href="javascript:void(0);" target="_blank" id="id_test">立即授权</a>
    </div>

    <div class="offmax shouquan_sucess">
        <div class="close_current"></div>
        <div class="dp_header">授权成功</div>
        <div class="dp_daypicker mt20">
            <p class="t-center c322c27 pb20 pdtop20">您的芝麻分为<span id="xinyong_score">300</span>分，<span class="high_low">可以享受入住免押金特权</span></p>
        </div>
        <a class="green_button xuanfang" href="http://m.mayi.com/">立即选房</a>
    </div>
</div>
</body>
</html>