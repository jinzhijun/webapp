<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="favicon.ico" /> 
<meta http-equiv="Content-Type" content="text/html; charset=uft-8" />
<title> Hostpital system</title>
</head>

<frameset rows="100,*" cols="*" frameborder="yes" border="0" framespacing="0">
  <frame src="<?php echo U('Admin/Index/top/');?>" name="topFrame" scrolling="no" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset cols="213,*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo U('Admin/Index/left/');?>" name="leftFrame" scrolling="no" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="<?php echo U('Admin/Index/mainfra/');?>" name="mainFrame" id="mainFrame" title="mainFrame" />
  </frameset>
</frameset>
<noframes><body>
</body>
</noframes></html>