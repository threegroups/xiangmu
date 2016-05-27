<?php
$session = \Yii::$app->session;
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]--><title>用户查看</title>
</head>
<body>
<div class="cl pd-20" style=" background-color:#5bacb6">
  <img class="avatar size-XL l" src="images/user.png">
<<<<<<< HEAD
  <dl style="margin-left:80px; color:#fff">
    <dt><span class="f-18"><?php echo $session->get('u_name');?></span> <span class="pl-10 f-12">余额：40</span></dt>
    <dd class="pt-10 f-12" style="margin-left:0">这家伙很懒，什么也没有留下</dd>
  </dl>
=======
  <dl style="margin-left:80px; color:#fff; float: left;" >
    <dt><span class="f-18"><?php echo $session->get('u_name');?></span> <span class="pl-10 f-12">余额：40</span></dt>
    <dd class="pt-10 f-12" style="margin-left:0">这家伙很懒，什么也没有留下</dd>
  </dl>
    <dl style="float: right;" mar><a href="index.php?r=login/indexes"><input type="button" value="返回"/></a></dl>
>>>>>>> efdedffeb6789ce36dd9618f95538edfd89cf9ca
</div>
<div class="pd-20">
  <table class="table">
    <tbody>
      <tr>
        <th class="text-r" width="80">姓名  ：</th>
        <th class="text-r">邮箱：</th>
         <th class="text-r">手机：</th>
          <th class="text-r">密码：</th>  
            <th class="text-r">注册时间：</th>          
      </tr>
      <tr>
      <?php foreach($arr as $k=>$v){?>
        <td><?php echo $v['u_name']?></td>
         <td><?php echo $v['u_email']?></td>
          <td><?php echo $v['u_phone']?></td>
        <td><?php echo $v['u_pwd']?></td>
          <td><?php echo $v['u_name']?></td>
         <?php }?>
      </tr>
    </tbody>
  </table>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/H-ui.js"></script>
<script type="text/javascript" src="js/H-ui.admin.js"></script>
</body>
</html>