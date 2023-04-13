<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:37:"./template/pc/lists_article_image.htm";i:1656473574;s:54:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/head.htm";i:1656470240;s:57:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/wapfoot.htm";i:1656470238;s:54:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/form.htm";i:1656472898;s:56:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/footer.htm";i:1679555320;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" class="desktop">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="format-detection" content="telephone=no" />
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/amfe-flexible.js"></script>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animation.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/common.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/case.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/pace-theme-barber-shop.css" />
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
    <div class="aside-nav-one more-width more-width-call"><a href="javascript:;">
      <div class="aside-nav-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/icon_phone.png"></div>
      <div class="aside-nav-one-desc"><?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></div>
      </a></div>
    <div class="aside-nav-one more-width more-width-qq">
      <div class="aside-nav-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/icon_qq.png"></div>
      <div class="aside-nav-one-desc">
        <div class="qq-name-box">
          <div class="qq-name"> <a href="tencent://message/?uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?>"> <i style=""></i> <span>客服一</span> </a> </div>
          <div class="qq-name"> <a href="tencent://message/?uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_6"); echo $__VALUE__; ?>"> <i style="background: url('<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/icon_qq.png') no-repeat center/contain;"></i> <span>客服二</span> </a> </div>
          <div class="qq-name"> <a href="tencent://message/?uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_7"); echo $__VALUE__; ?>"> <i style="background: url('<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/icon_qq.png') no-repeat center/contain;"></i> <span>客服三</span> </a> </div>
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
    <source srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/banner-case-m.jpg" media="(max-width: 48em)">
    <img class="img-responsive" srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/banner.jpg"> </picture>
  <div class="banner_txt">
    <div class="DIV">
      <div class="banner_txt1">所有经典，源于极致追求</div>
      <div class="banner_txt2">一直向着“做业内一流的互联网设计团队”这一愿景努力，致力于不断提升对网站高端设计，微信公众号/小程序开发等产品的用户体验</div>
    </div>
  </div>
</div>
<article>
  <div class="product">
    <div class="menu container">
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
    <div class="case_list container">
      <ul class="row">
        <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "keyword"=> "",      "idlist"=> "",      "idrange"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 6, "", "", "desc", "on","off","");if(!empty($_result_tmp) && (is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
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
      <div class="pagination-wrapper">
        <div class="pagination">  <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eyou\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,end,pre,next,pageno", "5"); echo $__VALUE__; ?> </div>
      </div>
    </div>
  </div>
  <div class="line"></div>
<div class="container demand grey-m">
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
        </a> <a class="f-share-one" href="javascript:;"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/f-share-one-2.png">
        <div class="fs-one-qrcode"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_8"); echo $__VALUE__; ?>"></div>
        </a> <a class="f-share-one" href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_5"); echo $__VALUE__; ?>&amp;site=qq&amp;menu=yes" target="_blank"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/f-share-one-3.png"></a> </div>
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
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/message.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/load.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/jquery.easing.min.js"></script> 
<script>
	

	$(document).ready(function () {
		if ($('html').hasClass('desktop')) {
			new WOW().init();
		}

		$(window).resize(function() {
			$(".wechat-list .pic-box").find('.wechat-show').css('bottom','auto');
		})

		var ww = $(window).width(),
			wh = $(window).height();

		if(ww>=1200){
			$(".wechat-list .pic-box").hover(
				function(){
					$(this).find(".wechat-show").css('opacity',1);
					$(this).find(".wechat-show").stop(false,true).animate({"bottom":0},{duration:600,easing:"easeInOutQuart"});
				},
				function(){
					bottom_val = $(this).find('img').height();
					$(this).find(".wechat-show").stop(false,true).animate({"bottom":bottom_val},{duration:600});
			});
		}else{
			$(".wechat-show").css('opacity',1);
		}
		
	
	});


	
	</script>
</body>
</html>