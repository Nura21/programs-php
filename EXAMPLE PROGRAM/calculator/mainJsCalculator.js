document.getElementById("buttonValue").addEventListener("click",utama);

function utama(){
    let newNumberStr1=document.getElementById("number1").value;
    let newNumberStr2=document.getElementById("number2").value;
    //PARSING
    let newNumberInt1=parseInt(newNumberStr1);
    let newNumberInt2=parseInt(newNumberStr2);
    let value=0;
    const newSelectionStr=document.getElementById("selection").value;
    if(newSelectionStr=="+"){
        value=newNumberInt1+newNumberInt2;        
    }else if(newSelectionStr=="-"){
        value=newNumberInt1-newNumberInt2;
    }else if(newSelectionStr=="*"){
        value=newNumberInt1*newNumberInt2;
    }else if(newSelectionStr=="/"){
        value=newNumberInt1/newNumberInt2;
    }
    alert("Hasilnya :"+value);

}
