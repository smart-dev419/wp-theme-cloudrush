jQuery(document).ready(function(){
	jQuery('.bxslider').bxSlider({
		mode: 'horizontal',
		moveSlides: 1,
		slideMargin: 40,
		infiniteLoop: true,
		speed: 800,
		auto: true,
		stopAutoOnClick: false,
		controls: false
	});
});

document.addEventListener(
    "DOMContentLoaded", () => {
        new Mmenu( "#mobile-menu", {
        	extensions: ["position-front", "position-right"],
        	slidingSubmenus: false,
        	navbar: {add: false}
        });
    }
);