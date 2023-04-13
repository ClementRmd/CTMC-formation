/* global ajaxUrl:readonly */
function ajaxFunction(dataForm) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", ajaxUrl, true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  const params = `action=formTestimony&data=${JSON.stringify(dataForm[0])}`;
  xhr.send(params);
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.response) {
        const data = JSON.parse(xhr.response);
        const listTestimony = document.querySelector(".list-testimony");
        listTestimony.insertAdjacentHTML(
          "afterbegin",
          `
          <div class="w-full">
            <div class="font-secondary italic font-bold text-gray-normal border-b-2 mt-6">
              ${data.name}
            </div>
            <div class="font-secondary mb-6 text-base">
              ${data.message}
            </div>
          </div>
          `
        );
      }
    }
  };
}

const form = document.querySelector("#form_testimony");

if (form) {
  const button = form.querySelector("input[type='submit']");

  button.addEventListener("click", (e) => {
    e.preventDefault();

    const postId = form.dataset.postid;
    const message = form.querySelector("textarea[name='message']").value;
    const name = form.querySelector("input[name='name']").value;
    const email = form.querySelector("input[name='email']").value;

    const dataForm = [];

    dataForm.push({
      postId,
      message,
      name,
      email,
    });

    ajaxFunction(dataForm);
  });
}
