// let submit = document.getElementById("submit");
// submit.addEventListener("click", validate);

form.onsubmit = validate();

function clearErrors()
{
    let errors = document.getElementsByClassName("text-danger");

    for(let i=0; i<errors.length; i++)
    {
        errors[i].classList.add("d-none");
    }
}
// if function return = valid submit via php else nan
function validate() {
    //clear out errors
    clearErrors();
    let valid = true;
    //validate first name
    let email = document.getElementById("email").value;
    let emailRegex = /^(?=.*@)(?=.*.)/;
    let fName = document.getElementById("fname").value;
    if(fName === "")
    {
        console.log("empty");
        let errorFname = document.getElementById("fName-alert");
        errorFname.classList.remove("d-none");
        valid = false;
    }

    //validate last name
    let lname = document.getElementById("lname").value;
    console.log(lname);
    if (lname === "") {
        let lNameAlert = document.getElementById("lName-alert");
        lNameAlert.classList.remove("d-none");
        valid = false;
    }

    //define selection + validate choice (select)
    let optionChoice = document.getElementById("selection").value;
    console.log(optionChoice)
    console.log(document.getElementById("selection").value);
    if (optionChoice === "Choose One") {
        let optionAlert = document.getElementById("selection-alert");
        optionAlert.classList.remove("d-none");
        valid = false;
    } else if (optionChoice != "Choose One") {
        let optionAlert = document.getElementById("selection-alert");
        optionAlert.classList.add("d-none");
        valid = true;
    }

    // checkbox is checked + email validation
    let checkbox = document.getElementById("mail");
    let emailAlert = document.getElementById("email-alert3");

    // separate regex
    if (checkbox.checked === false && email.match(emailRegex)) {
        console.log("Getting Newsletter");
        emailAlert.classList.remove("d-none");
        valid = false;
    }

    if(email === "")
    {
        let noEmail = document.getElementById("email-alert");
        noEmail.classList.remove("d-none");
        valid = false;
    }
    else if (!email.match(emailRegex))
    {
        let invalidEmail = document.getElementById("email-alert2");
        invalidEmail.classList.remove("d-none");
        valid = false;
    }
return valid;
}


