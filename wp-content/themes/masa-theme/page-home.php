<?php get_header();

$image = get_field('image_responsive');

?>

    <div class="home-video">

        <?php

        $fileMp4 = get_field('video_home-mp4');
        $fileOgg = get_field('video_home-ogg');

        if( $fileMp4 || $fileOgg ): ?>

            <div class="home__video-container">
                <img id="imagemovil" class="imagemovil" src="<?php echo $image['url']; ?>" alt="Still de video masa" />
                <video autoplay muted loop playsinline class="home__resource">
                    <source  src="<?php echo $fileMp4['url']; ?>" type="video/mp4">
                    <source  src="<?php echo $fileOgg['url']; ?>" type="video/ogg">
                    <img class="home__resource" src="<?php echo $image['url']; ?>" alt="Still de video masa" />
                </video>
                <span class="audio movil" id="playMovil">PLAY</span>
                <!-- <span class="audio" id="audio-status">AUDIO</span> -->
            </div>

        <?php endif; ?>

    </div>

<?php get_footer();
