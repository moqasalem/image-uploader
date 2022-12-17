//define event on page loading
window.addEventListener("load", (event) => {
    console.log("page is fully loaded");
    setTimeout(myFunction, 3000)
  });

  function myFunction() {
    document.getElementById('load').style.display ="none"; //hide loader
    document.getElementById('show').style.display ="flex";
  }


  //copy button
  function copyFunction() {
    // Get the text field
    var copyText = document.getElementById("my-link");
  
    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices
  
     // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);
  
    // Alert the copied text
    alert("Copied the text: " + copyText.value);
  }