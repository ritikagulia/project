document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");
  const slideWidth = slides[0].offsetWidth;
  const totalSlides = slides.length;
  let currentIndex = 0;

  function slideTo(index) {
    if (index < 0 || index >= totalSlides) return;

    currentIndex = index;
    const offset = -slideWidth * currentIndex;
    slider.style.transform = `translateX(${offset}px)`;
  }

  function slideNext() {
    if (currentIndex < totalSlides - 3) {
      slideTo(currentIndex + 1);
    } else {
      // Reset to the first slide
      slideTo(0);
    }
  }

  function slidePrev() {
    if (currentIndex > 0) {
      slideTo(currentIndex - 1);
    }
  }

  // Automatic sliding
  setInterval(slideNext, 3000); // Change slide every 3 seconds
});

const redirect = document.querySelector(".scholarshipCont");
redirect.addEventListener("click", function () {
  window.location.href =
    "https://www.buddy4study.com/scholarships?utm_source=header";
});

const redirect2 = document.querySelector("#courseera");
redirect2.addEventListener("click", function () {
  window.location.href =
    "https://www.coursera.org/browse/computer-science/software-development";
});

const redirect3 = document.querySelector("#linkedin");
redirect3.addEventListener("click", function () {
  window.location.href =
    "https://www.classcentral.com/report/linkedin-learning-free-learning-paths/#paths";
});

const redirect4 = document.querySelector("#udemy");
redirect4.addEventListener("click", function () {
  window.location.href = "https://www.udemy.com/courses/free/";
});

const redirect5 = document.querySelector("#skillshare");
redirect5.addEventListener("click", function () {
  window.location.href = "https://www.shiksha.com/online-courses/free-skillshare-courses-certification-training-v495?enModal=Y&regFlow=N";
});
