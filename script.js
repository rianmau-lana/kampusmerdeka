function kosongAll() {
    let form = document.getElementById("form");
    form.a1.value = "";
    form.a2.value = "";
    form.hasil.value = "";
}

function tambah() {
    let form = document.getElementById("form");
    let a1 = parseFloat(form.a1.value);
    let a2 = parseFloat(form.a2.value);
    if (isNaN(a1) || a1 == '' || isNaN(a2) || a2 == '') {
        alert("Data Harga Salah/Kosong");
    } else {
        let hasil = a1 + a2;
        form.hasil.value = hasil;
    }
}

function kurang() {
    let form = document.getElementById("form");
    let a1 = parseFloat(form.a1.value);
    let a2 = parseFloat(form.a2.value);
    if (isNaN(a1) || a1 == '' || isNaN(a2) || a2 == '') {
        alert("Data Harga Salah/Kosong");
    } else {
        let hasil = a1 - a2;
        form.hasil.value = hasil;
    }
}

function kali() {
    let form = document.getElementById("form");
    let a1 = parseFloat(form.a1.value);
    let a2 = parseFloat(form.a2.value);
    if (isNaN(a1) || a1 == '' || isNaN(a2) || a2 == '') {
        alert("Data Harga Salah/Kosong");
    } else {
        let hasil = a1 * a2;
        form.hasil.value = hasil;
    }
}

function bagi() {
    let form = document.getElementById("form");
    let a1 = parseFloat(form.a1.value);
    let a2 = parseFloat(form.a2.value);
    if (isNaN(a1) || a1 == '' || isNaN(a2) || a2 == '') {
        alert("Data Harga Salah/Kosong");
    } else {
        let hasil = a1 / a2;
        form.hasil.value = hasil;
    }
}

function pangkat() {
    let form = document.getElementById("form");
    let a1 = parseFloat(form.a1.value);
    let a2 = parseFloat(form.a2.value);
    if (isNaN(a1) || a1 == '' || isNaN(a2) || a2 == '') {
        alert("Data Harga Salah/Kosong");
    } else {
        let hasil = Math.pow(a1, a2);
        form.hasil.value = hasil;
    }
}