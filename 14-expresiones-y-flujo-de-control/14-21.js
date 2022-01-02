haystack = []
haystack[4] = "Needle"
haystack[11] = "Needle"
haystack[11] = "Needle"


for (let i = 0; i < 20; i++) {
    // const element = array[i];
    if (haystack[i] == "Needle") {
        document.write("<br>- Found at location " + i + "<br>")
        continue

    }

    document.write(i+", ")
}

