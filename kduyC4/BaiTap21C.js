function Tinh() {
    var a = parseFloat(document.getElementById("so1").value);
    var b = parseFloat(document.getElementById("so2").value);
    var phep = document.getElementById("pheptinh").value;
    var kq = 0;

    if (phep == "cong") {
        kq = a + b;
    }
    else if (phep == "tru") {
        kq = a - b;
    }
    else if (phep == "nhan") {
        kq = a * b;
    }
    else if (phep == "chia") {
        if (b == 0) {
            alert("Không chia được cho 0");
            return;
        }
        kq = a / b;
    }

    document.getElementById("ketqua").value = kq;
}