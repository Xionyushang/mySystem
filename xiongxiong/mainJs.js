function windowOpen(url) {
	event.preventDefault(); // 防止連結跳轉
	// 使用 window.open 在新窗口中打開
	window.open(url, "_blank", "");
}

function openKind(openKind, event, url) {
	if (openKind === "block") {
		windowOpen(url); // 如果是 windowopen，使用 window.open
	} else if (openKind === "self") {
		console.log("Self mode, no action needed.");
	}
}
