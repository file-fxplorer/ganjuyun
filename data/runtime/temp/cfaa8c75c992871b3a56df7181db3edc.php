<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:30:"./template/pc/view_article.htm";i:1656473278;s:54:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/head.htm";i:1680489587;s:57:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/wapfoot.htm";i:1656470238;s:56:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/footer.htm";i:1679561265;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" class="desktop">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=no" />
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/amfe-flexible.js"></script>
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/reset.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animation.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/common.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/pace-theme-barber-shop.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/news.css">
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

<div class="banner">
  <picture>
    <source srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/banner-news-m.jpg" media="(max-width: 48em)">
    <img class="img-responsive" srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/banner-news.jpg"> </picture>
  <div class="banner_txt">
    <div class="DIV"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = $eyou['field']['parent_id']; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
      <div class="banner_txt1"><?php echo $field['typename']; ?></div>
      <div class="banner_txt2"><?php echo $field['seo_description']; ?></div>
      <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
  </div>
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

<article>
  <div class="menu menu-news-dtl container">
    <ul>
      <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "first", "cur", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li class="<?php echo $field2['currentstyle']; ?>">
        <div><a href="<?php echo $field2['typeurl']; ?>"><?php echo $field2['typename']; ?></a></div>
        <i></i> </li>
      <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="line"></div>
  <div class="news-all news-all-dtl">
    <div class="container">
      <div class="news-dtl">
        <h2 class="news-title"><?php echo $eyou['field']['title']; ?></h2>
        <div class="news-belong">
          <div class="belong-one"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/news-belong-1.png">发布时间：<?php echo MyDate('Y-m-d H:i',$eyou['field']['add_time']); ?></div>
          <div class="belong-one"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/news-belong-2.png">发布者：<?php echo $eyou['field']['author']; ?></div>
          <div class="belong-one"><img style="top: -1px;" src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/news-belong-3.png">浏览次数：<?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagArcclick = new \think\template\taglib\eyou\TagArcclick; $__VALUE__ = $tagArcclick->getArcclick($aid, "", ""); echo $__VALUE__; ?></div>
        </div>
        <div class="news-edit"> <?php echo $eyou['field']['content']; ?> </div>
      </div>
    </div>
  </div>
  <div class="news-ctrl">
    <div class="container"> <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?> <a class="news-ctrl-l" href='<?php echo $field['arcurl']; ?>' title='<?php echo $field['title']; ?>'><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ctrl-one-img-l.png"><span class="words">上一篇文章</span></a> <?php else: ?> <a class="news-ctrl-l"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ctrl-one-img-l.png"><span class="words">没有了</span></a> <?php endif; $field = [];  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 100, false); ?> <a class="news-ctrl-r" href='<?php echo $field['arcurl']; ?>' title='<?php echo $field['title']; ?>'><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ctrl-one-img-r.png"><span class="words">下一篇文章</span></a> <?php else: ?> <a class="news-ctrl-r"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ctrl-one-img-r.png"><span class="words">没有了</span></a> <?php endif; $field = []; ?> </div>
  </div>
</article>
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
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/main.js"></script>
</body>
</html>