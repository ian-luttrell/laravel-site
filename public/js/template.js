window.addEventListener('load', function() {
		let anchor = null;
		switch (window.location.pathname) {
			case '/':
				anchor = document.getElementById('home-link');
				break;
			case '/create-account':
				anchor = document.getElementById('create-account-link');
				break;
			case '/login':
				anchor = document.getElementById('login-link');
				break;
			case '/exercises':
				anchor = document.getElementById('exercises-link');
		}
		anchor.style.backgroundColor = "green";
	}
);
