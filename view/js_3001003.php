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
			<div class="centre-content p-0-30 check-on">

                <blockquote class="text-quote mt20">
                    延迟防连点
                </blockquote>
				<figure class="code-box mt20 gray3 no-unl">
<pre>
var run = 1;

function delay(temp){
    run = temp;
}

//点击
function setTime(){
    if(run == 1){
        setTimeout("delay(1)",3000)
        run += 1;
    }else{
        return false;
    }
    console.log('点击了');
}

<button onclick="setTime()">点击过后延迟三秒才能在次点击</button>
</pre>
                </figure>
				
                
			</div>
		</div>
		<!--底部-->
		
	</div>
<?php include('tpl/footer.php'); ?>
<script>
    seajs.use([base.jsUrl + 'index',base.jsUrl + 'plug_in/theme/theme',base.jsUrl + 'plug_in/nav_list/nav']);
    
    var run = 1;
    function delay(temp){
        run = temp;
    }

    function setTime(){
        if(run == 1){
            setTimeout("delay(1)",3000)
            run += 1;
        }else{
            return false;
        }
        console.log('点击了'+ new Date());
    }
</script>
</body>
</html>