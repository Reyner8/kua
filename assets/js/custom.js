let current = "tab-1";

document.getElementById("next").addEventListener("click", function () {
	if (current == "tab-1") {
		document.getElementById("tab-1").style.display = "none";
		document.getElementById("tab-2").style.display = "block";
		current = "tab-2";
	} else if (current == "tab-2") {
		document.getElementById("tab-2").style.display = "none";
		document.getElementById("tab-3").style.display = "block";
		current = "tab-3";
	} else if (current == "tab-3") {
		document.getElementById("tab-3").style.display = "none";
		document.getElementById("tab-4").style.display = "block";
		current = "tab-4";
		document.getElementById("next").style.display = "none";
		document.getElementById("submit").style.display = "inline-block";
	}
});

document.getElementById("prev").addEventListener("click", function () {
	if (current == "tab-2") {
		document.getElementById("tab-2").style.display = "none";
		document.getElementById("tab-1").style.display = "block";
		current = "tab-1";
	} else if (current == "tab-3") {
		document.getElementById("tab-3").style.display = "none";
		document.getElementById("tab-2").style.display = "block";
		current = "tab-2";
	} else if (current == "tab-4") {
		document.getElementById("tab-4").style.display = "none";
		document.getElementById("tab-3").style.display = "block";
		current = "tab-3";
		document.getElementById("next").style.display = "inline-block";
		document.getElementById("submit").style.display = "none";
	}
});
