<?php

get_header();
?>

<!--
<div class="row filter-rule-row">
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2014/07/01/12/37/kindle-381242_1280.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">识记标准</h5>
          <p class="card-text">
            该层次的App能够帮助学习者提升术语界定、事实甄别、知识回顾和信息检索的能⼒。许多教育类的App都属于这个层次。学习者可以在这些App上做选择题、配对题、排序题或简答题。
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/11/10/10/39/light-2935944_1280.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">理解标准</h5>
            <p class="card-text">
              该层次的App能够为学习者提供阐述观点、明晰概念的机会。这个层次的App不再局限于要求学习者选择“正确”答案，⽽是以更加开放的形式帮助学习者总结内容、阐释意义。
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/01/19/16/49/laptop-1149412_1280.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">应⽤标准</h5>
          <p class="card-text">
            该层次的App为学习者提供了运⽤所学到的做事流程和⽅法展现⾃⼰能⼒的机会；同时也强调学习者运⽤所学的概念解决新问题的能⼒。
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="w-100"></div>

    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2018/09/04/02/40/project-3652877_1280.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">分析标准</h5>
          <p class="card-text">
            该层次的App能够提⾼学习者区分相关和不相关信息、确定各部分之间的关系、提炼内容框架的能⼒。
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/03/05/20/00/algebra-1238600_1280.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">评价标准</h5>
            <p class="card-text">
              该层次的App能够提升学习者使⽤内在的或外部的标准来评估材料或⽅法的能⼒。它们帮助学习者判断内容的可信度、精确度、品质、有效性，并做出有理有据的决策。
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="width: 20rem;">
        <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/12/02/02/10/idea-1876659_1280.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">创造标准</h5>
          <p class="card-text">
            该层次的App能够帮助学习者萌⽣创意、设计⽅案和创作作品。
          </p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
</div>
-->

<div class="row posts-row">
    <div class="col-sm-8 post-item-col">
      <ul class="list-unstyled">
      <?php while ( have_posts() ) : the_post(); ?>
        <li class="media">
          <div class="media-body">
            <h5 class="mt-0 mb-1"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
            <?php the_content("Read More", true); ?>
          </div>
          <?php echo get_avatar(get_the_author_meta('ID'), '60', $default, $alt, array( 'class' => array( 'mr-3', 'rounded-circle' ) )); ?>
        </li>
      <?php endwhile; // end of the loop. ?>
      </ul>
    </div>
    <div class="col-sm-4">
        Something
    </div>
</div>

<?php
get_footer();
