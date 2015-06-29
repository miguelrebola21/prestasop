<?php /*%%SmartyHeaderCode:4980547ed3fbbef6c5-91960653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b950fa0cecdf9ed5867df8b870f5b8e081940ceb' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1406814056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4980547ed3fbbef6c5-91960653',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54822cfcd73527_92395292',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54822cfcd73527_92395292')) {function content_54822cfcd73527_92395292($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://localhost/prestashop/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Pesquisar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Pesquisar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
