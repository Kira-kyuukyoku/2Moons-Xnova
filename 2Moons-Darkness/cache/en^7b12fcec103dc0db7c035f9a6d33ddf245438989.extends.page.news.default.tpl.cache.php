<?php /* Smarty version Smarty-3.1.13, created on 2014-12-04 08:05:25
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/page.news.default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250279023548015c5241a54-67917907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b12fcec103dc0db7c035f9a6d33ddf245438989' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/page.news.default.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    'b1b7daab2c52f36539733087c1ac60274106c2b0' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/layout.normal.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '5c883fa89672f4ec1d5882695d0292c565102d82' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.header.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
    '186f668ffff9f4b38c1f29ae816a403efbd2ee51' => 
    array (
      0 => '/home/qwatakayean/public_html/darkness/styles/templates/login/main.navigation.tpl',
      1 => 1412440867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250279023548015c5241a54-67917907',
  'function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_548015c5652420_42982220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548015c5652420_42982220')) {function content_548015c5652420_42982220($_smarty_tpl) {?><?php /*  Call merged included template "main.header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '250279023548015c5241a54-67917907');
content_548015c5490bd9_02187769($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.header.tpl" */?>
<?php /*  Call merged included template "main.navigation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '250279023548015c5241a54-67917907');
content_548015c555c299_80475268($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "main.navigation.tpl" */?>
<div id="content">
<section>
	<table class="box-out">
		<tr class="box-out-header">
			<td class="box-out-header-left"></td>
			<td class="box-out-header-center"></td>
			<td class="box-out-header-right"></td>
		</tr>
		<tr class="box-out-content">
			<td class="box-out-content-left"></td>
			<td class="box-out-content-center">
				<table class="box-inner">
					<tr class="box-inner-header">
						<td class="box-inner-header-left"></td>
						<td class="box-inner-header-center"><h1><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleNews\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php  $_smarty_tpl->tpl_vars[\'newsRow\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'newsRow\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'newsList\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
 $_smarty_tpl->tpl_vars[\'newsRow\']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars[\'newsRow\']->key => $_smarty_tpl->tpl_vars[\'newsRow\']->value){
$_smarty_tpl->tpl_vars[\'newsRow\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'newsRow\']->index++;
 $_smarty_tpl->tpl_vars[\'newsRow\']->first = $_smarty_tpl->tpl_vars[\'newsRow\']->index === 0;
?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php if (!$_smarty_tpl->tpl_vars[\'newsRow\']->first){?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
<hr><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php }?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

<h2><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'title\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</h2><br>
<div class="info"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'from\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</div>
<br><div><p><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'newsRow\']->value[\'text\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</p></div>
<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'newsRow\']->_loop) {
?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

<h1><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'news_does_not_exist\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</h1>
<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php } ?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

</td>
						<td class="box-inner-content-right"></td>
					</tr>
					<tr class="box-inner-footer">
						<td class="box-inner-footer-left"></td>
						<td class="box-inner-footer-center"></td>
						<td class="box-inner-footer-right"></td>
					</tr>
				</table>					
			</td>
			<td class="box-out-content-right"></td>
		</tr>
		<tr class="box-out-footer">
			<td class="box-out-footer-left"></td>
			<td class="box-out-footer-center"></td>
			<td class="box-out-footer-right"></td>
		</tr>
	</table>
</section>
</div>
<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->getSubTemplate ("main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
<?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-04 08:05:25
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_548015c5490bd9_02187769')) {function content_548015c5490bd9_02187769($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'siteTitleNews\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
 - <?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameName\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by http://2moons.cc/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
"></script>
	<script src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
"></script>
	<script src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
"></script>
	<script src="scripts/login/main.js"></script>
	<script><?php if (isset($_smarty_tpl->tpl_vars['code']->value)){?>var loginError = <?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
;<?php }?></script>
		
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
">
	<div id="page"><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2014-12-04 08:05:25
         compiled from "/home/qwatakayean/public_html/darkness/styles/templates/login/main.navigation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_548015c555c299_80475268')) {function content_548015c555c299_80475268($_smarty_tpl) {?><header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_index\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'forum\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</a></li>
			<li><a href="index.php?page=news"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_news\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_rules\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_battlehall\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_banlist\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'menu_disclamer\'];?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value)>1){?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php  $_smarty_tpl->tpl_vars[\'langName\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'langName\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'langKey\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'languages\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'langName\']->key => $_smarty_tpl->tpl_vars[\'langName\']->value){
$_smarty_tpl->tpl_vars[\'langName\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'langKey\']->value = $_smarty_tpl->tpl_vars[\'langName\']->key;
?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

		<li><a href="?lang=<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
" title="<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
"><?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>
</span></a></li>
		<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php } ?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:250279023548015c5241a54-67917907%%*/<?php }?>/*/%%SmartyNocache:250279023548015c5241a54-67917907%%*/';?>

	</nav>
</header><?php }} ?>