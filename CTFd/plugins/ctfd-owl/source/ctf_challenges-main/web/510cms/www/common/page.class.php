<?php
function lwphpclass($total, $pagesize = 5){
global $page, $firstcount, $pagenav;

$url=$_SERVER["REQUEST_URI"];
$parse_url=parse_url($url);
$url_path=$parse_url[path];
$url_query=$parse_url[query];
$page=$_GET[page];
$classid=$_GET[classid];
if($url_query){

$url_query=ereg_replace("(^|&)page=$page","",$url_query);


$url=str_replace($parse_url["query"],$url_query,$url);

if($url_query) $url.="&page"; else $url.="page";
}else {
$url.="?page";
}

if(!$page) $page=1;

$lastpg=ceil($total/$pagesize);
$page=min($lastpg,$page);
$prepg=$page-1; //��һҳ
$nextpg=($page==$lastpg ? 0 : $page+1); //��һҳ
$firstcount=($page-1)*$pagesize;

$pagenav="��ʾ�� <B>".($total?($firstcount+1):0)."</B>-<B>".min($firstcount+$pagesize,$total)."</B> ����¼���� $total ����¼";

$pagenav.=" <a href='$url=1'>��ҳ</a> ";
if($prepg) $pagenav.=" <a href='$url=$prepg'>ǰҳ</a> "; else $pagenav.=" ǰҳ ";
if($nextpg) $pagenav.=" <a href='$url=$nextpg'>��ҳ</a> "; else $pagenav.=" ��ҳ ";
$pagenav.=" <a href='$url=$lastpg'>βҳ</a> ";

$pagenav.="ת���� <select name='topage' size='1' onchange='window.location=\"$url=\"+this.value'>\n";
for($i=1;$i<=$lastpg;$i++){
if($i==$page) $pagenav.="<option value='$i' selected>$i</option>\n";
else $pagenav.="<option value='$i'>$i</option>\n";
}
$pagenav.="</select> ҳ���� $lastpg ҳ";

}



?>
