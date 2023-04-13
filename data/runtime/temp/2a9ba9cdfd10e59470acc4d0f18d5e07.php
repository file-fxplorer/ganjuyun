<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:36:"./template/pc/lists_single_about.htm";i:1656472768;s:54:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/head.htm";i:1680489587;s:57:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/wapfoot.htm";i:1656470238;s:56:"/www/wwwroot/weiguizhan/V2/V2HOME/template/pc/footer.htm";i:1679561265;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN" class="desktop">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/amfe-flexible.js"></script>
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animate.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/animation.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/swiper.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/common.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/pace-theme-barber-shop.css" />
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/case.css">
<link rel="stylesheet" href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/css/about.css">
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
  <picture style="display: none">
    <source srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/banner-about-m.jpg" media="(max-width: 650px)">
    <img class="img-responsive" srcset=""> </picture>
  <video src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/view.mp4" autoplay loop></video>
  <div class="banner_txt">
    <div class="DIV">
      <div class="banner_txt1">高端定制，<span class="br-m">美工做到客户满意为止</span></div>
      <div class="banner_txt2">做国内顶尖网站，引领趋势网站定制让网站不平庸</div>
    </div>
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
  <div class="about-desc letmove">
    <h2>广州网络科技有限公司是赞赞科技旗下品牌，以高端网站建设、<span class="br-pc">移动互联网营销为核心业务。</span></h2>
    <p class="desc">专注于创意设计和传播应用,探索并实现商业价值最大化，<span class="br-pc">为所有谋求长远发展的企业品牌贡献全力，赞赞注重专业探索，摒弃虚浮夸张，不断修正服务方向，</span><span class="br-pc">完善创作品格以探求精品塑造与理念升华。凭借对设计的热爱执着，营销趋势的敏锐洞察和深刻理解，</span><span class="br-pc">与众多客户在蓬勃发展的市场环境中互促共生。</span></p>
  </div>
  <div class="about-idea letmove">
    <div class="about-idea-t">
      <picture>
        <source srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-idea-t-m.jpg" media="(max-width: 48em)">
        <img srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-idea-t.jpg"> </picture>
    </div>
    <div class="about-idea-b">
      <div class="about-idea-b-in">
        <div class="idea-title">
          <h2>DESIGN IDEA</h2>
          <h4>设计理念</h4>
        </div>
        <div class="idea-one">
          <div class="idea-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/idea-one-img-1.jpg"></div>
          <div class="idea-one-desc">
            <h3>只有不断变化，才是永恒的不变</h3>
            <p class="desc">创意不是什么玄乎的事情。创意就是在传统的基础上加入新的改变；在别人想到的事情上想得更远一点；在别人做到的事情上做的更好一些；在别人创造的价值上创造更多价值。</p>
          </div>
        </div>
        <div class="idea-one">
          <div class="idea-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/idea-one-img-2.jpg"></div>
          <div class="idea-one-desc">
            <h3>策略是看得更远的思想</h3>
            <p class="desc">如果您让我们做一个网站，我们所想的是：有没有比网站效果更好的建议？除了网站还可以做什么？在网站之后应该做什么？我们将提出行之有效的可执行的解决方案。</p>
          </div>
        </div>
        <div class="idea-one">
          <div class="idea-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/idea-one-img-3.jpg"></div>
          <div class="idea-one-desc">
            <h3>有思想的团队，创造更多“出彩”！</h3>
            <p class="desc">我们是一群视觉协会的好“色”之徒；一群不走寻常路的“判逆”份子；一群时刻准备让您出“彩”，让自已出“格”的天马行空的人。我们相信创意创造更多不同！</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-good">
    <div class="about-title letmove">
      <h2>用心成就美好</h2>
      <h4>用不同的眼光看世界，均会发现不同的精彩</h4>
    </div>
    <div class="about-good-list">
      <div class="good-one letmove">
        <div class="good-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-good-1.png"></div>
        <div class="good-one-desc">
          <h3>沟通无压力</h3>
          <p class="desc">沟通是面对面的相互学习的过程，三人行必有我师焉，抱着虚心的态度去沟通，会让工作更加顺畅且有效</p>
        </div>
      </div>
      <div class="good-one letmove">
        <div class="good-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-good-2.png"></div>
        <div class="good-one-desc">
          <h3>变的更有趣</h3>
          <p class="desc">死板的内容不是我们的想要的，任何在人们看起来不可理喻的事物，我们总会找到他有趣的一面</p>
        </div>
      </div>
      <div class="good-one letmove">
        <div class="good-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-good-3.png"></div>
        <div class="good-one-desc">
          <h3>实操大于理论</h3>
          <p class="desc">不要将一些不明所以的内容挂在嘴上，最终能够拿出来的内容才是最能够说服人的</p>
        </div>
      </div>
      <div class="good-one letmove">
        <div class="good-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-good-4.png"></div>
        <div class="good-one-desc">
          <h3>更乐于分享</h3>
          <p class="desc">作为分享倡导者，怎样更完美的将分享机制运营到工作和生活中，分享可以让更多人获得你的快乐</p>
        </div>
      </div>
      <div class="good-one letmove">
        <div class="good-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-good-5.png"></div>
        <div class="good-one-desc">
          <h3>专业的客服</h3>
          <p class="desc">深度了解需求，优化沟通流程，减少沟通时间，提升沟通效率；精细研究品牌受众进行策略定制</p>
        </div>
      </div>
      <div class="good-one letmove">
        <div class="good-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-good-6.png"></div>
        <div class="good-one-desc">
          <h3>重视高效沟通</h3>
          <p class="desc">我们需要关心他们的一举一动，留意他们的话题以及关心的事物，并适时的参与到他们的讨论中</p>
        </div>
      </div>
      <div class="good-one letmove">
        <div class="good-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-good-7.png"></div>
        <div class="good-one-desc">
          <h3>什么是互动</h3>
          <p class="desc">让企业与消费者之间“动”起来。创造一切消费者感兴趣的互动点，让消费者与企业尽可能的保持联系</p>
        </div>
      </div>
      <div class="good-one letmove">
        <div class="good-one-img"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-good-8.png"></div>
        <div class="good-one-desc">
          <h3>有趣的数据</h3>
          <p class="desc">数据可以为我们带来最为精准的策略指引，那么我们如何使用以及分析数据，并从中获得商业机会呢？</p>
        </div>
      </div>
    </div>
  </div>
  <div class="about-client letmove">
    <picture>
      <source srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images//about-client-bg-m.jpg" media="(max-width: 48em)">
      <img class="about-client-bg" srcset="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-client-bg.jpg"> </picture>
    <div class="about-title letmove">
      <h2>客户群体分布</h2>
      <h4>为客户创造价值、传递价值是我们的最终使命</h4>
    </div>
    <div class="about-client-line"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-client-line-bg.png" class="about-client-line-bg about-client-line-bg-ef"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-client-line-bg.png" style="opacity: 0" class="about-client-line-bg">
      <div class="ac-line-one ac-line-one-1">
        <h3><i class="counter" data-to="56" data-speed="1500">0</i><span>%</span></h3>
        <h4>政府国企</h4>
        <p class="desc">Government</p>
        <i class="redline"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-client-line-1.png"></i> </div>
      <div class="ac-line-one ac-line-one-2">
        <h3><i class="counter" id="count-number" data-to="30" data-speed="1000">0</i><span>%</span></h3>
        <h4>上市公司</h4>
        <p class="desc">Listed Company</p>
        <i class="redline"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-client-line-2.png"></i> </div>
      <div class="ac-line-one ac-line-one-3">
        <h3><i class="counter" id="count-number" data-to="20" data-speed="1500">0</i><span>%</span></h3>
        <h4>知名品牌</h4>
        <p class="desc">Brand</p>
        <i class="redline"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-client-line-3.png"></i> </div>
      <div class="ac-line-one ac-line-one-4">
        <h3><i class="counter" id="count-number" data-to="35" data-speed="1500">0</i><span>%</span></h3>
        <h4>集团公司</h4>
        <p class="desc">Group Company</p>
        <i class="redline"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-client-line-4.png"></i> </div>
      <div class="ac-line-one ac-line-one-5">
        <h3><i class="counter" id="count-number" data-to="10" data-speed="1500">0</i><span>%</span></h3>
        <h4>中小企业</h4>
        <p class="desc">Small Business</p>
        <i class="redline"><img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/about-client-line-5.png"></i> </div>
    </div>
  </div>
  <div class="about-partner letmove">
    <div class="partner-title">
      <div class="partner-in"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "26"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
        <h2><?php echo $field['typename']; ?><span><?php echo $field['englist_name']; ?></span></h2>
        <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
    </div>
    <div class="partner-show">
      <div class="partner-in">
        <div class="imgs-list-all">
          <div class="swiper-container imgs-list imgs-list-pc">
            <div class="swiper-wrapper imgs-list-in">
              <div class="swiper-slide imgs-one">
                <div class="imgs-one-in">
                  <div class="imgs-one-in-list"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "26"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 12; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '26',
  'limit' => '0,12',
  'titlelen' => '50',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <div class="imgs-one-in-one">
                      <div class="imgs-one-img"><a href="javascript:;"> <img class="swiper-lazy" data-src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"> </a></div>
                    </div>
                    <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
                </div>
              </div>
              <div class="swiper-slide imgs-one">
                <div class="imgs-one-in">
                  <div class="imgs-one-in-list"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "26"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 24; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '26',
  'limit' => '12,24',
  'titlelen' => '50',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],12, $row, true) : $_result["list"]->slice(12, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <div class="imgs-one-in-one">
                      <div class="imgs-one-img"><a href="javascript:;"> <img class="swiper-lazy" data-src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"> </a></div>
                    </div>
                    <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
                </div>
              </div>
              <div class="swiper-slide imgs-one">
                <div class="imgs-one-in">
                  <div class="imgs-one-in-list"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "26"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 36; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '26',
  'limit' => '24,36',
  'titlelen' => '50',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],24, $row, true) : $_result["list"]->slice(24, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <div class="imgs-one-in-one">
                      <div class="imgs-one-img"><a href="javascript:;"> <img class="swiper-lazy" data-src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"> </a></div>
                    </div>
                    <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-partner-m">
    <div class="about-title letmove">
      <h2>合作伙伴</h2>
      <h4>众多客户信赖和选择，见证实力</h4>
    </div>
    <div class="partner-list-m"> <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "26"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 15; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'typeid' => '26',
  'row' => '15',
  'titlelen' => '50',
  'orderby' => 'add_time',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "add_time", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 50, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <div class="list-one"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"></div>
      <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> </div>
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
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/swiper.jquery.min.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/wow.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/main.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/pace.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/imgs.js"></script> 
<script src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/js/about.js"></script> 
<script>
		paceOptions = {
			elements: true
		};
		
		function load(time){
			var x = new XMLHttpRequest()
			x.open('GET', "" + time, true);
			x.send();
	    };
	    
	    setTimeout(function(){
	    	Pace.ignore(function(){
	    		load(3100);
	    	});
	    }, 4000);

	    Pace.on('hide', function(){
	    	console.log('done');
	    });

		$(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		
	        $(".case_list ul li a img").lazyload({ 
				placeholder : "../images/loading.gif",
	            effect: "fadeIn"
	        });  
		});	
	</script> 
<script>
		//设置计数
		$.fn.countTo = function (options) {
			options = options || {};
			return $(this).each(function () {
				//当前元素的选项
				var settings = $.extend({}, $.fn.countTo.defaults, {
					from:            $(this).data('from'),
					to:              $(this).data('to'),
					speed:           $(this).data('speed'),
					refreshInterval: $(this).data('refresh-interval'),
					decimals:        $(this).data('decimals')
				}, options);
				//更新值
				var loops = Math.ceil(settings.speed / settings.refreshInterval),
					increment = (settings.to - settings.from) / loops;
				//更改应用和变量
				var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
				$self.data('countTo', data);
				//如果有间断，找到并清除
				if (data.interval) {
					clearInterval(data.interval);
				};
				data.interval = setInterval(updateTimer, settings.refreshInterval);
				//初始化起始值
				render(value);
				function updateTimer() {
					value += increment;
					loopCount++;
					render(value);
					if (typeof(settings.onUpdate) == 'function') {
						settings.onUpdate.call(self, value);
					}
					if (loopCount >= loops) {
						//移出间隔
						$self.removeData('countTo');
						clearInterval(data.interval);
						value = settings.to;
						if (typeof(settings.onComplete) == 'function') {
							settings.onComplete.call(self, value);
						}
					}
				}
				function render(value) {
					var formattedValue = settings.formatter.call(self, value, settings);
					$self.html(formattedValue);
				}
				});
			};
			$.fn.countTo.defaults={
				from:0,               //数字开始的值
				to:0,                 //数字结束的值
				speed:1000,           //设置步长的时间
				refreshInterval:50,  //隔间值
				decimals:0,           //显示小位数
				formatter: formatter, //渲染之前格式化
				onUpdate:null,        //每次更新前的回调方法
				onComplete:null       //完成更新的回调方法
			};
			function formatter(value, settings){
				return value.toFixed(settings.decimals);
			}
			//自定义格式
			$('#count-number').data('countToOptions',{
				formmatter:function(value, options){
					return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
				}
			});

		$(function(){
			var beok = true;
			$('.counter').each(function(){
 	 			m = $(this).offset().top-wh;
 	 			return $(this).attr('ori-pos',m);
 	 		})

 	 		$(window).on("scroll",function() {
				var s = $(window).scrollTop();
				$('.counter').each(function(){
					var that = $(this);
						breakpoint = that.attr('ori-pos');
						breakpoint_max = parseInt(breakpoint)+parseInt(wh)+parseInt(that.height());	
					if((Math.abs(s)>=breakpoint) && (Math.abs(s) < breakpoint_max) && beok){
						beok = !beok;
						$('.about-client-line').addClass('move');
						for(var i=0;i < $('.counter').length;i++){
			                var j = -1;
			                var num = 250*i;
			                setTimeout(function(){
			                    j++;
								$('.counter').eq(j).countTo()
			                },num)
			            }
					}
				})
			});

			
			function count(a) {
				var b = $(this);
				a = $.extend({},
				a || {},
				b.data("countToOptions") || {});
				b.countTo(a)
			};
		})
	</script>
</body>
</html>