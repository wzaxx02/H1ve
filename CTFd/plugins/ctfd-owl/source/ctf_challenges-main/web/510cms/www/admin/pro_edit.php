<?php
include('admin.globl.php');
include('./fckeditor/fckeditor.php') ;
$db->user_shell($_SESSION[uid],$_SESSION[user_shell],2,$_SESSION[times]);
if(isset($_GET[id])&&!empty($_GET[id])){
$edit_id=$_GET[id];
$query=$db->select("510_procut","","where `id`=$edit_id");
$row_edit=$db->fetch_array($query);
}else{
	$db->get_admin_msg("pro_list.php","��ѡ����Ҫ�޸ĵĲ�Ʒ");
}

if(isset($_POST['proedit'])){
	if($_POST[f_id]!=0){
$db->query("UPDATE `510_procut` SET `cid` = '$_POST[f_id]',`name` = '$_POST[name]',`model` = '$_POST[model]'," .
		"`introduction` = '$_POST[introduction]',`parameter` = '$_POST[con]',`pic_1` = '$_POST[pic_1]',`pic_2` = '$_POST[pic_2]',`pic_3` = '$_POST[pic_3]' WHERE  `id` ='$edit_id';");
$db->get_admin_msg("pro_list.php","�޸ĳɹ�");
	}
	else $db->get_admin_msg("pro_edit.php?id=$edit_id","��ѡ�����");
}






function dafenglei_select($m,$id,$index)
{
	global $class_arr;
    $n = str_pad('',$m,'-',STR_PAD_RIGHT);
	$n = str_replace("-","&nbsp;&nbsp;",$n);
	for($i=0;$i<count($class_arr);$i++)
	{

		if($class_arr[$i][2]==$id)
		{
			if($class_arr[$i][0]==$index){
				echo "        <option value=\"".$class_arr[$i][0]."\" selected=\"selected\">".$n."|--".$class_arr[$i][1]."</option>\n";
			}else{
				echo "        <option value=\"".$class_arr[$i][0]."\">".$n."|--".$class_arr[$i][1]."</option>\n";
			}
			dafenglei_select($m+1,$class_arr[$i][0],$index);

		}

	}

}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>�������</title>
<link href="Images/css1/css.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function view1(url){
var url; window.open(url,'_blank','status=no,top=50,left=300,width=460,height=150');
}
</script>
</head>
<body>
<table class="table" cellspacing="1" cellpadding="2" width="99%" align="center"
border="0">
  <tbody>
    <tr>
      <th height="25" colspan="3" align="left" class="bg_tr">��̨>>�޸Ĳ�Ʒ     </th>
    </tr>
<?php
$query=$db->findall("510_proclass order by sort asc, id Desc");
while($row=$db->fetch_array($query)){
	$class_arr[] = array($row['id'],$row['name'],$row['f_id'],$row['sort']);
}
?>
  <form action="" method="post" name="form" id="xm">
    <tr>
      <td class="td_bg" width="8%">ѡ����ࣺ</td>
      <td class="td_bg" height="26" colspan="2"><select name="f_id">
	  <option value="?">��ѡ����Ŀ</option>
<?php
dafenglei_select(0,0,$row_edit[cid])
?>
	  </select></td>
</tr>

<tr>
  <td class="td_bg" width="8%">��Ʒ���ƣ�</td>
<td class="td_bg" height="26" colspan="2"><input type="text" name="name" value="<?php echo $row_edit[name];?>" size="30"/></td>
</tr>



<tr>
  <td class="td_bg" width="8%">��Ʒ�ͺţ�</td>
<td class="td_bg" height="26" colspan="2"><input type="text" name="model" value="<?php echo $row_edit[model];?>" size="20" /></td>
</tr>


 <tr>
      <td class="td_bg" width="8%">��ƷͼƬһ��</td>
      <td class="td_bg" width="21%" height="26"><input type="text" name="pic_1" id="pic_1" value="<?php echo $row_edit[pic_1];?>" size="30" /></td>
      <td class="td_bg" width="71%" height="26"><iframe border=0 frameborder=0 framespacing=0 height=22 width=600 marginheight=0 marginwidth=0  scrolling=no  src="uppic.php?id=pic_1" ></iframe></td>
    </tr>
    <tr>
      <td class="td_bg" width="8%">��ƷͼƬ����</td>
      <td class="td_bg" width="21%" height="26" ><input type="text" name="pic_2" id="pic_2" value="<?php echo $row_edit[pic_2];?>" size="30" /></td>
      <td class="td_bg" width="71%" height="26"><iframe border=0 frameborder=0 framespacing=0 height=22 width=600 marginheight=0 marginwidth=0 scrolling=no  src="uppic.php?id=pic_2" ></iframe></td>
    </tr>
    <tr>
      <td class="td_bg" width="8%">��ƷͼƬ����</td>
      <td class="td_bg" width="21%" height="26"><input type="text" name="pic_3" id="pic_3" value="<?php echo $row_edit[pic_3];?>" size="30" /></td>
      <td class="td_bg" width="71%" height="26"><iframe border=0 frameborder=0 framespacing=0 height=22 width=600 marginheight=0 marginwidth=0  scrolling=no  src="uppic.php?id=pic_3" ></iframe></td>
    </tr>

<tr>
  <td class="td_bg" width="8%">��Ʒ���ܣ�</td>
<td class="td_bg" height="26" colspan="2"><textarea name="introduction" cols="80" rows="8" ><?php echo $row_edit[introduction];?></textarea></td>
</tr>



<tr>
  <td class="td_bg" width="8%">��ϸ������</td>
<td class="td_bg" height="26" colspan="2"><?php
$sBasePath = $_SERVER['PHP_SELF'] ;
$sBasePath = dirname($sBasePath).'/fckeditor/';
$aFCKeditor = new FCKeditor('con') ;
$aFCKeditor->BasePath=$sBasePath;
$aFCKeditor->Value=$row_edit[parameter];
$aFCKeditor->Create();
?></td>
</tr>
<tr>
  <td class="td_bg" width="8%">&nbsp;</td>
<td class="td_bg" height="26" colspan="2">
  <input type="submit" name="proedit" value="�ύ�޸�"  /></td>
</tr>
</form>
<tr>
  <td>
  </tbody>
</table>




















</body>
</html>
