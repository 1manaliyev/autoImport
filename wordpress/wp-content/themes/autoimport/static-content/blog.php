<?php

/** Static markup from blog.html */

if ( ! defined( 'ABSPATH' ) ) { exit; }

$autoimport_page_meta = array( 'title' => 'Блог — AutoImport', 'description' => null, 'extra_head' => '', 'has_quiz' => false, 'has_swiper' => false );



$blog_posts_query = autoimport_get_blog_index_query();

$blog_total_posts = (int) $blog_posts_query->found_posts;

$blog_page_start  = $blog_total_posts ? ( ( max( 1, (int) get_query_var( 'paged' ), (int) get_query_var( 'page' ) ) - 1 ) * autoimport_get_blog_posts_per_page() + 1 ) : 0;

$blog_page_end    = min( $blog_total_posts, $blog_page_start + (int) $blog_posts_query->post_count - 1 );

?>

<div class="page-hero">

        <div class="container">

          <h1>Блог и полезные материалы</h1>

        </div>

      </div>

      <section class="section blog-index">

        <div class="container">

          <?php if ( $blog_posts_query->have_posts() ) : ?>

            <p class="blog-index__count">

              <?php

              if ( $blog_total_posts > autoimport_get_blog_posts_per_page() ) {

                printf(

                  esc_html__( 'Показано %1$d–%2$d из %3$d статей', 'autoimport' ),

                  $blog_page_start,

                  $blog_page_end,

                  $blog_total_posts

                );

              } else {

                printf(

                  esc_html__( 'Показано %d статей', 'autoimport' ),

                  $blog_total_posts

                );

              }

              ?>

            </p>

            <div class="related-blog__grid blog-index__grid">

              <?php

              while ( $blog_posts_query->have_posts() ) :

                $blog_posts_query->the_post();

                get_template_part( 'template-parts/blog', 'card' );

              endwhile;

              wp_reset_postdata();

              ?>

            </div>

            <?php

            autoimport_render_posts_pagination(

              $blog_posts_query,

              __( 'Навигация по страницам блога', 'autoimport' )

            );

            ?>

          <?php else : ?>

            <p style="color: var(--text-muted); margin: 0"><?php esc_html_e( 'В блоге пока нет статей.', 'autoimport' ); ?></p>

          <?php endif; ?>

        </div>

      </section>

      <section class="section">

        <div class="container country-cta">

          <h2>Подберём автомобиль под ваш бюджет</h2>

          <p>Не нашли ответ в статьях — оставьте заявку, менеджер поможет с подбором.</p>

          <button type="button" class="btn btn--primary" data-open-form data-form-title="Подберём автомобиль под ваш бюджет" data-form-source="Страница / Блог" data-form-button-text="Подобрать авто">Подобрать авто</button>

        </div>

      </section>

