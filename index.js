    const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const form = document.querySelector("form");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      form.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      form.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }

    function changeBg(){
        const images = [
            'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/background1.jpg")',
            'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/background2.jpg")',
            'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/background4.png")',
            'linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("img/background5.jpg")',
        ]

        const section = document.querySelector('section')
        const bg = images[Math.floor(Math.random() * 
        images.length)];
        section.style.backgroundImage = bg;
    }
    setInterval(changeBg, 3000);
