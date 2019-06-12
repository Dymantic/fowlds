import throttle from "lodash.throttle";
import Usher from "./lib/Usher";
import jump from "jump.js";

window.addEventListener(
  "scroll",
  throttle(() => {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 100) {
      return navbar.classList.add("scrolled");
    }
    return navbar.classList.remove("scrolled");
  }, 100)
);

window.addEventListener("load", () => {
  new Usher();

  const trigger = document.querySelector(".menu-trigger button");

  trigger.addEventListener("click", () => {
    const nav = document.querySelector(".main-nav");
    console.log("clicked");
    if (nav.classList.contains("expose")) {
      console.log("inner");
      return nav.classList.remove("expose");
    }
    nav.classList.add("expose");
  });

  const top_button = document.querySelector(".back-to-top");
  top_button.addEventListener("click", () => {
    jump("body");
  });
});
