<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('guide');
0
|| checktplrefresh('./template/wekei_touch_free/touch/forum/guide.htm', './template/default/touch/forum/guide_list_row.htm', 1596174477, '4', './data/template/4_4_touch_forum_guide.tpl.php', './template/wekei_touch_free', 'touch/forum/guide')
;?><?php include template('common/header'); ?><!-- header start -->

<!-- header end -->
<!-- main threadlist start -->
<div class="threadlist">
<h2 class="thread_tit">精彩热帖</h2><?php if(is_array($data)) foreach($data as $key => $list) { if($list['threadcount']) { ?>
<ul class="hotlist"><?php if(is_array($list['threadlist'])) foreach($list['threadlist'] as $key => $thread) { ?><li>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>&amp;fromguid=hot&amp;<?php if($_GET['archiveid']) { ?>archiveid=<?php echo $_GET['archiveid'];?>&amp;<?php } ?>extra=<?php echo $extra;?>">
<?php if(!$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])) { $thread[tid]=$thread[closed];?><?php } ?>
<?php echo $thread['typehtml'];?> <?php echo $thread['sorthtml'];?>
<?php echo $thread['subject'];?>
<span class="by"><?php echo $thread['author'];?></span>
<span class="num"><?php if($thread['isgroup'] != 1) { ?><?php echo $thread['replies'];?><?php } else { ?><?php echo $groupnames[$thread['tid']]['replies'];?><?php } ?></span>
<?php if($thread['digest'] > 0) { ?>
<span class="icon_top"><img src="<?php echo STATICURL;?>image/mobile/images/icon_digest.png"></span>
<?php } elseif($thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0) { ?>
<span class="icon_tu"><img src="<?php echo STATICURL;?>image/mobile/images/icon_tu.png"></span>
<?php } ?>
</a>
</li>
<?php } ?>
</ul>
<?php } else { ?>
<p>暂时还没有帖子</p>
<?php } } ?>

</div>
<!-- main threadlist end -->

<?php echo $multipage;?>

<div class="pullrefresh" style="display:none;"></div><?php include template('common/footer'); ?>