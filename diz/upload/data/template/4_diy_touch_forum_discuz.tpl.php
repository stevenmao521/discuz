<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');
0
|| checktplrefresh('./template/wekei_touch_free/touch/forum/discuz.htm', './template/wekei_touch_free/touch/common/vk_slide.htm', 1596174477, 'diy', './data/template/4_diy_touch_forum_discuz.tpl.php', './template/wekei_touch_free', 'touch/forum/discuz')
;?>
<?php if($_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1) { dheader('Location:forum.php?mod=guide&view=hot');exit;?><?php } include template('common/header'); ?><script type="text/javascript">
function getvisitclienthref() {
var visitclienthref = '';
if(ios) {
visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
} else if(andriod) {
visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
}
return visitclienthref;
}
</script>

<?php if($_GET['visitclient']) { } else { ?>

<!-- header start -->
<?php if($showvisitclient) { } ?>

<header class="header">
<div class="hdc cl">
</div>
</header>
<!-- header end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_top_mobile'])) echo $_G['setting']['pluginhooks']['index_top_mobile'];?>





<!-- main forumlist start -->

<!-- 幻灯模块 --><!--
[未来科技_手机]帖子图片幻灯-左右切换-自适应
-->
<style type="text/css">
.hdc { margin-bottom: 0px; }

.vk_slide { position:relative; overflow:hidden; margin:0 auto; max-width:100%; height: 160px; clear:both; }
.vk_slide .hd { position:absolute; height:28px; line-height:28px; bottom:0; right:0; z-index:1; }
.vk_slide .hd li { display:inline-block; width:8px; height:8px; border-radius:8px; background:#fff; box-shadow: 1px 1px 2px rgba(0,0,0,0.4); margin:0 5px; overflow: hidden; opacity: 0.8; }
.vk_slide .hd li.on { background:#0ad; }
.vk_slide .bd { position:relative; z-index:0; }
.vk_slide .bd li { position:relative; text-align:center; }
.vk_slide .bd li img { vertical-align:top; width:100%; overflow: hidden; }
.vk_slide .bd li a { -webkit-tap-highlight-color:rgba(0,0,0,0); } 
/*
.vk_slide .bd li .title { display:block; width:100%; position:absolute; top:132px; text-indent:10px; height:28px; line-height:28px; background:rgba(0,0,0,0.4) ; color:#fff; text-align:left; }
*/
</style>

<div id="slideBox" class="vk_slide">

<div class="bd">
<ul>
<li>
<a href="#" <?php echo target;?> title="<?php echo title;?>"><img src="<?php echo $_G['style']['styleimgdir'];?>/a_d_0.jpg" /></a>
</li>
<li>
<a href="#" <?php echo target;?> title="<?php echo title;?>"><img src="<?php echo $_G['style']['styleimgdir'];?>/a_d_1.jpg" /></a>
</li>
<li>
<a href="#" <?php echo target;?> title="<?php echo title;?>"><img src="<?php echo $_G['style']['styleimgdir'];?>/a_d_2.jpg" /></a>
</li>
<li>
<a href="#" <?php echo target;?> title="<?php echo title;?>"><img src="<?php echo $_G['style']['styleimgdir'];?>/a_d_4.jpg" /></a>
</li>
</ul>
</div>

<div class="hd"><ul></ul></div>

</div>
<!-- 幻灯用到的js文件。 这行代码要放到调用本幻灯模块的文件里 -->
<script src="<?php echo $_G['style']['styleimgdir'];?>/vk_slide.js" type="text/javascript"></script> 
<script type="text/javascript">
TouchSlide({ 
slideCell:"#slideBox",
titCell:".hd ul", 
mainCell:".bd ul", 
effect:"leftLoop", 
autoPage:true,
autoPlay:true 
});
</script>
<!-- 统计模块 -->
<div class="wp vk_forum_num">
<ul>
<li class="vk_stats_icon_1"> 今日: <em><?php echo $todayposts;?></em> </li>
<li class="vk_stats_icon_2"> 昨日: <em><?php echo $postdata['0'];?></em></li>
<li class="vk_stats_icon_3"> 帖子: <em><?php echo $posts;?></em></li>
<li class="vk_stats_icon_4"> 会员: <em><?php echo $_G['cache']['userstats']['totalmembers'];?></em></li>
</ul>
</div>



<div class="wp" id="wp"><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><div class="bm bmw fl">
<div class="subforumshow bm_h cl" href="#sub_forum_<?php echo $cat['fid'];?>">
<span class="o"><img  width="50" height="26"  src="<?php echo $_G['style']['styleimgdir'];?>/collapsed_<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>yes<?php } else { ?>no<?php } ?>.png"/></span>
<h2><a href="javascript:;"><?php echo $cat['name'];?></a></h2>
</div>
<div id="sub_forum_<?php echo $cat['fid'];?>" class="sub_forum bm_c vk_forum ">
<ul><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><li class="vk_bg_none vk_pic_hd cl">
  <?php if($forum['icon']) { ?> 
  <?php echo $forum['icon'];?> 
  <?php } else { ?> 
  <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>">
  <img src="<?php echo $_G['style']['styleimgdir'];?>/forum.png" /> 
  </a>
  <?php } ?> 
  <p class="vk_forum_name"><a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><?php if($forum['todayposts'] > 0) { ?><span class="num"><?php echo $forum['todayposts'];?></span><?php } ?><?php echo $forum['name'];?></a></p>
                      <p class="vk_forum_time"><span >主题 <?php echo $forum['threads'];?> &nbsp; 帖子 <?php echo $forum['posts'];?> </span> 							

</li>
<?php } ?>
</ul>
</div>
</div>
<?php } ?>
</div>
<!-- main forumlist end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?>
<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.sub_forum').css('display', 'block');
<?php } else { ?>
$('.sub_forum').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
obj.find('img').attr('src', '<?php echo $_G['style']['styleimgdir'];?>/collapsed_yes.png');
} else {
subobj.css('display', 'none');
obj.find('img').attr('src', '<?php echo $_G['style']['styleimgdir'];?>/collapsed_no.png');
}
});
 })();
</script>

<?php } include template('common/footer'); ?>