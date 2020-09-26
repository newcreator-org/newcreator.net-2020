<?php get_header(); ?>
<main>
  <?php the_post(); ?>
      <!-- Hero -->
      <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 pt-24 pb-4 md:flex-row flex-col items-center">
          <div class="lg:flex-grow lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left md:mb-0
            items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl font-medium text-gray-900"><?php single_cat_title( '', true ); ?>
            </h1>
          </div>
        </div>
      </section>

      <?php 
            $args = array(
              'parent' => get_queried_object_id(),
              'taxonomy' => 'cource',
              'order_by' => 'id',
              'hide_empty' => 0
            );
            $cources = get_categories($args);
            foreach($cources as $cource):
              // var_dump($cource);
          ?>
      <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 pt-12 flex-col">
          <div class="lg:flex-grow lg:pr-24 flex flex-col text-left mb-16 md:mb-0">
            <div class="flex flex-col">
              <div class="h-1 bg-gray-200 rounded overflow-hidden">
                <div class="w-24 h-full bg-blue-500"></div>
              </div>
              <div class="flex flex-wrap sm:flex-row flex-col pt-6 md:mb-12">
                <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0"><?=$cource->name?>
                </h1>
                <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">
                <?=$cource->description?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="container px-5 mx-auto flex flex-wrap">
          <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
            <img alt="<?=$cource->name?>" class="object-cover object-center lg:h-64 h-48 w-full"
              src="<?php if(get_field('cource_image','cource_'.$cource->term_id)){echo(get_field('cource_image','cource_'.$cource->term_id));}else{echo(get_template_directory_uri().'/noimage.png');}?>">
          </div>
          <div class="flex flex-col flex-wrap lg:pb-6  w-full lg:w-1/2 lg:pl-12 lg:text-left text-center">
            <div class="p-4 w-full">
              <h2 class="font-medium title-font tracking-widest text-gray-900 mb-4 text-sm text-center sm:text-left">
                カリキュラム</h2>
              <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1">
                <?php 
                  $args = array(
                    'parent' => $cource->term_id,
                    'taxonomy' => 'cource',
                    'order_by' => 'id',
                    'hide_empty' => 0
                  );
                  $units = get_categories($args);
                  if($units):
                  foreach($units as $unit):
                    // var_dump($unit);
                ?>
                <a class="mb-2 modal-open" id="modal-open-<?=$unit->slug?>" onClick="toggleModal('<?=$unit->slug?>')">
                  <span
                    class="bg-blue-100 text-blue-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                      stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                      <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                  </span><?=$unit->name?>
                </a>
                <!--Modal-->
                <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center" id="modal-<?=$unit->slug?>">
                  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                  <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

                    <div
                      class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                      <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                          d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                      </svg>
                      <span class="text-sm">(Esc)</span>
                    </div>

                    <!-- Add margin if you want to see some of the overlay behind the modal-->
                    <div class="modal-content py-4 text-left px-6">
                      <!--Title-->
                      <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold"><?=$unit->name?></p>
                        <div class="modal-close cursor-pointer z-50">
                          <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                              d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                          </svg>
                        </div>
                      </div>

                      <!--Body-->
                      <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1">
                        <a class="mb-2">
                          <span class="bg-blue-100 text-blue-500 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                              class="w-3 h-3" viewBox="0 0 24 24">
                              <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                          </span>First Link
                        </a>
                        
                      </nav>
                      <!--Footer-->
                      <div class="flex justify-end pt-2">
                        <!-- <button
                          class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button> -->
                        <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">とじる</button>
                      </div>

                    </div>
                  </div>
                </div>
                <?php
                  endforeach;
                  else :
                    echo("この教材は準備中です…"); 
                  endif;
                ?>
              </nav>
            </div>
          </div>
        </div>
      </section>
            <?php endforeach;?>



    <script>
      

      const overlay = document.querySelector('.modal-overlay')
      overlay.addEventListener('click', function(event){toggleModal("close")})

      var closemodal = document.querySelectorAll('.modal-close')
      for (var i = 0; i < closemodal.length; i++) {
        closemodal[i].addEventListener('click', function(event){toggleModal("close")})
      }

      document.onkeydown = function (evt) {
        evt = evt || window.event
        var isEscape = false
        if ("key" in evt) {
          isEscape = (evt.key === "Escape" || evt.key === "Esc")
        } else {
          isEscape = (evt.keyCode === 27)
        }
        if (isEscape && document.body.classList.contains('modal-active')) {
          toggleModal("close")
        }
      };


      function toggleModal(slug) {
        const body = document.querySelector('body')
        if(slug!=="close") {
          var modal = document.querySelector('#modal-'+slug)
          openedModalId = '#modal-'+slug
          
        }else {
          var modal = document.querySelector(openedModalId)
        }
        
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
        console.log(openedModalId)
      }


    </script>
    </main>
    <?php get_footer(); ?>