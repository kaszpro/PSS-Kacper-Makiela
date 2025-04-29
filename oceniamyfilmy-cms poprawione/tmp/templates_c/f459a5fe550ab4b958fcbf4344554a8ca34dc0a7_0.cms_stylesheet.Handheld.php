<?php
/* Smarty version 4.5.2, created on 2025-04-29 17:29:07
  from 'cms_stylesheet:Handheld' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6810f0438353e6_98900367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f459a5fe550ab4b958fcbf4344554a8ca34dc0a7' => 
    array (
      0 => 'cms_stylesheet:Handheld',
      1 => '1745940357',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6810f0438353e6_98900367 (Smarty_Internal_Template $_smarty_tpl) {
?>/* cmsms stylesheet: Handheld modified: Tuesday, April 29, 2025 5:25:57 PM */
/*********************************************
Sample stylesheet for mobile and small screen handheld devices

Just a simple layout suitable for smaller screens with less 
styling cabapilities and minimal css

Note: If you dont want to support mobile devices you can
safely remove this stylesheet.
*********************************************/
/* remove all padding and margins and set width to 100%. This should be default for handheld devices but its good to set these explicitly */
body {
margin:0;
padding:0;
width:100%;
}

/* hide accessibility noprint and definition */
.accessibility,
.noprint,
dfn {
display:none;
}

/* dont want to download image for header so just set bg color */
div#header,
div#footer {
background-color: #385C72;  
color: #fff;
text-align:center;
}

/* text colors for header and footer */
div#header a,
div#footer a {
color: #fff;
}

/* this doesnt look as nice, but takes less space */
div#menu_vert ul li,
div#menu_horiz ul li {
display:inline;
}

/* small border at the bottom to have some indicator */
div#menu_vert ul,
div#menu_horiz ul {
border-bottom:1px solid #fff;
}

/* save some space */
div.breadcrumbs {
display:none;
}
<?php }
}
