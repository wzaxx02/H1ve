<?php
include('admin.globl.php');
$db->user_shell($_SESSION[uid],$_SESSION[user_shell],2,$_SESSION[times]);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK" />
<title>865171���ݹ���ϵͳ</title>
<link href="Images/css1/left_css.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT language=JavaScript>
function showsubmenu(sid)
{
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
</SCRIPT>
<body bgcolor="16ACFF">
<table width="98%" border="0" cellpadding="0" cellspacing="0" background="Images/tablemde.jpg">
  <tr>
    <td height="5" background="Images/tableline_top.jpg" bgcolor="#16ACFF"></td>
  </tr>
  <tr>
    <td><TABLE width="97%"
border=0 align=right cellPadding=0 cellSpacing=0 class=leftframetable>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(Images/left_tt.gif) no-repeat">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(1); height=25>ϵͳ����</TD>
              </tr>
            </table>            </TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu1 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="Images/closed.gif"></TD>
                  <TD height=23><A href="websiteconfig.php"
            target=main>������Ϣ</A></TD>

                <TR>
                  <TD><IMG src="Images/closed.gif"></TD>
                  <TD height=23><A href="adminadd.php"
            target=main>����Ա����</A> </TD>
                </TR>

                <TR>
                  <TD><IMG src="Images/closed.gif"></TD>
                  <TD height=23><A href="singlepage.php"
            target=main>��ҳģ������</A></TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="Images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="Images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><table class="leftframetable" cellspacing="0" cellpadding="0" width="97%" align="right"
border="0">
      <tbody>
        <tr>
          <td height="25" style="background:url(Images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="20"></td>
          <td height="25" class="titledaohang" style="CURSOR: hand" onClick="showsubmenu(2);"><span class="STYLE1">���Ź���</span></td>
              </tr>
            </table></td>
          </tr>
        <tr>
          <td><table id="submenu2" cellspacing="0" cellpadding="0" width="100%" border="0">
              <tbody>



				<tr>
                  <td width="2%"><img src="Images/closed.gif" /></td>
                  <td width="98%" height="23"><a href="newsclass.php" target="main">���ŷ���</a></td>
                </tr>
                <tr>
                  <td><img src="Images/closed.gif" /></td>
                  <td height="23"><a href="news_add.php"
            target="main">�������</a>             </td>
                </tr>
                <tr>
                  <td><img src="Images/closed.gif" /></td>
                  <td height="23"><a
            href="news_list.php"
            target="main">���Ź���</a> </td>
                </tr>

              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
  <tr>
    <td height="5" background="Images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="Images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><TABLE class=leftframetable cellSpacing=0 cellPadding=0 width="97%" align=right
border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(Images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(4);
    height=25>��Ʒ����</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu4 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="Images/closed.gif"></TD>
                  <TD height=23><A href="proclass.php"
            target=main>��Ʒ����</A> </TD>
                </TR>
                <TR>
                  <TD><IMG src="Images/closed.gif"></TD>
                  <TD height=23><A href="pro_add.php"
            target=main>��Ӳ�Ʒ</A></TD>
                </TR>
				<TR>
                  <TD><IMG src="Images/closed.gif"></TD>
                  <TD height=23><A href="pro_list.php"
            target=main>��Ʒ����</A></TD>
                </TR>

              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="Images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>

  <tr>
    <td height="5" background="Images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td><TABLE class=leftframetable cellSpacing=0 cellPadding=0 width="97%" align=right border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(Images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 style="CURSOR: hand" onclick=showsubmenu(9); height=25>��ϵͳ����</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD><TABLE id=submenu9 cellSpacing=0 cellPadding=0 width="100%" border=0>
              <TBODY>
                <TR>
                  <TD width="2%"><IMG src="Images/closed.gif"></TD>
                  <TD height=23><A href="link.php" target=main>�������ӹ���</A> </TD>
                </TR>

                <TR>
                  <TD width="2%"><IMG src="Images/closed.gif"></TD>
                  <TD height=23><A href="messages.php" target=main>�������Թ���</A> </TD>
                </TR>
              </TBODY>
          </TABLE></TD>
        </TR>
      </TBODY>
    </TABLE></td>
  </tr>
  <tr>
    <td height="5" background="Images/tableline_bottom.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="5" background="Images/tableline_top.jpg" bgcolor="#9BC2ED"></td>
  </tr>
  <tr>
    <td height="8">

<TABLE class=leftframetable cellSpacing=1 cellPadding=1 width="97%" align=right
border=0>
      <TBODY>
        <TR>
          <TD height="25" style="background:url(Images/left_tt.gif) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <TD width="20"></TD>
          <TD class=STYLE1 height=25>ϵͳ��Ϣ</TD>
            </tr>
          </table></TD>
          </TR>
        <TR>
          <TD
      height=105><span class="STYLE2"><IMG src="Images/closed.gif">��Ȩ���У�����F1����<br>
              <IMG src="Images/closed.gif">���������elinstudio<br>
              <IMG src="Images/closed.gif">����֧�֣�<a href="http://www.xmf1.com" target="_blank">����F1����</a><br>
              <IMG src="Images/closed.gif">�������ģ�<a href="http://www.xmf1.com" target="_blank">����F1����</a><br>
            <IMG src="Images/closed.gif">ϵͳ�汾��1.0</span></TD>
        </TR>
      </TBODY>
    </TABLE>	</td>
  </tr>
  <tr>
    <td height="5" background="Images/tableline_bottom.jpg"></td>
  </tr>
</table>
</body></html>
