<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); /*=============我收藏的版块=============*/?><?php if(empty($gid) && !empty($forum_favlist)) { ?>
<div class="mwt-panel">
<div class="head mwt-row">
<div class="mwt-col-10">
<a class="mwt-panel-title" href="home.php?mod=space&amp;do=favorite&amp;type=forum">我收藏的版块</a>
</div>
<div class="mwt-col-2 rt">
<img id="category_0_img" class="toggle-btn" src="<?php echo $staticdir;?>/imgs/<?php echo $collapse['collapseimg_0'];?>"
 title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_0');" />
</div>
</div>
<div class="body" id="category_0" style="<?php echo $collapse['category_0']; ?>;padding:0;">
<ul class="cate-forum-list"><?php $favorderid = 0;?><?php if(is_array($forum_favlist)) foreach($forum_favlist as $key => $favorite) { if($favforumlist[$favorite['id']]) { $forum=$favforumlist[$favorite[id]];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? $_G['scheme'].'://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><li>
<div class="forum-icon">
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<div class="forum-info">
<a class="forum-name"  href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a>
<p class="forum-summary">
今日: <em style="color:#cd3c39"><?php echo dnumber($forum['todayposts']); ?></em>
主题: <em><?php echo dnumber($forum['threads']); ?></em>
帖数: <em><?php echo dnumber($forum['posts']); ?></em>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } ?>
</p>
<?php if(!empty($_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_favforum_extra'][$forum[fid]];?>
</div>
</li>
<?php } } ?>
</ul>
</div>
</div><?php echo adshow("intercat/bm a_c/-1");?><?php } /*=============版块区域列表=============*/?><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><?php if(!empty($_G['setting']['pluginhooks']['index_catlist'][$cat[fid]])) echo $_G['setting']['pluginhooks']['index_catlist'][$cat[fid]];?>
<div class="mwt-panel" id="index-category-<?php echo $fid;?>"><?php /*=============版块区域头部=============*/?><div class="head mwt-row">
<div class="mwt-col-10">
<?php if($cat['moderators']) { ?><span class="y">分区版主: <?php echo $cat['moderators'];?></span><?php } $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? $_G['scheme'].'://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';?><a class="mwt-panel-title" href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>"
   style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>"><?php echo $cat['name'];?></a>
</div>

<div class="mwt-col-2 rt">
<img id="category_<?php echo $cat['fid'];?>_img" class="toggle-btn"
 src="<?php echo $staticdir;?>/imgs/<?php echo $cat['collapseimg'];?>"
 title="收起/展开" alt="收起/展开" onclick="toggle_collapse('category_<?php echo $cat['fid'];?>');" />
</div>
</div><?php /*=============版块区域内容（版块列表）=============*/?><div class="body" id="category_<?php echo $cat['fid'];?>" style="<?php echo $collapse['category_'.$cat['fid']]; ?>;padding:0;">
<ul class="cate-forum-list"><?php if(is_array($cat['forums'])) foreach($cat['forums'] as $idx => $forumid) { $forum=$forumlist[$forumid];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? $_G['scheme'].'://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><li>
<div class="forum-icon">
<?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } ?>><img src="<?php echo IMGDIR;?>/forum<?php if($forum['folder']) { ?>_new<?php } ?>.gif" alt="<?php echo $forum['name'];?>" /></a>
<?php } ?>
</div>
<div class="forum-info">
<a class="forum-name"  href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?>><?php echo $forum['name'];?></a>
<p class="forum-summary">
今日: <em style="color:#cd3c39"><?php echo dnumber($forum['todayposts']); ?></em>
主题: <em><?php echo dnumber($forum['threads']); ?></em>
帖数: <em><?php echo dnumber($forum['posts']); ?></em>
<?php if($forum['permission'] == 1) { ?>
私密版块
<?php } ?>
</p>
<?php if(!empty($_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]])) echo $_G['setting']['pluginhooks']['index_forum_extra'][$forum[fid]];?>
</div>
</li>
<?php } ?>
</ul>
</div>
</div><?php echo adshow("intercat/bm a_c/$cat[fid]");?><?php } ?>