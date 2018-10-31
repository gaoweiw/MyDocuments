
<div ng-click ="themeclick($event)" class="theme br-s">

	<div ng-click="themeChange()" class="fl mr20 text-14 lh-40 mouse-hand text-l-s-1 noselect">
		<a href="javascript:void(0)" class="button button-small button-pill"><i class="fa fa-paint-brush fa-fw margin-bottom"></i>主题切换</a>
	</div>
	<div id="tChoice" class="choice gray3 text-10 br-s ">
		<ul class="s-n">
			<li ng-repeat = "t in themeList" ng-click="clickTheme(t.id)">
				<div class="bgk-min"><img ng-src="{{t.imgurl}}"></div>
				<span class="bgk-name" ng-bind="t.name"></span>
			</li>
		</ul>
	</div>
	<div ng-click="exit()" class="fl mr20 text-14 lh-40 mouse-hand text-l-s-1 noselect">
		<button class="button button-small button-pill"><i class="fa fa-power-off fa-fw margin-bottom"></i></button>
	</div>

</div>