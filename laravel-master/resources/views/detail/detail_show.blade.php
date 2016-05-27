<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="keywords" content="丰台芳城园短租房,丰台芳城园短租公寓,丰台芳城园附近住宿，丰台芳城园附近酒店"/>
    <meta name="description" content="北京丰台芳城园日租房可做饭，民居日租舒适2居，预订日租度假公寓、家庭旅馆选择蚂蚁短租网。" />
    <meta name="mobile-agent" content="format=html5;url=http://m.mayi.com/room/850345114"/>
    <meta name="location" content="province=北京;city=北京;coord=116.440281,39.876065"/>
    <title>【丰台短租房】天坛附近 浪漫温馨两居  10分钟到天坛_芳城园_北京日租房可做饭_蚂蚁短租</title>
    <link rel="stylesheet" href="http://staticnew.mayi.com/resourcesWeb/v201510/css/small-public.css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet">
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/details_new.css" rel="stylesheet" type="text/css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/index_list_calendar.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/commom.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=1c4c84e6462fecb243831130f9db4098"></script>

    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/slidePic.js"></script>

    <script src="http://staticnew.mayi.com/resourcesWeb/v201510/js/jssor.slider.min.js"></script>

    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/collect.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery.scrollfollow.js"></script>
    <!--日历-->
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/index/yui-min.js" ></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/calendar.js" ></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/moment.min.js"></script><!-- zwb add -->
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/zebra_datepicker.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jCal.hMCalendar.min.js"></script>
    <!--日历结束-->
    <!--Criteo-->
    <script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
    <script type="text/javascript">
        window.criteo_q = window.criteo_q || [];
        window.criteo_q.push(
                { event: "setAccount", account: 28930 },
                { event: "setSiteType", type: "d" },
                { event: "viewItem", item: 850345114 }
        );
        function criteoClick(){
            var d1 = $('#checkinday').val();
            var d2 = $('#checkoutday').val();
            var pric = $('#priceL').find('span').text();
            var datein = new Date(d1);
            var dateout = new Date(d2);
            var time = dateout.getTime() - datein.getTime() ;
            var days = Math.floor(time/(24*60*60*1000))
            window.criteo_q.push(
                    { event: "setAccount", account: 28930 },
                    { event: "setSiteType", type: "d" },
                    { event: "viewBasket", item: [
                        { id: 850345114, price: pric, quantity: days }
                    ],checkin_date:d1, checkout_date:d2});
        }
    </script>
    <script type="text/javascript">
        var domainInfo = { subdomain:'',mainsite:''};
        $(function(){
            <!-- 日历 -->
            strBODY=".date",dTop=41,dLeft=-212;
            YUI({
            }).use('trip-calendar', function(Y) {
                var oCal = new Y.TripCalendar({
                    minDate         : new Date,     //最小时间限制
                    triggerNode     : '#checkinday', //第一个触节点
                    finalTriggerNode: '#checkoutday',  //最后一个触发节点
                    calPrice:2,
                    roomid:'850345114',
                    minday:'1',
                    ctx:''
                });
                oCal.on('startDateChange', function(e) {
                    $('#searchcityin_xq').val("1套");

                });
                oCal.on('endDateChange', function(e) {
                    $('#searchcityin_xq').val("1套");
                    ajaxPriceDetial();
                });
            });
            /*头部hover效果*/
            $(".showinfo").mouseover(function(){
                $(this).children('.head_pop').show();
            });
            $(".showinfo").mouseout(function(){
                $(this).children('.head_pop').hide();
            });

            var firstDate = new Date();
            firstDate.setDate(1); //第一天
            var endDate = new Date(firstDate);
            //房间日历显示
            $('#calOne').jCal({
                calPrice: eval('(' + '[{"date":"2016-05-01","price":480,"type":2,"originalPrice":48000,"isRent":0,"stock":0},{"date":"2016-05-02","price":480,"type":2,"originalPrice":48000,"isRent":0,"stock":0},{"date":"2016-05-03","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-04","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-05","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-06","price":458,"type":2,"originalPrice":45800,"isRent":0,"stock":0},{"date":"2016-05-07","price":408,"type":2,"originalPrice":40800,"isRent":1,"stock":1},{"date":"2016-05-08","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-09","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-10","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-11","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-12","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-13","price":458,"type":2,"originalPrice":45800,"isRent":0,"stock":0},{"date":"2016-05-14","price":458,"type":2,"originalPrice":45800,"isRent":1,"stock":1},{"date":"2016-05-15","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-16","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-17","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-18","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-19","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-20","price":458,"type":2,"originalPrice":45800,"isRent":0,"stock":0},{"date":"2016-05-21","price":458,"type":2,"originalPrice":45800,"isRent":0,"stock":0},{"date":"2016-05-22","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-23","price":438,"type":2,"originalPrice":43800,"isRent":0,"stock":0},{"date":"2016-05-24","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-05-25","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-05-26","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-05-27","price":458,"type":2,"originalPrice":45800,"isRent":1,"stock":1},{"date":"2016-05-28","price":458,"type":2,"originalPrice":45800,"isRent":1,"stock":1},{"date":"2016-05-29","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-05-30","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-05-31","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-01","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-02","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-03","price":458,"type":2,"originalPrice":45800,"isRent":1,"stock":1},{"date":"2016-06-04","price":458,"type":2,"originalPrice":45800,"isRent":1,"stock":1},{"date":"2016-06-05","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-06","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-07","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-08","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-09","price":498,"type":2,"originalPrice":49800,"isRent":1,"stock":1},{"date":"2016-06-10","price":498,"type":2,"originalPrice":49800,"isRent":1,"stock":1},{"date":"2016-06-11","price":498,"type":2,"originalPrice":49800,"isRent":1,"stock":1},{"date":"2016-06-12","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-13","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-14","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-15","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-16","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-17","price":458,"type":2,"originalPrice":45800,"isRent":1,"stock":1},{"date":"2016-06-18","price":458,"type":2,"originalPrice":45800,"isRent":1,"stock":1},{"date":"2016-06-19","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-20","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-21","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-22","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-23","price":438,"type":2,"originalPrice":43800,"isRent":1,"stock":1},{"date":"2016-06-24","price":518,"originalPrice":51800,"type":3,"isRent":1,"stock":1},{"date":"2016-06-25","price":518,"originalPrice":51800,"type":3,"isRent":1,"stock":1},{"date":"2016-06-26","price":488,"originalPrice":48800,"type":6,"isRent":1,"stock":1},{"date":"2016-06-27","price":488,"originalPrice":48800,"type":6,"isRent":1,"stock":1},{"date":"2016-06-28","price":488,"originalPrice":48800,"type":6,"isRent":1,"stock":1},{"date":"2016-06-29","price":488,"originalPrice":48800,"type":6,"isRent":1,"stock":1},{"date":"2016-06-30","price":488,"originalPrice":48800,"type":6,"isRent":1,"stock":1}]' + ')'),
                day: endDate,
                days: 1,
                showMonths: 1,
                monthSelect: true
            });
        });
    </script>
    <script>
        jssor_1_slider_init = function() {
            var jssor_1_options = {
                $AutoPlay: false,
                $AutoPlaySteps: 4,
                $SlideDuration: 160,
                $SlideWidth: 282,
                $SlideSpacing: 20,
                $Cols: 4,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,
                    $Steps: 4
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$,
                    $SpacingX: 1,
                    $SpacingY: 1
                }
            };
            if($('#jssor_1').length==1){
                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            }
            if($('#jssor_2').length==1){
                var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_1_options);
            }
            if($('#jssor_3').length==1){
                var jssor_3_slider = new $JssorSlider$("jssor_3", jssor_1_options);
            }
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                if(jssor_1_slider){
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                }
                if(jssor_2_slider){
                    var refSize2 = jssor_2_slider.$Elmt.parentNode.clientWidth;
                }
                if(jssor_3_slider){
                    var refSize3 = jssor_3_slider.$Elmt.parentNode.clientWidth;
                }

                if (refSize) {
                    refSize = Math.min(refSize, 1190);
                    if(jssor_1_slider){
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    if(jssor_2_slider){
                        jssor_2_slider.$ScaleWidth(refSize);
                    }
                    if(jssor_3_slider){
                        jssor_3_slider.$ScaleWidth(refSize);
                    }
                }
                else {
                    //window.setTimeout(ScaleSlider, 30);
                }
            }
            //ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            //responsive code end
        };
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".mp_down").click(function(){
                if( $(".calendar_mp").css("display")== "none" )
                {
                    $(".calendar_mp").show();
                    $(this).css("background-image","url(http://staticnew.mayi.com/resourcesWeb/images/shou.png)");
                }
                else{
                    $(".calendar_mp").hide();
                    $(this).css("background-image","url(http://staticnew.mayi.com/resourcesWeb/images/kai.png)");
                }
            })
        })
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
    <style>
        .alert-box1{width:100%;height: 100%;z-index: 300000;position: absolute;display:none;line-height:40px;}
        .surveYY1{background: #000;width:100%;height:100%;opacity: 0.7;position: fixed;top: 0px;left: 0px;}
        .offmax_no{width:400px;height:186px;position:fixed;top:50%;margin-top:-93px;left:50%;margin-left:-200px;background-color:#fff;z-index:999;text-align:center;box-shadow:0px 0px 4px #ccc;border-radius:2px;}
        .offmax_no p{padding:0 20px;line-height:25px;}
        .alert_tit1{border-bottom:1px solid #e0e0e0;font-size:18px;margin-bottom:20px;}
        .close-alert1{cursor:pointer;width:50%;margin:20px auto;background-color:#22bb62;text-align:center;color:#fff;border-radius:2px;}
    </style>
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
            getSuggestResult(sugurl,s,0,'header');
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


    .error_tip_list{background-color:#fff;color: #ff7043;width:71%;line-height:40px;text-indent:15px;position:absolute;top:60px;border:1px solid #e0e0e0;z-index:9;display:none;}
    .error_tip_list .other_city{border-top:1px solid #e0e0e0;height: 42px;line-height: 42px;text-align: center;color: #5d5c5b;border-bottom-left-radius: 2px;border-bottom-right-radius: 2px;font-weight:bold;}

    .suggest_results{background-color:#fff;color:#22bb62;top:60px;position:absolute;width:71%;z-index:9;box-sizing:border-box;border:1px solid #e0e0e0;display:none;}
    .suggest_results li{height:40px;line-height:40px;padding:0 15px;}
    .suggest_results li.hover,.suggest_results li:hover{background-color:#22bb62;}
    .suggest_results li.hover a,.suggest_results li.hover a .rightspan,.suggest_results li.hover a .leftspan .keyword{color:#fff;}
    .suggest_results li a{display:block;width:100%;color:#322c27;}
    .suggest_results .other_city{height:42px;line-height:42px;text-align:center;color:#5d5c5b;border-top:1px solid #ebeaea;border-bottom-left-radius:2px;border-bottom-right-radius:2px;}
    span.search {
        display: block;
    }
</style>
<input  type="hidden" name="ctx" id="ctx" value="" />
<div class='header relave'>
    <a href="/"><div class='asote head_left'></div></a>
    <div class='head_cnt relave'>
        <span class='search'></span>
        <input type="text" placeholder='目的地、景点、商圈等' id='searchcityin' name = "searchcityin" onkeydown="pressEve(event);" onkeyup="getSuggest(event);" class="inpt_header"/>
        <div class="error_tip_list" id="tip_searchcity"><p>请输入关键字</p></div>
        <!--推荐-->
        <div style="" class="suggest_results" id="suggest">
            <ul>
            </ul>
        </div>
        <ul class="nav_R asote nav_right">
            <li><a href="javascript:void(0)" id="loginshow" rel="nofollow" target="_self">登录/注册</a></li>
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
                <a href="javascript:void(0)"rel="nofollow" nexturl="/room/publish/basicinfo" class="loginatother room-btn f16 t-center"  target="_self">免费发布房源</a>
            </li>
        </ul>
    </div>

</div>
<!--公共头部结束-->
<div class="alert-box1">
    <div class="surveYY1"></div>
    <div class="offmax_no">
        <div class="alert_tit1">温馨提示</div>
        <p>对不起，房东账号被封禁</p>
        <p>如有疑问，请联系蚂蚁短租客服400-069-6060</p>
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
    $(document).ready(function() {
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

    });
</script>
<!-- Header END -->
<!--公共头部结束-->
<!-- Header END -->
<!-- 赶集统计所需 隐藏域 -->
<input type="hidden" name="gjchparam" id ="gjchparam" value='/duanzu/detail@room=%7B%22id%22%3A850345114%22ispromotion%22%3A0%7D'/>
<input type="hidden" name="gcparam" id ="gcparam" value='/duanzu/-/-/-/detail@room=%7B%22id%22%3A850345114%22ispromotion%22%3A0%7D'/>
<!-- 蚂蚁统计所需 隐藏域 -->
<input type="hidden" name="my_p_t" id ="my_p_t" value='room'/>
<input type="hidden" name="my_r_id" id ="my_r_id" value='850345114'/>
<input type="hidden" name="my_p_y" id ="my_p_y" value='beijing'/>
<!-- 蚂蚁统计所需 隐藏域 -->
<!-- Content -->
<input type="hidden" name="ctx" id ="ctx" value=""/>
<input type="hidden" id="luid" value="850345114">
<input type="hidden" id="roomtitle" value="天坛附近 浪漫温馨两居  10分钟到天坛">
<input type="hidden" id="ownerid" value="850829796">
<input type="hidden" id="hasStock" value="1"/>
<input type="hidden" id="nights" value="1"/>
<input type="hidden" id="longitude" value="116.440281"/>
<input type="hidden" id="latitude" value="39.876065"/>
<input type="hidden" id="initStock" value="1"/>
<input type="hidden" id="pageSize" value="10"/>
<input type="hidden" id="pageLordSize" value="10"/>
<input type="hidden" id="latlng" value="39.876065,116.440281"/>
<input type="hidden" id="countNum" value="7" />
<input type="hidden" id="countLordNum" value="315" />
<input type="hidden" id="pageCount" value="1" />
<input type="hidden" id="pageLordCount" value="32" />
<input type="hidden" id="pageNo" value="1"/>
<input type="hidden" id="pageLordNo" value="1"/>
<input type="hidden" id="mindays" value="1"/>
<input type="hidden" id="stockCnt" value="0"/>
<input type="hidden" value='' id="specialdiscount" />
<input type="hidden" value='0' id="collstate"/>
<input type="hidden" value='http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg' id="lordHeadImg"/>
<img style="z-index:8;display:block;" class="mmcoll mmcoll1" onClick="MoveBox(this,850345114)"  src="http://staticnew.mayi.com/resourcesWeb/images/detail/save_gray.png" id="collect" title="收藏"/>
<img style="z-index:7;display:none;" class="mmcoll mmcoll2" onClick="MoveBoxbk(this,850345114)" src="http://staticnew.mayi.com/resourcesWeb/images/detail/coll_x_red1.png" title="取消收藏"/>
<!--初始化公用值开始-->
<!--初始化公用值结束-->
<div class="main">
    <!--导航条-->
    <div class="desChioce" id="desChioce01">
        <ul class='clearfloat'>
            <li class="current"><a href='javascript:;'>图片</a></li>
            <li><a href="javascript:;" >关于房源</a></li>
            <li><a id="pjskip"; href="javascript:;" id="commentNum">评价(<span>7</span>条)</a></li>
            <li><a href="javascript:;" >地图</a></li>
            <li class="price clearfloat fr relave" id="yui_3_5_1_1_1450765892279_80">
                <div class="priceL" id="priceL">
                    ￥<span>438</span>/晚
                </div>
                <div class="priceR absot">
                    <p class='p2'>满7天9.5折，满30天9.0折 </p>
                </div>
            </li>
        </ul>
    </div>
    <!--导航条结束-->
    <div class="path">
        <a href="/">首页</a>&nbsp;>&nbsp;<a href="/beijing/">北京短租房</a>&nbsp;>&nbsp;
        <a href="/beijing_fengtai/">丰台短租房</a>&nbsp;>&nbsp;
        <a style="color:#999">房间编号：850345114</a>
    </div>
    <!--详情页第一部分左边-->
    <div class="main-l clearfloat" id='photo'>
        <div class="desWord">
            <h2><a href="#" rel="nofollow">天坛附近 浪漫温馨两居  10分钟到天坛</a>
                {{--<img src="http://staticnew.mayi.com/resourcesWeb/topic/2016/yzfy/images/level1.png" title='房源品质优良，值得信赖，推荐入住！' style="width:28px;height:33px;display:inline-block;vertical-align:middle;cursor:pointer">--}}
                <span class='self_p C_00897b' title='照片均为蚂蚁短租员工实地拍摄，请放心入住'>实拍</span>
            </h2>
            <p>北京市丰台区蒲黄榆芳城园<a href="javascript:;" class='look_map'>查看地图</a></p>
            <span id="sc_word">收藏</span>
            <div class='share_parent'>
                <span id="fx_word">分享</span>
                <ul class='share clearfloat '>
                    <li class='fl relave'>
                        <a href='javascript:;' class='weixin'></a>
                        <div class="weixin_code" show="1">
                            <div class="weixin_tip"></div>
                            <h5>使用微信“扫一扫”</h5>
                            <a class='qcord'><!--<img width="134" height="134" alt="微信分享" src="">--></a>
                        </div>
                    </li>
                    <li class='fl'><a href="#" class='weibo' target="_blank"></a></li>
                    <li class='fl'><a href="#" class='qq' target="_blank"></a></li>

                </ul>
            </div>
        </div>
        <div class='fl img_playPar'>
            <!--房屋轮播图-->
            <div class="desTop fl">

                <!--图片轮播-->
                <div style="position:relative;">
                    <div class="picmap-change">

                        <div id="TabChangeCon_01" class="change-list">
                            <div class="picbox">
                                <ul class="piclist">
                                    @foreach ($users as $k=>$v)
                                        <?php for($i=0;$i<count($picture[$k]);$i++){?>
                                        <li class="slideshow-item">
                                            <a href="#" rel="nofollow"><img src="http://localhost/laravel-master/public/public/images/{{$picture[0][$i]}}" alt="" width="860px" height="527px"/></a>
                                        </li>
                                        <?php }?>
                                    @endforeach

                                </ul>
                                <a id="big_play_prev" class="home-picprev" href="#" rel="nofollow" style="cursor:url(http://staticnew.mayi.com/resourcesWeb/images/detail/mouseup.cur), auto; background:#fff;opacity:0;filter:alpha(opacity=0)"></a>
                                <a id="big_play_next" class="home-picnext" href="#" rel="nofollow" style="cursor:url(http://staticnew.mayi.com/resourcesWeb/images/detail/mousedown.cur), auto; background:#fff;opacity:0;filter:alpha(opacity=0)"></a>
                            </div>
                            <div class="picsmallbox">
                                <div class="picboxpic">
                                    <ul id="picsmall" class="picsmall clearfix" style="height: 2660px; top: -210px;">

                                        <!--房源图片展示-->
                                        @foreach ($users as $k=>$v)
                                           <?php for($i=0;$i<count($picture[$k]);$i++){?>
                                               <li class="slideshow-item">
                                                   <a href="#" rel="nofollow"><img src="http://localhost/laravel-master/public/public/images/{{$picture[0][$i]}}" alt=""/></a>
                                               </li>
                                           <?php }?>
                                        @endforeach
                                    </ul>
                                </div>

                                <a id="play_prev" class="play-prev" href="#" rel="nofollow"></a>
                                <a id="play_next" class="play-next" href="#" rel="nofollow"></a>
                                <div class="translucence"></div>
                            </div>
                        </div>
                        <div id="TabChangeCon_02" class="change-list">
                            <div id="mapDiv"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--图片轮播结束-->

            <div class="feature">
                <ul class='clearfloat'>
                    <li>
                        <div class='clearfloat feature_chansu'>
                            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/room_ping.png"  class='fl'/>
                            <span class='fl'>整套出租</span>
                        </div>
                        <p>2室1厅1厨1阳台·79m²</p>
                    </li>
                    <li class="w258">
                        <div class='clearfloat feature_chansu'>
                            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/ruzhu.png" class='fl'/>
                            <span class='fl'>可住4人</span>
                        </div>
                        <p>

                            双人床2张
                        </p>
                    </li>
                    <li>
                        <div class='clearfloat feature_chansu'>
                            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/haoping.png" class='fl'/>
                            <span class='fl'>100%好评</span>
                        </div>
                        <p>7条评价</p>
                    </li>
                </ul>
            </div>
        </div>
        <!--右侧预订信息-->
        <div class='main-r_1'>
            <div class="order">
                <div class="price clearfloat relave">
                    <div class="priceL" id="priceL">
                        ￥<span>438</span>/晚
                    </div>
                    <div class="priceR absot">
                        <p class='p2'>满7天9.5折，满30天9.0折 </p>
                    </div>
                </div>
                <!-- 右侧日期显示区域 -->
                <div class='date_par clearfloat'>
                    <div class="date fl relave">
                        <div>
                            <div id="timeL" class="inputfliterL">
                                <label class="stclick" for="checkinday"></label><input id="checkinday" type="text" class="f-text" value="2016-05-19"  autocomplete="off" />
                            </div>
                        </div>
                        <div class='fl riq'>至</div>
                        <div>
                            <div id="timeR" class="inputfliterR">
                                <label class="stclick" for="checkoutday"></label><input id="checkoutday" type="text" class="f-text" value="2016-05-20" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    <div class="number" onclick="openDialog(event)">
                        <a href="javascript:void(0);"><img src="http://staticnew.mayi.com/resourcesWeb/images/detail/daosanjiao.png"></a>
                        <input name="searchcityin_xq" id="searchcityin_xq" value="1套" class="stclick" clicktag="2_1" type="text" readonly="true">
                    </div>
                    <div class="xiala" id="xiala">
                        <ul>
                        </ul>
                    </div>
                </div>
                <div class="priceTotal clearfloat">
                    <div class="priceTotalL"  id="priceTotalL">
                        总计￥<span>438</span>
                    </div>
                    <div class="priceTotalR relave">
                        <a id="PriceDetails" class="TotalR C_22bb62" href="javascript:;">手机下单立减5元<span class='absot APP_hover'></span></a>
                        <div class='erwm_tan absot'>
                            <p class='absot sj'></p>
                            <h4>首单立减5元  入住成功再送50</h4>
                            <ul class='erwm_order clearfloat'>
                                <li class='fl APP_li'>
                                    <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/App_load.png" alt="" />
                                    <p>下载APP</p>
                                </li>
                                <li class='fl APP_li weixin'>
                                    <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/weix.png" alt="" />
                                    <p>关注微信公众号</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="nofang" style="color:#f00;font-size:16px;line-height:40px;padding-left:20px;margin-bottom:10px;display:none">改日期内有无房状态，请更改日期</p>
                <div class="pay">
                    <a id="goBookBtn"  href='{{URL('order_list')}}'>立即预订</a>
                </div>

            </div>
            <!--查看有无房-->
            <div class="calendarM">
                <ul id="calendarUl">
                    <li class="none">
                        <b style="font-size: 13px;">5月19日</b>
                        <p class="priceCal">无房</p>
                    </li>

                    <li class="none">
                        <b style="font-size: 13px;">5月20日</b>
                        <p class="priceCal">无房</p>
                    </li>

                    <li class="none">
                        <b style="font-size: 13px;">5月21日</b>
                        <p class="priceCal">无房</p>
                    </li>

                    <li class="none">
                        <b style="font-size: 13px;">5月22日</b>
                        <p class="priceCal">无房</p>
                    </li>

                    <li class="none">
                        <b style="font-size: 13px;">5月23日</b>
                        <p class="priceCal">无房</p>
                    </li>

                </ul>
                <div class="calendarB">完整房态日历</div>
            </div>
            <!--房东信息-->
            <div class="landlord">
                <div class="landlordDes">
                    <div class="landlordDesL">
                        <img src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" />
                        <div></div>
                    </div>
                    <div class="landlordDesR">
                        <font>北京之家</font>

                        <p class='renzheng'>
                            <span class='relave' style='margin-right:16px'><i class='absot renzheng1'></i>身份认证</span>
                            <span class='relave'><i class='absot renzheng2'></i>手机认证</span>
                        </p>
                        <div class="contact_landlord">
                            <a href="javascript:void(0)" id="detailLogin" class='contact_roomer'>下载app联系房东</a>
                            <div class="IM_cancel_app t-center">
                                <p class="C_322c27 mb5 f16">扫一扫，即可下载</p>
                                <img src="http://staticnew.mayi.com/resourcesWeb/im/images/dz_pcim.png" alt="" />
                            </div>
                        </div>
                        <style>
                            .contact_landlord{position:relative;left:0;top:0;/*padding:10px 0 20px*/}
                            .landlordDesR{overflow:visible!important}
                            .contact_landlord:hover .IM_cancel_app{display:block!important}
                            .IM_cancel_app{position:absolute;right:0;top:50px;border:1px solid #e0e1e6;width:172px;background:#fff;box-shadow:0 0 10px #e1e1e1;padding:10px 0;display:none}
                            .IM_cancel_app img{width:121px;height:121px;display:inline-block}
                            .IM_cancel_app::before{width:0;height:0;border-width:0 6px 12px;border-style:solid;border-color:transparent transparent #dce0e0;content:'';position:absolute;right:82px;top:-12px}
                            .IM_cancel_app::after{width:0;height:0;border-width:0 6px 12px;border-style:solid;border-color:transparent transparent #fff;content:'';position:absolute;right:82px;top:-10px}
                        </style>
                        <script>
                            $('.contact-me').click(function(event){
                                event.stopPropagation();
                                $('.IM_cancel_app').css("display","block");
                                return false;
                            })
                            $(document).click(function(){
                                $('.IM_cancel_app').css("display","none");
                            })
                        </script>
                    </div>
                    <div class="addMid clearfloat">
                        <p >
                            <b>回复率</b>
                            <b><span>89%</span></b>
                        </p>
                        <p class='reply_time'>
                            <b>订单确认时间</b>
                            <b><span>1分钟</span></b>
                        </p>
                        <p>
                            <b>收到评价</b>
                            <b id="add_hom"><span>315条</span></b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--右侧预订信息结束-->
    </div>
    <!--详情页第一部分结束-->
    <!--详情页第二部分开始-->
    <div class='main-2' id="room">
        <div class='auto_m'>
            <!--文字内容开始-->
            <div class='intro_par'>
                <!--房源介绍开始-->
                <div class="intro padding_t clearfloat">
                    <h4 class='fl fl_room lineH18'>房源介绍</h4>
                    <div class='fl fl_p relave room_jies'>

                        <?php foreach($users as $k=>$v){?>
                        <?php echo $v->room_desc?>
                        <?php }?>
                    </div>
                    <div class='zhan_off'>
                        <div class='room_zhan'>
                            <h4>地理位置</h4>
                            <p class="huan">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->room_position?>
                                <?php }?>
                                <br>
                            </p>
                        </div>
                        <div  class='room_zhan'>
                            <h4>交通情况</h4>
                            <p class="huan">
                                <br>
                            </p>
                        </div>
                        <div  class='room_zhan'>
                            <h4>周边情况</h4>
                            <p class="huan">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->room_rim?>
                                <?php }?>
                                <br>
                            </p>
                        </div>
                        <input type="hidden" name="roommoreInfo" id="roommoreInfo" value="位置、交通、周边">
                    </div>
                    <a href="javascript:;" class="more_Instro relave" style="display:none">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>更多位置、交通、周边</span>
                        <i class='absot more_btn'></i></a>
                </div>
            </div>
            <!--基本信息-->
            <div class="intro padding_t clearfloat">
                <!--表格介绍-->
                <h4 class="updetail fl_room fl" >基本信息</h4>
                <ul class="table fl fl_p">
                    <li>房源类型：</b>
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->h_id?>
                                <?php }?>
                            </span>
                    </li>
                    <li>卫生间：
                            <span class="shuxingzhi">
				<?php foreach($users as $k=>$v){?>
                                <?php echo $v->room_toilet?>
                                <?php }?>
                            </span>
                    </li>
                    <!--
                    <li>被单更换：
                        <span class="shuxingzhi">
                            每客一换
                        </span>
                    </li>
                    -->

                    <!-- <li>是否地下室：<span class="shuxingzhi">否</span></li> -->

                    <!--
                    <li>双人床：
                                    <span class="shuxingzhi">
                                            1.8mx2m（1张）
                                    </span>
                    </li>
                    -->
                    <li>双人床：
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->bed_num?>
                                <?php }?>
                            </span>
                    </li>
                </ul>
            </div>
            <!--配套设施-->
            <div class="intro sup_fac padding_t clearfloat">
                <h4 class="fo_free fl_room fl">配套设施</h4>
                <ul class="forfree fl fl_p relave peitao_ul">
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao8'></span>
                        <?php foreach($users as $k=>$v){?>
                        <?php echo $v->s_id?>
                        <?php }?>

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao2'></span>
                        无线wifi
                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao3'></span>有线网络

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao4'></span>电梯

                    </li>
                    <li class="no relave lineH36">
                        <span class='absot pt_span peitao5'></span>停车位

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao6'></span>空调

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao7'></span>暖气

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao8'></span>冰箱

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao9'></span>洗衣机

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao10'></span>电视

                    </li>
                    <li class="no relave lineH36">
                        <span class='absot pt_span peitao11'></span>电脑

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao12'></span>饮水机

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao13'></span>拖鞋

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao14'></span>淋浴

                    </li>
                    <li class="no relave lineH36">
                        <span class='absot pt_span peitao15'></span>浴缸

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao17'></span>毛巾浴巾

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao18'></span>保安

                    </li>
                    <li class="no relave lineH36">
                        <span class='absot pt_span peitao19'></span>对讲系统

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao20'></span>无障碍设施

                    </li>
                    <li class="no relave lineH36">
                        <span class='absot pt_span peitao21'></span>早餐

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao22'></span>可以吸烟

                    </li>
                    <li class="no relave lineH36">
                        <span class='absot pt_span peitao23'></span>允许聚会

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao24'></span>欢迎小孩

                    </li>
                    <li class="yes relave lineH36">
                        <span class='absot pt_span peitao25'></span>欢迎老人

                    </li>
                    <li class="no relave lineH36">
                        <span class='absot pt_span peitao26'></span>可养宠物

                    </li>
                    <li class="no relave lineH36">
                        <span class='absot pt_span peitao27'></span>牙具香皂

                    </li>
                    <a href="javascript:;" class='C-ff5d51 more_peitao absot'><span>更多</span><i class='absot more_btn'></i></a>
                </ul>
            </div>
            <!--提供服务-->
            <!--特色服务-->
            <!--收费说明-->
            <div class="intro padding_t clearfloat">
                <h4 class="updetail fl_room fl" id="room">收费说明</h4>
                <ul class="table fl fl_p ruzhu_marT">
                    <li class='pay_proportion'>预付订金：<span class="shuxingzhi">100%</span>&nbsp;&nbsp;<b>提交订单后，支付总房费的100%作为预付订金交付蚂蚁平台</b></li>
                    <li>退订政策：
				                     <span class="shuxingzhi C-ff5d51">
				                    	 <span class="shuxingzhi C-ff5d51 zhu_rule relave">
				                        	入住前<span>1</span>天可全额退款<i class='more_btn absot'></i>
					            	</span>
                    </li>
                    <div class="c_bar_box">
                        <div class="c_tip_bar1 c_position1">
                            <p>入住日前<i class='time_day'>1</i>天</p>
                            <i>18:00</i></p>
                        </div>
                        <div class="c_tip_bar2 c_position2">
                            <p>入住日当天</p>
                            <i>18:00</i></p>
                        </div>
                        <div class="c_tip_bar2 c_position3">
                            <p>退房当天</p>
                            <i>12:00</i></p>
                        </div>
                        <div class="c_sanj c_position7 asote">
                            <p class="sanj asote"></p>
                            如取消订单， 全额退款
                        </div>
                        <div class="c_sanj c_position8 asote">
                            <p class="sanj asote"></p>
                            如取消订单，&nbsp;&nbsp;&nbsp; 扣除第一天房费
                        </div>
                        <div class="c_sanj c_position9 asote">
                            <p class="sanj asote"></p>
                            如提前退房，18：00之前取消订单，扣除当天房费；18：00之后取消订单，扣除当天及次日房费
                        </div>
                    </div>
                    <li class='mt15 table_pay'>
                        <strong class='shuxingzhi'>以下费用由房东线下额外收取，不包含在房费中。</strong>
                        <ul class='table table_pay_ul'>
                            <li><strong>押金：</strong>
                                    <span class="shuxingzhi">
                                        <?php foreach($users as $k=>$v){?>
                                        <?php echo $v->room_deposit?>
                                        <?php }?>
                                    </span>
                            </li>

                            <li><strong>加床：</strong>
                                    <span class="shuxingzhi">
                                        <?php foreach($users as $k=>$v){?>
                                        <?php echo $v->is_bed?>
                                        <?php }?>
                                    </span>
                                <b></b>
                            </li>

                            <li><strong>做饭：</strong>
                                    <span class="shuxingzhi">
                                        <?php foreach($users as $k=>$v){?>
                                        <?php echo $v->is_meal?>
                                        <?php }?>
                                    </span><b>无调料</b>
                            </li>

                            <li><strong>清洁费：</strong>
                                    <span class="shuxingzhi">
                                        <?php foreach($users as $k=>$v){?>
                                        <?php echo $v->is_clean_money?>
                                        <?php }?>
                                    </span><b>清洁费通常由房东一次性收取。如果入住过程中需要清扫产生额外费用，请参考房东相关规定。</b>
                            </li>
                        </ul>
                        <span>温馨提示：房东提供的服务可能会收费，不在以上费用中。请谨慎核对，以免发生纠纷。</span>
                    </li>

                </ul>
            </div>
            <!--入住须知-->
            <div class="intro padding_t clearfloat">
                <h4 class="updetail fl_room fl" id="room">入住须知</h4>
                <ul class="table fl fl_p ruzhu_marT">
                    <li>接待时间：
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->start_time?>
                                <?php }?>
                            </span>
                    </li>
                    <li>最少入住：
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->least_date?>
                                <?php }?>
                            </span>
                        <b class='C-ff5d51 calendarB'>查看可租状态</b>
                    </li>
                    <li>退房时间：
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->end_time?>
                                <?php }?>
                            </span>
                    </li>
                    <li>最多入住：
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->most_date?>
                                <?php }?>
                            </span>
                    </li>
                    <li>入住时间：
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->receive_time?>
                                <?php }?>
                            </span>
                    </li>
                    <li>发票：
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->is_bill?>
                                <?php }?>
                            </span>
                    </li>
                    <li>外宾接待：
                            <span class="shuxingzhi">
                                <?php foreach($users as $k=>$v){?>
                                <?php echo $v->is_receive_visitor?>
                                <?php }?>
                            </span>
                    </li>
                </ul>
            </div>
        </div>
        <!--蚂蚁提示-->
        <div class="intro padding_t prompt clearfloat">
            <h4 class='fl fl_room lineH26'>蚂蚁提示</h4>
            <div class='fl fl_p'>
                <p class='lineH24 huan'>入住后如您认为照片与房间实质有太大差异，蚂蚁客服将对双方提出的证据进行认定，如属实，未入住天数的费用将全额退款。</p>
            </div>

        </div>
    </div>
</div>

</div>
<!--详情页第二部分结束-->
<!-- 详情页第三部分开始 -->
<style>
    .no_score{
        margin-bottom: 10px;
        padding-bottom: 20px;
        border-bottom: 1px solid #dce0e0;
    }
</style>
<div class='main-3' id="pingjia">
    <div class='auto_m'>
        <!--房源评价-->
        <div class="pingjia">
            <ul class="pingjiaTit no_score clearfloat">
                <li id="landComment"  class="on ping_up"><i>本房源评价</i>
                    <p id="landCommentP" style="display: block;"><span id="ffComment">(7)</span></p>
                </li>
                <li id="lordComment" class="ping_down"><i>房东收到的所有评价</i>
                    <p id="lordCommentP" style="display: block;"><span  id="llComment">(315)</span></p>
                </li>
                <div class="pjContent">
                    <input name="content" id="hasContent" type="checkbox">
                    <label>有内容的评价</label>
                </div>
            </ul>
            <!--本房源评价-->
            <div class="attached" id="contact_roomer">
                <div class="score" 7>
                    <div class="scoreL">
                        <p>房源总好评率</p>
                        <p class='C_00897b font24'>100%</p>
                        <div class="star relave"><span class='star_grey'></span><span class='star_red absot' style="width:100%"></span></div>
                    </div>
                    <div class="scoreR">
                        <div class="scoreR1 clearfloat">
                            <span class='fl scoreR3_span'>整洁卫生</span>
                            <div class="starR relave fl">
                                <span class='star_grey'></span>
                                <span class='star_red absot' style='width:100%'></span>
                            </div>
                        </div>
                        <div class="scoreR2">
                            <span class='fl scoreR3_span'>交通位置</span>
                            <div class="starR relave fl">
                                <span class='star_grey'></span>
                                <span class='star_red absot' style='width:100%'></span>
                            </div>
                        </div>
                        <div class="scoreR3">
                            <span class='fl scoreR3_span'>设施环境</span>
                            <div class="starR relave fl">
                                <span class='star_grey'></span>
                                <span class='star_red absot' style='width:100%'></span>
                            </div>
                        </div>
                        <div class="scoreR4">
                            <span class='fl scoreR3_span'>房东服务</span>
                            <div class="starR relave fl">
                                <span class='star_grey'></span>
                                <span class='star_red absot' style='width:100%'></span>
                            </div>
                        </div>
                        <div class="scoreR5">
                            <span class='fl scoreR3_span'>性价比</span>
                            <div class="starR relave fl">
                                <span class='star_grey'></span>
                                <span class='star_red absot' style='width:100%'></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!--本房源评价End-->
                <div id='lodgeunitPJ_cnt'>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_54x54c.jpg" alt="" />
										<span>
										   <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->name?>
                                            <?php }?>
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="bottom absot">
                                    <div class="time">
                                        <span>
                                            <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->c_time?>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl '>
                                    <h4>房东回复：</h4>
                                    <p>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>
                                                <?php foreach($set as $k=>$v){?>
                                                <?php  echo $v->c_time?>
                                                <?php }?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs21/M00/B2/D6/CgEHFVcxdQeR0,YLAABZ61lXbWE653.jpg_54x54c.jpg" alt="" />
										<span>
										   <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->name?>
                                            <?php }?>
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="bottom absot">
                                    <div class="time">
                                        <span>
                                            <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->c_time?>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl '>
                                    <h4>房东回复：</h4>
                                    <p>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>
                                                <?php foreach($set as $k=>$v){?>
                                                <?php echo $v->c_time?>
                                                <?php }?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_54x54c.jpg" alt="" />
										<span>
										   <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->name?>
                                            <?php }?>
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="bottom absot">
                                    <div class="time">
                                        <span>
                                            <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->c_time?>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl '>
                                    <h4>房东回复：</h4>
                                    <p>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>
                                                <?php foreach($set as $k=>$v){?>
                                                <?php echo $v->c_time?>
                                                <?php }?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs21/M04/B2/C1/CgEHFVcxdFX,HwoFAABhlK8CvOk554.jpg_54x54c.jpg" alt="" />
										<span>
										   <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->name?>
                                            <?php }?>
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="bottom absot">
                                    <div class="time">
                                        <span>
                                            <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->c_time?>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl '>
                                    <h4>房东回复：</h4>
                                    <p>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>
                                                <?php foreach($set as $k=>$v){?>
                                                <?php echo $v->c_time?>
                                                <?php }?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_54x54c.jpg" alt="" />
										<span>
										   <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->name?>
                                            <?php }?>
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="bottom absot">
                                    <div class="time">
                                        <span>
                                            <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->c_time?>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl '>
                                    <h4>房东回复：</h4>
                                    <p>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>
                                                <?php foreach($set as $k=>$v){?>
                                                <?php echo $v->c_time?>
                                                <?php }?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M05/C7/30/CgEHP1cxdOXUq,Q-AABd0owykF8682.jpg_54x54c.jpg" alt="" />
										<span>
										   <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->name?>
                                            <?php }?>
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="bottom absot">
                                    <div class="time">
                                        <span>
                                            <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->c_time?>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl '>
                                    <h4>房东回复：</h4>
                                    <p>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>
                                                <?php foreach($set as $k=>$v){?>
                                                <?php echo $v->c_time?>
                                                <?php }?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_54x54c.jpg" alt="" />
										<span>
										    <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->name?>
                                            <?php }?>
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="bottom absot">
                                    <div class="time">
                                        <span>
                                            <?php foreach($set as $k=>$v){?>
                                            <?php echo $v->c_time?>
                                            <?php }?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl '>
                                    <h4>房东回复：</h4>
                                    <p>
                                        <?php foreach($set as $k=>$v){?>
                                        <?php echo $v->content?>
                                        <?php }?>
                                    </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>
                                                <?php foreach($set as $k=>$v){?>
                                                <?php echo $v->c_time?>
                                                <?php }?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--房东收到的所有房源评价-->
            <div class="attached" id="attached_home02">

                <div class="score" 	 	315>
                    <div class="scoreL">
                        <p>房东总好评率</p>
                        <p class='C_00897b font24'>98%</p>
                        <div class="star relave"><span class='star_grey'></span><span class='star_red absot' style="width:98%"></span></div>
                    </div>
                    <div class="scoreR">
                        <div class="scoreR1 clearfloat">
                            <span class='fl scoreR3_span'>整洁卫生</span>
                            <div class="starR relave fl"><span class='star_grey'></span>
                                <span class='star_red absot' style="width:97%"></span>
                            </div>
                        </div>
                        <div class="scoreR2">
                            <span class='fl scoreR3_span'>交通位置</span>
                            <div class="starR relave fl"><span class='star_grey'></span>
                                <span class='star_red absot' style="width:98%"></span>
                            </div>
                        </div>
                        <div class="scoreR3">
                            <span class='fl scoreR3_span'>设施环境</span>
                            <div class="starR relave fl"><span class='star_grey'></span>
                                <span class='star_red absot' style="width:95%"></span>
                            </div>
                        </div>
                        <div class="scoreR4">
                            <span class='fl scoreR3_span'>房东服务</span>
                            <div class="starR relave fl"><span class='star_grey'></span>
                                <span class='star_red absot' style="width:99%"></span>
                            </div>
                        </div>
                        <div class="scoreR5">
                            <span class='fl scoreR3_span'>性价比</span>
                            <div class="starR relave fl"><span class='star_grey'></span>
                                <span class='star_red absot' style="width:99%"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--本房源评价End-->
                <div id='lordPJ_cnt'>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs21/M00/B2/D6/CgEHFVcxdQeR0,YLAABZ61lXbWE653.jpg_54x54c.jpg" alt="" />
										<span>
										      maifaming
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        这个房子不错 交通方便 房子干净 比较新 还是密码锁 高科技
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850341894" target=_blank><span class='absot'></span>鸟巢附近精致温馨两居，5分钟到地铁</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-17 21:07</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M05/C7/30/CgEHP1cxdOXUq,Q-AABd0owykF8682.jpg_54x54c.jpg" alt="" />
										<span>
										      138****1936
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        房子很舒适！比市中心的房子大！离地铁公交站都近！附近吃的很多！还可以送外卖！房东小杜很热情！一直陪我们等到车来送我们上车！很是谢谢！下次会再来！
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850341894" target=_blank><span class='absot'></span>鸟巢附近精致温馨两居，5分钟到地铁</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-17 06:27</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl'>
                                    <h4>房东回复：</h4>
                                    <p>感谢张姐的好评 您的满意就是我们的满意 下次再来哦</p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>2016-05-17 17:07</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs21/M00/B2/D6/CgEHFVcxdQeR0,YLAABZ61lXbWE653.jpg_54x54c.jpg" alt="" />
										<span>
										      maifaming
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        房间小 单价格就在那里 总体还是不错的
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850259138" target=_blank><span class='absot'></span>奥林匹克公园附近 精致一居 6分钟到地铁站</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-16 17:22</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_54x54c.jpg" alt="" />
										<span>
										      153****2869
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        房东很热情，人很好。还买了水果放在这里
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850345114" target=_blank><span class='absot'></span>天坛附近 浪漫温馨两居  10分钟到天坛</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-14 10:08</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl'>
                                    <h4>房东回复：</h4>
                                    <p>首先感谢您的认可和理解 有机会再过来哦</p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>2016-05-16 00:33</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M05/C7/30/CgEHP1cxdOXUq,Q-AABd0owykF8682.jpg_54x54c.jpg" alt="" />
										<span>
										      177****5886
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        房东非常好，房间也不错！给个赞！
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850271449" target=_blank><span class='absot'></span>奥林匹克公园附近 精致三居 6分钟到地铁站</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-12 14:36</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl'>
                                    <h4>房东回复：</h4>
                                    <p>谢谢美女好评 下次再来哦</p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>2016-05-16 00:52</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs21/M04/B2/C1/CgEHFVcxdFX,HwoFAABhlK8CvOk554.jpg_54x54c.jpg" alt="" />
										<span>
										      133****8889
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        交通便利  房子干净整洁 房东热情
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850339328" target=_blank><span class='absot'></span>近北京西客站温馨舒适三居</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-08 13:11</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_54x54c.jpg" alt="" />
										<span>
										      180****7371
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        宽敞，干净，舒适，步行到地铁，公交站，有去动物园、天文馆695路、天坛公园、王府井特11路，北医三院484路公交
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850259144" target=_blank><span class='absot'></span>奥林匹克公园附近 精致二居 6分钟到地铁站</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-05 10:17</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl'>
                                    <h4>房东回复：</h4>
                                    <p>谢谢您的好评 非常好的一家人住宿 只是时间差没来的及去亲自接待您 下次有机会一定要去接待您 </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>2016-05-16 00:51</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs21/M04/B2/C1/CgEHFVcxdFX,HwoFAABhlK8CvOk554.jpg_54x54c.jpg" alt="" />
										<span>
										      136****2555
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        房东帅哥服务真的很好，我们来的有老有小，房东都到地铁这边来接我们了！老人觉得超级好房东，多给几个赞！谢谢！暑假有朋友来推荐给朋友！房屋干净整洁有家的感觉
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850259138" target=_blank><span class='absot'></span>奥林匹克公园附近 精致一居 6分钟到地铁站</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-01 15:50</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl'>
                                    <h4>房东回复：</h4>
                                    <p>哈哈 谢谢姐姐的夸奖和肯定 你们也是很好的一家人 期待您推荐的朋友过来 </p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>2016-05-16 00:26</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs21/M04/B2/C1/CgEHFVcxdFX,HwoFAABhlK8CvOk554.jpg_54x54c.jpg" alt="" />
										<span>
										      188****5092
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        房东人挺好的，房间东西齐全，住的很舒适
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850259138" target=_blank><span class='absot'></span>奥林匹克公园附近 精致一居 6分钟到地铁站</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-05-01 12:05</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                            <div class='roomer_reply relave clearfloat'>
                                <img  src="http://i1.mayi.com/gjfs15/M09/9F/53/CgEHP1cNrXblJd2LAAAM6R3T5sk892.jpg_110x110c.jpg" alt="" class='fl roomer_toux'/>
                                <div class='reply_cnt fl'>
                                    <h4>房东回复：</h4>
                                    <p>谢谢肯定 欢迎有机会再来</p>
                                    <div class="bottom absot reply_time">
                                        <div class="time">
                                            <span>2016-05-16 00:23</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三条评价-->
                    <div class="pingjiaDes clearfloat" >
                        <div class='roomer_photo fl'>
                            <img  src="http://i1.mayi.com/gjfs21/M04/B2/C1/CgEHFVcxdFX,HwoFAABhlK8CvOk554.jpg_54x54c.jpg" alt="" />
										<span>
										      133****8889
										</span>
                        </div>
                        <div id="houseDes" class='fl'>
                            <!--评价内容-->
                            <div class='pingjia_tiao relave'>
                                <div class="des">
                                    <div class='pingjia_cnt1'>
                                        环境优雅  交通便利  房东热情
                                    </div>
                                </div>
                                <div class='more_room_instro absot'><a href="/room/850339328" target=_blank><span class='absot'></span>近北京西客站温馨舒适三居</a></div>
                                <div class="bottom absot">
                                    <div class="time"><span>2016-04-30 20:27</span></div>
                                </div>
                            </div>
                            <!--房东回复-->
                        </div>
                    </div>
                    <div class="page_turn" id="lordPJ_cntpage">
                        <a class="pg-active" href="javascript:loadPageComment('1','32','315','2')" rel="nofollow">1</a>
                        <a  href="javascript:loadPageComment('2','32','315','2')" rel="nofollow">2</a>
                        <a  href="javascript:loadPageComment('3','32','315','2')" rel="nofollow">3</a>
                        <a  href="javascript:loadPageComment('4','32','315','2')" rel="nofollow">4</a>
                        <a  href="javascript:loadPageComment('5','32','315','2')" rel="nofollow">5</a>
                        <a href="javascript:void(0)">...</a>
                        <a href="javascript:loadPageComment('32','32','315','2')" rel="nofollow">32</a>

                        <a href="javascript:loadPageComment('2','32','315','2')" rel="nofollow" class="up-page">&gt;</a>
                    </div>
                </div>
            </div>
            <!--房源评价结束-->
        </div>
    </div>
    <!-- 详情页第三部分结束 -->
    <!-- 详情页第四部分开始 -->
    <div class='main-2 main-4' id="address">
        <div class='auto_m'>
            <div class="intro sup_fac jiaotong bon clearfloat">
                <!--地址地图-->
                <div class="address relave" >
                    <h6 class='absot room_adress'>房源地址：<span>北京市丰台区蒲黄榆芳城园</span></h6>
                    <!--引用百度地图API-->
                    <div class="baiduMap" id="dituContent">
                        <script type="text/javascript">
                            //坐标点
                            var latlng =$('#latlng').val().split(",");

                            var firstPoint=latlng[0];
                            var secendPoint=latlng[1];

                            var map;

                            //创建和初始化地图函数：
                            function initMap(){
                                createMap();//创建地图
                                setMapEvent();//设置地图事件
                                addMapControl();//向地图添加控件
                                addMarker();//向地图中添加marker
                                //addEvent();
                            }

                            function addEvent(){
                                map.addEventListener("zoomend", function(e){
                                    var point = new BMap.Point(secendPoint,firstPoint);
                                    map.centerAndZoom(point,map.getZoom());
                                });
                            }
                            //创建地图函数：
                            function createMap(){
                                var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                                var point = new BMap.Point(secendPoint,firstPoint);//定义一个中心点坐标
                                map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
                                window.map = map;//将map变量存储在全局
                            }

                            //地图事件设置函数：
                            function setMapEvent(){
                                map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
                                /*map.enableScrollWheelZoom();*/  //启用地图滚轮放大缩小
                                map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
                                map.enableKeyboard();//启用键盘上下左右键移动地图
                            }

                            //地图控件添加函数：
                            function addMapControl(){
                                //向地图中添加缩放控件
                                var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
                                map.addControl(ctrl_nav);
                                //向地图中添加缩略图控件
                                var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
                                map.addControl(ctrl_ove);
                                //向地图中添加比例尺控件
                                var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
                                map.addControl(ctrl_sca);
                            }

                            var pointMarker = secendPoint + "|" + firstPoint;

                            //标注点数组
                            var markerArr = [{title:"天坛附近 浪漫温馨两居  10分钟到天坛",content:"北京市丰台区蒲黄榆芳城园",point:pointMarker,isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
                            ];
                            //创建marker
                            function addMarker(){
                                for(var i=0;i<markerArr.length;i++){
                                    var json = markerArr[i];
                                    var p0 = json.point.split("|")[0];
                                    var p1 = json.point.split("|")[1];

                                    var point = new BMap.Point(p0,p1);
                                    //var iconImg = createIcon(json.icon);
                                    //var marker = new BMap.Marker(point,{icon:iconImg});
                                    var marker = new BMap.Marker(point);
                                    var iw = createInfoWindow(i);
                                    var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                                    //marker.setLabel(label);
                                    map.addOverlay(marker);
                                    label.setStyle({
                                        borderColor:"#808080",
                                        color:"#333",
                                        cursor:"pointer"
                                    });

                                    (function(){
                                        var index = i;
                                        var _iw = createInfoWindow(i);
                                        var _marker = marker;
                                        _marker.addEventListener("click",function(){
                                            this.openInfoWindow(_iw);
                                        });
                                        _iw.addEventListener("open",function(){
                                            //_marker.getLabel().hide();
                                        })
                                        _iw.addEventListener("close",function(){
                                            _marker.getLabel().show();
                                        })
                                        label.addEventListener("click",function(){
                                            _marker.openInfoWindow(_iw);
                                        })
                                        if(!!json.isOpen){
                                            label.hide();
                                            _marker.openInfoWindow(_iw);
                                        }
                                    })()
                                }
                            }
                            //创建InfoWindow
                            function createInfoWindow(i){
                                var json = markerArr[i];
                                var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
                                return iw;
                            }
                            //创建一个Icon
                            function createIcon(json){
                                var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
                                return icon;
                            }
                            initMap();//创建和初始化地图
                        </script>
                    </div>

                </div>
            </div>
            <div class="intro ticket clearfloat">
                <h4 class=" fl_room fl">交通信息</h4>
                <ul class="forfree fl jiaotong_ul">
                    <!--机场距离-->
                    <li class="jiaotong1 relave fl">
                        <span class='absot'></span>
                        <div class='paddingB_10'>
                            <strong>首都国际机场</strong>
                            <p>驾车距离32.3公里（约52分钟）</p>
                        </div>
                        <div class='paddingB_10'>
                            <strong>南苑机场</strong>
                            <p>驾车距离12.3公里（约38分钟）</p>
                        </div>
                    </li>
                    <!--车站距离-->
                    <li class="jiaotong1 jiaotong2 relave fl">
                        <span class='absot'></span>
                        <div class='paddingB_10'>
                            <strong>北京西站</strong>
                            <p>驾车距离15.9公里（约44分钟）</p>
                        </div>
                        <div class='paddingB_10'>
                            <strong>北京南站</strong>
                            <p>驾车距离5.8公里（约24分钟）</p>
                        </div>
                    </li>
                    <!--附近景点距离-->
                    <li class="jiaotong1 jiaotong3 relave fl bon">
                        <span class='absot'></span>
                        <div class='paddingB_10'>
                            <strong>天安门</strong>
                            <p>驾车距离7.8公里（约21分钟）</p>
                        </div>
                        <div class='paddingB_10'>
                            <strong>故宫</strong>
                            <p>驾车距离8.8公里（约25分钟）</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--景点门票-->
            <div class="intro ticket clearfloat">
                <!--表格介绍-->
                <h4 class='fl_room fl'>景点门票</h4>
                <ul class="ticket_ul clearfloat fl">
                    <li class='fl'>
                        北京景山公园成人票·<span class='xin_jia C_00897b'>￥2</span>&nbsp;<span class='jiu_jia'>￥2</span>
                    </li>
                    <li class='fl'>
                        北京野生动物园成人票·<span class='xin_jia C_00897b'>￥118</span>&nbsp;<span class='jiu_jia'>￥130</span>
                    </li>
                    <li class='fl'>
                        北京大观园成人票·<span class='xin_jia C_00897b'>￥25</span>&nbsp;<span class='jiu_jia'>￥40</span>
                    </li>
                    <li class='fl'>
                        圆明园成人票 ·<span class='xin_jia C_00897b'>￥23</span>&nbsp;<span class='jiu_jia'>￥25</span>
                    </li>
                    <li class='order_ticket_li'>下单时可选择优惠购票</li>
                </ul>
            </div>
            <!--该房东的其他房源-->
            <div class='landlord_room' id="landlord_room" >
                <h4 class='near_h4'>该房东的其他房源</h4>
                <!--图片轮播-->
                <div class="wrapper infiniteCarousel" id="jssor_2"  style="position: relative; top: 0px; left: 0px; width: 1190px;height:242px;">
                    <div class='clearfloat nearby_room' data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1190px;overflow: hidden;height:242px;">
                        <div class='fl cont relave'>
                            <a href="/room/850259138">
                                <img src="http://i1.mayi.com/gjfs17/M06/6D/AA/CgEHXlYLdA7b7f2iACnXajY1rDQ155.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>288</span>
                                    </p>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">奥林匹克公园附近 精致一居 6...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">5.0分</b>·
                                            <b>19条评论</b>·
                                            <b><font>一</font>居</b>
                                            <b class="d-km fr">距离18.86km</b>
                                        </nav>
                                    </dd>
                                </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850259144">
                                <img src="http://i1.mayi.com/gjfs17/M08/71/8F/CgEHX1YLgOOh7HwUACP-6S5Ixzw295.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>460</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_850259144" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.5折，满30天9.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">奥林匹克公园附近 精致二居 6...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">5.0分</b>·
                                            <b>18条评论</b>·
                                            <b><font>二</font>居</b>
                                            <b class="d-km fr">距离18.86km</b>
                                        </nav>
                                    </dd>
                                </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850271449">
                                <img src="http://i1.mayi.com/gjfs18/M02/B3/3F/CgEHH1ZiOvfOmmf8AAkIO54dG3w590.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>568</span>
                                    </p>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">奥林匹克公园附近 精致三居 6...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">5.0分</b>·
                                            <b>11条评论</b>·
                                            <b><font>三</font>居</b>
                                            <b class="d-km fr">距离18.86km</b>
                                        </nav>
                                    </dd>
                                </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850273058">
                                <img src="http://i1.mayi.com/gjfs17/M0B/EF/82/CgEHX1Y8Hn7NLLYOACQDeSQU7Kc550.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>498</span>
                                    </p>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">北京西站最近三居 6分钟到达地...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">4.8分</b>·
                                            <b>21条评论</b>·
                                            <b><font>三</font>居</b>
                                            <b class="d-km fr">距离10.12km</b>
                                        </nav>
                                    </dd>
                                </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850287941">
                                <img src="http://i1.mayi.com/gjfs16/M0A/F7/A5/CgEHQlY8Jy7hueXPACQ8zRTSLZo288.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>580</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_850287941" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.5折，满30天9.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">北京西站豪华大三居</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">4.7分</b>·
                                            <b>22条评论</b>·
                                            <b><font>三</font>居</b>
                                            <b class="d-km fr">距离10.08km</b>
                                        </nav>
                                    </dd>
                                </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850292300">
                                <img src="http://i1.mayi.com/gjfs18/M01/5D/4F/CgEHH1ZVix75gyYKAB54WVeczhs143.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>488</span>
                                    </p>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">临近北京西站温馨二居，20分钟...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">5.0分</b>·
                                            <b>20条评论</b>·
                                            <b><font>二</font>居</b>
                                            <b class="d-km fr">距离10.08km</b>
                                        </nav>
                                    </dd>
                                </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850339328">
                                <img src="http://i1.mayi.com/gjfs15/M04/C6/33/CgEHQFYCYAiTft9KABXnxx5ULXE767.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>450</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_850339328" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.5折，满30天9.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">近北京西客站温馨舒适三居</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">5.0分</b>·
                                            <b>53条评论</b>·
                                            <b><font>三</font>居</b>
                                            <b class="d-km fr">距离10km</b>
                                        </nav>
                                    </dd>
                                </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850341894">
                                <img src="http://i1.mayi.com/gjfs16/M04/8C/D0/CgEHXVZiRJjD,m9bAAtSdi00gL8600.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>438</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_850341894" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.5折，满30天9.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">鸟巢附近精致温馨两居，5分钟到...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">5.0分</b>·
                                            <b>17条评论</b>·
                                            <b><font>二</font>居</b>
                                            <b class="d-km fr">距离19.69km</b>
                                        </nav>
                                    </dd>
                                </dl>

                            </a>

                        </div>
                    </div>
                    <span class="arrow jssora03l" data-u="arrowleft" data-autocenter="2"></span>
                    <span class="arrow jssora03r" data-u="arrowright" data-autocenter="2"></span>
                </div>
            </div>
            <!--附近房源-->
            <div class='near_room' >
                <h4 class='near_h4'>附近推荐房源</h4>
                <!--图片轮播-->
                <div class="wrapper infiniteCarousel" id="jssor_1"  style="position: relative; top: 0px; left: 0px; width: 1190px;height:242px;">
                    <div class='clearfloat nearby_room' data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1190px;overflow: hidden;height:242px;">
                        <div class='fl cont relave'>
                            <a href="/room/147226100">
                                <img src="http://i1.mayi.com/gjfs15/M02/37/3B/CgEHQVYEtjaYkOfsACRI7Jo9-tA901.jpg_585x360c.jpg" alt=""/>
                            </a>
                            <div class='moy_a asote clearfloat'>
                                <p class="room_price fl">
                                    <span class="fl"><b>￥</b>428</span>
                                </p>
                                <div class="xiq_count_icon" >
                                    <div class="ft-layer" id="dis_147226100" style="display: none;">
                                        <div class="main-wz">
                                            <span class="la-nav">日常优惠</span><br />满30天7.1折
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <dl>
                                <dt><b class="dx-b01"><a class="title" href="/room/147226100">两居左安门新坐标步行10分钟到...</a></b>
                                </dt>
                                <dd>
                                    <nav class="d-nr">
                                        <b class="C_22bb62">4.9分</b>·
                                        <b>14条评论</b>·
                                        <b><font>二</font>居</b>
                                        <b class="d-km fr">距离0.57km</b>
                                    </nav>
                                </dd>
                            </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850276932">
                                <img src="http://i1.mayi.com/gjfs15/M08/AD/09/CgEHQVYMyeiro1RvAAI05RlLznI815.jpg_585x360c.jpg" alt=""/>
                            </a>
                            <div class='moy_a asote clearfloat'>
                                <p class="room_price fl">
                                    <span class="fl"><b>￥</b>438</span>
                                </p>
                                <div class="xiq_count_icon" >
                                    <div class="ft-layer" id="dis_850276932" style="display: none;">
                                        <div class="main-wz">
                                            <span class="la-nav">日常优惠</span><br />满7天9.6折，满30天9.0折
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <dl>
                                <dt><b class="dx-b01"><a class="title" href="/room/850276932">二环路方庄地铁1分钟邻崇文门天...</a></b>
                                </dt>
                                <dd>
                                    <nav class="d-nr">
                                        <b class="C_22bb62">4.9分</b>·
                                        <b>7条评论</b>·
                                        <b><font>二</font>居</b>
                                        <b class="d-km fr">距离0.67km</b>
                                    </nav>
                                </dd>
                            </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850364629">
                                <img src="http://i1.mayi.com/gjfs17/M00/FB/ED/CgEHX1Y8PPrSuSXuAAFYgeLKUGM908.jpg_585x360c.jpg" alt=""/>
                            </a>
                            <div class='moy_a asote clearfloat'>
                                <p class="room_price fl">
                                    <span class="fl"><b>￥</b>450</span>
                                </p>
                            </div>
                            <dl>
                                <dt><b class="dx-b01"><a class="title" href="/room/850364629">精装豪华两居 长租 短租</a></b>
                                </dt>
                                <dd>
                                    <nav class="d-nr">
                                        <b class="C_22bb62">5.0分</b>·
                                        <b><font>二</font>居</b>
                                        <b class="d-km fr">距离1.43km</b>
                                    </nav>
                                </dd>
                            </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850290684">
                                <img src="http://i1.mayi.com/gjfs16/M02/C7/85/CgEHXVXPTxHb1Sa3AAE0rdUI4fo663.jpg_585x360c.jpg" alt=""/>
                            </a>
                            <div class='moy_a asote clearfloat'>
                                <p class="room_price fl">
                                    <span class="fl"><b>￥</b>408</span>
                                </p>
                            </div>
                            <dl>
                                <dt><b class="dx-b01"><a class="title" href="/room/850290684">北京朝阳区精装两室一厅</a></b>
                                </dt>
                                <dd>
                                    <nav class="d-nr">
                                        <b><font>二</font>居</b>
                                        <b class="d-km fr">距离1.45km</b>
                                    </nav>
                                </dd>
                            </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850385700">
                                <img src="http://i1.mayi.com/gjfs15/M06/83/51/CgEHQFZ5I-2nfdMUAAf7kbsGLX0567.jpg_585x360c.jpg" alt=""/>
                            </a>
                            <div class='moy_a asote clearfloat'>
                                <p class="room_price fl">
                                    <span class="fl"><b>￥</b>408</span>
                                </p>
                                <div class="xiq_count_icon" >
                                    <div class="ft-layer" id="dis_850385700" style="display: none;">
                                        <div class="main-wz">
                                            <span class="la-nav">日常优惠</span><br />满30天8.0折
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <dl>
                                <dt><b class="dx-b01"><a class="title" href="/room/850385700">潘家园精装修豪华舒适两居室</a></b>
                                </dt>
                                <dd>
                                    <nav class="d-nr">
                                        <b class="C_22bb62">5.0分</b>·
                                        <b>4条评论</b>·
                                        <b><font>二</font>居</b>
                                        <b class="d-km fr">距离1.45km</b>
                                    </nav>
                                </dd>
                            </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850218144">
                                <img src="http://i1.mayi.com/gjfs17/M0B/63/04/CgEHYFYqFdWdID9KACjfvtmHt6E224.jpg_585x360c.jpg" alt=""/>
                            </a>
                            <div class='moy_a asote clearfloat'>
                                <p class="room_price fl">
                                    <span class="fl"><b>￥</b>468</span>
                                </p>
                            </div>
                            <dl>
                                <dt><b class="dx-b01"><a class="title" href="/room/850218144">肿瘤医院，古玩城，潘家园大厦，...</a></b>
                                </dt>
                                <dd>
                                    <nav class="d-nr">
                                        <b class="C_22bb62">5.0分</b>·
                                        <b>1条评论</b>·
                                        <b><font>二</font>居</b>
                                        <b class="d-km fr">距离1.46km</b>
                                    </nav>
                                </dd>
                            </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850340601">
                                <img src="http://i1.mayi.com/gjfs17/M00/9D/53/CgEHXlX30Qe6QZ5dAAEvcAi5crU036.jpg_585x360c.jpg" alt=""/>
                            </a>
                            <div class='moy_a asote clearfloat'>
                                <p class="room_price fl">
                                    <span class="fl"><b>￥</b>398</span>
                                </p>
                                <div class="xiq_count_icon" >
                                    <div class="ft-layer" id="dis_850340601" style="display: none;">
                                        <div class="main-wz">
                                            <span class="la-nav">日常优惠</span><br />满7天9.5折，满30天9.0折
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <dl>
                                <dt><b class="dx-b01"><a class="title" href="/room/850340601">潘家园肿瘤医院温馨舒适两室一厅</a></b>
                                </dt>
                                <dd>
                                    <nav class="d-nr">
                                        <b class="C_22bb62">5.0分</b>·
                                        <b>1条评论</b>·
                                        <b><font>二</font>居</b>
                                        <b class="d-km fr">距离1.64km</b>
                                    </nav>
                                </dd>
                            </dl>

                            </a>

                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/850445043">
                                <img src="http://i1.mayi.com/gjfs21/M0A/34/03/CgEHFlcpywWV3YfCAAX,r8mxZoA019.jpg_585x360c.jpg" alt=""/>
                            </a>
                            <div class='moy_a asote clearfloat'>
                                <p class="room_price fl">
                                    <span class="fl"><b>￥</b>398</span>
                                </p>
                                <div class="xiq_count_icon" >
                                    <div class="ft-layer" id="dis_850445043" style="display: none;">
                                        <div class="main-wz">
                                            <span class="la-nav">日常优惠</span><br />满7天9.9折，满30天9.8折
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <dl>
                                <dt><b class="dx-b01"><a class="title" href="/room/850445043">天安门十里河地铁站豪华两居室</a></b>
                                </dt>
                                <dd>
                                    <nav class="d-nr">
                                        <b class="C_22bb62">5.0分</b>·
                                        <b><font>二</font>居</b>
                                        <b class="d-km fr">距离1.77km</b>
                                    </nav>
                                </dd>
                            </dl>

                            </a>

                        </div>
                    </div>
                    <span class="arrow jssora03l" data-u="arrowleft" data-autocenter="2"></span>
                    <span class="arrow jssora03r" data-u="arrowright" data-autocenter="2"></span>
                </div>
            </div>
            <!--您可能喜欢的短租房源-->
            <div class='like_room'>
                <h4 class='near_h4'>您可能喜欢的短租房源</h4>
                <!--图片轮播-->
                <div class="wrapper infiniteCarousel" id="jssor_3"  style="position: relative; top: 0px; left: 0px; width: 1190px;height:242px;">
                    <div class='clearfloat nearby_room' data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1190px;overflow: hidden;height:242px;">
                        <div class='fl cont relave'>
                            <a href="/room/517649700">
                                <img src="http://i1.mayi.com/gjfs15/M0B/A9/09/CgEHP1bdERmcr9iHABitu0awfqo164.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>238</span>
                                    </p>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">豪华房精装修地铁十号线劲松站富...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b><font>一</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/539243700">
                                <img src="http://i1.mayi.com/gjfs01/M00/CB/07/wKhxwVBe4O2Ylq7jAAEk-CaMuA0278.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>350</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_539243700" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.6折，满30天9.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">肿瘤医院家属楼精装修2居短租</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b><font>二</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/540510400">
                                <img src="http://i1.mayi.com/gjfs08/M02/38/FE/wKhz9VR6sO6tecOeAAEZTaiCf5I945.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>338</span>
                                    </p>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">酒店式公寓 楼下地铁直达 国贸...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b><font>一</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/540518300">
                                <img src="http://i1.mayi.com/gjfs02/M01/06/C7/wKhzRlC0JKfWve3sAAFE6QWm7Qw783.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>268</span>
                                    </p>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">酒店式公寓 楼下地铁 直达国贸...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b><font>一</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/562054900">
                                <img src="http://i1.mayi.com/gjfs02/M03/64/66/wKhzRlCJT1v9tmcEAAJqYor0XxQ203.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>388</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_562054900" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.0折，满30天8.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">10号线燕莎时尚公寓，AAAA...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">5.0分</b>·
                                            <b>2条评论</b>·
                                            <b><font>一</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/574577300">
                                <img src="http://i1.mayi.com/gjfs22/M08/9D/DD/CgEHGFbKhpi0986TADpVLxzMWI8913.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>268</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_574577300" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.5折，满30天8.5折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">家一样的房子</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b><font>一</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/576275800">
                                <img src="http://i1.mayi.com/gjfs08/M06/0B/48/wKhz9VR1RPbyqajtAAeDEj2D7h4852.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>528</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_576275800" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.5折，满30天9.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">北京长安街商务套房【可住5人】</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">4.5分</b>·
                                            <b>2条评论</b>·
                                            <b><font>二</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/576572900">
                                <img src="http://i1.mayi.com/gjfs02/M00/B1/AA/wKhzR1Cm98OHB2xMAAGy5xIt,D8651.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>238</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_576572900" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.6折，满30天9.2折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">短租房</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">5.0分</b>·
                                            <b><font>一</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/588181800">
                                <img src="http://i1.mayi.com/gjfs03/M01/DB/02/wKhzGFDIBXPeL4,XAAHlG7qAc9U173.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>318</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_588181800" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.0折，满30天8.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">市中心~温馨家庭双床公寓~可住...</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">4.8分</b>·
                                            <b>6条评论</b>·
                                            <b><font>一</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                        <div class='fl cont relave'>
                            <a href="/room/608184000">
                                <img src="http://i1.mayi.com/gjfs03/M00/1B/E3/wKhzGVD,ak7aCKLnAAF218tS5IM094.jpg_585x360c.jpg" alt=""/>
                                <div class='moy_a asote clearfloat'>
                                    <p class="room_price fl">
                                        <span class="fl"><b>￥</b>528</span>
                                    </p>
                                    <div class="xiq_count_icon" >
                                        <div class="ft-layer" id="dis_608184000" style="display: none;">
                                            <div class="main-wz">
                                                <span class="la-nav">日常优惠</span><br />满7天9.5折，满30天9.0折
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <dl>
                                    <dt><b class="dx-b01">中关村大街上的高级公寓</b>
                                    </dt>
                                    <dd>
                                        <nav class="d-nr">
                                            <b class="C_22bb62">2.0分</b>·
                                            <b>2条评论</b>·
                                            <b><font>一</font>居</b>
                                        </nav>
                                    </dd>
                                </dl>
                            </a>
                        </div>
                    </div>
                    <span class="arrow jssora03l" data-u="arrowleft" data-autocenter="2"></span>
                    <span class="arrow jssora03r" data-u="arrowright" data-autocenter="2"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- 详情页第四部分结束 -->
</div>

</div>
<script>
    jssor_1_slider_init();
</script>
<!--右侧浮层-->
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
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/rightlayer.js"></script><!--公共尾部-->
<!-- foot尾部 判断控制000000[6位显示] 如果位数是1显示，0不显示-->
<div class="foot index-foot">
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
					<a target="_blank" href="/villa_beijing/">北京别墅日租短租</a>
				</span>
        </div>
        <p class="t-center f12 c777776">客户服务：400-069-6060&nbsp;&nbsp;010-60642468&nbsp;&nbsp;010-89177759 |<a href="http://www.mayi.com/tenantlogin/" target="_blank" class="c777776">&nbsp;帮助中心&nbsp;|</a><a href="http://www.mayi.com/aboutcompany/" target="_blank" class="c777776">&nbsp;公司信息&nbsp;|</a><a href="http://www.mayi.com/activity/app50" target="_blank" class="c777776">&nbsp;app下载&nbsp;|</a>关注我们
			        <span class="mr10 cursorpt showinfo relave" style="display:inline-block;vertical-align:middle;">
			            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/weixin_logo_s.png">
			            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/weixin.jpg" class="head_pop absot" style="bottom:24px;left:-32px;">
			        </span>
			        <span class="cursorpt" style="display:inline-block;vertical-align:middle;">
			            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/xinlang_logo_s.png" onclick="sinaWeibo();">
			        </span>
        </p>
        <p class="t-center f12 c777776">网站备案/许可证号：京ICP证130021号 易云游网络技术（北京）有限公司 京公网安备11010802018218号</p>
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
</script><!--公共尾部结束-->
<!-- Footer -->
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
    var __gjchparam__ = (gjchparamele?gjchparamele.value:'')||"/duanzu/detail@room=%7B%22id%22%3A850345114%22ispromotion%22%3A0%7D";

    var gcparamele = document.getElementById('gcparam');
    var __gcparam__ = (gcparamele?gcparamele.value:'')||"/duanzu/-/-/-/detail@room=%7B%22id%22%3A850345114%22ispromotion%22%3A0%7D";

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

<!--[statistics end]--><!-- load End--><!-- Footer END -->
<!-- 房间日历-->
<div class="calend">
    <div class="shadow"></div>
    <div id="calendar-box" class="calendar-box" >
        <!-- 房间日历显示 -->
        <div class="select"><img src="http://staticnew.mayi.com/resourcesWeb/images/detail/select_img.png" width="30" height="30" /></div>
        <div class="calendar-meaning mt20">
            <dl class="clearfix">
                <dt class="havehome"></dt>
                <dd>有房</dd>
                <dt class="special-price"></dt>
                <dd>特殊价</dd>
                <dt class="nohome"></dt>
                <dd>无房</dd>
            </dl>
        </div>
        <div id="calOne" class="clearfix mt20"></div>
        <!-- 房间日历显示 END -->
    </div>
</div>
</div>
<!-- 日历 END -->

</body>

<script type="text/javascript">

    $('#add_hom').click(function(){
        var scroll_offst=$(".pingjiaTit").offset();

        $('body,html').animate({
            scrollTop:scroll_offst.top-90
        },500);

        $('#lordComment').addClass('on');
        $('#landComment').removeClass('on');
    });
</script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/pageModel.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/room_detail.js"></script>
<!--分享 -->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/util/jquery.qrcode.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/share.js"></script>
<script>
    var share_roomTitle='天坛附近 浪漫温馨两居  10分钟到天坛';
    var share_roomAddress='北京市丰台区蒲黄榆芳城园';
    var share_roomMoney = '438';
    var share_roomUrl = 'http://www.mayi.com/room/850345114';
    var share_roomImg='';
    $('.piclist').find("img").each(function(index){
        if(index>5)
            return;
        if(share_roomImg=='')
            share_roomImg+=$(this).attr("src");
        else
            share_roomImg+='||'+$(this).attr("src");
    })
</script>
</html>