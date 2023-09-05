/*! jQuery Validation Plugin - v1.19.2 - 5/23/2020
 * https://jqueryvalidation.org/
 * Copyright (c) 2020 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Detta f&auml;lt &auml;r obligatoriskt.",remote:"Var snäll och åtgärda detta fält.",maxlength:a.validator.format("Du f&aring;r ange h&ouml;gst {0} tecken."),minlength:a.validator.format("Du m&aring;ste ange minst {0} tecken."),rangelength:a.validator.format("Ange minst {0} och max {1} tecken."),email:"Ange en korrekt e-postadress.",url:"Ange en korrekt URL.",date:"Ange ett korrekt datum.",dateISO:"Ange ett korrekt datum (&Aring;&Aring;&Aring;&Aring;-MM-DD).",number:"Ange ett korrekt nummer.",digits:"Ange endast siffror.",equalTo:"Ange samma v&auml;rde igen.",range:a.validator.format("Ange ett v&auml;rde mellan {0} och {1}."),max:a.validator.format("Ange ett v&auml;rde som &auml;r mindre eller lika med {0}."),min:a.validator.format("Ange ett v&auml;rde som &auml;r st&ouml;rre eller lika med {0}."),creditcard:"Ange ett korrekt kreditkortsnummer.",pattern:"Ogiltigt format."}),a});