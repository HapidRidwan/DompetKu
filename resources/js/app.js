document.addEventListener('DOMContentLoaded', () => {
	const markPageAsLeaving = () => {
		if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
			document.body.classList.add('page-leaving');
		}
	};

	document.addEventListener('click', (event) => {
		const link = event.target.closest('a');

		if (!link || link.target === '_blank' || link.hasAttribute('download')) {
			return;
		}

		const destination = new URL(link.href, window.location.href);

		if (destination.origin === window.location.origin && destination.href !== window.location.href) {
			markPageAsLeaving();
		}
	});

	document.addEventListener('submit', (event) => {
		if (event.defaultPrevented) {
			return;
		}

		markPageAsLeaving();
	});

	window.addEventListener('pageshow', () => {
		document.body.classList.remove('page-leaving');
	});
});
