<?php
class action extends mysql{
public	function user_shell($uid,$shell,$mid,$online){
$query=$this->query("select * from 510_admin where `id`='$uid'");
$us=is_array($row=$this->fetch_array($query));
$shell=$us ? $shell==md5($row[name].$row[pw].ALL_PS): false;
if($shell){
	if($row[mid]<=$mid){
    $new_time=mktime();
	if($new_time-$online>'6000'){
		$this->get_admin_msg('login.php',$show="���ѳ�ʱ�����µ�¼");
		session_destroy();
		exit();
	}else{
	$_SESSION[times]=mktime();
    return $row;
	}
	}else {
	$this->get_admin_msg('admin_index.php',$show="���Ȩ�޲���,�����������Ŀ�Ĺ���");
	exit();
	}
}else{
	$this->get_admin_msg('login.php',$show="����Ȩ�޷ø��������ȵ�¼");
	exit();
}
}

public function logout(){
	session_destroy();
	$this->get_admin_msg('login.php',$show="���ѳɹ��˳�");
}



public function get_admin_msg($url,$show="�����ѳɹ�"){
		$msg='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
</head>
<body>
<div>
<table width="30%" border="1" align="center" cellpadding="3" cellspacing="0" style="margin-top:100px">
<tr><th align="center" style="background:#cef">��Ϣ��ʾ</th></tr>
<tr><td><p>'.$show.'<br />
2��󷵻�ָ�����棡<br />
���������޷���ת��<a href="'.$url.'">�����˴�</a>.</p>
</td></tr>
</table>
</div>
</body>
</html>';
echo $msg;
exit();
	}
}
?>
