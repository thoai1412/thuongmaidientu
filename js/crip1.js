const captcha = document.querySelector(".captcha"),
reloadBtn = document.querySelector(".reload-btn"),
inputField = document.querySelector(".input-area input"),
checkBtn = document.querySelector(".check-btn"),
statusTxt = document.querySelector(".status-text");

let allCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
                     'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
                     'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
                     't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
function getCaptcha(){
  for (let i = 0; i < 6; i++) { //getting 6 random characters from the array
    let randomCharacter = allCharacters[Math.floor(Math.random() * allCharacters.length)];
    captcha.innerText += ` ${randomCharacter}`;
  
  }
}
checkBtn.addEventListener("click", () =>{
  kiemtra()  
});
getCaptcha(); 
reloadBtn.addEventListener("click", ()=>{
  removeContent();
  getCaptcha();
});

function removeContent(){
 inputField.value = "";
 captcha.innerText = "";
 statusTxt.style.display = "none";
}
function remove(){
  document.dangkii.xnpassword.value="";
}
function kiemtra(){
      var ht= document.dangkii.name.value;
      var dt= document.dangkii.sdt.value;
      var email= document.dangkii.username.value
      var mk= document.dangkii.password.value; 
      var nlmk= document.dangkii.xnpassword.value;

       
        if((mk!=nlmk)&&(nlmk!="")){
          alert("mật khẩu nhập lại không đúng");
          remove();
        }
        let inputVal = inputField.value.split('').join(' ');
        if((inputVal != captcha.innerText)&&(inputVal!="")){ 
          alert("Mã captcha sai vui lòng nhập lại"); 
          removeContent();
          getCaptcha(); 
        } 
          document.getElementById('bienphp').value=1;
        
}