function slider({ items, nextBtn, prevBtn, dotes = false }) {
  const sliders = document.querySelectorAll(`${items}`);

  let sliderIndex = 0;

  function renderSlider() {
    console.log('render...');
    sliders.forEach((item, index) => {
      if (index === sliderIndex) {
        item.classList.add('is-active');
      } else {
        item.classList.remove('is-active');
      }
    });
  }

  const renderDotes = () => {
    document.querySelectorAll('.c-slider-dotes div').forEach((item, index) => {
      if (index === sliderIndex) {
        item.classList.add('is-active');
      } else {
        item.classList.remove('is-active');
      }
    });
  };

  document.querySelector(`${nextBtn}`).addEventListener('click', () => {
    sliderIndex = sliderIndex >= sliders.length - 1 ? 0 : sliderIndex + 1;
    renderSlider();

    if (dotes) {
      renderDotes();
    }
  });

  document.querySelector(`${prevBtn}`).addEventListener('click', () => {
    sliderIndex = sliderIndex <= 0 ? sliders.length - 1 : sliderIndex - 1;
    renderSlider();

    if (dotes) {
      renderDotes();
    }
  });

  // first time
  renderSlider();

  if (dotes) {
    const dotesWrapper = document.querySelector('.c-slider-dotes');
    const sliderItems = document.querySelectorAll('.c-slider .item');

    let renderHtml = ``;
    for (let i = 0; i < sliderItems.length; i++) {
      renderHtml += `<div></div>`;
    }
    dotesWrapper.innerHTML = renderHtml;

    // move the slider when the user click the dotes
    const doteItems = document.querySelectorAll('.c-slider-dotes div');

    doteItems.forEach((item, index) => {
      item.addEventListener('click', () => {
        sliderIndex = index;
        renderSlider();
        renderDotes();
      });
    });

    // first time
    renderDotes();
  }

  setInterval(() => {
    sliderIndex = sliderIndex >= sliders.length - 1 ? 0 : sliderIndex + 1;
    renderSlider();
    renderDotes();
  }, 3000);
}
