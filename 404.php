<?php
/*Edit or create an .htaccess (in root) file and write the following:
  ErrorDocument 404 http://www.yourwebsite.com/404.php   */
require_once("configs.php");
$page_cat = "home";
?>
<head>
	<title><?php echo $website['title']; ?></title>
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
	<link rel="shortcut icon" href="wow/static/local-common/images/favicons/wow.png" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common.css?v15" />
	<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie.css?v15" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie6.css?v15" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/common-ie7.css?v15" /><![endif]-->
	<link title="World of Warcraft - News" href="wow/en/feed/news" type="application/atom+xml" rel="alternate"/>
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow.css?v4" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/homepage.css?v15" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/blog.css?v15" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/local-common/css/cms/cms-common.css?v15" />
	<link rel="stylesheet" type="text/css" media="all" href="wow/static/css/cms.css?v4" />
  <link rel="stylesheet" type="text/css" media="all" href="/wow/static/css/wow.css?v23" />
	<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/cms-ie6.css?v4" /><![endif]-->
	<!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie.css?v4" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie6.css?v4" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" type="text/css" media="all" href="wow/static/css/wow-ie7.css?v4" /><![endif]-->
	<script type="text/javascript" src="wow/static/local-common/js/third-party/jquery-1.4.4-p1.min.js"></script>
	<script type="text/javascript" src="wow/static/local-common/js/core.js?v15"></script>
	<script type="text/javascript" src="wow/static/local-common/js/tooltip.js?v15"></script>
	<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script>
	<!--[if IE 6]> <script type="text/javascript">
	//<![CDATA[
	try { document.execCommand('BackgroundImageCache', false, true) } catch(e) {}
	//]]>
	</script>
	<![endif]-->
</head>
<body class="en-gb server-error logged-in">
<div id="wrapper">
<?php include("header.php"); ?>
<div id="content">
<div class="content-top">
<div class="content-trail">
<ol class="ui-breadcrumb">
<li class="last">
<a href="index.php" rel="np"><?php echo $website['title']; ?></a>
<span class="breadcrumb-arrow"></span>
<a href="index.php" rel="np">404——你又溜到哪里去了？</a>
</li>
</ol>
</div>
<div class="content-bot">
	<div id="server-error">
		<h2 class="http">404？<br /> 是404！</h2>
		<h3>页面找不到了！</h3>
		<p>这里<br /> 本来 <strong>是有</strong><br /> 一个页面的.<br />现在不知道瞬移到哪里去了.<br /><br /><em>(到底在这个页面里发生了什么？)</em></p>
		<!-- http : 404 -->
	</div>
</div>
</div>
</div>
	<?php include("footer.php"); ?>
</body>
</html>
