function setString(inputString) {
	let stringFilter = [...new Set(inputString)].join("");
    document.write(stringFilter)
}
setString("alagcgcdodol")