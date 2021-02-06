function Nanosecond(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputNanosecond").innerHTML=num;
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputMicrosecond").innerHTML=(num / 1000);
    document.getElementById("outputMillisecond").innerHTML=(num / 1000000);
    document.getElementById("outputSecond").innerHTML=(num / 1000000000);
    document.getElementById("outputMinute").innerHTML=(num / 6e+10);
    document.getElementById("outputHour").innerHTML=(num / 3.6e+12);
    document.getElementById("outputDay").innerHTML=(num / 8.64e+13);
    document.getElementById("outputWeek").innerHTML=(num / 6.048e+14);
    document.getElementById("outputMonth").innerHTML=(num / 2.628e+15);
    document.getElementById("outputYear").innerHTML=(num / 3.154e+16);
    document.getElementById("outputDecade").innerHTML=(num / 3.154e+17);
    document.getElementById("outputCentury").innerHTML=(num / 3.154e+18);
}

function Microsecond(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMicrosecond").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 1000);
    document.getElementById("outputMillisecond").innerHTML=(num / 1000);
    document.getElementById("outputSecond").innerHTML=(num / 1000000);
    document.getElementById("outputMinute").innerHTML=(num / 6e+7);
    document.getElementById("outputHour").innerHTML=(num / 3.6e+9);
    document.getElementById("outputDay").innerHTML=(num / 8.64e+10);
    document.getElementById("outputWeek").innerHTML=(num / 6.048e+11);
    document.getElementById("outputMonth").innerHTML=(num / 2.628e+12);
    document.getElementById("outputYear").innerHTML=(num / 3.154e+13);
    document.getElementById("outputDecade").innerHTML=(num / 3.154e+14);
    document.getElementById("outputCentury").innerHTML=(num / 3.154e+15);
}

function Millisecond(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMillisecond").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 1000000);
    document.getElementById("outputMicrosecond").innerHTML=(num * 1000);
    document.getElementById("outputSecond").innerHTML=(num / 1000);
    document.getElementById("outputMinute").innerHTML=(num / 60000);
    document.getElementById("outputHour").innerHTML=(num / 3.6e+6);
    document.getElementById("outputDay").innerHTML=(num / 8.64e+7);
    document.getElementById("outputWeek").innerHTML=(num / 6.048e+8);
    document.getElementById("outputMonth").innerHTML=(num / 2.628e+9);
    document.getElementById("outputYear").innerHTML=(num / 3.154e+10);
    document.getElementById("outputDecade").innerHTML=(num / 3.154e+11);
    document.getElementById("outputCentury").innerHTML=(num / 3.154e+12);
}

function Second(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputSecond").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 1000000000);
    document.getElementById("outputMicrosecond").innerHTML=(num * 1000000);
    document.getElementById("outputMillisecond").innerHTML=(num * 1000);
    document.getElementById("outputMinute").innerHTML=(num / 60);
    document.getElementById("outputHour").innerHTML=(num / 3600);
    document.getElementById("outputDay").innerHTML=(num / 86400);
    document.getElementById("outputWeek").innerHTML=(num / 604800);
    document.getElementById("outputMonth").innerHTML=(num / 2.628e+6);
    document.getElementById("outputYear").innerHTML=(num / 3.154e+7);
    document.getElementById("outputDecade").innerHTML=(num / 3.154e+8);
    document.getElementById("outputCentury").innerHTML=(num / 3.154e+9);
}

function Minute(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMinute").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 6e+10);
    document.getElementById("outputMicrosecond").innerHTML=(num * 6e+7);
    document.getElementById("outputMillisecond").innerHTML=(num * 60000);
    document.getElementById("outputSecond").innerHTML=(num * 60);
    document.getElementById("outputHour").innerHTML=(num / 60);
    document.getElementById("outputDay").innerHTML=(num / 1440);
    document.getElementById("outputWeek").innerHTML=(num / 10080);
    document.getElementById("outputMonth").innerHTML=(num / 43800);
    document.getElementById("outputYear").innerHTML=(num / 525600);
    document.getElementById("outputDecade").innerHTML=(num / 5.256e+6);
    document.getElementById("outputCentury").innerHTML=(num / 5.256e+7);
}

function Hour(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputHour").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 3.6e+12);
    document.getElementById("outputMicrosecond").innerHTML=(num * 3.6e+9);
    document.getElementById("outputMillisecond").innerHTML=(num * 3.6e+6);
    document.getElementById("outputSecond").innerHTML=(num * 3600);
    document.getElementById("outputMinute").innerHTML=(num * 60);
    document.getElementById("outputDay").innerHTML=(num / 24);
    document.getElementById("outputWeek").innerHTML=(num / 168);
    document.getElementById("outputMonth").innerHTML=(num / 730);
    document.getElementById("outputYear").innerHTML=(num / 8760);
    document.getElementById("outputDecade").innerHTML=(num / 87600);
    document.getElementById("outputCentury").innerHTML=(num / 876000);
}

function Day(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputDay").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 8.64e+13);
    document.getElementById("outputMicrosecond").innerHTML=(num * 8.64e+10);
    document.getElementById("outputMillisecond").innerHTML=(num * 8.64e+7);
    document.getElementById("outputSecond").innerHTML=(num * 86400);
    document.getElementById("outputMinute").innerHTML=(num * 1440);
    document.getElementById("outputHour").innerHTML=(num * 24);
    document.getElementById("outputWeek").innerHTML=(num / 7);
    document.getElementById("outputMonth").innerHTML=(num / 30.417);
    document.getElementById("outputYear").innerHTML=(num / 365);
    document.getElementById("outputDecade").innerHTML=(num / 3650);
    document.getElementById("outputCentury").innerHTML=(num / 36500);
}

function Week(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputWeek").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 6.048e+14);
    document.getElementById("outputMicrosecond").innerHTML=(num * 6.048e+11);
    document.getElementById("outputMillisecond").innerHTML=(num * 6.048e+8);
    document.getElementById("outputSecond").innerHTML=(num * 604800);
    document.getElementById("outputMinute").innerHTML=(num * 10080);
    document.getElementById("outputHour").innerHTML=(num * 168);
    document.getElementById("outputDay").innerHTML=(num * 7);
    document.getElementById("outputMonth").innerHTML=(num / 4.345);
    document.getElementById("outputYear").innerHTML=(num / 52.143);
    document.getElementById("outputDecade").innerHTML=(num / 521);
    document.getElementById("outputCentury").innerHTML=(num / 5214);
}

function Month(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMonth").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 2.628e+15);
    document.getElementById("outputMicrosecond").innerHTML=(num * 2.628e+12);
    document.getElementById("outputMillisecond").innerHTML=(num * 2.628e+9);
    document.getElementById("outputSecond").innerHTML=(num * 2.628e+6);
    document.getElementById("outputMinute").innerHTML=(num * 43800);
    document.getElementById("outputHour").innerHTML=(num * 730);
    document.getElementById("outputDay").innerHTML=(num * 30.4167);
    document.getElementById("outputWeek").innerHTML=(num * 4.345);
    document.getElementById("outputYear").innerHTML=(num / 12);
    document.getElementById("outputDecade").innerHTML=(num / 120);
    document.getElementById("outputCentury").innerHTML=(num / 1200);
}

function Year(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMonth").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputDecade").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 3.154e+16);
    document.getElementById("outputMicrosecond").innerHTML=(num * 3.154e+13);
    document.getElementById("outputMillisecond").innerHTML=(num * 3.154e+10);
    document.getElementById("outputSecond").innerHTML=(num * 3.154e+7);
    document.getElementById("outputMinute").innerHTML=(num * 525600);
    document.getElementById("outputHour").innerHTML=(num * 8760);
    document.getElementById("outputDay").innerHTML=(num * 365);
    document.getElementById("outputWeek").innerHTML=(num * 52.1429);
    document.getElementById("outputMonth").innerHTML=(num * 12);
    document.getElementById("outputDecade").innerHTML=(num / 10);
    document.getElementById("outputCentury").innerHTML=(num / 100);
}

function Decade(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputDecade").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputCentury").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 3.154e+17);
    document.getElementById("outputMicrosecond").innerHTML=(num * 3.154e+14);
    document.getElementById("outputMillisecond").innerHTML=(num * 3.154e+11);
    document.getElementById("outputSecond").innerHTML=(num * 3.154e+8);
    document.getElementById("outputMinute").innerHTML=(num * 5.256e+6);
    document.getElementById("outputHour").innerHTML=(num * 87600);
    document.getElementById("outputDay").innerHTML=(num * 3650);
    document.getElementById("outputWeek").innerHTML=(num * 521);
    document.getElementById("outputMonth").innerHTML=(num * 120);
    document.getElementById("outputYear").innerHTML=(num * 10);
    document.getElementById("outputCentury").innerHTML=(num / 10);
}

function Century(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputCentury").innerHTML=num;
    document.getElementById("inputNanosecond").value="";
    document.getElementById("inputMicrosecond").value="";
    document.getElementById("inputMillisecond").value="";
    document.getElementById("inputSecond").value="";
    document.getElementById("inputMinute").value="";
    document.getElementById("inputHour").value="";
    document.getElementById("inputDay").value="";
    document.getElementById("inputWeek").value="";
    document.getElementById("inputMonth").value="";
    document.getElementById("inputYear").value="";
    document.getElementById("inputDecade").value="";

    //Formulas
    document.getElementById("outputNanosecond").innerHTML=(num * 3.154e+18);
    document.getElementById("outputMicrosecond").innerHTML=(num * 3.154e+15);
    document.getElementById("outputMillisecond").innerHTML=(num * 3.154e+12);
    document.getElementById("outputSecond").innerHTML=(num * 3.154e+9);
    document.getElementById("outputMinute").innerHTML=(num * 5.256e+7);
    document.getElementById("outputHour").innerHTML=(num * 876000);
    document.getElementById("outputDay").innerHTML=(num * 36500);
    document.getElementById("outputWeek").innerHTML=(num * 5214.29);
    document.getElementById("outputMonth").innerHTML=(num * 1200);
    document.getElementById("outputYear").innerHTML=(num * 100);
    document.getElementById("outputDecade").innerHTML=(num * 10);
}