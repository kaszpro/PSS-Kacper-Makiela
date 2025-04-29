<?php
/* Smarty version 4.5.2, created on 2025-04-29 17:29:07
  from 'cms_stylesheet:Navigation FatFootMenu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6810f04382d1c0_64299347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d794e0661fda537b3e87004ed45c37e0db7a7e' => 
    array (
      0 => 'cms_stylesheet:Navigation FatFootMenu',
      1 => '1745940357',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6810f04382d1c0_64299347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),));
?>
/* cmsms stylesheet: Navigation FatFootMenu modified: Tuesday, April 29, 2025 5:25:57 PM */
#footer ul {
/* some margin is set in the footer padding */
   margin: 0px;
/* calling a specific side, left in this case */
   margin-left: 5px;
   padding: 0px;
/* remove any default bullets, image used in li call */
   list-style: none;
}
#footer ul li {
/* remove any default bullets, image used for consistency */
   list-style: none;
/* float left to set first level li items across the top */
   float:left;
/* a little margin at top */
   margin: 5px 0px 0px;
/* padding all the way around */
   padding: 5px;
/* you can set your own image here, used for consistency */
   background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/ngrey/dot.gif) no-repeat left 10px;
}
#footer ul li a {
/* this will make the "a" link a solid shape */
   display:block;
   margin: 2px 0px 4px;
   padding: 0px 5px 5px 5px;
}
/* set h3 to look like "a" */
#footer li h3 {
   font-weight:normal;
   font-size:100%;
   margin: 2px 0px 2px 0px;
   padding: 0px 5px 5px 5px;
}
/* set h3 to look like "a", less margin at this level */
#footer li li h3 {
   font-weight:normal;
   font-size:100%;
   margin: 0px;
   padding: 0px 5px 5px 5px;
}
#footer ul li li {
/* remove any default bullets, image used for consistency */
   list-style: none;
/* remove float so they line up under top li */
   float:none;
/* less margin/padding */
   margin: 0px;
   padding: 0px 0px 0px 5px;
/* you can set your own image here, used for consistency */
   background: url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/uploads/ngrey/dot.gif) no-repeat left 3px;
}
/* fix for IE6 */
* html #footer ul li a {
   margin: 2px 0px 0px;
   padding: 0px 5px 5px 5px;
}
* html #footer ul li li a {
   margin: 0px 0px 0px;
   padding: 0px 5px 0px 5px;
}
/* End fix for IE6 */
#footer ul ul {
/* remove float so they line up under top li */
   float:none;
/* a little margin to offset it */
   margin: 0px 0px 0px 8px;
   padding: 0;
}
#footer ul ul ul {
/* remove float so they line up under li above it */
   float:none;
/* a little margin to offset it */
   margin: 0px 0px 0px 8px;
   padding: 0;
}
<?php }
}
