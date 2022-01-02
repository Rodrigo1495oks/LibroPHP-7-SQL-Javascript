haystack=new Array()
haystack[17]='Needle'

for (let i = 0; i < 20; i++) {
    // const element = array[i];
    if (haystack[i]="Needle") {
        document.write("<br>- Found at location "+i)
        break
    }else{
        document.write(i+", ")
    }

    
}

