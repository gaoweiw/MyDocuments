<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php'); ?>
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
                <blockquote class="text-quote mt20">
                    html常用特殊字符
                </blockquote>
                <table class="table-responsive" border="1">
                    <tbody>
                        <tr>
                            <th>显示结果</th>
                            <th>描述</th>
                            <th>实体名称</th>
                            <th>实体编号</th>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <td>空格</td>
                            <td>&amp;nbsp;</td>
                            <td>&amp;#160;</td>
                        </tr>

                        <tr>
                            <td>&lt;</td>
                            <td>小于号</td>
                            <td>&amp;lt;</td>
                            <td>&amp;#60;</td>
                        </tr>

                        <tr>
                            <td>&gt;</td>
                            <td>大于号</td>
                            <td>&amp;gt;</td>
                            <td>&amp;#62;</td>
                        </tr>

                        <tr>
                            <td>&amp;</td>
                            <td>和号</td>
                            <td>&amp;amp;</td>
                            <td>&amp;#38;</td>
                        </tr>

                        <tr>
                            <td>"</td>
                            <td>引号</td>
                            <td>&amp;quot;</td>
                            <td>&amp;#34;</td>
                        </tr>

                        <tr>
                            <td>'</td>
                            <td>撇号&nbsp;</td>
                            <td>&amp;apos; (IE不支持)</td>
                            <td>&amp;#39;</td>
                        </tr>

                        <tr>
                            <td>¥</td>
                            <td>元（yen）</td>
                            <td>&amp;yen;</td>
                            <td>&amp;#165;</td>
                        </tr>

                        <tr>
                            <td>&copy;</td>
                            <td>版权（copyright）</td>
                            <td>&amp;copy;</td>
                            <td>&amp;#169;</td>
                        </tr>

                        <tr>
                            <td>&reg;</td>
                            <td>注册商标</td>
                            <td>&amp;reg;</td>
                            <td>&amp;#174;</td>
                        </tr>

                        <tr>
                            <td>&trade;</td>
                            <td>商标</td>
                            <td>&amp;trade;</td>
                            <td>&amp;#8482;</td>
                        </tr>

                        <tr>
                            <td>×</td>
                            <td>乘号</td>
                            <td>&amp;times;</td>
                            <td>&amp;#215;</td>
                        </tr>

                        <tr>
                            <td>÷</td>
                            <td>除号</td>
                            <td>&amp;divide;</td>
                            <td>&amp;#247;</td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
		<!--底部-->

	</div>
<?php include('tpl/footer.php'); ?>
<script>
	seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
</script>
</body>
</html>