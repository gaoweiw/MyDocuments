/*
 *	Create date: 2017年10月26日11:04:38
 *	Author: gw
 *
 *	jQuery(function(){　});用于存放操作DOM对象的代码，执行其中代码时DOM对象已存在。不可用于存放开发插件的代码，因 为jQuery对象没有得到传递，外部通过jQuery.method也调用不了其中的方法（函数）。 
 *	(function(){　})(jQuery)；用于存放开发插件的代码，执行其中代码时DOM不一定存在，所以直接自动执行DOM操作的代码 请小心使用。
 */

(function() {
	var gw = {};
	var gw_el = {
		isTrue: false, //是否为空
		email: /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/, //是否email格式    /^[a-zA-Z0-9._%-+]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/
		number: /^[0-9]$/, //是否是数字
		letter: /^[A-Za-z]$/, //是否是字母
		decimal:/^\d+(\.\d{0,2})?$/,//是否是两位小数
		account: /^[\u4E00-\u9FA5A-Za-z0-9]{2,18}$/, //用户名称4到18位的字符串 汉字或字母开沟
		password: /^(?!([^A-Za-z]|\d)+$)[a-zA-Z\d]{6,16}$/, //密码格式（字母或数字开头，6到16位非纯数字的字符串）
		phone: /^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|17[0|1|3|6|7|8]|18[0-9])\d{8}$/, //验证手机号码（移动号段： 139 138 137 136 135 134 147 150 151 152 157 158 159 178 182 183 184 187 188  联通号段： 130 131 132 155 156 185 186 145 176  电信号段： 133 153 177 173 180 181 189  虚拟运营商号段：170 171 ）
		btc_coin: /^[0-9A-Za-z]{25,35}$/, //比特币格式的字符串由字母或数字组成的25到35位的字符串
		ltc_coin: /^[0-9A-Za-z]{25,35}$/, //莱特币格式的字符串由字母或数字组成的25到35位的字符串
		id_card: /(^\d{15}$)|(^\d{17}(\d|X)$)/, //身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X
		id_card_15: /^(\d{6})(\d{2})(\d{2})(\d{2})(\d{3})$/, //身份证15位时，次序为省（3位）市（3位）年（2位）月（2位）日（2位）校验位（3位），皆为数字
		id_card_18: /^(\d{6})(\d{4})(\d{2})(\d{2})(\d{3})([0-9]|X)$/, //身份证18位时，次序为省（3位）市（3位）年（4位）月（2位）日（2位）校验位（4位），校验位末尾可能为X
	};

	/*******************
	 * 常规出入判断
	 *******************/

	//判断是否email格式  isEmail(str)
	gw.isEmail = function(str) {
		var reg = gw_el.email;
		return reg.test(str);
	};

	//判断是否是数字 isNumber(str)
	gw.isNumber = function(str) {
		var reg = gw_el.number;
		return reg.test(str);
	};

	//判断是否是字母 isABC(str)
	gw.isABC = function(str) {
		var reg = gw_el.letter;
		return reg.test(str);
	};

	//判断是否是两位小数 isDecimal(str)
	gw.isDecimal = function(str){
		var reg = gw_el.decimal;
		return reg.test(str);
	}

	//判断是否为空	 isNotNull(str)
	gw.isNotNull = function(str) {
		var reg = false;
		if (str != "" && str != null && str) {
			reg = true;
		}
		return reg;
	};

	//验证用户名   IsName(str)
	gw.IsName = function(str) {
		var reg = gw_el.account;
		return reg.test(str);
	};

	//验证密码格式 isPwd（str）
	gw.isPwd = function(str) {
		var reg = gw_el.password;
		return reg.test(str);
	};

	//验证手机号码            isphone（str）
	gw.isphone = function(str) {
		var reg = gw_el.phone;
		return reg.test(str);
	};

	//比特币格式的字符串由字母或数字组成的25到35位的字符串 isBTC(str);
	gw.isBTC = function(str) {
		var reg = gw_el.btc_coin;
		return reg.test(str);
	};

	//莱特币格式的字符串由字母或数字组成的25到35位的字符串 isLTC(str);
	gw.isLTC = function(str) {
		var reg = gw_el.ltc_coin;
		return reg.test(str);
	};

	//获取字符串的长度( 一个中文为两个字符 )
	gw.getNameLength = function(str) {
		return str.replace(/([^\x00-\xFF])/g, '**').length;
	};

	/*******************
	 *  表单输入判断
	 ********************/
	gw.checkForm = function(array, callback) {
		var settings = { //配置需要验证的表单	 Must：必须输入标识
			email: null,
			emailMust: null,

			phone: null,
			phoneMust: null,
		}

		console.log(typeof settings.email); //object

		for (var key in array) {
			settings[key] = array[key];
		}

		console.log(typeof settings.email); //string

		var checkIsTrue = function() {
			var s = settings;
			var result = { //提示内容
				status: true,
				msg: "通过验证"
			};

			if (typeof s.email != 'object') { //判断是否email格式
				if (s.emailMust && !s.email) {
					result = {
						status: false,
						msg: 'email必须输入'
					};
					return result;
				} else {
					if (s.email && gw_el.email.test(s.email) === false) {
						result = {
							status: false,
							msg: 'email格式错误'
						};
						return result;
					}
				}
			}


			if (typeof s.phone != 'object') { //判断手机号格式

				if (s.phoneMust && !s.phone) {
					result = {
						status: false,
						msg: '手机号码必须输入'
					};
					return result;
				} else {
					if (s.phone && gw_el.phone.test(s.phone) === false) {
						result = {
							status: false,
							msg: '手机号码格式错误'
						};
						return result;
					}
				}
			}


			return result;
		}

		if (typeof callback === 'function') {
			callback(checkIsTrue());
		} else {
			console.log('请写回调方法');
		}
	}

	/*******************
	 *  tab切换
	 ********************/
	gw.TabSwitch = function(tab_tt, tab_obj, tab_class, tab_cont, tab_cont_obj) { //1:  title 父级 id 	2: title class 	3: title 选中样式 		4：content父级id 	5:content class
		var _tt_obj = $("#" + tab_tt),
			_tab_cont = $("#" + tab_cont);
		_tt_obj.find("." + tab_obj).click(function() {
			$(this).addClass(tab_class);
			$(this).siblings().removeClass(tab_class);
			var theIndex = $(this).index();
			_tab_cont.find("." + tab_cont_obj).eq(theIndex).siblings().hide();
			_tab_cont.find("." + tab_cont_obj).eq(theIndex).show();
		});
	};

	/*******************
	 *  验证身份证号码是否正确
	 ********************/
	gw.checkIdCard = function(str) {
		var result = {
			status: false,
			msg: "您输入的身份证号码有误"
		};

		var Check_IdCartfn = {};
		//判断身份证号码是否符合规范，包括长度，类型
		Check_IdCartfn.isCardNo = function(card) {
				//身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X
				var reg = gw_el.id_card;
				if (reg.test(card) === false) {
					return false;
				}
				return true;
			}
			//取身份证前两位,校验省份
		Check_IdCartfn.checkProvince = function(card) {
			var province = card.substr(0, 2);
			if (vcity[province] == undefined) {
				return false;
			}
			return true;
		};
		//检查生日是否正确
		Check_IdCartfn.checkBirthday = function(card) {
			var len = card.length;
			//身份证15位时，次序为省（3位）市（3位）年（2位）月（2位）日（2位）校验位（3位），皆为数字
			if (len == '15') {
				var re_fifteen = gw_el.id_card_15;
				var arr_data = card.match(re_fifteen);
				var year = arr_data[2];
				var month = arr_data[3];
				var day = arr_data[4];
				var birthday = new Date('19' + year + '/' + month + '/' + day);
				return Check_IdCartfn.verifyBirthday('19' + year, month, day, birthday);
			}
			//身份证18位时，次序为省（3位）市（3位）年（4位）月（2位）日（2位）校验位（4位），校验位末尾可能为X
			if (len == '18') {
				var re_eighteen = gw_el.id_card_18;
				var arr_data = card.match(re_eighteen);
				var year = arr_data[2];
				var month = arr_data[3];
				var day = arr_data[4];
				var birthday = new Date(year + '/' + month + '/' + day);
				return Check_IdCartfn.verifyBirthday(year, month, day, birthday);
			}
			return false;
		};
		//校验日期
		Check_IdCartfn.verifyBirthday = function(year, month, day, birthday) {
			var now = new Date();
			var now_year = now.getFullYear();
			//年月日是否合理
			if (birthday.getFullYear() == year && (birthday.getMonth() + 1) == month && birthday.getDate() == day) {
				//判断年份的范围（3岁到100岁之间)
				var time = now_year - year;
				if (time >= 3 && time <= 100) {
					return true;
				}
				return false;
			}
			return false;
		};
		//校验位的检测
		Check_IdCartfn.checkParity = function(card) {
			//15位转18位
			card = Check_IdCartfn.changeFivteenToEighteen(card);
			var len = card.length;
			if (len == '18') {
				var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
				var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
				var cardTemp = 0,
					i, valnum;
				for (i = 0; i < 17; i++) {
					cardTemp += card.substr(i, 1) * arrInt[i];
				}
				valnum = arrCh[cardTemp % 11];
				if (valnum == card.substr(17, 1)) {
					return true;
				}
				return false;
			}
			return false;
		};
		//15位转18位身份证号
		Check_IdCartfn.changeFivteenToEighteen = function(card) {
			if (card.length == '15') {
				var arrInt = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
				var arrCh = new Array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
				var cardTemp = 0,
					i;
				card = card.substr(0, 6) + '19' + card.substr(6, card.length - 6);
				for (i = 0; i < 17; i++) {
					cardTemp += card.substr(i, 1) * arrInt[i];
				}
				card += arrCh[cardTemp % 11];
				return card;
			}
			return card;
		};

		//各省份的开始位
		var vcity = {
			11: "北京",
			12: "天津",
			13: "河北",
			14: "山西",
			15: "内蒙古",
			21: "辽宁",
			22: "吉林",
			23: "黑龙江",
			31: "上海",
			32: "江苏",
			33: "浙江",
			34: "安徽",
			35: "福建",
			36: "江西",
			37: "山东",
			41: "河南",
			42: "湖北",
			43: "湖南",
			44: "广东",
			45: "广西",
			46: "海南",
			50: "重庆",
			51: "四川",
			52: "贵州",
			53: "云南",
			54: "西藏",
			61: "陕西",
			62: "甘肃",
			63: "青海",
			64: "宁夏",
			65: "新疆",
			71: "台湾",
			81: "香港",
			82: "澳门",
			91: "国外"
		};
		var card = str;
		//是否为空
		if (card === '') {
			result.status = false;
			result.msg = "请输入身份证号，身份证号不能为空";
			return result;
		}
		//校验长度，类型
		if (Check_IdCartfn.isCardNo(card) === false) {
			result.status = false;
			result.msg = "您输入的身份证号码不正确，请重新输入";
			return result;
		}
		//检查省份
		if (Check_IdCartfn.checkProvince(card) === false) {
			result.status = false;
			result.msg = "您输入的身份证号码有误,请重新输入";
			return result;
		}
		//校验生日
		if (Check_IdCartfn.checkBirthday(card) === false) {
			result.status = false;
			result.msg = "您输入的身份证号码生日不正确,请重新输入";
			return result;
		}
		//检验位的检测
		if (Check_IdCartfn.checkParity(card) === false) {
			result.status = false;
			result.msg = "您的身份证校验位不正确,请重新输入";
			return result;
		}
		result.status = true;
		result.msg = "";
		return result;
	};

	/*******************
	 *  判断当前是什么浏览器
	 ********************/
	gw.checkBrowser = function() {
		var result = {
			status: false,
			name: '',
			msg: "检测当前浏览器"
		};
		var check_BroeserFn = {};
		check_BroeserFn.isBrowser = function() {
			var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串

			if (userAgent.indexOf("Opera") > -1) { //判断是否Opera浏览器
				return "Opera"
			};
			if (userAgent.indexOf("Firefox") > -1) { //判断是否Firefox浏览器
				return "FF";
			}
			if (userAgent.indexOf("Chrome") > -1) { //判断是否Chrome浏览器
				return "Chrome";
			}
			if (userAgent.indexOf("Safari") > -1) { //判断是否Safari浏览器
				return "Safari";
			}
			if (!!window.ActiveXObject || "ActiveXObject" in window) { //判断是否IE浏览器（ie10及以上不支持ie浏览器的判断了，因为ie11已经不支持document.all了，下面是支持ie11的版本的，当然ie6-8也是支持的）
				return "IE";
			};
			if (navigator.userAgent.indexOf("MSIE") > -1) { //判断是否IE浏览器
				return "IE";
			}
		}

		var str = check_BroeserFn.isBrowser();
		//获取IE浏览器的版本
		check_BroeserFn.getBrowserVersion = function(str) { // ie9   ie10  才有用。ie11不支持
			var ua = navigator.userAgent;
			var s = "MSIE";
			var i = ua.indexOf(s)
			var ver = parseFloat(ua.substr(i + s.length));
			result.status = true;
			result.name = 'IE';
			result.msg = '当前是IE浏览器,版本号：' + ver;
			return result;
		}
		if (str == "IE") {
			return check_BroeserFn.getBrowserVersion(str);
		}
		if (str == "FF") {
			result.status = true;
			result.name = 'Firefox';
			result.msg = '当前是Firefox浏览器';
			return result;
		}
		if (str == "Chrome") {
			result.status = true;
			result.name = 'Chrome';
			result.msg = '当前是Chrome浏览器';
			return result;
		}
		if (str == "Opera") {
			result.status = true;
			result.name = 'Opera';
			result.msg = '当前是Opera浏览器';
			return result;
		}
		if (str == "Safari") {
			result.status = true;
			result.name = 'Safari';
			result.msg = '当前是Safari浏览器';
			return result;
		}

		result.status = false;
		result.name = '';
		result.msg = '';
		return result;
	}


	/*******************
	 *  onclick 传递 json 转化
	 ********************/
	gw.jsonTranslation = function(data) {
		return JSON.stringify(data).replace(/\"/g, "'");
	}

	/*******************
	 *  判断浏览器是否支持localStorage
	 ********************/
	gw.isSupport = function() {
		var back = false;
		if (window.localStorage) {
			back = true;
		} else {
			back = false;
		} //或者 if(typeof window.localStorage == 'undefined'){ 	alert("浏览暂不支持localStorage") }
		return back;
	}

	/*******************
	 *  浏览器存储(localStorage,sessionStorage)
	 *  status : set 存		get 读 		del 删除
	 ********************/
	gw.localStorage = function(status, key, value) {
		key = String(key);
		value = JSON.stringify(value);
		if (status === 'set') {
			localStorage.setItem(key, value);
		} else if (status === 'get') {
			return localStorage.getItem(key);
		} else if (status === 'del') {
			localStorage.removeItem(key);
		} else {
			layer.msg('localStorage参数错误');
			return false;
		}
	}

	gw.sessionStorage = function(status, key, value) {
		key = String(key);
		value = JSON.stringify(value);
		if (status === 'set') {
			sessionStorage.setItem(key, value);
		} else if (status === 'get') {
			return JSON.parse(sessionStorage.getItem(key));
		} else if (status === 'del') {
			sessionStorage.removeItem(key);
		} else {
			layer.msg('sessionStorage参数错误');
			return false;
		}
	}

	/*******************
	 *  浏览器存储(cookie)  0.000694
	 *  简单写入一条 Cookie 信息
	 *  base.Cookie("user", "baidu");
	 *  写入一条 Cookie 信息，并且设置更多选项
	 *  base.Cookie("user", "baidu", {
	 *      expires: 10, 	// 有效期为 10 天
	 *      path: "/",		 // 整个站点有效
	 *      domain: "www.baidu2.com", // 有效域名
	 *      secure: true // 加密数据传输
	 *  });
	 *  读取
	 *  base.Cookie("user");
	 *  删除
	 *  base.Cookie("user", null);
	 ********************/
	gw.cookie = function(name, value, options) {
		// 如果第二个参数存在
		if (typeof value != 'undefined') {
			options = options || {};
			if (value === null) {
				// 设置失效时间
				options.expires = -1;
			}
			var expires = '';
			// 如果存在事件参数项，并且类型为 number，或者具体的时间，那么分别设置事件
			if (options.expires && (typeof options.expires == 'number' || options.expires.toUTCString)) {
				var date;
				if (typeof options.expires == 'number') {
					date = new Date();
					date.setTime(date.getTime() + (options.expires * 24 * 60 * 60 * 1000));
				} else {
					date = options.expires;
				}
				expires = '; expires=' + date.toUTCString();
			}
			var path = options.path ? '; path=' + options.path : '', // 设置路径
				domain = options.domain ? '; domain=' + options.domain : '', // 设置域
				secure = options.secure ? '; secure' : ''; // 设置安全措施，为 true 则直接设置，否则为空

			// 把所有字符串信息都存入数组，然后调用 join() 方法转换为字符串，并写入 Cookie 信息
			document.cookie = [name, '=', encodeURIComponent(value), expires, path, domain, secure].join('');
		} else { // 如果第二个参数不存在
			var CookieValue = null;
			if (document.cookie && document.cookie != '') {
				var Cookie = document.cookie.split(';');
				for (var i = 0; i < document.cookie.length; i++) {
					var Cookie = (Cookie[i] || "").replace(/^\s+|\s+$/g, "");
					if (Cookie.substring(0, name.length + 1) == (name + '=')) {
						CookieValue = decodeURIComponent(Cookie.substring(name.length + 1));
						break;
					}
				}
			}
			return CookieValue;
		}
	};

	/*******************
	 *  UUID
	 *  len:多少位随机码	
	 *  radix:随机字符串到哪一位
	 ********************/
	gw.uuid = function(len, radix) {
		var timestamp = new Date().getTime();
		var char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz' + timestamp;
		var chars = char.split('');

		var uuid = [],
			i;
		radix = radix || chars.length;

		if (len) {
			// Compact form
			for (i = 0; i < len; i++) uuid[i] = chars[0 | Math.random() * radix];
		} else {
			// rfc4122, version 4 form
			var r;

			// rfc4122 requires these characters
			uuid[8] = uuid[13] = uuid[18] = uuid[23] = '-';
			uuid[14] = '4';

			// Fill in random data.  At i==19 set the high bits of clock sequence as
			// per rfc4122, sec. 4.1.5
			for (i = 0; i < 36; i++) {
				if (!uuid[i]) {
					r = 0 | Math.random() * 16;
					uuid[i] = chars[(i == 19) ? (r & 0x3) | 0x8 : r];
				}
			}
		}

		return uuid.join('');
	}

	/*******************
	 * 密码强度判断
	 *  t:输入的值  show:显示密码强度的id
	 *******************/
	gw.passwordStrength = function(t, show) {
		var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
		var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
		var enoughRegex = new RegExp("(?=.{6,}).*", "g");
		if (enoughRegex.test($(t).val()) == false) {
			$('#' + show).html('长度在6~20位之间, 由数字、字母、字符组成，至少包含两种');
			//密码小于六位的时候，密码强度图片都为灰色
		} else if (strongRegex.test($(t).val())) {
			$('#' + show).html('<span class="pwd-decide-strong">强</span>&nbsp;&nbsp;密码很安全');
			//密码为八位及以上并且字母数字特殊字符三项都包括,强度最强
		} else if (mediumRegex.test($(t).val())) {
			$('#' + show).html('<span class="pwd-decide-centre">中</span>&nbsp;&nbsp;安全强度适中，可以使用三种以上的组合来提高安全强度');
			//密码为七位及以上并且字母、数字、特殊字符三项中有两项，强度是中等
		} else {
			$('#' + show).html('<span class="pwd-decide-weak">弱</span>&nbsp;&nbsp;有被盗风险,建议使用字母、数字和符号两种及以上组合');
			//如果密码为6为及以下，就算字母、数字、特殊字符三项都包括，强度也是弱的
		}
		return true;
	};

	/***********************
	 *  加减乘除精确计算
	 *  add / subtract / multiply /divide
	 *
	 * ** explame **
	 *  0.1 + 0.2 == 0.30000000000000004 （多了 0.00000000000004）
	 *  0.2 + 0.4 == 0.6000000000000001  （多了 0.0000000000001）
	 *  19.9 * 100 == 1989.9999999999998 （少了 0.0000000000002）
	 *
	 * floatObj.add(0.1, 0.2) >> 0.3
	 * floatObj.multiply(19.9, 100) >> 1990
	 *
	 ***********************/
	gw.floatObj = function() {

		/*
		 * 判断obj是否为一个整数
		 */
		function isInteger(obj) {
			return Math.floor(obj) === obj
		}

		/*
		 * 将一个浮点数转成整数，返回整数和倍数。如 3.14 >> 314，倍数是 100
		 * @param floatNum {number} 小数
		 * @return {object}
		 *   {times:100, num: 314}
		 */
		function toInteger(floatNum) {
			var ret = {
				times: 1,
				num: 0
			}
			if (isInteger(floatNum)) {
				ret.num = floatNum
				return ret
			}
			var strfi = floatNum + ''
			var dotPos = strfi.indexOf('.')
			var len = strfi.substr(dotPos + 1).length
			var times = Math.pow(10, len)
			var intNum = parseInt(floatNum * times + 0.5, 10)
			ret.times = times
			ret.num = intNum
			return ret
		}

		/*
		 * 核心方法，实现加减乘除运算，确保不丢失精度
		 * 思路：把小数放大为整数（乘），进行算术运算，再缩小为小数（除）
		 *
		 * @param a {number} 运算数1
		 * @param b {number} 运算数2
		 * @param digits {number} 精度，保留的小数点数，比如 2, 即保留为两位小数
		 * @param op {string} 运算类型，有加减乘除（add/subtract/multiply/divide）
		 *
		 */
		function operation(a, b, digits, status, op) {
			var o1 = toInteger(a)
			var o2 = toInteger(b)
			var n1 = o1.num
			var n2 = o2.num
			var t1 = o1.times
			var t2 = o2.times
			var max = t1 > t2 ? t1 : t2
			var result = null
			switch (op) {
				case 'add':
					if (t1 === t2) { // 两个小数位数相同
						result = n1 + n2
					} else if (t1 > t2) { // o1 小数位 大于 o2
						result = n1 + n2 * (t1 / t2)
					} else { // o1 小数位 小于 o2
						result = n1 * (t2 / t1) + n2
					}
					return tofixed(result / max, digits, status)
				case 'subtract':
					if (t1 === t2) {
						result = n1 - n2
					} else if (t1 > t2) {
						result = n1 - n2 * (t1 / t2)
					} else {
						result = n1 * (t2 / t1) - n2
					}
					return tofixed(result / max, digits, status)
				case 'multiply':
					result = (n1 * n2) / (t1 * t2)
					return tofixed(result, digits, status)
				case 'divide':
					result = (n1 / n2) * (t2 / t1)
					return tofixed(result, digits, status)
			}
		}

		// 加减乘除的四个接口
		function add(a, b, digits, status) {
			return operation(a, b, digits, status, 'add')
		}

		function subtract(a, b, digits) {
			return operation(a, b, digits, status, 'subtract')
		}

		function multiply(a, b, digits) {
			return operation(a, b, digits, status, 'multiply')
		}

		function divide(a, b, digits) {
			return operation(a, b, digits, status, 'divide')
		}

		/**
		 * toFixed 修复
		 * num  : 数字
		 * keep  : 保留几位数
		 * status:  0 向下取 ----- 否则 向上取 
		 */
		function tofixed(num, keep, status) {
			var times = Math.pow(10, keep),
				number, endNum, decimals, round;
			typeof num === 'number' ? number = num.toString() : number = num;

			decimals = number.split('.');
			//如果是小数
			if(decimals[1]){

				if(keep > 0 ){
					endNum = decimals[1].charAt(keep);	//返回指定位置的字符(这里是最后一位)

					if(endNum){	//如果最后一位存在
						if (status == 0) {
							round = number * times - endNum / 10;
						} else {
							round = number * times + (1 - endNum / 10);
						}
					}else{
						round = number * times - endNum / 10;
					}

					round = parseInt(round, 10) / times
					round = round.toString();


					//如果像上取整 后面位数为零 显示
					var addZero = round.split('.');
					var zeroArr = '';

					if (!addZero[1] && keep != 0) {

						for (var i = 0; i < keep; i++) {
							zeroArr += '0';
						}
						round = addZero[0] + '.' + zeroArr;

					} else if (addZero[1].length < keep) {

						for (var i = 0; i < keep - addZero[1].length; i++) {
							zeroArr += '0';
						}
						round = round + zeroArr;

					}
					return round;
				}else{
					return parseInt(number);
				}
				
			}else{
				//不是小数
				if(keep > 0){
					number = number + '.';
					for (var i = 0; i < keep; i++) {
						number += '0';
					}
					return number;
				}else{
					return number;
				}
				
			}
			
		}

		return {
			add: add, //加
			sub: subtract, //减
			mul: multiply, //乘
			div: divide, //除
			tofixed: tofixed //保留小数
		}
	}();


	/***********************
	 *  短信验证码
	 ***********************/
	gw.sendSms = function(options) {
		var SET = {
			smsBtnBgk: '#FF5722', //按钮颜色
			smsBtnColor: '#fff', //文字颜色

			smsReset: '重新获取',
			smsResetColor: '#fff', //重新获取文字颜色
			smsResetBgk: '#ef3c34', //重新获取按钮颜色

			smsRun: '发送中...',
			smsRunColor: '#aaaaaa', //发送中文字颜色
			smsRunBgk: '#e8e8e8', //发送中按钮颜色

			smsShow: '秒后重新获取验证码',
			smsError: '短信发送失败',
			isRun: true, //请求防连点
		}

		//事件触发按钮
		SET.smsBtn = '';

		//接收的短信的手机号码
		SET.mobile = '';

		//读秒时间(默认60s)
		SET.smsTimes = 60;

		//发送验证码请求地址
		SET.requestUrl = '';

		//发送验证码请求数据
		SET.requestData = {};

		var init = function() {
			var temp = SET;

			for (var i in options) {
				temp[i] = options[i];
			}

			//按钮颜色
			temp.smsBtn.css({
				'background': temp.smsBtnBgk,
				'color': temp.smsBtnColor
			});

			//按钮事件
			temp.smsBtn.click(function() {
				sendBegin(temp);
			})

		}

		var sendBegin = function(w) {
			if (w.isRun) {
				//请求先变化按钮
				w.smsBtn.css({
					'background': w.smsRunBgk,
					'color': w.smsRunColor
				}).text(w.smsRun);

				//发起请求
				request(w, function(data) {
					//短信发送成功后
					timeReduce(w);
				});
			}
		}

		//发起请求
		var request = function(w, callback) {
			if (w.isRun) {
				w.isRun = false;
				$.ajax({
					url: w.requestUrl,
					type: 'post',
					dataType: 'json',
					data: w.requestData,
					success: function(data) {
						if (data && data.code == '0000') {
							//成功后开始读秒
							if (typeof callback === 'function') {
								callback(data);
							}
						} else {
							//失败后变为重新获取
							resterSms(w);
						}
					},
					error: function(msg) {
						w.isRun = true;
						layer.msg(w.smsError);
						console.log(msg);
					}
				})
			}
		}

		//请求成功后开始读秒
		var timeReduce = function(w) {
			//读秒按钮变化
			w.smsBtn.css({
				'background': w.smsRunBgk,
				'color': w.smsRunColor
			});

			//时间开始减少
			var s = w.smsTimes;

			//读秒文字变化
			w.smsBtn.text(s + w.smsShow);

			var timers = setInterval(function() {
				s -= 1;
				w.smsBtn.text(s + w.smsShow);
				if (s == 0) {
					clearInterval(timers); //当时间等于0的时候清除setInterval
					resterSms(w); //按钮变为重新获取
				}
			}, 1000);
		}

		//重新获取
		var resterSms = function(w) {

			w.isRun = true; //允许在次获取验证码

			w.smsBtn.css({
				'background': w.smsResetBgk,
				'color': w.smsResetColor
			}).text(w.smsReset);
		}

		//开始执行
		init();
	};

	/***********************
	 *  jquery 页码 分页
	 * pageBox: 翻页 容器
	 ***********************/
	gw.page = function(options) {
		var set = {};

		//翻页容器
		set.pageBox = '';

		//每页多少条
		set.showData = 10;

		//总条数
		set.totalData = '';

		//当前页
		set.current = 1;

		//是否固定在屏幕底部
		set.fixedDown = true;

		//当前选中的样式
		set.activeCls = '';

		//当前页前后页数
		set.count = 3;

		//是否开启首页尾页
		set.coping = false;

		//样式
		set.style = {

		}

		var init = function() {
				if (options) {
					for (var i in set) {
						set[i] = options[i];
					}
				}



			}
			//box
		var boxDom = function() {
			var html = [];
			html.push('<div></div>');
		}



	}



	$.extend({
		tabSwitch: gw.TabSwitch, 		//tab切换
		checkCard: gw.checkIdCard, 		//验证身份证
		checkBrowser: gw.checkBrowser, 	//验证当前浏览器
		checkForm: gw.checkForm, 		//验证表单
		jsonTranslation: gw.jsonTranslation, 	//json转译

		Gmobile: gw.isphone,			 //验证手机号
		Guser: gw.IsName, 			//验证用户名
		Gpwd: gw.isPwd, 			//验证密码
		Gemail: gw.isEmail, 			//验证email
		Gnumber: gw.isNumber, 		//验证是否是数字
		Gdecimal: gw.isDecimal, 		//验证是否是两位以下的小数
		Gabc: gw.isABC, 			//验证是否是字母
		Gnull: gw.isNotNull, 			//验证是否为空
		Gbtc: gw.isBTC, 				//比特币
		Gltc: gw.isLTC, 				//莱特币

		Gstrength:gw.passwordStrength,	//密码强度判断
		Glength: gw.getNameLength, 		//获取字符串的长度

		Gstorage: gw.isSupport, 		//浏览器是否支持localStorage
		Glocal: gw.localStorage, 		//浏览器存储(localStorage,sessionStorage)
		Gsession: gw.sessionStorage, 		//浏览器存储(localStorage,sessionStorage)
		Gcookie: gw.cookie, 			//cookie

		Guuid: gw.uuid, 			//随机码
		GnumOperation: gw.floatObj, 		//运算，保留小数

		Gsms: gw.sendSms, 			//获取短信验证码

		Gpage: gw.page, 			//jquery 分页
	});
})(jQuery)