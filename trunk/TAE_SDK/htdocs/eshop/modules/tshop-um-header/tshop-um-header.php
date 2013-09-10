<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-header"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>

<div class="tb-module tshop-um tshop-um-header">
	
<div class="top-notifications">
<div class="news-warp">
	<div class="news-ico"></div>
	<div class="J_TWidget gd-news" data-widget-type="Slide" data-widget-config="{'contentCls':'news-items','hasTriggers':false,'effect':'scrolly','easing':'easeOutStrong','interval':5,'duration':0.5}">
	<ul class="news-items"> 
		<li><a class="first-trigger" href="#" target="_blank">新活动!</a></li> 
		
		<li><a href="#" target="_blank">近期店招装修中,全方位展示</a></li>
	</ul>
	</div>
</div>

<div class="welcomeinfo">
  <div>		
  	<a class="J_TokenSign" href="#" target="_blank">登陆</a>
  </div>
</div>
	
  <div class="imginfo">
		<a class="myorder J_TWidget" href="#" target="_blank">我的订单</a>
		<a class="mygwc J_CartPluginTrigger" href="#" target="_blank">购物车</a>
		<a class="myfav J_TWidget" href="<?php echo $uriManager->favoriteLink(); ?>" target="_blank" title="喜欢我就收藏我吧！亲">收藏本店</a>
	</div>
</div>


	<div class="logo"> 
		
		<div class="link">
			<a href="igoody.taobao.com" target="_blank"> <span>http://igoody.taobao.com</span></a>
		</div>
		<div class="main-title">
			<span class="english" style="color:#1952F7;">G</span><span class="english" style="color:#ED2732">o</span><span class="english" style="color:#F3A50E">o</span><span class="english" style="color:#1952F7">d</span><span class="english" style="color:#ED2732">y</span><span class="chinese">美国代购</span>
		</div>
		<div class="sub-title">
			<span class="english">Products From USA</span>
			</div>
		
	</div>
	
	<div class="certificates">
		<div class="taobao-quanqiugou">
			<div class="image">
			<a href="#" target="_blank">
				<img src='assets/images/taobao-quanqiugou.png' alt="全球购" />
			</a>
			</div>
			<div class="text">
				<span>优质卖家</span>
			</div>
		</div>
		<div class="vertical-line">		
		</div>
		<div class="bookmark-shop">
			<a class="myfav J_TWidget" href="<?php echo $uriManager->favoriteLink(); ?>" target="_blank">
				<img src='assets/images/bookmark-shop.jpg' alt="全球购" />
		  </a>
		</div>
	</div>
	

<div class="J_TWidget hidden" data-widget-type="Popup" data-widget-config="{
          'trigger':'.first-trigger',
          'align':{
                  'node':'.first-trigger',
                  'offset':[29,120],
                  'points':['cr','cc']
                  }
            }">
    <div style="background-color: #ABA9A9; height: 200px; width: 500px; border: 1px; ">
       <div class="description">
       	<span>最新包 最新皮带</span>
       </div>
    </div>
</div>
</div>
