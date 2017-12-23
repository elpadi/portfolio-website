window.addEventListener('load', function() {

	if (('ontouchstart' in window)) {
		document.documentElement.className = 'handheld ' + (screen.availWidth > 1024 ? 'desktop' : (screen.availWidth > 767 ? 'tablet' : 'phone'));
	}

	(function seconds(node) {
		if (!('dataset' in node)) return;
		var onTick = function() {
			node.innerHTML = Math.round((Date.now() / 1000 - parseInt(node.dataset.start, 10))).toLocaleString();
		};
		setInterval(onTick, 1000);
	})(document.getElementById('am_i_still_alive'));
	
});
