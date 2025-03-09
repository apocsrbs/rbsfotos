document.addEventListener("scroll", function() {
    let scrollPosition = window.scrollY;
    document.querySelector(".parallax-bg").style.transform = `translateY(${scrollPosition * 0.5}px)`;
});
