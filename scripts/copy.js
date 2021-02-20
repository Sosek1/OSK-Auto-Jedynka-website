function copy() {
    var copyText = document.querySelector(".mailAdress");
  
    copyText.select();
    copyText.setSelectionRange(0, 99999); 
  
    document.execCommand("copy");
  }