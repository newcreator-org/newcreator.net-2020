<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://newcreator.org/favicon.ico" type="image/x-icon">
    <meta name="author" content="newcreator.org">
    <meta name="description" content="newCreator.net - 今すぐはじめられるプログラミング学習サービス">
    <meta name="keywords" content="newCreator.net,ニュークリエイター,特定非営利活動法人ニュークリエイター・オルグ,newcreator.org,newcreator">
    <meta property="og:url" content="https://newcreator.org" />
    <!-- <meta property="og:type" content=" ページの種類" /> -->
    <meta property="og:title" content="newCreator.net" />
    <meta property="og:description" content="newCreator.net - 今すぐはじめられるプログラミング学習サービス" />
    <meta property="og:site_name" content="特定非営利活動法人ニュークリエイター・オルグ" />
    <meta property="og:image" content="https://newcreator.org/img/ogp.png" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@nC_org">
    <meta name="note:card" content="summary_large_image">
    <meta name="twitter:creator" content="@yoshi1125hisa">
    <title>newCreator.net｜今すぐはじめられるプログラミング学習サービス</title>
    <link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri(); ?>/style.css">
    <!-- GA -->
  </head>

  <body>
    <header class="text-gray-700 body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="<?=home_url()?>">
          <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full"
            viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg> -->
          <span class="ml-3 text-xl">newCreator.net</span>
        </a>
        <?php
          wp_nav_menu( array( 
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'md:ml-auto flex flex-wrap items-center text-base justify-center',
            'menu_class'=> 'md:ml-auto flex flex-wrap items-center text-base justify-center',
            'item_class' => 'mr-5 hover:text-gray-900',
            'depth' => 0,
            'wrap' => ''
          ) ); 
        ?>
        <!-- <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
          <a class="mr-5 hover:text-gray-900">リンク1</a>
          <a class="mr-5 hover:text-gray-900">リンク2</a>
          <a class="mr-5 hover:text-gray-900">リンク3</a>
          <a class="mr-5 hover:text-gray-900">リンク4</a>
        </nav> -->
        <!-- <button
          class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Button
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            class="w-4 h-4 ml-1" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </button> -->
      </div>
    </header>