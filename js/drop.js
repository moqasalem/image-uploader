//select all required elements
const DropArea = document.getElementById("drop-area"),
dragText = document.getElementById("dragText"),
button = document.querySelector("button"),
input = document.getElementById("f-input");
let file; //this is a global variable and we"ll use it inside multiple functions

 button.onclick = ()=>{
    input.click();
}

input.addEventListener("change",function(){
    //getting user select file and [0] this means if user select multiple files then we"ll select only the first one
    file = this.files[0];
    DropArea.classList.add("active");
    showFile(); //calling function
});


//If user Drag File Over DropArea
DropArea.addEventListener("dragover",(event)=>{
    event.preventDefault()
    DropArea.classList.add("active");
    dragText.textContent = "Release to Upload File";
})

//If user leave dragged File from DropArea
DropArea.addEventListener("dragleave",()=>{
    DropArea.classList.remove("active");
    dragText.textContent = "Drag & Drop to Upload File";
})

//If user drop File on DropArea
DropArea.addEventListener("drop", (event)=>{
    event.preventDefault(); //preventing from default behaviour
    //getting user select file and [0] this means if user select multiple files then we'll select only the first one
    file = event.dataTransfer.files[0];
    showFile();
});

function showFile(){
    let fileType = file.type; //getting selected file type
    let fileSize = file.size / ( 1024) ; // convert size from bye to KB
    console.log(fileSize);
    let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
    if(validExtensions.includes(fileType) ){ //if user selected file is an image file
      let fileReader = new FileReader(); //creating new FileReader object
      fileReader.onload = ()=>{
        let fileURL = fileReader.result; //passing user file source in fileURL variable
        let imgTag = `<img src="${fileURL}" alt="">`; //creating an img tag and passing user selected file source inside src attribute
        DropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
      }
      fileReader.readAsDataURL(file);
    }else{
      alert("This is not an Image File!");
      DropArea.classList.remove("active");
      dragText.textContent = "Drag & Drop to Upload File";
    }
  }


  function returnFileSize(number) {
    if (number < 1024) {
      return `${number} bytes`;
    } else if (number >= 1024 && number < 1048576) {
      return `${(number / 1024).toFixed(1)} KB`;
    } else if (number >= 1048576) {
      return `${(number / 1048576).toFixed(1)} MB`;
    }
  }
  
