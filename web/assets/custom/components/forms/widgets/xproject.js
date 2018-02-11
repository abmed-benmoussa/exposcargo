    function copydat ()
    {
        var xcompanyname = document.getElementById("companyname").value;
        var xphonenumber = document.getElementById("phonenumber").value;
        var xcontactname = document.getElementById("contactname").value;
        var xemail = document.getElementById("email").value;
        var xcontactphonenumber = document.getElementById("contactphonenumber").value;

        var xprojecttype = "";

        xprojecttype = (document.getElementById("rcommercial").checked) ? '2' : '';
        xprojecttype = (document.getElementById("rcorporation").checked) ? '1' : '';
        xprojecttype = (document.getElementById("rpersonal").checked) ? '4' : '';
        xprojecttype = (document.getElementById("rretrieval").checked) ? '5' : '';
        xprojecttype = (document.getElementById("rwedding").checked) ? '6' : '';

        var xrcommercial = (document.getElementById("rcommercial").checked) ? 'COM' : '';
        var xrcorporation = (document.getElementById("rcorporation").checked) ? '' : '';
        var xrpersonal = (document.getElementById("rpersonal").checked) ? 'PER' : '';
        var xrretrieval = (document.getElementById("rretrieval").checked) ? 'RET' : '';
        var xrwedding = (document.getElementById("rwedding").checked) ? 'WED' : '';

        var xtmultiparticipant = (document.getElementById("tmultiparticipant").checked) ? 'MUL' : '';
        var xtconsult = (document.getElementById("tconsult").checked) ? '2' : '4';
        var xdeparture_country = document.getElementById("departure_country").value;
        var xdeparture_city = document.getElementById("departure_city").value;
        var xdeparture_postcode = document.getElementById("departure_postcode").value;
        var xdelivery_country = document.getElementById("delivery_country").value;
        var xdelivery_city = document.getElementById("delivery_city").value;
        var xdelivery_postcode = document.getElementById("delivery_postcode").value;
        var xdelivery_date = document.getElementById("delivery_date").value;

        document.getElementById("ycompanyname").value = xcompanyname;
        document.getElementById("yphonenumber").value = xphonenumber;
        document.getElementById("ycontactname").value = xcontactname;
        document.getElementById("yemail").value = xemail;
        document.getElementById("ycontactphonenumber").value = xcontactphonenumber;

        document.getElementById("yprojecttype").value = xprojecttype;

//        document.getElementById("yrcommercial").value = xrcommercial;
//        document.getElementById("yrcorporation").value = xrcorporation;
//        document.getElementById("yrpersonal").value = xrpersonal;
//        document.getElementById("yrretrieval").value = xrretrieval;
//        document.getElementById("yrwedding").value = xrwedding;
        document.getElementById("ytmultiparticipant").value = xtmultiparticipant;
        document.getElementById("ytconsult").value = xtconsult;
        document.getElementById("ydeparture_country").value = xdeparture_country;
        document.getElementById("ydeparture_city").value = xdeparture_city;
        document.getElementById("ydeparture_postcode").value = xdeparture_postcode;
        document.getElementById("ydelivery_country").value = xdelivery_country;
        document.getElementById("ydelivery_city").value = xdelivery_city;
        document.getElementById("ydelivery_postcode").value = xdelivery_postcode;
        document.getElementById("ydelivery_date").value = xdelivery_date;

        document.getElementById("projectcode").value = calculatecode(xcontactname, xcompanyname, xrcommercial + xrcorporation + xrpersonal + xrretrieval + xrwedding + xtmultiparticipant, xtconsult, xdelivery_country.substr(0, 3) , xdelivery_city, xdelivery_date);

    }


    function calculatecode(xcon, xcom, xtip, xtconsult, xcou, xcit, xfec)
    {
        var xc01 = xfec.substr(6, 2) + xfec.substr(0, 2) + ' ';
        var xc02 = xcon.substr(0, 1) + ' ' + xcon.split(' ')[1] + '-';
        var xc03 = xcom + '-';
        var xc04 = xtip + '-';
        var xc05 = xcou;
        if (xcou == 'MEX')
        {
            if (xcit == 'Cancún') xc05 = 'CUN';
            if (xcit == 'Puerto Vallarta') xc05 = 'PVR';
            if (xcit == 'San José del Cabo') xc05 = 'CBS';
        }

//select * from country where idisoalpha3 = 'MEX'
//select * from city where idcountry = 484 and fullname like 'Cab%'
//Canc[un   Puerto Vallarta    San Jos[e del Cabo

        if (xtconsult == '2')
        {
            return ('QRY' + xfec.substr(6, 2) + '00' + xc02 + xc03 + xc04 + xc05);
        }
        else
        {
            return (xc01 + xc02 + xc03 + xc04 + xc05);
        }

    }

    function chgcitysrc()
    {

        $(".typeahead").typeahead("destroy");
        $(".typeahead").typeahead({ source: result });
    }


