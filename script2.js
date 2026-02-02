function hitung() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    let operator = document.getElementById("operator").value;
    let hasil;

    if (num1 === "" || num2 === "") {
        alert("Masukkan kedua angka!");
        return;
    }

    num1 = parseFloat(num1);
    num2 = parseFloat(num2);

    switch (operator) {
        case "+":
            hasil = num1 + num2;
            break;
        case "-":
            hasil = num1 - num2;
            break;
        case "*":
            hasil = num1 * num2;
            break;
        case "/":
            if (num2 === 0) {
                alert("Tidak bisa dibagi dengan nol!");
                return;
            }
            hasil = num1 / num2;
            break;
    }

    document.getElementById("hasil").innerText = hasil;

    // Tambahkan ke history
    let history = document.getElementById("history");
    let li = document.createElement("li");
    li.innerText = `${num1} ${operator} ${num2} = ${hasil}`;
    history.appendChild(li);
}

function bersih() {
    document.getElementById("num1").value = "";
    document.getElementById("num2").value = "";
    document.getElementById("hasil").innerText = "";
    document.getElementById("history").innerHTML = "";
}