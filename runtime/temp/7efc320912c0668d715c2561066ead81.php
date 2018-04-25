<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:89:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/home/view/default/goods_search.html";i:1524637145;s:81:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/home/view/default/base.html";i:1524545620;s:83:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/home/view/default/header.html";i:1524569045;s:87:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/home/view/default/header_top.html";i:1524574404;s:87:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/home/view/default/shop_apply.html";i:1523516678;s:87:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/home/view/default/right_cart.html";i:1523516678;s:83:"/Applications/XAMPP/xamppfiles/htdocs/carmart/wstmart/home/view/default/footer.html";i:1524504273;}*/ ?>
<!doctype html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>商品搜索 -<?php echo WSTConf('CONF.mallName'); ?><?php echo WSTConf('CONF.mallTitle'); ?></title>

<meta name="description" content="<?php echo WSTConf('CONF.seoMallDesc'); ?>，商品关键字搜索">
<meta name="Keywords" content="<?php echo $keyword; ?>">

<link href="__STYLE__/css/common.css?v=<?php echo $v; ?>" rel="stylesheet">

<link href="__STYLE__/css/goodslist.css?v=<?php echo $v; ?>" rel="stylesheet">

<script type="text/javascript" src="__STATIC__/js/jquery.min.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/layer/layer.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/lazyload/jquery.lazyload.min.js?v=<?php echo $v; ?>"></script>
<script type='text/javascript' src='__STATIC__/js/common.js?v=<?php echo $v; ?>'></script>

<script type='text/javascript' src='__STYLE__/js/common.js?v=<?php echo $v; ?>'></script>


<?php if(((int)session('WST_USER.userId')<=0)): ?>
<link href="__STATIC__/plugins/validator/jquery.validator.css?v=<?php echo $v; ?>" rel="stylesheet">
<link href="__STYLE__/css/login.css?v=<?php echo $v; ?>" rel="stylesheet">
<script type="text/javascript" src="__STATIC__/plugins/validator/jquery.validator.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/validator/local/zh-CN.js?v=<?php echo $v; ?>"></script>
<script type='text/javascript' src='__STYLE__/js/login.js?v=<?php echo $v; ?>'></script>
<?php endif; ?>

<script>
window.conf = {
		"ROOT"      : "__ROOT__",
		"APP"       : "__APP__",
		"STATIC"    : "__STATIC__",
		"SUFFIX"    : "<?php echo config('url_html_suffix'); ?>",
		"SMS_VERFY" : "<?php echo WSTConf('CONF.smsVerfy'); ?>",
    	"SMS_OPEN"  : "<?php echo WSTConf('CONF.smsOpen'); ?>",
    	"GOODS_LOGO": "<?php echo WSTConf('CONF.goodsLogo'); ?>",
    	"SHOP_LOGO" : "<?php echo WSTConf('CONF.shopLogo'); ?>",
    	"MALL_LOGO" : "<?php echo WSTConf('CONF.mallLogo'); ?>",
    	"USER_LOGO" : "<?php echo WSTConf('CONF.userLogo'); ?>",
    	"IS_LOGIN"  : "<?php if((int)session('WST_USER.userId')>0): ?>1<?php else: ?>0<?php endif; ?>",
    	"TIME_TASK" : "1"
	}
$(function() {
	WST.initVisitor();
});
</script>
</head>
<body>

	<div class="wst-header">
    <div class="wst-nav">
		<ul class="headlf" style='float:left;width:500px;'>
		<?php if(session('WST_USER.userId') >0): ?>
		   <li class="drop-info">
			  <div class="drop-infos">
			  <a href="<?php echo Url('home/users/index'); ?>">欢迎您，<?php echo session('WST_USER.userName')?session('WST_USER.userName'):session('WST_USER.loginName'); ?></a>
			  </div>
			  <div class="wst-tag dorpdown-user">
			  	<div class="wst-tagt">
			  	   <div class="userImg" >
               <?php if(session('WST_USER.userPhoto')): ?>
				  	<img class='usersImg' data-original="__ROOT__/<?php echo session('WST_USER.userPhoto'); ?>"/>
            <?php else: ?>
              <img class="usersImg" src="__ROOT__/<?php echo WSTConf('CONF.userLogo'); ?>" height='150' width="150" />
            <?php endif; ?>
				   </div>
				  <div class="wst-tagt-n">
				    <div>
					  	<span class="wst-tagt-na"><?php echo session('WST_USER.userName')?session('WST_USER.userName'):session('WST_USER.loginName'); ?></span>
					  	<?php if((int)session('WST_USER.rankId') > 0): ?>
					  		<img src="__ROOT__/<?php echo session('WST_USER.userrankImg'); ?>" title="{:<?php echo session('WST_USER.rankName'); ?>"/>
					  	<?php endif; ?>
				  	</div>
				  	<div class='wst-tags'>
			  	     <span class="w-lfloat"><a onclick='WST.position(15,0)' href='<?php echo Url("home/users/edit"); ?>'>用户资料</a></span>
			  	     <span class="w-lfloat" style="margin-left:10px;"><a onclick='WST.position(16,0)' href='<?php echo Url("home/users/security"); ?>'>安全设置</a></span>
			  	    </div>
				  </div>
			  	  <div class="wst-tagb" style='display:none'>
			  		<a>待处理订单</a>
			  		<a>我的余额</a>
			  		<a>我的消息</a>
			  		<a>我的积分</a>
			  		<a>我的关注</a>
			  		<a>咨询回复</a>
			  	  </div>
			  	<div class="wst-clear"></div>
			  	</div>
			  </div>
			</li>
			<li class="spacer">|</li>
			<li class="drop-info">
			<a href='<?php echo Url("home/messages/index"); ?>' target='_blank' onclick='WST.position(49,0)'>消息（<span id='wst-user-messages'>0</span>）</a>
			</li>
			<li class="spacer">|</li>
			<li class="drop-info">
			  <div><a href="javascript:WST.logout();">退出</a></div>
			</li>
			<?php else: ?>
			<li class="drop-info">
			  <div><?php echo WSTMSubstr(WSTConf('CONF.mallName'),0,13); ?><a href="<?php echo Url('home/users/login'); ?>">&nbsp;&nbsp;请&nbsp;登录</a></div>
			</li>
			<li class="spacer">|</li>
			<li class="drop-info">
			  <div><a href="<?php echo Url('home/users/regist'); ?>">免费注册</a></div>
			</li>
			<?php endif; ?>
		</ul>
		<ul class="headrf" style='float:right;'>
		    <!-- <li class="j-dorpdown">
				<div class="drop-down" style="padding-left:0px;">
					<a href="<?php echo Url('home/users/index'); ?>" target="_blank">我的订单<i class="di-right"><s>◇</s></i></a>
				</div>
				<div class='j-dorpdown-layer order-list'>
				   <div><a href='<?php echo Url("home/orders/waitPay"); ?>' onclick='WST.position(3,0)'>待付款订单</a></div>
				   <div><a href='<?php echo Url("home/orders/waitReceive"); ?>' onclick='WST.position(5,0)'>待发货订单</a></div>
				   <div><a href='<?php echo Url("home/orders/waitAppraise"); ?>' onclick='WST.position(6,0)'>待评价订单</a></div>
				</div>
			</li> -->

			<!-- <li class="spacer">|</li>
			<li class="j-dorpdown">
				<div class="drop-down drop-down2 pdr5"><i class="di-left"></i><a href="#" target="_blank">手机商城</a></div>
				<div class='j-dorpdown-layer sweep-list'>
				   <div class="qrcodea">
					   <div id='qrcodea' class="qrcodeal"></div>
					   <div class="qrcodear">
					   	<p>扫描二维码</p><span>下载手机客户端</span><br/><a style="margin-bottom:-2px;">Android</a><br/><a>iPhone</a>
					   </div>
				   </div>
				</div>
			</li> -->
			<li class="spacer">|</li>
			<li class="j-dorpdown">
				<div class="drop-down" style="padding:0 5px;"><a href="#" target="_blank">关注我们</a></div>
				<div class='j-dorpdown-layer des-list' style="width:78px;">
					<div style="height:78px;"><img src="__STYLE__/img/wst_qr_code.jpg" style="height:78px;"></div>
					<div>关注我们</div>
				</div>
			</li>
			<li class="spacer">|</li>
			<li class="j-dorpdown">
				<div class="drop-down drop-down4 pdr5"><a href="#" target="_blank">我的收藏</a></div>
				<div class='j-dorpdown-layer foucs-list'>
				   <div><a href="<?php echo Url('home/favorites/goods'); ?>" onclick='WST.position(41,0)'>商品收藏</a></div>
				   <div><a href="<?php echo Url('home/favorites/shops'); ?>" onclick='WST.position(46,0)'>店铺收藏</a></div>
				</div>
			</li>
			<li class="spacer">|</li>
			<li class="j-dorpdown">
				<div class="drop-down drop-down5 pdr5" ><a href="#" target="_blank">客户服务</a></div>
				<div class='j-dorpdown-layer des-list'>
				   <div><a href='<?php echo Url("home/helpcenter/view","id=1"); ?>' target='_blank'>帮助中心</a></div>
				   <div><a href='<?php echo Url("home/helpcenter/view","id=8"); ?>' target='_blank'>售后服务</a></div>
				   <div><a href='<?php echo Url("home/helpcenter/view","id=3"); ?>' target='_blank'>常见问题</a></div>
				</div>
			</li>
			<li class="spacer">|</li>
			<?php if(session('WST_USER.userId') > 0): if(session('WST_USER.userType') == 0): ?>
				<li class="j-dorpdown">
				<div class="drop-down pdl5" ><a href="#" target="_blank">商家管理<i class="di-right"><s>◇</s></i></a></div>
				<div class='j-dorpdown-layer foucs-list'>
				   <div><a href="<?php echo url('home/shops/login'); ?>">商家登录</a></div>
				   <div><a href="javascript:shopApply();" rel="nofollow">我要开店</a></div>
				</div>
				</li>
				<link href="__STATIC__/plugins/validator/jquery.validator.css?v=<?php echo $v; ?>" rel="stylesheet">
<link href="__STYLE__/css/shopapply.css?v=<?php echo $v; ?>" rel="stylesheet">
<div id="wst-shopapp" class="wst-shopapp" style="display:none;">
	<div class="wst-shopapp-fo">
	<a href="javascript:void(0)" onclick="javascript:getClose()" class="wst-shopapp-close"></a>
	<form id="apply_form"  method="post" autocomplete="off">
	<table class="wst-table" style="margin:15px;margin-left:35px;">
		<tr>
			<td class="wst-shopapp-td">手机号</td>
			<td><input id="userPhone2" name="userPhone" class="wst_ipt2 wst-shopapp-input" tabindex="1" maxlength="30" autocomplete="off" onpaste="return false;" style="ime-mode:disabled;" placeholder="手机号"  type="text"data-rule="手机号 required;mobile;remote(post:<?php echo url('home/users/checkLoginKey'); ?>)" data-msg-mobile="请输入有效的手机号" data-msg-required="请输入手机号" data-tip="请输入手机号" data-target="#userPhone2"/></td>
		</tr>
		<?php if((WSTConf('CONF.smsOpen')==1)): ?>
		<tr>
			<td class="wst-shopapp-td">短信验证码</td>
			<td>
				<input maxlength="6" autocomplete="off" tabindex="6" class="wst_ipt2 wst-shopapp-input2" name="mobileCode" style="ime-mode:disabled" id="mobileCode" type="text" placeholder="短信验证码" />
				<button type="button"  onclick="javascript:getShopCode();" class="wst-shopapp-obtain">获取短信验证码</button>
				<span id="mobileCodeTips"></span>
			</td>
		</tr>
		<?php else: ?>
		<tr>
			<td class="wst-shopapp-td">验证码</td>
			<td>
				<div class="wst-apply-code">
				<input id="verifyCodea" style="ime-mode:disabled" name="verifyCodea"  class="wst_ipt2 wst-apply-codein" tabindex="6" autocomplete="off" maxlength="6" type="text" placeholder="验证码"/>
				<img id='verifyImga' class="wst-apply-codeim" src="" onclick='javascript:WST.getVerify("#verifyImga")' style="width:101px;border-top-right-radius:2px;border-bottom-right-radius:2px;"><span id="verifya"></span>    	
			   	</div>
			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td class="wst-shopapp-td">备注</td>
			<td>
				<textarea id="remark" name="remark" class="wst_ipt2 wst-remark" id="rejectionRemarks" autocomplete="off" style="width: 350px;height:170px;"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding-left:80px;">
				<label>
					<input id="protocol" name="protocol" type="checkbox" class="wst_ipt2" value="1"/>我已阅读并同意
	           	</label>
	           	<a href="javascript:;" style="color:#69b7b5;" id="protocolInfo" onclick="showProtocol();">《商家注册协议》</a>
			</td>
		</tr>
		<tr style="height:45px;">
			<td colspan="2" style="padding-left:165px;">
				<input id="reg_butt" class="wst-shopapp-but" type="submit" value="注册" style="width: 100px;height:30px;"/>
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
     <form method="post" id="shopVerifys" autocomplete="off" style="display:none;">
      <input type='hidden' id='VerifyId' value='' autocomplete="off"/>
      <table class='wst-table' style="width:400x;margin:15px;margin-left:35px;">
      	<tr>
			<td class="wst-shopapp-td">验证码</td>
			<td>
				<input id="smsVerfy"  name="smsVerfy"  class="wst_ipt2 wst-shopapp-input2" tabindex="6" autocomplete="off" maxlength="6" type="text" data-target="#smsVerfyTips" placeholder="验证码" data-rule="验证码: required;" data-msg-required="请输入验证码" data-tip="请输入验证码"/>
				<span id="smsVerfyTips" style="float:right;"></span>      	
			   	<label style="float:right;margin-top:5px;"><a href="javascript:WST.getVerify('#verifyImg3')">&nbsp;换一张</a></label>
				<label style="float:right;">
					<img id='verifyImg3' src="" onclick='javascript:WST.getVerify("#verifyImg3")' style="width:100px;"> 
				</label>
			</td>
		</tr>
         <tr>
           <td colspan='2' style='padding-left:170px;height:50px;'>
               <button class="wst-shopapp-but" type="submit" style="width:100px;height: 30px;">确认</button>
           </td>
         </tr>
        </table>
      </form>
<script type="text/javascript" src="__STATIC__/plugins/validator/jquery.validator.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/validator/local/zh-CN.js?v=<?php echo $v; ?>"></script>
<script type='text/javascript' src='__STYLE__/js/shop_applys.js?v=<?php echo $v; ?>'></script>
				<?php else: ?>
				<li class="j-dorpdown">
				    <div class="drop-down pdl5" >
				       <a href="<?php echo Url('home/shops/index'); ?>" rel="nofollow" target="_blank">卖家中心<i class="di-right"><s>◇</s></i></a>
				    </div>
				    <div class='j-dorpdown-layer product-list last-menu'>
					   <div><a href='<?php echo Url("home/orders/waitdelivery"); ?>' onclick='WST.position(24,1)'>待发货订单</a></div>
					   <div><a href='<?php echo Url("home/orders/waitdelivery"); ?>' onclick='WST.position(25,1)'>投诉订单</a></div>
					   <div><a href='<?php echo Url("home/home/goods/sale"); ?>' onclick='WST.position(32,1)'>商品管理</a></div>
					   <div><a href='<?php echo Url("home/shopcats/index"); ?>' onclick='WST.position(30,1)'>商品分类</a></div>
					</div>
				</li>
				<?php endif; else: ?>
				<li class="j-dorpdown">
				<div class="drop-down pdl5" ><a href="#" target="_blank">商家管理<i class="di-right"><s>◇</s></i></a></div>
				<div class='j-dorpdown-layer foucs-list'>
				   <div><a href="<?php echo url('home/shops/login'); ?>">商家登录</a></div>
				   <div><a href="javascript:shopApply();" rel="nofollow">我要开店</a></div>
				</div>
				</li>
				<link href="__STATIC__/plugins/validator/jquery.validator.css?v=<?php echo $v; ?>" rel="stylesheet">
<link href="__STYLE__/css/shopapply.css?v=<?php echo $v; ?>" rel="stylesheet">
<div id="wst-shopapp" class="wst-shopapp" style="display:none;">
	<div class="wst-shopapp-fo">
	<a href="javascript:void(0)" onclick="javascript:getClose()" class="wst-shopapp-close"></a>
	<form id="apply_form"  method="post" autocomplete="off">
	<table class="wst-table" style="margin:15px;margin-left:35px;">
		<tr>
			<td class="wst-shopapp-td">手机号</td>
			<td><input id="userPhone2" name="userPhone" class="wst_ipt2 wst-shopapp-input" tabindex="1" maxlength="30" autocomplete="off" onpaste="return false;" style="ime-mode:disabled;" placeholder="手机号"  type="text"data-rule="手机号 required;mobile;remote(post:<?php echo url('home/users/checkLoginKey'); ?>)" data-msg-mobile="请输入有效的手机号" data-msg-required="请输入手机号" data-tip="请输入手机号" data-target="#userPhone2"/></td>
		</tr>
		<?php if((WSTConf('CONF.smsOpen')==1)): ?>
		<tr>
			<td class="wst-shopapp-td">短信验证码</td>
			<td>
				<input maxlength="6" autocomplete="off" tabindex="6" class="wst_ipt2 wst-shopapp-input2" name="mobileCode" style="ime-mode:disabled" id="mobileCode" type="text" placeholder="短信验证码" />
				<button type="button"  onclick="javascript:getShopCode();" class="wst-shopapp-obtain">获取短信验证码</button>
				<span id="mobileCodeTips"></span>
			</td>
		</tr>
		<?php else: ?>
		<tr>
			<td class="wst-shopapp-td">验证码</td>
			<td>
				<div class="wst-apply-code">
				<input id="verifyCodea" style="ime-mode:disabled" name="verifyCodea"  class="wst_ipt2 wst-apply-codein" tabindex="6" autocomplete="off" maxlength="6" type="text" placeholder="验证码"/>
				<img id='verifyImga' class="wst-apply-codeim" src="" onclick='javascript:WST.getVerify("#verifyImga")' style="width:101px;border-top-right-radius:2px;border-bottom-right-radius:2px;"><span id="verifya"></span>    	
			   	</div>
			</td>
		</tr>
		<?php endif; ?>
		<tr>
			<td class="wst-shopapp-td">备注</td>
			<td>
				<textarea id="remark" name="remark" class="wst_ipt2 wst-remark" id="rejectionRemarks" autocomplete="off" style="width: 350px;height:170px;"></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding-left:80px;">
				<label>
					<input id="protocol" name="protocol" type="checkbox" class="wst_ipt2" value="1"/>我已阅读并同意
	           	</label>
	           	<a href="javascript:;" style="color:#69b7b5;" id="protocolInfo" onclick="showProtocol();">《商家注册协议》</a>
			</td>
		</tr>
		<tr style="height:45px;">
			<td colspan="2" style="padding-left:165px;">
				<input id="reg_butt" class="wst-shopapp-but" type="submit" value="注册" style="width: 100px;height:30px;"/>
			</td>
		</tr>
	</table>
	</form>
	</div>
</div>
     <form method="post" id="shopVerifys" autocomplete="off" style="display:none;">
      <input type='hidden' id='VerifyId' value='' autocomplete="off"/>
      <table class='wst-table' style="width:400x;margin:15px;margin-left:35px;">
      	<tr>
			<td class="wst-shopapp-td">验证码</td>
			<td>
				<input id="smsVerfy"  name="smsVerfy"  class="wst_ipt2 wst-shopapp-input2" tabindex="6" autocomplete="off" maxlength="6" type="text" data-target="#smsVerfyTips" placeholder="验证码" data-rule="验证码: required;" data-msg-required="请输入验证码" data-tip="请输入验证码"/>
				<span id="smsVerfyTips" style="float:right;"></span>      	
			   	<label style="float:right;margin-top:5px;"><a href="javascript:WST.getVerify('#verifyImg3')">&nbsp;换一张</a></label>
				<label style="float:right;">
					<img id='verifyImg3' src="" onclick='javascript:WST.getVerify("#verifyImg3")' style="width:100px;"> 
				</label>
			</td>
		</tr>
         <tr>
           <td colspan='2' style='padding-left:170px;height:50px;'>
               <button class="wst-shopapp-but" type="submit" style="width:100px;height: 30px;">确认</button>
           </td>
         </tr>
        </table>
      </form>
<script type="text/javascript" src="__STATIC__/plugins/validator/jquery.validator.js?v=<?php echo $v; ?>"></script>
<script type="text/javascript" src="__STATIC__/plugins/validator/local/zh-CN.js?v=<?php echo $v; ?>"></script>
<script type='text/javascript' src='__STYLE__/js/shop_applys.js?v=<?php echo $v; ?>'></script>
			<?php endif; ?>
			</li>
		</ul>
		<div class="wst-clear"></div>
  </div>
</div>
<script>
$(function(){
	//二维码
	//参数1表示图像大小，取值范围1-10；参数2表示质量，取值范围'L','M','Q','H'
	var a = qrcode(8, 'M');
	var url = window.location.host+window.conf.APP;
	a.addData(url);
	a.make();
	$('#qrcodea').html(a.createImgTag());
});
function goShop(id){
  location.href=WST.U('home/shops/home','shopId='+id);
}
</script>
<script type='text/javascript' src='__STYLE__/js/qrcode.js?v=<?php echo $v; ?>'></script>

<?php if(!isset($_COOKIE['ads_cookie'])): $wstTagAds =  model("Tags")->listAds("index-top-ads",99,86400); foreach($wstTagAds as $key=>$tads){if(($tads['adFile']!='')): ?>
<div class="index-top-ads">
  <a href="<?php echo $tads['adURL']; ?>" <?php if(($tads['isOpen'])): ?>target='_blank'<?php endif; if(($tads['adURL']!='')): ?>onclick="WST.recordClick(<?php echo $tads['adId']; ?>)"<?php endif; ?> onfocus="this.blur();">
    <img src="__ROOT__/<?php echo $tads['adFile']; ?>"></a>
  <a href="javascript:;" class="close-ads" onclick="WST.closeAds(this)"></a>
</div>
<?php endif; } endif; ?>

<link href="__STYLE__/css/location.css" rel="stylesheet">

<div class='wst-search-container'>
   <div class='wst-logo'>
   <a href='<?php echo \think\Request::instance()->root(true); ?>' title="<?php echo WSTConf('CONF.mallName'); ?>" >
      <img src="__ROOT__/<?php echo WSTConf('CONF.mallLogo'); ?>" height="120" width='240' title="<?php echo WSTConf('CONF.mallName'); ?>" alt="<?php echo WSTConf('CONF.mallName'); ?>">
   </a>
   </div>
   <div class="wst-search-box">
      <div class='wst-search'>
      	  <input type="hidden" id="search-type" value="<?php echo isset($keytype)?1:0; ?>"/>
          <ul class="j-search-box">
        	  <li class="j-search-type">
              搜<span><?php if(isset($keytype)): ?>店铺<?php else: ?>优惠<?php endif; ?></span>&nbsp;<i class="arrow"> </i>
            </li>
        	  <li class="j-type-list">
        	  	<?php if(isset($keytype)): ?>
              <div data="0">优惠</div>
              <?php else: ?>
        	  	<div data="1">店铺</div>
              <?php endif; ?>
        	  </li>


          </ul>
	      <input type="text" id='search-ipt' class='search-ipt' placeholder='<?php echo WSTConf("CONF.adsGoodsWordsSearch"); ?>' value='<?php echo isset($keyword)?$keyword:""; ?>'/>
	      <input type='hidden' id='adsGoodsWordsSearch' value='<?php echo WSTConf("CONF.adsGoodsWordsSearch"); ?>'>
	      <input type='hidden' id='adsShopWordsSearch' value='<?php echo WSTConf("CONF.adsShopWordsSearch"); ?>'>





              <!-- <div id='search-btn' class="search-btn" onclick='javascript:WST.search(this.value)'>搜索</div> -->

      </div>
      <div class="wst-search-keys">
      <?php $searchKeys = WSTSearchKeys(); if(is_array($searchKeys) || $searchKeys instanceof \think\Collection): $i = 0; $__LIST__ = $searchKeys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
       <a href='<?php echo Url("home/goods/search","keyword=".$vo); ?>'><?php echo $vo; ?></a>
       <?php if($i< count($searchKeys)): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </div>
   </div>


   <script language="javascript">
function showPic(){
document.getElementById("locationImg").src = "__ROOT__/wstmart/home/view/default/img/location-hover.png"
document.getElementById("locationImg").style.opacity = "1";
}
function hiddenPic(){
document.getElementById("locationImg").src = "__ROOT__/wstmart/home/view/default/img/location.png"
document.getElementById("locationImg").style.opacity = "0.5";
}
</script>

<div class="wst-search-location">
<div class="j-search-location">
  <img id="locationImg" src="__ROOT__/wstmart/home/view/default/img/location.png" width="20px" style="margin-top:0px;margin-left:-10px; opacity:0.5"/>
<input type="text" id='search-location' class='search-location' onmouseout="hiddenPic();" onmousemove="showPic();" placeholder='Sydney' value='<?php echo isset($keyword)?$keyword:""; ?>'></input>
</div>
<div id='search-btn' class="search-btn" onclick='javascript:WST.search(this.value)'>搜索</div>
</div>


   <!-- <div class="wst-cart-box">
   <a href="<?php echo url('home/carts/index'); ?>" target="_blank"><span class="word j-word">共 <span class="num" id="goodsTotalNum">0</span> 件商品</span></a>
   	<div class="wst-cart-boxs hide">
   		<div id="list-carts"></div>
   		<div id="list-carts2"></div>
   		<div id="list-carts3"></div>
	   	<div class="wst-clear"></div>
   	</div>
   </div> -->

<script id="list-cart" type="text/html">
{{# for(var i = 0; i < d.list.length; i++){ }}
	<div class="goods" id="j-goods{{ d.list[i].cartId }}">
	   	<div class="imgs"><a href="__ROOT__/home/goods/detail/id/{{d.list[i].goodsId }}"><img class="goodsImgc" data-original="__ROOT__/{{ d.list[i].goodsImg }}" title="{{ d.list[i].goodsName }}"></a></div>
	   	<div class="number"><p><a  href="__ROOT__/home/goods/detail/id/{{d.list[i].goodsId }}">{{WST.cutStr(d.list[i].goodsName,26)}}</a></p><p>数量：{{ d.list[i].cartNum }}</p></div>
	   	<div class="price"><p>${{ d.list[i].shopPrice }}</p><span><a href="javascript:WST.delCheckCart({{ d.list[i].cartId }})">删除</a></span></div>
	</div>
{{# } }}
</script>
</div>
<div class="wst-clear"></div>

<!-- <div class="wst-nav-menus">
   <div class="nav-w" style="position: relative;">
      <div class="w-spacer"></div>
      <div class="dorpdown <?php if(isset($hideCategory)): ?>j-index<?php endif; ?>" id="wst-categorys">
         <div class="dt j-cate-dt">
             <a href="<?php echo Url('home/goods/lists'); ?>" target="_blank">全部商品分类</a>
         </div>
         <div class="dd j-cate-dd" <?php if(!isset($hideCategory)): ?>style="display:none" <?php endif; ?>>
            <div class="dd-inner">
                 <?php $_result=WSTSideCategorys();if(is_array($_result) || $_result instanceof \think\Collection): $k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                 <div id="cat-icon-<?php echo $k; ?>" class="item fore1 <?php if(($key>=12)): ?>over-cat<?php endif; ?>">
                     <h3>
                      <div class="<?php if(($key>=12)): ?> over-cat-icon <?php else: ?> cat-icon-<?php echo $k; endif; ?>"></div>
                      <a href="<?php echo Url('home/goods/lists','cat='.$vo['catId']); ?>" target="_blank"><?php echo $vo['catName']; ?></a>
                     </h3>
                     <i>&gt;</i>
                 </div>
                 <?php endforeach; endif; else: echo "" ;endif; ?>
             </div>
             <div style="display: none;" class="dorpdown-layer" id="index_menus_sub">
                 <?php $_result=WSTSideCategorys();if(is_array($_result) || $_result instanceof \think\Collection): $k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                  <div class="item-sub" i="<?php echo $k; ?>">
                      <div class="item-brands">
                           <div class="brands-inner">
                            <?php $wstTagBrand =  model("Tags")->listBrand($vo['catId'],16,86400); foreach($wstTagBrand as $key=>$bvo){?>
                              <a target="_blank" class="img-link" href="<?php echo url('home/goods/lists',['cat'=>$bvo['catId'],'brand'=>$bvo['brandId']]); ?>">
                                  <img width="83" height="35" class='goodsImg' data-original="__ROOT__/<?php echo $bvo['brandImg']; ?>">
                              </a>
                            <?php } $wstTagShop =  model("Tags")->listShop($vo['catId'],16,86400); foreach($wstTagShop as $key=>$bvo){?>
                              <a target="_blank" class="img-link" href="<?php echo url('home/goods/lists',['cat'=>$bvo['catId'],'brand'=>$bvo['shopId']]); ?>">
                                  <img width="83" height="35" class='goodsImg' data-original="__ROOT__/<?php echo $bvo['shopImg']; ?>">
                              </a>
                            <?php } ?>
                            </div>

                       </div>

                       <div class="subitems">
                          <?php if(isset($vo['list'])){ if(is_array($vo['list']) || $vo['list'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i;?>
                           <dl class="fore2">
                               <dt >
                                  <a target="_blank" href="<?php echo Url('home/goods/lists','cat='.$vo2['catId']); ?>"><?php echo $vo2['catName']; ?><i>&gt;</i></a>
                               </dt>
                               <dd>
                                  <?php if(isset($vo2['list'])){ if(is_array($vo2['list']) || $vo2['list'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo2['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo3): $mod = ($i % 2 );++$i;?>
                                  <a target="_blank" href="<?php echo Url('home/goods/lists','cat='.$vo3['catId']); ?>"><?php echo $vo3['catName']; ?></a>
                                  <?php endforeach; endif; else: echo "" ;endif; } ?>
                               </dd>
                            </dl>
                           <?php endforeach; endif; else: echo "" ;endif; } ?>
                        </div>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
             </div>
        </div>
      </div>
      
      <div id="wst-nav-items">
           <ul>
               <?php $_result=WSTNavigations(0);if(is_array($_result) || $_result instanceof \think\Collection): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
               <li class="fore1">
                    <a href="<?php echo $vo['navUrl']; ?>" <?php if($vo['isOpen']==1): ?>target="_blank"<?php endif; ?>><?php echo $vo['navTitle']; ?></a>
               </li>
               <?php endforeach; endif; else: echo "" ;endif; $_result=WSTNavigations(0);if(is_array($_result) || $_result instanceof \think\Collection): $l = 0;$__LIST__ = is_array($_result) ? array_slice($_result,0,4, true) : $_result->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($l % 2 );++$l;?>
               <li class="fore1">
                    <a href="#c<?php echo $l-1; ?>"><?php echo $vo['navTitle']; ?></a>
               </li>
               <?php endforeach; endif; else: echo "" ;endif; ?>


           </ul>
      </div>

      <div class='wst-right-panel' <?php if(!isset($hideCategory)): ?>style="display:none" <?php endif; ?>>
        <div class="index-user-tab">
          <div id="wst-right-photo">
  		  	 <a href="<?php echo url('home/users/index'); ?>"><img class="usersImg" data-original="__ROOT__/<?php echo session('WST_USER.userPhoto'); ?>"/></a>
          </div>
          <div id="wst-right-join">
          <?php if((session('WST_USER.userId'))): ?>
            <p>Hello,<?php echo session('WST_USER.userName')?session('WST_USER.userName'):session('WST_USER.loginName'); ?></p>
            <p>欢迎来到<?php echo WSTMSubstr(WSTConf('CONF.mallName'),0,13); ?></p>
          <?php else: ?>
            <p>&nbsp;</p>
            <p><?php if((!session('WST_USER.userId'))): ?>Hello,欢迎您来到<?php echo WSTMSubstr(WSTConf('CONF.mallName'),0,10); endif; ?></p>

            <div class="visitor-login">
            <a href="<?php echo Url('home/users/login'); ?>" style="border-right:1px solid #ccc;"><div class="wst-right-pic"><img src="__STYLE__/img/icon_login.png" /></div>
              <p class="wst-right-text">登录</p>
            </a>
            <a href="<?php echo Url('home/users/regist'); ?>"><div class="wst-right-pic"><img src="__STYLE__/img/icon_register.png" /></div>
              <p class="wst-right-text">注册</p>
            </a>
            <div class="wst-clear"></div>
            </div>

          <?php endif; ?>
          </div>
        </div>
        <div class="wst-clear"></div>

        <div id="wst-right-news" style="">
          <p>最新资讯</p>
          <a href="<?php echo url('home/news/view'); ?>">更多</a>
        </div>

        <ul id="wst-right-new-list"<?php if((!session('WST_USER.userId'))): ?>class="visitor-new-list"<?php endif; ?>  >
          <?php $wstTagArticle =  model("Tags")->listArticle("new",8,86400); foreach($wstTagArticle as $key=>$vo){?>
          <li><a href="<?php echo url('home/news/view',['id'=>$vo['articleId']]); ?>"><img src="__STYLE__/img/icon_zixun.png" alt="喇叭"><?php echo $vo['articleTitle']; ?></a></li>
          <?php } ?>
        </ul>
        <div id="wst-right-ads">
          <?php $wstTagAds =  model("Tags")->listAds("index-art-bottom",1,86400); foreach($wstTagAds as $key=>$vo){?>
          <a <?php if(($vo['isOpen'])): ?>target='_blank'<?php endif; if(($vo['adURL']!='')): ?>onclick="WST.recordClick(<?php echo $vo['adId']; ?>)"<?php endif; ?> href="<?php echo $vo['adURL']; ?>" onfocus="this.blur()">
            <img data-original="__ROOT__/<?php echo $vo['adFile']; ?>" class="goodsImg" />
          </a>
          <?php } ?>
        </div>
      </div>

      <span class="wst-clear">

      </span>

    </div>
</div> -->
<div class="wst-clear"></div>




<div class='wst-hot-sales'>
   <div class='wst-sales-logo'>
   		&nbsp;<span class="wst-hot-icon">热卖推荐</span>
   </div>
   <ul class='wst-sales-box'>
     <?php $wstTagGoods =  model("Tags")->listGoods("recom",0,4,0); foreach($wstTagGoods as $key=>$vo){?>
      <li class="item">
     	<div class="img"><a target='_blank' href='<?php echo Url("home/goods/detail","id=".$vo["goodsId"]); ?>'><img class='goodsImg' data-original="__ROOT__/<?php echo WSTImg($vo['goodsImg']); ?>" title="<?php echo $vo['goodsName']; ?>" alt="<?php echo $vo['goodsName']; ?>" /></a></div>
     	<div class="des">
     		<!-- <div class="p-sale">已售<?php echo $vo['saleNum']; ?>件</div> -->
     		<div class="p-name"><a target='_blank' href='<?php echo Url("home/goods/detail","id=".$vo["goodsId"]); ?>'><?php echo $vo['goodsName']; ?></a></div>
     		<div class="p-price">$<?php echo $vo['shopPrice']; ?></div>
     		<!-- <div class="p-buy"><a href="javascript:WST.addCart(<?php echo $vo['goodsId']; ?>)">加入购物车</a></div> -->
     	</div>
      </li>
     <?php } ?>
   </ul>
</div>
<input type="hidden" id="keyword" class="sipt" value='<?php echo $keyword; ?>'/>
<input type="hidden" id="orderBy" class="sipt" value='<?php echo $orderBy; ?>'/>
<input type="hidden" id="order" class="sipt" value='<?php echo $order; ?>'/>
<input type="hidden" id="areaId" class="sipt" value='<?php echo $areaId; ?>'/>
<div class='wst-filters'>
   <div class='item' style="border-left:2px solid #4a566c;padding-left: 8px;">
      <a class='link' href='__ROOT__'>全部结果</a>
      <i class="arrow">></i>
   </div>
   <div class='wst-lfloat keyword'><?php echo $keyword; ?></div>
   <div class='wst-clear'></div>
</div>

<div class="wst-container">
   <?php if(!empty($goodsPage["Rows"])): ?>
	<div class='goods-side'>
		<div class="guess-like">
		    <div class="title">猜你喜欢</div>
			<?php $wstTagGoods =  model("Tags")->listGoods("best",0,3,0); foreach($wstTagGoods as $key=>$vo){?>
			<div class="item">
				<div class="img"><a target='_blank' href="<?php echo Url('home/goods/detail','id='.$vo['goodsId']); ?>"><img class='goodsImg' data-original="__ROOT__/<?php echo WSTImg($vo['goodsImg']); ?>" alt="<?php echo $vo['goodsName']; ?>" title="<?php echo $vo['goodsName']; ?>"/></a></div>
				<div class="p-name"><a class="wst-hide wst-redlink"><?php echo $vo['goodsName']; ?></a></div>
				<div class="p-price">$<?php echo $vo['shopPrice']; ?><span class="v-price">$<?php echo $vo['marketPrice']; ?></span></div>
			</div>
			<?php } ?>
		</div>
		<div class="hot-goods">
			<div class="title">轮胎商品</div>
			<?php $wstTagGoods =  model("Tags")->listGoods("hot",0,3,0); foreach($wstTagGoods as $key=>$vo){?>
			<div class="item">
				<div class="img"><a target='_blank' href="<?php echo Url('home/goods/detail','id='.$vo['goodsId']); ?>"><img class='goodsImg' data-original="__ROOT__/<?php echo WSTImg($vo['goodsImg']); ?>" alt="<?php echo $vo['goodsName']; ?>" title="<?php echo $vo['goodsName']; ?>"/></a></div>
				<div class="p-name"><a class="wst-hide wst-redlink"><?php echo $vo['goodsName']; ?></a></div>
				<div class="p-price">$<?php echo $vo['shopPrice']; ?><span class="v-price">$<?php echo $vo['marketPrice']; ?></span></div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class='goods-main'>
	   <div class='goods-filters'>
	   	  <div class='line'>
	   	  <div class='wst-lfloat chk'>发货地</div>
	        <div class='city wst-address'>
		    <div class='item dorpdown'>
		     <div class='drop-down'>
		        <a class='link' href='__ROOT__'>
		        	<?php if(empty($areaInfo['areaName'])): ?>
		        	请选择
		        	<?php else: ?>
		        		<?php echo $areaInfo['areaName']; endif; ?>
		        </a>
		        <i class="drop-down-arrow"></i>
		     </div>
		     <div class="dorp-down-layer">
		     	<div class="tab-header">
		     	 <ul class="tab">
		     	 	<li class="tab-item1" id="fl_1_1" onclick="gpanelOver(this);" c="1" >
		     	 		<?php if(isset($areaInfo)): ?>
		     	 		<a href='javascript:void(0)'><?php echo $areaInfo[0]['areaName']; ?></a>
		     	 		<?php else: ?>
		     	 		<a href='javascript:void(0)'>请选择</a>
		     	 		<?php endif; ?>
		     	 	</li>

		     	 	<?php if(isset($areaInfo)): ?>
		     	 	<li class="tab-item1" id="fl_1_2" onclick="gpanelOver(this);" c="1" >
						<a href="javascript:void(0)"><?php echo $areaInfo[1]['areaName']; ?></a>
					</li>
					<li class="tab-item1 j-tab-selected1" id="fl_1_3" onclick="gpanelOver(this);" c="1" >
						<a href="javascript:void(0)"><?php echo $areaInfo[2]['areaName']; ?></a>
					</li>
					<?php else: ?>
					<li class="tab-item1" id="fl_1_2" onclick="gpanelOver(this);" c="1" pid="" >
						<a href="javascript:void(0)">请选择</a>
					</li>
					<li class="tab-item1 j-tab-selected1" id="fl_1_3" onclick="gpanelOver(this);" c="1" pid="" >
						<a href="javascript:void(0)">请选择</a>
					</li>
					<?php endif; ?>



		     	 </ul>
		     	</div>
		     	 <ul class="area-box" id="fl_1_1_pl" style="display:none;">
		     	 	<?php if(is_array($area1) || $area1 instanceof \think\Collection): $i = 0; $__LIST__ = $area1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$area1): $mod = ($i % 2 );++$i;?>
					<li onclick="choiceArea(this,<?php echo $area1['areaId']; ?>)" search='1'><a href="javascript:void(0)"><?php echo $area1['areaName']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul class="area-box" id="fl_1_2_pl" style="display:none;">
					<?php if(is_array($area2) || $area2 instanceof \think\Collection): $i = 0; $__LIST__ = $area2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$area2): $mod = ($i % 2 );++$i;?>
					<li onclick="choiceArea(this,<?php echo $area2['areaId']; ?>)" search='1'><a href="javascript:void(0)"><?php echo $area2['areaName']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>

				<ul class="area-box" id="fl_1_3_pl">
					<?php if(is_array($area3) || $area3 instanceof \think\Collection): $i = 0; $__LIST__ = $area3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$area3): $mod = ($i % 2 );++$i;?>
					<li onclick="choiceArea(this,<?php echo $area3['areaId']; ?>)" search='1'><a href="javascript:void(0)"><?php echo $area3['areaName']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>

			</div>


			</div>
			</div>
	        <div class='chk'>
			 <div class="checkbox-box-s">
		     <input name='isStock' value='1' class="sipt wst-checkbox-s" onclick="searchFilter(this,4)" type='checkbox' id="stock" <?php if($isStock==1): ?>checked<?php endif; ?>/>
		     <label for="stock"></label>
		     </div>
	                  仅显示有货</div>
	        <div class='chk'>
	         <div class="checkbox-box-s">
		     <input name='isNew' value='1' class="sipt wst-checkbox-s" onclick="searchFilter(this,4)" type='checkbox' id="new" <?php if($isNew==1): ?>checked<?php endif; ?>/>
		     <label for="new"></label>
		     </div>
	                  新品</div>
	      </div>
	      <div class='line line2'>
	        <a class="<?php if($orderBy == 0): ?>curr <?php endif; ?>" href='javascript:void(0)' onclick='javascript:searchOrder(0)'>销量<span class="<?php if($orderBy != 0): ?>store<?php endif; if($orderBy == 0 and $order == 1): ?>store2<?php endif; if($orderBy == 0 and $order == 0): ?>store3<?php endif; ?>"></span></a>
	        <a class="<?php echo !empty($orderBy) && $orderBy==1?'curr':''; ?>" href='javascript:void(0)' onclick='javascript:searchOrder(1)'>价格<span class="<?php if($orderBy != 1): ?>store<?php endif; if($orderBy == 1 and $order == 1): ?>store2<?php endif; if($orderBy == 1 and $order == 0): ?>store3<?php endif; ?>"></span></a>
	        <a class="<?php echo !empty($orderBy) && $orderBy==2?'curr':''; ?>" href='javascript:void(0)' onclick='javascript:searchOrder(2)'>评论数<span class="<?php if($orderBy != 2): ?>store<?php endif; if($orderBy == 2 and $order == 1): ?>store2<?php endif; if($orderBy == 2 and $order == 0): ?>store3<?php endif; ?>"></span></a>
	        <a class="<?php echo !empty($orderBy) && $orderBy==3?'curr':''; ?>" href='javascript:void(0)' onclick='javascript:searchOrder(3)'>人气<span class="<?php if($orderBy != 3): ?>store<?php endif; if($orderBy == 3 and $order == 1): ?>store2<?php endif; if($orderBy == 3 and $order == 0): ?>store3<?php endif; ?>"></span></a>
	        <a class="<?php echo !empty($orderBy) && $orderBy==4?'curr':''; ?>" href='javascript:void(0)' onclick='javascript:searchOrder(4)'>上架时间<span class="<?php if($orderBy != 4): ?>store<?php endif; if($orderBy == 4 and $order == 1): ?>store2<?php endif; if($orderBy == 4 and $order == 0): ?>store3<?php endif; ?>"></span></a>
        	<div class="wst-price-ipts">
			<span class="wst-price-ipt1">$</span><span class="wst-price-ipt2">$</span>
			<input type="text" class="sipt wst-price-ipt" id="sprice" value="<?php echo $sprice; ?>" style="margin-left:8px;" onkeypress='return WST.isNumberdoteKey(event);' onkeyup="javascript:WST.isChinese(this,1)">
			- <input type="text" class="sipt wst-price-ipt" id="eprice" value="<?php echo $eprice; ?>" onkeypress='return WST.isNumberKey(event);' onkeyup="javascript:WST.isChinese(this,1)">
			</div>
			<button class="wst-price-but" type="submit" style="width:60px;height: 25px;" onclick='javascript:searchOrder()'>确定</button>
	      </div>
	   </div>
	   <div class="goods-list">
	      <?php if(is_array($goodsPage["Rows"]) || $goodsPage["Rows"] instanceof \think\Collection): $i = 0; $__LIST__ = $goodsPage["Rows"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	      <div class="goods">
	      	<div class="img"><a target='_blank' href="<?php echo Url('home/goods/detail','id='.$vo['goodsId']); ?>"><img title="<?php echo $vo['goodsName']; ?>" alt="<?php echo $vo['goodsName']; ?>" class='goodsImg2' data-original="__ROOT__/<?php echo WSTImg($vo['goodsImg']); ?>"/></a></div>
	      	<div class="p-name"><a target='_blank' href="<?php echo Url('home/goods/detail','id='.$vo['goodsId']); ?>" class="wst-redlink" title="<?php echo $vo['goodsName']; ?>"><?php echo $vo['goodsName']; ?></a></div>
	      	<div>
	      		<div class="p-price">$<?php echo $vo['shopPrice']; ?></div>
	      		<div class="p-hsale">
	      			<!-- <div class="sale-num">成交数：<span class="wst-fred"><?php echo $vo['saleNum']; ?></span></div> -->
		      		<!-- <a class="p-add-cart" style="display:none;" href="javascript:WST.addCart(<?php echo $vo['goodsId']; ?>);">加入购物车</a> -->
	      		</div>
	      		<div class='wst-clear'></div>
	      	</div>
	      	<div>
	      		<div class="p-mprice">市场价<span>$<?php echo $vo['marketPrice']; ?></span></div>
	      		<div class="p-appraise">已有<span class="wst-fred"><?php echo $vo['appraiseNum']; ?></span>人评价</div>
	      		<div class='wst-clear'></div>
	      	</div>
	      	<div class="p-shop"><a href="<?php echo Url('home/shops/home','shopId='.$vo['shopId']); ?>" target='_blank' class="wst-redlink"><?php echo $vo['shopName']; ?></a></div>
	      </div>

	      <?php endforeach; endif; else: echo "" ;endif; ?>
	     <div class='wst-clear'></div>
	   	</div>
	   	<div style="width:980px;">
	  		<div id="wst-pager"></div>
		</div>

	</div>
	<div class='wst-clear'></div>
	<?php else: ?>
	<div class="wst-no-goods">很抱歉，没有找到“<span><?php echo $keyword; ?></span>”为关键字的商品搜索结果。</div>
	
	<div class="wst-recommend">
		<div class="title">为您推荐<span style="float: right;"></span></div>
		<div class="tgoods-list">
	      <?php $wstTagGoods =  model("Tags")->listGoods("best",0,5,0); foreach($wstTagGoods as $key=>$rvo){?>
	      <div class="goods">
	      	<div class="img"><a target='_blank' href="<?php echo Url('home/goods/detail','id='.$rvo['goodsId']); ?>"><img title="<?php echo $rvo['goodsName']; ?>" alt="<?php echo $rvo['goodsName']; ?>" class='goodsImg' data-original="__ROOT__/<?php echo $rvo['goodsImg']; ?>"/></a></div>
	      	<div class="p-name"><a target='_blank' class="wst-redlink"><?php echo $rvo['goodsName']; ?></a></div>
	      	<div>
	      		<div class="p-price">$<?php echo $rvo['shopPrice']; ?></div>
	      		<div class="p-hsale">
	      			<!-- <div class="sale-num">成交数：<span class="wst-fred"><?php echo $rvo['saleNum']; ?></span></div> -->
		      		<!-- <a class="p-add-cart" style="display:none;" href="javascript:WST.addCart(<?php echo $rvo['goodsId']; ?>);">加入购物车</a> -->
	      		</div>
	      		<div class='wst-clear'></div>
	      	</div>
	      	<div>
	      		<div class="p-mprice">市场价<span>$<?php echo $rvo['marketPrice']; ?></span></div>
	      		<div class="p-appraise">已有<span class="wst-fred"><?php echo $rvo['appraiseNum']; ?></span>人评价</div>
	      		<div class='wst-clear'></div>
	      	</div>
	      	<div class="p-shop"><a href="" class="wst-redlink"><?php echo $rvo['shopName']; ?></a></div>
	      </div>
	      <?php } ?>
	     <div class='wst-clear'></div>
	   	</div>
	</div>
	<?php endif; if(cookie("history_goods")!=''): ?>
	<div class="wst-gview">
		<div class="title">您最近浏览的商品</div>
		<div class="view-goods">
	       <?php $wstTagGoods =  model("Tags")->listGoods("history",0,7,0); foreach($wstTagGoods as $key=>$vo){?>
			<div class="item">
				<div class="img"><a target='_blank' href="<?php echo Url('home/goods/detail','id='.$vo['goodsId']); ?>"><img class='goodsImg' data-original="__ROOT__/<?php echo WSTImg($vo['goodsImg']); ?>" alt="<?php echo $vo['goodsName']; ?>" title="<?php echo $vo['goodsName']; ?>"/></a></div>
				<div class="p-name"><a class="wst-hide wst-redlink" href="<?php echo Url('home/goods/detail','id='.$vo['goodsId']); ?>"><?php echo $vo['goodsName']; ?></a></div>
				<div class="p-price">$<?php echo $vo['shopPrice']; ?><span class="v-price">$<?php echo $vo['marketPrice']; ?></span></div>
			</div>
	       <?php } ?>
	     	<div class='wst-clear'></div>
	   	</div>
	</div>
	<?php endif; ?>
</div>
<!-- <link href="__STYLE__/css/right_cart.css?v=<?php echo $v; ?>" rel="stylesheet">
<div class="j-global-toolbar">
	<div class="toolbar-wrap j-wrap">
		<div class="toolbar">
			<div class="toolbar-panels j-panel">
				<div style="visibility: hidden;" class="j-content toolbar-panel tbar-panel-cart toolbar-animate-out">
					<h3 class="tbar-panel-header j-panel-header">
						<a href="" class="title"><i></i><em class="title">购物车</em></a>
						<span class="close-panel j-close" title='关闭'></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content j-panel-content">
						    <?php if(session('WST_USER.userId') == 0): ?>
							<div id="j-cart-tips" class="tbar-tipbox hide">
								<div class="tip-inner">
									<span class="tip-text">还没有登录，登录后商品将被保存</span>
									<a href="#none" onclick='WST.loginWindow()' class="tip-btn j-login">登录</a>
								</div>
							</div>
							<?php endif; ?>
							<div id="j-cart-render">
								<div id='cart-panel' class="tbar-cart-list"></div>
								  <script id="list-rightcart" type="text/html">
								  {{#
                                    var shop,goods,specs;
                                    for(var key in d){
                                        shop = d[key];
					                    for(var i=0;i<shop.list.length;i++){
                                           goods = shop.list[i];
						                   goods.goodsImg = WST.conf.ROOT+"/"+goods.goodsImg.replace('.','_thumb.');
						                   specs = '';
						                   if(goods.specNames && goods.specNames.length>0){
							                  for(var j=0;j<goods.specNames.length;j++){
								                 specs += goods.specNames[j].itemName+ " ";
							                  }
						                   }
                                   }}
								   <div class="tbar-cart-item" id="shop-cart-{{shop.shopId}}">
							          <div class="jtc-item-promo">
							            <div class="promo-text">{{shop.shopName}}</div>
							          </div>
								      <div class="jtc-item-goods j-goods-item-{{goods.cartId}}" dataval="{{goods.cartId}}">
								          <div class='wst-lfloat'>
			                                 <input type='checkbox' id='rcart_{{goods.cartId}}' class='rchk' onclick='javascript:checkRightChks({{goods.cartId}},this);' {{# if(goods.isCheck==1){}}checked{{# } }}/></div>
									      <span class="p-img"><a target="_blank" href="{{WST.U('home/goods/detail','id='+goods.goodsId)}}" target="_blank"><img src="{{goods.goodsImg}}" title="{{goods.goodsName}}" height="50" width="50"></a></span>
									      <div class="p-name">
									          <a target="_blank" title="{{(goods.goodsName+((specs!='')?"【"+specs+"】":""))}}" href="{{WST.U('home/goods/detail','id='+goods.goodsId)}}">{{WST.cutStr(goods.goodsName,22)}}<br/>{{specs}}</a>
									      </div>
									      <div class="p-price">
									          <strong>¥<span id='gprice_{{goods.cartId}}'>{{goods.shopPrice}}</span></strong>
									          <div class="wst-rfloat">
									             <a href="#none" class="buy-btn" id="buy-reduce_{{goods.cartId}}" onclick="javascript:WST.changeIptNum(-1,'#buyNum','#buy-reduce,#buy-add','{{goods.cartId}}','statRightCartMoney')">-</a>
									             <input type="text" id="buyNum_{{goods.cartId}}" class="right-cart-buy-num" value="{{goods.cartNum}}" data-max="{{goods.goodsStock}}" data-min="1" onkeyup="WST.changeIptNum(0,'#buyNum','#buy-reduce,#buy-add',{{goods.cartId}},'statRightCartMoney')" autocomplete="off"  onkeypress="return WST.isNumberKey(event);" maxlength="6"/>
									             <a href="#none" class="buy-btn" id="buy-add_{{goods.cartId}}" onclick="javascript:WST.changeIptNum(1,'#buyNum','#buy-reduce,#buy-add','{{goods.cartId}}','statRightCartMoney')">+</a>
									          </div>
									     </div>
									      <span onclick="javascript:delRightCart(this,{{goods.cartId}});" dataid="{{shop.shopId}}|{{goods.cartId}}" class="goods-remove" title="删除"></span>
									 </div>
								 </div>
								 {{# } } }}
                                 </script>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer j-panel-footer">
						<div class="tbar-checkout">
							<div class="jtc-number">已选<strong id="j-goods-count">0</strong>件商品 </div>
							<div class="jtc-sum"> 共计：¥<strong id="j-goods-total-money">0</strong> </div>
							<a class="jtc-btn j-btn" href="#none" onclick='javascript:jumpSettlement()'>去结算</a>
						</div>
					</div>
				</div>

				<div style="visibility: hidden;" data-name="follow" class="j-content toolbar-panel tbar-panel-follow">
					<h3 class="tbar-panel-header j-panel-header">
						<a href="#" target="_blank" class="title"> <i></i> <em class="title">我的关注</em> </a>
						<span class="close-panel j-close" title='关闭'></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content j-panel-content">
							<div class="tbar-tipbox2">
								<div class="tip-inner"> <i class="i-loading"></i> </div>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer j-panel-footer"></div>
				</div>

				<div style="visibility: hidden;" class="j-content toolbar-panel tbar-panel-history toolbar-animate-in">
					<h3 class="tbar-panel-header j-panel-header">
						<a href="#none" class="title"> <i></i> <em class="title">我的足迹</em> </a>
						<span class="close-panel j-close" title='关闭'></span>
					</h3>
					<div class="tbar-panel-main">
						<div class="tbar-panel-content j-panel-content">
							<div class="jt-history-wrap">
								<ul id='history-goods-panel'></ul>
								<script id="list-history-goods" type="text/html">
								{{#
                                 for(var i = 0; i < d.length; i++){
                                  d[i].goodsImg = WST.conf.ROOT+"/"+d[i].goodsImg.replace('.','_thumb.');
                                 }}
								   <li class="jth-item">
										<a target='_blank' href="{{WST.U('home/goods/detail','id='+d[i].goodsId)}}" class="img-wrap"><img src="{{d[i].goodsImg}}" height="100" width="100"> </a>
										<a class="add-cart-button" href="javascript:WST.addCart({{d[i].goodsId}});">加入购物车</a>
										<a href="#none" class="price">${{d[i].shopPrice}}</a>
									</li>
								{{# } }}
                                </script>
							</div>
						</div>
					</div>
					<div class="tbar-panel-footer j-panel-footer"></div>
				</div>
			</div>

			<div class="toolbar-header"></div>

			<div class="toolbar-tabs j-tab">
				<div class="toolbar-tab tbar-tab-cart">
					<i class="tab-ico"></i>
					<em class="tab-text">购物车</em>
					<span class="tab-sub j-cart-count hide"></span>
				</div>
				<div class="toolbar-tab tbar-tab-follow" style='display:none'>
					<i class="tab-ico"></i>
					<em class="tab-text">我的关注</em>
					<span class="tab-sub j-count hide">0</span>
				</div>
				<div class=" toolbar-tab tbar-tab-history ">
					<i class="tab-ico"></i>
					<em class="tab-text">我的足迹</em>
					<span class="tab-sub j-count hide"></span>
				</div>
				<div class="toolbar-tab tbar-tab-message">
				  <a target='_blank' href='<?php echo Url("home/messages/index"); ?>' onclick='WST.position(49,0)'>
					<i class="tab-ico"></i>
					<em class="tab-text">我的消息</em>
					<span class="tab-sub j-message-count hide"></span>
				  </a>
				</div>
			</div>

			<div class="toolbar-footer">
				<div class="toolbar-tab tbar-tab-top"> <a href="#"> <i class="tab-ico  "></i> <em class="footer-tab-text">顶部</em> </a> </div>
				<div class=" toolbar-tab tbar-tab-feedback"  style='display:none'> <a href="#" target="_blank"> <i class="tab-ico"></i> <em class="footer-tab-text ">反馈</em> </a> </div>
			</div>
			<div class="toolbar-mini"></div>
		</div>
		<div id="j-toolbar-load-hook"></div>
	</div>
</div>
<script type='text/javascript' src='__STYLE__/js/right_cart.js?v=<?php echo $v; ?>'></script> -->



	<link href="__STYLE__/css/footer.css" rel="stylesheet">
<!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File            BUG  -->
  <link href="__STYLE__/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">




  <!-- Libraries CSS Files -->
  <link href="__STYLE__/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<div style="border-top: 1px solid #fff;padding-bottom:25px;margin-top:35px;min-width:1200px;"></div>
<div class="wst-footer-flink">
	<div class="wst-footer" >




	</div>
</div>

<!--==========================
		Footer
	============================-->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 footer-info">
						<h3>XX养车网</h3>
						<p></br>创立于悉尼，XX养车是深受欢迎的汽车养护优惠信息平台，我们希望客户，养车找XX，一点不辛苦！
						</p>
					</div>

					<div class="col-lg-3 col-md-6 footer-links">
						<h4>相关链接</h4>
						<ul>
							<li><i class="ion-ios-arrow-right"></i> <a href="home">首页</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">我们的团队</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">F&Q</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">关于我们</a></li>
							<li><i class="ion-ios-arrow-right"></i> <a href="#">友情链接</a></li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-6 footer-contact">
						<h4>联系我们</h4>
						<p><strong>地址：</strong>
							Suite 1506 <br>
							Level 15, 323 Castlereagh St<br>
							Sydney NSW 2000 <br>
							<strong>电话：</strong> (02) 8373 5326<br>
							<strong>邮箱：</strong> info.sydney@juriscorlegal.com.au<br>
						</p>

						<div class="social-links">
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
							<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
						</div>

					</div>

					<div class="col-lg-3 col-md-6 footer-newsletter">
						<h4>订阅服务</h4>
						<p>订阅 XX养车网 新闻邮件，了解更多汽车养护优惠资讯。
						</p>
						<form action="" method="post">
							<input type="email" name="email"><input type="submit"  value="Subscribe">
						</form>
					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong>Juris Cor Legal 2018</strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!--
					All the links in the footer should remain intact.
					You can delete the links only if you purchased the pro version.
					Licensing information: https://bootstrapmade.com/license/
					Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
				-->
				悉尼XX养车网，澳大利亚最专业的汽车养护信息平台
			</div>
		</div>
	</footer><!-- #footer -->



	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>



<script type='text/javascript' src='__STYLE__/js/goodslist.js?v=<?php echo $v; ?>'></script>
<?php if(!empty($goodsPage["Rows"])): ?>
<script type='text/javascript'>
$(function(){
	<?php if(!isset($areaInfo)): ?>
	$('#fl_1_1').click();
	<?php endif; ?>
});
laypage({
    cont: 'wst-pager',
    pages: <?php echo $goodsPage["TotalPage"]; ?>, //总页数
    skip: true, //是否开启跳页
    skin: '#3b4e56',
    groups: 3, //连续显示分页数
    curr: function(){ //通过url获取当前页，也可以同上（pages）方式获取
        var page = location.search.match(/page=(\d+)/);
        return page ? page[1] : 1;
    }(),
    jump: function(e, first){ //触发分页后的回调
        if(!first){ //一定要加此判断，否则初始时会无限刷新
        	var nuewurl = WST.splitURL("page");
        	var ulist = nuewurl.split("?");
        	if(ulist.length>1){
        		location.href = nuewurl+'&page='+e.curr;
        	}else{
        		location.href = '?page='+e.curr;
        	}

        }
    }
});
</script>
<?php endif; ?>

</body>
</html>
