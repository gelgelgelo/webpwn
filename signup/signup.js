const URLParameters = new URLSearchParams(window.location.search);
const signupErrMessage = document.getElementById('err');

if (URLParameters.get('error') === 'empty') {
        const errElem = document.getElementById('err');
        err.style.display = 'block';
}

else if (URLParameters.get('error') === 'unknown') {
        const errElem = document.getElementById('err');
        err.style.display = 'block';
        signupErrMessage.textContent = "Signing up error occured";
}

else if (URLParameters.get('error') === 'duplicate') {
        const errElem = document.getElementById('err');
        err.style.display = 'block';
        signupErrMessage.textContent = "Username is already taken";
}

