///////////////// up button mobile configuration ////////////////
function upButton() {
  let mobileContent = document.querySelector(".presentation");
  let clientRect = mobileContent.getBoundingClientRect().bottom;
  let upButton = document.querySelector(".fas.fa-sort-up");

  if (clientRect <= 0) {
    upButton.style.display = "block";
    upButton.style.opacity = -0.01 * clientRect;
  } else {
    upButton.style.opacity = 0;
  }
}
//////////////// burger color mobile /////////////////
function burgerColor() {
  let mobileContent = document.querySelector(".mobile-content");
  var burger = document.querySelector(".navbar-toggler");
  var burgerContent = document.querySelector(".navbar-collapse");

  let clientRect = mobileContent.getBoundingClientRect().top;

  if (clientRect <= 0) {
    burger.style.backgroundColor = "#f77430";
    burgerContent.style.backgroundColor = "#f77430";
  } else if (clientRect > 0) {
    burger.style.backgroundColor = "#343a40";
    burgerContent.style.backgroundColor = "#343a40";
  }
}

//////////////// burger menu scroll mobile /////////////////
function burgerScroll() {
  let containers = document.querySelectorAll(".section");

  for (let a = 0; a < containers.length; a++) {
    let uniqueContainer = containers[a];
    let top = uniqueContainer.getBoundingClientRect().top;

    if (top < window.innerHeight) {
      let progressBar = uniqueContainer.querySelectorAll(".section__myBar");

      for (let b = 0; b < progressBar.length; b++) {
        progressBar[b].classList.add("active");
      }
    }
  }
}

/////////////// burger menu configuration /////////////////
function clickedLink() {
  let burgerContainer = document.querySelector(".navbar-nav");
  let burgerLinks = burgerContainer.querySelectorAll(".nav-item.nav-link");

  for (let a = 0; a < burgerLinks.length; a++) {
    let linkClicked = burgerLinks[a];

    linkClicked.addEventListener("click", function () {
      let linkParent = this.parentNode.querySelector(
        ".nav-item.nav-link.active"
      );
      linkParent.classList.remove("active");
      this.classList.add("active");
    });
  }
}

///////////////// Menu large size configuration ///////////////////
function clickedLinkMd() {
  let burgerContainer = document.querySelector(".nav-md");
  let burgerLinks = burgerContainer.querySelectorAll(".nav-md__links");

  for (let a = 0; a < burgerLinks.length; a++) {
    if (burgerLinks[a].classList.contains("active")) {
      burgerLinks[a].classList.remove("active");
    }
    
    if (window.location.href.indexOf("experience") > -1) {
      burgerLinks[1].classList.add("active");
    } else if (window.location.href.indexOf("portfolio") > -1) {
      burgerLinks[2].classList.add("active");
    } else if (window.location.href.indexOf("diplome") > -1) {
      burgerLinks[3].classList.add("active");
    } else if (window.location.href.indexOf("contact") > -1) {
      burgerLinks[a].classList.remove("active");
    } else {
      burgerLinks[0].classList.add("active");
    }
  }
}

window.addEventListener("load", clickedLink);
window.addEventListener("load", clickedLinkMd);
window.addEventListener("scroll", burgerColor);
window.addEventListener("scroll", burgerScroll);
window.addEventListener("scroll", upButton);

