
<div class="menu">
            <ul>
                <li><a href="index.php">Trang chủ</a> </li>
                <li><a href="index.php?xem=tatcasanpham&id=1">Tất cả sản phẩm</a> </li>
                <li><a href="index.php?xem=giohang&id=<?php echo @$_SESSION['dangnhap']?>">Giỏ hàng</a></li>
                <li><a href="index.php?xem=dangnhaptk&id=>">Đăng nhập</a></li>
                <li><a href="index.php?xem=dangkitk&id=1">Đăng kí</a></li>
                <li><a href="index.php?xem=thongtinnguoidung&id=<?php echo @$_SESSION['dangnhap']?>&x0y1z2">Thông tin cá nhân</a></li>
                
                <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="TimKiem">
                <input type="text" id="Ftimkiem" name="Ftimkiem" />
                <input class="search" type="submit" id="Btimkiem" name="search" value="Search" placeholder="Search..." />
                
                </div>
                </form>
                <li> <a href="index.php?xem=logout&id=1">Đăng xuất</a>
            </ul>
        </div>
<?php
    
    if(isset($_GET['xem'])&&$_GET['xem']=='logout')
    {
        unset($_SESSION['dangnhap']);
        header('location:index.php');
    }
?>