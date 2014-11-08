

<?php require_once('common/header.php') ?>
<!-- 头部吊顶
<div class="row-fluid">
</div> -->
<!-- 头部工具条 -->


<?php $category= $_REQUEST['cat']; 
  if($category == ""){
    $pageNav = "index";
  }else{
    $pageNav = $category;
  }

  require('common/header-menu.php') ;
  
  //按照类目组织文件名称,获取页面的商品列表
  $filename = "cms/section/" .$category . '_itemlist.json';
  $content = file_get_contents($filename) ;
  $itemList = json_decode($content, true);

?>

<!-- 内容商品区域 -->
<div class="row-fluid content-warp" style="height:140px;">
    <div class="topic">
        <span class="topic-icon">潮牌推荐</span>
    </div>
    <ul class="box shopList">
        <li class="shop">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3DVDDgiIyTrqMcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMRgIUUt4g%2BVexq3IhSJN6GRSGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL48e3H%2BgcFtUtEew1By%2BI5k"> 
           <img style="max-width:80px;max-height:80px;" src="http://logo.taobaocdn.com/shop-logo/63/a7/T1avvwFFRbXXartXjX.gif">
            韩都衣舍 </a>
        </li>
        <li class="shop">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3D864AODx7okgcQipKwQzePDAVflQIoZepLKpWJ%2Bin0XJRAdhuF14FMa6TpZngWNi%2Fxq3IhSJN6GRSGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL6TURVOYrSGvq1D6OTudZOE"> 
           <img src="http://logo.taobaocdn.com/shop-logo/56/b6/T18BZAFddXXXb1upjX.jpg">
           茵曼正品品牌店 </a>
        </li>
        <li class="shop">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3DMn3ojfV65BYcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMY88NDOibNoqt4hWD5k2kjNSGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL7ndTuVpBqf2QjEtJbkYGHm"> 
           <img style="max-width:70px;max-height:70px;" src="http://logo.taobaocdn.com/shop-logo/01/39/T12apGFsdoXXb1upjX.jpg">
           伊芙丽旗舰店</a>
        </li>
        <li class="shop">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3DTjFWCF8We5IcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMWdhgu6c788d8sviUM61dt1SGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL7xNOs2HzuGe%2BRe4afIL2q4"> 
           <img style="max-width:70px;max-height:70px;" src="http://logo.taobaocdn.com/shop-logo/2b/87/TB1HtD3GXXXXXa_XFXXSutbFXXX.jpg">
           luxlead洛诗琳</a>
        </li>
        <li class="shop">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3DQcIGGrks8cocQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMYDrNC7Yi4Gz79%2FTFaMDK6RSGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL67sJVTcg0PpQIbf%2FX06Rer"> 
           <img style="max-width:70px;max-height:70px;" src="http://logo.taobaocdn.com/shop-logo/a0/15/TB1gIFyGXXXXXbRXpXXSutbFXXX.jpg">
           尚都比拉</a>
        </li>
    </ul>
</div>
 

<!-- 内容商品区域 -->
<div class="row-fluid list-warp">
    <div class="topic">
        <span class="topic-icon">编辑推荐</span>
    </div>
    <ul class="box itemList">
       <?php foreach ($itemList as $key => $value):?>
        <li class="item">
            <div class="item-warp">
                <div class="pic-box">
                    <a href="<?php echo $value['unionLink']?>" target="_bank"> <img src="<?php echo $value['image']?>"></a>
                </div>
                <div class="prop-row" >
                    <span class="price">促销价:￥<?php echo $value['promotionPrice']?></span>
                    <span class="oldprice">￥<?php echo $value['price']?></span> 
                <div class="title">
                    <a href="<?php echo $value['unionLink']?>" target="_bank"><?php echo $value['title']?></a>
                </div>
            </div>
        </li>
       <?php endforeach;?>
    </ul>
</div>
 
<!-- 页尾 -->
<?php require_once('common/page-buttom.php') ?>


<script type="text/javascript">

    $(document).ready(function (){

        var container = $('.itemList');
         container.imagesLoaded( function(){
                container.masonry({
                    itemSelector : '.item',
                    isAnimated : true
                });
        });

    });
</script>
</body>
</html>