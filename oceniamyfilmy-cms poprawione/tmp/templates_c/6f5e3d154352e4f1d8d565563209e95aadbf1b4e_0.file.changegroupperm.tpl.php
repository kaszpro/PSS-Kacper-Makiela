<?php
/* Smarty version 4.5.2, created on 2025-04-29 17:34:45
  from 'C:\xampp\htdocs\oceniamyfilmy\admin\templates\changegroupperm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6810f195d8cfb2_35475949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f5e3d154352e4f1d8d565563209e95aadbf1b4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\templates\\changegroupperm.tpl',
      1 => 1745940350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6810f195d8cfb2_35475949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\admin\\plugins\\function.cms_help.php','function'=>'smarty_function_cms_help',),1=>array('file'=>'C:\\xampp\\htdocs\\oceniamyfilmy\\lib\\smarty\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
if ((isset($_smarty_tpl->tpl_vars['message']->value))) {?>
	<p class="pageheader"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
<?php }?>

<div class="information"><?php echo lang('info_changegroupperms');
echo smarty_function_cms_help(array('key2'=>'help_group_permissions','title'=>lang('info_changegroupperms')),$_smarty_tpl);?>
</div>

<div class="pageoverflow">
	<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['filter_action']->value;?>
">
		<div class="hidden">
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cms_secure_param_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cms_user_key']->value;?>
" />
		</div>
		<b><?php echo $_smarty_tpl->tpl_vars['selectgroup']->value;?>
:</b>&nbsp;
        <select name="groupsel" id="groupsel">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allgroups']->value, 'thisgroup');
$_smarty_tpl->tpl_vars['thisgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->value) {
$_smarty_tpl->tpl_vars['thisgroup']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id == $_smarty_tpl->tpl_vars['disp_group']->value) {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->name;?>
</option>
				<?php } else { ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->name;?>
</option>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</select>
		&nbsp;<input type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['apply']->value;?>
"/>
	</form>
</div>

<br />

<?php echo $_smarty_tpl->tpl_vars['form_start']->value;?>

	<div class="hidden">
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['cms_secure_param_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['cms_user_key']->value;?>
" />
	</div>
	
	<div class="pageoverflow">
		<p class="pageoptions">
			<?php echo $_smarty_tpl->tpl_vars['hidden']->value;
echo $_smarty_tpl->tpl_vars['hidden2']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>

		</p>
	</div>
	
	<table class="pagetable scrollable" id="permtable">
		<thead>
			<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['title_permission']->value;?>
</th>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_list']->value, 'thisgroup');
$_smarty_tpl->tpl_vars['thisgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->value) {
$_smarty_tpl->tpl_vars['thisgroup']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id != -1) {?><th class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->name;?>
</th><?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'list', false, 'section');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
				<tr>
					<td colspan="<?php echo count($_smarty_tpl->tpl_vars['group_list']->value)+1;?>
"><h3><?php echo mb_strtoupper((string) $_smarty_tpl->tpl_vars['section']->value ?? '', 'UTF-8');?>
</h3></td>
				</tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
					<?php echo smarty_function_cycle(array('values'=>'row1,row2','assign'=>'currow'),$_smarty_tpl);?>

					<tr class="<?php echo $_smarty_tpl->tpl_vars['currow']->value;?>
">
						<td>
							&nbsp;&nbsp;&nbsp;<strong><?php echo $_smarty_tpl->tpl_vars['perm']->value->label;?>
</strong>
							<?php if (!empty($_smarty_tpl->tpl_vars['perm']->value->description)) {?><div class="description">&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['perm']->value->description;?>
</div><?php }?>
						</td>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_list']->value, 'thisgroup');
$_smarty_tpl->tpl_vars['thisgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thisgroup']->value) {
$_smarty_tpl->tpl_vars['thisgroup']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['thisgroup']->value->id != -1) {?>
								<?php $_smarty_tpl->_assignInScope('gid', $_smarty_tpl->tpl_vars['thisgroup']->value->id);?>
								<td class="g<?php echo $_smarty_tpl->tpl_vars['thisgroup']->value->id;?>
"><input type="checkbox" name="pg_<?php echo $_smarty_tpl->tpl_vars['perm']->value->id;?>
_<?php echo $_smarty_tpl->tpl_vars['gid']->value;?>
" value="1"<?php if ((isset($_smarty_tpl->tpl_vars['perm']->value->group[$_smarty_tpl->tpl_vars['gid']->value])) || $_smarty_tpl->tpl_vars['gid']->value == 1) {?> checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['gid']->value == 1) {?> disabled="disabled"<?php }?> /></td>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>

	<div class="pageoverflow">
		<p class="pageoptions">
			<?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['submit']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cancel']->value;?>

		</p>
	</div>
<?php echo $_smarty_tpl->tpl_vars['form_end']->value;?>

<?php }
}
