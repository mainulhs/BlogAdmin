
<!-- SLIDER PROFILE PHOTO--> 
<div class="swiper-container slider-left">
        <div class="swiper-wrapper">
            <?php
                $queryPic = "SELECT * FROM `slide` ORDER BY id DESC LIMIT 3"; 
                $pic_list  = fetchData($queryPic);
                foreach ($pic_list as $pl) {
              ?>
            <!-- Slide Demo -->
            <div class="swiper-slide">
                  
                  <div class="bg" style="background-image:url(public/upload/<?php echo $pl['name']; ?>)"></div>
                  <div class="info">
                  <h3><?php echo $pl['title']; ?></h3>
                  </div>
                  
            </div>
            <?php
                }
              ?>
            
        </div>
</div>
<!-- END SLIDER PROFILE PHOTO--> 