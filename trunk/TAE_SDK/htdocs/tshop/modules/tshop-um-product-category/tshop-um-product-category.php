<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-product-category"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-product-category">
	<div class="J_TWidget hidden" data-widget-type="Popup"
		data-widget-config="{'trigger':'.all-cats-link','align':{'node':'.all-cats-link', 'offset':[-55,0], 'points':['bl','tl']}}">
		<div class="nav-cats-hover allhover clearfix">
			<div class="cats-bg clearfix"></div>
			<div class="cats-content clearfix">
				<div class="searchall">
					<h3>
						<a href="http://igoody.taobao.com/?search=y" target="_self" title="查看所有分类">查看所有分类</a>
					</h3>
					<div class="searchlinks">
						<a href="http://igoody.taobao.com/?search=y&orderType=_hotsell" target="_self" title="按销量">按销量</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=_newOn" target="_self" title="按新品">按新品</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=price" target="_self" title="按价格">按价格</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=_hotkeep" target="_self" title="按收藏">按收藏</a>
					</div>
				</div>
				<div class="searchall">
					<h3 class="daigou-section">
						<a href="http://igoody.taobao.com/?search=y" target="_self" title="Coach包">最新款代购专区</a>
					</h3>
				</div>				
				<div class="searchall">
					<h3>
						<a href="http://igoody.taobao.com/?search=y" target="_self" title="Coach包">Coach专区</a>
					</h3>
					<div class="searchlinks">
						<a class="subsection" href="http://igoody.taobao.com/?search=y&orderType=_hotsell" target="_self" title="按销量">商品预览</a> :
						<a href="http://igoody.taobao.com/?search=y&orderType=_newOn" target="_self" title="按新品">新款上市</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=price" target="_self" title="按价格">杭州现货</a> 											
					</div>					
					<div class="searchlinks">
						<a class="subsection" href="http://igoody.taobao.com/?search=y&orderType=price" target="_self" title="按价格">女士专区</a> :					
						<a href="http://igoody.taobao.com/?search=y&orderType=_hotkeep" target="_self" title="按收藏">女士手提包</a> |		
						<a href="http://igoody.taobao.com/?search=y&orderType=_hotsell" target="_self" title="按销量">女士单肩包</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=_newOn" target="_self" title="按新品">女士钱包</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=price" target="_self" title="按价格">女士手腕包</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=price" target="_self" title="按价格">女士腰带</a> 											 											
					</div>
					<div class="searchlinks">
						<a class="subsection" href="http://igoody.taobao.com/?search=y&orderType=price" target="_self" title="按价格">男士专区</a> :					
						<a href="http://igoody.taobao.com/?search=y&orderType=_hotkeep" target="_self" title="按收藏">男士手提包</a> |		
						<a href="http://igoody.taobao.com/?search=y&orderType=_hotsell" target="_self" title="按销量">男士斜挎包</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=_newOn" target="_self" title="按新品">男士钱包</a> |
						<a href="http://igoody.taobao.com/?search=y&orderType=price" target="_self" title="按价格">男士皮带</a> 											
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
