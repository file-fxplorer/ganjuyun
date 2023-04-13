<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:23:"./template/pc/index.htm";i:1679972180;s:54:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/head.htm";i:1680489587;s:57:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/wapfoot.htm";i:1656470238;s:56:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/footer.htm";i:1679561265;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" class="desktop enhanced-gallery">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=no" />
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/amfe-flexible.js"></script>
<title><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?>_<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
<meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>" />
<meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/reset.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animation.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/main.built.css"/>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/pace-theme-barber-shop.css"/>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/common.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/case.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/index.css"/>
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_ico"); echo $__VALUE__; ?>" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
<div class="neirong neirong-hide">
  <div class="neirong-bd"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>" class="neirong-on">首页</a> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "thisclass", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a class="<?php echo $field['currentstyle']; ?>" href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?><i></i></a> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
</div>
<div class="content nav-here">
  <div class="gf-logo">
    <h1><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>" title="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"></a></h1>
  </div>
  <header class="gf-header gf-header-side">
    <nav class="gf-pnav black"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"  class="neirong-on">首页<i></i></a> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "thisclass", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a class="<?php echo $field['currentstyle']; ?>" href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?><i></i></a> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </nav>
    <section class="buttonset buttonset-black">
      <div class="nav-moblie"><a href="javascript:;"></a></div>
    </section>
  </header>
</div>
<div class="fix-nav-btm"> <a style="color:#828282" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?>&amp;site=qq&amp;menu=yes">
  <div class="fnb-one" id="J-call-qq">
    <div class="fnb-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/fnb-one-img-1.png"></div>
    <div class="fnb-one-desc">QQ联系<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/fnb-one-img-arrow.png"></div>
  </div>
  </a> <a style="color: #828282" href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?>">
  <div class="fnb-one">
    <div class="fnb-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/fnb-one-img-2.png"></div>
    <div class="fnb-one-desc">电话联系<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/fnb-one-img-arrow.png"></div>
  </div>
  </a> <a style="color: #828282" href="tel:<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>">
  <div class="fnb-one">
    <div class="fnb-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/fnb-one-img-3.png"></div>
    <div class="fnb-one-desc">手机联系<img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/fnb-one-img-arrow.png"></div>
  </div>
  </a> </div>

<div class="navbar-fixed">
  <div class="container">
    <div class="logo pull-left"><a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>"/></a></div>
    <div class="right_menu pull-right hidden-xs"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_basehost"); echo $__VALUE__; ?>"  class="neirong-on">首页<i></i></a> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "thisclass", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a class="<?php echo $field['currentstyle']; ?>" href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?><i></i></a> <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
  </div>
</div>
<aside class="aside-nav" style="opacity: 1">
  <div class="aside-nav-in">
    <!--<div class="aside-nav-one more-width more-width-call"><a href="javascript:;">
      <div class="aside-nav-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/icon_phone.png"></div>
      <div class="aside-nav-one-desc"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></div>
      </a></div>-->
    <div class="aside-nav-one more-width more-width-qq">
      <!--<div class="aside-nav-one-img"><img src="https://img.alicdn.com/imgextra/i3/2/O1CN01CKBp7N1EA1bbr1LWl_!!2-rate.png_40x40.jpg"></div>-->
      <div class="aside-nav-one-desc">
        <div class="qq-name-box">
          <div class="qq-name"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?>" target="_blank" target="_blank"> <i style="background: url('https://img.alicdn.com/imgextra/i3/2/O1CN01CKBp7N1EA1bbr1LWl_!!2-rate.png_40x40.jpg') no-repeat center/contain;"></i> <span>管理面板</span> </a> </div>
          <div class="qq-name"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?>" target="_blank" target="_blank"> <i style="background: url('https://img.alicdn.com/imgextra/i3/2/O1CN01TNdkDy1EA1bb19oBV_!!2-rate.png') no-repeat center/contain;"></i> <span>GitHub</span> </a> </div>
          <div class="qq-name"> <a href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?>" target="_blank" target="_blank"> <i style="background: url('https://img.alicdn.com/imgextra/i2/2/O1CN01Qb8jQ31EA1bkbh8ww_!!2-rate.png') no-repeat center/contain;"></i> <span>客服</span> </a> </div>
        </div>
      </div>
    </div>
    <div class="aside-nav-one more-width back-top"><a href="javascript:;">
      <div class="aside-nav-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/icon_top.png"></div>
      <div class="aside-nav-one-desc">返回顶部</div>
      </a></div>
  </div>
</aside>

<article class="gallery-container" data-analytics-region="hero">
  <div id="homepage-gallery" class="gallery with-paddlenav">
    <nav class="paddlenav paddlenav-framed paddlenav-short paddlenav-circle">
      <ul>
        <li class="paddlenav-arrow-container paddlenav-arrow-container-previous">
          <button class="paddlenav-arrow paddlenav-arrow-previous" aria-label="Previous" data-ac-gallery-previous-trigger="homepage-gallery"><span class="arrow-icon arrow-icon-previous"></span></button>
        </li>
        <li class="paddlenav-arrow-container paddlenav-arrow-container-next">
          <button class="paddlenav-arrow paddlenav-arrow-next" aria-label="Next" data-ac-gallery-next-trigger="homepage-gallery"><span class="arrow-icon arrow-icon-next"></span></button>
        </li>
      </ul>
    </nav>
    <nav class="dashnav dot-nav">
      <ul role="tablist">
        <li role="presentation"><a href="#homepage-gallery-iphone" data-ac-gallery-trigger="homepage-gallery-iphone" class="dashnav-item">
          <div class="dashnav-dash"> <span class="dashnav-progress"></span> </div>
          </a> </li>
        <li role="presentation"><a href="#homepage-gallery-madeincny" data-ac-gallery-trigger="homepage-gallery-madeincny" class="dashnav-item current">
          <div class="dashnav-dash"> <span class="dashnav-progress"></span> </div>
          </a> </li>
        <li role="presentation"><a href="#homepage-gallery-watch" data-ac-gallery-trigger="homepage-gallery-watch" class="dashnav-item">
          <div class="dashnav-dash"> <span class="dashnav-progress"></span> </div>
          </a> </li>
        <li role="presentation"><a href="#homepage-gallery-macbookpro" data-ac-gallery-trigger="homepage-gallery-macbookpro" class="dashnav-item current">
          <div class="dashnav-dash"> <span class="dashnav-progress"></span> </div>
          </a></li>
      </ul>
    </nav>
    <div class="gallery-slide-wrapper"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "28"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 1; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '28',
  'limit' => '0,1',
  'titlelen' => '50',
  'orderby' => 'pubdate',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "pubdate", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a href="javascript:;" id="homepage-gallery-iphone" class="block gallery-item gallery-item-static gallery-item-iphone-alt gallery-item-dark" data-ac-gallery-item aria-label="iPhone. This is 7.">
      <div class="gallery-item-content">
        <div class="gallery-item-lockup-wrapper">
          <h1 class="homepage-headline" aria-hidden="true"><?php echo $field['title']; ?></h1>
          <p class="intro"> <?php echo $field['seo_description']; ?> </p>
        </div>
      </div>
      <figure class="gallery-image gallery-image-iphone-alt" style="background-image: url(<?php echo $field['litpic']; ?>);"></figure>
      <picture>
        <source srcset="<?php echo $field['litpic']; ?>" media="(max-width: 48em)">
        <img class="img-responsive" srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/null.png"> </picture>
      </a> <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "28"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 2; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '28',
  'limit' => '1,2',
  'titlelen' => '50',
  'orderby' => 'pubdate',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "pubdate", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],1, $row, true) : $_result["list"]->slice(1, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a href="javascript:;" id="homepage-gallery-madeincny" class="block gallery-item gallery-item-static gallery-item-madeincny gallery-item-dark" data-ac-gallery-item aria-label="Made in CNY">
      <div class="gallery-item-content">
        <div class="gallery-item-lockup-wrapper">
          <h1 class="homepage-headline" aria-hidden="true"><?php echo $field['title']; ?></h1>
          <p class="intro"> <?php echo $field['seo_description']; ?> </p>
        </div>
      </div>
      <figure class="gallery-image gallery-image-madeincny" style="background-image: url(<?php echo $field['litpic']; ?>);"></figure>
      <picture>
        <source srcset="<?php echo $field['litpic']; ?>" media="(max-width: 48em)">
        <img class="img-responsive" srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/null.png"> </picture>
      </a> <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "28"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '28',
  'limit' => '2,3',
  'titlelen' => '50',
  'orderby' => 'pubdate',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "pubdate", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],2, $row, true) : $_result["list"]->slice(2, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a href="javascript:;" id="homepage-gallery-watch" class="block gallery-item gallery-item-watch gallery-item-dark" data-ac-gallery-item aria-label="Apple Watch Series 2. Introducing Series 2.">
      <div class="gallery-item-content">
        <div class="gallery-item-lockup-wrapper">
          <h1 class="homepage-headline" aria-hidden="true"><?php echo $field['title']; ?></h1>
          <p class="intro"> <?php echo $field['seo_description']; ?> </p>
        </div>
      </div>
      <figure class="gallery-image gallery-image-watch-alt" style="background-image: url(<?php echo $field['litpic']; ?>);"></figure>
      <picture>
        <source srcset="<?php echo $field['litpic']; ?>" media="(max-width: 48em)">
        <img class="img-responsive" srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/null.png"> </picture>
      </a> <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "28"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 4; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '28',
  'limit' => '3,4',
  'titlelen' => '50',
  'orderby' => 'pubdate',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "pubdate", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],3, $row, true) : $_result["list"]->slice(3, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?> <a href="javascript:;" id="homepage-gallery-macbookpro" class="block gallery-item gallery-item-macbookpro gallery-item-dark" data-ac-gallery-item aria-label="MacBook Pro. A touch of genius.">
      <div class="gallery-item-content">
        <div class="gallery-item-lockup-wrapper">
          <h1 class="homepage-headline" aria-hidden="true"><?php echo $field['title']; ?></h1>
          <p class="intro"> <?php echo $field['seo_description']; ?> </p>
        </div>
      </div>
      <figure class="gallery-image gallery-image-macbookpro" style="background-image: url(<?php echo $field['litpic']; ?>);"></figure>
      <picture>
        <source srcset="<?php echo $field['litpic']; ?>" media="(max-width: 48em)">
        <img class="img-responsive" srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/null.png"> </picture>
      </a> <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
  </div>
</article>
<div class="business_section">
  <div class="container">
    <div class="business_warp"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "17"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
      <div class="menu_tit1 wow fadeInUp4" data-wow-duration="1.2s" data-wow-delay=".1s"><?php echo $field['typename']; ?></div>
      <div class="menu_tit2 wow fadeInUp5" data-wow-duration="1.2s" data-wow-delay=".35s"><?php echo $field['seo_description']; ?></div>
      <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      <div class="business_list">
        <ul class="row shadow-grid p-h-s m-v-l">
          <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "17"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li class="col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInUp3" data-wow-duration="1.7s" data-wow-delay=".2s"> <a href="javascript:void(0)" class="p-s">
            <!--<div class="business_icon">
              <div class="red-bak"></div>
              <span class="icon icon<?php echo $i; ?>"></span> </div>-->
            <div class="business_txt cur">
              <h2><b><?php echo $field['typename']; ?></b></h2>
              <p class="h5"><?php echo $field['seo_description']; ?></p>
            </div>
            </a> </li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="counters">
  <div class="counter_con">
    <div class="con-tit con-tit2">
      <div class="tit_txt1 wow fadeInUp4" data-wow-duration="1.2s" data-wow-delay=".1s">3年时间&nbsp;&nbsp;<span class="br-m">80位同事&nbsp;&nbsp;</span><span class="br-m">1000个日夜</span></div>
      <div class="tit_txt2 wow fadeInUp5" data-wow-duration="1.2s" data-wow-delay=".4s">我们拥有一支经验丰富、眼光独到、自信尽职、专业创新的团队，凭着多年的实践经验，一直坚持高水准的服务标准。我们在为您做的，不仅仅是一次服务，而是与您一起，缔造一个属于您的隐匿网络</div>
    </div>
  </div>
  <div class="full_section_inner">
    <div class="counter_list  clearfix">
      <ul class="row">
        <li class="col-md-2 col-sm-2 col-xs-4">
          <div class="q_counter_holder wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s"> <span class="counter counter1" id="count-number" data-to="560" data-speed="1000">0</span>&nbsp;<span class="unit">位</span>
            <p class="counter_text">500+客户信赖之选</p>
          </div>
        </li>
        <li class="col-md-2 col-sm-2 col-xs-4">
          <div class="q_counter_holder wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s"> <span class="counter counter2" id="count-number" data-to="100" data-speed="1500">0</span>&nbsp;<span class="unit">家</span>
            <p class="counter_text">100+服务商支持</p>
          </div>
        </li>
        <li class="col-md-2 col-sm-2 col-xs-4">
          <div class="q_counter_holder wow fadeIn" data-wow-duration="1s" data-wow-delay=".9s"> <span class="counter counter3" id="count-number" data-from="2000" data-to="300" data-speed="2000">0</span>&nbsp;<span class="unit">个</span>
            <p class="counter_text">300+节点使用</p>
          </div>
        </li>
        <li class="col-md-2 col-sm-2 col-xs-4">
          <div class="q_counter_holder wow fadeIn" data-wow-duration="1s" data-wow-delay="1.3s"> <span class="counter">0</span><span class="counter counter4" id="count-number" data-to="3" data-speed="2500">0</span>&nbsp;<span class="unit">年</span>
            <p class="counter_text">时间的专注和沉淀</p>
          </div>
        </li>
        <li class="col-md-2 col-sm-2 col-xs-4">
          <div class="q_counter_holder wow fadeIn" data-wow-duration="1s" data-wow-delay="1.7s"> <span class="counter counter5" id="count-number" data-to="97" data-speed="3000">0</span>&nbsp;<span class="unit">%</span>
            <p class="counter_text">以上的客户满意度</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="box-shadow"></div>
  <!--背景视频-->
  <video loop poster="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/propaganda.jpg" id="bgvid" class="bg_video">
    <source src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/propaganda.mp4" type="video/mp4">
  </video>
</div>
<div class="product">
  <!--<div class="product_txt container"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "5"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
    <div class="product_txt1 wow fadeInUp4" data-wow-duration="1.2s" data-wow-delay=".1s"><?php echo $field['typename']; ?><span class="br-m"></span></div>
    <div class="product_txt2 wow fadeInUp5" data-wow-duration="1.2s" data-wow-delay=".35s"><?php echo $field['seo_description']; ?></div>
    <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>-->
  <!--<div class="case_list container">
    <ul class="row">
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "5"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '5',
  'row' => '6',
  'titlelen' => '50',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li class="col-xs-6 col-sm-4 col-md-4 col-lg-4"> <a href="<?php echo $field['arcurl']; ?>">
        <div class="case_img hover-shadow"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/loading.gif" data-original="<?php echo $field['litpic']; ?>" class="img-responsive lazy"/>
          <div class="case_cover"></div>
        </div>
        </a>
        <div class="case_txt">
          <div class="case-left case_name"><?php echo $field['title']; ?></div>
          <div class="case-right category">类别：<?php echo $field['typename']; ?></div>
          <div class="clearfix"></div>
        </div>
      </li>
      <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </ul>
    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "5"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?> <a href="<?php echo $field['typeurl']; ?>" class="more_button"> <i></i>
    <div class="dot1"><span>•</span><span>•</span><span>•</span></div>
    <div class="dot2"><span>•</span><span>•</span><span>•</span></div>
    </a><?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>-->
</div>
<div class="line"></div>
<!--<div class="container demand grey-m">
  <div class="demand_txt">
    <div class="demand_txt1 wow fadeInUp4" data-wow-duration="1.2s" data-wow-delay=".1s">他们成就了我们，我们为他们创造价值</div>
    <div class="demand_txt2 wow fadeInUp5" data-wow-duration="1.2s" data-wow-delay=".35s">最终我们成为了朋友，为朋友做事，我们两肋插刀</div>
    <div class="demand-m">
      <p class="p-1">他们成就了我们</p>
      <p class="p-1">我们为他们创造价值</p>
    </div>
  </div>
  <div class="demand_con">
    <div class="row">
      <div class="demand_left col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="demand-logo-list">
          <div class="demand-logo-one">
            <div class="demand-logo-one-img demand-logo-one-img-1 letmove"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/demand-logo-one-img-1.jpg"></div>
            <div class="demand-logo-one-desc demand-logo-one-desc-1 letmove"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/demand-logo-one-desc-1.jpg"></div>
          </div>
          <div class="demand-logo-one">
            <div class="demand-logo-one-img demand-logo-one-img-2 letmove"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/demand-logo-one-img-2.jpg"></div>
            <div class="demand-logo-one-desc demand-logo-one-desc-2 letmove"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/demand-logo-one-desc-2.jpg"></div>
          </div>
          <div class="demand-logo-one">
            <div class="demand-logo-one-desc demand-logo-one-desc-3 letmove"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/demand-logo-one-desc-3.jpg"></div>
            <div class="demand-logo-one-img demand-logo-one-img-3 letmove"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/demand-logo-one-img-3.jpg"></div>
          </div>
          <div class="demand-logo-one">
            <div class="demand-logo-one-desc demand-logo-one-desc-4 letmove"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/demand-logo-one-desc-4.jpg"></div>
            <div class="demand-logo-one-img demand-logo-one-img-4 letmove"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/demand-logo-one-img-4.jpg"></div>
          </div>
        </div>
      </div>
      <div class="demand_right col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="demand_warp">
          <div class="demand_reminder">朋友，请填写您的需求提交给我们</div>
          <?php  $typeid = "27"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagGuestbookform = new \think\template\taglib\eyou\TagGuestbookform; $_result = $tagGuestbookform->getGuestbookform($typeid, "default", "", 0); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <form class="demand_form" method="POST" <?php echo $field['formhidden']; ?> action="<?php echo $field['action']; ?>"  onsubmit="<?php echo $field['submit']; ?>">
            <div class="row">
              <div class="demand_ipt col-sm-6 col-md-6 col-lg-6">
                <input type="text" name='<?php echo $field['attr_1']; ?>' id="name" class="form-control" placeholder="称呼姓名"/>
              </div>
              <div class="demand_ipt col-sm-6 col-md-6 col-lg-6">
                <input type="text" name="<?php echo $field['attr_2']; ?>" id="tel" class="form-control" placeholder="联系电话"/>
              </div>
            </div>
            <div class="demand_ipt">
              <textarea maxLength="1000" name='<?php echo $field['attr_3']; ?>' id="content" class="form-control" placeholder="描述您的需求，如网站、微信、H5页面、电商等"></textarea>
            </div>
            <div class="send btn-circle">
              <input type="submit" name="submit" value="提交项目需求"/>
              <i class="btn-circle-hover"></i></i><i class="btn-circle-click"></i></div>
            <div class="demand-m">
              <p class="p-2">*请认真填写需求信息，我们会在24小时内与您取得联系。</p>
            </div>
            <?php echo $field['hidden']; ?>
          </form>
          <?php ++$e; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
      </div>
    </div>
  </div>
</div>-->
<br />
<div class="index-news container letmove">
  <div class="index-news-list-all"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "11"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 );  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <div class="index-news-list">
      <h3><?php echo $field['typename']; ?></h3>
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = $field['typeid']; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 3; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '$field.typeid',
  'row' => '3',
  'titlelen' => '50',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <div class="index-news-one"><a class="inews-one-l" href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a> <span class="inews-one-r">[<?php echo MyDate('Y-m-d',$field['add_time']); ?>]</span> </div>
      <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?> </div>
  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "11"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?> <a href="<?php echo $field['typeurl']; ?>" class="more_button"> <i></i>
  <div class="dot1"><span>•</span><span>•</span><span>•</span></div>
  <div class="dot2"><span>•</span><span>•</span><span>•</span></div>
  </a><?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
<footer>
  <div class="m-totop">返回顶部</div>
  <div class="container">
    <div class="footer-l">
      <ul>
        <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "top",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li>
          <dl>
            <dt> <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></a> <i class="f-arrow"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/f-arrow.png"></i> </dt>
            <div class="footer-sub-menu"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "son", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
              <dd><a href="<?php echo $field['typeurl']; ?>"><?php echo $field['typename']; ?></a></dd>
              <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
          </dl>
        </li>
        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
      </ul>
    </div>
    <div class="footer-r">
      <div class="f-share"> <a class="f-share-one" href="javascript:;"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/f-share-one-1.png">
        <div class="fs-one-qrcode"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_8"); echo $__VALUE__; ?>"></div>
        </a> <a class="f-share-one" href="javascript:;"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/f-share-one-1.png">
        <div class="fs-one-qrcode"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_8"); echo $__VALUE__; ?>"></div>
        </a><a class="" href="javascript:;">
        <div class="fs-one-qrcode"></div>
        </a> </div>
      <div class="f-belongs">
        <div class="f-belongs-one">Tel-A：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></div>
        <div class="f-belongs-one">Tel-B：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?></div>
        <div class="f-belongs-one">E-Mail：<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?></div>
        <div class="f-belongs-one"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_3"); echo $__VALUE__; ?></div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="copyright-l">
        <h2>友情链接：</h2>
        <ul>
          <?php  $tagFlink = new \think\template\taglib\eyou\TagFlink; $_result = $tagFlink->getFlink("text", "0,20", "1"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 20, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li> <a href="<?php echo $field['url']; ?>" target="_blank"><?php echo $field['title']; ?></a> </li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
      </div>
      <div class="copyright-r"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_9"); echo $__VALUE__; ?>&nbsp;&nbsp;&nbsp;<span class="cip-r"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></span></div>
    </div>
  </div>
</footer>
 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.min.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/bootstrap.min.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.lazyload.min.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.scrollup.min.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/wow.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/main.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/pace.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/index.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/head.built.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/main.built.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/count.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/message.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/load.js"></script> 
<script> $(document).ready(function () {if ($('html').hasClass('desktop')) {new WOW().init(); } }); </script>
</body>
</html>