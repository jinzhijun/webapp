<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=7">
        <link type="text/css" href="/Public/css/page_right.css" rel="stylesheet">
        <script type="text/javascript" src="/Public/js/jquery/jquery.js"></script>
        <script type="text/javascript" src="/Public/js/common.js"></script>
        <script type="text/javascript" src="/Public/ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="/Public/ckfinder/ckfinder.js"></script>
         
    </head>
    <body>
        <div class="page_right_area">
            <div class="title"><span></span><strong><?php if(isset($title)): echo ($title); endif; ?></strong></div>
            <div class="content">
                <form action="__URL__/hostAddHandle/" method="post"  enctype="multipart/form-data" name="form1" onsubmit="return checkForm()">
                    <table class="body_table_bg" border="0" cellspacing="1" width="100%"> 
                    
                        <tbody>
                       
                        <tr>
                            <td id="name_title" align="right">医院名称</td>
                            <td><input name="name" id="name" size="30" maxlength="32" title="必填项" type="text" value="<?php echo ($name); ?>"></td>
                        </tr>    
                               <tr>
                            <td id="link_title" align="right">医院网站</td>
                            <td><input name="link" id="link" size="30" title="必填项" type="text" value="<?php echo ($link); ?>"></td>
                        </tr>  
                        <tr>
                            <td id="FContent_title" align="right" valign="top">医院简介</td>
                            <td>
                               
                                <textarea id="editor1" name="content"><?php echo ($content); ?></textarea>
                               <script type="text/javascript">   
                               CKEDITOR.replace( 'editor1',     {    
                            	   filebrowserBrowseUrl : '/Public/ckfinder/ckfinder.html',     
                            	   filebrowserImageBrowseUrl : '/Public/ckfinder/ckfinder.html?Type=Images',     
                            	   filebrowserFlashBrowseUrl : '/Public/ckfinder/ckfinder.html?Type=Flash',     
                            	   filebrowserUploadUrl : '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',   
                            	   filebrowserImageUploadUrl : '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',   
                            	   filebrowserFlashUploadUrl : '/Public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'     
                            	});   
                               </script>
                            </td>
                        </tr>
                               
                        <tr>
                            <td align="right">&nbsp;</td>
                            <td>
                   				<?php if($hid != 0 ): ?><input type="hidden" name="hid" value="<?php echo ($hid); ?>" /><?php endif; ?>
                                <input value="提交"  class="submit" type="submit">
                                <input value="返回"  class="submit" onclick="history.go(-1)" type="button">
                            </td>
                        </tr>
                    </tbody></table>
                </form>
            </div>
        </div>
    
<iframe src="javascript:void(0)" style="margin: 0px; padding: 0px; border: 0px none; background-color: transparent; background-image: none; height: 0px; width: 0px; position: absolute; z-index: 10000;" frameborder="0" scrolling="no"></iframe><iframe src="javascript:void(0)" style="margin: 0px; padding: 0px; border: 0px none; background-color: transparent; background-image: none; height: 0px; width: 0px; position: absolute; z-index: 10000;" frameborder="0" scrolling="no"></iframe><iframe src="javascript:void(0)" style="margin: 0px; padding: 0px; border: 0px none; background-color: transparent; background-image: none; height: 0px; width: 0px; position: absolute; z-index: 10000;" frameborder="0" scrolling="no"></iframe><iframe src="javascript:void(0)" style="margin: 0px; padding: 0px; border: 0px none; background-color: transparent; background-image: none; height: 0px; width: 0px; position: absolute; z-index: 10000;" frameborder="0" scrolling="no"></iframe><iframe src="javascript:void(0)" style="margin: 0px; padding: 0px; border: 0px none; background-color: transparent; background-image: none; height: 0px; width: 0px; position: absolute; z-index: 10000;" frameborder="0" scrolling="no"></iframe><iframe src="javascript:void(0)" style="margin: 0px; padding: 0px; border: 0px none; background-color: transparent; background-image: none; height: 0px; width: 0px; position: absolute; z-index: 10000;" frameborder="0" scrolling="no"></iframe><iframe src="javascript:void(0)" style="margin: 0px; padding: 0px; border: 0px none; background-color: transparent; background-image: none; height: 0px; width: 0px; position: absolute; z-index: 10000;" frameborder="0" scrolling="no"></iframe></body></html>