import Splide from "@splidejs/splide";

const slider = document.querySelector("#slider1");
if (slider) {
  new Splide(slider, {
    type: "loop",
    perPage: 3,
    gap: "20px",
    autoplay: true,
    interval: 2000,
  }).mount();
}
