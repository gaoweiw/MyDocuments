<?php include('tpl/header.php'); include('tpl/navTop.php'); include('tpl/navLeft.php');?>
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
                <!--本页面样式-->
                <style>
                    .site-doc-color{font-size:0;}
                    .site-doc-color li {border-radius: 2px;color: #fff;display: inline-block;font-size: 14px;line-height: 22px;margin-bottom: 20px;margin-left: 20px; padding: 20px 10px; text-align: center; vertical-align: middle; width: 180px;}
                    .site-doc-color li p[tips] {font-size: 12px;opacity: 0.8;}
                    .site-doc-necolor li {border-radius: 0;margin-left: 0;width: 108px;}
                </style>
                <!--本页面样式-->

                <div class="mt-20">
                    <fieldset class="custom-fieldset m-20-0">
                        <legend><a name="color-design">常用主色</a></legend>
                    </fieldset>
                    <ul class="site-doc-color s-n" >
                        <li style="background-color: #009688;">
                            <p>#009688</p>
                            <p tips="">通常用于按钮、及任何修饰元素</p>
                        </li>
                        <li style="background-color: #5FB878;">
                            <p>#5FB878</p>
                            <p tips="">一般用于选中状态</p>
                        </li>
                        <li style="background-color: #393D49;">
                            <p>#393D49</p>
                            <p tips="">通常用于导航</p>
                        </li>
                        <li style="background-color: #1E9FFF;">
                            <p>#1E9FFF</p>
                            <p tips="">比较适合一些鲜艳色系的页面</p>
                        </li>
                    </ul>
                </div>

                <div class="mt-20">
                    <fieldset class="custom-fieldset m-20-0">
                        <legend><a name="color-design">场景色</a></legend>
                    </fieldset>
                    <ul class="site-doc-color s-n">
                        <li style="background-color: #FFB800;">
                            <p>#FFB800</p>
                            <p tips="">暖色系，一般用于提示性元素</p>
                        </li>
                        <li style="background-color: #FF5722;">
                            <p>#FF5722</p>
                            <p tips="">比较引人注意的颜色</p>
                        </li>
                        <li style="background-color: #01AAED;">
                            <p>#01AAED</p>
                            <p tips="">用于文字着色，如链接文本</p>
                        </li>
                        <li style="background-color: #2F4056;">
                            <p>#2F4056</p><p tips="">侧边或底部普遍采用的颜色</p>
                        </li>
                    </ul>
                </div>

                <div class="mt-20">
                    <fieldset class="custom-fieldset m-20-0">
                        <legend><a name="color-design">极简中性色</a><small class="gray6 text-12">（一般用于背景、边框）</small></legend>
                    </fieldset>
                    <ul class="site-doc-color site-doc-necolor">
                        <li style="background-color: #fbfbfb; color: #000;">
                            <p>#F0F0F0</p>
                        </li>
                        <li style="background-color: #f2f2f2; color: #000;">
                            <p>#f2f2f2</p>
                        </li>
                        <li style="background-color: #eeeeee; color: #000;">
                            <p>#eeeeee</p>
                        </li>
                        <li style="background-color: #e2e2e2; color: #000;">
                            <p>#e2e2e2</p>
                        </li>
                        <li style="background-color: #dddddd; color: #000;">
                            <p>#dddddd</p>
                        </li>
                        <li style="background-color: #d2d2d2; color: #000;">
                            <p>#d2d2d2</p>
                        </li>
                        <li style="background-color: #c2c2c2;">
                            <p>#c2c2c2</p>
                        </li>
                    </ul>
                </div>

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