/* global ajaxUrl:readonly */
const filter = document.querySelector(".filter-trainings");

function ajaxFunction(category) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", ajaxUrl, true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  const params = `action=trainings&category=${category}`;
  xhr.send(params);
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const blocListTrainings = document.querySelector(".bloc-list-trainings");
      const url = new URL(window.location);
      url.searchParams.set("category", `${category}`);
      window.history.pushState({}, "", url);

      if (xhr.response) {
        blocListTrainings.classList.add("grid", "gap-5", "lg:grid-cols-3");
        blocListTrainings.innerHTML = xhr.response;
      } else {
        blocListTrainings.classList.remove("grid", "gap-5", "lg:grid-cols-3");
        blocListTrainings.innerHTML = `
          <div class="flex items-center bg-red-light rounded-lg p-4 mb-4 text-sm text-red-medium" role="alert">
            <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="font-primary">
              Aucune formation de disponible dans cette catégorie
            </div>
          </div>
        `;
      }
    }
  };
}

function changeButtons(items, index) {
  if (items) {
    items.forEach((item) => {
      item.classList.remove("btnActive");
    });
    items[index].classList.add("btnActive");
  }
}

if (filter) {
  const itemsFilter = filter.querySelectorAll(".filter-trainings__item");
  itemsFilter.forEach((itemFilter, index) => {
    itemFilter.addEventListener("click", () => {
      const category = itemFilter.dataset.slug;
      ajaxFunction(category);
      changeButtons(itemsFilter, index);
    });
  });
}
