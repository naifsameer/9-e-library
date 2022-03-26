let stepNumber = 0;
let stepperElements = document.querySelectorAll(".step__item");

const stepElements = document.querySelectorAll(".js-step");

function renderStep() {
  stepElements.forEach((item) => item.classList.remove("is-active"));

  stepElements[stepNumber].classList.add("is-active");
}

document.querySelectorAll(".next-btn").forEach((item) => {
  item.addEventListener("click", () => {
    const IS_STEP_NUMBER = stepNumber >= stepperElements.length - 1;
    stepNumber = IS_STEP_NUMBER ? stepNumber : ++stepNumber;

    stepperElements[stepNumber].classList.add("is-active");
    renderStep();
  });
});

document.querySelectorAll(".previews-btn").forEach((item) => {
  item.addEventListener("click", () => {
    if (stepNumber !== 0 || stepNumber < 0) {
      stepperElements[stepNumber].classList.remove("is-active");
    }

    stepNumber = stepNumber <= 0 ? 0 : --stepNumber;
    renderStep();

  });
});
