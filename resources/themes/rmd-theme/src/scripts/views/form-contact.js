/* global ajaxUrl:readonly */
function renderMessage(message, itemClass) {
  const render = `
  <div class="errorMessage flex items-center ${itemClass} rounded-lg mt-4 p-4 mb-4 text-sm" role="alert">
    <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <div class="font-primary">
      ${message}
    </div>
  </div>`;
  return render;
}

function displayMessageValidation(form) {
  form.insertAdjacentHTML(
    "afterend",
    renderMessage(
      "Votre message a bien été envoyé ! Vous allez être redirigé dans quelques secondes.",
      "bg-green text-white"
    )
  );
  
  setTimeout(() => {
    window.location="https://www.ctmc-formations.com/";
  }, 5000);
  
}

function displayError(data, form) {
  const blocFirstName = form.querySelector(".bloc-firstname");
  const blocLastName = form.querySelector(".bloc-lastname");
  const blocEmail = form.querySelector(".bloc-email");
  const blocMessage = form.querySelector(".bloc-message");

  if (!data.firstname.valid) {
    blocFirstName.insertAdjacentHTML(
      "beforeend",
      renderMessage(data.firstname.error, "bg-red-light text-red-medium")
    );
  }

  if (!data.lastname.valid) {
    blocLastName.insertAdjacentHTML(
      "beforeend",
      renderMessage(data.lastname.error, "bg-red-light text-red-medium")
    );
  }

  if (!data.destinataire.valid) {
    blocEmail.insertAdjacentHTML(
      "beforeend",
      renderMessage(data.destinataire.error, "bg-red-light text-red-medium")
    );
  }

  if (!data.message.valid) {
    blocMessage.insertAdjacentHTML(
      "beforeend",
      renderMessage(data.message.error, "bg-red-light text-red-medium")
    );
  }
}

function ajaxFunction(dataForm, form) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", ajaxUrl, true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  const params = `action=formValidation&data=${JSON.stringify(dataForm[0])}`;
  xhr.send(params);
  xhr.onreadystatechange = () => {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.response) {
        const data = JSON.parse(xhr.response);
        if (data === true || data === 1) {
          displayMessageValidation(form);
        } else {
          displayError(data, form);
        }
      }
    }
  };
}

function validationForm(form) {
  const submitForm = form.querySelector("button");

  submitForm.addEventListener("click", (e) => {
    e.preventDefault();

    const errorMessages = form.querySelectorAll(".errorMessage");
    errorMessages.forEach((errorMessage) => {
      errorMessage.classList.add("hidden");
    });

    const dataForm = [];
    dataForm.push({
      firstname: form.querySelector("#first-name").value,
      lastname: form.querySelector("#last-name").value,
      destinataire: form.querySelector("#email").value,
      message: form.querySelector("#message").value,
    });
    ajaxFunction(dataForm, form);
  });
}

const form = document.querySelector("#formContact");
if (form) {
  validationForm(form);
}
