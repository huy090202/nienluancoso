const mainSlideImg = document.querySelector(".main-slide__img");
const mainListImg = document.querySelectorAll(".main-listImg img");
const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");

let currentIndex = 0;

function updateImageindex(index) {
  //remove showColor class
  document.querySelectorAll(".main-listImg div").forEach((item) => {
    item.classList.remove("showColor");
  });

  currentIndex = index;
  mainSlideImg.src = mainListImg[index].getAttribute("src");
  mainListImg[index].parentElement.classList.add("showColor");
}

mainListImg.forEach((imgElement, index) => {
  imgElement.addEventListener("click", (e) => {
    mainSlideImg.style.opacity = "0";

    setTimeout(() => {
      updateImageindex(index);
      mainSlideImg.style.opacity = "1";
    }, 200);
  });
});

prevBtn.addEventListener("click", (e) => {
  if (currentIndex == 0) {
    currentIndex = mainListImg.length - 1;
  } else {
    currentIndex--;
  }

  updateImageindex(currentIndex);
});

nextBtn.addEventListener("click", (e) => {
  if (currentIndex == mainListImg.length - 1) {
    currentIndex = 0;
  } else {
    currentIndex++;
  }

  updateImageindex(currentIndex);
});

updateImageindex(0);

// btn
$("input.main-btnAdded__input").each(function () {
  const $this = $(this),
    qty = $this.parent().find(".main-btnAdded__control"),
    min = Number($this.attr("min")),
    max = Number($this.attr("max"));
  if (min == 0) {
    const d = 0;
  } else d = min;
  $(qty).on("click", function () {
    if ($(this).hasClass("minus")) {
      if (d > min) d += -1;
    } else if ($(this).hasClass("plus")) {
      const x = Number($this.val()) + 1;
      if (x <= max) d += 1;
    }
    $this.attr("value", d).val(d);
  });
});

//add cart
$(".main-btn").click(() => {
  window.location.href = "giohang";
});

// xu ly mo ta danh gia

const $mainTitles = $(".main-title");
const $mainHider = $(".main-hide");

$(".rightBtn").on("click", function () {
  $mainTitles.css("display", "none");

  $(".leftBtn").css({ color: "#a7a2a2", "background-color": "#f0f0f0" });
  $(".leftBtn").hover(
    function () {
      $(this).css({ color: "#fff", "background-color": "rgb(219, 52, 52)" });
    },
    function () {
      $(this).css({ color: "#a7a2a2", "background-color": "#f0f0f0" });
    }
  );

  $(this).css({ color: "#fff", "background-color": "#00a4e0" });
  $(this).hover(
    function () {
      $(this).css({ color: "#fff", "background-color": "rgb(219, 52, 52)" });
    },
    function () {
      $(this).css({ color: "#fff", "background-color": "#00a4e0" });
    }
  );

  $mainHider.css("display", "block");
});

$(".leftBtn").on("click", function () {
  $mainTitles.css("display", "block");
  $(".rightBtn").css({ color: "#a7a2a2", "background-color": "#f0f0f0" });
  $(".rightBtn").hover(
    function () {
      $(this).css({ color: "#fff", "background-color": "rgb(219, 52, 52)" });
    },
    function () {
      $(this).css({ color: "#a7a2a2", "background-color": "#f0f0f0" });
    }
  );

  $(this).css({ color: "#fff", "background-color": "#00a4e0" });
  $(this).hover(
    function () {
      $(this).css({ color: "#fff", "background-color": "rgb(219, 52, 52)" });
    },
    function () {
      $(this).css({ color: "#fff", "background-color": "#00a4e0" });
    }
  );
  $mainHider.css("display", "none");
});

//star

$(".star1").click(function () {
  $(this).css("color", "#d26e4b");
  $(".star2").css("color", "#ddd");
  $(".star3").css("color", "#ddd");
  $(".star4").css("color", "#ddd");
  $(".star5").css("color", "#ddd");
});

$(".star2").click(function () {
  $(this).css("color", "#d26e4b");

  $(".star1").css("color", "#ddd");
  $(".star3").css("color", "#ddd");
  $(".star4").css("color", "#ddd");
  $(".star5").css("color", "#ddd");
});

$(".star3").click(function () {
  $(this).css("color", "#d26e4b");

  $(".star1").css("color", "#ddd");
  $(".star2").css("color", "#ddd");
  $(".star4").css("color", "#ddd");
  $(".star5").css("color", "#ddd");
});

$(".star4").click(function () {
  $(this).css("color", "#d26e4b");

  $(".star1").css("color", "#ddd");
  $(".star2").css("color", "#ddd");
  $(".star3").css("color", "#ddd");
  $(".star5").css("color", "#ddd");
});

$(".star5").click(function () {
  $(this).css("color", "#d26e4b");

  $(".star1").css("color", "#ddd");
  $(".star2").css("color", "#ddd");
  $(".star3").css("color", "#ddd");
  $(".star4").css("color", "#ddd");
});

//form
const mainForm = document.querySelector(".main-form");
const mainListInput = document.querySelectorAll(".main-form__input");

const handlemainForm = (value, type) => {
  const ismainForm = (item, min) => new RegExp(`.{${min},}`).test(item);

  switch (type) {
    case "password":
      return ismainForm(value, 8);
    case "email":
      const emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if (value && emailReg.test(value)) {
        return true;
      }
      return false;
    case "text":
      return ismainForm(value, 4);
    case "textarea":
      return ismainForm(value, 10);
    default:
      throw new Error(value, type);
  }
};

const handleSubmit = (e) => {
  e.preventDefault();
  const len = mainListInput.length;
  let ismainForm = true;

  for (let i = 0; i < len; i++) {
    if (!handlemainForm(mainListInput[i].value, mainListInput[i].type)) {
      alert(`${mainListInput[i].type} không hợp lệ!`);
      mainListInput[i].focus();
      ismainForm = false;
      break;
    }
  }
  if (ismainForm) {
    mainForm.submit();
  }
};
mainForm.addEventListener("submit", handleSubmit);

//slide
$(".main-slideshow2").flickity({
  draggable: true,
  pageDots: false,
  autoPlay: 2000,
  pauseAutoPlayOnHover: true,
  wrapAround: true,
  prevNextButtons: false,
});
const $carousel2 = $(".main-slideshow2").flickity();
$(".main-btn__prev2").on("click", function () {
  $carousel2.flickity("previous", true);
});

$(".main-btn__next2").on("click", function () {
  $carousel2.flickity("next", true);
});
