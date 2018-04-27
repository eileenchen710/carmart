<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/admin/view/payments/pay_cod.html";i:1523516678;s:74:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/admin/view/base.html";i:1523516677;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>后台管理中心 - <?php echo WSTConf('CONF.mallName'); ?></title>
<meta name="Keywords" content=""/>
<meta name="Description" content=""/> 
<link href="__ADMIN__/js/ligerui/skins/Aqua/css/ligerui-all.css?v=<?php echo $v; ?>" rel="stylesheet" type="text/css" /> 
<link href="__STATIC__/plugins/validator/jquery.validator.css?v=<?php echo $v; ?>" rel="stylesheet">

<link href="__ADMIN__/css/style.css?v=<?php echo $v; ?>" rel="stylesheet" type="text/css" />   
<script src="__STATIC__/js/jquery.min.js?v=<?php echo $v; ?>"></script>  
<script src="__ADMIN__/js/ligerui/js/ligerui.all.js?v=<?php echo $v; ?>" type="text/javascript"></script> 
<script type='text/javascript' src='__STATIC__/plugins/layer/layer.js?v=<?php echo $v; ?>'></script> 
<script src="__STATIC__/js/common.js?v=<?php echo $v; ?>"></script>
<script>
window.conf = {"ROOT":"__ROOT__","APP":"__APP__","STATIC":"__STATIC__","SUFFIX":"<?php echo config('url_html_suffix'); ?>","GOODS_LOGO":"<?php echo WSTConf('CONF.goodsLogo'); ?>","SHOP_LOGO":"<?php echo WSTConf('CONF.shopLogo'); ?>","MALL_LOGO":"<?php echo WSTConf('CONF.mallLogo'); ?>","USER_LOGO":"<?php echo WSTConf('CONF.userLogo'); ?>",'GRANT':'<?php echo implode(",",session("WST_STAFF.privileges")); ?>'}
</script>
<script src="__ADMIN__/js/common.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/validator/jquery.validator.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/validator/local/zh-CN.js?v=<?php echo $v; ?>"></script>
</head>
<body>

<div class="l-loading" style="display: block" id="wst-loading"></div>

<form id="payForm" autocomplete="off">
<table class='wst-form wst-box-top'>
  <tr>
      <th width='150'>支付名称<font color='red'>*</font>：</th>
          <td>
            <input type="text" id="payName" name="payName" value="<?php echo $object['payName']; ?>" class="ipt" maxLength='20' />
          </td>
       </tr>
       <tr>
          <th>支付方式描述<font color='red'>*</font>：</th>
          <td>
              <textarea id="payDesc" name="payDesc" class="ipt"  style="width:200px;height:100px;" ><?php echo $object['payDesc']; ?></textarea>
          </td>
       </tr>
       <tr>
          <th>排序号<font color='red'>*</font>：</th>
          <td> 
              <input type="text" id="payOrder" name="payOrder" value="<?php echo $object['payOrder']; ?>" class="ipt" maxLength='20' />
          </td>
       </tr>
       <tr>
          <th>是否在线支付：</th>
          <td> 
              否
          </td>
       </tr>
  
  <tr>
     <td colspan='2' align='center'>
       <input type="hidden" id="id" value="<?php echo $object['id']; ?>" />
       <input type="submit" value="提交" class='btn btn-blue' />
       <input type="button" onclick="javascript:history.go(-1)" class='btn' value="返回" />
     </td>
  </tr>
</table>
</form>




<script src="__ADMIN__/payments/payments.js?v=<?php echo $v; ?>" type="text/javascript"></script>

<script>
function showImg(opt){
	layer.photos(opt);
}
function showBox(opts){
	return WST.open(opts);
}
</script>
</body>
</html>