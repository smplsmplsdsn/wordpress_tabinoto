<section class="sub__section section">
  <div class="section__header">
    <h1>タグ</h1>
  </div>
  <div class="list list--04">
    <div class="list__inner">
      <ul>
        <?php
        $term_tag_html = '';
        $term_list = get_terms('post_tag', array(
          'orderby' => 'count',
          'order' => 'DESC'
        ));
        foreach ($term_list as $term) {
          $term_tag_html .= '<li><a class="js-link-ajax" href="/tag/'.$term -> slug.'/">'.$term -> name.'</a></li>';
        }
        echo $term_tag_html;
        ?>      
      </ul>
    </div>
  </div>
</section>          
