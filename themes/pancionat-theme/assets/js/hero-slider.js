document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".hero");
  if (!hero) return;

  const slide = hero.querySelector("img");
  const slides = hero.dataset.slides ? JSON.parse(hero.dataset.slides) : [];
  if (!slide || !slides.length) return;

  let index = 0;
  const interval = 4000;
  const fadeDuration = 1000;

  slide.style.transition = `opacity ${fadeDuration / 1000}s ease`;
  slide.style.position = "absolute";
  slide.style.top = 0;
  slide.style.left = 0;
  slide.style.width = "100%";
  slide.style.height = "100%";
  slide.style.objectFit = "cover";
  slide.style.opacity = "1";

  setInterval(() => {
    slide.style.opacity = "0";
    setTimeout(() => {
      index = (index + 1) % slides.length;
      slide.src = slides[index];
      slide.style.opacity = "1";
    }, fadeDuration);
  }, interval);
});
