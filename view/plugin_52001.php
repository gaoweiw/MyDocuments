<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php'); ?>
	<link rel="stylesheet" href="../js/plug_in/layui-v2.1.2/layui/css/layui.css">
	
	<div class="content ">
		<div class="body-inner br-s">
			<!--面包屑-->
			<div id="crumb" class="crumb br-s">
				<ul class="s-n text-12 text-l-s-1 gray6">
					<li><ng ng-bind="crumbsOne"></ng><i ng-if="crumbsTwo?true:false" class="fa fa-angle-right m-0-5"></i></li>
					<li><ng ng-bind="crumbsTwo"></ng><i ng-if="crumbsThree?true:false" class="fa fa-angle-right m-0-5"></i></li>		
					<li><ng ng-bind="crumbsThree"></ng></li>		
				</ul>
			</div>
			<!--内容-->
			<div class="centre-content p-0-30">

                			<div class="mt-20">
			                    <fieldset class="custom-fieldset m-20-0">
			                        <legend><a name="color-design" class="text-14"><i class="fa fa-refresh fa-spin"></i> 省市区镇四级联动 </a><i class="fa fa-meh-o text-18"></i></legend>
			                    </fieldset>
			            </div>

			            <div class="layui-form">
					<div class="layui-form-item">
						<label class="layui-form-label">联动选择框</label>
						<div class="layui-input-inline">
							<select id="quiz1" lay-filter="prov" lay-search>
								<option value="">请选择省</option>
							</select>
						</div>
						<div class="layui-input-inline">
							<select id="quiz2" lay-filter="city" lay-search>
								<option value="">请选择市</option>
							</select>
						</div>
						<div class="layui-input-inline">
							<select id="quiz3" lay-filter="area" lay-search>
								<option value="">请选择区/县</option>
							</select>
						</div>
						<div class="layui-input-inline">
							<select id="quiz4" lay-filter="town" lay-search>
								<option value="">请选择镇乡/街道</option>
							</select>
						</div>
						<div class="layui-form-mid layui-word-aux">此处做了联动交互</div>
					</div>
					<div class="layui-form-item">
						<div class="layui-input-block">
							<button class="layui-btn"  ng-click="linkage()">提交</button>
						</div>
					</div>
  				</div>
			</div>
		</div>
		<!--底部-->
		
	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript" src="../js/plug_in/layui-v2.1.2/layui/layui.all.js"></script>
<script>
	seajs.use(
		[
		base.jsUrl + 'base/api_jquery.js',
		// base.jsUrl + 'plug_in/my_plug_in/link_function',
		base.jsUrl + 'plugin_52001',
		base.jsUrl + 'plug_in/theme/theme',
		base.jsUrl + 'plug_in/nav_list/nav'
		]
	);
</script>
</body>
</html>