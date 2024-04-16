function myFunc() {
    var x = document.getElementById('username');
    var y = document.getElementById('email');
    var z = document.getElementById('password');

    if (isEmpty(x, "Username Tidak Boleh Kosong")) {
        if (isAlpha(x, "Username Harus Berupa Huruf & Angka")) {
            if (isEmptyEmail(y, "Email Tidak Boleh Kosong")) {
                if (isAlphaEmail(y, "Email Harus Berupa Huruf & Angka")) {
                    if (isEmptyPass(z, "Password Tidak Boleh Kosong")) {
                        if (isAlphaPass(z, "Password Harus Berupa Huruf & Angka")) {
                            return true;
                        }
                    }
                }
            }
        }
    }
    return false;
}
// Username
function isEmpty(x, msg) {
    if (x.value.length == 0) {
        alert(msg);
        x.focus();
        return false;
    }
    return true;
}
function isAlpha(x, msg) {
    var regex = /^[0-9a-zA-Z]+$/;
    if (!regex.test(x.value)) {
        alert(msg);
        x.focus();
        return false;
    }
    return true;
}
// Email 
function isEmptyEmail(x, msg) {
    if (x.value.length == 0) {
        alert(msg);
        x.focus();
        return false;
    }
    return true;
}
function isAlphaEmail(x, msg) {
    var regex = /^[0-9a-zA-Z-@.-]+$/;
    if (!regex.test(x.value)) {
        alert(msg);
        x.focus();
        return false;
    }
    return true;
}
// Password
function isEmptyPass(x, msg) {
    if (x.value.length == 0) {
        alert(msg);
        x.focus();
        return false;
    }
    return true;
}
function isAlphaPass(x, msg) {
    var regex = /^[0-9a-zA-Z]+$/;
    if (!regex.test(x.value)) {
        alert(msg);
        x.focus();
        return false;
    }
    return true;
}