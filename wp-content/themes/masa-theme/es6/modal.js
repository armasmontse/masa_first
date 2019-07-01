import {$, w} from './constants';

w.load(() => {

    // Modal que abre una galería
    const modalGallery = $('.modal-gallery')

    if(modalGallery.length) {

        modalGallery.slick({
            autoplay: false,
            arrows: true,
            dots: false,
            prevArrow: $('.galeria-prev'),
            nextArrow: $('.galeria-next'),
        })

        const modal = $('#modal')

        $('.modalOpen').click(function() {
            modal.css('display', 'flex')
            modalGallery.slick('setPosition', 0)
        });

        $('.close').click(function() {
            modal.css('display', 'none')
        })

        modalGallery.click(function () {
            modal.css('display', 'none')
        })

    }
});
