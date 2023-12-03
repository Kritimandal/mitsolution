window.addEventListener("scroll", function () {
    var fixedDiv = document.getElementById("fixedDiv");
    if (window.scrollY > fixedDiv.offsetTop) {
        fixedDiv.style.position = "fixed";
        fixedDiv.style.top = "0";
        fixedDiv.style.left = "0";
        fixedDiv.style.width = "100%";
        fixedDiv.style.backgroundColor = "white"; // Customize background color
        fixedDiv.style.zIndex = "100"; // Customize z-index
    } else {
        fixedDiv.style.position = "static";
    }
});
var marginFromTop = 70; // Adjust this value to set the margin from the top
var initialWidth = "100%"; // Initial width
var stopFixingHeight = 1500; // Adjust this value for the height at which to stop fixing

window.addEventListener("scroll", function () {
    var fixedDiv = document.getElementById("contactus");
    var currentPosition = window.scrollY;

    if (
        currentPosition > fixedDiv.offsetTop - marginFromTop &&
        currentPosition < stopFixingHeight &&
        currentPosition > lastScrollPosition
    ) {
        fixedDiv.style.position = "fixed";
        fixedDiv.style.top = marginFromTop + "px"; // Set the margin from the top
        fixedDiv.style.right = "0";
        fixedDiv.style.width = "33%"; // Change to 33% width when scrolled
        // fixedDiv.style.backgroundColor = "white"; // Customize background color
        fixedDiv.style.zIndex = "100"; // Customize z-index
    } else {
        fixedDiv.style.position = "static";
        fixedDiv.style.width = initialWidth; // Set back to initial width
    }

    lastScrollPosition = currentPosition;
});

var lastScrollPosition = 0; // To track the last scroll position
