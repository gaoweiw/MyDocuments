    window.onscroll = myScrollListener;
    window.onload = firstLoad;



var imgs = document.getElementsByClassName("lazy"); /*懒惰加载图片*/
    var imgsLen = imgs.length;
    var unloaded = imgsLen; /*标记还有多少个图片没有加载*/
    var clientHight = window.innerHeight || document.documentElement.clientHeight; /*浏览器用户可视窗口高度*/
    
    /*给图片设置真正的src*/
    function setImgSrc (index) {
        imgs[index].src = imgs[index].getAttribute("data-src"); /*取图片真正的地址*/
        --unloaded;
    }
    
    /*滚动事件处理*/
    function scrollHandler(index) {
        var scrollTop = document.body.scrollTop || document.documentElement.scrollTop; /*滚动离顶部距离*/
        for (var i = index; i < imgsLen; i++) {
            var offset = imgs[i].offsetTop; /*元素到顶部的偏移量*/
            if (scrollTop + clientHight > offset) {
                setImgSrc(i);
            } else {
                break;
            }
        }
    }
    
    /*监听滚动事件*/
    function myScrollListener() {
        var start = imgsLen-unloaded; /*查找第一个没有加载的图片的位置*/
        if (unloaded > 0) {
            scrollHandler(start);
        }
    }
    /*第一次加载加载页面的时候加载出现在用户视线里的图片*/
    function firstLoad() {
        for (var i = 0; i < imgsLen; i++) {
            var top = imgs[i].offsetTop;
            if (top < clientHight) {/*图片到顶部的位置如果小于客户端可视窗口的高度，则说明图片显示出来了*/
                setImgSrc(i);
            }else{
                break;
            }
        }
    }



    function nextPage() {
        var newImgs = ["http://static.googleadsserving.cn/pagead/imgad?id=CICAgKDT29reKRDQAhiYAjIIBTic4GnyLWU",
            "http://static.googleadsserving.cn/pagead/imgad?id=CICAgKDT29reKRDQAhiYAjIIBTic4GnyLWU",
            "http://static.googleadsserving.cn/pagead/imgad?id=CICAgKDT29reKRDQAhiYAjIIBTic4GnyLWU",
            "http://static.googleadsserving.cn/pagead/imgad?id=CICAgKDT29reKRDQAhiYAjIIBTic4GnyLWU",
            "http://static.googleadsserving.cn/pagead/imgad?id=CICAgKDT29reKRDQAhiYAjIIBTic4GnyLWU",
            "http://static.googleadsserving.cn/pagead/imgad?id=CICAgKDT29reKRDQAhiYAjIIBTic4GnyLWU",
            "http://static.googleadsserving.cn/pagead/imgad?id=CICAgKDT29reKRDQAhiYAjIIBTic4GnyLWU",
            "https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=1889789971,2360758735&fm=58",
            "img/1登录界面.png",
            "http://p4.gexing.com/kongjianpifu/20121124/1017/50b02e24e6e3a.jpg"
        ];
        for (var i = 0; i < newImgs.length; i++) {
            var li = document.createElement("img");
            li.setAttribute("src", "img/close.png");//设置默认图片
            li.setAttribute("data-src", newImgs[i]);//设置真是图片地址
            li.setAttribute("class", "lazy");　　    //设置延迟加载类
            document.getElementById("list").appendChild(li);//把新图片元素添加到UI图片列表里
        }
         imgs = document.getElementsByClassName(".lazy"); /*懒惰加载图片*/
         imgsLen = imgs.length;
         unloaded = unloaded+newImgs.length ; /*标记还有多少个图片没有加载*/
         nextOnLoad();
    }
    
    //加载下一页首次加载图片显示
    function nextOnLoad () {
        var scrollTop = document.body.scrollTop || document.documentElement.scrollTop; /*滚动离顶部距离*/
        for (var i = imgsLen - unloaded; i < imgsLen; i++) {
            var offset = imgs[i].offsetTop; /*元素到顶部的偏移量*/
            if (scrollTop + clientHight > offset) {
                setImgSrc(i);
            } else {
                break;
            }
        }
    }
