

    document.getElementById("form1").onsubmit = function (e) {
    var x = document.getElementById("date").value;

    var dateObj = new Date();
    var month = dateObj.getUTCMonth() + 1; //months from 1-12.... +1 porque empieza desde 0
    var day = dateObj.getUTCDate();
    var year = dateObj.getUTCFullYear();

    newdate = year + "/" + month + "/" + day;  // AÑO MES DIA

    thisYear = parseInt(newdate.substring(0, 4));
    bornYear = parseInt(x.substring(0, 4));

    thisMonth = parseInt(newdate.substring(5, 7));
    bornMonth = parseInt(x.substring(5, 7));

    thisDay = parseInt(newdate.substring(8, 10));
    bornDay = parseInt(x.substring(8, 10));

    yearDiff = thisYear - bornYear;
    monthDiff = thisMonth - bornMonth;
    dayDiff = thisDay - bornDay;


    if (yearDiff >= 16 && monthDiff >= 0 && dayDiff >= 0) {

        window.alert("Tienes más de 16 años");

    } else {

        e.preventDefault();
        window.alert("No tienes más de 16 años");

    }


}
function laalal(){

}