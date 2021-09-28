function myFunction() {
    var r = confirm("Are you sure you want to delete the data.");
    if (r == true) {
        document.getElementById("delete").name = "delete";
    } else {
        document.getElementById("delete").name = "not delete";
    }
}