<?php

session_start();

//�ļ�ͷ...

header("Content-type: image/png");

//�������ɫ��ֽ

$im = @imagecreatetruecolor(50, 20) or die("����ͼ��ʧ��");

//��ȡ������ɫ

$background_color = imagecolorallocate($im, 255, 255, 255);

//��䱳����ɫ(�������������Ͱ)

imagefill($im,0,0,$background_color);

//��ȡ�߿���ɫ

$border_color = imagecolorallocate($im,200,200,200);

//�����Σ��߿���ɫ200,200,200

imagerectangle($im,0,0,49,19,$border_color);

//������ҫ������ȫ����1��0

for($i=2;$i<18;$i++){

//��ȡ�����ɫ

$line_color = imagecolorallocate($im,rand(200,255),rand(200,255),rand(200,255));

//����

imageline($im,2,$i,47,$i,$line_color);

}

//���������С

$font_size=12;

//����ӡ��ȥ������

$Str[0] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$Str[1] = "abcdefghijklmnopqrstuvwxyz";

$Str[2] = "01234567891234567890123456";

//��ȡ��1���������

$imstr[0]["s"] = $Str[rand(0,2)][rand(0,25)];

$imstr[0]["x"] = rand(2,5);

$imstr[0]["y"] = rand(1,4);

//��ȡ��2���������

$imstr[1]["s"] = $Str[rand(0,2)][rand(0,25)];

$imstr[1]["x"] = $imstr[0]["x"]+$font_size-1+rand(0,1);

$imstr[1]["y"] = rand(1,3);

//��ȡ��3���������

$imstr[2]["s"] = $Str[rand(0,2)][rand(0,25)];

$imstr[2]["x"] = $imstr[1]["x"]+$font_size-1+rand(0,1);

$imstr[2]["y"] = rand(1,4);

//��ȡ��4���������

$imstr[3]["s"] = $Str[rand(0,2)][rand(0,25)];

$imstr[3]["x"] = $imstr[2]["x"]+$font_size-1+rand(0,1);

$imstr[3]["y"] = rand(1,3);

$_SESSION[checkpic]=$imstr[0]["s"].$imstr[1]["s"].$imstr[2]["s"].$imstr[3]["s"];

//д������ִ�

for($i=0;$i<4;$i++){

//��ȡ���������ɫ

$text_color = imagecolorallocate($im,rand(50,180),rand(50,180),rand(50,180));

//������

imagechar($im,$font_size,$imstr[$i]["x"],$imstr[$i]["y"],$imstr[$i]["s"],$text_color);

}

//��ʾͼƬ

imagepng($im);

//����ͼƬ

imagedestroy($im);

?>

