<?php
/* Smarty version 4.5.2, created on 2025-05-16 13:53:16
  from 'tpl_body:40' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6827272c699e64_50394415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaa81ebcf18914b906d9c590227f5b214f336ad0' => 
    array (
      0 => 'tpl_body:40',
      1 => '1747334799',
      2 => 'tpl_body',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6827272c699e64_50394415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),1=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<body>

<header>
  <h1>Oceniamy Filmy</h1>
</header>

<nav>
  <ul>
    <li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/index.php?page=home">Strona Główna</a></li>
    <li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/index.php?page=recenzje">Recenzje</a></li>
    <li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/index.php?page=o-nas">O nas</a></li>
    <li><a href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/index.php?page=kontakt">Kontakt</a></li>
  </ul>
</nav>


<main>
  <?php CMS_Content_Block::smarty_internal_fetch_contentblock(array(),$_smarty_tpl); ?>
</main>

<footer>
  &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 Oceniamy Filmy
</footer>

</body>
</html><?php }
}
