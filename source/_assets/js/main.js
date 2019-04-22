import throttle from "lodash.throttle";
import Usher from "./lib/Usher";

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

window.addEventListener("load", () => new Usher());
