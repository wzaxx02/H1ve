<?php
include('admin.globl.php');
$db->user_shell($_SESSION[uid],$_SESSION[user_shell],2,$_SESSION[times]);
$query=$db->findall('510_config');
while($row=$db->fetch_array($query)){
	$row_arr[$row[name]]=$row[values];
}

if(isset($_POST['update'])){
	unset($_POST['update']);
	foreach($_POST as $name=>$values){
		$db->query("update `510_config` set `values`='$values' where `name`='$name'");
	}
	$db->get_admin_msg('websiteconfig.php','������Ϣ���޸ĳɹ���');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>�ޱ����ĵ�</title>
<link href="Images/css1/css.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=javascript>
<!--
var displayBar=true;
function switchBar(obj){
	if (displayBar)
	{
		parent.frame.cols="0,*";
		displayBar=false;
		obj.value="����߹���˵�";
	}
	else{
		parent.frame.cols="195,*";
		displayBar=true;
		obj.value="�ر���߹���˵�";
	}
}

function fullmenu(url){
	if (url==null) {url = "admin_left.asp";}
	parent.leftFrame.location = url;
}

//-->
</SCRIPT>




 <% Dim theInstalledObjects(4)
theInstalledObjects(0) = "Gatherer.VBProcess"
theInstalledObjects(1) = "Scripting.FileSystemObject"
theInstalledObjects(2) = "adodb.connection"

theInstalledObjects(3) = "JMail.SMTPMail"
theInstalledObjects(4) = "CDONTS.NewMail"
Function IsObjInstalled(ByVal strClassString)
	Dim xTestObj,ClsString
	On Error Resume Next
	IsObjInstalled = False
	ClsString = strClassString
	Err = 0
	Set xTestObj = Server.CreateObject(ClsString)
	If Err = 0 Then IsObjInstalled = True
	If Err = -2147352567 Then IsObjInstalled = True
	Set xTestObj = Nothing
	Err = 0
	Exit Function
End Function %>


<body>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center"
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">��վ����������Ϣ     </th>
    </tr>
  <form action="" method="post" >
    <tr>
      <td class="td_bg" width="8%" height="23">��˾���ƣ�     </td>
      <td class="td_bg" width="92%"><input name="cpname" type="text"  value="<?php echo $row_arr[cpname];?>"></td>
    </tr>
    <tr>
      <td class="td_bg" width="8%" height="22">��˾�绰��      </td>
      <td class="td_bg" width="92%"><input name="cptel" type="text" value="<?php echo $row_arr[cptel];?>"></td>
    </tr>
    <tr>
      <td class="td_bg" width="8%" height="23">��˾���棺      </td>
      <td class="td_bg" width="92%"><input name="cpfox" type="text" value="<?php echo $row_arr[cpfox];?>"></td>
    </tr>
    <tr>
      <td class="td_bg" width="8%" height="23">��˾���䣺      </td>
      <td class="td_bg" width="92%"><input name="cpmail" type="text" value="<?php echo $row_arr[cpmail];?>"></td>
    </tr>
	<tr>
      <td class="td_bg" width="8%" height="23">��˾��ַ��      </td>
      <td class="td_bg" width="92%"><input name="cpadd" type="text" value="<?php echo $row_arr[cpadd];?>" size="40"></td>
    </tr>
	<tr>
      <td class="td_bg" width="8%" height="23">��վ���ƣ�      </td>
      <td class="td_bg" width="92%"><input name="webname" type="text" value="<?php echo $row_arr[webname];?>" size="40"></td>
    </tr>

 	<tr>
      <td class="td_bg" width="8%" height="23">��վ������      </td>
      <td class="td_bg" width="92%"><input name="weburl" type="text" value="<?php echo $row_arr[weburl];?>" size="40"></td>
    </tr>
	<tr>
      <td class="td_bg" width="8%" height="23">��վ������</td>
      <td class="td_bg" width="92%"><input name="webdes" type="text" value="<?php echo $row_arr[webdes];?>" size="60">����ȷ��д�������վ�Ż�Ч����</td>
    </tr>
	<tr>
      <td class="td_bg" width="8%" height="23">��վ�ؼ��֣�      </td>
      <td class="td_bg" width="92%"><input name="webkw" type="text" value="<?php echo $row_arr[webkw];?>" size="60">�˴�Ϊ������ֿ�ؼ��֣�ÿ���ؼ���֮�����ö��Ÿ�����</td>
    </tr>
	<tr>
      <td class="td_bg" width="8%" height="23">��Ȩ˵����      </td>
      <td class="td_bg" width="92%"><textarea  name="copyright"  rows="8" cols="80"  ><?php echo $row_arr[copyright];?></textarea>
      ֧��HTML��ǩ��</td>
    </tr>


	<tr>
      <td  colspan="2" class="td_bg" align="left">
      <input name="update" type="submit" value="��������ύ����"></td>
    </tr>
    </form>
  </tbody>
</table>

</body>
</html>
