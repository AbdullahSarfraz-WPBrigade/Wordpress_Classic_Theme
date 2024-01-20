<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Positiva
 */

?>

<?php wp_footer(); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('.owl-carousel1').owlCarousel({
loop:true,
margin:10,
nav:true,
navText: ["<img src='/wp-content/themes/positiva/assets/images/arrow-circle-left.png' >", "<img src='/wp-content/themes/positiva/assets/images/arrow-circle-right.png'>"],
responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:1
    }
}
})
</script>

<script>
   $('.owl-carousel2').owlCarousel({
loop:true,
margin:10,
nav:true,
navText: ["<img src='/wp-content/themes/positiva/assets/images/pathleft.png' >", "<img src='/wp-content/themes/positiva/assets/images/pathright.png'>"],
responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:1
    }
}
})
</script>

<script>
    $('.owl-carousel3').owlCarousel({
loop:true,
margin:150,
nav:true,
navText: ["<img src='/wp-content/themes/positiva/assets/images/flat-color-icons_left(1).png' >", "<img src='/wp-content/themes/positiva/assets/images/flat-color-icons_right.png'>"],
responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:1
    }
}
})
</script>

<script>
    $('.owl-carousel4').owlCarousel({
loop:true,
margin:10,
nav:true,
navText: ["<", ">"],
responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:1
    }
}
})
</script>


<script>
    $('.owl-carousel5').owlCarousel({
loop:false,
margin:1,
nav:true,
navText: ["<img src='/wp-content/themes/positiva/assets/images/Path1937.png' >", "<img src='/wp-content/themes/positiva/assets/images/Path1937(1).png' >"],
responsive: {
        0: {
            items: 1,
            slideBy: 1,
            loop:true,
        
        },
        768: {
            items: 4,
            slideBy: 4,
        }
}
})
</script>

<script>
    $('.owl-carousel6').owlCarousel({
loop:false,
margin:1,
nav:true,
navText: ["<img src='/wp-content/themes/positiva/assets/images/Path1937.png' >", "<img src='/wp-content/themes/positiva/assets/images/Path 1937(1).png' >"],
responsive: {
        0: {
            items: 1,
            slideBy: 1,
            loop:true,
        
        },
        768: {
            items: 3,
            slideBy: 3,
        }
}
})
</script>

<script>
    $('.owl-carousel7').owlCarousel({
loop:false,
margin:1,
nav:false,
navText: ["<", ">"],
responsive: {
        0: {
            items: 1,
            slideBy: 1,
            loop:true,
        
        },
        768: {
            items: 4,
            slideBy: 4,
        }
}
})
</script>


</body>
</html>

