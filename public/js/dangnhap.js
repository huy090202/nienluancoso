const mainForm = document.querySelector(".main-form");
const mainListInput = document.querySelectorAll(".main-form__input");

const handlemainForm = (value, type) => {
  const ismainForm = (item, min) => new RegExp(`.{${min},}`).test(item);

  switch (type) {
    case "password":
      return ismainForm(value, 8);
    case "email":
      const emailReg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if (value && emailReg.test(value)) {
        return true;
      }
      return false;
    case "text":
      return ismainForm(value, 4);
    case "textarea":
      return ismainForm(value, 10);
    default:
      throw new Error(value, type);
  }
};

const handleSubmit = (e) => {
  e.preventDefault();
  const len = mainListInput.length;
  let ismainForm = true;

  for (let i = 0; i < len; i++) {
    if (!handlemainForm(mainListInput[i].value, mainListInput[i].type)) {
      alert(`${mainListInput[i].type} không hợp lệ!`);
      mainListInput[i].focus();
      ismainForm = false;
      break;
    }
  }
  if (ismainForm) {
    mainForm.submit();
  }
};
mainForm.addEventListener("submit", handleSubmit);
