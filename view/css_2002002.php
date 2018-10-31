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
				<!--本页样式-->
				<style>
                    .text {
                        font-family:"微软雅黑", "Dosis", sans-serif;
                        font-size: 80px;
                        text-align: center;
                        font-weight: bold;
                        line-height:200px;
                        text-transform:uppercase;
                        position: relative;
                    }
                    .effect01{
                        background-color: #333;
                        color:#fefefe;
                        text-shadow:
                            0px 1px 0px #c0c0c0,
                            0px 2px 0px #b0b0b0,
                            0px 3px 0px #a0a0a0,
                            0px 4px 0px #909090,
                            0px 5px 10px rgba(0, 0, 0, 0.6);
                    }

                    .effect02{
                        color:#333;
                        background-color: #ddd;
                        text-shadow:
                            1px -1px 0 #767676, 
                            -1px 2px 1px #737272, 
                            -2px 4px 1px #767474, 
                            -3px 6px 1px #787777, 
                            -4px 8px 1px #7b7a7a, 
                            -5px 10px 1px #7f7d7d, 
                            -6px 12px 1px #828181, 
                            -7px 14px 1px #868585, 
                            -8px 16px 1px #8b8a89, 
                            -9px 18px 1px #8f8e8d, 
                            -10px 20px 1px #949392, 
                            -11px 22px 1px #999897, 
                            -12px 24px 1px #9e9c9c, 
                            -13px 26px 1px #a3a1a1, 
                            -14px 28px 1px #a8a6a6, 
                            -15px 30px 1px #adabab, 
                            -16px 32px 1px #b2b1b0, 
                            -17px 34px 1px #b7b6b5,
                            -18px 36px 1px #bcbbba, 
                            -19px 38px 1px #c1bfbf, 
                            -20px 40px 1px #c6c4c4, 
                            -21px 42px 1px #cbc9c8, 
                            -22px 44px 1px #cfcdcd;
                    }
	
                    .effect03 {
                        -webkit-text-fill-color: transparent;
                        -webkit-text-stroke: 2px #d6d6d6;
                        background-size: cover;
                    }

                    .effect04{
                        background-color: #333;
                        background-image:
                            linear-gradient(
                                45deg,
                                transparent 45%,
                                hsla(48,20%,90%,1) 45%,
                                hsla(48,20%,90%,1) 55%,
                                transparent 0
                                );
                            background-size: .05em .05em;
                            -webkit-background-clip: text;
                            -webkit-text-fill-color: transparent;
                            -webkit-text-stroke: 2px #111;
                        }
				</style>
				<!--本页样式-->
				<div class="test-box mt20">
                    <fieldset class="custom-fieldset m-20-0">
                        <legend><select ng-options="a.type for a in selctText" ng-model="selctTextOn" class="br-gray"></select></legend>
                    </fieldset>
                    <p class="text {{selctTextOn.className}}" contenteditable="true">前端开发</p>
                </div>

			</div>
		</div>
		<!--底部-->
	</div>
<?php include('tpl/footer.php');?>
<script>
    seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
    
</script>
</body>
</html>