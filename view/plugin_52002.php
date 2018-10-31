<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php'); ?>
	<link rel="stylesheet" href="../js/plug_in/layui-v2.1.2/layui/css/layui.css">
	<link rel="stylesheet" href="../js/plug_in/layDate-v5.0.7/laydate/theme/default/laydate.css">
	
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
			<div class="centre-content centre-content-footer p-0-30">

				<div class="mt-20">
					<fieldset class="custom-fieldset m-20-0">
						<legend><a name="color-design" class="text-14">输入判断</a><i class="fa fa-meh-o text-18"></i></legend>
					</fieldset>
				</div>

				<form class="layui-form" action="">
					<div class="layui-form-item">
						<label class="layui-form-label">单行输入框</label>
						<div class="layui-input-block">
						  <input name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text">
						</div>
					  </div>
					  <div class="layui-form-item">
						<label class="layui-form-label">验证必填项</label>
						<div class="layui-input-block">
						  <input name="username" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input" type="text">
						</div>
					  </div>
					  
					  <div class="layui-form-item">
						<div class="layui-inline">
						  <label class="layui-form-label">验证手机</label>
						  <div class="layui-input-inline">
							<input name="phone" lay-verify="phone" autocomplete="off" class="layui-input" type="tel">
						  </div>
						</div>
						<div class="layui-inline">
						  <label class="layui-form-label">验证邮箱</label>
						  <div class="layui-input-inline">
							<input name="email" lay-verify="email" autocomplete="off" class="layui-input" type="text">
						  </div>
						</div>
					  </div>
					  
					  <div class="layui-form-item">
						<div class="layui-inline">
						  <label class="layui-form-label">多规则验证</label>
						  <div class="layui-input-inline">
							<input name="number" lay-verify="required|number" autocomplete="off" class="layui-input" type="text">
						  </div>
						</div>
						<div class="layui-inline">
						  <label class="layui-form-label">验证日期</label>
						  <div class="layui-input-inline">
							<input name="date" id="date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input" type="text">
						  </div>
						</div>
						<div class="layui-inline">
						  <label class="layui-form-label">验证链接</label>
						  <div class="layui-input-inline">
							<input name="url" lay-verify="url" autocomplete="off" class="layui-input" type="tel">
						  </div>
						</div>
					  </div>
					  
					  <div class="layui-form-item">
						<label class="layui-form-label">验证身份证</label>
						<div class="layui-input-block">
						  <input name="identity" lay-verify="identity" placeholder="" autocomplete="off" id="id_card" class="layui-input" type="text">
						</div>
					  </div>
					  <div class="layui-form-item">
						<label class="layui-form-label">自定义验证</label>
						<div class="layui-input-inline">
						  <input name="password" lay-verify="pass" placeholder="请输入密码" autocomplete="off" class="layui-input" type="password">
						</div>
						<div class="layui-form-mid layui-word-aux">请填写6到12位密码</div>
					  </div>
					  
					  <div class="layui-form-item">
						<div class="layui-inline">
						  <label class="layui-form-label">范围</label>
						  <div class="layui-input-inline" style="width: 100px;">
							<input name="price_min" placeholder="￥" autocomplete="off" class="layui-input" type="text">
						  </div>
						  <div class="layui-form-mid">-</div>
						  <div class="layui-input-inline" style="width: 100px;">
							<input name="price_max" placeholder="￥" autocomplete="off" class="layui-input" type="text">
						  </div>
						</div>
					  </div>
					  
					  <div class="layui-form-item">
						<label class="layui-form-label">单行选择框</label>
						<div class="layui-input-block">
						  <select name="interest" lay-filter="aihao">
							<option value=""></option>
							<option value="0">写作</option>
							<option value="1" selected="">阅读</option>
							<option value="2">游戏</option>
							<option value="3">音乐</option>
							<option value="4">旅行</option>
						  </select>
						</div>
					  </div>
					  
					  
					  <div class="layui-form-item">
						<div class="layui-inline">
						  <label class="layui-form-label">分组选择框</label>
						  <div class="layui-input-inline">
							<select name="quiz">
							  <option value="">请选择问题</option>
							  <optgroup label="城市记忆">
								<option value="你工作的第一个城市">你工作的第一个城市</option>
							  </optgroup>
							  <optgroup label="学生时代">
								<option value="你的工号">你的工号</option>
								<option value="你最喜欢的老师">你最喜欢的老师</option>
							  </optgroup>
							</select>
						  </div>
						</div>
						<div class="layui-inline">
						  <label class="layui-form-label">搜索选择框</label>
						  <div class="layui-input-inline">
							<select name="modules" lay-verify="required" lay-search="">
							  <option value="">直接选择或搜索选择</option>
							  <option value="1">layer</option>
							  <option value="2">form</option>
							  <option value="3">layim</option>
							  <option value="4">element</option>
							  <option value="5">laytpl</option>
							  <option value="6">upload</option>
							  <option value="7">laydate</option>
							  <option value="8">laypage</option>
							  <option value="9">flow</option>
							  <option value="10">util</option>
							  <option value="11">code</option>
							  <option value="12">tree</option>
							  <option value="13">layedit</option>
							  <option value="14">nav</option>
							  <option value="15">tab</option>
							  <option value="16">table</option>
							  <option value="17">select</option>
							  <option value="18">checkbox</option>
							  <option value="19">switch</option>
							  <option value="20">radio</option>
							</select>
						  </div>
						</div>
					  </div>
					  
					  <div class="layui-form-item">
						<label class="layui-form-label">联动选择框</label>
						<div class="layui-input-inline">
						  <select name="quiz1">
							<option value="">请选择省</option>
							<option value="浙江" selected="">浙江省</option>
							<option value="你的工号">江西省</option>
							<option value="你最喜欢的老师">福建省</option>
						  </select>
						</div>
						<div class="layui-input-inline">
						  <select name="quiz2">
							<option value="">请选择市</option>
							<option value="杭州">杭州</option>
							<option value="宁波" disabled="">宁波</option>
							<option value="温州">温州</option>
							<option value="温州">台州</option>
							<option value="温州">绍兴</option>
						  </select>
						</div>
						<div class="layui-input-inline">
						  <select name="quiz3">
							<option value="">请选择县/区</option>
							<option value="西湖区">西湖区</option>
							<option value="余杭区">余杭区</option>
							<option value="拱墅区">临安市</option>
						  </select>
						</div>
						<div class="layui-form-mid layui-word-aux">此处只是演示联动排版，并未做联动交互</div>
					  </div>
					  
					  <div class="layui-form-item">
						<label class="layui-form-label">复选框</label>
						<div class="layui-input-block">
						  <input name="like[write]" title="写作" type="checkbox">
						  <input name="like[read]" title="阅读" checked="" type="checkbox">
						  <input name="like[game]" title="游戏" type="checkbox">
						</div>
					  </div>
					  
					  <div class="layui-form-item" pane="">
						<label class="layui-form-label">原始复选框</label>
						<div class="layui-input-block">
						  <input name="like1[write]" lay-skin="primary" title="写作" checked="" type="checkbox">
						  <input name="like1[read]" lay-skin="primary" title="阅读" type="checkbox">
						  <input name="like1[game]" lay-skin="primary" title="游戏" disabled="" type="checkbox">
						</div>
					  </div>
					  
					  <div class="layui-form-item">
						<label class="layui-form-label">开关-默认关</label>
						<div class="layui-input-block">
						  <input name="close" lay-skin="switch" lay-text="ON|OFF" type="checkbox">
						</div>
					  </div>
					  <div class="layui-form-item">
						<label class="layui-form-label">开关-默认开</label>
						<div class="layui-input-block">
						  <input checked="" name="open" lay-skin="switch" lay-filter="switchTest" lay-text="ON|OFF" type="checkbox">
						</div>
					  </div>
					  <div class="layui-form-item">
						<label class="layui-form-label">单选框</label>
						<div class="layui-input-block">
						  <input name="sex" value="男" title="男" checked="" type="radio">
						  <input name="sex" value="女" title="女" type="radio">
						  <input name="sex" value="禁" title="禁用" disabled="" type="radio">
						</div>
					  </div>
					  <div class="layui-form-item layui-form-text">
						<label class="layui-form-label">普通文本域</label>
						<div class="layui-input-block">
						  <textarea placeholder="请输入内容" class="layui-textarea"></textarea>
						</div>
					  </div>
					  <div class="layui-form-item layui-form-text">
						<label class="layui-form-label">编辑器</label>
						<div class="layui-input-block">
						  <textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="LAY_demo_editor"></textarea>
						</div>
					  </div>
					  <div class="layui-form-item">
						<div class="layui-input-block">
						  <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
						  
						  <button type="reset"class="layui-btn layui-btn-primary">重置</button>
						</div>
					  </div>


				</form>

				<button class="layui-btn" id="submit_form">我的提交</button>

	 				<div class="layui-form-item">
						<label class="layui-form-label">获取短信</label>
						<div class="layui-input-block">
						  <input name="identity" lay-verify="identity" placeholder="" autocomplete="off" id="id_card" class="layui-input" type="text">
						</div>
					</div>
					<button type="button"  id="send_sms"  class="layui-btn layui-btn">获取短信验证码</button>
					<button type="button"  id="send_sms_1"  class="layui-btn layui-btn">获取短信验证码</button>
					<hr>

				<div class="w200 h100">
					<style type="text/css" scoped>
						ul{font-size: 0;}
						li.tit {display:inline-block; font-size: 14px; width:40px;background-color:rgba(232,231,227,0.8);margin-right: 5px;}
						.txt {display:inline-block; font-size: 14px; display: none}
						.tit{cursor:pointer;}
						.tab-show{display: block;}
					</style>
					<div class="clearfix w-p-100" id="tabTest">
						<ul class="s-n">
							<li class="tit red">title 1</li>
							<li class="tit">title 2</li>
							<li class="tit">title 3</li>
							<li class="tit">title 4</li>
						</ul>
					</div>
					<div class="clearfix w-p-100 br-gray" id="tabContent">
						<ul class="s-n">
							<li class="txt tab-show">打了很多字，删了。</li>
							<li class="txt">现在我们可以很容易买到充电五分钟的手机,却再也找不到通话两小时的人.</li>
							<li class="txt">有些异性不能拿来做恋人，却也舍不得给别人</li>
							<li class="txt">text4</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--底部-->
		<div class="footer br-s text-12 p-10-0"></div>
	</div>
<?php include('tpl/footer.php'); ?>
<script type="text/javascript" src="../js/plug_in/layui-v2.1.2/layui/layui.all.js"></script>
<script type="text/javascript" src="../js/plug_in/layDate-v5.0.7/laydate/laydate.js"></script>
<script type="text/javascript" src="../js/plug_in/my_plug_in/web_plug.js"></script>
<script>
	
	seajs.use(
		[
		base.jsUrl + 'base/api_jquery.js',
		base.jsUrl + 'plugin_52002',
		base.jsUrl + 'plug_in/theme/theme',
		base.jsUrl + 'plug_in/nav_list/nav',
		]
	);

	$(function(){
		$.tabSwitch('tabTest','tit','red','tabContent','txt');
		
		var bb = $.checkBrowser();

		console.log(bb);
		layer.msg(bb.msg);
		$('#submit_form').click(function(){
			var isPass =  $.checkCard($('#id_card').val());
			if(isPass.status == false){
				layer.msg(isPass.msg);
				return false;
			}else{
				layer.msg('身份证号码正确',{icon: 1});
			}

			//验证表单
			$.checkForm({
				email: $("input[name='email']").val(),
				// emailMust:true,
				phone: $("input[name='phone']").val()
			},function(data){
				console.log(data);
				if(data.status == false){
					layer.msg(data.msg);
				}
			})
		});

		var parseI = $.GnumOperation.tofixed(1.27,1,0);
		console.log(parseI)

		// var add = $.GnumOperation.add(5.43,7.18,2,0);
		// console.log(add);
	})
</script>
</body>
</html>