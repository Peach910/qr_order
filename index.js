var sumA = 0;
var sumB = 0;
var sumC = 0;

function choose(){
    document.getElementById("nowA").innerHTML = sumA;
    document.getElementById("nowB").innerHTML = sumB;
    document.getElementById("nowC").innerHTML = sumC;
}

function addClick() {
    const numA = parseInt(document.getElementById("numA").value ,10);
    const numB = parseInt(document.getElementById("numB").value ,10);
    const numC = parseInt(document.getElementById("numC").value ,10);

    sumA += numA;
    sumB += numB;
    sumC += numC;
    //console.log(sumA);
    //console.log(numA);

    choose();
}

function OKClick() {
    var res = window.confirm("注文を確定します。よろしいですか？");

    if (res) {
        $.ajax({
            type: "GET",
            url: "index.php",
            data: { 'sumA': sumA, 'sumB': sumB, 'sumC': sumC },
            dataType: "json",
            scriptCharset:'utf-8'
        })
    }
}

window.onload = choose;
