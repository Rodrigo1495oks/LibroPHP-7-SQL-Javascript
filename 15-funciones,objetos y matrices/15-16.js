// alphabetical sort

sports=["Football","Hockey","Handball"]

sports.sort()

// reverse alphabetical sort

sports.sort().reverse()
document.write(sports + "<br>")

// ascending numerix sort

numbers=[4,8,48,12,110]

numbers.sort(function (a,b) {
    return a-b
})

document.write(numbers + "<br>")
