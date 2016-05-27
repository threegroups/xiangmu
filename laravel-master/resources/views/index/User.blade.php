<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content=""/>
    <meta name="description" content="" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/global.css" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/PCenter.css" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/order.css" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/css/collection.css" rel="stylesheet" type="text/css">
    <link href="http://staticnew.mayi.com/resourcesWeb/ordernew/css/sesame_credit.css" rel="stylesheet" type="text/css"/>
    <!-- new header -->
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet"  type="text/css">
    <link href="http://staticnew.mayi.com/resourcesWeb/ordernew/css/fdbx.css" rel="stylesheet">
    <style type="text/css">
        .refuse_info .complete_success{background-color:#bdbdbd;}
    </style>
    <title>订单-房客</title>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/comment_div.js?V=201310162028"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/lottery.js"></script>
    <script type="text/javascript">
        //	$(function(){
        //		var CenterTab = $('.centerTab li');
        //		$('.MtList:first').show();
        //			CenterTab.each(function(e){
        //			CenterTab.eq(e).click(function(){
        //				$(this).addClass('active').siblings().removeClass('active');
        //				$('.MtList').eq(e).show().siblings().hide();
        //			});
        //		});
        //	});

        //初始化样式展示
        $(function(){
            var state="2";
            if(state==0){
                $("#all").addClass("active");
            }else if(state==1){
                $("#confirm").addClass("active");
            }else if(state==2){
                $("#paying").addClass("active");
            }else if(state==3){
                $("#payed").addClass("active");
            }else if(state==6){
                var state_type="0";
                if(state_type==6){
                    $("#refund").addClass("active");
                }else if(state_type==2){
                    $("#invalid").addClass("active");
                }
            }
            $(".MtList").show();
            $("#state").val(state);
            $("#state_type").val("0");
        });

        //去付款
        function goPaying(bookOrderId){

            $.ajax({
                type:'get',
                url:"/order/checkstate/"+bookOrderId,
                async:false,
                dataType:'json',
                success:function(re) {
                    if(re.error!=null){
                        layer.alert(re.error.message,5,"温馨提示",function index(){ location.reload();});
                    }else{
                        var url="/order/waitpay/"+bookOrderId;
                        window.open(url);
                        return false;
                    }
                },
                error:function(){
                    layer.alert("支付失败,请稍候重试!",5,"温馨提示",function index(){location.reload();});
                }
            });
        }

        //操作订单  操作时增加状态验证  zhaopengwei 20150131 add
        function operatingOrder(bookOrderId,update_state,current_state,notSupportRefund){
            var operSide="tenant";
            var type = -1;
            if(update_state == 2 ||　update_state == 5){//房东确认： 2     房东拒绝：4、5     房客取消：4
                type = 0;
            } else if(update_state == 4){
                "landlord" == operSide ? type = 0 : type = 1;
            }
            $.get("/ordercenter/checkState",{orderId:bookOrderId, type:type},function(data) {
                if(data.result){
                    if(update_state==4){
                        if(operSide == "tenant" && data.partRefund){	//房客取消部分退款
                            $("#lodgeunitid").val(data.lodgeunitid);
                            showCanclePartDiv();

                        }else{
                            refuse_ok_show();
                            //showCancleDiv(notSupportRefund,current_state);
                        }
                    }
                    var state=2;
                    var state_type=0;
                    var cotextPath="";
                    var userId="851655010";
                    var url=cotextPath+"/"+operSide+"/"+userId+"/order"+"/"+bookOrderId+"/oper";
                    url+="?state="+state+"&state_type="+state_type+"&update_state="+update_state+"&current_state="+current_state;
                    $("#url").val(url);
                    //window.location.href=url;
                } else {
                    layer.alert("订单状态已变更,不能继续操作!", 8, "温馨提示", function reloadPage(){window.location.reload();});
                    return;
                }
            },'JSON');
        }

        //添加弹层后，处理的逻辑
        function processOrder(){
            layer.close(partAlert);
            refuse_ok_show();
            //var url=$("#url").val();
            //window.location.href=url;
        }

        //弹出确认取消的操作
        var xx;
        function showCancleDiv(notSupportRefund,current_state){
            $('#refundAlert').hide();
            $('#notRefundAlert').hide();
            xx = $.layer({
                type : 1,
                title : false,
                offset:['150px' , ''],
                border : false,
                closeBtn:false,
                area : ['auto','auto'],
                page : {dom : '#cancleDiv'},
                success: function(layer){
                    if(notSupportRefund=='true'&&current_state==3){
                        $('#notRefundAlert').show();
                    }else{
                        $('#refundAlert').show();
                    }
                } //创建成功后的回调
            });
            $('#cancleDivClose').on('click',function(){
                layer.close(xx);
            });
            $('.alert-close').on('click',function(){
                layer.close(xx);
            });
        }

        //弹出取消部分扣款的操作
        var partAlert;
        function showCanclePartDiv(){
            partAlert = $.layer({
                type : 1,
                title : false,
                offset:['150px' , ''],
                border : false,
                closeBtn:false,
                area : ['auto','auto'],
                page : {dom : '#canclePartDiv'},
            });
            $('#cancleDivClose').on('click',function(){
                layer.close(partAlert);
            });
            $('.alert-close').on('click',function(){
                layer.close(partAlert);
            });
        }

        //查询订单
        function searchOrder(state,state_type){
            var cotextPath="";
            var operSide="tenant";
            var userId="851655010";
            var url=cotextPath+"/"+operSide+"/"+userId+"/orders";
            url+="?state="+state+"&state_type="+state_type;
            window.location.href=url;
        }

        //分页调用js
        var changePage = function(pageNo) {
            var cotextPath="";
            var operSide="tenant";
            var userId="851655010";
            var state=$("#state").val();
            var state_type=$("#state_type").val();
            var url=cotextPath+"/"+operSide+"/"+userId+"/orders";
            url+="?state="+state+"&state_type="+state_type+"&curPageNo="+pageNo;
            window.location.href=url;
        }

        //显示房东交易规则
        function showTradeRule(){
            window.open("/room/" + $("#lodgeunitid").val() + "#rules");
        }

        //已评价房东查看评论 zhaopengwei 20150302 add
        function seeComment(id){
            window.open("/room/" + id + "#pingjia");
        }
        //访客取消订单原因开始
        function refuse_cancel(){
            $('.safedetails').hide();
        }

        function refuse_ok(){
            if($("input[name='state']:checked").length == 1){
                refuse_cancel();
                var url=$("#url").val();
                //拒绝原因
                var reason = $('input:radio[name="state"]:checked').val();
                var otherReason = $("#reason").val();
                if(reason == 5){
                    if(otherReason == null || otherReason == "" || otherReason == undefined){
                        otherReason = "其他";
                    }
                }
                url+="&reason="+reason+"&otherReason="+otherReason;
                //alert(url);
                window.location.href=url;
            }else{
                return false;
            }
        }

        function refuse_ok_show(){
            $('.safedetails').show();
        }


        $(function(){
            $(".refuse_info_input label").click(function(){
                if($("input[name='state']:checked").length == 1){
                    $(".complete_success").css("background-color","#ff5d51");
                }else{
                    $(this).attr("disabled", "disabled");
                }
            })
            $("input[name='state']").click(function(){
                if($(this).attr("value")=="5")
                    $(".t_area").show();
                else
                    $(".t_area").hide();
            });
            //访客取消订单原因结束
        });
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
    <a href="/"><div class='asote head_left'style="background:url(http://localhost/head.jpg);background-repeat:no-repeat"></div></a>
    <div class='head_cnt relave'>
        <span class='search'></span>
        <ul class="nav_R asote nav_right">
            <li>
                <div class="showinfo">
                    <a href="javascript:menufrozen(851655010,'/tenant/851655010/orders','user')" target="_self"><img src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_35x35c.jpg" id="aaa" class="user_img">
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
<input type="hidden" name="head_userName" id="head_userName" value="zuo也没办法。">
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
    <ul class="breadcrumb clearfix">
        <li><a href="/tenant/851655010/orders"">我是房客</a> <span class="divider">》</span></li>
        <li>订单管理<span class="divider"></span></li>
        <!--
        <li>已付款订单</li>
        -->
    </ul>
    <div class="personalCenter clearfix">
        <ul class="center-sidebar">
            <li><a class="slideactive"  href="/tenant/851655010/orders">订单管理<span class="ddgl_current" ></span></a></li>
            <!--<li><a   href="/user/tenant/commentmanager.html">点评管理<span class="dpgl" ></span></a></li>-->
            <li><a   href="/user/tenant/msgmanager">消息通知<span class="xxtz" ></span></a></li>
            <li><a    href="/user/tenant/accountmanager">账户管理<span class="zhgl" ></span></a></li>
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

        <div class="centerCon">
            <ul class="centerTab">
                <input type="hidden" id="state"/>
                <input type="hidden" id="state_type"/>
                <!--<li id="confirm" onclick="searchOrder(1,0)">待确认订单</li>-->
                <li id="paying" onclick="searchOrder(2,0)">待付款</li>
                <li id="payed" onclick="searchOrder(3,0)">已支付</li>
                <!--<li id="refund" onclick="searchOrder(6,1)">待评价</li>-->
                <!--<li id="invalid" onclick="searchOrder(4,2)">失效订单</li>-->
                <li id="all" onclick="searchOrder(0,0)" >全部订单</li>
            </ul>
            <div class="accountMt clearfix">
                <div class="MtList pd00">
                </div>
            </div>
            <!-- Page -->
            <script type="text/javascript">
                $(document).ready(function(){

                    $('.page').each(function() {
                        if($(this).text() == 1) {
                            $(this).addClass("active");
                        }
                    });

                });
            </script>
            <div class="pager">
            </div>				<!-- Page END -->
        </div>
    </div>
    <!-- 右侧悬浮-->
    <div id="wx" style="position: fixed;display: block;top: 326px;width: 110px;height: 165px;z-index: 1000;left: 53%;margin-left: 500px;">
        <a href="/activity/app50" target="_blank"><img src="http://staticnew.mayi.com/resourcesWeb/images/codeapp.png" /></a>
        <span onclick="document.getElementById('wx').style.display='none';" style="position: absolute;right: -19px;top: -1px;"><img src="http://staticnew.mayi.com/resourcesWeb/images/close.png" /></span>
    </div>
    <!-- 右侧悬浮END-->
</div>

<!-- Content END -->
<!-- 评论弹出层 start -->
<!-- 发表评论 -->
<div id="sendComment" class="alert-box">
    <input type="hidden" id="sanitation"  value="3"/>
    <input type="hidden" id="security"  value="3"/>
    <input type="hidden" id="description"  value="3"/>
    <input type="hidden" id="location"  value="3"/>
    <input type="hidden" id="performance" value="3"/>
    <input type="hidden" id="bookOrderId"/>
    <div class="alert-title">
        <span id="commentLodgTitle"></span>
        <font style="float:right;margin-right:78px;"><em id="commentPrice"></em>/晚</font>
        <a href="javascript:void(0);" class="alert-close stclick"  id="alert-close2"></a>
    </div>
    <div class="alert-con">
        <div class="comment">
            <p class="comment-title mgtp10">入住感受：</p>
            <ul class="rating-star-box clearfix">
                <li>
                    <label>设施环境</label>
						<span class="rating-star" type="description">
							<span class="star-1"><a href="#" rel="nofollow"value="1"></a></span>
							<span class="star-2"><a  href="#" rel="nofollow"value="2"></a></span>
							<span class="star-3"><a class="rating-cur" value="3" href="#" rel="nofollow"></a></span>
						</span>
                </li>
                <li>
                    <label>整洁卫生</label>
						<span class="rating-star" type="sanitation">
							<span class="star-1"><a href="#" rel="nofollow" value="1"></a></span>
							<span class="star-2"><a  href="#" rel="nofollow" value="2"></a></span>
							<span class="star-3"><a class="rating-cur" value="3" href="#"></a></span>
						</span>
                </li>
                <li>
                    <label>房东服务</label>
						<span class="rating-star" type="security">
							<span class="star-1"><a href="#" rel="nofollow" value="1"></a></span>
							<span class="star-2"><a  href="#" rel="nofollow" value="2"></a></span>
							<span class="star-3"><a class="rating-cur" value="3" rel="nofollow" href="#"></a></span>
						</span>
                </li>
                <li>
                    <label>交通位置</label>
						<span class="rating-star" type="location">
							<span class="star-1"><a href="#"rel="nofollow" value="1"></a></span>
							<span class="star-2"><a  href="#"rel="nofollow" value="2"></a></span>
							<span class="star-3"><a class="rating-cur" value="3" rel="nofollow" href="#"></a></span>
						</span>
                </li>
                <li>
                    <label>性 价 比</label>
						<span class="rating-star" type="performance">
							<span class="star-1"><a href="#"rel="nofollow" value="1"></a></span>
							<span class="star-2"><a  href="#" rel="nofollow"value="2"></a></span>
							<span class="star-3"><a class="rating-cur" value="3"rel="nofollow" href="#"></a></span>
						</span>
                </li>
            </ul>
            <p class="comment-title mgtp10">评论内容：</p>
            <textarea class="comment-textarea mgtp10" id="content" >可以围绕住宿感受、环境、交通、服务等多个方面评价，您的评价对其他朋友有狠狠狠大滴帮助哦~~~</textarea>
            <p class="ticket" style="text-align:center;font-size:18px;line-height:50px;color:#4C4C4C;">评价即可获得<font style="color:#f80;">彩票红包</font>哦~</p>
            <div class="btn-box">
                <input type="button" value="提交" name="" onclick="publishComment();" class="checking-btn mid-btn stclick" clicktag="2_1">
            </div>
        </div>
    </div>
</div>
<!-- 发表评论 END -->

<div class="pjsuccess" id="comment_success">
    <a href="javascript:void(0);" class="pjsucc-close" id="pjsucc-close"></a>
    <div class="pjsuccessWord"><p>成功分享后</p><p>您可以和您的朋友进入QQ空间或新浪微博</p><font>点击分享链接即可领取红包</font></div>
    <ul class="share">
        <li><a class="a1" href="javascript:skipShareZone();"></a></li>
        <li><a class="a2" href="javascript:skipShareWeixin();"></a></li>
        <li><a class="a3" href="javascript:skipShareSina();"></a></li>
    </ul>
</div>

<!-- 发表评论成功
<div id="comment_success"  class="alert-box">
    <div class="alert-title">
        发布评论
        <a href="#" class="alert-close"></a>
    </div>
    <div class="alert-con">
         <dl class="proving pdlt140">
            <dt class="succeed"></dt>
            <dd>发布成功！</dd>
        </dl>
        <div class="btn-box">
            <input type="button" id="success" value="我知道了" name="" class="checking-btn large-btn">
        </div>
    </div>
</div> -->
<!-- 发表评论成功 END -->
<!-- 发布评论失败 -->
<div id="comment_error" class="alert-box">
    <div class="alert-title">
        发布评论
        <a href="#" class="alert-close"></a>
    </div>
    <div class="alert-con">
        <dl class="proving">
            <dt class="fail"></dt>
            <dd class="fail">发布失败！</dd>
        </dl>
        <div class="btn-box">
            <input type="button" value="重新发布" onclick="repeatShowPublishComment();" name=""  class="checking-btn large-btn">
        </div>
    </div>
</div>
<!-- 发布评论失败 END -->
<!-- 已经发布评论 -->
<div id="comment_repetition" class="alert-box">
    <div class="alert-title">
        发布评论
        <a href="#" class="alert-close"></a>
    </div>
    <div class="alert-con">
        <dl class="proving">
            <dt class="fail"></dt>
            <dd class="fail">您已经提交过评价了！</dd>
        </dl>
        <div class="btn-box">
            <input type="button" id="repetition" value="我知道了" name="" class="checking-btn large-btn">
        </div>
    </div>
</div>
<!-- 已经发布评论 END -->
<script type="text/javascript">
    $(".comment-textarea").focus(function(){
        var txt_value = $(this).val();
        if(txt_value == this.defaultValue){
            $(this).val("");
            $(this).css("color","#333");
        }
    })
    $(".comment-textarea").blur(function(){
        var txt_value = $(this).val();
        if(txt_value == ""){
            $(this).val(this.defaultValue);
            $(this).css("color","#666");
        }
    })
</script>	<!-- 评论弹出层 end -->

<!-- 取消订单部分扣款 -->
<div id="canclePartDiv" class="alert-box">
    <input type="hidden" id="lodgeunitid"/>
    <div class="alert-title">
        取消订单
        <a class="alert-close" href="javascript:void(0)"rel="nofollow"></a>
    </div>
    <div class="alert-con">
        <div class="removetext o-cancel" id="partRefund">
            <p class="f16" >若取消订单，我们将按照房东的交易规则扣除部分款项，您确定要取消订单吗？</p>
        </div>
        <div class="btn-box">
            <input type="button" class="gray-btn" name="" value="查看交易规则" onclick="showTradeRule();">
            <input type="button" class="warn-btn" name="" value="继续取消" onclick="processOrder();">
        </div>
    </div>
</div>
<!-- 取消订单 END -->
<!--房客取消订单原因开始-->
<div class="safedetails" style="display:none;">
    <div class="surveYY"></div>
    <div class="offmax refuse_info">
        <div class="dp_header">
            请选择取消原因
            <p class="decoration">准确填写取消原因有助于我们更好地为您服务</p>
        </div>
        <div class="dp_daypicker" style="padding-top:10px;">
            <form action="/example/html/form_action.asp" method="get" class="refuse_info_input lineheight">
                <label><input type="radio" name="state" value="0" />房东说无房了</label><br />
                <label><input type="radio" name="state" value="1" />房东涨价</label><br />
                <label><input type="radio" name="state" value="2" />房东一直不回复消息</label><br />
                <label><input type="radio" name="state" value="3" />行程改变</label><br />
                <label><input type="radio" name="state" value="4" />网上支付不成功</label><br />
                <label><input type="radio" name="state" value="5" />其他</label><br />
                <textarea class="t_area" id="reason"  placeholder="具体说明（选填信息）"></textarea>
                <input type="button" value="确认取消" onclick="refuse_ok();" class="complete_success" />
                <input type="button" value="以后再说" onclick="refuse_cancel();" class="complete_cancel">

            </form>
        </div>
    </div>
</div>
<!--房客取消订单原因结束-->
<!-- 取消订单 -->
<div id="cancleDiv" class="alert-box">
    <input type="hidden" id="url"/>
    <div class="alert-title">
        取消订单
        <a class="alert-close" href="javascript:void(0)"rel="nofollow"></a>
    </div>
    <div class="alert-con">
        <div class="removetext o-cancel" id="notRefundAlert">
            <p class="f16" >房东规定：一旦支付，取消订单概不退款。</p>
            <p>你确定要取消订单吗？</p>
        </div>
        <div class="removetext o-cancel" id="refundAlert">
            <p class="t-center">你确定要取消订单吗？</p>
        </div>
        <div class="btn-box">
            <input type="button" class="warn-btn" name="" value="确定" onclick="processOrder();">
            <input type="button" id="cancleDivClose" class="gray-btn" name="" value="以后再说">
        </div>
    </div>
</div>
<!-- 取消订单 END -->

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

<!--[statistics end]--><!-- load End--></body>
</html>