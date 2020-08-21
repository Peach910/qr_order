var sumA = 0;
var sumB = 0;
var sumC = 0;

function addClick() {
    const numA = parseInt(document.getElementById("numA").value ,10);
    const numB = parseInt(document.getElementById("numB").value ,10);
    const numC = parseInt(document.getElementById("numC").value ,10);

    sumA += numA;
    sumB += numB;
    sumC += numC;
    //console.log(sumA);
    //console.log(numA);
}