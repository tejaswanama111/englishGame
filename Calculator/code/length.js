function Kilometer(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputKilometer").innerHTML=num;
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputMeter").innerHTML=(num * 1000);
    document.getElementById("outputCentimeter").innerHTML=(num * 100000);
    document.getElementById("outputMillimeter").innerHTML=(num * 1e+6);
    document.getElementById("outputMicrometer").innerHTML=(num * 1e+9);
    document.getElementById("outputNanometer").innerHTML=(num * 1e+12);
    document.getElementById("outputMile").innerHTML=(num / 1.609);
    document.getElementById("outputYard").innerHTML=(num * 1093.61);
    document.getElementById("outputFoot").innerHTML=(num * 3280.84);
    document.getElementById("outputInch").innerHTML=(num / 39370);
    document.getElementById("outputNauticalMile").innerHTML=(num / 1.852);
}

function Meter(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMeter").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num / 1000);
    document.getElementById("outputCentimeter").innerHTML=(num * 100);
    document.getElementById("outputMillimeter").innerHTML=(num * 1000);
    document.getElementById("outputMicrometer").innerHTML=(num * 1e+6);
    document.getElementById("outputNanometer").innerHTML=(num * 1e+9);
    document.getElementById("outputMile").innerHTML=(num / 1609);
    document.getElementById("outputYard").innerHTML=(num * 1.09361);
    document.getElementById("outputFoot").innerHTML=(num * 3.28084);
    document.getElementById("outputInch").innerHTML=(num * 39.3701);
    document.getElementById("outputNauticalMile").innerHTML=(num / 1852);
}

function Centimeter(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputCentimeter").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num / 100000);
    document.getElementById("outputMeter").innerHTML=(num / 100);
    document.getElementById("outputMillimeter").innerHTML=(num * 10);
    document.getElementById("outputMicrometer").innerHTML=(num * 10000);
    document.getElementById("outputNanometer").innerHTML=(num * 1e+7);
    document.getElementById("outputMile").innerHTML=(num / 160934);
    document.getElementById("outputYard").innerHTML=(num / 91.44);
    document.getElementById("outputFoot").innerHTML=(num / 30.48);
    document.getElementById("outputInch").innerHTML=(num / 2.54);
    document.getElementById("outputNauticalMile").innerHTML=(num / 185200);
}

function Millimeter(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMillimeter").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num / 1e-6);
    document.getElementById("outputMeter").innerHTML=(num / 1000);
    document.getElementById("outputCentimeter").innerHTML=(num / 10);
    document.getElementById("outputMicrometer").innerHTML=(num * 1000);
    document.getElementById("outputNanometer").innerHTML=(num * 1e+6);
    document.getElementById("outputMile").innerHTML=(num / 1.609e+6);
    document.getElementById("outputYard").innerHTML=(num / 914);
    document.getElementById("outputFoot").innerHTML=(num / 305);
    document.getElementById("outputInch").innerHTML=(num / 25.4);
    document.getElementById("outputNauticalMile").innerHTML=(num / 1.852e+6);
}

function Micrometer(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMicrometer").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num / 1e+9);
    document.getElementById("outputMeter").innerHTML=(num / 1e+6);
    document.getElementById("outputCentimeter").innerHTML=(num / 10000);
    document.getElementById("outputMillimeter").innerHTML=(num * 1000);
    document.getElementById("outputNanometer").innerHTML=(num / 1000);
    document.getElementById("outputMile").innerHTML=(num / 1.609e+9);
    document.getElementById("outputYard").innerHTML=(num / 914400);
    document.getElementById("outputFoot").innerHTML=(num / 304800);
    document.getElementById("outputInch").innerHTML=(num / 25400);
    document.getElementById("outputNauticalMile").innerHTML=(num / 1.852e+9);
}

function Nanometer(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputNanometer").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num / 1e+12);
    document.getElementById("outputMeter").innerHTML=(num / 1e+9);
    document.getElementById("outputCentimeter").innerHTML=(num / 10000000);
    document.getElementById("outputMillimeter").innerHTML=(num / 1e+6);
    document.getElementById("outputMicrometer").innerHTML=(num / 1000);
    document.getElementById("outputMile").innerHTML=(num / 1.609e+12);
    document.getElementById("outputYard").innerHTML=(num / 9.144e+8);
    document.getElementById("outputFoot").innerHTML=(num / 3.048e+8);
    document.getElementById("outputInch").innerHTML=(num / 2.54e+7);
    document.getElementById("outputNauticalMile").innerHTML=(num / 1.852e+12);
}

function Mile(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputMile").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num * 1.609);
    document.getElementById("outputMeter").innerHTML=(num * 1609.34);
    document.getElementById("outputCentimeter").innerHTML=(num * 160934);
    document.getElementById("outputMillimeter").innerHTML=(num * 1.609e+6);
    document.getElementById("outputMicrometer").innerHTML=(num * 1.609e+9);
    document.getElementById("outputNanometer").innerHTML=(num * 1.609e+12);
    document.getElementById("outputYard").innerHTML=(num * 1760);
    document.getElementById("outputFoot").innerHTML=(num * 5280);
    document.getElementById("outputInch").innerHTML=(num * 63360);
    document.getElementById("outputNauticalMile").innerHTML=(num / 1.151);
}

function Yard(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputYard").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num / 1094);
    document.getElementById("outputMeter").innerHTML=(num / 1.094);
    document.getElementById("outputCentimeter").innerHTML=(num * 91.44);
    document.getElementById("outputMillimeter").innerHTML=(num * 914.4);
    document.getElementById("outputMicrometer").innerHTML=(num * 914400);
    document.getElementById("outputNanometer").innerHTML=(num * 9.144e+8);
    document.getElementById("outputMile").innerHTML=(num * 1760);
    document.getElementById("outputFoot").innerHTML=(num * 3);
    document.getElementById("outputInch").innerHTML=(num * 36);
    document.getElementById("outputNauticalMile").innerHTML=(num / 2025);
}

function Foot(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputFoot").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputInch").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num / 3281);
    document.getElementById("outputMeter").innerHTML=(num / 3.281);
    document.getElementById("outputCentimeter").innerHTML=(num * 30.48);
    document.getElementById("outputMillimeter").innerHTML=(num * 304.8);
    document.getElementById("outputMicrometer").innerHTML=(num * 304800);
    document.getElementById("outputNanometer").innerHTML=(num * 3.048e+8);
    document.getElementById("outputMile").innerHTML=(num / 5280);
    document.getElementById("outputYard").innerHTML=(num / 3);
    document.getElementById("outputInch").innerHTML=(num * 12);
    document.getElementById("outputNauticalMile").innerHTML=(num / 6076);
}

function Inch(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputFoot").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputNauticalMile").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num / 39370);
    document.getElementById("outputMeter").innerHTML=(num / 9.37);
    document.getElementById("outputCentimeter").innerHTML=(num * 2.54);
    document.getElementById("outputMillimeter").innerHTML=(num * 25.4);
    document.getElementById("outputMicrometer").innerHTML=(num * 25400);
    document.getElementById("outputNanometer").innerHTML=(num * 2.54e+7);
    document.getElementById("outputMile").innerHTML=(num * 63360);
    document.getElementById("outputYard").innerHTML=(num / 36);
    document.getElementById("outputFoot").innerHTML=(num / 12);
    document.getElementById("outputNauticalMile").innerHTML=(num / 72913);
}

function NauticalMile(num){
    num = parseFloat(num);
    //Management
    document.getElementById("outputNauticalMile").innerHTML=num;
    document.getElementById("inputKilometer").value="";
    document.getElementById("inputMeter").value="";
    document.getElementById("inputCentimeter").value="";
    document.getElementById("inputMillimeter").value="";
    document.getElementById("inputMicrometer").value="";
    document.getElementById("inputNanometer").value="";
    document.getElementById("inputMile").value="";
    document.getElementById("inputYard").value="";
    document.getElementById("inputFoot").value="";
    document.getElementById("inputInch").value="";

    //Formulas
    document.getElementById("outputKilometer").innerHTML=(num * 1.852);
    document.getElementById("outputMeter").innerHTML=(num * 1852);
    document.getElementById("outputCentimeter").innerHTML=(num * 185200);
    document.getElementById("outputMillimeter").innerHTML=(num * 1.852e+6);
    document.getElementById("outputMicrometer").innerHTML=(num * 1.852e+9);
    document.getElementById("outputNanometer").innerHTML=(num * 1.852e+12);
    document.getElementById("outputMile").innerHTML=(num * 1.151);
    document.getElementById("outputYard").innerHTML=(num * 2025.37);
    document.getElementById("outputFoot").innerHTML=(num * 6076);
    document.getElementById("outputInch").innerHTML=(num * 72913);
}
