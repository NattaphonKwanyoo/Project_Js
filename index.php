<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id='ShowText01'></p>
    <div id = "inputText">
    
    </div>
    
    <br>
    <br>
    <input type="button" value="add" onclick="fncCreateElement()">
    <input type="submit" value="ok">
    <script>
         var num = 0;
        function fncCreateElement(){
        var myElement1 = document.createElement('input');
        myElement1.setAttribute('type', 'text');
        myElement1.setAttribute('onchange', 'showText()');
        myElement1.setAttribute('name', 'txtSiteName[]');
        myElement1.setAttribute('id',"txt"+num);
        var myElement2 = document.createElement('input');
        myElement2.setAttribute('type', 'button');
        myElement2.setAttribute('value', 'ลบ');
        myElement2.setAttribute('id',"btn"+num);
        myElement2.setAttribute('onclick', 'DelElement("txt'+num+'" , "btn'+num+'", "br'+num+'")');
        var myElement3 = document.createElement('br'); 
        myElement3.setAttribute('id',"br"+num);
        document.getElementById("inputText").appendChild(myElement3);
        document.getElementById("inputText").appendChild(myElement1);
        document.getElementById("inputText").appendChild(myElement2);
        num++;
        
        }

         function DelElement(name , name2 , name3){
            const element = document.getElementById(name);
            const element2 = document.getElementById(name2);
            const element3 = document.getElementById(name3);
            element.remove();
            element2.remove();
            element3.remove();
         }

         function showText(){
            var Text = "อะไรนะ";
            if(document.getElementById('txt1').value != 1){
                document.getElementById("ShowText01").innerHTML = text;
            }
            
         }



    </script>
</body>
</html>