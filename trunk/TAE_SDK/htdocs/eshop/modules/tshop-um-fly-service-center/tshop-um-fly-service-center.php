<?php
/**
 内容规则：
 1.PHP页面内容只能包含一个根元素（允许任意标签元素，推荐"div"元素）
 2.根元素类定义包含：class="tb-module tshop-um tshop-um-fly-service-center"（class属性可以添加您需要的类选择器定义）
 3.元素class属性值禁止以"tb-"和"J_T"字符开头,除[tb-module, J_TWidget, J_CartPluginTrigger, J_TokenSign]以外
 4.禁止使用<style>标签（元素）
 5.禁止使用<script>标签（元素）
 6.禁止使用<link>标签（元素）
 7.禁止使用标签（元素）的id属性
 8.允许使用元素内联style属性
 */
?>
<div class="tb-module tshop-um tshop-um-fly-service-center">
<?php
/**
 * 开始设计PHP页面
 */
?>
  <div class="fixed_ww">
    <div class="J_TWidget" data-widget-type="Tabs" data-widget-config="{
  'effect': 'none',
  'navCls': 'fixed_ww_nav',
  'contentCls': 'fixed_ww_content',
  'activeTriggerCls': 'tab_selected',
  'autoplay': false,
  'triggerType': 'click',
  'circular': true
  }">
      <ul class="fixed_ww_nav">
        <li class="tab_selected unfold">
          <span>展开</span>
        </li>
        <li class="shrap">
          <span>收缩</span>
        </li>
      </ul>
      <div class="fixed_ww_content">
        <div class="wwlist_display">
          <div class="ww_hd"></div>
          <div class="ww_bd">
            <div class="before_sale">
              <p>
                <strong>售前</strong>
              </p>
              <ul>
                <li>
                  <a href="http://www.taobao.com/webww/ww.php?ver=3&amp;touid=%E8%B4%BA%E5%85%83%E9%B9%8F&amp;siteid=cntaobao&amp;status=2&amp;charset=utf-8" target="_blank">
                    <img border="0" alt="" src="http://amos.im.alisoft.com/online.aw?v=2&amp;uid=%E8%B4%BA%E5%85%83%E9%B9%8F&amp;site=cntaobao&amp;s=2&amp;charset=utf-8"/>
                  </a>x1
                </li>
                <li>
                  <a href="http://www.taobao.com/webww/ww.php?ver=3&amp;touid=%E8%B4%BA%E5%85%83%E9%B9%8F&amp;siteid=cntaobao&amp;status=2&amp;charset=utf-8" target="_blank">
                    <img border="0" alt="" src="http://amos.im.alisoft.com/online.aw?v=2&amp;uid=%E8%B4%BA%E5%85%83%E9%B9%8F&amp;site=cntaobao&amp;s=2&amp;charset=utf-8"/>
                  </a>x2
                </li>
              </ul>
            </div>
            <div class="after_sale">
              <p>
                <strong>售后</strong>
              </p>
              <ul>
                <li>
                  <a href="http://www.taobao.com/webww/ww.php?ver=3&amp;touid=%E8%B4%BA%E5%85%83%E9%B9%8F&amp;siteid=cntaobao&amp;status=2&amp;charset=utf-8" target="_blank">
                    <img border="0" alt="" src="http://amos.im.alisoft.com/online.aw?v=2&amp;uid=%E8%B4%BA%E5%85%83%E9%B9%8F&amp;site=cntaobao&amp;s=2&amp;charset=utf-8"/>
                  </a>y1
                </li>
                <li>
                  <a href="http://www.taobao.com/webww/ww.php?ver=3&amp;touid=%E8%B4%BA%E5%85%83%E9%B9%8F&amp;siteid=cntaobao&amp;status=2&amp;charset=utf-8" target="_blank">
                    <img border="0" alt="" src="http://amos.im.alisoft.com/online.aw?v=2&amp;uid=%E8%B4%BA%E5%85%83%E9%B9%8F&amp;site=cntaobao&amp;s=2&amp;charset=utf-8"/>
                  </a>y2
                </li>
              </ul>
            </div>
            <div>
              <p>
                <strong>工作时间</strong>
              </p>
              <span>09:00-22:00</span>
            </div>
          </div>
        </div>
        <div class="wwlist_hide" style="display:none">
        </div>
      </div>
    </div>
  </div>
</div>
