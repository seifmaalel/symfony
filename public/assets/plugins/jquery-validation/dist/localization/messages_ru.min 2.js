/*! jQuery Validation Plugin - v1.19.2 - 5/23/2020
 * https://jqueryvalidation.org/
 * Copyright (c) 2020 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Это поле необходимо заполнить.",remote:"Пожалуйста, введите правильное значение.",email:"Пожалуйста, введите корректный адрес электронной почты.",url:"Пожалуйста, введите корректный URL.",date:"Пожалуйста, введите корректную дату.",dateISO:"Пожалуйста, введите корректную дату в формате ISO.",number:"Пожалуйста, введите число.",digits:"Пожалуйста, вводите только цифры.",creditcard:"Пожалуйста, введите правильный номер кредитной карты.",equalTo:"Пожалуйста, введите такое же значение ещё раз.",extension:"Пожалуйста, выберите файл с правильным расширением.",maxlength:a.validator.format("Пожалуйста, введите не больше {0} символов."),minlength:a.validator.format("Пожалуйста, введите не меньше {0} символов."),rangelength:a.validator.format("Пожалуйста, введите значение длиной от {0} до {1} символов."),range:a.validator.format("Пожалуйста, введите число от {0} до {1}."),max:a.validator.format("Пожалуйста, введите число, меньшее или равное {0}."),min:a.validator.format("Пожалуйста, введите число, большее или равное {0}.")}),a});