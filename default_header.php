<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php $this->options->charset(); ?>">
	<meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="dns-prefetch" href="//cdn.v2ex.com/" />
	<link rel="dns-prefetch" href="//secure.gravatar.com" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="Cache-Control" content="no-transform"/>
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
	<title>
	    
	       
	<?php $this->archiveTitle(array(
	'category'  =>  _t('分类: %s'),
	'search'    =>  _t('搜索: %s'),
	'tag'       =>  _t('标签: %s'),
	'author'    =>  _t('作者: %s')
	), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->_currentPage>1) echo ' - 第 '.$this->_currentPage.' 页'; ?></title>
	<meta name="keywords" content="<?php $this->keywords() ?>" />
	<?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
	<meta property="og:site_name" content="<?php $this->options->title(); ?>" />
	<?php if($this->is('post')): ?><meta property="og:type" content="article" />
	<meta property="og:title" content="<?php $this->archiveTitle(array('category'  =>  _t('%s'),'search'    =>  _t('%s'),'tag'       =>  _t('%s'),'author'    =>  _t('%s')), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->_currentPage>1) echo ' - 第 '.$this->_currentPage.' 页'; ?>" />
	<meta property="og:description" content="<?php $this->description(); ?>" />
	<meta property="og:url" content="<?php $this->permalink() ?>" />
	<meta property="article:published_time" content="<?php $this->date('c'); ?>" />
	<meta property="article:modified_time" content="<?php echo date('c', $this->modified);?>" />
	<meta property="article:author" content="<?php $this->author(); ?>" />
	<meta property="article:published_first" content="<?php $this->author(); ?>, <?php $this->permalink() ?>" /> 
	<?php else: ?><meta property="og:type" content="blog" />
	<meta property="og:title" content="<?php $this->archiveTitle(array('category'  =>  _t('%s'),'search'    =>  _t('%s'),'tag'       =>  _t('%s'),'author'    =>  _t('%s')), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->_currentPage>1) echo ' - 第 '.$this->_currentPage.' 页'; ?>" />
	<meta property="og:description" content="<?php $this->options->slogan(); ?>" />
	<meta property="og:url" content="<?php $this->options->siteUrl(); ?>" />
	<?php endif;?><link rel="shortcut icon" href="<?php if($this->options->favicon): $this->options->favicon(); else: $this->options->themeUrl('/favicon.ico');endif; ?>">
	<link rel="apple-touch-icon" href="<?php if($this->options->iosicon): $this->options->iosicon(); else: $this->options->themeUrl('/favicon.ico');endif; ?>">
    <link href="<?php $this->options->themeUrl('style.min.css'); ?>" rel="stylesheet">
    <link href="<?php $this->options->themeUrl('app.css'); ?>" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
    <body>
    <!--[if lt IE 9]>
    <div class="browsehappy" role="dialog">
    当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请升级你的浏览器</a>。
    </div>
    <![endif]-->

	<div class="container grid-lg s-content content">
		<div class="column col-12 content footer">
		    <?php $this->content();?>

  		</div>
	</div>