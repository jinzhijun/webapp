<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
        <link type="text/css" href="/Public/css/page_right.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/Public/css/pager.css">
        <script type="text/javascript" src="/Public/js/jquery/jquery.js"></script>
        <script type="text/javascript" >var searchURL1 ='<?php echo U("Admin/Guahao/showPatient/","","");?>';</script>
        <script type="text/javascript" src="/Public/js/common.js"></script>

    </head>
    <body>
        <div class="page_right_area">
            <div class="title"><span></span><strong>预约挂号列表</strong></div>
            <div class="content">
                <table class="body_table_bg" border="0" cellspacing="1" width="100%">
                    <tbody><tr>
                        <td class="titleTr" colspan="4"><strong>::请输入查询条件::</strong></td>
                    </tr>
                    <form id="form1" name="form1" method="get" action="" onsubmit="return checkForm()"></form>
                        <input name="F" value="adManage" type="hidden">
                        <input name="way" value="S" type="hidden">
                        <tr>
                            <td><span id="keywords_title">请输入患者名称</span>
                                <input name="keywords" id="keywords" title="必填项" size="30" type="text">
                                <input name="search" id="search" value="查找" class="submit" type="button" onclick="search('keywords',$('#keywords').val())">
                            </td>
                            <td><span id="keywords_title">请选择医院查询</span>
                                <select name="hospital" class="host">
    								<?php if(is_array($hostName)): foreach($hostName as $key=>$hn): ?><option value="<?php echo ($hn["name"]); ?>"><?php echo ($hn["name"]); ?></option><?php endforeach; endif; ?>
                                     </select>                               
                                <input name="search" id="search" value="查找" class="submit" type="button" onclick="search('hostName',$('.host option:selected').text())">
                            </td>
                                      <td><span id="keywords_title">请选择状态查询</span>
                                <select name="front" id="front">
                                    <option selected="selected" value="1">已接待</option>
                                    <option value="0">未接待</option>
                                </select>                               
                                <input name="search" id="search" value="查找" class="submit" type="button" onclick="search('front',$('#front option:selected').val())">
                            </td>
                        </tr>
                    
                </tbody></table>
                <table class="body_table_bg" border="0" cellspacing="1" width="100%">
                    <tbody><tr>
                        <td colspan="15" class="titleTr"><strong>::预约挂号列表::</strong></td>
                    </tr>
                   
	                    <tr>
	                        <td><strong>选择</strong></td>
	                        <td><strong>序号</strong></td>
	                        <td><strong>患者</strong></td>
	                        <td><strong>性别</strong></td>
	                        <td><strong>年龄</strong></td>
	                        <td><strong>咨询医院</strong></td>
	                        <td><strong>就诊科室</strong></td>
	                        <td><strong>电话</strong></td>
	                        <td><strong>病情描述</strong></td>
	                        <td><strong>就诊时间</strong></td>
	                        <td><strong>提交时间</strong></td>
	                        <td><strong>状态</strong></td>
	                        <td colspan="3" align="center"><strong>管理</strong></td>
	                    </tr>
                  
                     <?php if(is_array($list)): foreach($list as $key=>$me): ?><tr class="strong_tr">
	                            <td><input name="logId" id="logId<?php echo ($me['id']); ?>" value="<?php echo ($me['id']); ?>" class="width_auto" type="checkbox"></td>
	                            <td><?php echo ($me["id"]); ?></td>
	                            <td><?php echo ($me["username"]); ?></td>
	                            <td><?php echo ($me["sex"]); ?></td>
	                            <td><?php echo ($me["age"]); ?></td>
	                            <td>
		                          <a href="<?php echo ($me['Hosts']['link']); ?>" target="_blank"> <?php echo ($me['Hosts']['name']); ?></a>
		                           
	                            </td>
	                            <td><?php echo ($me["ks"]); ?></td>
	                            <td><a><?php echo ($me["tel"]); ?></a></td>
	                            <td><?php echo (substr($me["cont"],0,30)); ?></td>
	                            <td><span class="red_front"><?php echo (date("Y-m-d",$me["jz_time"])); ?></span></td>
	                            <td><span class="green_front"><?php echo (date("Y-m-d",$me["yul"])); ?></span></td>
	                            <td><span class="red_front"><?php if($me['status'] == 1): ?>已就诊<?php else: ?>未就诊<?php endif; ?></span></td>
	                            <td width="50"><a href="">详情</a></td>
	                            <td width="50">
	                              	<span class="font_gray" ><a href='<?php echo U("Admin/Guahao/deletePatient/",array("id_str"=>$me['id']),"");?>' onclick="getConfirm();">删除</a></span>
	                            </td>     
	                            <td width="50">
	                                <span class="font_gray" ><?php if($me['status'] == 1): ?>已接待<?php else: ?><a href="<?php echo U('Admin/Guahao/seePatient',array('id'=>$me['id']),'');?>">接待</a><?php endif; ?></span>
	                            </td>  
	                        </tr><?php endforeach; endif; ?>  
                        <tr>
                        <td colspan="15" height="36">
                            <a href="javascript:void(0)" onclick="selectAll('logId')" class="coolbg ">全选</a>
                            <a href="javascript:void(0)" onclick="invertSelection('logId')" class="coolbg ">反选</a>
                            <span class="font_gray" ><a href="javascript:void(0)" class="deletID" onclick="deleteGua('logId')">删除</a></span>
                        </td>
                    </tr>
                </tbody>
                </table>
                <div class="pagerInfo">
						<?php echo ($page); ?>
				</div> 
      
</div>
    
</body>
</html>