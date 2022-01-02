function User(forename,username,password) {
    this.forename=forename
    this.username=username
    this.password=password

}
User.prototype.showUser=function showUser() {
    document.write("Forename: "+this.forename + "<br>")
    document.write("username: "+this.username + "<br>")
    document.write("password: "+this.password + "<br>")

}