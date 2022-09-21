let title = document.querySelector(".title__basic");
let holders = document.querySelector(".title__holders");
let management = document.querySelector(".title__management");
let rest = document.querySelector(".title__rest");

let titles=[title, holders, management, rest]

let bodyTitle = document.querySelector(".body__basic");
let bodyHolders = document.querySelector(".body__holders");
let bodyManagement = document.querySelector(".body__management");
let bodyRest = document.querySelector(".body__rest");
let bodyAlerts = document.querySelector(".body__alerts");

let pages = document.querySelectorAll('.page');

title.addEventListener("click", e=> {
    pages.forEach(page => page.classList.add("display__none"))
    if(bodyTitle) {
        bodyTitle.classList.remove("display__none")
    }
})

holders.addEventListener("click", e=> {
    pages.forEach(page => page.classList.add("display__none"))
    if(bodyHolders) {
    bodyHolders.classList.remove("display__none");
    }
})

management.addEventListener("click", e=> {
    pages.forEach(page => page.classList.add("display__none"))
    if(bodyManagement) {
    bodyManagement.classList.remove("display__none");
    }
})

rest.addEventListener("click", e=> {
    pages.forEach(page => page.classList.add("display__none"))
    if(bodyRest) {
    bodyRest.classList.remove("display__none");
    }
})

let alerts = document.querySelectorAll('.alert');
let alertWrongNumber = document.querySelector('.wrong__krsNumber');
let alertWrongType = document.querySelector('.wrong_krsType');

function validateForm() {
    let krsNumber = document.forms["form"]["krsNumber"].value
    if (krsNumber == ""|krsNumber.length!=10) {
      titles.forEach(title => title.setAttribute("disabled", ""))
      pages.forEach(page => page.classList.add("display__none"))
      bodyAlerts.classList.remove("display__none")
      alerts.forEach(alert => alert.classList.add("display__none"))
      alertWrongNumber.classList.remove("display__none");
      return false;
    }
    let e = document.querySelector("#krsTypeSelect");
    let str = e.options[e.selectedIndex].value;
    if (str != 'Przedsiębiorstwo'&&str != 'Stowarzyszenie') {
      titles.forEach(title => title.setAttribute("disabled", ""))
      pages.forEach(page => page.classList.add("display__none"))
      bodyAlerts.classList.remove("display__none")
      alerts.forEach(alert => alert.classList.add("display__none"))
      alertWrongType.classList.remove("display__none");
      return false;
    }
    titles.forEach(title => title.removeAttribute("disabled"))
  }
