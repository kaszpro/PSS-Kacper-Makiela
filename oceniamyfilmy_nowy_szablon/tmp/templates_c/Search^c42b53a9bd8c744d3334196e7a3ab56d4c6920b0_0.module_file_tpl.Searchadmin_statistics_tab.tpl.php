<?php
/* Smarty version 4.5.2, created on 2025-05-16 14:12:27
  from 'module_file_tpl:Search;admin_statistics_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_68272bab951bc9_78992932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c42b53a9bd8c744d3334196e7a3ab56d4c6920b0' => 
    array (
      0 => 'module_file_tpl:Search;admin_statistics_tab.tpl',
      1 => 1745940352,
      2 => 'module_file_tpl',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68272bab951bc9_78992932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['topwords']->value))) {
echo $_smarty_tpl->tpl_vars['formstart']->value;?>

<div class="pageoverflow">
  <table class="pagetable">
    <thead>
      <tr>
        <th width="75%"><?php echo $_smarty_tpl->tpl_vars['wordtext']->value;?>
</th>
        <th width="25%"><?php echo $_smarty_tpl->tpl_vars['counttext']->value;?>
</th>
      </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['topwords']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
?>
      <?php echo smarty_function_cycle(array('assign'=>'rowclass','values'=>'row1,row2'),$_smarty_tpl);?>

      <tr class="<?php echo $_smarty_tpl->tpl_vars['rowclass']->value;?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['word'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['entry']->value['count'];?>
</td>
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
  </table>
</div>
<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><?php echo $_smarty_tpl->tpl_vars['clearwordcount']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['exportcsv']->value;?>
</p>
</div>
<?php echo $_smarty_tpl->tpl_vars['formend']->value;?>

<?php } else { ?>
<div class="information"><?php echo lang_by_realm('Search','nostatistics');?>
</div>
<?php }
}
}
