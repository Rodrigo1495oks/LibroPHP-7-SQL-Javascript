onerror=errorHandler
document.writ("Welcome to this page") //delibearte error

function errorHandler(message, url,line) {
    Out="Sorry, an error was encoutered.\n\n"
    Out+="Error: "+message+"\n"
    Out+="URL: "+url+"\n"
    Out+="Line: "+line+"\n\n"
    Out+="Click to continue.\n\n"
    alert(Out)

    return true
}

