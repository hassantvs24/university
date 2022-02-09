var currentTab = 0;
document.addEventListener("DOMContentLoaded", function (event) {
    showTab(currentTab);
});

function showTab(n) {
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == x.length - 1) {
        document.getElementById("nextBtn").style.display = "none";
        document.getElementById("submitBtn").style.display = "inline";
    } else {
        document.getElementById("nextBtn").style.display = "inline";
        document.getElementById("submitBtn").style.display = "none";
    }
    fixStepIndicator(n);
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        document.getElementById("nextprevious").style.display = "none";
        document.getElementById("all-steps").style.display = "none";
        document.getElementById("register").style.display = "none";
        document.getElementById("text-message").style.display = "block";
    }
    showTab(currentTab);
}

function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

function validateForm() {
    var x, valid = true;
    x = document.getElementsByClassName("tab");

    // First Tab inputs
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var dob = document.getElementById("dob").value;
    var admission_in = document.getElementById("admission_in").value;

    // Second Tab inputs
    var bn_name = document.getElementById("bn_name").value;
    var contact = document.getElementById("contact").value;
    var marital_status = document.getElementById("marital_status").value;
    var gender = document.getElementById("gender").value;
    var blood_group = document.getElementById("blood_group").value;

    if (admission_in == "") {
        printError("semseterErr", "Please select a semester");
    } else {
        printError("semseterErr", "");
        valid = true;
    }

    if (name == "") {
        printError("nameErr", "Please enter a name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(name) === false) {
            printError("nameErr", "Please enter a valid name");
            valid = false;
        } else {
            printError("nameErr", "");
            valid = true;
        }
    }

    if (email == "") {
        printError("emailErr", "Please enter email address");
    } else {
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
            valid = false;
        } else {
            printError("emailErr", "");
            valid = true;
        }
    }

    if (dob == "") {
        printError("dobErr", "Please enter Birthday date");
        valid = false;
    } else {
        printError("dobErr", "");
        valid = true;
    }


    // if (bn_name == "") {
    //     printError("bn_nameErr", "Please enter a name");
    // } else {
    //     var regex = /^[a-zA-Z\s]+$/;
    //     if (regex.test(bn_name) === false) {
    //         printError("bn_nameErr", "Please enter a valid name");
    //         valid = false;
    //     } else {
    //         printError("bn_nameErr", "");
    //         valid = true;
    //     }
    // }

    // if (contact == "") {
    //     printError("contactErr", "Please enter contact no");
    // } else {
    //     var regex = /^(\+88)?-?01[3-9]\d{8}/;
    //     if (regex.test(contact) === false) {
    //         printError("contactErr", "Please enter a valid contact no");
    //         valid = false;
    //     } else {
    //         printError("contactErr", "");
    //         valid = true;
    //     }
    // }

    // if (marital_status == "") {
    //     printError("marital_statusErr", "Please select Marital Status");
    //     valid = false;
    // } else {
    //     printError("marital_statusErr", "");
    //     valid = true;
    // }

    // if (gender == "") {
    //     printError("genderErr", "Please select Gender");
    //     valid = false;
    // } else {
    //     printError("genderErr", "");
    //     valid = true;
    // }

    // if (blood_group == "") {
    //     printError("blood_groupErr", "Please select Blood Group");
    //     valid = false;
    // } else {
    //     printError("blood_groupErr", "");
    //     valid = true;
    // }

    if (valid) {
        document.getElementsByClassName("step")[currentTab].className +=
            " finish";
        // valid = false;
    }

    console.log(valid);

    return valid;

}
function fixStepIndicator(n) {
    var i,
        x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    x[n].className += " active";
}
