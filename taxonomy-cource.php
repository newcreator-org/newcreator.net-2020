<?php get_header(); ?>
<main>
  <?php the_post(); ?>
      <!-- Hero -->
      <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 pt-24 pb-4 md:flex-row flex-col items-center">
          <div class="lg:flex-grow lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left md:mb-0
            items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl font-medium text-gray-900"><?=the_title()?>
            </h1>
          </div>
        </div>
      </section>

      <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 pt-12 flex-col">
          <div class="lg:flex-grow lg:pr-24 flex flex-col text-left mb-16 md:mb-0">
            <div class="flex flex-col">
              <div class="h-1 bg-gray-200 rounded overflow-hidden">
                <div class="w-24 h-full bg-blue-500"></div>
              </div>
              <div class="flex flex-wrap sm:flex-row flex-col pt-6 md:mb-12">
                <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">サブカテゴリ
                </h1>
                <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">
                  ディスクリプション</p>
              </div>
            </div>
          </div>
        </div>
        <div class="container px-5 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="feature" class="object-cover object-center lg:h-64 h-48 w-full"
              src="https://d2l930y2yx77uc.cloudfront.net/production/uploads/images/17356997/picture_pc_94d5b1831972b35e5a1bd56f50ad3902.jpg">
          </div>
          <div class="flex flex-col flex-wrap lg:pb-6  w-full lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <div class="p-4 w-full">
              <h2 class="font-medium title-font tracking-widest text-gray-900 mb-4 text-sm text-center sm:text-left">
                カリキュラム</h2>
              <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1">
                <a class="mb-2">
                  <span
                    class="bg-blue-100 text-blue-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>First Link
                </a>
                <a class="mb-2">
                  <span
                    class="bg-blue-100 text-blue-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>Second Link
                </a>
                <a class="mb-2">
                  <span
                    class="bg-blue-100 text-blue-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>Third Link
                </a>
                <a class="mb-2">
                  <span
                    class="bg-blue-100 text-blue-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>Fourth Link
                </a>
                <a class="mb-2">
                  <span
                    class="bg-blue-100 text-blue-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span>Fifth Link
                </a>
              </nav>
            </div>
          </div>
        </div>
      </section>


    </main>
    <?php get_footer(); ?>