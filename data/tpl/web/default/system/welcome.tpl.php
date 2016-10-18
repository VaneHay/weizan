<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/header-gw', TEMPLATE_INCLUDEPATH));?>
<ol class="breadcrumb">
	<li><a href="./?refresh"><i class="fa fa-home"></i></a></li>
	<li class="active">系统</li>
</ol>	
<!--内容-->
<?php  if($_W['isfounder']) { ?>
	<div class="clearfix" style="margin-bottom:5em;">
<!--		<h5 class="page-header">云服务</h5>
		<div class="clearfix">
			<a href="<?php  echo url('cloud/upgrade');?>" class="tile img-rounded">
				<i class="fa fa-cloud-download"></i>
				<span>一键更新</span>
			</a>
			<a href="<?php  echo url('cloud/profile');?>" class="tile img-rounded">
				<i class="fa fa-globe"></i>
				<span>注册站点</span>
			</a>
			<a href="<?php  echo url('cloud/diagnose');?>" class="tile img-rounded">
				<i class="fa fa-user-md"></i>
				<span>云服务诊断</span>
			</a>
			<a href="<?php  echo url('cloud/device');?>" class="tile tile-2x img-rounded">
				<i class="fa fa-print"></i>
				<span>系统设备管理</span>
			</a>
			<a href="<?php  echo url('cloud/appstore');?>" class="tile tile-2x img-rounded" target="_blank">
				<i class="fa fa-print"></i>
				<span>应用商城</span>
			</a>
			<a href="<?php  echo url('cloud/addons');?>" class="tile tile-2x img-rounded" target="_blank">
				<i class="fa fa-print"></i>
				<span>商城切换</span>
			</a>
		</div>-->
		<h5 class="page-header">应用商城管理</h5>
		<div class="clearfix">
			<a href="<?php  echo url('shop/module');?>" class="tile img-rounded">
				<i class="fa fa-cloud-download"></i>
				<span>应用列表</span>
			</a>
			<a href="<?php  echo url('member/record');?>" class="tile img-rounded">
				<i class="fa fa-globe"></i>
				<span>消费记录</span>
			</a>
			<a href="<?php  echo url('member/record/cz');?>" class="tile img-rounded">
				<i class="fa fa-globe"></i>
				<span>充值记录</span>
			</a>
			<a href="<?php  echo url('shop/mpayset/payset');?>" class="tile img-rounded">
				<i class="fa fa-globe"></i>
				<span>支付设置</span>
			</a>
			<a href="<?php  echo url('shop/taocan');?>" class="tile img-rounded">
				<i class="fa fa-globe"></i>
				<span>套餐绑定</span>
			</a>
			<a href="<?php  echo url('shop/mkdel/mkset');?>" class="tile img-rounded">
				<i class="fa fa-globe"></i>
				<span>相关设置</span>
			</a>
		</div>
		<h5 class="page-header">扩展</h5>
		<div class="clearfix">
			<a href="<?php  echo url('extension/module');?>" class="tile img-rounded">
				<i class="fa fa-cubes"></i>
				<span>模块</span>
			</a>
			<a href="<?php  echo url('extension/subscribe/subscribe');?>" class="tile img-rounded">
				<i class="fa fa-volume-up"></i>
				<span>订阅管理</span>
			</a>
			<a href="<?php  echo url('extension/service/display');?>" class="tile img-rounded">
				<i class="fa fa-glass"></i>
				<span>常用服务</span>
			</a>
			<a href="<?php  echo url('extension/theme');?>" class="tile img-rounded">
				<i class="fa fa-life-bouy"></i>
				<span>微站风格</span>
			</a>
			<a href="<?php  echo url('extension/pc');?>" class="tile img-rounded">
				<i class="fa fa-life-bouy"></i>
				<span>PC站风格</span>
			</a>
			<a href="<?php  echo url('extension/theme/web');?>" class="tile img-rounded">
				<i class="fa fa-puzzle-piece"></i>
				<span>后台皮肤</span>
			</a>
			<a href="<?php  echo url('extension/menu');?>" class="tile img-rounded">
				<i class="fa fa-list"></i>
				<span>系统菜单</span>
			</a>
			<a href="<?php  echo url('extension/platform');?>" class="tile img-rounded">
				<i class="fa fa fa-cubes"></i>
				<span>微信开放平台</span>
			</a>
		</div>
		<h5 class="page-header">文章/公告</h5>
		<div class="clearfix">
			<a href="<?php  echo url('article/about');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>关于我们</span>
			</a>
			<a href="<?php  echo url('article/news');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>新闻管理</span>
			</a>
			<a href="<?php  echo url('article/notice');?>" class="tile tile-2x img-rounded">
				<i class="fa fa-comments-o"></i>
				<span>公告管理</span>
			</a>
			<a href="<?php  echo url('article/case');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>案例管理</span>
			</a>
			<a href="<?php  echo url('article/product');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>服务管理</span>
			</a>
			<a href="<?php  echo url('article/agent');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>代理公司</span>
			</a>
			<a href="<?php  echo url('website/wenda');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>问答系统</span>
			</a>
			<a href="<?php  echo url('article/link');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>友情链接</span>
			</a>
		</div>
		<h5 class="page-header">公众号</h5>
		<div class="clearfix">
			<a href="<?php  echo url('account/display');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>公众号列表</span>
			</a>
			<a href="<?php  echo url('account/batch');?>" class="tile tile-2x img-rounded">
				<i class="fa fa-comments"></i>
				<span>批量操作公众号</span>
			</a>
			<a href="<?php  echo url('account/groups');?>" class="tile tile-2x img-rounded">
				<i class="fa fa-comments-o"></i>
				<span>公众号服务套餐</span>
			</a>
			<a href="<?php  echo url('account/recycle');?>" class="tile tile-2x img-rounded">
				<i class="glyphicon glyphicon-trash"></i>
				<span>公众号回收站</span>
			</a>
		</div>
		<h5 class="page-header">用户管理</h5>
		<div class="clearfix">
			<a href="<?php  echo url('user/profile');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>我的账户</span>
			</a>
			<a href="<?php  echo url('user/display');?>" class="tile img-rounded">
				<i class="fa fa-user"></i>
				<span>用户管理</span>
			</a>
			<a href="<?php  echo url('user/group');?>" class="tile img-rounded">
				<i class="fa fa-users"></i>
				<span>用户组管理</span>
			</a>
			<a href="<?php  echo url('user/registerset');?>" class="tile img-rounded">
				<i class="fa fa-user-md"></i>
				<span>注册选项</span>
			</a>
			<a href="<?php  echo url('user/fields');?>" class="tile img-rounded">
				<i class="glyphicon glyphicon-list-alt"></i>
				<span>资料字段管理</span>
			</a>
		</div>
		<h5 class="page-header">系统管理</h5>
		<div class="clearfix">
			<a href="<?php  echo url('system/updatecache');?>" class="tile img-rounded">
				<i class="fa fa-refresh"></i>
				<span>更新缓存</span>
			</a>
			<a href="<?php  echo url('system/site');?>" class="tile img-rounded">
				<i class="fa fa-inbox"></i>
				<span>站点设置</span>
			</a>
			<a href="<?php  echo url('system/mbsite');?>" class="tile img-rounded">
				<i class="fa fa-inbox"></i>
				<span>手机模板DIY</span>
			</a>
			<a href="<?php  echo url('system/attachment');?>" class="tile img-rounded">
				<i class="fa fa-folder-open"></i>
				<span>附件设置</span>
			</a>
			<a href="<?php  echo url('system/common');?>" class="tile img-rounded">
				<i class="fa fa-gear"></i>
				<span>其他设置</span>
			</a>
			<a href="<?php  echo url('system/database');?>" class="tile img-rounded">
				<i class="fa fa-database"></i>
				<span>数据库</span>
			</a>
			<a href="<?php  echo url('system/tools');?>" class="tile img-rounded">
				<i class="fa fa-legal"></i>
				<span>工具</span>
			</a>
			<a href="<?php  echo url('system/sysinfo');?>" class="tile img-rounded">
				<i class="fa fa-exclamation"></i>
				<span>系统信息</span>
			</a>
			<a href="<?php  echo url('system/logs');?>" class="tile img-rounded">
				<i class="fa fa-book"></i>
				<span>查看日志</span>
			</a>

		</div>
		<h5 class="page-header">系统工具</h5>
		<div class="clearfix">
			
			<a href="<?php  echo url('system/tools/scan');?>" class="tile img-rounded">
				<i class="fa fa-legal"></i>
				<span>木马查杀</span>
			</a>
			<a href="<?php  echo url('system/tools/bom');?>" class="tile img-rounded">
				<i class="fa fa-file-code-o"></i>
				<span>bom检测</span>
			</a>
			<a href="<?php  echo url('system/optimize');?>" class="tile img-rounded">
				<i class="fa fa-rocket"></i>
				<span>性能优化</span>
			</a>
			<a href="<?php  echo url('system/filecheck');?>" class="tile img-rounded">
				<i class="fa fa-file"></i>
				<span>系统文件校验</span>
			</a>
            			<a href="<?php  echo url('cloud/upgrade');?>" class="tile img-rounded">
				<i class="fa fa-cloud-download"></i>
				<span>系统更新</span>
			</a>
		</div>
	</div>
<?php  } else { ?>
	<div class="clearfix" style="margin-bottom:5em;">
		<h5 class="page-header">公众号</h5>
		<div class="clearfix">
			<a href="<?php  echo url('account/display');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>公众号列表</span>
			</a>
		</div>
		<h5 class="page-header">用户管理</h5>
		<div class="clearfix">
			<a href="<?php  echo url('user/profile');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>我的账户</span>
			</a>
			<a href="<?php  echo url('member/member');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>余额充值</span>
			</a>
			<a href="<?php  echo url('member/buypackage');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>升级续费</span>
			</a>
			<a href="<?php  echo url('user/display');?>" class="tile img-rounded">
				<i class="fa fa-user"></i>
				<span>下级用户管理</span>
			</a>
            <a href="<?php  echo url('member/record/cz');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>充值记录</span>
			</a>
            <a href="<?php  echo url('member/record');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>消费记录</span>
			</a>
		</div>
        <h5 class="page-header">高级工具</h5>
		<div class="clearfix">
			<a href="<?php  echo url('user/yuming');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>域名绑定</span>
			</a>
			<a href="<?php  echo url('user/copyright');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>版权设置</span>
			</a> 
			<a href="<?php  echo url('user/pifu');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>自定义皮肤</span>
			</a>
		</div>
	</div>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/footer-gw', TEMPLATE_INCLUDEPATH));?>