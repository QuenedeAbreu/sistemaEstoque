var alertSuccess = document.querySelector('#notifications');

if(!alertSuccess.classList.contains("remove-alert")){
  setTimeout(()=>{
    const valueStyleNotification = "100%";
    alertSuccess.style.marginLeft = valueStyleNotification;
    
    setTimeout(()=>{
      alertSuccess.classList.add("remove-alert");
    },500);
  },5000);
}