<?php
/**
 ���ݹ���
 1.PHPҳ������ֻ�ܰ���һ����Ԫ�أ����������ǩԪ�أ��Ƽ�"div"Ԫ�أ�
 2.��Ԫ���ඨ�������class="tb-module tshop-um tshop-um-header"��class���Կ����������Ҫ����ѡ�������壩
 3.Ԫ��class����ֵ��ֹ��"tb-"��"J_T"�ַ���ͷ,��[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]����
 4.��ֹʹ��<style>��ǩ��Ԫ�أ�
 5.��ֹʹ��<script>��ǩ��Ԫ�أ�
 6.��ֹʹ��<link>��ǩ��Ԫ�أ�
 7.��ֹʹ�ñ�ǩ��Ԫ�أ���id����
 8.����ʹ��Ԫ������style����
 */
?>

<div class="tb-module tshop-um tshop-um-header">
	
<div class="top-notifications">
<div class="news-warp">
	<div class="news-ico"></div>
	<div class="J_TWidget gd-news" data-widget-type="Slide" data-widget-config="{'contentCls':'news-items','hasTriggers':false,'effect':'scrolly','easing':'easeOutStrong','interval':5,'duration':0.5}">
	<ul class="news-items"> 
		<li><a class="first-trigger" href="#" target="_blank">�»!</a></li> 
		
		<li><a href="#" target="_blank">���ڵ���װ����,ȫ��λչʾ</a></li>
	</ul>
	</div>
</div>

<div class="welcomeinfo">
  <div>		
  	<a class="J_TokenSign" href="#" target="_blank">��½</a>
  </div>
</div>
	
  <div class="imginfo">
		<a class="myorder J_TWidget" href="#" target="_blank">�ҵĶ���</a>
		<a class="mygwc J_CartPluginTrigger" href="#" target="_blank">���ﳵ</a>
		<a class="myfav J_TWidget" href="<?php echo $uriManager->favoriteLink(); ?>" target="_blank" title="ϲ���Ҿ��ղ��Ұɣ���">�ղر���</a>
	</div>
</div>


	<div class="logo"> 
		
		<div class="link">
			<a href="igoody.taobao.com" target="_blank"> <span>http://igoody.taobao.com</span></a>
		</div>
		<div class="main-title">
			<span class="english" style="color:#1952F7;">G</span><span class="english" style="color:#ED2732">o</span><span class="english" style="color:#F3A50E">o</span><span class="english" style="color:#1952F7">d</span><span class="english" style="color:#ED2732">y</span><span class="chinese">��������</span>
		</div>
		<div class="sub-title">
			<span class="english">Products From USA</span>
			</div>
		
	</div>
	
	<div class="certificates">
		<div class="taobao-quanqiugou">
			<div class="image">
			<a href="#" target="_blank">
				<img src='assets/images/taobao-quanqiugou.png' alt="ȫ��" />
			</a>
			</div>
			<div class="text">
				<span>��������</span>
			</div>
		</div>
		<div class="vertical-line">		
		</div>
		<div class="bookmark-shop">
			<a class="myfav J_TWidget" href="<?php echo $uriManager->favoriteLink(); ?>" target="_blank">
				<img src='assets/images/bookmark-shop.jpg' alt="ȫ��" />
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
       	<span>���°� ����Ƥ��</span>
       </div>
    </div>
</div>
</div>
