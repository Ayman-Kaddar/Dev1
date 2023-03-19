
   function cardCarousel3d(carousels){
    var rotateHandler = function(evt) {
      var carousel = this.parentElement;
      if(carousel.classList.contains('card-carousel') === false){
        var carousel = carousel.parentElement;
      }
      var rotate_int = parseInt(carousel.dataset.rotateInt || 0);
      if(this.classList.contains('counterclockwise')){
        rotate_int += 1;
      } else if(this.classList.contains('clockwise')){
        rotate_int -= 1;
      }
      carousel.dataset.rotateInt = rotate_int;
      animate_slider(carousel);
    }
    for(var i = 0; i < carousels.length; i++) {
      var carousel = carousels[i];
      var inner = carousel.querySelector('.inner-carousel');
      var cards = carousel.querySelectorAll('.inner-carousel > div');
      var size = cards.length;
      var panelSize = inner.clientWidth;
      var translateZ = Math.round( ( panelSize / 2 ) / Math.tan( Math.PI / size ) ) * 1.7;
      inner.style.transform = "rotateY(0deg) translateZ(-" + translateZ + "px)";
      var btnLeft = carousel.querySelector('.button-spin.counterclockwise');
      if(btnLeft !== null) {
        btnLeft.addEventListener("click", rotateHandler, false);
      }
      var btnRight = carousel.querySelector('.button-spin.clockwise');
      if(btnRight !== null) {
        btnRight.addEventListener("click", rotateHandler, false);  
      }
      animate_slider(carousel);
    }
    
    function animate_slider(carousel){
      var rotate_int = parseInt(carousel.dataset.rotateInt || 0);
      var inner = carousel.querySelector('.inner-carousel');
      var cards = carousel.querySelectorAll('.inner-carousel > div');
      var size = cards.length;
      var panelSize = inner.clientWidth;
      var translateZ = Math.round( ( panelSize / 2 ) / Math.tan( Math.PI / size ) ) * 1.7;
      var rotateY = 0;
      var ry =  360 / size;
      rotateY = ry * rotate_int;
  
      for(var i = 0; i < size; i++){
        var z = (rotate_int * ry) + (i * ry);
        var child = cards[i];
        child.style.transform = "rotateY(" + z + "deg) translateZ(" + translateZ + "px) rotateY(" + (-z).toString() + "deg)";
        child.classList.remove('clockwise');
        child.classList.remove('front');
        child.classList.remove('counterclockwise');
        child.removeEventListener("click", rotateHandler, false);
        var zz = z % 360;
        if(zz === 0) {
          child.classList.add('front');
        } else if (zz === ry || zz === -360 + ry) {
          child.classList.add('clockwise');
          child.addEventListener("click", rotateHandler, false);
        } else if (zz === 360 - ry || zz === 0 - ry) {
          child.classList.add('counterclockwise');
          child.addEventListener("click", rotateHandler, false);
        }
      }
    }
  }
  
  cardCarousel3d(document.querySelectorAll('.card-carousel'));


  function slider(flag, numSlides) {
    let centerSlide = (flag % numSlides) + 1;
    let middleOfSlider = numSlides / 2;
    let xCoef = 300 * ((middleOfSlider - centerSlide) / middleOfSlider);
  
    if($(window).width()<=450){
      xCoef = 0;
    }
  
    $(".slide-indicator").removeClass("active");
    $(".indicator-" + centerSlide).addClass("active");
    $(".slide.card").removeClass("active");
    $("#side-" + centerSlide).addClass("active");
  
    $("#side-" + centerSlide).css("z-index", "999");
    centerSlide <= numSlides / 2
      ? $("#side-" + centerSlide).css(
          "transform",
          `translateX(${xCoef - 100}%) scale(1.5)`
        )
      : $("#side-" + centerSlide).css(
          "transform",
          `translateX(${xCoef - 100}%) scale(1.5)`
        );
  
    for (let i = 1; i <= numSlides; i++) {
      if (i == centerSlide) {
        continue;
      }
      $("#side-" + i).css("z-index", "9");
      if (i < centerSlide) {
        $("#side-" + i).css("transform", `translateX(${xCoef}%) scale(1)`);
        continue;
      }
      $("#side-" + i).css("transform", `translateX(${xCoef}%) scale(1)`);
    }
  }
  
  $(document).ready(function () {
    // get the nu,ber of slides
    let slideNum = $(".slide").length;
    let flag = 0;
  
    // Append the slide-indicators
    for (let i = 1; i <= slideNum; i++) {
      $(".slide-indicator-container").append(
        `<div id="indicator-${i}" class="slide-indicator indicator-${i}"></div>`
      );
    }
  
    // first slide active by default
    $(".indicator-1").addClass("active");
  
    // add event listeners to switch to the slide selected when clicking the slide or clicking the slide-indicator
    let addListeners = [
       ".slide-indicator-container",
      "#main-slider",
    ];
  
    addListeners.forEach((item) => {
       $(item).click((e) => {
        if(e.currentTarget.id == "main-slider"){
          flag = e.target.parentElement.id.split("-")[1] - 1;
        }else{
          flag = e.target.id.split("-")[1] - 1;
        }
        slider(flag, slideNum);
      });
    });
  
    // Add functionality to next and previous buttons
    $("#nex").click(function () {
      flag = (flag + 1) % slideNum;
      slider(flag, slideNum);
    });
    $("#pre").click(function () {
      flag = Math.abs(flag - 1 + slideNum) % slideNum;
      slider(flag, slideNum);
    });
  });