<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Nha Hang</title>
</head>
<link rel="stylesheet" href="css1.css" type="text/css">
<body background="img/bgr.jpg">

<div class="tong">
        <div id="header"> 
<table>
                <tr>
                    <td colspan="10"><img src="img/logo.png"></td>
                    <td width="120px" height="26" style="color:#C36; font-weight:bold" ><a href="qlnh.html">Trang chủ</a> </td>
                    <td width="69" style="color:#C36;font-weight:bold">Menu</td>
                    <td width="100px" style="color:#C36;font-weight:bold"><a href="datban.html">Đặt bàn</td>
                    <td width="100px"style="color:#C36;font-weight:bold">Giới thiệu</td>
                    <td width="100px"style="color:#C36;font-weight:bold">Hotline</td>          
                    <td width="265"; colspan="3" > <input type="text" name="search" placeholder="Search.." value=" Seach........." width="100px"> <input type="submit" name="ok" value="Tìm kiếm " ></td>            
               
      </tr>              	               
			</table>
	</div>
    <div id="left"></div>
    <div id="mid">
    	
    	<form  method="post" enctype="multipart/form-data">
        	<table align="center" background="img/nendatban.jpg" border="5">
            	<tr>
                	<td colspan="2" style="font-weight:bold; font-size:36px; color:#6F6" align="center">Đặt Bàn</td>
                </tr>
            	<tr>
                	<td style="color:#CF3; font-weight:bold" align="left">Họ và Tên:</td>
                    <td><input type="text" name="hovaten"></td>
                </tr>
                <tr>
                	<td style="color:#CF3; font-weight:bold" align="left">Số Điện Thoại:</td>
                    <td><input type="text" name="sdt"></td>
                </tr>
                <tr>
                	<td style="color:#CF3; font-weight:bold" align="left">Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                	<td style="color:#CF3; font-weight:bold" align="left">Số Khách:</td>
                    <td><input type="text" name="sokhach"></td>
                </tr>
              	<tr>
                	<td style="color:#CF3; font-weight:bold" align="left"  >Loại Bàn</td>
                    <td>
                    <select><option>Vip</option><option>Thường</option></select ></td>
                </tr>
                <tr>
                	<<td style="color:#CF3; font-weight:bold" align="left">Nội dung cuộc hẹn:</td>
                    <td><textarea></textarea></td>
                </tr>
                 <tr>
                	<<td style="color:#CF3; font-weight:bold" align="left">Yêu Cầu:</td>
                    <td><textarea></textarea></td>
                </tr>
                 <tr>             
                    <td colspan="2" align="center"><input type="submit" value="Đặt Bàn" name="ok"></td>
                </tr>
                
            </table>
        </form>
    </div>
    <div id="right"></div>
    <div id="bot">
    
    		<img src="img/face.png" width="75px" height="75px"><img src="img/inta.png" width="75px" height="75px">
        	<h1 style="color:#C36">Tel:0123456789</h1>
    </div>
 
</body>
<?php
	include('connect.php');
	if(isset($_POST['OK']))
{
		$ten=$_POST['ten'];
	$diachi=$_POST['dc'];
	$dienthoai=$_POST['dt'];
	$gioitinh=$_POST['gt'];
	$tentk=$_POST['tk'];
	$matkhau=$_POST['mk'];
	$nlmk=$_POST['nlmk'];
	$ghichu=$_POST['gc'];
	$sothich=$_POST['sothich'];
?>
</html>