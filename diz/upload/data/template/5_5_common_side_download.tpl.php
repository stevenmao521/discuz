<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); /*=============首页官方应用下载=============*/?><?php $downapplist=array(
    array(
        "icon" => "http://img.shawsen.com/discuz/jiaocheng.png",
        "title" => "<b style='color:red;font-size:14px;'>修改此处数据</b>",
        "subtitle" => "编辑文件common/side_download.htm",
        "url" => "http://www.mawentao.com/thread-771-1-1.html",
    ),
    array(
        "icon" => "https://addon.dismall.com/static/img/admin_plugin_logo.png",
        "title" => "Discuz!应用中心",
        "subtitle" => "addon.dismall.com",
        "url" => "https://addon.dismall.com/",
    ),
    array(
        "icon" => "http://www.mawentao.com/template/mistyle/static/imgs/logo_footer.png",
        "title" => "MWT-Design",
        "subtitle" => "上万安装量的Discuz应用开发者",
        "url" => "https://addon.dismall.com/?@51983.developer",
    ),
    array(
        "icon" => "https://addon.dismall.com/resource/template/bigstyle.jpg",
        "title" => "BigStyle手机模板",
        "subtitle" => "简洁大气的仿手机APP模板",
        "url" => "https://addon.dismall.com/?@bigstyle.template",
    ),
    array(
        "icon" => "https://addon.dismall.com/resource/template/mistyle.jpg",
        "title" => "小米社区风格模板",
        "subtitle" => "高仿小米社区模板",
        "url" => "https://addon.dismall.com/?@mistyle.template",
    ),
);?><div class="mwt-panel">
    <div class="head">官方应用下载</div>
    <div class="body" style="padding-top:0;">
        <ul class="downul">
        <?php if(is_array($downapplist)) foreach($downapplist as $downapp) { ?>            <li>
                <a href="<?php echo $downapp['url'];?>" target="_blank"><img src="<?php echo $downapp['icon'];?>"></a>
                <div class="content">
                    <a href="<?php echo $downapp['url'];?>" target="_blank"><?php echo $downapp['title'];?></a>
                    <span><?php echo $downapp['subtitle'];?></span>
                </div>
            </li>
        <?php } ?>
        </ul>
    </div>
</div>
