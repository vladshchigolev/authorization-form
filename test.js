// console.dir(window)
window.onload = function () {
    let signUpButton = document.getElementById("sign-up-button")

    const inpFullName = document.getElementById("full-name")
    const inpLogin = document.getElementById("login")
    const inpEmail = document.getElementById("e-mail")
    const inpPassword = document.getElementById("password")
    const inpPasswordVerification = document.getElementById("password-verification")

    signUpButton.onclick = function () {
        let inpData = "full-name=" + inpFullName.value + "&" + "login=" + inpLogin.value + "&" + "e-mail=" + inpEmail.value + "&" + "password=" + inpPassword.value + "&" + "password-verification=" + inpPasswordVerification.value
        ajaxPost(inpData)
    }
}

// ajaxGet()

function ajaxPost(params) {
    let request = new XMLHttpRequest()

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {

            if (request.responseText == "Регистрация прошла успешно") {

                let formElement = document.getElementById("form")

                let newElement = document.createElement("div")
                newElement.setAttribute("id", "successful-action")
                // console.log(request.responseText)

                // let responseText = document.getElementById("for-response")
                newElement.innerText = request.responseText
                // console.log(newElement.innerText)
                formElement.appendChild(newElement)

                setTimeout(() => document.location.href = "index.php", 3000);
                // document.location.href = "index.php";

            } else {
                let formElement = document.getElementById("form")

                let newElement = document.createElement("div")
                newElement.setAttribute("id", "message-from-server")
                // console.log(request.responseText)

                // let responseText = document.getElementById("for-response")
                newElement.innerText = request.responseText
                // console.log(newElement.innerText)
                formElement.appendChild(newElement)
                setTimeout(() => newElement.remove(), 3000);
            }
        }
    }

    request.open("POST", "signup.php")
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
    request.send(params)

}

// console.dir(XMLHttpRequest)