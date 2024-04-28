
// document.getElementById("test").innerHTML = number;

var randomNumber = Math.floor(Math.random() * 100) + 1;
let numberS = 1;
let numberE = 100;
let count = 0;
function Cknumber() {
    var number = document.getElementById("valueNumber").value;
    if(number == randomNumber){
        count++;
        document.getElementById("test").innerHTML = "เลขถูกต้อง จำนวนในการเดา : "+count;
        if(count <= 5){
            document.getElementById("test2").innerHTML = "เกณ์ของคุณคือ ยอดเยี่ยมมาก";
        }else if(count > 5){
            document.getElementById("test2").innerHTML = "เกณ์ของคุณคือ พอใช้";
        }else{
            document.getElementById("test2").innerHTML = "เกณ์ของคุณคือ แย่หน่อยนะ";
        }
    }else{
        if(number >= randomNumber){
            numberE = number;
        }else{
            numberS = number;
        }
        // var myElement = document.createElement('p'); 
        // myElement.innerText = "เลขยังไม่่ถูกต้อง ตัวเลขอยู่ระหว่าง "+numberS+" กับ "+numberE;
        // document.getElementById("test").appendChild(myElement);
        document.getElementById("test").innerHTML = "เลขยังไม่่ถูกต้อง ตัวเลขอยู่ระหว่าง "+numberS+" กับ "+numberE;
        count++;
    }
}
