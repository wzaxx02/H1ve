<?php
include('admin.globl.php');
$db->user_shell($_SESSION[uid],$_SESSION[user_shell],2,$_SESSION[times]);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>510��ҵ����̨����ϵͳ</title>
<link href="Images/css1/top_css.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#03A8F6">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="194" height="60" align="center" background="Images/top_logo.jpg"></td>
    <td align="center" style="background:url(Images/top_bg.jpg) no-repeat"><table cellspacing="0" cellpadding="0" border="0" width="100%" height="33">
      <tbody>
        <tr>
          <td width="30" align="left"><img onClick="switchBar(this)" height="15" alt="�ر���߹���˵�" src="images/on-of.gif" width="15" border="0" /></td>

          <td width="63" align="right" nowrap="nowrap" class="topbar">�ٷ����棺</td>
          <td width="756" class="topbar"></td>
        </tr>
      </tbody>
    </table>
    <table height="26" border="0" align="left" cellpadding="0" cellspacing="0" class="subbg" NAME=t1>
      <tbody>
        <tr align="middle">
          <td width="71" height="26" align="center" valign="middle" background="Images/top_tt_bg.gif"><a
            href="right.php"
          target="main" class="STYLE2">������ҳ</a></td>
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="Images/top_tt_bg.gif"><a
            href="websiteconfig.php"
            target="main" class="STYLE2">վ������</a></td>
        
          <td align="center" class="topbar"><span class="STYLE2"> </span></td>
          <td width="71" align="center" valign="middle" background="Images/top_tt_bg.gif"><a  href="admin_index.php?Action=LoginOut" target="_top" class="STYLE2">�˳���¼</a></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr height="6">
    <td bgcolor="#1F3A65" background="Images/top_bg.jpg"></td>
  </tr>
</table>
<script language="javascript">
<!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.title="����߹���˵�";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.title="�ر���߹���˵�";
	}
}
//-->
</script></body>
</html>
