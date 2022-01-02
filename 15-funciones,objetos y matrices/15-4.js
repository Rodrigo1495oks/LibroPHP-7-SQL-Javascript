words=fixnames("the","DALLAS","CowBoys")

for (let index = 0; index < words.length; index++) {
    const element = words[index];
    document.write(element+"<br>")
    
}

function fixnames() {
    var s=[]
    for (let j = 0; j < fixnames.arguments.length; j++) {
        const element = fixnames.arguments[j].charAt(0).toUpperCase()+fixnames.arguments[j].substr(1).toLowerCase()
        s[j]=element
        
    }
    return s
}

