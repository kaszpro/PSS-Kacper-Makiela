<?php
/* Smarty version 4.5.2, created on 2025-05-16 13:56:22
  from 'cms_template:40' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_682727e60c85e1_48786220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d5926b13dd0840cb5f4e997573f91252771f4b' => 
    array (
      0 => 'cms_template:40',
      1 => '1747334799',
      2 => 'cms_template',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682727e60c85e1_48786220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.title.php','function'=>'smarty_function_title',),1=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\plugins\\function.root_url.php','function'=>'smarty_function_root_url',),2=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title><?php echo smarty_function_title(array(),$_smarty_tpl);?>
 - Oceniamy Filmy</title>
  <base href="<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #121212;
      color: #f0f0f0;
    }
    header, footer {
      background-color: #1f1f1f;
      padding: 20px;
      text-align: center;
    }
    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      background-color: #2a2a2a;
      display: flex;
      justify-content: center;
    }
    nav ul li {
      margin: 0 15px;
    }
    nav ul li a {
      color: #f0f0f0;
      text-decoration: none;
      font-weight: bold;
      padding: 10px;
    }
    nav ul li a:hover {
      background-color: #3a3a3a;
      border-radius: 5px;
    }
    main {
      max-width: 960px;
      margin: 40px auto;
      padding: 20px;
      background-color: #1e1e1e;
      border-radius: 8px;
    }
  </style>
</head>
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
  
</main>

<footer>
  &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 Oceniamy Filmy
</footer>

</body>
</html><?php }
}
