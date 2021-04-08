window.onload = function () {
    let signInButton = document.getElementById("sign-in-button")

    const inpLogin = document.getElementById("login")
    const inpPassword = document.getElementById("password")

    signInButton.onclick = function () {
        let inpData = "login=" + inpLogin.value + "&" + "password=" + inpPassword.value
        ajaxPost(inpData, inpLogin)
    }
}

// ajaxGet()

function ajaxPost(params, login) {
    let request = new XMLHttpRequest()

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            console.log(request.responseText)
            if (request.responseText == "0") {

                let formElement = document.getElementById("form")

                let newElement = document.createElement("div")
                newElement.setAttribute("id", "message-from-server")
                // console.log(request.responseText)

                // let responseText = document.getElementById("for-response")
                newElement.innerText = "Введён неправильный логин или пароль"
                // console.log(newElement.innerText)
                formElement.appendChild(newElement)

                setTimeout(() => newElement.remove(), 3000);
                // document.location.href = "index.php";

            } else {
                let signInLoginDiv = document.getElementById("sign-in-login")
                let signInPasswordDiv = document.getElementById("sign-in-password")
                let signInButtonDiv = document.getElementById("button")
                let registrationSuggestionDiv = document.getElementById("registration-suggestion")
                let formElement = document.getElementById("form")
                let newElement = document.createElement("div")
                newElement.setAttribute("id", "successful-action")


                // let responseText = document.getElementById("for-response")
                newElement.innerText = "Авторизация прошла успешно"
                // console.log(newElement.innerText)
                signInLoginDiv.remove()
                signInPasswordDiv.remove()
                signInButtonDiv.remove()
                registrationSuggestionDiv.remove()
                formElement.appendChild(newElement)
                setTimeout(() => newElement.remove(), 5000);
                let userPanel = document.createElement("div")
                userPanel.setAttribute("id", "user-panel")
                userPanel.innerText = login.value + " в системе"
                formElement.appendChild(userPanel)

            }
        }
    }

    request.open("POST", "signing_in.php")
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
    request.send(params)

}

// console.dir(XMLHttpRequest)