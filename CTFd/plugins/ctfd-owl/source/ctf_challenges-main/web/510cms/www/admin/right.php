<?php
include('admin.globl.php');
$db->user_shell($_SESSION[uid],$_SESSION[user_shell],2,$_SESSION[times]);

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>ϵͳ����ҳ</title>
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
<?php
date_default_timezone_set("Etc/GMT-8");
?>






<body>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center"
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">���������йز���
        <input onClick="switchBar(this)" type="button" value="�ر���߹���˵�" name="SubmitBtn" />     </th>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">PHP�汾��</td>
      <td class="td_bg" width="83%"><?php echo "PHP".PHP_VERSION; ?></td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">MYSQL�汾��</td>
      <td class="td_bg" width="83%"><?php echo mysql_get_server_info(); ?></td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">����������</td>
      <td class="td_bg" width="83%"><?php echo $_SERVER['SERVER_NAME']; ?></td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">������IP��</td>
      <td class="td_bg" width="83%"><?php echo $_SERVER["HTTP_HOST"]; ?></td>
    </tr>
	  <tr>
      <td class="td_bg" width="17%" height="23">�������˿ڣ�</td>
      <td class="td_bg" width="83%"><?php echo $_SERVER["SERVER_PORT"]; ?></td>
    </tr>
	  <tr>
      <td class="td_bg" width="17%" height="23">������ʱ�䣺</td>
      <td class="td_bg" width="83%"><?php echo $showtime=date("Y-m-d H:i:s");?></td>
    </tr>
	  <tr>
      <td class="td_bg" width="17%" height="23">����������ϵͳ��</td>
      <td class="td_bg" width="83%"><?php echo PHP_OS; ?></td>
    </tr>
	  <tr>
      <td class="td_bg" width="17%" height="23">վ������·����</td>
      <td class="td_bg" width="83%"><?php echo $_SERVER["DOCUMENT_ROOT"]; ?></td>
    </tr>












  </tbody>
</table>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center"
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">��վ����ϵͳ�汾</th>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">��ǰ�汾<span class="TableRow2"></span></td>
      <td width="83%" class="td_bg"><strong>ELINSTUDIOW��ҵ��վCMS<span class="TableRow1"></span></strong></td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">��Ȩ����<span class="TableRow2"></span></td>
      <td class="td_bg" width="83%">1�������Ϊ�������,δ��������Ȩ���������κε������ṩ�����ϵͳ; <br>
        2���û�����ѡ���Ƿ�ʹ��,��ʹ���г����κ�������ɴ���ɵ�һ����ʧ���߽����е��κ�����; <br>
        3�������ԶԱ�ϵͳ�����޸ĺ������������뱣�������İ�Ȩ��Ϣ;  ��<br>
      4����������л����񹲺͹�������Ȩ����������������������������ط��ɡ����汣�������߱���һ��Ȩ����</td>
    </tr>
  </tbody>
</table>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center"
border="0">
  <tbody>
    <tr>
      <th class="bg_tr" align="left" colspan="2" height="25">��վ����ϵͳ���� </th>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">��������<span class="TableRow2"></span></td>
      <td width="83%" class="td_bg"><strong>ELINSTUDIO������(�н���վ����,��̨���� )</strong></td>
    </tr>
    <tr>
      <td class="td_bg" height="23">��ϵ��ʽ<span class="TableRow2"></span></td>
      <td class="td_bg">E_mail��781282886@qq.com    QQ��781282886 </td>
    </tr>
    <tr>
      <td class="td_bg" width="17%" height="23">������ҳ<span class="TableRow2"></span></td>
      <td class="td_bg" width="83%"><a href="http://www.xmf1.com" target="_blank">www.xmf1.com</a><a href="http://www.865171.cn" target="_blank"></a> </td>
    </tr>
  </tbody>
</table>
</body>
</html>
