/*
=========================================
|                                       |
|           Scroll To Top               |
|                                       |
=========================================
*/
$('.scrollTop').click(function () {
    $("html, body").animate({ scrollTop: 0 });
});


$('.navbar .dropdown.notification-dropdown > .dropdown-menu, .navbar .dropdown.message-dropdown > .dropdown-menu ').click(function (e) {
    e.stopPropagation();
});

/*
=========================================
|                                       |
|       Multi-Check checkbox            |
|                                       |
=========================================
*/

function checkall(clickchk, relChkbox) {

    var checker = $('#' + clickchk);
    var multichk = $('.' + relChkbox);


    checker.click(function () {
        multichk.prop('checked', $(this).prop('checked'));
    });
}


/*
=========================================
|                                       |
|           MultiCheck                  |
|                                       |
=========================================
*/

/*
    This MultiCheck Function is recommanded for datatable
*/

function multiCheck(tb_var) {
    tb_var.on("change", ".chk-parent", function () {
        var e = $(this).closest("table").find("td:first-child .child-chk"), a = $(this).is(":checked");
        $(e).each(function () {
            a ? ($(this).prop("checked", !0), $(this).closest("tr").addClass("active")) : ($(this).prop("checked", !1), $(this).closest("tr").removeClass("active"))
        })
    }),
        tb_var.on("change", "tbody tr .new-control", function () {
            $(this).parents("tr").toggleClass("active")
        })
}

/*
=========================================
|                                       |
|           MultiCheck                  |
|                                       |
=========================================
*/

function checkall(clickchk, relChkbox) {

    var checker = $('#' + clickchk);
    var multichk = $('.' + relChkbox);


    checker.click(function () {
        multichk.prop('checked', $(this).prop('checked'));
    });
}

/*
=========================================
|                                       |
|               Tooltips                |
|                                       |
=========================================
*/

$('.bs-tooltip').tooltip();

/*
=========================================
|                                       |
|               Popovers                |
|                                       |
=========================================
*/

$('.bs-popover').popover();


/*
================================================
|                                              |
|               Rounded Tooltip                |
|                                              |
================================================
*/

$('.t-dot').tooltip({
    template: '<div class="tooltip status rounded-tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
})


/*
================================================
|            IE VERSION Dector                 |
================================================
*/

function GetIEVersion() {
    var sAgent = window.navigator.userAgent;
    var Idx = sAgent.indexOf("MSIE");

    // If IE, return version number.
    if (Idx > 0)
        return parseInt(sAgent.substring(Idx + 5, sAgent.indexOf(".", Idx)));

    // If IE 11 then look for Updated user agent string.
    else if (!!navigator.userAgent.match(/Trident\/7\./))
        return 11;

    else
        return 0; //It is not IE
}









//-----------------------------------------------------------------------//
//-----------------------------------------------------------------------//
//-----------------------------------------------------------------------//
//-----------------------------------------------------------------------//


$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('.table').on('init.dt', function () {


        var lang = $('meta[name="lang"]').attr('content');

        const title = {
            'en': 'Are you sure you want to delete this record?',
            'ar': "هل أنت متأكد أنك تريد حذف هذا السجل؟",
        };

        const text = {
            'en': 'If you delete this, it will be gone forever',
            'ar': "إذا حذفت هذا ، فسيختفي إلى الأبد",
        };

        const CancelBtn = {
            'en': 'Cancel',
            'ar': "الغاء",
        };

        const confirmBtn = {
            'en': 'Yes !',
            'ar': 'تاكيد',
        };

        const removed = {
            'en': 'Removed!',
            'ar': 'إزالة!',
        };

        const messageSuccess = {
            'en': 'Record Has Been Removed !',
            'ar': '! تم حذف السجل ',
        };

        const messageError = {
            'en': 'Record Removed Failed',
            'ar': 'فشل حذف السجل',
        };








        $('.show_confirm_two').click(function (event) {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var parent = $(this).parent();


            Swal.fire({
                title: title[lang],
                text: text[lang],
                icon: 'warning',
                padding: '3em',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: confirmBtn[lang],
                cancelButtonText: CancelBtn[lang],
            }).then((result) => {
                if (result.isConfirmed) {
                    let temp = `#${name}-${id}`;
                    $.ajax({
                        url: `/admin/${name}/destroy/${id}`,
                        type: 'DELETE',
                        data: { id: id }
                        , success: function (res) {

                            $(temp).remove();
                            Swal.fire(
                                removed[lang],
                                messageSuccess[lang],
                                'success'
                            )
                            parent.slideUp(300, function () {
                                parent.closest("tr").remove();
                            });


                        }, error: function (resp) {
                            Swal.fire(
                                removed[lang],
                                messageError[lang],
                                `error`,
                            )
                        }
                    });
                }
            });
        });

    })

})

//-----------------------------------------------------------------------//
//-----------------------------------------------------------------------//
//-----------------------------------------------------------------------//
//-----------------------------------------------------------------------//
