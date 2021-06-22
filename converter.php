<!DOCTYPE html>
    <html>
        <head>
            <title>CONVERSIONS</title>
            <style type="text/css">
                body{
                    background-color:mediumspringgreen;font-family: sans-serif;font-size: 20px;
                }
            </style>
        </head>
        <body>
            <center>
                <h1>Chaithanya C</h1>
                <h1>1CR17CS030</h1>
            <form  method="post">
            <fieldset><legend>Select Your Input Type and Value</legend>
                <input type="number" name="inputNumber" step="any" value="" />
                    <select name="inputFormat">
                        <optgroup name="Choose">
                            <option value="kilometer" id="km">Kilometer</option>
                            <option value="meter" id="m">Meter</option>
                            <option value="cm" id="cm">Centimeter</option>
                            <option value="millimeter" id="mm">Millimeter</option>
                            <option value="micrometer" id="Mm">Micrometer</option>
                            <option value="nanometer" id="nm">Nanometer</option>
                            <option value="mile" id="m">Mile</option>
                            <option value="yard" id="y">Yard</option>
                            <option value="foot" id="ft">Foot</option>
                            <option value="inches" id="in">Inches</option>
                            <option value="nautical_mile" id="ny">Nautical_Mile</option>
                        </optgroup>
                    </select>
            </fieldset>
            <fieldset><legend>Select your Output Type</legend>
                <select name="outputFormat">
                    <optgroup name="Choose">
                        <option value="kilometer" id="km">Kilometer</option>
                        <option value="meter" id="m">Meter</option>
                        <option value="cm" id="cm">Centimeter</option>
                        <option value="millimeter" id="mm">Millimeter</option>
                        <option value="micrometer" id="Mm">Micrometer</option>
                        <option value="nanometer" id="nm">Nanometer</option>
                        <option value="mile" id="m">Mile</option>
                        <option value="yard" id="y">Yard</option>
                        <option value="foot" id="ft">Foot</option>
                        <option value="inches" id="in">Inches</option>
                        <option value="nautical_mile" id="ny">Nautical_Mile</option>
                    </optgroup>
                </select>   
            </fieldset>     
            <input type="submit" name="submitForm" value="Convert!" />
        </form>
        <?php
            $outputNumber=0;
            $inputNumber = (float)$_POST['inputNumber'];
            $inputFormat = $_POST['inputFormat'];
            $outputFormat = $_POST['outputFormat'];
            switch($inputFormat){
                case "meter":
                    switch ($outputFormat){
                    case "meter": $outputNumber = $inputNumber;break;           
                    case "cm": $outputNumber = $inputNumber*100;break;          
                    case "foot": $outputNumber = $inputNumber*3.2808399;break;  
                    case "inches": $outputNumber = $inputNumber*39.3700787;break;
                    case "kilometer":$outputNumber=$inputNumber/1000;break;
                    case "millimeter":$outputNumber = $inputNumber*1000;break;
                    case "micrometer":$outputNumber = $inputNumber*(1e+6);break;
                    case "nanometer":$outputNumber = $inputNumber*(1e+9);break;
                    case "mile":$outputNumber = $inputNumber/1609;break;
                    case "yard":$outputNumber = $inputNumber*1.094;break;
                    case "nautical_mile":$outputNumber = $inputNumber/1852;break;
                }
                break;
    case "cm":
        switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber;break;           
        case "meter": $outputNumber = $inputNumber/100;break;          
        case "foot": $outputNumber = $inputNumber/30.48;break;  
        case "inches": $outputNumber = $inputNumber/2.54;break;
        case "kilometer":$outputNumber=$inputNumber/10000;break;
        case "millimeter":$outputNumber = $inputNumber*10;break;
        case "micrometer":$outputNumber = $inputNumber*10000;break;
        case "nanometer":$outputNumber = $inputNumber*(1e+7);break;
        case "mile":$outputNumber = $inputNumber/160934;break;
        case "yard":$outputNumber = $inputNumber/91.44;break;
        case "nautical_mile":$outputNumber = $inputNumber/185200;break;
        }
    break;
    case "kilometer":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber*100000;break;           
        case "meter": $outputNumber = $inputNumber/1000;break;          
        case "foot": $outputNumber = $inputNumber*3281;break;  
        case "inches": $outputNumber = $inputNumber*39370;break;
        case "kilometer":$outputNumber=$inputNumber;break;
        case "millimeter":$outputNumber = $inputNumber*(1e+6);break;
        case "micrometer":$outputNumber = $inputNumber*(1e+9);break;
        case "nanometer":$outputNumber = $inputNumber*(1e+12);break;
        case "mile":$outputNumber = $inputNumber/1.609;break;
        case "yard":$outputNumber = $inputNumber*1094;break;
        case "nautical_mile":$outputNumber = $inputNumber/1.852;break;
        }
    break;
    case "millimeter":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber/10;break;           
        case "meter": $outputNumber = $inputNumber/1000;break;          
        case "foot": $outputNumber = $inputNumber/305;break;  
        case "inches": $outputNumber = $inputNumber/25.4;break;
        case "kilometer":$outputNumber=$inputNumber/10000;break;
        case "millimeter":$outputNumber = $inputNumber/(1e+6);break;
        case "micrometer":$outputNumber = $inputNumber*1000;break;
        case "nanometer":$outputNumber = $inputNumber*(1e+6);break;
        case "mile":$outputNumber = $inputNumber/(1.609e+6);break;
        case "yard":$outputNumber = $inputNumber/914;break;
        case "nautical_mile":$outputNumber = $inputNumber/(1.852e+6);break;
        }

    break;
    case "micrometer":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber/10000;break;           
        case "meter": $outputNumber = $inputNumber/(1e+6);break;          
        case "foot": $outputNumber = $inputNumber/304800;break;  
        case "inches": $outputNumber = $inputNumber/25400;break;
        case "kilometer":$outputNumber=$inputNumber/(1e+9);break;
        case "millimeter":$outputNumber = $inputNumber/1000;break;
        case "micrometer":$outputNumber = $inputNumber;break;
        case "nanometer":$outputNumber = $inputNumber*1000;break;
        case "mile":$outputNumber = $inputNumber/(1.609e+9);break;
        case "yard":$outputNumber = $inputNumber/914400;break;
        case "nautical_mile":$outputNumber = $inputNumber/(1.852e+9);break;
        }

    break;
    case "nanometer":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber/(1e+7);break;           
        case "meter": $outputNumber = $inputNumber/(1e+9);break;          
        case "foot": $outputNumber = $inputNumber/(3.048e+8);break;  
        case "inches": $outputNumber = $inputNumber/(2.54e+7);break;
        case "kilometer":$outputNumber=$inputNumber/(1e+12);break;
        case "millimeter":$outputNumber = $inputNumber/(1e+6);break;
        case "micrometer":$outputNumber = $inputNumber/1000;break;
        case "nanometer":$outputNumber = $inputNumber;break;
        case "mile":$outputNumber = $inputNumber/(1.609e+12);break;
        case "yard":$outputNumber = $inputNumber/(9.144e+8);break;
        case "nautical_mile":$outputNumber = $inputNumber/(1.852e+12);break;
        }

    break;

    case "mile":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber*160934;break;           
        case "meter": $outputNumber = $inputNumber*1609;break;          
        case "foot": $outputNumber = $inputNumber*5280;break;  
        case "inches": $outputNumber = $inputNumber*63360;break;
        case "kilometer":$outputNumber=$inputNumber*1.609;break;
        case "millimeter":$outputNumber = $inputNumber*(1.609e+6);break;
        case "micrometer":$outputNumber = $inputNumber*(1.609e+9);break;
        case "nanometer":$outputNumber = $inputNumber*(1.609e+12);break;
        case "mile":$outputNumber = $inputNumber;break;
        case "yard":$outputNumber = $inputNumber*1760;break;
        case "nautical_mile":$outputNumber = $inputNumber/1.151;break;
        }

    break;

    case "yard":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber*91.44;break;           
        case "meter": $outputNumber = $inputNumber/1.094;break;          
        case "foot": $outputNumber = $inputNumber*3;break;  
        case "inches": $outputNumber = $inputNumber*36;break;
        case "kilometer":$outputNumber=$inputNumber/1094;break;
        case "millimeter":$outputNumber = $inputNumber*914;break;
        case "micrometer":$outputNumber = $inputNumber*914400;break;
        case "nanometer":$outputNumber = $inputNumber*(9.144e+8);break;
        case "mile":$outputNumber = $inputNumber/1760;break;
        case "yard":$outputNumber = $inputNumber;break;
        case "nautical_mile":$outputNumber = $inputNumber/2025;break;
        }

    break;
    case "nautical_mile":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber*185200;break;           
        case "meter": $outputNumber = $inputNumber*1852;break;          
        case "foot": $outputNumber = $inputNumber*6076;break;  
        case "inches": $outputNumber = $inputNumber*72913;break;
        case "kilometer":$outputNumber=$inputNumber*1.852;break;
        case "millimeter":$outputNumber = $inputNumber*(1.852e+6);break;
        case "micrometer":$outputNumber = $inputNumber*(1.852e+9);break;
        case "nanometer":$outputNumber = $inputNumber*(1.852e+12);break;
        case "mile":$outputNumber = $inputNumber*1.151;break;
        case "yard":$outputNumber = $inputNumber*2025;break;
        case "nautical_mile":$outputNumber = $inputNumber;break;
        }

    break;

    case "foot":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber*30.48;break;           
        case "meter": $outputNumber = $inputNumber/3.281;break;          
        case "foot": $outputNumber = $inputNumber;break;  
        case "inches": $outputNumber = $inputNumber*12;break;
        case "kilometer":$outputNumber=$inputNumber/3281;break;
        case "millimeter":$outputNumber = $inputNumber*305;break;
        case "micrometer":$outputNumber = $inputNumber*304800;break;
        case "nanometer":$outputNumber = $inputNumber*(3.048e+8);break;
        case "mile":$outputNumber = $inputNumber/5280;break;
        case "yard":$outputNumber = $inputNumber/3;break;
        case "nautical_mile":$outputNumber = $inputNumber/6076;break;
        }

    
    break;

    case "inches":
    switch ($outputFormat){
        case "cm": $outputNumber = $inputNumber*2.54;break;           
        case "meter": $outputNumber = $inputNumber/39.37;break;          
        case "foot": $outputNumber = $inputNumber/12;break;  
        case "inches": $outputNumber = $inputNumber;break;
        case "kilometer":$outputNumber=$inputNumber/39370;break;
        case "millimeter":$outputNumber = $inputNumber*25.4;break;
        case "micrometer":$outputNumber = $inputNumber*25400;break;
        case "nanometer":$outputNumber = $inputNumber*(2.54e+7);break;
        case "mile":$outputNumber = $inputNumber/63360;break;
        case "yard":$outputNumber = $inputNumber/36;break;
        case "nautical_mile":$outputNumber = $inputNumber/72913;break;
        }

    break;  
                }
                echo $outputNumber;
            ?>
        </body>
    </html>