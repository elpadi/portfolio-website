window.addEventListener('load', function() {

	(function seconds(node) {
		if (!('dataset' in node)) return;
		var onTick = function() {
			node.innerHTML = Math.round((Date.now() / 1000 - parseInt(node.dataset.start, 10))).toLocaleString();
		};
		setInterval(onTick, 1000);
	})(document.getElementById('am_i_still_alive'));
	
});
