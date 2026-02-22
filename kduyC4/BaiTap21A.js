function Cong() {
    var a = parseFloat(document.getElementsByName("So01")[0].value);
    var b = parseFloat(document.getElementsByName("So02")[0].value);
    document.getElementsByName("Ketqua")[0].value = a + b;
}

function Tru() {
    var a = parseFloat(document.getElementsByName("So01")[0].value);
    var b = parseFloat(document.getElementsByName("So02")[0].value);
    document.getElementsByName("Ketqua")[0].value = a - b;
}

function Nhan() {
    var a = parseFloat(document.getElementsByName("So01")[0].value);
    var b = parseFloat(document.getElementsByName("So02")[0].value);
    document.getElementsByName("Ketqua")[0].value = a * b;
}

function Chia() {
    var a = parseFloat(document.getElementsByName("So01")[0].value);
    var b = parseFloat(document.getElementsByName("So02")[0].value);
    if (b == 0) {
        alert("Không chia được cho 0");
    } else {
        document.getElementsByName("Ketqua")[0].value = a / b;
    }
}
