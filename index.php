<?php get_header(); ?>
    <main>
      <!-- HERO -->
      <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">今すぐはじめられる<br
                class="hidden lg:inline-block">
              プログラミング学習サービス

            </h1>
            <p class="mb-8 leading-relaxed">プログラミングの勉強を始めるならnewCreator.netで</p>
            <!-- <div class="flex justify-center">
              <button
                class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Button</button>
              <button
                class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Button</button>
            </div> -->
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
          </div>
        </div>
      </section>

      <!-- カテゴリ
      <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col">
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
              <div class="w-24 h-full bg-blue-500"></div>
            </div>
            <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
              <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">ジャンルからえらぶ
              </h1>
              <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">
                ディスクリプション</p>
            </div>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
            <div class="p-4 md:w-1/2 sm:mb-0 mb-6">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full"
                  src="https://dummyimage.com/1203x503">
              </div>
              <h2 class="text-xl font-medium title-font text-gray-900 mt-5">項目1</h2>
              <p class="text-base leading-relaxed mt-2">あああ
              </p>
              <a class="text-blue-500 inline-flex items-center mt-3">学習する
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
            <div class="p-4 md:w-1/2 sm:mb-0 mb-6">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full"
                  src="https://dummyimage.com/1204x504">
              </div>
              <h2 class="text-xl font-medium title-font text-gray-900 mt-5">項目2</h2>
              <p class="text-base leading-relaxed mt-2">あああ
              </p>
              <a class="text-blue-500 inline-flex items-center mt-3">学習する
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section> -->

      <!-- carriculum -->
      <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col">
            <div class="h-1 bg-gray-200 rounded overflow-hidden">
              <div class="w-24 h-full bg-blue-500"></div>
            </div>
            <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
              <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">コースをえらぶ
              </h1>
              <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">


                ディスクリプション</p>
            </div>
          </div>
          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
          <?php 
            $args = array(
              'parent' => 0,
              'taxonomy' => 'cource',
              'order_by' => 'id',
              'hide_empty' => 0
            );
            $cources = get_categories($args);
            foreach($cources as $cource):
              // var_dump($cource);
          ?>
          
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
              <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full"
                  src="<?=get_field('cource_image','cource_'.$cource->term_id);?>">
              </div>
              <h2 class="text-xl font-medium title-font text-gray-900 mt-5"><?=$cource->name?></h2>
              <p class="text-base leading-relaxed mt-2"><?=$cource->description?>
              </p>
              <a class="text-blue-500 inline-flex items-center mt-3" href="<?=get_category_link( $cource->term_id )?>">学習する
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
              </a>
            </div>
          
            <?php endforeach; ?>
            </div>
        </div>
      </section>

      <!-- news-->
      <?php 
        if(have_posts()):
      ?>
      <section class="text-gray-700 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
          <div class="-my-8">
            <div class="flex flex-col">
              <div class="h-1 bg-gray-200 rounded overflow-hidden">
                <div class="w-24 h-full bg-blue-500"></div>
              </div>
              <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">ニュース
                </h1>
                <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">
                  更新情報をお届けします。</p>
              </div>
            </div>
            <?php 
              $i = 0;
              while(have_posts()):
                the_post();
                $i++;
            ?>
            <div class="py-8 flex flex-wrap md:flex-no-wrap <?php if($i>=2) {echo("border-t-2 border-gray-200");} ?>">
              <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                <span class="tracking-widest font-medium title-font text-gray-900"><?=the_category()?></span>
                <span class="mt-1 text-gray-500 text-sm"><?=the_date("Y.m.d")?></span>
              </div>
              <div class="md:flex-grow">
                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?=the_title()?></h2>
                <p class="leading-relaxed"><?php echo mb_substr(strip_tags($post-> post_content),0,40) . '...'; ?></p>
                <a class="text-blue-500 inline-flex items-center mt-4" href="<?=the_permalink()?>">詳しく見る
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
            <?php endwhile ?>
          </div>
        </div>
      </section>
      <?php endif; ?>
      <!-- minmoji : 読み込み遅くなるので検討 -->
      <!-- <section class="text-gray-700 body-font">
        <div class="container mx-auto flex flex-wrap">
          <div class="flex flex-col text-center w-full items-center">
            <p class="leading-relaxed text-base mb-5">
              <small>当Webサイトは、「みんなの文字」を使用しています。
              </small>
            </p>
            <script type="text/javascript" src="https://minmoji.ucda.jp/sealjs/https%3A__newcreator.org"
              charset="UTF-8"></script>
          </div>
        </div>
      </section> -->
    </main>
    <?php get_footer(); ?>