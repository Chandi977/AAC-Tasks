function ch() {
    var numOne, numTwo, sum;
    numOne = parseInt(document.getElementById("first").value);
    numTwo = parseInt(document.getElementById("second").value);
    if (document.getElementById("first").value !== '' && document.getElementById("second").value !== '') {
        sum = numOne + numTwo;
        document.getElementById("add").innerHTML = sum;
        sum = numOne - numTwo;
        document.getElementById("sub").innerHTML = sum;
        sum = numOne * numTwo;
        document.getElementById("mul").innerHTML = sum;
        sum = numOne / numTwo;
        document.getElementById("divi").innerHTML = sum;
    }
    else{
        alert("I am not suppose to tell you the answer as you didn't input data on text boxs \n\n\n Sorry.")
    }
}
function clr() {
    document.getElementById("first").value = "";
    document.getElementById("second").value = "";
    document.getElementById("add").value = "";
    document.getElementById("sub").value = "";
    document.getElementById("mul").value = "";
    document.getElementById("divi").value = "";
}