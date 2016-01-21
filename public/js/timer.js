
function printDiff(diff,div,date){
    var difference = "";
    if(diff["months"] != 0){
        difference += diff["months"] + " mois " + diff["days"] + " jours ";
    } else {
        if(diff["days"] != 0){
            difference += diff["days"] + " jours ";
        }
    }
    difference += diff["hours"] + " heures " + diff["minutes"] + " minutes " + diff["seconds"] + " secondes ";
    div.html("Les journées portes ouvertes sont dans : " + difference);
    if(diff["months"] == 0 && diff["days"] < 7){
        div.html("Les Portes ouvertes sont dans moins d'une semaine ! " + difference);
    }
    if(diff["months"] == 0 && diff["days"] < 1){
        if(moment().format('D') == date.format('D') && moment().format('M') == date.format('M')){
            div.html("Les Portes ouvertes c'est aujourd'hui ! " + difference);
        } else {
            div.html("Les Portes ouvertes c'est demain ! " + difference);
        }
    }
}

function checkIfItIsFinish(date){
    if(moment().format('X') > (date.format('X') + 12*3600*1000)){
        console.log('i will not show mercy on you');
        return false;
    } else {
        return true;
    }
}

function calcDiff(date,div){

    if(checkIfItIsFinish(date)){
        var diff = {};
        var now = moment();
        diff["months"] = date.diff(now,'months');
        diff["days"] = date.diff(now.add(diff["months"],"months"),'days');
        diff["hours"] = date.diff(now.add(diff["days"],"days"),'hours');
        diff["minutes"] = date.diff(now.add(diff["hours"],"hours"),'minutes');
        diff["seconds"] = date.diff(now.add(diff["minutes"],"minutes"),'seconds');

        printDiff(diff,div,date);

        setTimeout(function(){calcDiff(date,div)},1000);
    }
}

$('document').ready(function(){
    var date = moment.unix(dateJpo);
    var div = $('#timer');

    calcDiff(date,div);

});
