<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>下单页</title>

    <link rel="stylesheet" href="http://staticnew.mayi.com/resourcesWeb/ordernew/css/order.css" />
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet">
    <link href="http://staticnew.mayi.com/resourcesWeb/ordernew/css/order_public.css" rel="stylesheet">
    <link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/index_list_calendar.css" rel="stylesheet" type="text/css">
    <link href="http://staticnew.mayi.com/resourcesWeb/js/layer/skin/layer.css" rel="stylesheet" type="text/css">
    <link href="http://staticnew.mayi.com/resourcesWeb/ordernew/css/fdbx.css" rel="stylesheet">
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" language="javascript">
        $(function(){
            m={
                roomid:'850428210',
                minday:'3',
                detialJson:'{"checkinday":"2016-05-26","checkoutday":"2016-05-31","checkinOfWeek":"周四","checkoutOfWeek":"周二","nights":5,"roomNum":1,"totalPrice":250000,"showtotalprice":2500.0,"onlinePayAmount":2500.0,"onlineAmount":250000,"payRuleRate":100,"refunddays":15,"allrefundday":"2016-05-11","priceDetailModel":{"sum":250000,"showtotalPrice":2500.0,"originalPrice":48800,"hasWeekendPrice":1,"items":[{"date":"2016-05-26","originalPrice":488,"price":48800,"priceShow":488.0,"type":6,"dayAmount":488.0},{"date":"2016-05-27","originalPrice":518,"price":51800,"priceShow":518.0,"type":3,"dayAmount":518.0},{"date":"2016-05-28","originalPrice":518,"price":51800,"priceShow":518.0,"type":3,"dayAmount":518.0},{"date":"2016-05-29","originalPrice":488,"price":48800,"priceShow":488.0,"type":6,"dayAmount":488.0},{"date":"2016-05-30","originalPrice":488,"price":48800,"priceShow":488.0,"type":6,"dayAmount":488.0}]},"haveStock":1,"from":2,"deposit":48800}'
            };
            $('.App_download').mouseover(function(){
                $(this).find('.order_head_pop').show();
            })
            $('.App_download').mouseout(function(){
                $(this).find('.order_head_pop').hide();
            })
        });
    </script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/c.js" ></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/order/ticket.js" ></script>
    <!--kgj add保险JS START-->
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/ordernew/js/insurance.js?V=201509071118"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/regx/idcard.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/regx/mayi.validate.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/v201510/js/maputil.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/ordernew/js/usercontact.js"></script>
    <!--kgj add保险JS END-->
    <!--日历-->
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/index/yui-min.js" ></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/ordernew/js/index_list_calendar.js" ></script>

    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/ordernew/js/order.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/ordernew/js/bookorder.js"></script>
    <!--右侧滚动效果-->
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/ordernew/js/scroll_zi.js"></script>
    <script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/ordernew/js/scroll_zi.js"></script>

    <script>
        //初始化保险身份类型
        var papertypemap = new Map();
        papertypemap.put("111","身份证");
        papertypemap.put("516","港澳通行证");
        papertypemap.put("511","台湾通行证");
        papertypemap.put("233","军官证");
        papertypemap.put("414","护照");
        var nationlist = [{"id":20,"name":"汉族","pinyin":"hanzu","orderno":1,"isuse":1,"createtime":1449056611000},{"id":56,"name":"壮族","pinyin":"zhuangzu","orderno":2,"isuse":1,"createtime":1449056611000},{"id":31,"name":"满族","pinyin":"manzu","orderno":3,"isuse":1,"createtime":1449056611000},{"id":22,"name":"回族","pinyin":"huizu","orderno":4,"isuse":1,"createtime":1449056611000},{"id":35,"name":"苗族","pinyin":"miaozu","orderno":5,"isuse":1,"createtime":1449056611000},{"id":49,"name":"维吾尔族","pinyin":"weiwuerzu","orderno":6,"isuse":1,"createtime":1449056611000},{"id":46,"name":"土家族","pinyin":"tujiazu","orderno":7,"isuse":1,"createtime":1449056611000},{"id":53,"name":"彝族","pinyin":"yizu","orderno":8,"isuse":1,"createtime":1449056611000},{"id":34,"name":"蒙古族","pinyin":"mengguzu","orderno":9,"isuse":1,"createtime":1449056611000},{"id":55,"name":"藏族","pinyin":"zangzu","orderno":10,"isuse":1,"createtime":1449056611000},{"id":1,"name":"阿昌族","pinyin":"achangzu","orderno":11,"isuse":1,"createtime":1449056611000},{"id":2,"name":"白族","pinyin":"baizu","orderno":12,"isuse":1,"createtime":1449056611000},{"id":3,"name":"保安族","pinyin":"baoanzu","orderno":13,"isuse":1,"createtime":1449056611000},{"id":4,"name":"布朗族","pinyin":"bulangzu","orderno":14,"isuse":1,"createtime":1449056611000},{"id":5,"name":"布依族","pinyin":"buyizu","orderno":15,"isuse":1,"createtime":1449056611000},{"id":6,"name":"朝鲜族","pinyin":"chaoxianzu","orderno":16,"isuse":1,"createtime":1449056611000},{"id":7,"name":"达斡尔族","pinyin":"dawoerzu","orderno":17,"isuse":1,"createtime":1449056611000},{"id":8,"name":"傣族","pinyin":"daizu","orderno":18,"isuse":1,"createtime":1449056611000},{"id":9,"name":"德昂族","pinyin":"deangzu","orderno":19,"isuse":1,"createtime":1449056611000},{"id":10,"name":"东乡族","pinyin":"dongxiangzu","orderno":20,"isuse":1,"createtime":1449056611000},{"id":11,"name":"侗族","pinyin":"dongzu","orderno":21,"isuse":1,"createtime":1449056611000},{"id":12,"name":"独龙族","pinyin":"dulongzu","orderno":22,"isuse":1,"createtime":1449056611000},{"id":13,"name":"俄罗斯族","pinyin":"eluosizu","orderno":23,"isuse":1,"createtime":1449056611000},{"id":14,"name":"鄂伦春族","pinyin":"elunchunzu","orderno":24,"isuse":1,"createtime":1449056611000},{"id":15,"name":"鄂温克族","pinyin":"ewenkezu","orderno":25,"isuse":1,"createtime":1449056611000},{"id":16,"name":"高山族","pinyin":"gaoshanzu","orderno":26,"isuse":1,"createtime":1449056611000},{"id":17,"name":"仡佬族","pinyin":"gelaozu","orderno":27,"isuse":1,"createtime":1449056611000},{"id":18,"name":"哈尼族","pinyin":"hanizu","orderno":28,"isuse":1,"createtime":1449056611000},{"id":19,"name":"哈萨克族","pinyin":"hasakezu","orderno":29,"isuse":1,"createtime":1449056611000},{"id":21,"name":"赫哲族","pinyin":"hezhezu","orderno":30,"isuse":1,"createtime":1449056611000},{"id":23,"name":"基诺族","pinyin":"jinuozu","orderno":31,"isuse":1,"createtime":1449056611000},{"id":24,"name":"京族","pinyin":"jingzu","orderno":32,"isuse":1,"createtime":1449056611000},{"id":25,"name":"景颇族","pinyin":"jingpozu","orderno":33,"isuse":1,"createtime":1449056611000},{"id":26,"name":"柯尔克孜族","pinyin":"keerkezizu","orderno":34,"isuse":1,"createtime":1449056611000},{"id":27,"name":"拉祜族","pinyin":"lahuzu","orderno":35,"isuse":1,"createtime":1449056611000},{"id":29,"name":"傈僳族","pinyin":"lisuzu","orderno":36,"isuse":1,"createtime":1449056611000},{"id":28,"name":"黎族","pinyin":"lizu","orderno":37,"isuse":1,"createtime":1449056611000},{"id":30,"name":"珞巴族","pinyin":"luobazu","orderno":39,"isuse":1,"createtime":1449056611000},{"id":32,"name":"毛南族","pinyin":"maonanzu","orderno":41,"isuse":1,"createtime":1449056611000},{"id":33,"name":"门巴族","pinyin":"menbazu","orderno":43,"isuse":1,"createtime":1449056611000},{"id":36,"name":"仫佬族","pinyin":"mulaozu","orderno":45,"isuse":1,"createtime":1449056611000},{"id":37,"name":"纳西族","pinyin":"naxizu","orderno":47,"isuse":1,"createtime":1449056611000},{"id":38,"name":"怒族","pinyin":"nuzu","orderno":49,"isuse":1,"createtime":1449056611000},{"id":39,"name":"普米族","pinyin":"pumizu","orderno":51,"isuse":1,"createtime":1449056611000},{"id":40,"name":"羌族","pinyin":"qiangzu","orderno":53,"isuse":1,"createtime":1449056611000},{"id":41,"name":"撒拉族","pinyin":"salazu","orderno":55,"isuse":1,"createtime":1449056611000},{"id":42,"name":"畲族","pinyin":"shezu","orderno":57,"isuse":1,"createtime":1449056611000},{"id":43,"name":"水族","pinyin":"shuizu","orderno":59,"isuse":1,"createtime":1449056611000},{"id":44,"name":"塔吉克族","pinyin":"tajikezu","orderno":61,"isuse":1,"createtime":1449056611000},{"id":45,"name":"塔塔尔族","pinyin":"tataerzu","orderno":63,"isuse":1,"createtime":1449056611000},{"id":47,"name":"土族","pinyin":"tuzu","orderno":65,"isuse":1,"createtime":1449056611000},{"id":48,"name":"佤族","pinyin":"wazu","orderno":67,"isuse":1,"createtime":1449056611000},{"id":50,"name":"乌孜别克族","pinyin":"wuzibiekezu","orderno":69,"isuse":1,"createtime":1449056611000},{"id":51,"name":"锡伯族","pinyin":"xibozu","orderno":71,"isuse":1,"createtime":1449056611000},{"id":52,"name":"瑶族","pinyin":"yaozu","orderno":73,"isuse":1,"createtime":1449056611000},{"id":54,"name":"裕固族","pinyin":"yuguzu","orderno":75,"isuse":1,"createtime":1449056611000}];
        var countrylist = [{"id":1,"cname":"中国","englishname":"CHINA","simplespile":"CN","isuse":1,"createtime":1448627540000},{"id":2,"cname":"美国","englishname":"UNITEDSTATES","simplespile":"US","isuse":1,"createtime":1448627540000},{"id":3,"cname":"阿富汗","englishname":"AFGHANISTANA","simplespile":"AF","isuse":1,"createtime":1448627540000},{"id":4,"cname":"阿尔巴尼亚","englishname":"ALBANIA","simplespile":"AL","isuse":1,"createtime":1448627540000},{"id":5,"cname":"阿尔及利亚","englishname":"ALGERIA","simplespile":"DZ","isuse":1,"createtime":1448627540000},{"id":6,"cname":"安道尔","englishname":"ANDORRA","simplespile":"AD","isuse":1,"createtime":1448627540000},{"id":7,"cname":"安哥拉","englishname":"ANGOLA","simplespile":"AO","isuse":1,"createtime":1448627540000},{"id":8,"cname":"安提瓜和巴布达","englishname":"ANTIGUABARBUDA","simplespile":"AG","isuse":1,"createtime":1448627540000},{"id":9,"cname":"阿拉伯联合酋长国","englishname":"ARAB","simplespile":"AE","isuse":1,"createtime":1448627540000},{"id":10,"cname":"阿根廷","englishname":"ARGENTINA","simplespile":"AR","isuse":1,"createtime":1448627540000},{"id":11,"cname":"亚美尼亚","englishname":"ARMENIA","simplespile":"AM","isuse":1,"createtime":1448627540000},{"id":12,"cname":"阿鲁巴","englishname":"ARUBA","simplespile":"AW","isuse":1,"createtime":1448627540000},{"id":13,"cname":"澳大利亚","englishname":"AUSTRALIA","simplespile":"AU","isuse":1,"createtime":1448627540000},{"id":14,"cname":"奥地利","englishname":"AUSTRIA","simplespile":"AT","isuse":1,"createtime":1448627540000},{"id":15,"cname":"阿塞拜疆共和国","englishname":"AZERBAIJAN","simplespile":"AZ","isuse":1,"createtime":1448627540000},{"id":16,"cname":"巴哈马","englishname":"BAHAMAS","simplespile":"BS","isuse":1,"createtime":1448627540000},{"id":17,"cname":"巴林","englishname":"BAHRAIN","simplespile":"BH","isuse":1,"createtime":1448627540000},{"id":18,"cname":"孟加拉国","englishname":"BANGLADESH","simplespile":"BD","isuse":1,"createtime":1448627540000},{"id":19,"cname":"巴巴多斯","englishname":"BARBADOS","simplespile":"BB","isuse":1,"createtime":1448627540000},{"id":20,"cname":"白俄罗斯","englishname":"BELARUS","simplespile":"BY","isuse":1,"createtime":1448627540000},{"id":21,"cname":"比利时","englishname":"BELGIUM","simplespile":"BE","isuse":1,"createtime":1448627540000},{"id":22,"cname":"伯里兹","englishname":"BELIZE","simplespile":"BZ","isuse":1,"createtime":1448627540000},{"id":23,"cname":"伯利兹","englishname":"BELIZE","simplespile":"BZ","isuse":1,"createtime":1448627540000},{"id":24,"cname":"贝宁","englishname":"BENIN","simplespile":"BJ","isuse":1,"createtime":1448627540000},{"id":25,"cname":"不丹","englishname":"BHUTAN","simplespile":"BT","isuse":1,"createtime":1448627540000},{"id":26,"cname":"玻利维亚","englishname":"BOLIVIA","simplespile":"BO","isuse":1,"createtime":1448627540000},{"id":27,"cname":"波斯尼亚和黑塞哥维那","englishname":"BOSNIA","simplespile":"BA","isuse":1,"createtime":1448627540000},{"id":28,"cname":"博茨瓦纳","englishname":"BOTSWANA","simplespile":"BW","isuse":1,"createtime":1448627540000},{"id":29,"cname":"巴西","englishname":"BRAZIL","simplespile":"BR","isuse":1,"createtime":1448627540000},{"id":30,"cname":"保加利亚","englishname":"BULGARIA","simplespile":"BG","isuse":1,"createtime":1448627540000},{"id":31,"cname":"布基纳法索","englishname":"BURKINAFASO","simplespile":"BF","isuse":1,"createtime":1448627540000},{"id":32,"cname":"布隆迪","englishname":"BURUNDI","simplespile":"BI","isuse":1,"createtime":1448627540000},{"id":33,"cname":"文莱","englishname":"BruneiDarussalam","simplespile":"BN","isuse":1,"createtime":1448627540000},{"id":34,"cname":"柬埔寨","englishname":"CAMBODIA","simplespile":"KH","isuse":1,"createtime":1448627540000},{"id":35,"cname":"喀麦隆","englishname":"CAMEROON","simplespile":"CM","isuse":1,"createtime":1448627540000},{"id":36,"cname":"加拿大","englishname":"CANADA","simplespile":"CA","isuse":1,"createtime":1448627540000},{"id":37,"cname":"佛得角","englishname":"CAPEVERDE","simplespile":"KY","isuse":1,"createtime":1448627540000},{"id":38,"cname":"乍得","englishname":"CHAD","simplespile":"TD","isuse":1,"createtime":1448627540000},{"id":39,"cname":"智利","englishname":"CHILE","simplespile":"CL","isuse":1,"createtime":1448627540000},{"id":40,"cname":"哥伦比亚","englishname":"COLOMBIA","simplespile":"CO","isuse":1,"createtime":1448627540000},{"id":42,"cname":"科摩罗","englishname":"COMOROS","simplespile":"KM","isuse":1,"createtime":1448627540000},{"id":43,"cname":"刚果（布）","englishname":"CONGO","simplespile":"CG","isuse":1,"createtime":1448627540000},{"id":44,"cname":"库克群岛","englishname":"COOKISLANDS","simplespile":"CK","isuse":1,"createtime":1448627540000},{"id":45,"cname":"科特迪瓦","englishname":"COTEDLVOIRE","simplespile":"CI","isuse":1,"createtime":1448627540000},{"id":46,"cname":"克罗地亚","englishname":"CROATIA","simplespile":"HR","isuse":1,"createtime":1448627540000},{"id":47,"cname":"古巴共和国","englishname":"CUBA","simplespile":"CU","isuse":1,"createtime":1448627540000},{"id":48,"cname":"塞浦路斯","englishname":"CYPRUS","simplespile":"CY","isuse":1,"createtime":1448627540000},{"id":49,"cname":"捷克共和国","englishname":"CZECHREPUBLIC","simplespile":"CZ","isuse":1,"createtime":1448627540000},{"id":50,"cname":"中非共和国","englishname":"Central Africa Republic","simplespile":"CF","isuse":1,"createtime":1448627540000},{"id":51,"cname":"哥斯达黎加","englishname":"CostaRica","simplespile":"CRC","isuse":1,"createtime":1448627540000},{"id":52,"cname":"刚果（金）","englishname":"DEMOCRATIC REPUBLIC OF CONGO","simplespile":"CD","isuse":1,"createtime":1448627540000},{"id":53,"cname":"也门民主人民共和国","englishname":"DEMOCRATICYEMEN","simplespile":"YD","isuse":1,"createtime":1448627540000},{"id":54,"cname":"丹麦","englishname":"DENMARK","simplespile":"DK","isuse":1,"createtime":1448627540000},{"id":55,"cname":"吉布提","englishname":"DJIBOUTI","simplespile":"DJ","isuse":1,"createtime":1448627540000},{"id":56,"cname":"多米尼克","englishname":"DOMINICA","simplespile":"DM","isuse":1,"createtime":1448627540000},{"id":57,"cname":"多米尼加","englishname":"DOMINICAN REPUBLIC","simplespile":"DO","isuse":1,"createtime":1448627540000},{"id":58,"cname":"厄瓜多尔","englishname":"ECUADOR","simplespile":"EC","isuse":1,"createtime":1448627540000},{"id":59,"cname":"埃及","englishname":"EGYPT","simplespile":"EG","isuse":1,"createtime":1448627540000},{"id":60,"cname":"萨尔瓦多","englishname":"EL SALVADOR","simplespile":"EV","isuse":1,"createtime":1448627540000},{"id":61,"cname":"赤道几内亚","englishname":"EQUATORIALGUINEA","simplespile":"GQ","isuse":1,"createtime":1448627540000},{"id":62,"cname":"厄立特里亚","englishname":"ERITREA","simplespile":"ER","isuse":1,"createtime":1448627540000},{"id":63,"cname":"爱沙尼亚","englishname":"ESTONIA","simplespile":"EE","isuse":1,"createtime":1448627540000},{"id":64,"cname":"埃塞俄比亚","englishname":"ETHIOPIA","simplespile":"ET","isuse":1,"createtime":1448627540000},{"id":65,"cname":"斐济","englishname":"FIJI","simplespile":"FJ","isuse":1,"createtime":1448627540000},{"id":66,"cname":"芬兰","englishname":"FINLAND","simplespile":"FI","isuse":1,"createtime":1448627540000},{"id":67,"cname":"法国","englishname":"FRANCE","simplespile":"FR","isuse":1,"createtime":1448627540000},{"id":68,"cname":"加蓬","englishname":"GABON","simplespile":"GA","isuse":1,"createtime":1448627540000},{"id":69,"cname":"冈比亚","englishname":"GAMBIA","simplespile":"GM","isuse":1,"createtime":1448627540000},{"id":70,"cname":"格鲁吉亚","englishname":"GEORGIA","simplespile":"CE","isuse":1,"createtime":1448627540000},{"id":71,"cname":"德国","englishname":"GERMANY","simplespile":"DE","isuse":1,"createtime":1448627540000},{"id":72,"cname":"加纳","englishname":"GHANA","simplespile":"GH","isuse":1,"createtime":1448627540000},{"id":73,"cname":"希腊","englishname":"GREECE","simplespile":"GR","isuse":1,"createtime":1448627540000},{"id":74,"cname":"格林纳达","englishname":"GRENADA","simplespile":"GL","isuse":1,"createtime":1448627540000},{"id":75,"cname":"几内亚","englishname":"GUINEA","simplespile":"GN","isuse":1,"createtime":1448627540000},{"id":77,"cname":"几内亚比绍","englishname":"GUINEABISSAU","simplespile":"GW","isuse":1,"createtime":1448627540000},{"id":78,"cname":"圭亚那","englishname":"GUYANA","simplespile":"GY","isuse":1,"createtime":1448627540000},{"id":79,"cname":"危地马拉","englishname":"Guatemala","simplespile":"GT","isuse":1,"createtime":1448627540000},{"id":80,"cname":"海地","englishname":"HAITI","simplespile":"HT","isuse":1,"createtime":1448627540000},{"id":81,"cname":"荷兰","englishname":"HOLLAND","simplespile":"NL","isuse":1,"createtime":1448627540000},{"id":82,"cname":"洪都拉斯","englishname":"HONDURAS","simplespile":"HN","isuse":1,"createtime":1448627540000},{"id":83,"cname":"匈牙利","englishname":"HUNGARY","simplespile":"HU","isuse":1,"createtime":1448627540000},{"id":84,"cname":"冰岛","englishname":"ICELAND","simplespile":"IS","isuse":1,"createtime":1448627540000},{"id":85,"cname":"印度","englishname":"INDIA","simplespile":"IN","isuse":1,"createtime":1448627540000},{"id":86,"cname":"印度尼西亚","englishname":"INDONESIA","simplespile":"ID","isuse":1,"createtime":1448627540000},{"id":87,"cname":"伊朗","englishname":"IRAN","simplespile":"IR","isuse":1,"createtime":1448627540000},{"id":88,"cname":"伊拉克","englishname":"IRAQ","simplespile":"IQ","isuse":1,"createtime":1448627540000},{"id":89,"cname":"爱尔兰","englishname":"IRELAND","simplespile":"IE","isuse":1,"createtime":1448627540000},{"id":90,"cname":"以色列","englishname":"ISRAEL","simplespile":"IL","isuse":1,"createtime":1448627540000},{"id":91,"cname":"意大利","englishname":"ITALY","simplespile":"IT","isuse":1,"createtime":1448627540000},{"id":92,"cname":"牙买加","englishname":"JAMAICA","simplespile":"JM","isuse":1,"createtime":1448627540000},{"id":93,"cname":"日本","englishname":"JAPAN","simplespile":"JP","isuse":1,"createtime":1448627540000},{"id":94,"cname":"约旦","englishname":"JORDAN","simplespile":"JO","isuse":1,"createtime":1448627540000},{"id":95,"cname":"哈萨克斯坦","englishname":"KAZAKHSTAN","simplespile":"KZ","isuse":1,"createtime":1448627540000},{"id":96,"cname":"肯尼亚","englishname":"KENYA","simplespile":"KE","isuse":1,"createtime":1448627540000},{"id":97,"cname":"吉尔吉斯共和国","englishname":"KIRGIZSTAN","simplespile":"KG","isuse":1,"createtime":1448627540000},{"id":98,"cname":"基里巴斯","englishname":"KIRIBATI","simplespile":"KI","isuse":1,"createtime":1448627540000},{"id":99,"cname":"韩国","englishname":"KOREA","simplespile":"KR","isuse":1,"createtime":1448627540000},{"id":100,"cname":"科威特","englishname":"KUWAIT","simplespile":"KW","isuse":1,"createtime":1448627540000},{"id":101,"cname":"朝鲜","englishname":"Korea","simplespile":"DPR","isuse":1,"createtime":1448627540000},{"id":102,"cname":"老挝","englishname":"LAOS","simplespile":"LA","isuse":1,"createtime":1448627540000},{"id":103,"cname":"拉脱维亚","englishname":"LATVIA","simplespile":"LV","isuse":1,"createtime":1448627540000},{"id":104,"cname":"黎巴嫩","englishname":"LEBANON","simplespile":"LB","isuse":1,"createtime":1448627540000},{"id":105,"cname":"莱索托","englishname":"LESOTHO","simplespile":"LS","isuse":1,"createtime":1448627540000},{"id":106,"cname":"利比里亚","englishname":"LIBERIA","simplespile":"LR","isuse":1,"createtime":1448627540000},{"id":107,"cname":"利比亚","englishname":"LIBYA","simplespile":"LY","isuse":1,"createtime":1448627540000},{"id":108,"cname":"列支敦士登","englishname":"LIECHTENSTEIN","simplespile":"LI","isuse":1,"createtime":1448627540000},{"id":109,"cname":"立陶宛","englishname":"LITHUANIA","simplespile":"LT","isuse":1,"createtime":1448627540000},{"id":110,"cname":"卢森堡","englishname":"LUXEMBOURG","simplespile":"LU","isuse":1,"createtime":1448627540000},{"id":111,"cname":"马其顿","englishname":"MACEDONIA","simplespile":"MK","isuse":1,"createtime":1448627540000},{"id":112,"cname":"马达加斯加","englishname":"MADAGASCAR","simplespile":"MG","isuse":1,"createtime":1448627540000},{"id":113,"cname":"马拉维","englishname":"MALAWI","simplespile":"MW","isuse":1,"createtime":1448627540000},{"id":114,"cname":"马来西亚","englishname":"MALAYSIA","simplespile":"MY","isuse":1,"createtime":1448627540000},{"id":115,"cname":"马尔代夫","englishname":"MALDIVES","simplespile":"MV","isuse":1,"createtime":1448627540000},{"id":116,"cname":"马里","englishname":"MALI","simplespile":"ML","isuse":1,"createtime":1448627540000},{"id":117,"cname":"马耳他","englishname":"MALTA","simplespile":"MT","isuse":1,"createtime":1448627540000},{"id":118,"cname":"马绍尔群岛","englishname":"MARSHALL ISLANDS","simplespile":"MH","isuse":1,"createtime":1448627540000},{"id":119,"cname":"毛里塔尼亚","englishname":"MAURITANIA","simplespile":"MR","isuse":1,"createtime":1448627540000},{"id":120,"cname":"毛里求斯","englishname":"MAURITIUS","simplespile":"MU","isuse":1,"createtime":1448627541000},{"id":121,"cname":"墨西哥","englishname":"MEXICO","simplespile":"MX","isuse":1,"createtime":1448627541000},{"id":122,"cname":"密克罗尼西亚联邦","englishname":"MICRONESIA","simplespile":"FM","isuse":1,"createtime":1448627541000},{"id":123,"cname":"摩尔多瓦","englishname":"MOLDOVA","simplespile":"MD","isuse":1,"createtime":1448627541000},{"id":124,"cname":"摩纳哥","englishname":"MONACO","simplespile":"MC","isuse":1,"createtime":1448627541000},{"id":125,"cname":"蒙古","englishname":"MONGOLIA","simplespile":"MN","isuse":1,"createtime":1448627541000},{"id":126,"cname":"黑山","englishname":"MONTENEGRO","simplespile":"ME","isuse":1,"createtime":1448627541000},{"id":127,"cname":"摩洛哥","englishname":"MOROCCO","simplespile":"MA","isuse":1,"createtime":1448627541000},{"id":128,"cname":"莫桑比克","englishname":"MOZAMBIQUE","simplespile":"MZ","isuse":1,"createtime":1448627541000},{"id":129,"cname":"缅甸","englishname":"MYANMAR","simplespile":"MM","isuse":1,"createtime":1448627541000},{"id":130,"cname":"纳米比亚","englishname":"NAMIBIA","simplespile":"NA","isuse":1,"createtime":1448627541000},{"id":131,"cname":"瑙鲁","englishname":"NAURU","simplespile":"NR","isuse":1,"createtime":1448627541000},{"id":132,"cname":"尼泊尔","englishname":"NEPAL","simplespile":"NP","isuse":1,"createtime":1448627541000},{"id":133,"cname":"新西兰","englishname":"NEWZEALAND","simplespile":"NZ","isuse":1,"createtime":1448627541000},{"id":134,"cname":"尼加拉瓜","englishname":"NICARAGUA","simplespile":"NI","isuse":1,"createtime":1448627541000},{"id":135,"cname":"尼日尔","englishname":"NIGER","simplespile":"NE","isuse":1,"createtime":1448627541000},{"id":136,"cname":"尼日利亚","englishname":"NIGERIA","simplespile":"NG","isuse":1,"createtime":1448627541000},{"id":137,"cname":"挪威","englishname":"NORWAY","simplespile":"NO","isuse":1,"createtime":1448627541000},{"id":138,"cname":"阿曼","englishname":"OMAN","simplespile":"OM","isuse":1,"createtime":1448627541000},{"id":139,"cname":"巴基斯坦","englishname":"PAKISTAN","simplespile":"PK","isuse":1,"createtime":1448627541000},{"id":140,"cname":"帕劳","englishname":"PALAU","simplespile":"PW","isuse":1,"createtime":1448627541000},{"id":141,"cname":"巴勒斯坦","englishname":"PALESTINE","simplespile":"BL","isuse":1,"createtime":1448627541000},{"id":142,"cname":"巴拿马","englishname":"PANAMA","simplespile":"PA","isuse":1,"createtime":1448627541000},{"id":143,"cname":"巴布亚新几内亚","englishname":"PAPUANEWGUINEA","simplespile":"PG","isuse":1,"createtime":1448627541000},{"id":144,"cname":"巴拉圭","englishname":"PARAGUAY","simplespile":"PY","isuse":1,"createtime":1448627541000},{"id":145,"cname":"秘鲁","englishname":"PERU","simplespile":"PE","isuse":1,"createtime":1448627541000},{"id":146,"cname":"菲律宾","englishname":"PHILIPPINES","simplespile":"PH","isuse":1,"createtime":1448627541000},{"id":147,"cname":"波兰","englishname":"POLAND","simplespile":"PL","isuse":1,"createtime":1448627541000},{"id":148,"cname":"葡萄牙","englishname":"PORTUGAL","simplespile":"PT","isuse":1,"createtime":1448627541000},{"id":149,"cname":"波多黎各","englishname":"PUERTO RICO","simplespile":"PR","isuse":1,"createtime":1448627541000},{"id":150,"cname":"卡塔尔","englishname":"QATAR","simplespile":"QA","isuse":1,"createtime":1448627541000},{"id":151,"cname":"罗马尼亚","englishname":"ROMANIA","simplespile":"RO","isuse":1,"createtime":1448627541000},{"id":152,"cname":"俄罗斯","englishname":"RUSSIA","simplespile":"RU","isuse":1,"createtime":1448627541000},{"id":153,"cname":"卢旺达","englishname":"RWANDA","simplespile":"RW","isuse":1,"createtime":1448627541000},{"id":154,"cname":"圣基茨和尼维斯","englishname":"SAINT KITTS","simplespile":"KNA","isuse":1,"createtime":1448627541000},{"id":155,"cname":"圣文森特和格林纳丁斯","englishname":"SAINT VINCENT AND THE GRENADIN","simplespile":"VC","isuse":1,"createtime":1448627541000},{"id":156,"cname":"圣卢西亚","englishname":"SAINTLUCIA","simplespile":"LC","isuse":1,"createtime":1448627541000},{"id":157,"cname":"美属萨摩亚","englishname":"SAMOA","simplespile":"WS","isuse":1,"createtime":1448627541000},{"id":158,"cname":"圣马力诺","englishname":"SANMARINO","simplespile":"SM","isuse":1,"createtime":1448627541000},{"id":159,"cname":"圣多美和普林西比","englishname":"SAOTOMEPRINCIPE","simplespile":"ST","isuse":1,"createtime":1448627541000},{"id":160,"cname":"沙特阿拉伯","englishname":"SAUDIARABIA","simplespile":"SA","isuse":1,"createtime":1448627541000},{"id":161,"cname":"塞内加尔","englishname":"SENEGAL","simplespile":"SN","isuse":1,"createtime":1448627541000},{"id":162,"cname":"塞尔维亚","englishname":"SERBIA","simplespile":"CS","isuse":1,"createtime":1448627541000},{"id":163,"cname":"塞舌尔","englishname":"SEYCHELLES","simplespile":"SC","isuse":1,"createtime":1448627541000},{"id":164,"cname":"塞拉利昂","englishname":"SIERRALEONE","simplespile":"SL","isuse":1,"createtime":1448627541000},{"id":165,"cname":"新加坡","englishname":"SINGAPORE","simplespile":"SG","isuse":1,"createtime":1448627541000},{"id":166,"cname":"斯洛伐克","englishname":"SLOVAKIA","simplespile":"SK","isuse":1,"createtime":1448627541000},{"id":167,"cname":"斯洛伐克共和国","englishname":"SLOVAKREPUBLIC","simplespile":"SK","isuse":1,"createtime":1448627541000},{"id":168,"cname":"斯洛文尼亚","englishname":"SLOVENIA","simplespile":"SI","isuse":1,"createtime":1448627541000},{"id":169,"cname":"所罗门群岛","englishname":"SOLOMON ISLANDS","simplespile":"SB","isuse":1,"createtime":1448627541000},{"id":170,"cname":"索马里","englishname":"SOMALI","simplespile":"SO","isuse":1,"createtime":1448627541000},{"id":172,"cname":"南非","englishname":"SOUTHAFRICA","simplespile":"ZA","isuse":1,"createtime":1448627541000},{"id":173,"cname":"西班牙","englishname":"SPAIN","simplespile":"ES","isuse":1,"createtime":1448627541000},{"id":174,"cname":"斯里兰卡","englishname":"SRILANKA","simplespile":"LK","isuse":1,"createtime":1448627541000},{"id":175,"cname":"苏丹","englishname":"SUDAN","simplespile":"SD","isuse":1,"createtime":1448627541000},{"id":176,"cname":"苏里南","englishname":"SURINAM","simplespile":"SR","isuse":1,"createtime":1448627541000},{"id":177,"cname":"斯威士兰","englishname":"SWAZILAND","simplespile":"SZ","isuse":1,"createtime":1448627541000},{"id":178,"cname":"瑞典","englishname":"SWEDEN","simplespile":"SE","isuse":1,"createtime":1448627541000},{"id":179,"cname":"瑞士","englishname":"SWITZERLAND","simplespile":"CH","isuse":1,"createtime":1448627541000},{"id":180,"cname":"叙利亚","englishname":"SYRIA","simplespile":"SY","isuse":1,"createtime":1448627541000},{"id":181,"cname":"塔吉克斯坦","englishname":"TAJIKISTAN","simplespile":"TJ","isuse":1,"createtime":1448627541000},{"id":182,"cname":"坦桑尼亚","englishname":"TANZANIA","simplespile":"TZ","isuse":1,"createtime":1448627541000},{"id":183,"cname":"泰国","englishname":"THAILAND","simplespile":"TH","isuse":1,"createtime":1448627541000},{"id":184,"cname":"乌干达","englishname":"THE REPUBLIC OF UGANDA","simplespile":"UGA","isuse":1,"createtime":1448627541000},{"id":185,"cname":"东帝汶","englishname":"TIMOR","simplespile":"TL","isuse":1,"createtime":1448627541000},{"id":186,"cname":"多哥","englishname":"TOGO","simplespile":"TG","isuse":1,"createtime":1448627541000},{"id":187,"cname":"汤加","englishname":"TONGA","simplespile":"TO","isuse":1,"createtime":1448627541000},{"id":188,"cname":"特立尼达和多巴哥","englishname":"TRINIDADANDTOBAGO","simplespile":"TT","isuse":1,"createtime":1448627541000},{"id":189,"cname":"突尼斯","englishname":"TUNISIA","simplespile":"TN","isuse":1,"createtime":1448627541000},{"id":190,"cname":"土耳其","englishname":"TURKEY","simplespile":"TR","isuse":1,"createtime":1448627541000},{"id":191,"cname":"土库曼斯坦","englishname":"TURKMENISTAN","simplespile":"TM","isuse":1,"createtime":1448627541000},{"id":192,"cname":"乌克兰","englishname":"UKRAINE","simplespile":"UKR","isuse":1,"createtime":1448627541000},{"id":193,"cname":"英国","englishname":"UNITED KINGDOM","simplespile":"GB","isuse":1,"createtime":1448627541000},{"id":194,"cname":"乌兹别克斯坦","englishname":"UZBEKISTAN","simplespile":"UZB","isuse":1,"createtime":1448627541000},{"id":195,"cname":"乌拉圭","englishname":"Uruguay","simplespile":"UY","isuse":1,"createtime":1448627541000},{"id":196,"cname":"瓦努阿图","englishname":"VANUATU","simplespile":"VU","isuse":1,"createtime":1448627541000},{"id":197,"cname":"梵蒂冈","englishname":"VATICAN","simplespile":"VA","isuse":1,"createtime":1448627541000},{"id":198,"cname":"越南","englishname":"VIETNAM","simplespile":"VIE","isuse":1,"createtime":1448627541000},{"id":199,"cname":"委内瑞拉","englishname":"Venezuela","simplespile":"VE","isuse":1,"createtime":1448627541000},{"id":200,"cname":"赞比亚","englishname":"ZAMBIA","simplespile":"ZM","isuse":1,"createtime":1448627541000},{"id":201,"cname":"津巴布韦","englishname":"ZIMBABWE","simplespile":"ZW","isuse":1,"createtime":1448627541000}];
    </script>
    <style>
        .birthdayp{display:inline-block;}
        .tab input,.inspersonDetail .selectIdcard,.selectsex,.selectNation{margin-left:5px;}
        .ntd_div2{width:116px;}
        .ntd_div3{width:185px;}
        .ntd_div4{width:94px;}
        .ntd_div1 input{width:83px;}
        .ntd_div5{width:105px;}
        .ntd_div1{width:100px;}
        .tab input,.inspersonDetail .selectIdcard{padding-left:5px !important;}
        .tab input{padding-right:5px !important;}
        .calendar-bounding-box .content-box .inner h4 select{font-size:15px;}
        .calendar_birth{margin-left:5px;}

        .des_tan{position: absolute;top: 2px;width: 15px;height: 15px;background: url(http://staticnew.mayi.com/resourcesWeb/ordernew/images/bj2.png) no-repeat;background-position: 0 -20px;cursor:pointer;}
        .deposit_detail_layer{
            display:none;
            border:1px solid #e0e0e0;
            position:absolute;
            left:299px;
            top:28px;
            padding:8px;
            width:370px;
            background:#fff;
            color:#313442;
            ox-shadow: 0 0 10px #e1e1e1;
        }
        .tri_rig{
            position:absolute;
            width:0;
            height:0;
            border-width:6px;
            border-color:transparent transparent #e0e0e0 transparent;
            border-style:dashed dashed solid dashed;
            overflow:hidden;
            top:-12px;
            left:226px;
        }
        .tri_rig_b{
            position:absolute;
            width:0;
            height:0;
            border-width:6px;
            border-color:transparent transparent #fffaf4 transparent;
            border-style:dashed dashed solid dashed;
            overflow:hidden;
            top:-11px;
            left:226px;
        }
    </style>
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

    </script></head>
<body>

<!--header-->
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
<!--header-->

<!-- 赶集统计所需 隐藏域 -->
<input type="hidden" name="gjchparam" id ="gjchparam" value='/duanzu/order/book@order=%7B%22room_id%22%3A850428210%7D'/>
<input type="hidden" name="gcparam" id ="gcparam" value='/duanzu/order/-/-/bk_cf@room_id=850428210'/>
<!-- 蚂蚁统计所需 隐藏域 -->
<input type="hidden" name="my_p_t" id ="my_p_t" value='bookorder'/>
<input type="hidden" name="my_b_s" id="my_b_s" value="1"/>
<input type="hidden" name="my_r_id" id ="my_r_id" value='850428210'/>
<input type="hidden" name="my_p_y" id ="my_p_y" value='beijing'/>
<!-- 蚂蚁统计所需 隐藏域 -->
<!-- Content -->
<input type="hidden" id="specialdiscount" value=""/>
<input type="hidden" id="tenantid" value=""/>
<input type="hidden" id="luid" value="850428210"/>
<input type="hidden" id="onlinePayAmount" name="onlinePayAmount" value="0"/>
<input type="hidden" id="hasStock" value=""/>
<input type="hidden" id="tenantValidMobile" value="0"/>
<input type="hidden" id="validingMobile" mobile="0" validResult="-1" />
<form action="{{URL('order_show')}}"  method="post" style="position:relative">

    <input  type="hidden" id="mobileno" name="mobileno" value=""/>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

    <input type="hidden" id="" name="" value="0"/>
    <!-- 促销类型需要传到后台 -->
    <input type="hidden" id="promotiontype" name="promotiontype" value="0"/>
    <input type="hidden" id="totalPrice" name="totalPrice" value="0"/>
    <input type="hidden" id="onlineAmount" name="onlineAmount" value="0"/>
    <input type="hidden" id="lodgeunitState" name="lodgeunitState" value="4"/>
    <input type="hidden" id="visitormobile" name="visitormobile" value=""/>
    <!--保险增加-->
    <input type="hidden" id="policyholdername" name="policyholdername" value="" autocomplete="off" />
    <input type="hidden" id="policyholderidcard" name="policyholderidcard" value="" autocomplete="off" />
    <input type="hidden" id="insurancePeopleNum" name="insurancePeopleNum" value="0" autocomplete='off'/>
    <input type="hidden" id="dayNum" name="dayNum" value="0"/>
    <input type="hidden" id="insuranceInputIds" name="insuranceInputIds" value="1" autocomplete='off'/>
    <input type="hidden" id="orderroomprice" name="orderroomprice" value="0" autocomplete='off' />
    <input type="hidden" id="ctx" name="ctx" value=""/>
    <!-- 优惠券/代金券选择 -->
    <input type="hidden" id="coupon_checkbox" name="coupon_checkbox" value=""/>
    <input type="hidden" id="coupon_radio" name="coupon_radio" value=""/>
    <input type="hidden" id="promotionAmount" name="promotionAmount" value=""/>

    <input type="hidden" id="cityid" name="cityid" value="12"/>
    <input type="hidden" id="isInsurance" name="isInsurance" value="0"/>
    <input type="hidden" id="insuranceJson" name="insuranceJson" value="0"/>

    <input type="hidden" id="deposit" name="deposit" value=""/>
    <!--内容部分开始-->
    <!--流程图-->
    <div class='one_workflow'>
        <div class='workflow relave'>
            <div class='progress progress_0'></div>
            <b class='workflow1'>提交订单</b>
            <b class='workflow2'>支付订金</b>
            <b class='workflow3'>房东确认</b>
            <b class='workflow4'>预订成功</b>
            <span class='workflow1_1'><a href="javascript:;" class='a_after'>1</a></span>
            <span class='workflow1_2'><a href="javascript:;">2</a></span>
            <span class='workflow1_3'><a href="javascript:;">3</a></span>
            <span class='workflow1_4'><a href="javascript:;" class='duigo'></a></span>

        </div>
    </div>
    <div class='content clearfloat'>
        <div class='fl content_left'>
            <div class='cnt'>

                <div class='cnt1 clearfloat'>
                    <!--预订信息-->
                    <h2>预订</h2>
                    <div class='fl'>
                        <dl class='cnt1_dl clearfloat'>
                            <dt class='fl'>预订日期</dt>
                            <dd class='fl roomer_cnt'>
                                <input type="text" name="r_start_time" id="checkinday" class='date1'  autocomplete="off"/><span id="checkinOfWeek"></span>&nbsp;&nbsp;至&nbsp;&nbsp;<input type="text" id="checkoutday" class='date2' name="r_receive_time" autocomplete="off"/>666<span id="checkoutOfWeek"></span>&nbsp;&nbsp;&nbsp;&nbsp;共<span id='nights'></span>8888晚</dd>
                        </dl>

                        <!--预订套数-->
                        {{--<dl class='cnt1_dl clearfloat'>--}}
                        {{--<dt class='fl'>预订套数</dt>--}}
                        {{--<dd class='fl relave'>--}}
                        {{--<div class='dianj2 fl'><i id="roomNum"></i></div>--}}
                        {{--</dd>--}}
                        {{--<b class='fl room_pice relave'>房费&nbsp;¥<strong id="showtotalprice"></strong><span class='tab_tan tab_tan1'></span>--}}


                        {{--<!--房费弹出层-->--}}
                        {{--<div class='asote price_par price_par1'  style='display:none;'>--}}
                        {{--<p class="sanj sanj2 asote"></p>--}}
                        {{--<table class='price price_fixed'>--}}
                        {{--<tr class='relave'>--}}
                        {{--<th width=92><div style='width:92px;'>日期</div></th>--}}
                        {{--<th width=126><div style='width:126px;'>单价</div></th>--}}
                        {{--<th width=43><div style='width:43px;'>数量</div></th>--}}
                        {{--<th width=75 class='bon'><div style='width:75px;' >小计</div></th>--}}
                        {{--</tr>--}}
                        {{--</table>--}}
                        {{--<div class='tab_par'>--}}
                        {{--<table class='price' id='lefttable'>--}}
                        {{--</table>--}}
                        {{--</div>--}}

                        {{--<div class='tfoot relave'>--}}
                        {{--<div class='fr_fu absot'>共<b id='totlenight1'></b>晚&nbsp;合计¥<b id='totleprice1'></b></div>--}}
                        {{--<ul class='fl_fu' id='llandlordrule'>--}}
                        {{--<li>房东规定：</li>--}}
                        {{--<li>·&nbsp;满7天9.5折，满30天9.0折 </li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}

                        {{--</div>--}}

                        {{--</b>--}}


                        {{--</dl>--}}
                        <!--入住人数-->
                        <dl class='cnt1_dl clearfloat'>
                            <dt class='fl'>入住人数</dt>
                            <dd class='fl relave people_in'>
                                {{--<input type="hidden" id="maxguest" value="8"/>--}}
                                {{--<input type="text" name="r_people_num" class='rens' tabindex="1" onkeyup="this.value=this.value.replace(/\D/g,'')" placeholder='最多入住8人' maxlength="2"/>--}}
                                <input type="text" name="r_people_num"/>
                            </dd>
                        </dl>



                    </div>
                </div>

            </div>


            <div class='cnt1 cnt2 clearfloat'>
                <h2>联系人</h2>
                <div class="fl">
                    <dl class='cnt1_dl clearfloat'>
                        <dt class='fl'>姓名</dt>
                        <dd class='fl'><input type="text" placeholder="选填" tabindex="2" name="r_name" id="tenantname" name="tenantname"/></dd>
                    </dl>
                    <dl class='cnt1_dl clearfloat'>
                        <dt class='fl'>手机号</dt>
                        <dd class='fl'>
                            {{--<input type="text" placeholder="必填" class='import fl' tabindex="3" id="tenantmobile"  name="r_phone" value="5555"  autocomplete="off" />--}}
                            <input type="text" name="r_phone"/>

                            <span class='relave fl error'><i class='absot gou'></i><b>手机号错误，请重新尝试！</b></span>
                        </dd>
                    </dl>
                    <!--
                    <dl class='cnt1_dl clearfloat' id="imgcode" >
                        <dt class='fl'>验证码</dt>
                        <dd class='fl he_int'>
                            <input type="text" id="bookimagecode" value="" class='import fl' tabindex="3" /><img src="/common/authimage?random=0000&width=130&height=38"  id="bookauthimage" title="点击刷新" class="img_yan"/>
                            <span class='relave fl error error_img'><i class='absot gou'></i><b>图片验证码错误，请重新尝试！</b></span>
                        </dd>
                    </dl>
                    -->

                </div>
            </div>
            <!--优惠券-->
            <div class='cnt1 cnt2 clearfloat' style="display: none">
                <h2>优惠</h2>
                <div class='fl'>

                    <dl class='cnt1_dl clearfloat'>
                        <dt class='fl'>优惠券</dt>
                        <dd class='fl relave people_in people_in1 IE_border'><div class='dianj4' style='background:#fff;'><i></i><span class='asote dingw'></span></div>
                            <ul class='people havDai' style='display:none'>
                            </ul>
                        </dd>
                        <b class='fl room_pice'><span class="couponcun"></span>优惠券可用</b>
                    </dl>
                </div>
            </div>
            <div class='cnt1 cnt2 cnt3 cnt4 clearfloat'>
                <h2 class='need'>
                    可选服务
                </h2>
                <!--意外险部分-->
                <div class='fl cle'>
                    <div class='relave accident1 clearfloat'>
                        <p class='insurance'>
                            <label class='insurance_label'>
                                <input type="checkbox" autocomplete='off' id="insuranceCB"/>
                                需要住宿意外险
                            </label>
                            &nbsp;&nbsp;
                    <span class='insurance_btn'>
                      <i>
                          蚂蚁免费赠送1份
                      </i>
                      <b class='safeticket safeticket1'>
                          &nbsp;《住宿意外险》
                      </b>
                    </span>
                            <i>
                                蚂蚁免费赠送1份
                            </i>
                            &nbsp;&nbsp;保费优惠价为0.29元/天/人，保额高达10万元。
                        </p>
                        <!--意外险弹框-->
                        <div class="safeticket_details_cover1" style="display: none;left:256px">
                            <div class="safeticket_details1">
                                <p>
                                    为保障您在住宿期间的人身安全，蚂蚁短租联合太平保险推出住宿意外险，保额高达10万元！蚂蚁免费赠送您1份意外险，您也可以为其他入住人购买此保险。保险生效时间从入住日12点起，到退房日12点止。有任何保险相关问题请联系太平保险客服电话：95589。入住日12点后取消订单，不能退保。
                                </p>
                                <b></b>
                                <div class="details_link_css">
                                    <a href="/insurance" target="_blank" style="color:#22bb62;">查看保险说明&gt;</a>
                                </div>
                            </div>
                        </div>
                        <div class='optional'>
                            <!--联系人-->
                            <ul class='insurance_xix insurance_xix2 clearfloat'>
                            </ul>
                            <!--房客保险信息补全-->
                            <table class="tab" id="add_person" style="margin-left:-142px;margin-bottom:0;width:830px;">
                                <tbody>
                                <tr class="tr1">
                                <tr class="tr1 new_add">
                                    <td class="ntd_div1">真实姓名</td>
                                    <td class="ntd_div2">证件类型</td>
                                    <td class="ntd_div3">证件号码</td>
                                    {{--<td class="ntd_div4">性别</td>--}}
                                    {{--<td class="ntd_div5">出生日期</td>--}}
                                    <td class="ntd_div6">住宿意外险</td>
                                    <td class="ntd_div2">民族/国家</td>
                                    <td class="bon ntd_div7">操作</td>
                                </tr>
                                </tr>
                                <tr class="inspersonDetail" id="source_1">
                                    <td class="ntd_div1">
                                        <input type="text" class="name_person" name="r_real_name" id="person_name1"
                                               autocomplete="off" maxlength=10>

                                    </td>
                                    <td class="ntd_div2">
                                        <select class="selectIdcard" id="person_idtype1" name="r_idcarts" autocomplete="off">
                                            <option  value="身份证">身份证</option>
                                            <option value="身份证">港澳通行证</option>
                                            <option  value="身份证">台湾通行证</option>
                                            <option value="身份证">军官证</option>
                                            <option  value="身份证">护照</option>
                                        </select>
                                    </td>
                                    <td class="ntd_div3">
                                        <input type="text" class="ID_number" name="r_idcart" id="person_idcard1"
                                               autocomplete="off" >
                                    </td>
                                    {{--<td class="ntd_div4">--}}
                                    {{--<p style="text-indent: 20px;"></p>--}}
                                    {{--<select class="selectsex" id="person_sex1" autocomplete="off" style="display:none">>--}}
                                    {{--<option value="" name="sexvalue">请选择</option>--}}
                                    {{--<option value="男" name="sexvalue">男</option>--}}
                                    {{--<option value="女" name="sexvalue">女</option>--}}
                                    {{--</select>--}}
                                    {{--</td>--}}
                                    {{--<td class="ntd_div5" style="position:relative;">--}}
                                    {{--<p class="birthdayp" style="text-indent: 20px;"></p>--}}
                                    {{--<input type="text" class="J_Select birthday" autocomplete="off" id="person_birthday1" style="display:none" >--}}
                                    {{--</td>--}}
                                    <td class="ntd_div6 for_free">免费赠送</td>
                                    <td class="ntd_div2">
                                        <select  class="selectNation" id="person_nation1">
                                        </select>
                                    </td>
                                    <td class="ntd_div7 bon">
                                        <a class='insExpenses1' rel='nofollow'>清空</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="clearfix mb20 xian_total">
                                <p>
                                    <span id="peopleNum">1</span>份，共
                                    <span class="orange">¥<b id="insurancePriceShow">0</b></span>
                                    <span class="add_person_btn new_gray-btn" >+添加被保人</span>
                                </p>
                            </div>
                        </div>
                        <div class="add_person_details">
                            <div class="surveYY">
                            </div>
                            <div class="offmax" id="offmax">
                                <div class="dp_header"> 填写投保人信息</div>
                                <div class="dp_daypicker">
                    <span class="color666 mgb10">
                      * 您添加的被保险人都为未成年人，根据相关法规，您还需填写一个成年人的身份信息作为保险的投保人，否则将无法完成投保。
                    </span>
                                    <p>
                                        <font class="width150">投保人真实姓名：</font>
                                        <input style="width:200px;border-radius:3px" maxlength="15" class="alterInputName"
                                               id="policyholdernameF" name="policyholdernameF" value="" autocomplete="off"/>
                                    </p>
                                    <p>
                                        <font class="width150"> 投保人身份证号码：</font>
                                        <input style="width:200px;border-radius:3px" maxlength="18" class="alterInputName"
                                               id="policyholderidcardF" name="policyholderidcardF" value="" autocomplete="off"/>
                                    </p>
                                    <p class="orange textcenter" id="policyholderspan"></p>
                                </div>
                                <a class="cancel_btn" style="cursor:hand;cursor:pointer;">取消</a>
                                <a class="makeSure_btn" style="cursor:hand;cursor:pointer;">确定</a>
                            </div>
                        </div>
                    </div>
                    <!--门票-->
                    <input type="hidden" name="usedSpecial" id="usedSpecial" value="used">
                    <input type="hidden" name="ticketList" id="ticketList" value="">
                    <input type="hidden" id="stids" value="">
                    <div class='relave tack2 accident2'>

                        <p class='insurance clearfloat'><label class='insurance_label'><input type="checkbox" autocomplete='off'/>需要门票</label>
                            &nbsp;&nbsp;(<span class='insurance_btn'><i>查看</i><b class='safeticket safeticket2'>&nbsp;《门票说明》</b></span><i>
                                北京景山公园成人票&nbsp;&nbsp;北京野生动物园成人票&nbsp;&nbsp;北京大观园成人票&nbsp;&nbsp;
                                ...享团队价购票</i>)</p>

                        <div class='optional'>
                            <!--景点信息-->
                            <table class='tab tab_gong' id="cartTable" style='margin-top:10px;'>
                                <tr class='tr1'>
                                    <td><div class='td_div1'>景点名称</div></td>
                                    <td><div class='td_div1'>价格</div></td>
                                    <td class='td3'><div class='td_div1'>数量</div></td>
                                    <td class='td3 bon'><div class='td_div1'>游玩日期</div></td>
                                </tr>
                                <tr>
                                    <td class='td2_1 td2_3' id="ticket_detail_37" specialPrice="100" discountPrice="200" originalPrice="200">北京景山公园成人票</td>
                                    <td class='td2_2 td2_3 tick3'>¥<i>2</i>&nbsp;&nbsp;<span>¥2</span>
                                    </td>
                                    <td class='td2_3 intjj'><span class='clearfloat'>
                            <input type="button" value='－' class='jian fl jian_no' onclick="ticketManager.increaseNum(37,-1,99)"/>
                            <input type="text" value='0' class='tick_math fl count-input' onkeyup="ticketManager.increaseNum(37,0,99)" id="num_37"/>
                            <input type="button" value='＋' class='jia fl' onclick="ticketManager.increaseNum(37,1,99)"/></span></td>
                                    <td class='bon'><div class="calendar">
                                            <!-- id="checkinday" -->
                                            <input type="text"  data-value="1" readonly="true" placeholder="请选择" class="date1 ticket_date" autocomplete="off" id="ticket_date_37">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class='td2_1 td2_3' id="ticket_detail_38" specialPrice="5000" discountPrice="11800" originalPrice="13000">北京野生动物园成人票</td>
                                    <td class='td2_2 td2_3 tick3'>¥<i>118</i>&nbsp;&nbsp;<span>¥130</span>
                                    </td>
                                    <td class='td2_3 intjj'><span class='clearfloat'>
                            <input type="button" value='－' class='jian fl jian_no' onclick="ticketManager.increaseNum(38,-1,99)"/>
                            <input type="text" value='0' class='tick_math fl count-input' onkeyup="ticketManager.increaseNum(38,0,99)" id="num_38"/>
                            <input type="button" value='＋' class='jia fl' onclick="ticketManager.increaseNum(38,1,99)"/></span></td>
                                    <td class='bon'><div class="calendar">
                                            <!-- id="checkinday" -->
                                            <input type="text"  data-value="1" readonly="true" placeholder="请选择" class="date1 ticket_date" autocomplete="off" id="ticket_date_38">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class='td2_1 td2_3' id="ticket_detail_39" specialPrice="100" discountPrice="2500" originalPrice="4000">北京大观园成人票</td>
                                    <td class='td2_2 td2_3 tick3'>¥<i>25</i>&nbsp;&nbsp;<span>¥40</span>
                                    </td>
                                    <td class='td2_3 intjj'><span class='clearfloat'>
                            <input type="button" value='－' class='jian fl jian_no' onclick="ticketManager.increaseNum(39,-1,99)"/>
                            <input type="text" value='0' class='tick_math fl count-input' onkeyup="ticketManager.increaseNum(39,0,99)" id="num_39"/>
                            <input type="button" value='＋' class='jia fl' onclick="ticketManager.increaseNum(39,1,99)"/></span></td>
                                    <td class='bon'><div class="calendar">
                                            <!-- id="checkinday" -->
                                            <input type="text"  data-value="1" readonly="true" placeholder="请选择" class="date1 ticket_date" autocomplete="off" id="ticket_date_39">
                                        </div></td>
                                </tr>
                                <tr>
                                    <td class='td2_1 td2_3' id="ticket_detail_105" specialPrice="100" discountPrice="2300" originalPrice="2500">圆明园成人票 </td>
                                    <td class='td2_2 td2_3 tick3'>¥<i>23</i>&nbsp;&nbsp;<span>¥25</span>
                                    </td>
                                    <td class='td2_3 intjj'><span class='clearfloat'>
                            <input type="button" value='－' class='jian fl jian_no' onclick="ticketManager.increaseNum(105,-1,99)"/>
                            <input type="text" value='0' class='tick_math fl count-input' onkeyup="ticketManager.increaseNum(105,0,99)" id="num_105"/>
                            <input type="button" value='＋' class='jia fl' onclick="ticketManager.increaseNum(105,1,99)"/></span></td>
                                    <td class='bon'><div class="calendar">
                                            <!-- id="checkinday" -->
                                            <input type="text"  data-value="1" readonly="true" placeholder="请选择" class="date1 ticket_date" autocomplete="off" id="ticket_date_105">
                                        </div></td>
                                </tr>
                            </table>
                            <div class='gong_men'>
                                共<span id="selectedTotal">0</span>张&nbsp;合计:¥<b id="ticketspriceTot">0</b>元
                            </div>
                        </div>
                    </div>
                    <!--特色服务-->
                    <div class='relave accident3' style='display:none'>

                        <p class='insurance'><label class='insurance_label'><input type="checkbox" autocomplete='off'/>房东提供特色服务</label><span class='insurance_btn'>&nbsp;&nbsp;选择您需要的服务，费用由您入住时支付给房东，蚂蚁不收取此部分费用</span><i>&nbsp;&nbsp;租车&nbsp;&nbsp;早餐&nbsp;&nbsp;机场接送...</i></p>

                        <ul class='mingxi clearfloat optional' id='mingxi'>

                            <!--class=li_click为房客选中特色服务时li的样式-->
                            <li>早餐&nbsp;<span>20</span>/位</li>
                            <li>机场接送&nbsp;<span>20</span>元</li>
                            <li>车站接送&nbsp;<span>200</span>元</li>
                            <li>租车&nbsp;<span>300</span>元</li>
                            <li>自行车&nbsp;<span>200</span>元</li>
                            <li>本地导游&nbsp;<span>300</span>元</li>
                            <li>婴儿车&nbsp;免费</li>
                            <li>婴儿床&nbsp;免费</li>
                    </div>
                </div>
            </div>
            <div class='cnt1_dl cnt1 clearfloat landlord '>
                <h2 class='fl need need2'>房东规定</h2>
                <div class='fl relave need2'>
                    <div class='roomer'>退款政策：入住日<span name="allrefundday"></span>日18:00以后取消订单将<span>扣除首晚房费</span>作为违约金<i class='more'>&nbsp;&nbsp;更多详情</i></div>
                    <div class="c_bar_box">
                        <div class="c_tip_bar1 c_position1"> 入住日前15天</div>
                        <div class="c_tip_bar2 c_position2">入住时间 </div>
                        <div class="c_tip_bar2 c_position3"> 退房时间</div>
                        <div class="c_tip_bar3 c_position4">
                            <span name="allrefundday"></span><i>18:00</i>
                        </div>
                        <div class="c_tip_bar3 c_position5">
                            <span name="checkindayShow"></span><i>18:00</i>
                        </div>
                        <div class="c_tip_bar3 c_position6">
                            <span name="checkoutdayShow"></span><i>12:00</i>
                        </div>
                        <div class='c_sanj c_position7 asote'>
                            <p class="sanj asote"></p>
                            如取消订单， 全额退款
                        </div>
                        <div class='c_sanj c_position8 asote'>
                            <p class="sanj asote"></p>
                            如取消订单，&nbsp;&nbsp;&nbsp; 扣除第一天房费
                        </div>
                        <div class='c_sanj c_position9 asote'>
                            <p class="sanj asote"></p>
                            如提前退房，18：00之前取消订单，扣除当天房费；18：00之后取消订单，扣除当天及次日房费
                        </div>
                    </div>
                </div>
            </div>
            <div class='cnt_foot' style="position:relative;">
                <!--温馨提示暂时无特色服务相关的费用 ，以及您选定房东提供的特色服务费用 -->
                <p id="reminder" style="display: none">温馨提示：您还需要线下支付给房东<span id="sOflinePay">剩余房款¥<span id="offlinePayAmount"></span></span></p>
                <div class='order_sub_parent'>
                    {{--<a   class='submit fl' onclick='submitOrder();'>提交订单</a>--}}
                    <input type="submit" value="提交订单"/>
                    <div class='App_download fl'>
                        <a href="/activity/app50" target="_blank">手机下单立减5元<span class="absot APP_hover"></span></a>
                        <div class="order_head_pop">
                            <div class="tri_rig triangle"></div>
                            <div class="tri_rig_b triangle"></div>
                            <h4>首单立减5元  入住成功再送50</h4>
                            <ul class="erwm_order clearfloat">
                                <li class="fl APP_li">
                                    <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/App_load.png" alt="">
                                    <p>下载APP</p>
                                </li>
                                <li class="fl APP_li weixin">
                                    <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/weix.png" alt="">
                                    <p>关注微信公众号</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--右侧开始-->
        <div class="fr content_right  pin" id="pin1">
            <div class='right_cnt'>
                <!--右侧房间开始-->
                <div class='room_intro relave clearfloat'>
                    <img class="fl" src="http://i1.mayi.com/gjfs21/M08/0B/47/CgEHFVczBS2kt0UwABhZqDYV4e0301.jpg_200x140c.jpg"/>
                    <strong>北京西站，地铁口五星级大二居无线wifi</strong>
                    <span>北京市丰台区丽泽桥周庄子家园</span>
                </div>
                <div class='time_true'>
                    <p><span id="checkindayr"></span><span id="checkinOfWeekr"></span>&nbsp;至&nbsp;<span id="checkoutdayr"></span><span id="checkoutOfWeekr"></span>&nbsp;共<span id="totlenight3"></span>晚</p>
                    <p><span id="roomNumr"></span>套<span id="guestnum"></span></p>
                </div>
                <!--右侧表格开始-->
                <table class='tab_fr'>
                    <tr class='room_tr'>
                        <td>
                            <div style='width:178px;'>房费</div>
                        </td>
                        <td class='relave bon tab_tex'>
                            <div style='width:130px;'>¥<i id="showtotalprice2"></i><span class='tab_tan tab_tan2'></span>
                                <!--房费弹出层-->
                                <div class='asote price_par price_par2'  style='display:none;'>
                                    <p class="sanj sanj2 asote"></p>
                                    <table class='price price_fixed'>
                                        <tr class='relave'>
                                            <th width=92><div style='width:92px;'>日期</div></th>
                                            <th width=126><div style='width:126px;'>单价</div></th>
                                            <th width=43><div style='width:43px;'>数量</div></th>
                                            <th width=75 class='bon'><div style='width:75px;' >小计</div></th>
                                        </tr>
                                    </table>
                                    <div class='tab_par'>
                                        <table class='price' id='righttable'>


                                        </table>
                                    </div>
                                    <div class='tfoot relave'>
                                        <div class='fr_fu absot'>共<b id='totlenight2'></b>晚&nbsp;合计¥<b id='totleprice2'></b></div>
                                        <ul class='fl_fu' id='rlandlordrule'>
                                            <li>房东规定：</li>
                                            <li>·&nbsp;满7天9.5折，满30天9.0折 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr id="tr_coupon">
                        <td>
                            <div style='width:174px;' >优惠券&nbsp;</div>
                        </td>
                        <td class='relave bon tab_ipt'>
                            <div style='width:98px;margin-left:3px;'><i class='jianmq'></i>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><div style='width:174px;'>保险</div></td>
                        <td class='bon tab_tex'>
                            <div style='width:104px;' id="rightInsurancePrice">免费</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style='width:174px;'>门票</div>
                        </td>
                        <td class='relave bon tab_tex'>
                            <div style='width:104px;'>￥<i id="show_ticket_price">0</i></div>
                        </td>
                    </tr>
                </table>

                <!--支付方式-->
                <div class='on-line'>
                    <div class='online_1 relave clearfloat' >
                        <div class="clearfloat"><b class='color font'>订单总额</b>¥<i class='font2' id="actuallytotalprice"></i></div>
                        <div class="clearfloat"><b class='color font3'>线上支付到蚂蚁</b><i style='float:left;line-height:35px;margin-right:4px;font-size:24px;color:#ff5d51;'>¥</i><i class='font4' id="onlinePayAmountShow" style='color:#ff5d51'></i><span class='asote dingw4'></span></div>
                        <div class='asote online_asote'>
                            <p class="sanj sanj3 asote"></p>
                            预付比例由房东设置，当前房间的预付比例为支付总房费的<i id="payRuleRate"></i>%
                        </div>
                    </div>
                    <p>(房租*预付比例-优惠券+保险+门票)</p>
                </div>

            </div>
            <div class='online_2'>
                蚂蚁承诺到店无房赔付首晚&nbsp;&nbsp;<a href="/supportplan/">查看详情</a>
            </div>
        </div>
    </div>
</form>
<!--左侧保单信息弹层-->
<div class="details_link_details details_link_details1" style="display: none;">
    <div class="surveYY"></div>
    <div class="offmax1" id="offmax1">
        <div class="dp_header">保单信息</div>
        <div class="safe_content">
            <div class="table_box">
                <div class="table_head">阳光财产保险股份有限公司蚂蚁短租住宿旅客综合意外伤害保险</div>
                <ul>
                    <li><b>保险责任</b><b>保险金额（单位：元）</b></li>
                    <li><b>住宿旅客意外身故</b><b>6万</b></li>
                    <li><b>住宿旅客意外残疾</b><b>6万</b></li>
                    <li><b>住宿旅客意外伤害医疗</b><b>0.6万</b></li>
                </ul>
                <p>1.每一被保险人最高限2份；</p>
                <p>2.70周岁以上及16周岁以下的被保险人限1份；</p>
                <p>3.根据国家保险监督管理委员会相关规定，未成年人累计身故保险金额最高位人民币10万元整</p>
            </div>
            <h3>【保险对象】</h3>
            <p>凡身体健康，在蚂蚁短租租赁房屋，正式登记住宿并成功投保的旅客，可作为本保险合同的被保险人。</p>
            <h3>【保险期间】</h3>
            <p>在蚂蚁短租网订单中约定的入住日12时起至约定的退房日12点止（每24小时为1天，不足24小时以24小时计算）</p>
            <h3>【保险责任】</h3>
            <p>（一）“住宿宾馆内意外伤害”保障</p>
            <p>1、“住宿宾馆内意外伤害”<span class="bold">身故</span>保险金给付</p>
            <p>在保险期间内，被保险人在本保险合同约定的住宿宾馆内发生意外伤害事故，并自该事故发生之日起180日内以该事故为直接且单独原因导致身故的，保险人按保险合同所载的“住宿宾馆内意外伤害”保险金额给付“住宿宾馆内意外伤害”身故保险金，对该被保险人保险责任终止。</p>
            <p>被保险人因在本保险合同约定的住宿宾馆内遭受意外伤害事故且自该事故发生日起下落不明，后经人民法院宣告死亡的，保险人按保险合同所载的“住宿宾馆内意外伤害”保险金额给付“住宿宾馆内意外伤害”身故保险金。但若被保险人被宣告死亡后生还的，保险金受领人应于知道或应当知道被保险人生还后30日内退还保险人给付的身故保险金。</p>
            <p>如果本保险的被保险人于身故前曾领取“住宿宾馆内意外伤害”残疾保险金，则其“住宿宾馆内意外伤害”身故保险金应扣除已给付的“住宿宾馆内意外伤害”残疾保险金。</p>
            <p>2、“住宿宾馆内意外伤害”<span class="bold">残疾</span>保险金给付</p>
            <p>在保险期间内，被保险人在本保险合同约定的住宿宾馆内发生意外伤害事故，并自该事故发生之日起180日内以该事故为直接且单独原因造成本保险合同所附《人身保险伤残评定标准》（简称“《标准》”）所列残疾之一的，保险人按该《标准》所列给付比例乘以本保险合同所载的“住宿宾馆内意外伤害”保险金额给付“住宿宾馆内意外伤害”残疾保险金。如到第180日治疗仍未结束的，按第180日的身体情况进行残疾鉴定，并据此给付“住宿宾馆内意外伤害”残疾保险金。</p>
            <p>（1）被保险人因同一意外伤害事故造成两处或两处以上伤残时，应首先根据《标准》对各处伤残程度分别进行评定，如果几处伤残等级不同，以最重的伤残等级作为最终的评定结论并据此给付残疾保险金；如果两处或两处以上伤残等级相同，伤残等级在原评定基础上最多晋升一级，最高晋升至第一级。同一部位和性质的伤残，不应采用《标准》条文两条以上或者同一条文两次以上进行评定。</p>
            <p>（2）被保险人如在本次意外伤害事故之前已有残疾，保险人按合并后的残疾程度在《标准》中所对应的给付比例给付残疾保险金，但应扣除原有残疾程度在《标准》中所对应的残疾保险金。</p>
            <p>（二）“住宿宾馆内意外伤害<span class="bold">医疗</span>”保障</p>
            <p>1、在保险期间内，被保险人在本保险合同约定的住宿宾馆内发生意外伤害事故，须在中华人民共和国卫生行政部门评定的二级以上（含二级）医院诊疗而实际支出的，符合保险单签发地政府社会医疗保险（指城镇职工基本医疗保险、城镇居民基本医疗保险、新型农村合作医疗保险、公务员医疗补助、城乡医疗救助等非商业性质保险，下同）管理规定的医疗费用，保险人按照本保险合同约定在意外伤害医疗保险金额内给付意外伤害医疗保险金。</p>
            <p>被保险人因保险事故须到医院进行合理且必需的治疗，在本保险合同载明的保险期间内，<span class="bold">保险人以该次保险事故发生之日起180日为限，对超出部分不承担给付“住宿宾馆内意外伤害医疗”保险金责任。</span>若至本保险合同终止日治疗仍未结束的，保险人继续承担给付保险金责任，最长延续至本保险合同终止日起第30日且不超过该次保险事故发生之日起第180日；累计保险金给付不超过“住宿宾馆内意外伤害医疗”保险金额。</p>
            <p>2、本保险合同的“住宿宾馆内意外伤害医疗”保险责任遵循医疗费用补偿原则。保险人给付的“住宿宾馆内意外伤害医疗”保险金与被保险人从其所参加的社会医疗保险、其它保险计划、或从住宿宾馆、第三者责任方、社会福利机构等任何其他途径取得医疗费用补偿总额，以被保险人实际支出的医疗费用金额为限。</p>
            <h3>【责任免除】</h3>
            <p class="bold">第一条</p>
            <p class="bold">被保险人未按《旅馆业治安管理办法》及保险单签发地公安部门旅馆业住宿登记管理相关办法，依法登记身份证明信息，发生意外伤害事故的，保险人不承担给付保险金责任。</p>
            <p class="bold">第二条</p>
            <p class="bold">因下列情形之一造成本保险合同的被保险人身故、残疾或支出医疗费用的，保险人不承担给付保险金责任：</p>
            <p class="bold">（一）投保人的故意行为；</p>
            <p class="bold">（二）被保险人自致伤害或自杀，但被保险人自杀时为无民事行为能力人的除外；</p>
            <p class="bold">（三）因被保险人的挑衅或故意行为而导致的殴斗、被袭击或被谋杀；</p>
            <p class="bold">（四）被保险人从事违法、故意犯罪活动或抗拒依法采取的刑事强制措施而导致的伤害；</p>
            <p class="bold">（五）被保险人未遵医嘱，私自服用、涂用、注射药物；</p>
            <p class="bold">（六）被保险人妊娠（含宫外孕）、流产、分娩（含剖腹产）、不孕不育症（包括人工受孕、试管婴儿等）、避孕及节育手术或由妊娠、分娩、流产、节育所导致的任何并发症；</p>
            <p class="bold">（七）被保险人患精神类疾病如精神分裂症、抑郁症、厌食症、失眠症；被保险人患先天性疾病、遗传性疾病、先天性畸形、变形或染色体异常；</p>
            <p class="bold">（八）被保险人从事潜水、滑水、滑雪、风浪板、蹦极、跳伞、水上摩托艇、滑翔翼、攀岩运动、探险活动、拳击、柔道、跆拳道、空手道、武术比赛、摔跤比赛、特技表演、马术、赛马、各种车辆表演、赛车运动、驾驶卡丁车等高风险运动；</p>
            <p class="bold">（九）被保险人投保前已有残疾的康复或治疗；修复、安装及购买残疾用具（如轮椅、假肢、助听器、假眼、假牙等）；</p>
            <p class="bold">（十）被保险人因意外伤害而支付的交通费、食宿费、生活补助费、误工补贴费、护理费；</p>
            <p class="bold">（十一）本保险合同签发地的社会医疗保险规定的不予支付的情形，或不符合本保险合同签发地的社会医疗保险药品目录、诊疗项目目录以及服务设施范围和支付标准规定的医疗费用；</p>
            <p class="bold">（十二）被保险人洗牙、洁齿、验光、心理咨询、器官移植；</p>
            <p class="bold">（十三）被保险人因意外伤害事故以外的原因失踪而被法院宣告死亡的；</p>
            <p class="bold">（十四）被保险人因任何疾病、食物/药物过敏、食物中毒、中暑、整容手术、高原反应、猝死、椎间盘突出症（包括椎间盘膨出、椎间盘突出、椎间盘脱出、游离型椎间盘等类型）、医疗事故或其他医疗导致的伤害；</p>
            <p class="bold">（十五）战争、军事行动、暴乱或武装叛乱；任何生物、化学、原子能武器，原子能或核能装置所造成的爆炸、灼伤、污染或辐射。</p>
            <p class="bold">第三条</p>
            <p class="bold">被保险人在下列期间遭受伤害导致身故、残疾或支出医疗费用的，保险人也不承担给付保险金责任：</p>
            <p class="bold">（一）被保险人依法被拘禁或服刑期间；</p>
            <p class="bold">（二）被保险人醉酒或受酒精、毒品、管制药物的影响期间；</p>
            <p class="bold">（三）被保险人患有艾滋病或感染艾滋病病毒期间；</p>
            <p class="bold">（四）被保险人酒后驾驶、无照驾驶及驾驶无有效行驶证的机动交通工具期间。</p>
            <p class="bold">若由于本保险合同中责任免除的情形导致的被保险人死亡，保险人将退还未满期净保险费。</p>
            <h3>【保险金的申请与给付】</h3>
            <p>保险金申请人向保险人申请给付保险金时，应提交作为索赔依据的证明和材料。保险金申请人因特殊原因不能提供以下材料的，应提供其它合法有效的材料。若保险金申请人委托他人申请的，还应提供授权委托书原件、委托人和受托人的身份证明等相关证明文件。<span class="bold">保险金申请人未能提供有关材料，导致保险人无法核实该申请的真实性的，保险人对无法核实部分不承担给付保险金的责任。</span></p>
            <p>（一）被保险人身故，由身故保险金受益人作为申请人填写保险金给付申请书，并凭下列证明和资料向保险人申请给付保险金：</p>
            <p>1、保险单正本原件或其它保险凭证原件；</p>
            <p>2、被保险人的住宿证明材料；</p>
            <p>3、受益人户籍证明或身份证明；</p>
            <p>4、公安等部门出具的意外伤害事故证明；</p>
            <p>5、公安部门或卫生行政部门批准的二级以上（含二级）医院或保险人认可的医疗机构出具的被保险人死亡证明；如被保险人因意外事故宣告死亡，须提供人民法院出具的宣告死亡判决书；</p>
            <p>6、被保险人遗体殡葬证明；</p>
            <p>7、被保险人户籍注销证明；</p>
            <p>8、保险金申请人所能提供的其他与确认意外伤害事故的性质、原因等有关的证明和资料。</p>
            <p>（二）被保险人残疾的，保险金申请人应填写保险金给付申请书，并凭下列证明和资料向保险人申请给付保险金：</p>
            <p>1、保险单正本原件或其它保险凭证原件；</p>
            <p>2、被保险人住宿证明材料；</p>
            <p>3、受益人户籍证明或身份证明；</p>
            <p>4、公安等部门出具的意外伤害事故证明；</p>
            <p>5、卫生行政部门批准的二级以上（含二级）有鉴定资质的医疗机构或保险人认可的医疗机构或司法鉴定机构出具的残疾鉴定书；</p>
            <p>6、保险金申请人所能提供的其他与确认意外伤害事故的性质、原因、伤害程度等有关的证明和资料。</p>
            <p>（三）被保险人领取意外伤害医疗保险金的，由被保险人作为申请人，填写保险金给付申请书，并凭下列证明和资料向保险人申请给付保险金：</p>
            <p>1、保险单正本原件或其它保险凭证原件；</p>
            <p>2、被保险人住宿证明材料；</p>
            <p>3、被保险人的户籍证明或者身份证明；</p>
            <p>4、卫生行政部门批准的二级以上（含二级）医院出具医疗费用收据原件、出院证明、住院费用清单、病历；</p>
            <p>5、保险金申请人所能提供的其他与确认意外伤害事故的性质、原因、伤害程度等有关的证明和资料。</p>
            <p>被保险人支出医疗费用并提出索赔申请时，应向保险人提交医疗费用收据原件。</p>
            <p>如被保险人在社会医疗保险经办机构、其他保险人或其它单位已经获得部分医疗费用赔偿，医疗费用收据原件已被赔付或报销单位留存，被保险人在提出索赔申请时，应向保险人提交医疗费用收据财务分割单或在医疗费用收据复印件上注明已赔付金额，并加盖赔付单位的财务章。</p>
            <h3>【注意事项】</h3>
            <p class="bold">1、本条款摘要未尽事宜详见《阳光财产保险股份有限公司住宿旅客综合意外伤害保险条款（2014版)》</p>
            <p class="bold">2、保单查询方式：拨打全国统一客服电话95510或登录网站查询<a href="http://query.sinosig.com/testfwl/fwebs/Prpcmain/search_fwq.jsp">http://query.sinosig.com/testfwl/fwebs/Prpcmain/search_fwq.jsp</a>查询</p>
            <h1>报案电话95510</h1>
            <h2 class="red">投保前提示</h2>
            <p class="red">被保险人本人或监护人均认真阅读本保险说明,了解该产品投保范围,保障内容并同意投保。被保险人本人或监护人确认对投保险种条款尤其是对保险责任条款，免除责任条款，合同解约条款，特别约定，指定受益人进行了认真阅读，理解并同意遵守，所填写资料真实正确。详见<span class="bold">《阳光财产保险股份有限公司住宿旅客综合意外伤害保险条款（2014版)》</span>
                若保险合同成立生效，投保时所填写的资料将作为保险合同的一部分，如有隐瞒或不实告知，将承担由此带来的法律责任。
            </p>
            <p></p>
            <p></p>
            <p></p>
        </div>
        <a class="makeSure1" href="javascript:closeDiv()">关闭</a>
    </div>
</div>

<!--门票详细说明弹层-->
<div class="ticket_link_details details_link_details2" style="display: none;">
    <div class="surveYY"></div>
    <div class="offmax1 offmax2" id="offmax1">
        <div class="dp_header">门票说明</div>
        <div class="safe_content safe_content2">
            <h3>发放时间</h3>
            <p>在您入住蚂蚁短租房源前一天发放；</p>
            <h3>入园方式</h3>
            <p>请您凭短信，至景区售票处换票进入；</p>
            <h3>包含项目</h3>
            <p>仅门票一张。请注意选择出游日期，门票当天有效，过期作废。</p>
            <h3>预订说明</h3>
            <p>为保证取票、入园顺利，预订时请务必填写真实姓名、手机号码等信息。</p>
            <h3>发票说明</h3>
            <p>暂不提供发票，敬请谅解。</p>
            <h3>退改规则</h3>
            <p>入住日前一天12:00前取消预订请登录蚂蚁短租修改；</p>
            <p>入住日前一天12:00后不支持退改门票，敬请谅解。</p>
            <h3>其它说明</h3>
            <p>房源预订咨询蚂蚁短租：400-069-6060</p>
            <p>景点门票咨询同程旅游：4007-777-777</p>
        </div>
        <a class="makeSure2" href="javascript:closeDiv()">关闭</a>
    </div>
</div>

<!--footer-->
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
    var __gjchparam__ = (gjchparamele?gjchparamele.value:'')||"/duanzu/order/book@order=%7B%22room_id%22%3A850428210%7D";

    var gcparamele = document.getElementById('gcparam');
    var __gcparam__ = (gcparamele?gcparamele.value:'')||"/duanzu/order/-/-/bk_cf@room_id=850428210";

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

<!-- footer end -->
<!--取消确定按钮弹出层-->
<div id='layer_rz'>
    <div class='ruzT_mark'></div>
    <div class='ruzT'>
        <h2>删除</h2>
        <p>确定删除该联系人信息？</p>
        <div class='btn_T'>
            <input type="button" value='取消' class='cancel'/>
            <input type="button" value='确定' class='sure'/>
        </div>
    </div>
</div>
<!-- 绑定  -->
<div id="valid_success_bangding" class="alert-box">
    <div class="alert-title" style="text-align:center;">
        验证完成
        <a class="alert-close" id="valid_success_bangding_close" href="javascript:void(0);"></a>
    </div>
    <div class="alert-con">
        <dl class="proving">
            <dt class="succeed"></dt>
            <dd>
                <p><span>恭喜验证成功！</span></p>
                <p>通过绑定以后可通过此手机号码登录查看订单信息</p>
                <!--
                <p><input id="nobangding" class="checking-btn large-btn" type="button" name="nobangding" value="以后在说"/>
                   <input id="bangding" class="checking-btn large-btn" type="button" onclick="bangding();" name="bangding" value="点击绑定"/></p>
                   -->
                <div class="submit-wrap">
                    <a href="javascript:void(0);" rel="nofollow" class="submit" onclick="bangding();">点击绑定</a>
                    <a href="javascript:void(0);"rel="nofollow"  class="laterhandle">以后再说</a>
                </div>

            </dd>
        </dl>
    </div>
</div>
<div id="valid_success" class="alert-box">
    <div class="alert-title" style="text-align:center;">
        验证完成
        <a class="alert-close" id="valid_success_close"rel="nofollow" href="javascript:void(0);"></a>
    </div>
    <div class="alert-con">
        <dl class="proving" style="padding-left:140px;">
            <dt class="succeed"></dt>
            <dd>
                <p><span style="margin-top:20px;line-height:41px;">恭喜验证成功！</span></p>
            </dd>
        </dl>
    </div>
</div>
</body>
</html>