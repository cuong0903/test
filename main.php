<div class="main">

        <?php
        include('sidebar/sidebar.php')
        ?>
        <div class="maincontent">
           <?php
            if(isset($_GET['quanly'])){
               $tam = $_GET['quanly'];
            }
            else {
               $tam = '';
            }
            if ($tam =='danhmucsanpham') {
                include('main/danhmuc.php');
            }
            elseif ($tam =='giohang') {
                include('main/giohang.php');
            }
            elseif ($tam =='lienhe') {
                include('main/lienhe.php');
            }
            elseif ($tam =='sanpham') {
                include('main/sanpham.php');
            }

            elseif ($tam =='dangky') {
                include('main/dangky.php');
            }
            elseif ($tam =='timkiem') {
                include('main/timkiem.php');
            }
                
            else {
               include("main/index.php");
            }

           ?>
        </div>
</div> 



<script>
    var index = 1;
    changeImage = function(){
        var imgs = ["../images/img1.jpg","../images/img2.jpg","../images/img3.jpg","../images/img4.jpg"];
        document.getElementById('img').src = img[index];
        index++;
        if(index==3){
            index = 0;
        }

    }
</script>
