

<?php require_once('../common/header.php') ?>
<!-- 头部吊顶
<div class="row-fluid">
</div> -->
<!-- 头部工具条 -->
<?php require('../common/header-menu.php') ?>




<!-- 内容商品区域 -->
<div class="row-fluid content-warp">
    <div class="topic">
        <span class="topic-icon">潮牌推荐</span>
    </div>
    <ul class="box itemList">
        <li class="item">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3DVDDgiIyTrqMcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMRgIUUt4g%2BVexq3IhSJN6GRSGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL48e3H%2BgcFtUtEew1By%2BI5k"> 
           <img src="http://logo.taobaocdn.com/shop-logo/63/a7/T1avvwFFRbXXartXjX.gif">
            韩都衣舍 </a>
        </li>
        <li class="item">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3D864AODx7okgcQipKwQzePDAVflQIoZepLKpWJ%2Bin0XJRAdhuF14FMa6TpZngWNi%2Fxq3IhSJN6GRSGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL6TURVOYrSGvq1D6OTudZOE"> 
           <img src="http://logo.taobaocdn.com/shop-logo/56/b6/T18BZAFddXXXb1upjX.jpg">
           茵曼正品品牌店 </a>
        </li>
        <li class="item">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3DMn3ojfV65BYcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMY88NDOibNoqt4hWD5k2kjNSGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL7ndTuVpBqf2QjEtJbkYGHm"> 
           <img src="http://logo.taobaocdn.com/shop-logo/01/39/T12apGFsdoXXb1upjX.jpg">
           伊芙丽旗舰店</a>
        </li>
        <li class="item">
           <a target="_bank" href="http://s.click.taobao.com/t?e=m%3D2%26s%3DTjFWCF8We5IcQipKwQzePDAVflQIoZepK7Vc7tFgwiFRAdhuF14FMWdhgu6c788d8sviUM61dt1SGnG0QQIwx0%2B%2BgSdx2DvQc0076v3lxL7xNOs2HzuGe%2BRe4afIL2q4"> 
           <img src="http://logo.taobaocdn.com/shop-logo/2b/87/TB1HtD3GXXXXXa_XFXXSutbFXXX.jpg">
           luxlead洛诗琳</a>
        </li>

        
       
        
    </ul>
</div>

<?php $content = file_get_contents("../cms/section/nvzhuang.json") ;
      $itemArray = json_decode($content, true);
?>

<!-- 内容商品区域 -->
<div class="row-fluid list-warp">
    <div class="topic">
        <span class="topic-icon">最新精选推荐</span>
    </div>
    <ul class="box itemList">
       <?php foreach ($itemArray as $key => $value):?>
        <li class="item">
            <div class="item-warp">
                <div class="pic-box">
                    <img src="<?php echo $value['image']?>">
                </div>
                <div class="prop-row" >
                    <div class="price"><?php echo $value['promotionPrice']?></div>
                </div>
                <div class="title">
                    <a href="<?php echo $value['unionLink']?>" target="_bank"><?php echo $value['title']?></a>
                    
                </div>
            </div>
        </li>
       <?php endforeach;?>
    </ul>
</div>
 
<!-- 页尾 -->
<div class="row-fluid index-footer" >
    <div class="footer-container">
        <div class="index-footer-section col-sm-3" style="border:none;">
            <h4>关于我们</h4>
            <div class="content">
                <a>关于我们</a>
                <a>帮助中心</a>
                <a>免责声明</a>
            </div>
        </div>
        <div class="index-footer-section col-sm-3">
            <h4>站内导航</h4>
            <div class="content">
                <a>关于我们</a>
                <a>帮助中心</a>
                <a>免责声明</a>
            </div>
        </div>
        <div class="index-footer-section col-sm-3">
            <h4>关注我们</h4>
            <div class="content">
                <a>关于我们</a>
                <a>帮助中心</a>
                <a>免责声明</a>
            </div>
        </div>
        <div class="index-footer-section col-sm-3">
            <h4>友情链接</h4>
            <div class="content">
                <a href="http://www.net-a-porter.com/" target="_bank">NetAPorter</a>
                <a href="http://www.meilishuo.com/" target="_bank">美丽说</a>
                <a>免责声明</a>
            </div>
        </div>
    </div>
</div>


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