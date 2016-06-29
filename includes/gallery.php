<?php 
// Setting needed variables
$data = "../data/files/".$view;
$this_gallery = 0;
$thumb_gallery = null;

// Check if there's a directory for this section
if (is_dir($data)) :

    // Get all galleries
    $galleries = scandir($data);

    // Check if there's galleries
    if (!empty($galleries)) :

        // Check each gallery for its thumbnail
        foreach ($galleries as $gallery) :

            // Prevent mac hidden file
            if ($gallery != "." || $gallery != "..") :

                $thumbs = scandir($data."/".$gallery."/thumbnail");
                $images_dir = $data."/".$gallery."/";

                foreach ($thumbs as $thumb) :

                    // Prevent mac hidden file
                    if ($thumb != "." || $thumb != "..") {
                        // Take the first thumb as gallery thumb
                        $thumb_gallery = $thumb;
                        break;
                    }
                endforeach;
            ?>

                <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                    <article class="gallery-item">
                        <a 
                            class="gallery-link"
                            target="blank"
                            href="/pages/gallery.php"
                        >
                            <div class="gallery-infos">
                                <div id="kynda" class="gallery-picture img-responsive" style="background: url(<?= $images_dir.$thumb_gallery ?>); background-size: cover !important"></div>
                                <h4 class="gallery-title"><?= $gallery ?></h4>
                            </div>
                        </a>
                    </article>
                </div>

            <?php endif;

            $this_gallery++;
        endforeach;
    endif;
endif;
?>