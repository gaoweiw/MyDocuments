/*
 * jauery ajax
 *author	：gw
 * type 		： 请求类型（get,post,put,delete）
 * async		： 同步还是异步
 * url 		： 请求地址
 * timeout 	： 超时时间设置，单位毫秒
 * data 		： 请求的数据
 * dataType 	： 请求类型
 * headrs 	： 请求头
 */
var JqueryAjax = function() {
	var sets = {
		url: "",
		timeout: 10000, //默认10秒
		type: "",
		async: true,//默认异步 
		data: {},
		dataType: "json",
		headrs: {
			"Content-Type": "application/x-www-form-urlencoded"
		}
	};
	var tip = {
		notUrl: "缺少请求地址",
		requestError: "请求出错",
		requestTimeout: "请求超时",
		notObj: "请求参数不是一个对象数组"
	};
	var get = function(array, callback, errorback) {
		if (!checkArray(array)) {
			return
		} else {
			startAjax(sets.url, "get", sets.data, sets.dataType, sets.headers, sets.timeout, sets.async,callback, errorback)
		}
	};
	var post = function(array, callback, errorback) {
		if (!checkArray(array)) {
			return
		} else {
			startAjax(sets.url, "post", sets.data, sets.dataType, sets.headers, sets.timeout, sets.async,callback, errorback)
		}
	};
	var put = function(array, callback, errorback, errorback) {
		if (!checkArray(array)) {
			return
		} else {
			startAjax(sets.url, "put", sets.data, sets.dataType, sets.headers, sets.timeout, sets.async,callback, errorback)
		}
	};
	var del = function(array, callback, errorback) {
		if (!checkArray(array)) {
			return
		} else {
			startAjax(sets.url, "delete", sets.data, sets.dataType, sets.headers, sets.timeout,sets.async, callback, errorback)
		}
	};

	//参数实例
	var checkArray = function(array) {
		if (typeof array === "object") {
			if (!array.url) {
				layer.msg(tip.notUrl, {
					time: 3000
				});
				return false
			}
			for (var key in array) {
				sets[key] = array[key]
			}
		} else {
			layer.msg(tip.notObj, {
				time: 3000
			});
			return false
		}
		return array
	};
	var startAjax = function(url, type, data, dataType, headers, timeout, async,callback, errorback) {
		$.ajax({
			url: url,
			type: type,
			data: data,
			async:async,
			timeout: timeout,
			dataType: dataType,
			headers: headers,
			success: function(data) {
				sets.data = {};
				callbackFun(callback, data);
			},
			error: function(xhr, status) {
				sets.data = {};
				errorbackFun(errorback, status);
			}
		})
	};
	//请求成功回调
	var callbackFun = function(c, d) {
		if (typeof c === "function") {
			c(d)
		} else {
			layer.msg(' The callback function is not a method in "jquery ajax()"');
			return false
		}
	};

	//请求失败回调
	var errorbackFun = function(e, status) {
		console.log(status);
		if (typeof e === "function") {
			e(status);
		} else {
			if (status == 'timeout') {
				layer.msg(tip.requestTimeout);
			} else {
				layer.msg(' The callback function is not a method in "jquery ajax()"');
			}
			return false
		}
	}

	return {
		get: get,
		post: post,
		put: put,
		del: del
	}
}();