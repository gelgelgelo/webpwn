const URLParameters = new URLSearchParams(window.location.search);
if (URLParameters.get('error') === 'invalid') {
	const errElem = document.getElementById('err');
	errElem.style.display = 'block';
}

