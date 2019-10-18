<div ng-repeat="x in propdata  | startFrom:currentPage*pageSize | limitTo:pageSize" class="propcell ng-scope" id="2" ng-click="listclick(x.id)" ng-class="{listsel: listclicked[x.id]}">
  <!-- first row -->
  <div class="propcellrowhead">
    <div class="propcellcol12">
      <div class="pltitle ng-binding"><span class="ng-binding">
          <?php echo ++$num ?>.
        </span>
        <?php the_title()?>
        <span ng-hide="x[&#39;seproperty-type&#39;]==null" class="rooms type ng-binding">公寓</span>
        <span ng-hide="x[&#39;selrooms&#39;]==null" class="rooms ng-binding">4LDK</span>
        <span ng-show="x[&#39;isnew&#39;]" class="rooms new ng-binding ng-hide">最新!</span>
      </div>
    </div>
  </div>
  <!-- second row -->
  <div class="propcellrow">
    <div class="propcellcol3">
      <img class="propcellimg" src="<?php $img_data = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); echo $img_data[0]?>">
    </div>
    <div class="propcellcol6">
      <dl class="proptable">
        <dt class="ng-binding">居住地</dt>
        <dd class="ng-binding">京都府京都市中京区壬生朱雀町</dd>
        <dt class="ng-binding">交通</dt>
        <dd class="ng-binding">二条车站步行 6 分</dd>
        <dt class="ng-binding">建築年齢</dt>
        <dd class="ng-binding">2009</dd>
        <dt class="ng-binding">階層</dt>
        <dd class="ng-binding">21</dd>
        <dt class="ng-binding">総部屋</dt>
        <dd class="ng-binding">51</dd>
      </dl>
    </div>
    <div class="propcellcol6">
      <dl class="proptable">
        <dt class="ng-binding">登録日</dt>
        <dd class="ng-binding">2018年11月7日</dd>
        <dt class="ng-binding">価格</dt>
        <dd style="color:orange;font-weight:bold;" class="ng-binding">¥
          <?php the_field('total_price')?>
        </dd>
        <dt class="ng-binding">房间</dt>
        <dd class="ng-binding">4LDK</dd>
        <dt class="ng-binding">面积(m<sup>2</sup>)</dt>
        <dd class="ng-binding">400
        </dd>
        <dt class="ng-binding">現況
        </dt>
        <dd class="ng-binding">出租中</dd>
      </dl>
    </div>
  </div>
  <div class="readmore">
    <a href="<?php the_permalink();?>"><span class="ng-binding">理解详情
      </span></a>
  </div>
</div>