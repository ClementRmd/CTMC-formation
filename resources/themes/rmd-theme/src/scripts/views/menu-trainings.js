function eventMenuTraining(menu) {
  const itemsMenu = menu.querySelectorAll(".menu-training__item__div");

  itemsMenu.forEach((itemMenu) => {
    itemMenu.addEventListener("click", (e) => {
      e.preventDefault();

      const parentItem = itemMenu.parentNode;
      const hiddenBloc = parentItem.querySelector("div:last-child");
      hiddenBloc.classList.toggle("hidden");
    });
  });
}

const menuTraining = document.querySelector(".menu-training");

if (menuTraining) {
  eventMenuTraining(menuTraining);
}
