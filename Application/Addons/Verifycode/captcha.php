<?php
session_start();
require './ValidateCode.class.php';  //�Ȱ������������ʵ��·������ʵ����������޸ġ�
$_vc = new ValidateCode();		     //ʵ����һ������
$_vc->doimg();		
$_SESSION['authnum_session'] = $_vc->getCode();//��֤�뱣�浽SESSION��
var_dump($_SESSION['authnum_session']);
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $_SESSION['authnum_session'];
fwrite($myfile, $txt);
//$txt = "Steve Jobs\n";
//fwrite($myfile, $txt);
fclose($myfile);
?>