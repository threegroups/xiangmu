<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content=""/>
    <meta name="description" content="" />
    <link href="http://staticnew.mayi.com/resourcesWeb/ordernew/css/order_public.css" rel="stylesheet">
    <link href="http://staticnew.mayi.com/resourcesWeb/ordernew/css/order.css" rel="stylesheet">
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet">
    <link href="http://staticnew.mayi.com/resourcesWeb/ordernew/css/order_money.css" rel="stylesheet">
    <title>订单-支付订金</title>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/commom.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>

    <script type="text/javascript" language="javascript">
        //初始化订单详情页信息
        $(function(){
            var mayiuid = '851718180';
            if(mayiuid){
                $('.bank').show();
                var detialJson='{"showtotalprice":1524.0,"onlinePayAmount":1524.0,"payRuleRate":100,"promotionModel":{},"priceDetailModel":{"sum":152400,"showtotalPrice":1524.0,"originalPrice":48800,"hasWeekendPrice":1,"items":[{"date":"2016-05-26","originalPrice":48800,"price":48800,"priceShow":488.0,"type":6,"dayAmount":488.0},{"date":"2016-05-27","originalPrice":51800,"price":51800,"priceShow":518.0,"type":3,"dayAmount":518.0},{"date":"2016-05-28","originalPrice":51800,"price":51800,"priceShow":518.0,"type":3,"dayAmount":518.0}]},"haveStock":1,"firstPaying":1,"insuranceModel":{"id":66920,"insuranceno":"","peoplenum":1,"daynum":3,"roomnum":1,"freeunitprice":29,"freeamount":87,"payunitprice":29,"totalamount":87,"state":"0","paystate":"0","createtime":1464228742000,"bookorderid":850628055,"source":"1","freeamountYuan":0.87,"totalamountYuan":0.87,"policyholderstartdate":1464235200000,"policyholderenddate":1464494400000,"assurer":1},"ticketModel":{}}';
                initOrderPageInfo(detialJson);
            }else{
                $('.bank').hide();
            }
        });
        //初始化页面方法
        function initOrderPageInfo(detialJson){
            detialJson=eval("("+detialJson+")");
            $("#orderId").val(850628055);
            $("#haveStock").val(detialJson.haveStock);
            $("#firstPaying").val(detialJson.firstPaying);
            $("#onlinePayAmount").val(detialJson.onlinePayAmount);
            $("#showtotalpriceText").text(detialJson.showtotalprice);
            $("#payRuleRate").text(detialJson.payRuleRate);
            promotionModelJson=detialJson.promotionModel;
            var userCouponEntityList=promotionModelJson.userCouponEntityList;
            /**
             if(promotionModelJson && promotionModelJson.type>0){
			  $("#promotionAmount").text(-promotionModelJson.promotionAmount);
			  $("#typeAlias").text(promotionModelJson.typeAlias);
			  $("#selectOnline").val(promotionModelJson.typeAlias);

			  //初始化
			  if(detialJson.firstPaying){
				  $("#coupon").empty();
				  if(userCouponEntityList){
					  for(var i=0,length=userCouponEntityList.length;i<length;i++){
					    if(userCouponEntityList[i].show==1){
						  	var coupon='<label><input type="radio" name="coupon_radio" value="'+userCouponEntityList[i].id+'" amountShow="'+userCouponEntityList[i].amountShow+'"/>'+"满"+userCouponEntityList[i].useconditionShow+"减"+userCouponEntityList[i].amountShow+'<input type="hidden"  value="'+userCouponEntityList[i].id+','+userCouponEntityList[i].daypricerule+'"/></label>';
						  	$("#coupon").append(coupon);
					  	}
					  }
				  }
				  var accountEntityList=promotionModelJson.accountEntityList;
				  if(accountEntityList){
					  for(var i=0,length=accountEntityList.length;i<length;i++){
					  	var coupon='<label><input type="checkbox" name="coupon_checkbox" value="'+accountEntityList[i].id+'" amountShow="'+accountEntityList[i].amountShow+'"/>'+accountEntityList[i].amountShow+'代金券</label>';
					  	$("#coupon").append(coupon);
					  }
				  }
				  $("#coupon").append('<p id="couponConfirm" onclick="confirmOrCancle(1);">确认使用</p><p id="couponCancle" onclick="confirmOrCancle(-1);">取消使用</p>');
				  //完成选中
				  var type=promotionModelJson.type;
				  if(type==2){
				  	var userCouponEntityUsed=promotionModelJson.userCouponEntityUsed;
				  	$("#coupon").find(":radio[value="+userCouponEntityUsed.id+"]").prop("checked",true);
				  	$("#promotiontype").val(2);
				  	if(typeof(userCouponEntityUsed.daypricerule) != "undefined"&&userCouponEntityUsed.daypricerule==1){
				  		$("#tipSpan").text("满"+userCouponEntityUsed.useconditionShow+"减"+userCouponEntityUsed.amountShow);
				  		$("#warmTip").show();
				  	}else{
				  		$("#warmTip").hide();
				  	}
				  }else if(type==1){
				        $("#promotiontype").val(1);
				    	var accountEntityUsedList=promotionModelJson.accountEntityUsedList;
				    	$("#coupon").find(":checkbox").each(function(){
				    	    var value=$(this).val();
				    		for(var i=0,length=accountEntityUsedList.length;i<length;i++){
				    		   if(accountEntityUsedList[i].id=value){
				    		      $(this).prop("checked",true);
				    		   }
				    		}
				    	});
				    	$("#warmTip").hide();
				  }
			  }
		  }else{
		    $("#promotionAmount").hide();
		    $('#typeAlias').hide();
		  	$("#selectOnline").hide();
		    $("#coupon").hide();
		  }*/
            //仅仅展示钱数
            //alert("总金额："+detialJson.onlinePayAmount);
            //alert("优惠金额："+$("#promotionAmount").text());
            var proAmount=parseFloat($("#promotionAmount").text());
            if(isNaN(proAmount)){
                proAmount=0;
            }

            //保险
            var insuranceModelJson ;
            var payamountYuan="0.0";
            if(detialJson.insuranceModel){
                insuranceModelJson=detialJson.insuranceModel;
                if(insuranceModelJson.payamountYuan)
                {
                    payamountYuan = insuranceModelJson.payamountYuan;
                }
            }
            var ticketPriceShow="0.0";
            if(detialJson.ticketModel)
            {
                if(detialJson.ticketModel.totalPrice)
                {
                    ticketPriceShow=detialJson.ticketModel.totalPrice/100;
                }
            }

            if(insuranceModelJson!=null)
            {
                if(payamountYuan=='0'||payamountYuan=='0.00'||payamountYuan=='0.0')
                {
                    $("#insurance_online").html("");
                    $('#s_insurance').hide();
                }else{
                    $("#insurance_online").html("+保险"+payamountYuan);
                    $('#s_insurance').show();
                }
            }
            else
            {
                $("#insurance_online").html("");
                $('#s_insurance').hide();
            }

            var showtotalpriceText = (parseFloat($("#showtotalpriceText").text()) - parseFloat(payamountYuan)- parseFloat(ticketPriceShow))
                    .toFixed(2);
            $("#showtotalpriceText").text(showtotalpriceText);
            //保险结束
            //优惠券
            var onlinePayAmountTrue =  (parseFloat(detialJson.onlinePayAmount) - parseFloat(payamountYuan)- parseFloat(ticketPriceShow)).toFixed(2);
            $("#onlinePayAmount").val(onlinePayAmountTrue);
            setPayCuponPrice();

        }

    </script>
    <script type="text/javascript" language="javascript">
        //给动态添加的优惠券选项添加事件
        $(function(){
            bindEventForPromt();
        });
        function bindEventForPromt(){
            $("#coupon").find(":radio").on('click',function(){
                processPromotion(this);
                if(typeof($(this).next().val()) != "undefined"&&$(this).next().val()!=''){
                    var cpvalues=$(this).next().val().split(",");
                    var coupid=cpvalues[0];
                    if($(this).val()==''&&typeof(coupid) != "undefined"&&coupid!=''){
                        $(this).val(coupid);
                    }
                    if(cpvalues.length>0&&typeof(cpvalues[1]) != "undefined"&&cpvalues[1]==1){
                        $("#tipSpan").text($(this).parent().text());
                        $("#warmTip").show();
                    }else{
                        $("#warmTip").hide();
                    }
                }
            });
            $("#coupon").find(":checkbox").on('click',function(){
                processPromotion(this);
                var coupid=$(this).next().val();
                if($(this).val()==''&&typeof(coupid) != "undefined"&&coupid!=''){
                    $(this).val(coupid)
                }
                $("#warmTip").hide();
            });
        }
        //处理单击事件
        function processPromotion(obj){
            var type=$(obj).attr("type");
            if(type=="radio"){
                $("#coupon").find(":checkbox").prop("checked",false);
                $("#promotiontype").val(2);
                var amountShow= $(obj).attr("amountShow");
                var olpayMony=(parseFloat($("#onlinePayAmount").val())-parseFloat(amountShow)).toFixed(2);
                $("#typeAlias").text("优惠券");
                $("#selectOnline").val("优惠券");
                $("#promotionAmount").text(-parseFloat(amountShow));
                //kgj add  是提交订单页面
                if($(".inspersonDetail").length>=1)
                {
                    setCuponPrice();
                }
                else
                {
                    setPayCuponPrice();
                    //$("#onlinePayAmountShow").text(olpayMony<0?'0.00':olpayMony);
                }
            }else if(type=="checkbox"){
                $("#coupon").find(":radio").prop("checked",false);
                $("#promotiontype").val(1);
                var size=$("#coupon").find(":checkbox:checked").size();
                if(size>0){
                    $("#promotiontype").val(1);
                }else{
                    $("#promotiontype").val(0);
                }

                var amountShow= 0;
                $("#coupon").find(":checkbox:checked").each(function(){
                    amountShow=(parseFloat(amountShow)+parseFloat($(this).attr("amountShow"))).toFixed(2);
                });
                $("#typeAlias").text("代金券");
                $("#selectOnline").val("代金券");

                var onlinePayAmountShow=(parseFloat($("#onlinePayAmount").val())-parseFloat(amountShow)).toFixed(2);
                if(onlinePayAmountShow<0){
                    onlinePayAmountShow='0.00';
                    $("#promotionAmount").text('-'+$("#onlinePayAmount").val());
                }else{
                    $("#promotionAmount").text('-'+amountShow);
                }
                //kgj add  是提交订单页面
                if($(".inspersonDetail").length>=1)
                {
                    setCuponPrice();
                }
                else
                {
                    setPayCuponPrice();
                    //$("#onlinePayAmountShow").text(onlinePayAmountShow);
                }
            }
        }
        //确认或者取消的操作
        function confirmOrCancle(type){
            if(type==1){//确认
                var checkedsSize=$("#coupon").find(":checkbox:checked").size();
                var radioSize=$("#coupon").find(":radio:checked").size();
                if(checkedsSize==0 && radioSize==0){
                    alert("请选择要使用的优惠信息");
                    return;
                }
                $("#coupon").hide();
            }else if(type==-1){//取消
                $("#promotionAmount").text('-'+0);
                $("#coupon").hide();
                $("#coupon").find(":checkbox").prop("checked",false);
                $("#coupon").find(":radio").prop("checked",false);
                $("#promotiontype").val(0);
                //kgj add  是提交订单页面
                if($(".inspersonDetail").length>=1)
                {
                    setCuponPrice();
                }
                else
                {
                    setPayCuponPrice();
                    //$("#onlinePayAmountShow").text(parseFloat($("#onlinePayAmount").val()).toFixed(2));
                }
            }else if(type==2){
                $("#coupon").show();
            }
        }
        //给td添加绑定事件
        //$(function(){
        //$(".dp_daypicker").on('click','td',function(){
        //var num=$(this).text();
        //alert("come in .....");
        //$("#checkoutday").val('2013-12-5');
        // });
        //});

    </script><script type="text/javascript" language="javascript">
        function pay(){
            var bookOrderId=$("#orderId").val();
            $.ajax({
                type:'get',
                url:"/order/checkstate/"+bookOrderId,
                async:false,
                dataType:'json',
                success:function(re) {
                    if(re.error!=null){
                        layer.alert(re.error.message,5,"温馨提示",function index(){
                            var uid = $('#uid').val();
                            var nexturl = "/tenant/"+uid+"/orders";
                            location.href = nexturl;
                        });
                    }else{
                        var haveStock=$("#haveStock").val();
                        if(haveStock!=1){
                            alert("当前房间已经被其他房客抢先支付.");
                            return;
                        }
                        if($("#onlinePayAmountShow").text()!=0){
                            var paymethod=$(":radio:checked[name=paymethod]").val();
                            if(!paymethod){
                                alert("请选择支付方式");
                                return ;
                            }
                        }
                        if(paymethod==2){
                            var bankCardType=3;//改为固定使用 网银 $(":radio:checked[name=bankCardType]").val();
                            if(!bankCardType){
                                alert("请选择银行卡类型");
                                return ;
                            }
                            var bankId=$(":radio:checked[name=SelectPay]").attr("id");
                            if(!bankId){
                                alert("请选择银行");
                                return;
                            }
                            var item=$("#item").val();
                            item=eval("("+item+")");
                            if(bankCardType==1){
                                if(!(item.haveSaving==true)){
                                    alert("当前选择银行卡不支持储蓄卡");
                                    return;
                                }
                            }else if(bankCardType==2){
                                if(!(item.haveCredit==true)){
                                    alert("当前选择银行卡不支持信用卡");
                                    return;
                                }
                            }else if(bankCardType==3){
                                if(!(item.haveOnline==true)){
                                    alert("当前选择银行卡不支持网银支付");
                                    return;
                                }
                            }
                        }

                        var orderId=$("#orderId").val();
                        showMessage();
                        var url="/order/pay/"+orderId;
                        jQuery("#payForm").first().attr("action",url).submit();
                    }
                },
                error:function(){
                    layer.alert("支付失败,请稍候重试!",5,"温馨提示",function index(){location.reload();});
                }
            });
        }


        //显示提示信息 alert-close
        function showMessage(){
            var i = $.layer({
                type : 1,
                title : false,
                offset:['150px' , ''],
                border : false,
                area : ['auto','auto'],
                move : ['.d-h3',true],
                page : {dom : '#goPayShow'},
                closeBtn: false
            });
            $('.alert-close').on('click',function(){
                layer.close(i);
            });
            $('.select-again').on('click',function(){
                layer.close(i);
            });
            $('#problems').on('click',function(){
                layer.close(i);
            });
        }
        //动态改变银行
        function changeBankInfo(type,bankCardType){
            var url="/order/bankinfo/"+type+"?bankCardType="+bankCardType;
            if(type==1){
                //$(".OnpayWay").find(":radio").prop("checked",false);
                //$(".OnpayWay").find(":radio").addClass("pay-disabled");
            }
            jQuery.post(url,{},function(result){
                result=eval("("+result+")");
                if(type==1){
                    for(var i=0,length=result.length;i<length;i++){
                        var item=result[i];
                        if(bankCardType==1){
                            if(item.SAVING=true){
                                $("#"+item.id).removeClass("pay-disabled");
                            }
                        }else if(bankCardType==2){
                            if(item.CREDIT=true){
                                $("#"+item.id).removeClass("pay-disabled");
                            }
                        }else if(bankCardType==3){
                            if(item.ONLINE=true){
                                $("#"+item.id).removeClass("pay-disabled");
                            }
                        }
                    }
                }else if(type==2){
                    var id=result.id;
                }
            })
        }

        $(function(){
            $(".bank_ul2").find(":radio").click(function(){
                var bankId=$(this).attr("id");
                var url="/order/bankinfo/2?bankId="+bankId;
                $(".bankCard").find(":radio").each(function(){
                    //$(this).prop("checked",false);
                    $(this).attr("disabled",true);
                    $(this).parent().addClass("pay-disabled");
                });
                jQuery.post(url,{},function(result){
                    $("#item").val(result);
                    result=eval("("+result+")");
                    var id=result.id;
                    if(result.haveSaving){
                        //alert(1);
                        $(":radio[name=bankCardType][value=1]").parent().removeClass("pay-disabled");
                        $(":radio[name=bankCardType][value=1]").attr("disabled",false);
                    }
                    if(result.haveCredit){
                        //alert(2);
                        $(":radio[name=bankCardType][value=2]").parent().removeClass("pay-disabled");
                        $(":radio[name=bankCardType][value=2]").attr("disabled",false);
                    }
                    if(result.haveOnline){
                        //alert(3);
                        $(":radio[name=bankCardType][value=3]").parent().removeClass("pay-disabled");
                        $(":radio[name=bankCardType][value=3]").attr("disabled",false);
                    }


                })
            });

            $('.yinhk').parent().siblings().click(function(){

                $('.bank_ul2').css('display','none');
                $(this).find('input').attr('checked',true);

            })
            $('.yinhk').parent().click(function(){
                $(this).find('input').attr('checked',true);
                $('.bank_ul2').css('display','block');

            })

        });
        function goPaysuccess(){
            var orderId=$("#orderId").val();
            var url="/order/paysuccess/"+orderId;
            window.location.href=url;
        }

        function setPayCuponPrice() {

            var isRadio = false;
            var amountShow = 0;
            /**
             var hasNoP = $("#coupon").find(":checkbox").length>=1;
             $("#coupon").find(":radio:checked").each(function() {
        amountShow = $(this).attr("amountShow");
        isRadio = true;
    });
             if (!isRadio) {
        $("#coupon").find(":checkbox:checked").each(

        function() {
            amountShow = (parseFloat(amountShow) + parseFloat($(this).attr("amountShow"))).toFixed(2);
        });
    }*/
            amountShow = $('#amountShow').val();
            var detialJson='{"showtotalprice":1524.0,"onlinePayAmount":1524.0,"payRuleRate":100,"promotionModel":{},"priceDetailModel":{"sum":152400,"showtotalPrice":1524.0,"originalPrice":48800,"hasWeekendPrice":1,"items":[{"date":"2016-05-26","originalPrice":48800,"price":48800,"priceShow":488.0,"type":6,"dayAmount":488.0},{"date":"2016-05-27","originalPrice":51800,"price":51800,"priceShow":518.0,"type":3,"dayAmount":518.0},{"date":"2016-05-28","originalPrice":51800,"price":51800,"priceShow":518.0,"type":3,"dayAmount":518.0}]},"haveStock":1,"firstPaying":1,"insuranceModel":{"id":66920,"insuranceno":"","peoplenum":1,"daynum":3,"roomnum":1,"freeunitprice":29,"freeamount":87,"payunitprice":29,"totalamount":87,"state":"0","paystate":"0","createtime":1464228742000,"bookorderid":850628055,"source":"1","freeamountYuan":0.87,"totalamountYuan":0.87,"policyholderstartdate":1464235200000,"policyholderenddate":1464494400000,"assurer":1},"ticketModel":{}}';
            detialJson=eval("("+detialJson+")");
            var insuranceModelJson;
            if(detialJson.insuranceModel){
                insuranceModelJson=detialJson.insuranceModel;
            }

            var  payamountYuan = "0.0";
            if(insuranceModelJson){
                if(insuranceModelJson.payamountYuan)
                {
                    payamountYuan= insuranceModelJson.payamountYuan;
                }
            }
            var ticketPriceShow="0.0";
            if(detialJson.ticketModel)
            {
                if(detialJson.ticketModel.totalPrice)
                {
                    ticketPriceShow=detialJson.ticketModel.totalPrice/100;
                }
            }
            /**
             if(!hasNoP)
             {
                 amountShow = $("#promotionAmount").text().replace('-','');
                 if(isNaN(amountShow)||amountShow=='')
                 {
                     amountShow=0;
                 }
             }*/

            var onlinePayAmountShow = (parseFloat($("#onlinePayAmount").val())  - parseFloat(amountShow)/100).toFixed(2);
            if (onlinePayAmountShow < 0)
            {
                onlinePayAmountShow = '0.00';
                $("#promotionAmount").text('-' + (parseFloat($("#onlinePayAmount").val())).toFixed(2));
            } else {
                $("#promotionAmount").text('-' + amountShow);

            }
            onlinePayAmountShow = (parseFloat(onlinePayAmountShow) + parseFloat(payamountYuan)+ parseFloat(ticketPriceShow)).toFixed(2);
            $("#onlinePayAmountShow").html(onlinePayAmountShow);
        }

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
                    <a href="javascript:menufrozen(851718180,'/tenant/851718180/orders','user')" target="_self"><img src="http://i1.mayi.com/gjfs21/M04/B2/C1/CgEHFVcxdFX,HwoFAABhlK8CvOk554.jpg_35x35c.jpg" id="aaa" class="user_img">
                        <span class="name" id="head_nickname"></span></a>
                    <div class="head_pop">
                        <div class="pop_column">
                            <p><a href="javascript:menufrozen(851718180,'/tenant/851718180/orders','user')" target="_self" id="myorder" rel="nofollow">我的订单</a></p>
                            <p><a href="javascript:menufrozen(851718180,'/user/tenant/accountmanager','user')" target="_self" id="myorder" rel="nofollow" class="slideactive">我的账户</a></p>
                            <p><a href="javascript:menufrozen(851718180,'/user/tenant/mycollection','user')" target="_self" id="mycollect" rel="nofollow">我的收藏</a></p>
                            <p><a href="javascript:menufrozen(851718180,'/user/tenant/msgmanager','user')" target="_self" id="mymsg" rel="nofollow">消息通知</a></p>
                            <p class="textCt"><a href="javascript:void(0)" id="loginoutbut" target="_self" class="stclick" clicktag="1_6">退出登录</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="showinfo">
                    <a href="javascript:loginowner(851718180)" target="_self" class="stclick">我是房东</a>
                    <div class="head_pop">
                        <div class="pop_column plr10">
                            <p><a href="javascript:menufrozen(851718180,'/landlord/851718180/orders','landlord')">订单管理</a></p>
                            <p><a href="javascript:menufrozen(851718180,'/user/landlord/roommanager','landlord')">房源管理</a></p>
                            <p><a href="javascript:menufrozen(851718180,'/landlord/851718180/settlements','landlord')">结算管理</a></p>
                            <p><a href="javascript:menufrozen(851718180,'/user/landlord/msgmanager','landlord')">消息通知</a></p>
                            <p><a href="javascript:menufrozen(851718180,'/user/landlord/accountmanager','landlord')">账户管理</a></p>
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
                <a rel="nofollow" href="javascript:publish(851718180)" class="room-btn f16 t-center" >免费发布房源</a>
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
<input  type="hidden" name="uid" id="uid" value="851718180" />
<input  type="hidden" name="loginurl" id="loginurl" value="none" />
<input type="hidden" name="head_userName" id="head_userName" value="眼泪的放肆">
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
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/sdk/strophe.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/sdk/easemob.im-1.1.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/sdk/easemob.im-1.1.shim.js"></script>
    <script type='text/javascript' src='http://staticnew.mayi.com/resourcesWeb/im1/easemob.im.config.js'></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/bootstrap.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/add_reply.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/jquery-ui.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/IM.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ajaxfileupload.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/operator.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/webim.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im1/chat.js"></script>
    <link rel="stylesheet" href="http://staticnew.mayi.com/resourcesWeb/im/css/IM.css" />
    <link rel="stylesheet" href="http://staticnew.mayi.com/resourcesWeb/im/css/jquery-ui.css" />
</head>
<body>
<input type="hidden" id="MAYIUID" value="851718180" />
<div id="point" class="contacts_landlord clearfloat IM_content ui-draggable" style="display:none;">
    <span class="right_open_btn"></span>
</div>
<a class='IM_btn' style='display:none;' href='javascript:;'><span class='IM_btn_span' ><i style="display:none;">0</i></span>站内信</a>
<div class='im_sfz_tan'>
    <span></span>
    <img src="" alt="" />
</div>
<style>
    .im_sfz_tan{
        position:fixed;
        left:0;
        top:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.6);
        z-index: 1000001;
        line-height:100%;
        text-align: center;
        display:none;

    }
    .im_sfz_tan span{
        display:inline-block;
        height:100%;
        vertical-align:middle;
    }
    .im_sfz_tan img{
        display:inline;
        max-width:1190px;
        max-height:700px;
        min-width:600px;
        min-height:220px;
        vertical-align: middle;
        border:10px solid #fff;
    }
</style>
</body>
<script>
    var uid=$('#MAYIUID').val();
    if(uid!='')
    {
        $('.IM_btn').css('display','block');
    }
</script>

</html>
<!-- Header END -->
<!-- 赶集统计所需 隐藏域 -->
<input type="hidden" name="gjchparam" id ="gjchparam" value='/duanzu/order/book_success@order=%7B%22room_id%22%3A850428210%2C%22user_id%22%3A%7B%22id%22%3A851718180%2C%22ucid%22%3A851718180%7D%2C%22order_id%22%3A850628055%7D'/>
<input type="hidden" name="gcparam" id ="gcparam" value='/duanzu/order/-/-/bk_ss@room_id=850428210@user_id=851718180@order_id=850628055'/>
<!-- Content -->
<!--MY统计所需域 -->
<input type="hidden" name="my_p_t" id="my_p_t" value="paying"/>
<input type="hidden" name="my_b_id" id="my_b_id" value="850628055"/>
<input type="hidden" name="my_b_s" id="my_b_s" value="1"/>
<input type="hidden" name="my_p_y" id ="my_p_y" value='beijing'/>
<!--MY统计所需域 -->
<div class='one_workflow'>
    <div class='workflow relave'>
        <div class='progress progress_1'></div>
        <b class='workflow1'>提交订单</b>
        <b class='workflow2'>支付订金</b>
        <b class='workflow3'>房东确认</b>
        <b class='workflow4'>预订成功</b>
        <span class='workflow1_1'><a href="javascript:;" class='a_after'>1</a></span>
        <span class='workflow1_2'><a href="javascript:;" class='a_after'>2</a></span>
        <span class='workflow1_3'><a href="javascript:;" >3</a></span>
        <span class='workflow1_4'><a href="javascript:;" class='duigo'></a></span>

    </div>
</div>
<form id="payForm" action="" name="payForm" method="post" target="_blank">

    <input type="hidden" id="promotiontype" name="promotiontype" value="0"/>
    <input type="hidden" id="onlinePayAmount" name="onlinePayAmount" value="0"/>
    <input type="hidden" id="haveStock" name="haveStock" value="0"/>
    <input type="hidden" id="firstPaying" name="firstPaying" value="0"/>
    <input type="hidden" id="orderId" name="orderId" value="0"/>
    <!-- 下单页带过的优惠券 -->
    <input type="hidden" id="coupon_checkbox" name="coupon_checkbox" value=""/>
    <input type="hidden" id="coupon_radio" name="coupon_radio" value=""/>
    <input type="hidden" id="amountShow" name="amountShow" value="0"/>
    <div class='content clearfloat min_h'>
        <div class='cnt_tix clearfloat'>
            <div class='fl duigo_par'><span></span></div>
            <div class='fl you_ti'>
                <p class='you_p1'>订单提交成功</p>
                <p class='you_p2'>您可以继续支付，或者等待房东确认后再支付。工作时间内（9:00-21:00）我们将在30分钟内处理你的订单。&nbsp;&nbsp;<a href="/tenant/851718180/orders" class='a_more'>查看订单</a></p>

            </div>
        </div>
        <div class='pay_parent'>
            <dl class='clearfloat'>
                <dt class='fl'>线上支付到蚂蚁</dt>
                <dd class='fl color_tao'><span id="onlinePayAmountShow"></span>元</dd>
            </dl>
            <div id="coupon"></div>
            <!--选择支付方式-->
            <dl class='clearfloat'>
                <dt class='fl bank_dt'>选择支付方式</dt>
                <dd class='bank fl'>
                    <ul class='clearfloat bank_ul1'>
                        <li class='bank_radio clearfloat'><label><input type="radio" name='paymethod' value="1"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/zhifubao.jpg" title='支付宝'/></label></li>
                        <li class='bank_radio clearfloat'><label><input type="radio" name='paymethod' value="4"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/weixin.jpg" title='微信支付'/></label></li>
                        <li class='bank_radio clearfloat'><label class="yinhk"><input type="radio" name='paymethod' value="2"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_ka.jpg" title='银行卡'/></label></li>
                        <li class='bank_radio clearfloat'><label><input type="radio" name='paymethod' value="3"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/caifutong.jpg" title='财付通'/></label></li>
                    </ul>
                    <ul class='clearfloat bank_ul2'>
                        <input type="hidden" id="item" />
                        <li class='bank_radio clearfloat'><label><input id="icbc" type="radio" name="SelectPay" value="icbc"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_gongs.jpg" title='工商银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="ccb" type="radio" name="SelectPay" value="ccb"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_jians.jpg" title='建设银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="abc" type="radio" name="SelectPay" value="abc"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_nongy.jpg" title='农业银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="cmb" type="radio" name="SelectPay" value="cmb"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_zhaos.jpg" title='招商银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="postgc" type="radio" name="SelectPay" value="postgc"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_youz.jpg" title='邮政银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="boc" type="radio" name="SelectPay" value="boc"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_china.jpg" title='中国银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="comm" type="radio" name="SelectPay" value="comm"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_jiaot.jpg" title='交通银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="citic" type="radio" name="SelectPay" value="citic"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_zhongx.jpg" title='中信银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="bjbank" type="radio" name="SelectPay" value="bjbank"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_beij.jpg" title='北京银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="cmbc" type="radio" name="SelectPay" value="cmbc"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_mins.jpg" title='民生银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="cib" type="radio" name="SelectPay" value="cib"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/bank_xingy.jpg" title='兴业银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="ceb" type="radio" name="SelectPay" value="ceb"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/guangda.jpg" title='中国光大银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="spdb" type="radio" name="SelectPay" value="spdb"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/pufa.jpg" title='浦发银行'/></label></li>
                        <li class='bank_radio clearfloat'><label><input id="gdb" type="radio" name="SelectPay" value="gdb"/><img src="http://staticnew.mayi.com/resourcesWeb/ordernew/images/guangdong.jpg" title='广东发展银行'/></label></li>
                    </ul>
                </dd>
            </dl>
        </div>
        <div class='go_pay'><a onclick="pay();">去支付</a></div>
    </div>
</form>

<style>

</style>
<!-- 支付后弹窗 -->
<div id="goPayShow" class="alert-box">
    <div class="alert-title">
        在线支付<!-- 名字可动态自定义 -->
        <a class="alert-close"rel="nofollow" href="#"></a>
    </div>
    <div class="alert-con">
        <div class="pat-hint">
            <h3>请在新打开的页面完成付款！</h3>
            <p>完成付款后请根据您的情况点击下面的按钮。</p>
        </div>
        <div class="btn-box">
            <input type="button" class="green-btn mgrt30" name="" onclick="goPaysuccess();"  value="已完成付款">
            <input type="button" class="gray-btn" name="" id="problems" value="付款遇到问题？">
        </div>
        <p class="select-again"><a href="#" rel="nofollow">返回选择其他支付方式>></a></p>
    </div>
</div>
<!-- 支付后弹窗 END -->

<!-- Content END -->
<!-- Footer -->
<div class="foot index-foot">
    <div class="footer pt30 over-hidden pb20">
        <ul>
            <li class="pl60 w30">
                <h3 class="f16 mb10">联系我们</h3>
                <p>客户服务</p>
                <p class="f20">400-069-6060</p>
                <p class="f20">010-60642468 / 010-89177759</p>
                <p>Email：kefu.duanzu@mayi.com</p>
                <p>商务合作</p>
                <p>QQ：2656860348</p>
                <p>Email：marketing@mayi.com</p>
            </li>
            <li class="pl60 w20">
                <h3 class="f16 mb10">帮助中心</h3>
                <p><a href="/platprofile/" target="_blank">我是房客</a></p>
                <p><a href="/platprofile/" target="_blank">我是房东</a></p>
                <p><a href="/roomauditrule/" target="_blank">房源审核规范</a></p>
                <p><a href="/supportplan/" target="_blank">房客保障计划</a></p>
            </li>
            <li class="pl40 w10">
                <h3 class="f16 mb10">公司信息</h3>
                <p><a href="/aboutcompany/" target="">关于蚂蚁</a></p>
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
        <p class="t-center f12 c777776">网站备案/许可证号：京ICP证130021号 易云游网络技术（北京）有限公司</p>
        <p class="t-center f12 c777776" id="yui_3_5_1_1_1449739086334_68">京公网安备11010802018218号</p>
    </div>
    <div class="email" style="display:none">
        <a href="javascript:void(0)" id="talksLogin"><img src="http://staticnew.mayi.com/resourcesWeb/images/email.png" />站内信(0)</a>
    </div>
</div>
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
    var __gjchparam__ = (gjchparamele?gjchparamele.value:'')||"/duanzu/order/book_success@order=%7B%22room_id%22%3A850428210%2C%22user_id%22%3A%7B%22id%22%3A851718180%2C%22ucid%22%3A851718180%7D%2C%22order_id%22%3A850628055%7D";

    var gcparamele = document.getElementById('gcparam');
    var __gcparam__ = (gcparamele?gcparamele.value:'')||"/duanzu/order/-/-/bk_ss@room_id=850428210@user_id=851718180@order_id=850628055";

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

<!--[statistics end]--><!-- load End--><script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jQuery.md5.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/login.js?v=20151027"></script>

<!-- Footer END -->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/order.js"></script>

<!-- 广告联盟 访问 正式：o.yiqifa.com/servlet/handleCpsIn 测试： o.test.yiqifa.com/servlet/handleCpsIn-->
<!-- 广告联盟 访问 end-->

</body>
</html>