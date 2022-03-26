const modalWrapper = document.querySelectorAll('.modal-wrapper');

const closeModal = document.querySelectorAll('.modal-wrapper .modal-btn');

const signupModal = document.querySelector('.js-signup-modal');
const loginModal = document.querySelector('.js-login-modal');

function hideModals() {
  modalWrapper.forEach((item) => item.classList.remove('is-active'));
}

// sign up modal lniks
document.querySelectorAll('.js-show-signup-modal').forEach((item) => {
  item.addEventListener('click', () => {
    hideModals();
    signupModal.classList.add('is-active');
  });
});

// login modal links
document.querySelectorAll('.js-show-login-modal').forEach((item) => {
  item.addEventListener('click', () => {
    hideModals();
    loginModal.classList.add('is-active');
  });
});

closeModal.forEach((item, index) => {
  item.addEventListener('click', () => {
    modalWrapper[index].classList.remove('is-active');
    console.log('close');
  });
});
