/*! jQuery Validation Plugin - v1.19.2 - 5/23/2020
 * https://jqueryvalidation.org/
 * Copyright (c) 2020 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Þessi reitur er nauðsynlegur.",remote:"Lagaðu þennan reit.",maxlength:a.validator.format("Sláðu inn mest {0} stafi."),minlength:a.validator.format("Sláðu inn minnst {0} stafi."),rangelength:a.validator.format("Sláðu inn minnst {0} og mest {1} stafi."),email:"Sláðu inn gilt netfang.",url:"Sláðu inn gilda vefslóð.",date:"Sláðu inn gilda dagsetningu.",number:"Sláðu inn tölu.",digits:"Sláðu inn tölustafi eingöngu.",equalTo:"Sláðu sama gildi inn aftur.",range:a.validator.format("Sláðu inn gildi milli {0} og {1}."),max:a.validator.format("Sláðu inn gildi sem er minna en eða jafnt og {0}."),min:a.validator.format("Sláðu inn gildi sem er stærra en eða jafnt og {0}."),creditcard:"Sláðu inn gilt greiðslukortanúmer."}),a});