<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Tìm kiếm</title>
<link href="Format1.css" type="text/css" rel="stylesheet">
</head>
<body>
      <div id="tong">
   <div id="header"><marquee direction="left">Welcome to Thue Nha 247 - Chào Mừng bạn đến với Thuê Nhà 247 Website hỗ trợ thuê nhà tiện lợi</marquee></div>	
      	<div id="banner"><nav>
    <h1>
      <a href="" class="logo"><img src="ImageDesign/LogoWeb.jpg"></a>
      <a href="" class="logo"><img src="ImageDesign/Header1.png" style="padding-left:200px"></a>
    </h1></nav></div>
        <div id="left"><img src="ImageDesign/left1.jpg"><img src="ImageDesign/left2.jpg"><img src="ImageDesign/left3.jpg"></div>
        <div id="center">
        	<div class="topnav">
  <a class="active" href="TrangChu.php">Home</a>
  <a href="#about">Introduce</a>
  <a href="#contact">Contact</a>
  <a href="LoginCN.php">Log In</a>
  <a href="">House Owner</a>
  <a href="">Advanced Search</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Tìm kiếm.." name="search">
      <button type="submit">Search</button>
    </form>
  </div>
</div>
    <button class="toggle-menu" aria-label="Responsive Navigation Menu">☰</button><main>
  <!-- content here -->
</main>
            <div class="content">
                <div class="search"><form action="/vi/site-search.html" method="get" name="fsearch" id="fsearch" autocomplete="off"><input name="search" type="hidden" id="search" value="true"><ul><li><select tabindex="1" name="category" id="category">
    <option value="0,0,0,0,0" selected="">Loại Nhà Cho Thuê</option>
    
    <option value="2,0,0,0,0">Phòng Trọ</option>
    
    <option value="4,0,0,0,0">Chung cư</option>
    
    <option value="3,0,0,0,0">Biệt Thự</option>
    
    <option value="5,0,0,0,0">Nhà và vườn liền kề</option>
    </select>
    </li><li><select tabindex="1" name="location" id="location">
    <option value="0" selected="">Khu Vực</option>
    <option value="5">Quận Tây Hồ </option>
    <option value="10">Ciputra Hanoi</option>
    <option value="1">Quận Hoàn Kiếm</option>
    <option value="2">Quận Ba Đình</option>
    <option value="3">Quận Hai Bà Trưng</option>
    <option value="7">Quận Đống Đa</option>
    <option value="8">Quận Cầu Giấy</option>
    <option value="12">Quận Thanh Xuân</option>
    <option value="13">Long Bien District</option>
    <option value="9">Quận Từ Liêm</option>
    </select>
    </li><li><select tabindex="1" name="bed" id="bed">
    <option value="0" selected="">Số Phòng ngủ</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    </select>
    </li><li><select tabindex="1" name="bath" id="bath">
    <option value="0" selected="">Số Phòng tắm</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    </select>
    </li>
    <li><select tabindex="1" name="time" id="time">
    <option value="0" selected="">Khoảng thời gian muốn thuê</option>
    <option value="1">Qua đêm</option>
    <option value="2">Một ngày một đêm</option>
    <option value="3">1 tháng</option>
    <option value="4">3 Tháng</option>
    <option value="5">1 Năm</option>
    </select>
    </li><li><input id="pricefrom" name="pricefrom" type="text" value="" placeholder="Giá từ" tabindex="1"></li><li><input id="priceto" name="priceto" type="text" value="" placeholder="Giá đến" tabindex="1"></li><li><input id="skey" name="skey" type="text" value="" placeholder="Mã Sản Phẩm" tabindex="1"></li><li><input type="submit" name="button" value="Tìm Kiếm" tabindex="1"></li></ul></form>
        </div></div></div>
        <div id="clr"></div>
        <div id="footer">
            <div class="footer1">
                 <td>Công Ty Cổ Phần Đầu Tư Bất Động Sản Hactech Việt Nam</td><br>
                 <td>Address: A17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội</td><br>
                 <td>Hotline: <a href=" tel:0384774066">0384774066</a></td><br>
                 <td>Mailbox Support: <a href="mailto:thuenha247@gmail.com">thuenha247@gmail.com</a></td><br>	
                 <td>Website: <a href="https://thuenha247.com.vn">thuenha247.com.vn</a></td>
                 <p> Copyright © 2017 Công Ty TNHH  do Sở Kế hoạch và Đầu tư Thành phố Hà Nội cấp </p></div>
                <div class="footer2">
                    <h1 align="center">Các đối tác lớn</h1>
                    <div class="imageft">
                        <img src="ImageDesign/Logo1.jpg" alt="" class="anhf">
                        <img src="ImageDesign/Logo2.jpg" alt="" class="anhf">
                        <img src="ImageDesign/tải xuống (1).jpg" alt="" class="anhf">
                        <img src="ImageDesign/tải xuống (2).jpg" alt="" class="anhf">
                        <img src="ImageDesign/tải xuống.jpg" alt="" class="anhf">
                    </div>
               </div>
               <div class="bot" style="text-align: center;"> 
                 <span class="currentpage"><b>1</b></span> 
                 <a class="pagenav" href="">2</a> 
                 <a class="pagenav" href="">3</a> ... 
                 <a class="pagenav" href="">6</a> 
                 <a class="pagenav" href="">&gt;&gt;</a></div>
       </div>

</html>