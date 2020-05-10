window.addEventListener("scroll", function () {

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


    let mobileContent = document.querySelector('.mobile-content');
    var burger = document.querySelector('.navbar-toggler');
    var burgerContent = document.querySelector('.navbar-collapse');
  
    let clientRect = mobileContent.getBoundingClientRect().top;
    
    if(clientRect <= 0){
      burger.style.backgroundColor = '#f77430';
      burgerContent.style.backgroundColor = '#f77430';
    }else if(clientRect > 0){
      burger.style.backgroundColor = '#343a40';
      burgerContent.style.backgroundColor = '#343a40';
    }
  

});
