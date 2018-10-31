define(function(require, exports, module) {
	
	var app = angular.module('myApp', ['theme', 'nav']);
	

	app.controller('myCtrl', function($scope) {

		
		layui.use(['layer', 'form', 'element'], function() { //我们强烈推荐你在代码最外层把需要用到的模块先加载
			var layer = layui.layer,form = layui.form,element = layui.element;

			var province, city, area, town; 				//省市区镇（json）
			var prov_name, city_name, area_name, town_name; 	//省市区镇（name）
			var prov_this,city_this, area_this, town_this; 		//省市区镇（当前选中的code）
			var prov_code,city_code, area_code; 			//省市区镇code
			var prov_html, city_html, area_html, town_html; 	// select下拉框html
			var prov_sed, city_sed, area_sed, town_sed; 		// select下拉框默认选中

			JqueryAjax.get({
				url: base.jsonUrl + 'city/city.json'
			}, function(data) {

				province = data.FourCityData; //省
				var provFunction = function(){
					prov_html += '<option value="">请选择省</option>';
					for (var p in province) {
						prov_this && prov_this == province[p].code?prov_sed = 'selected':prov_sed = '';//标志默认选中

						prov_html += '<option value="' + province[p].code + '" '+prov_sed+'>' + p + '</option>';
					}
					$('#quiz1').html(prov_html);
					form.render('select'); //刷新select选择框渲染
				}

				//layui select change事件（省）
				form.on('select(prov)', function(data){
					prov_name = $(this).text();	//得到被选中的text
					prov_this = data.value;		//得到被选中的value
					city_this ='';
					area_this = ''; 
					town_this = '';	
					cityFunction();
					areaFunction();
					townFunction();
				});
				
				//城市
				var cityFunction  = function(){
					city_html = '';
					city_html += '<option value="">请选择市</option>';
					for (var p in province) {
						city = province[p].items;//市
						prov_code = province[p].code;
						if(prov_code == prov_this){
							for (var c in city) {
								city_this && city_this == city[c].code?city_sed = 'selected':city_sed = '';//标志默认选中
								city_html += '<option value="'+city[c].code+'" '+ city_sed+'>'+c+'</option>';
							}
						}
					}
					$('#quiz2').html(city_html);
					form.render('select'); //刷新select选择框渲染
				}

				//layui select change事件（市）
				form.on('select(city)', function(data){
					city_name = $(this).text();	//得到被选中的text
					city_this = data.value;		//得到被选中的value
					area_this = ''; 
					town_this = '';
					areaFunction();
					townFunction();
				});

				//区、县
				var areaFunction  = function(){
					area_html = '';
					area_html += '<option value="">请选择区/县</option>';
					for (var p in province) {
						city = province[p].items;//市
						prov_code = province[p].code;
						if(prov_code == prov_this){
							for (var c in city) {
								area = city[c].items;//区、县
								city_code = city[c].code;
								if(city_code == city_this){
									for (var a in area) {
										area_this && area_this == area[a].code?area_sed = 'selected':area_sed = '';//标志默认选中
										area_html += '<option value="'+area[a].code+'" '+ area_sed+'>'+a+'</option>';
									}
								}
							}
						}
					}
					$('#quiz3').html(area_html);
					form.render('select'); //刷新select选择框渲染
				}

				//layui select change事件（区）
				form.on('select(area)', function(data){
					area_name = $(this).text();	//得到被选中的text
					area_this = data.value;		//得到被选中的value
					town_this = '';
					townFunction();
				});

				//镇、乡
				var townFunction  = function(){
					town_html = '';
					town_html += '<option value="">请选择镇乡/街道</option>';
					for (var p in province) {
						city = province[p].items;//市
						prov_code = province[p].code;
						if(prov_code == prov_this){
							for (var c in city) {
								area = city[c].items;//区、县
								city_code = city[c].code;
								if(city_code == city_this){
									for (var a in area) {
										town = area[a].items;//乡、镇
										area_code = area[a].code;
										if(area_code == area_this){
											for (var t in town) {
												town_this && town_this == town[t]?town_sed = 'selected':town_sed = '';//标志默认选中
												town_html += '<option value="'+town[t]+'" '+ town_sed +'>'+t+'</option>';
											}
										}
									}
								}
							}
						}
					}
					$('#quiz4').html(town_html);
					form.render('select'); //刷新select选择框渲染
				}

				//layui select change事件（镇、乡）
				form.on('select(town)', function(data){
					town_name = $(this).text();	//得到被选中的text
					town_this = data.value;		//得到被选中的value
				});

				//提交
				$scope.linkage = function(){
					if(!prov_this){layer.msg('请选择省份');return;}
					if(!city_this){layer.msg('请选择城市');return;}
					if(!area_this){layer.msg('请选择区/县');return;}
					if(!town_this){layer.msg('请选择镇乡/街道');return;}
					layer.alert('你选择了<br> 省：' + $('#quiz1 option:selected').text()+'='+prov_this +' <br>市：'+ $('#quiz2 option:selected').text() +'='+city_this+'<br>区：'+ $('#quiz3 option:selected').text() +'='+area_this+'<br>镇：'+ $('#quiz4 option:selected').text()+'='+town_this );
				}

				//运行方法
				var defaultf = function(p,c,a,t){
					provFunction()
					if(c){cityFunction();}
					if(a){areaFunction();}
					if(t){townFunction();}
				}
				//默认选中
				var defaultData = function(){
					prov_this = '510000000';
					city_this ='510100000';
					area_this = '510104000'; 
					town_this = '510104026';

					
					defaultf(prov_this,city_this,area_this,town_this);
				}
				defaultData();
			});
		});
		
	})
	angular.bootstrap(document, ['myApp']);
});