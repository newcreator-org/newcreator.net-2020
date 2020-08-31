<?php get_header(); ?>
<main>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <!-- Hero -->
      <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div
            class="lg:flex-grow lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><?=the_title()?>
              <!-- <br class="hidden lg:inline-block"> -->
            </h1>
            <p class="mb-8 leading-relaxed">ディスクリプション</p>
            <div class="flex justify-center">
              <span
                class="inline-block py-1 px-3 mr-2 rounded bg-blue-100 text-blue-500 text-sm font-medium tracking-widest">CATEGORY</span>
              <span
                class="inline-block py-1 px-3 mr-2 rounded bg-blue-100 text-blue-500 text-sm font-medium tracking-widest">CATEGORY</span>
            </div>
          </div>
        </div>
      </section>

      <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col">
          <div class="lg:flex-grow lg:pr-24 flex flex-col text-left mb-16 md:mb-0">
            <!-- <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">ココに本文タイトル</h1> -->
            <p class="mt-4 mb-8 leading-relaxed"><?=the_content()?></p>
          </div>
        </div>
      </section>

      
      <?php endwhile; endif; ?>

    </main>
    <?php get_footer(); ?>