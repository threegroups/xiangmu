<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>【乐家居】短租房_短租公寓_民宿_家庭旅馆_日租房-预订首选</title>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE"/>
    <meta name="baidu-site-verification" content="yjzOLunz2Q" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="短租房,短租公寓,民宿,家庭旅馆,日租房"/>
    <meta name="mobile-agent" content="format=html5;url=http://m.mayi.com">
    <meta name="description" content="乐家短租(mayi.com)是国内最大的公寓民宿在线短租平台,致力于为休闲度假旅游人群提供高性价比的住宿服务,房源配备客厅厨房,可洗衣做饭,是家庭出游新选择。" />
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/index.css" rel="stylesheet">
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet">
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/new_calendar.css" rel="stylesheet" type="text/css">
    <!--Jquery库引入-->
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/index/jquery-1.7.1.min.js"></script>
    <!--广告轮播-->
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/index/koala.min.1.5.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/index/terminator2.2.min.js"></script>
    <script type="text/javascript" language="javascript" id="gj_zhengshu" src="http://pc2.gtimg.com/pcmgr/online_server/cert/1C/8E/gj_zhengshu_1c8e6255e7cd785683955a4c03154ffe.js?site=www.mayi.com&token=1c8e6255e7cd785683955a4c03154ffe"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/allcity.js?V=201403131746"></script>
    <!--日历-->
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/new_calendar.js" ></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/index_own.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/index.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/commom.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/searchlist/index_searchlist_public.js"></script>
    <!--Criteo-->
    <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
    <script type="text/javascript">
        window.criteo_q = window.criteo_q || [];
        window.criteo_q.push(
                { event: "setAccount", account: 28930 },
                { event: "setSiteType", type: "d" },
                { event: "viewHome" }
        );
    </script>

    <script type="text/javascript">
        function saveCountry(){
            window.location.href = "/saveCountryData";
        }

    </script>
    <style>
        .time{background:url(http://staticnew.mayi.com/resourcesWeb/v201510/images/banner_time_bg1.png) no-repeat bottom center;width:991px;height:133px;margin-left:-495px;}
        .time .time-nav dl {top: 61px;left: 3px;}

        .time .time-nav dl dd.calendar_group{width:273px;position:relative;border-top: 1px solid #c1bcbc;border-bottom: 1px solid #c1bcbc;box-sizing:border-box;}
        .calendar_group #index_list_calendar-box{top:44px;left:-1px;}
        .time .time-nav dl dd input{text-indent:10px;}

        .yxfy-img{top:8px;left:8px;}
        .yxfy-img img{display:inline-block !important;vertical-align:top !important;}
        .yxfy-img img.yx_icon{width:35px !important;}
        .yxfy-img img.myj_icon{width:54px !important;position:relative;top:10px;}
    </style>
</head>

<body>
<h1><?php
    $value = Session::get('name');

    echo $value;
    ?></h1>





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
                <?php
                    session_start();
                if(empty($_SESSION['name'])){?>
                <a href="<?php echo e(URL('login')); ?>" id="loginshow" rel="nofollow" target="_self">登录/注册</a>
                <?php }else{?>
                <a href="<?php echo e(URL('my_tujia')); ?>" id="loginshow" rel="nofollow" target="_self">我的途家</a>
                <?php }?>
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
                <a href="<?php echo e(URL('basicinfoone')); ?>"rel="nofollow" nexturl="" class="loginatother room-btn f16 t-center"  target="_self">免费发布房源</a>
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
        <p>如有疑问，请联系乐家短租客服400-069-6060</p>
        <div class="close-alert1">我知道了</div>
    </div>
</div>
<input  type="hidden" name="subdomain" id="subdomain" value="" />
<input  type="hidden" name="mainsite" id="mainsite" value="" />
<input  type="hidden" name="ctx" id="ctx" value="" />
<input  type="hidden" name="ctx1" id="ctx1" value="http://staticnew.mayi.com" />
<input  type="hidden" name="uid" id="uid" value="0" />
<input  type="hidden" name="loginurl" id="loginurl" value="none" />
<input type="hidden" name="head_userName" id="head_userName" value="">
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
<!-- Header END -->
<!-- 赶集统计所需 隐藏域 -->
<input type="hidden" name="gjchparam" id ="gjchparam" value='/duanzu/index'/>
<input type="hidden" name="gcparam" id ="gcparam" value='/duanzu/-/-/-/index'/>
<!-- 乐家统计所需 隐藏域 -->
<input type="hidden" name="my_p_t" id ="my_p_t" value='index'/>

<!-- 乐家统计所需 隐藏域 -->
<div class="banner_con">
    <!--首页广告轮播-->
    <div class="overflow">
        <!--首页广告轮播-->
        <div class="en-banner" id="fsD1" style="overflow:hidden">
            <div class="slideshow" id="D1pic1">

                <div class="fcon" style="display: block;">
                    <a href="/tp_biyeji/" target="_blank" class="">
                        <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/graduateseason.jpg"  class="bImg" id="myImage">
                        <div class="mian-word">
                            <div class="word-pel">
                                <b></b>
                            </div>
                        </div>
                </div>
                <div class="fcon" style="display: none;">
                    <a href="/tp_qinziyou/" target="_blank" class="">
                        <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/parentchild.jpg"  class="bImg" id="myImage">
                        <div class="mian-word">
                            <div class="word-pel">
                                <b></b>
                            </div>
                        </div>
                </div>
                <div class="fcon" style="display: none;">
                    <a href="/room/850419539" target="_blank">
                        <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/850419539.jpg" style="opacity: 1;" class="bImg"></a>
                    <div class="mian-word">
                        <div class="word-pel">
                            <b>昔日的“十里洋场”，今日的国际大都市</b>
                            <font>上海市徐汇区交大建国西路 &nbsp;￥465/晚</font>
                        </div>
                    </div>
                </div>
                <div class="fcon" style="display: none;">
                    <a href="/room/850437674" target="_blank">
                        <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/850437674.jpg" style="opacity: 1;" class="bImg"></a>
                    <div class="mian-word">
                        <div class="word-pel">
                            <b>黄海之滨的明珠，啤酒飘香的名城，对外开放的热土</b>
                            <font>青岛市市北区小港一路 &nbsp;￥649/晚</font>
                        </div>
                    </div>
                </div>
                <div class="fcon" style="display: none;">
                    <a href="/room/850432343" target="_blank">
                        <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/850432343.jpg" style="opacity: 1;" class="bImg"></a>
                    <div class="mian-word">
                        <div class="word-pel">
                            <b>朦胧烟雨、龙井茶香，将温婉的江南展现在你面前</b>
                            <font>杭州市拱墅区萍水路 &nbsp;￥558/晚</font>
                        </div>
                    </div>
                </div>

            </div>
            <div class="prev"></div>
            <div class="next"></div>
        </div>
        <!--首页广告轮播结束-->
    </div>
    <input type="hidden" value="更新服务的数据" onclick="sysLodge();"/>
    <div class="time">
        <div class="time-nav">
            <dl>
                <dd class="bor-sr">
                    <input type="text" id="searchcityin" placeholder="目的地、景点、商圈等" class="text" clicktag="2_1" onkeydown="pressEve(event);" onkeyup="getSuggest(event);" autocomplete="off"/>
                </dd>
                <dd class="calendar_group" id="calendar_group">
                    <input class="ipt_search" type="text" readonly id="startenddate" name="startenddate"   value="" placeholder="入住退房时间"/>
                    <input type="hidden" name="checkinday" id="checkinday" value=""/>
                    <input type="hidden" name="checkoutday" id="checkoutday" value=""/>
                    <div id="index_list_calendar-box" style="display:none"> </div>
                </dd>
                <dd class="btn-search"><input type="button" id="tosearchlist" value="搜索" /></dd>
            </dl>
            <div class="error_tip_list" id="tip_searchcity">请输入关键字</div>

            <!--推荐-->
            <div style="" class="suggest_results" id="suggest">
                <ul></ul>
            </div>
            <!-- 城市列表弹框 -->
            <div class="select-hotcity" id="searchcitydiv" name="searchcitydiv">
                <div class="searh-recent clearfloat">
                    <p class="w100 clearfloat"><span class="searh-tit fl">最近搜索</span><span class="cleartrace fr" onclick="return Bind_Click(this);">清空历史</span></p>
                    <ul id="searh-recent" class="clearfloat">
                    </ul>
                </div>
                <ul class="select-title clearfix" id="cityselecttitleul">
                    <li><a value="hotcity" id="hotcity" class="selected" href="javascript:void(0)">热门目的地</a></li>
                    <li><a value="a_b_c_d_e_f_g" id="a_b_c_d_e_f_g" href="javascript:void(0)" class="">ABCDEFG</a></li>
                    <li><a value="h_i_j_k_l_m_n_o" id="h_i_j_k_l_m_n_o" href="javascript:void(0)" class="">HIJKLMNO</a></li>
                    <li><a value="p_q_r_s_t_u_v" id="p_q_r_s_t_u_v" href="javascript:void(0)" class="">PQRSTUV</a></li>
                    <li><a value="w_x_y_z" id="w_x_y_z" href="javascript:void(0)">WXYZ</a></li>
                </ul>
                <!--<ul class="select-citycon clearfix" id="cityselectulcity" name="cityselectul"></ul>-->
                <ul class="select-citycon clearfix" id="cityselectul" name="cityselectul"><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="北京" citypinyin="beijing">北京</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="上海" citypinyin="shanghai">上海</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="广州" citypinyin="guangzhou">广州</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="深圳" citypinyin="shenzhen">深圳</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="三亚" citypinyin="sanya">三亚</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="成都" citypinyin="chengdu">成都</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="武汉" citypinyin="wuhan">武汉</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="南京" citypinyin="nanjing">南京</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="重庆" citypinyin="chongqing">重庆</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="杭州" citypinyin="hangzhou">杭州</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="香港" citypinyin="xianggang">香港</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="厦门" citypinyin="xiamen">厦门</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="西安" citypinyin="xian">西安</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="长沙" citypinyin="changsha">长沙</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="苏州" citypinyin="suzhou">苏州</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="桂林.阳朔" citypinyin="guilin">桂林.阳朔</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="昆明" citypinyin="kunming">昆明</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="沈阳" citypinyin="shenyang">沈阳</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="天津" citypinyin="tianjin">天津</a></li><li class="citylili"><a class="cityselecta" href="javascript:void(0)" cityname="哈尔滨" citypinyin="haerbin">哈尔滨</a></li></ul>
                <div class="hotmore" >温馨提示：支持中文/拼音/简拼输入</div>
            </div>
        </div>
        <!-- <a href="/supportplan" target="_blank" class="ads-room ads-plan"><img src="http://staticnew.mayi.com/resourcesWeb/images/index/room_ad.png" /></a> -->
    </div>
</div>
<div class="ads-room">
    <ul>
        <li><p>一套房全能解决</p><span>不论一家老小还是朋友几人</span></li>
        <li><p>享受家一般的舒适</p><span>有客厅、有厨房、能洗衣、能做饭</span></li>
        <li><p>比同等酒店便宜50%</p><span>一套乐家公寓=2间酒店房间</span></li>
        <li><p>本地房东做向导</p><span>像本地人一样旅行</span></li>
    </ul>
</div>
<div class="index-box">
    <div class="index-box-tit t-center">
        <h1 class="mb5">热门短租城市</h1>
        <span class="f18">和你在另一个地方遇见美好</span>
    </div>
    <ul class="city">
        <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/beijing.jpg"><a href="detail_list?city=北京" target="_blank">北京</a></li>
        <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/shanghai.jpg"><a href="detail_list?city=上海" target="_blank">上海</a></li>
        <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/chengdu.jpg"><a href="detail_list?city=成都" target="_blank">成都</a></li>
        <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/qingdao.jpg"><a href="detail_list?city=青岛" target="_blank">青岛</a></li>
        <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/chongqing.jpg"><a href="detail_list?city=重庆" target="_blank">重庆</a></li>
        <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/xian.jpg"><a href="detail_list?city=西安" target="_blank">西安</a></li>
        <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/hangzhou.jpg"><a href="detail_list?city=杭州" target="_blank">杭州</a></li>
        <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/xiamen.jpg"><a href="detail_list?city=厦门" target="_blank">厦门</a></li>
    </ul>
</div>
<script>

</script>
<a href="/landlord/recruit" target="_blank"><div class="recruit_index mt20"></div></a>
<div class="index-box">
    <div class="index-box-tit t-center">
        <h1>短租公寓推荐</h1>
    </div>
    <ul class="apart">
        <li class="mr20 mb20">
            <a href="/room/850385569" target="_blank">
                <img src="http://i1.mayi.com/gjfs18/M04/93/5B/CgEHH1Z46oONha,mAAJEqVxgH2M516.jpg_786x300c.jpg" class="two-size" alt="上海·徐家汇金寓浪漫两居"/>
            </a>
            <p class="asote yxfy-img">
                <img src="http://staticnew.mayi.com/resourcesWeb/topic/2016/yzfy/images/level1.png" class="yx_icon" alt="上海·徐家汇金寓浪漫两居" />
            </p>
            <div class="collection" state="1" title="收藏" id="c_850385569" ></div>
            <a href="/room/850385569" target="_blank">
                <b>
                    上海·徐家汇金寓浪漫两居
                </b>
                <ul>

                    <li>舒适型2居</li>
                    <li>可住4人</li>
                    <li>已订<font>6</font>晚</li>
                </ul>
            </a>
            <a href="/room/850385569" target="_blank">
                <b class="btn-img1">
                    <img src="http://i1.mayi.com/gjfs15/M0A/91/85/CgEHQFchcOrnASmXAABxig3Rd5Y825.jpg_35x35c.jpg" class="contact">
                </b>
                <a>
                    <b class="moy-b">
                        <p>
                            <font>￥</font>
                            688
                        </p>
                    </b>
        </li>
        <li class="mb20">
            <a href="/room/850395276" target="_blank">
                <img src="http://i1.mayi.com/gjfs16/M07/23/B2/CgEHQlaeXFWsUwSoAAR9ehz9wfs666.jpg_384x300c.jpg"/>
            </a>
            <p class="asote yxfy-img">
                <img src="http://staticnew.mayi.com/resourcesWeb/topic/2016/yzfy/images/level1.png" class="yx_icon" alt="南京·樱花豪华温馨舒适三居" />
            </p>
            <div class="collection" state="1" title="收藏" id="c_850395276" ></div>
            <a href="/room/850395276" target="_blank">
                <b>
                    南京·樱花豪华温馨舒适三居
                </b>
                <ul>
                    <li>5.0分</li>
                    <li>5条评论</li>

                    <li>舒适型3居</li>
                    <li>可住6人</li>
                    <li>已订<font>11</font>晚</li>
                </ul>
            </a>
            <a href="/room/850395276" target="_blank">
                <b class="btn-img1">
                    <img src="http://i1.mayi.com/gjfs18/M04/BA/2D/CgEHH1aT5E3SqWCjAAB,tTEXvz8193.jpg_35x35c.jpg" class="contact">
                </b>
            </a>
            <b class="moy-b">
                <p>
                    <font>￥</font>
                    388
                </p>
            </b>
        </li>

        <li class="mr20 mb20">
            <a href="/room/850432343" target="_blank">
                <img src="http://i1.mayi.com/gjfs21/M08/EF/8B/CgEHF1caCavHM7O5ACnJV-IagXU048.jpg_384x300c.jpg" alt="杭州·近银泰浙大自然格调三居" />
            </a>
            <div class="collection" state="1" title="收藏" id="c_850432343" ></div>
            <a href="/room/850432343" target="_blank">
                <b>
                    杭州·近银泰浙大自然格调三...
                </b>
                <ul>

                    <li>经济型 3居</li>
                    <li>可住5人</li>
                </ul>
            </a>
            <a href="/room/850432343" target="_blank">
                <b class="btn-img1">
                    <img src="http://i1.mayi.com/gjfs21/M02/DF/A7/CgEHFVcou-7fDD90AAB87pAehd4540.jpg_35x35c.jpg" class="contact">
                </b>
            </a>
            <b class="moy-b">
                <p>
                    <font>￥</font>
                    558
                </p>
            </b>
        </li>
        <li class="mr20 mb20">
            <a href="/room/850096157" target="_blank">
                <img src="http://i1.mayi.com/gjfs21/M0A/90/F0/CgEHFVcY6SqmbacWAB6sVCdO,gs079.jpg_384x300c.jpg" alt="北戴河·依海公寓三居首选" />
            </a>
            <div class="collection" state="1" title="收藏" id="c_850096157" ></div>
            <a href="/room/850096157" target="_blank">
                <b>
                    北戴河·依海公寓三居首选
                </b>
                <ul>
                    <li>5.0分</li>
                    <li>22条评论</li>

                    <li>舒适型3居</li>
                    <li>可住9人</li>
                    <li>已订<font>82</font>晚</li>
                </ul>
            </a>
            <a href="/room/850096157" target="_blank">
                <b class="btn-img1">
                    <img src="http://i1.mayi.com/gjfs06/M01/A7/88/wKhzVVN8p83yDko4AAAJP692i4o615.jpg_35x35c.jpg" class="contact">
                </b>
            </a>
            <b class="moy-b">
                <p>
                    <font>￥</font>
                    266
                </p>
            </b>
        </li>
        <li class="mb20">
            <a href="/room/850434777" target="_blank">
                <img src="http://i1.mayi.com/gjfs22/M02/D0/F7/CgEHGFceE06nwUSNAB7s7uQCFnk745.jpg_384x300c.jpg" alt="青岛·栈桥火车站附近豪华双卧..." />
            </a>
            <div class="collection" state="1" title="收藏" id="c_850434777" ></div>
            <a href="/room/850434777" target="_blank">
                <b>
                    青岛·栈桥火车站附近豪华双卧....
                </b>
                <ul>
                    <li>5.0分</li>
                    <li>9条评论</li>

                    <li>经济型 2居</li>
                    <li>可住4人</li>
                    <li>已订<font>26</font>晚</li>
                </ul>

                <a href="/room/850434777" target="_blank">
                    <b class="btn-img1">
                        <img src="http://i1.mayi.com/gjfs19/M05/AF/FA/CgEHZlcDJH62J0S2AABzzrfDAno424.jpg_35x35c.jpg" class="contact">
                    </b>
                </a>
                <b class="moy-b">
                    <p>
                        <font>￥</font>
                        258
                    </p>
                </b>
        </li>
    </ul>
</div>
<a href="/supportplan/" target="_blank">
    <div class="index-box safeplan pb50 mt20">
        <div class="index-box-tit t-center">
            <h1>房客保障计划</h1>
        </div>
        <ul class="safe">
            <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/safe2.png"><p class="f18">入住前一天 无条件退款</p></li>
            <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/safe3.png"><p class="f18">到店无房 赔首晚房费</p></li>
            <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/safe4.png"><p class="f18">付款到乐家 资金有保障</p></li>
            <li><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/safe1.png"><p class="f18">保障入住 乐家补差价</p></li>
        </ul>
    </div>
</a>
<!--公共底部-->
<!-- foot尾部 判断控制000000[6位显示] 如果位数是1显示，0不显示-->
<div class="foot index-foot">
    <div class="footer pt30 over-hidden pb20">
        <ul>
            <li class="pl60 w30">
                <h3 class="f16 mb10">联系我们</h3>
                <p>客户服务</p>
                <p class="f20">400-069-6060</p>
                <p class="f20">010-60642468&nbsp;/&nbsp;010-89177759</p>
                <p>Email：kefu.duanzu@mayi.com</p>
                <p>商务合作</p>
                <p>QQ：2656860348</p>
                <p>Email：marketing@mayi.com</p>
            </li>
            <li class="pl60 w20">
                <h3 class="f16 mb10">帮助中心</h3>
                <!--
                    Wap房源适配修改
                    <p><a href="/platprofile/" target="_blank">我是房客</a></p>
                    <p><a href="/platprofile/" target="_blank">我是房东</a></p>
                -->
                <p><a href="/roomauditrule/" target="_blank">房源审核规范</a></p>
                <p><a href="/landoperaterule/" target="_blank">房东经营行为管理规范</a></p>
                <p><a href="/supportplan/" target="_blank">房客保障计划</a></p>
                <p><a href="/goodhouseplan/" target="_blank">优质住宿计划</a></p>
            </li>
            <li class="pl40 w10">
                <h3 class="f16 mb10">公司信息</h3>
                <p><a href="/aboutcompany/" target="">关于乐家</a></p>
                <p><a href="/mediareport/" target="_blank">媒体报道</a></p>
                <p><a href="/agreement/" target="_blank">服务协议</a></p>
                <p><a href="/privacypolicy/" target="_blank">隐私条款</a></p>
            </li>
            <li class="pl80 w20">
                <h3 class="f16 mb10">APP下载</h3>
                <p><img  class="mt10" src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/app.jpg"></p>
                <p><a class="app mt10 t-center" rel="nofollow" href="/download/android/update">Android下载</a></p>
                <p><a class="app mt10 t-center" rel="nofollow" href="https://itunes.apple.com/cn/app/ma-yi-duan-zu-100yuan-zhu/id494520120?mt=8" target="_blank">iOS下载</a></p>
            </li>
            <li class="w20">
                <h3 class="f16 mb10">关注我们</h3>
                <p class="fl mr20 cursorpt showinfo"><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/weixin_logo.png"><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/weixin.jpg" class="head_pop absot"></p>
                <p class="cursorpt"><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/xinlang_logo.png" onclick="sinaWeibo();"></p>
            </li>
        </ul>
    </div>
    <div class="w1190 pb20">
        <div class="one-line mb5">
            <b>热门城市：</b>
				<span>
					<a target="_blank" title="北京" href="/beijing/">北京日租房</a>
					<a target="_blank" title="上海" href="/shanghai/">上海日租房</a>
					<a target="_blank" title="三亚" href="/sanya/">三亚日租房</a>
					<a target="_blank" title="成都" href="/chengdu/">成都日租房</a>
					<a target="_blank" title="青岛" href="/qingdao/">青岛日租房</a>
					<a target="_blank" title="广州" href="/guangzhou/">广州日租房</a>
					<a target="_blank" title="杭州" href="/hangzhou/">杭州日租房</a>
					<a target="_blank" title="大连" href="/dalian/">大连日租房</a>
					<a target="_blank" title="苏州" href="/suzhou/">苏州日租房</a>
					<a target="_blank" title="香港" href="/xianggang/">香港日租房</a>
					<a target="_blank" title="秦皇岛" href="/qinhuangdao/">秦皇岛日租房</a>
					<a target="_blank" title="西安" href="/xian/">西安日租房</a>
					<a target="_blank" title="威海" href="/weihai/">威海日租房</a>
					<a target="_blank" title="深圳" href="/shenzhen/">深圳日租房</a>
					<a target="_blank" title="哈尔滨" href="/haerbin/">哈尔滨日租房</a>
					<a target="_blank" title="昆明" href="/kunming/">昆明日租房</a>
					<a target="_blank" title="重庆" href="/chongqing/">重庆日租房</a>
					<a target="_blank" title="南京" href="/nanjing/">南京日租房</a>
					<a target="_blank" title="武汉" href="/wuhan/">武汉日租房</a>
					<a target="_blank" title="济南" href="/jinan/">济南日租房</a>
					<a target="_blank" title="天津" href="/tianjin/">天津日租房</a>
					<a target="_blank" title="沈阳" href="/shenyang/">沈阳日租房</a>
					<a target="_blank" title="厦门" href="/xiamen/">厦门日租房</a>
					<a target="_blank" title="长沙" href="/changsha/">长沙日租房</a>
					<a target="_blank" title="日照" href="/rizhao/">日照日租房</a>
					<a target="_blank" title="桂林" href="/guilin/">桂林日租房</a>
					<a target="_blank" title="郑州" href="/zhengzhou/">郑州日租房</a>
					<a target="_blank" title="合肥" href="/hefei/">合肥日租房</a>
					<a target="_blank" title="石家庄" href="/shijiazhuang/">石家庄日租房</a>
					<a target="_blank" title="无锡" href="/wuxi/">无锡日租房</a>
					<a target="_blank" title="福州" href="/fuzhou/">福州日租房</a>
					<a target="_blank" title="大理" href="/dali/">大理日租房</a>
					<a target="_blank" title="海口" href="/haikou/">海口日租房</a>
					<a target="_blank" title="北海" href="/beihai/">北海日租房</a>
					<a target="_blank" title="丽江" href="/lijiang/">丽江日租房</a>
					<a target="_blank" title="珠海" href="/zhuhai/">珠海日租房</a>
					<a target="_blank" title="宁波" href="/ningbo/">宁波日租房</a>
					<a target="_blank" title="太原" href="/taiyuan/">太原日租房</a>
					<a target="_blank" title="长春" href="/changchun/">长春日租房</a>
					<a target="_blank" title="烟台" href="/yantai/">烟台日租房</a>
					<a target="_blank" title="大同" href="/datong/">大同日租房</a>
					<a target="_blank" title="黄山" href="/huangshan/">黄山日租房</a>
					<a target="_blank" title="开封" href="/kaifeng/">开封日租房</a>
					<a target="_blank" title="兰州" href="/lanzhou/">兰州日租房</a>
					<a target="_blank" title="洛阳" href="/luoyang/">洛阳日租房</a>
					<a target="_blank" title="南宁" href="/nanning/">南宁日租房</a>
					<a target="_blank" title="张家界" href="/zhangjiajie/">张家界日租房</a>
					<a target="_blank" title="舟山" href="/zhoushan/">舟山日租房</a>
					<a target="_blank" title="泰山/泰安" href="/taian/">泰山/泰安日租房</a>
					<a target="_blank" title="乐山" href="/leshan/">乐山日租房</a>
					<a target="_blank" title="唐山" href="/tangshan/">唐山日租房</a>
					<a target="_blank" title="潍坊" href="/weifang/">潍坊日租房</a>
					<a target="_blank" title="西双版纳" href="/xishuangbanna/">西双版纳日租房</a>
					<a target="_blank" title="延边" href="/yanbian/">延边日租房</a>
					<a target="_blank" title="扬州" href="/yangzhou/">扬州日租房</a>
					<a target="_blank" title="温州" href="/wenzhou/">温州日租房</a>
					<a target="_blank" title="保定" href="/baoding/">保定日租房</a>
					<a target="_blank" title="常州" href="/changzhou/">常州日租房</a>
					<a target="_blank" title="承德" href="/chengde/">承德日租房</a>
					<a target="_blank" title="丹东" href="/dandong/">丹东日租房</a>
					<a target="_blank" title="佛山" href="/foshan/">佛山日租房</a>
					<a target="_blank" title="贵阳" href="/guiyang/">贵阳日租房</a>
					<a target="_blank" title="呼和浩特" href="/huhehaote/">呼和浩特日租房</a>
					<a target="_blank" title="银川" href="/yinchuan/">银川日租房</a>
					<a target="_blank" title="漳州" href="/zhangzhou/">漳州日租房</a>
					<a target="_blank" title="中山" href="/zhongshan/">中山日租房</a>
					<a target="_blank" title="吉林" href="/jilinshi/">吉林日租房</a>
					<a target="_blank" title="西宁" href="/xining/">西宁日租房</a>
					<a target="_blank" title="营口" href="/yingkou/">营口日租房</a>
					<a target="_blank" title="都江堰" href="/dujiangyan/">都江堰日租房</a>
					<a target="_blank" title="鼓浪屿" href="/gulangyu/">鼓浪屿日租房</a>
					<a target="_blank" title="南昌" href="/nanchang/">南昌日租房</a>
					<a target="_blank" title="鞍山" href="/anshan/">鞍山日租房</a>
					<a target="_blank" title="新乡" href="/xinxiang/">新乡日租房</a>
					<a target="_blank" title="呼伦贝尔" href="/hulunbeier/">呼伦贝尔日租房</a>
					<a target="_blank" title="徐州" href="/xuzhou/">徐州日租房</a>
					<a target="_blank" title="乌鲁木齐" href="/wulumuqi/">乌鲁木齐日租房</a>
					<a target="_blank" title="台湾.花莲" href="/taiwanhualian/">台湾.花莲日租房</a>
					<a target="_blank" title="临沂" href="/linyi/">临沂日租房</a>
					<a target="_blank" title="锦州" href="/jinzhou/">锦州日租房</a>
					<a target="_blank" title="葫芦岛" href="/huludao/">葫芦岛日租房</a>
					<a target="_blank" title="东莞" href="/dongguan/">东莞日租房</a>
				</span>
            <div class="open" style="display: block;"></div>
            <div class="close" style="display: none;"></div>
        </div>
        <div class="one-line mb5">
            <b>热门推荐：</b>
				<span>
					<a target="_blank" title="别墅日租短租" href="/villa/">别墅日租短租</a>
				</span>
        </div>
        <div class="one-line">
            <b>友情链接：</b>
						<span>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.yododo.cn" title="客栈住宿">客栈住宿</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.pintour.com" title="驴友">驴友</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://chengdu.anjuke.com" title="成都房产网">成都房产网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://house.shangdu.com" title="郑州房产网">郑州房产网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.housoo.com" title="太原房产网">太原房产网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://sh.fangjia.com" title="上海房价">上海房价</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.tripc.net" title="启程旅游网">启程旅游网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://travel.poco.cn" title="POCO旅游">POCO旅游</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.qmango.com/" title="宾馆预订">宾馆预订</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.auyou.cn" title="遨游搜旅游网">遨游搜旅游网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.qu114.com" title="去114分类信息网">去114分类信息网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.9tour.cn" title="九游网">九游网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.daoxila.com" title="婚宴酒店">婚宴酒店</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://hz.esf.sina.com.cn" title="杭州二手房网">杭州二手房网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://hangzhou.fangtoo.com" title="杭州二手房网">杭州二手房网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.5khouse.com" title="昆山房产网">昆山房产网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://product.pchouse.com.cn" title="家居产品库">家居产品库</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.guolv.com" title="神舟国旅">神舟国旅</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://jiudian.kuxun.cn" title="酷讯酒店预订">酷讯酒店预订</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://zx.meilele.com" title="装修">装修</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.517best.com" title="旅游百事通">旅游百事通</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.qyer.com" title="出境游">出境游</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.jiwu.com/" title="买房网">买房网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://jiaju.jia.com" title="家居">家居</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.ceramicschina.com/" title="瓷砖">瓷砖</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://qd.focus.cn/" title="青岛房地产">青岛房地产</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.geihui.com" title="返利网">返利网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.tianxun.com" title="天巡网">天巡网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.qixiangwang.cn" title="天气预报查询一周">天气预报查询一周</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://s.114chn.com" title="114生活网">114生活网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.efw.cn" title="无锡房产网">无锡房产网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.haozu.com" title="好租">好租</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://tj.focus.cn" title="天津房产">天津房产</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://shijiazhuang.tianqi.com" title="石家庄天气">石家庄天气</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.nanhutravel.com/" title="南湖国旅">南湖国旅</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://bj.esf.sina.com.cn/" title="新浪二手房">新浪二手房</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.mayi.com/jieri/" title="节假日租房">节假日租房</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.mayi.com/changzu/" title="月租公寓">月租公寓</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.mayi.com/seomap/" title="热门短租搜索词">热门短租搜索词</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://m.sm.cn" title="神马搜索">神马搜索</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://http://wan.cncn.com/" title="放心游商城">放心游商城</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://http://www.lvye.cn/" title="绿野户外网">绿野户外网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://http://www.doumi.com/" title="http://www.doumi.com/">http://www.doumi.com/</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://http://www.doumi.com/" title="兼职网">兼职网</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.taiwandao.tw" title="台湾自由行">台湾自由行</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.chunyun.cn" title="火车票网上订票">火车票网上订票</a>
								<a target="_blank" class="stclick" clicktag="11" href="http://www.3hk.cn" title="香港自由行">香港自由行</a>
		                                                       友情链接QQ：3123901994
						</span>
            <div class="open" style="display:none;"></div>
            <div class="close" style="display:block;"></div>
        </div>
        <p class="t-center f12 c777776">网站备案/许可证号：京ICP证130021号 易云游网络技术（北京）有限公司</p>
        <p class="t-center f12 c777776"> 京公网安备11010802018218号 </p>
    </div>
</div>
<script>
    $(function(){
        $('.open').click(function(){
            $(this).parent().css("height", "auto");
            $(this).siblings(".close").css("display", "block");
            $(this).css("display", "none");
        })
        $('.close').click(
                function(){
                    $(this).parent().css("height", "20px");
                    $(this).siblings(".open").css("display", "block");
                    $(this).css("display", "none");
                }
        )
    })
</script>    <!--右侧浮层-->
<!-- 右耳朵-->
<!--右侧浮层  无专题-->
<!-- <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/right_erduo.css" rel="stylesheet"> -->
<!-- 右侧浮层 有专题 -->
<link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/right_erduo_tp.css" rel="stylesheet">
<div class="layer" id="top_div">
    <div class='layer_year'>
        <!--下面a链接地址为专题页-->
        <a href="/tp_biyeji/" target="_blank">
            <div class='pos_img absot'></div>
        </a>
    </div>
    <dl style="position:relative;">
        <dt id="app-click"><a href="/activity/app50" target="_blank"><b>APP下单<font>立送55元</font></b></a></dt>
        <dd><a href="/supportplan" target="_blank"></a></dd>
        <dd class='none_border'><a class="la-03" href="javascript:void(0)"></a></dd>
    </dl>
    <img src="http://staticnew.mayi.com/resourcesWeb/images/index/mark_quick01.png" width="112px" height="137px" class="app-img rt-app" >
</div>    <!--底部浮层显示，默认是隐藏-->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/rightlayer.js"></script>    <!--底部浮层显示，默认是隐藏-->
<!-- 无专题样式 -->
<!-- <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/bottomlaye.css" rel="stylesheet"> -->
<!-- 有专题样式 -->
<link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/bottomlayer_tp.css" rel="stylesheet">
<script>
    $(function(){
        $(".btn-close").click(function(){
            $(".app-open").animate({left:"-100%",opacity:0},600);
            $(".app-close").delay(600).animate({left:"0%"},300);
        })
        $(".app-close").click(function(){
            $(".app-close").animate({left:"-100%"},300);
            $(".app-open").delay(300).animate({left:"0%",opacity:1},600);
        })
    })
    window.onscroll = function(){
        var t = document.documentElement.scrollTop || document.body.scrollTop;
        var floatingLayer = document.getElementById("floatingLayer");
        if( t >= 510) {
            floatingLayer.style.display = "block";
        } else {
            floatingLayer.style.display = "none";
        }
    }
</script>
<div id="floatingLayer" style="display:none">
    <div class="app-open" style="left:0px;">
        <div class="box-background" style="background-color: rgb(0, 5, 25);"></div>
        <div class="box-inner">
            <div class="background-img">
                <!--下面a链接地址为专题页-->
                <a target="_blank" href="/tp_biyeji/" target="_blank">
                    <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/floatlayer/tp/float_l_bylx.png" alt="" class="float_l_img fl"></a>
                <!--  无专题
                < img src=" http://staticnew.mayi.com /resourcesWeb/v201510/images/floatlayer/float_l.png" alt="" class="float_l_img fl">
                -->
                <div class='fl float_r'>
                    <div class='float_r_text clearfloat'>
                        <div class='fl float_r_App'>
                            <strong>下载APP<br/>立享优惠</strong>
                            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/app.jpg" alt="" />
                        </div>
                        <div class='fl float_r_App'>
                            <strong>关注微信公众号<br/>更多福利更多资讯</strong>
                            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/weixin_ma.jpg" alt="" />
                        </div>
                        <div class='fl float_r_App downLoad'>
                            <strong>直接下载</strong>
                            <a href="https://itunes.apple.com/cn/app/ma-yi-duan-zu-100yuan-zhu/id494520120?mt=8">Iphone</a>
                            <a href="http://www.mayi.com/download/android/update">Android</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-close">
                <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/floatlayer/btn-close.png" alt="">
            </div>
        </div>
    </div>
    <div class="app-close" style="left: -100%;">
        <div class="background-img">
            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/floatlayer/tp/be_here_bylx.png" alt="">
            <!-- 无专题图片 -->
            <!-- <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/floatlayer/be_here.png" alt=""> -->
        </div>
    </div>
</div>	<!--跟踪代码-->
<script type="text/javascript">
    var _py = _py || [];
    _py.push(['a', '_V..9lG-o_-K8tLjk83g1WAOcX']);
    _py.push(['domain','stats.ipinyou.com']);
    _py.push(['e','']);
    -function(d){
        var f = 'https:' == location.protocol;
        f = (f ? 'https' : 'http') + '://'+(f?'file.ipinyou.com':'file.ipinyou.com.cn')+'/j/adv.js';
        d.write('<script src="'+f+'"><\/script>');
    }(document)

    function pressEve(ev){
        if(!ev) var ev=window.event;
        var code = ev.keyCode;
        var sugcss = $('.suggest_results').css('display');
        if(sugcss!='none'){
            if(code==13){
                //将suggest输入到输入框
                $("#searchcityin").val($(".suggest_results li.hover a .leftspan").text());
                $("#searchcityin").attr('surl',$(".suggest_results li.hover a").attr('url'));
                $('.suggest_results').css('display','none');
            }else if(code==38){
                movePrev();
            }else if(code==40){
                moveNext();
            }
        }
    }

    function sysLodge(){
        var ctx = $('#ctx').val();
        $.ajax({
            //url:ctx+'/sysLodgeTo4se',
            url:ctx+'/saveNationData',
            type:'POST',
            dataType:'json',
            success:function(data){
                if(null!=data.error&&data.error.length>0){
                    alert(data.error);
                }else{
                    alert(data.mess);
                }
            }
        });
    }

    function getSuggest(e){
        var s = $('#searchcityin').val().trim();
        var ctx = $('#ctx').val();
        if(!e) var e=window.event;
        var code = e.keyCode;
        if(code==37||code==38||code==39||code==40||code==13){
            return false;
        }
        if(null!=s && s.length>0 && s!='目的地、景点、商圈等'){
            var sugurl = ctx+'/getSuggest/';
            getSuggestResult(sugurl,s,0,'index');
        }else{
            $('.error_tip_list').css('display','none');
            $('.suggest_results').css('display','none');
            $('.select-hotcity').css('display','block');
        }
    }

    $(".collection").click(function(){
        var user = getCookie('MAYIUID');
        if(null==user){
            $("#loginshow").click();
        }else{
            var roomid = $(this).attr("id");
            roomid = roomid.replace("c_","");
            var state = $(this).attr("state");
            var ctx = $('#ctx').val();
            $.ajax({
                url:ctx+'/user/tenant/setCollection?roomid='+roomid+"&state="+state,
                type:'POST',
                dataType:'json',
                success:function(data){
                    if(data==1){
                        if(state==1){
                            state=2;
                            $("#c_"+roomid+"").addClass("ct_on").attr("title","取消收藏");
                        }else{
                            state=1;
                            $("#c_"+roomid+"").removeClass("ct_on").attr("title","收藏");
                        }
                        $("#c_"+roomid+"").attr("state",state);
                    }else{
                        alert('收藏失败！');
                    }
                },
                error:function(){
                    alert('请求异常，请稍后再试！');
                }
            });
        }
    });

    function getCookie(objName) {
        var arrStr = document.cookie.split("; ");
        for(var i = 0;i < arrStr.length;i ++){
            var temp = arrStr[i].split("=");
            if(temp[0] == objName) return unescape(temp[1]);
        }
    }
</script>
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
        $(".email").show();
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

<!-- 乐家统计所需js -->
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
