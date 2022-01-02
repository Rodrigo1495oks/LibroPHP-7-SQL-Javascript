document.write(fixNames("the", "DALLAS", "CowBoys"))


function fixNames() {
    let s = ""

    for (let j = 0; j < fixNames.arguments.length; j++) {
        // const element = array[j];
        s += fixNames.arguments[j].charAt(0).toUpperCase() + fixNames.arguments[j].substr(1).toLowerCase() + " "
    }
    return s.substr(0, s.length - 1)
}