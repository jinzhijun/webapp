<?php if (!defined('THINK_PATH')) exit();?><html>
<HEAD>
<TITLE>
挂号管理
</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/Public/css/login.css" />
<script type="text/javascript" src="__PUBLIC__/js/Jquery/jquery.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/checkLogin.js"></script> 

<META name=GENERATOR content="MSHTML 8.00.6001.19258">
</HEAD>
<BODY id=login>
<FORM id=loginForm  action="<?php echo u('Admin/Login/loginchk','','');?>" method="post">
<H3>博源医疗网上挂号系统</H3>
<LABEL><SPAN>管理帐号：</SPAN>
<INPUT id=username class=input maxLength=20 type=text name="username"> </LABEL>
<LABEL><strong id="usermsg"></strong></LABEL>
<LABEL><SPAN>登录密码：</SPAN>
<INPUT id=password class=input maxLength=20 type=password name="password"></LABEL>
<LABEL><strong id="passmsg"></strong> </LABEL>
<LABEL><SPAN>验 证 码：</SPAN>
<INPUT name="verify" id="verify" class="verify" maxLength=5 type=text > 
<img src="__URL__/verify" onclick="(this).src='__URL__/verify?'+Math.random();" class="verimg"/>
</LABEL>
<DIV id=submit><INPUT class=bt value="" src="__PUBLIC__/images/login.png" 
type=image name=aa> <INPUT id=act value=2 type=hidden name=act> </DIV>

<P id=siteCopyRight> </P>
</FORM>
</BODY>
</html>