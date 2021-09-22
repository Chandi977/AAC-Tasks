function analyse() {
    var hin, eng, math, sci, sst, total, avg;
    hin = document.getElementById("hin").value;
    eng = document.getElementById("eng").value;
    math = document.getElementById("math").value;
    sci = document.getElementById("sci").value;
    sst = document.getElementById("sst").value;
    if (document.getElementById("hin").value !== '' && document.getElementById("eng").value !== '' && document.getElementById("math").value !== '' && document.getElementById("sci").value !== '' && document.getElementById("sst").value !== '') {
        if (document.getElementById("hin").value <= 100 && document.getElementById("eng").value <= 100 && document.getElementById("math").value <= 100 && document.getElementById("sci").value <= 100 && document.getElementById("sst").value <= 100) {
            total = parseInt(hin) + parseInt(eng) + parseInt(math) + parseInt(sci) + parseInt(sst);
            avg = total / 5;
            document.getElementById("total").innerHTML = total;
            document.getElementById("avg").innerHTML = avg + "%";
            if (document.getElementById("hin").value < 30 || document.getElementById("eng").value < 30 || document.getElementById("math").value < 30 || document.getElementById("sci").value < 30 || document.getElementById("sst").value < 30) {
                document.getElementById("result").innerHTML = "Fail";

            }
            else {
                if (avg < 30) {
                    document.getElementById("result").innerHTML = "Fail";
                    alert("Thoda padh liya kro yrrrrrrrrr");
                }
                else if (avg >= 30 && avg < 45) {
                    document.getElementById("result").innerHTML = "C";
                }
                else if (avg >= 45 && avg < 60) {
                    document.getElementById("result").innerHTML = "B";
                }
                else if (avg >= 60 && avg < 75) {
                    document.getElementById("result").innerHTML = "A";
                }
                else if (avg >= 75 && avg <= 100) {
                    document.getElementById("result").innerHTML = "A+";
                }
            }
        }
        else {
            alert("Enter marks smaller then 100.");
        }
    }
    else {
        alert("Enter marks or you diin't get the desire result.");
    }
}
function clr() {
    document.getElementById("hin").value = "";
    document.getElementById("eng").value = "";
    document.getElementById("math").value = "";
    document.getElementById("sci").value = "";
    document.getElementById("sst").value = "";
    document.getElementById("total").value = "";
    document.getElementById("avg").value = "";
    document.getElementById("result").value = "";
    document.getElementById("name").value = "";
}

