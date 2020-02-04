/**
 * Created by teamwork on 3/01/2017.
 *
 * */

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    var date = new Date();
    date.setDate(date.getDate());

    $( ".datepicker" ).datepicker({
        format: 'dd/mm//yyyy',
        autoclose: true,
        startDate: date
    });

    $( ".datepicker2" ).datepicker({
        format: 'dd/mm//yyyy',
        autoclose: true
    });
    $('.select2').select2();

    $('.defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            company: {
                message: 'The Company name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The Company name is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 2,
                        max: 30,
                        message: 'The Company name must be more than 2 and less than 30 characters long'
                    },
                }
            },

            category: {
                validators: {
                    notEmpty: {
                        message: 'Please choose a category for your company'
                    },
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The Address is required and can\'t be empty'
                    }
                }
            },
            country: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    },
                    stringLength: {

                        message: 'The Country name must be chose from list'
                    }
                }
            },

            phone: {
                validators: {
                    notEmpty: {
                        message: 'The phone is required and can\'t be empty'
                    },
                    regexp: {
                        regexp: /^[\/0-9]+$/
                    }

                }

            },

            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },

            zipCode: {
                validators: {
                    zipCode: {
                        message: 'The input is not a valid '
                    }
                }
            },

            phoneNumberUS: {
                validators: {
                    phone: {
                        message: 'The input is not a valid phone number'
                    },
                    stringLength: {
                        min: 7,
                        max: 15,
                        message: 'The Phone Number  must be more than 7 and less than 15 digits long'
                    },
                    regexp: {
                        regexp: /^[+/0-9]+$/
                    }

                }

            }

        }
    });
});
$('.jobs-slider').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 6,
    autoplaySpeed: 2000,
    autoplay: true,
    slidesToScroll: 1,

    responsive: [{
        breakpoint: 992,
        settings: {
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 768,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 3,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]

});


$('.brand-slider').slick({
    rows: 2,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 700,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                dots: false,
                arrows: false,
                slidesPerRow: 3,
                rows: 3,
                slidesToScroll: 1,
                slidesToShow: 1
            }
        },
        {
            breakpoint: 768,
            settings: {
                dots: false,
                arrows: false,
                slidesPerRow: 3,
                rows: 2,
                slidesToScroll: 1,
                slidesToShow: 1
            }
        },
        {
            breakpoint: 580,
            settings: {
                dots: false,
                arrows: false,
                rows: 1,
                slidesPerRow: 1,
                slidesToScroll: 1,
                slidesToShow: 1
            }
        }
    ]
});


$('.slide-user').slick({
    dots: true,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    autoplaySpeed: 1500,
    autoplay: false,
    slidesToScroll: 1,

    responsive: [{
        breakpoint: 992,
        settings: {
            arrows: false,
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 768,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1
        }
    }, {
        breakpoint: 480,
        settings: {
            dots: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
        }
    }]

});





/// Don't ever Touch it//




/// i think you don't understand//


