const bookList = document.querySelector('.c-books .list');
const bookItem = document.querySelector('.c-books .item');

function renderBooks(count) {
  let items = ``;

  if (count > 0 && !isNaN(count)) {
    for (let i = 0; i < count; i++) {
      items += bookItem.outerHTML;
    }
  } else {
    items = `please enter correct number count is ${count}`;
  }

  bookList.innerHTML = items;
}
