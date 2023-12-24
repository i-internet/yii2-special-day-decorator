$(window).on('load', function() {
    var tl = gsap.timeline();

    tl.to(".christmas-loader-wrapper", {
        duration: 1, // Duration for moving right
        x: "50vw", // Move halfway to the right side of the viewport
        ease: "power1.inOut"
    })
        .to(".christmas-loader-wrapper", {
            duration: 1, // Duration for moving up
            y: "-50vh", // Move halfway up out of the viewport
            ease: "power1.inOut"
        })
        .to(".christmas-loader-wrapper", {
            duration: 2, // Duration for moving left
            x: "-50vw", // Move to the left of the viewport
            rotation: 360, // Rotate the element 360 degrees
            ease: "power1.inOut",
            onComplete: function() {
                $(".christmas-loader-wrapper").hide(); // Hide the element after animation
            }
        });
});
