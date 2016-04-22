<?php /* Smarty version Smarty-3.1.6, created on 2016-04-21 18:15:43
         compiled from "./Application/Cloud/View\Dashboard\index.html" */ ?>
<?php /*%%SmartyHeaderCode:153835718a84fcce578-55742570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '060009ef300807748b0a3c97c65e91033064375a' => 
    array (
      0 => './Application/Cloud/View\\Dashboard\\index.html',
      1 => 1461227329,
      2 => 'file',
    ),
    'ff1d6384a2f49ca6df8e9c214cd4a89695e0db6c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\recent\\Application\\Cloud\\View\\common\\layout\\layout.html',
      1 => 1461218384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153835718a84fcce578-55742570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '__PUBLIC__' => 0,
    '__APP__' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5718a84fd64bb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5718a84fd64bb')) {function content_5718a84fd64bb($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>cloud</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/css/util/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/css/util/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/css/pages/common/common.css" />
    
<link href="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/css/pages/dashboard/dashboard.css" rel="stylesheet"/>

</head>
<body>
    <?php echo $_smarty_tpl->getSubTemplate ("common/header/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/left/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="main-body">
    
<div class="main-card"></div>

<div class="info-list"><ul></ul></div>

<div class="timeline">
	<div class="first-box">
		<div class="info-content">
			<p><sapn class="info-title"></sapn>&nbsp;&nbsp;显示<span class="info-num"></span><span style="color: red;">条</span>结果</p>
			<span class="circle-icon active"></span>
		</div>
	</div>
</div>

    
<script id="timeline-tpl" type="text/template">
	<<?php ?>% for(var i = 0; i < list.length; i++) { %<?php ?>>
		<<?php ?>% var item = list[i], num = i+1 %<?php ?>> 
		<div class="info-box">   
			<div class="info-content"> 
			<p>问题<<?php ?>%=num%<?php ?>>: <span class="font-style"><<?php ?>%=item.question %<?php ?>></span></p> 
			<p>我们的建议: <span class="font-style"><<?php ?>%=item.suggest %<?php ?>></span></p> 
				<p><span>ID: <<?php ?>%=item.ID%<?php ?>></span><span class="time-span">时间: <<?php ?>%=item.time %<?php ?>></span></p> 
				<span class="circle-icon"></span> 
				<span class="line-icon"></span> 
				<a href="#" class="ignore-icon" data-infoid="<<?php ?>%=item.infoid%<?php ?>>">忽略</a> 
			</div> 
		</div> 
	<<?php ?>% } %<?php ?>>
</script>

<script id="list-tpl" type="text/template">
	<<?php ?>% for(var i = 0; i < list.length; i++) { %<?php ?>> 
			<<?php ?>% var item = list[i] %<?php ?>> 
			<li><a href="#" class="list-item <<?php ?>%= (i == 0) && "active" %<?php ?>>" data-listid="<<?php ?>%=item.listid%<?php ?>>"> 
			<span class="list-text"><<?php ?>%=item.title%<?php ?>></span> 
			<span class="list-icon"><<?php ?>%=item.num%<?php ?>></span> 
			<span class="move-line"></span> 
			</a></li> 
	<<?php ?>% } %<?php ?>>
</script>

<script id="card-tpl" type="text/template">
	<<?php ?>% for(var i = 0; i < list.length; i++) { %<?php ?>> 
		<<?php ?>% var item = list[i] %<?php ?>> 
		<div class="card <<?php ?>%= (i == 0) && "active" %<?php ?>>" data-cardid="<<?php ?>%=item.cardid %<?php ?>>"> 
			<ul> 
				<li><<?php ?>%=item.title%<?php ?>></li> 
				<li> 
					<<?php ?>% { if (item.num == "") %<?php ?>> 
						<img style="width: 50px; height: 50px; vertical-align: initial" src="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/images/ok.png" alt="正常"> 
					<<?php ?>% else %<?php ?>> 
						<<?php ?>%=item.num%<?php ?>> 
					<<?php ?>% } %<?php ?>> 
				</li> 
				<li><<?php ?>%=item.status %<?php ?>></li> 
			</ul> 
		</div> 
	<<?php ?>% } %<?php ?>>
</script>

    </div>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/js/util/jquery/1.9.0/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/js/util/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/js/util/underscore/underscore.js"></script>
    <script type="text/javascript">
        var __PUBLICDOMAIN = "<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
";
        var __APPDOMAIN = "<?php echo $_smarty_tpl->tpl_vars['__APP__']->value;?>
";
    </script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/js/pages/common/common.js"></script>
    
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['__PUBLIC__']->value;?>
/js/pages/dashboard/index.js"></script>

</body>
</html>
<?php }} ?>