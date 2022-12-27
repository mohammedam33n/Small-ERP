
$(document).ready(function () {



    $('.table').on('init.dt', function () {
        $('.show_course_details').click(function (event) {
            var id = $(this).data('id');
            getDetailsCourse(id)
        })




        function getDetailsCourse(id) {
            $.get(`/admin/course/${id}`, function (data) {

                $('#category').val(data.category)
                $('#price').val(data.price)
                $('#start_date').val(data.start_date)
                $('#location').val(data.location)
                $('#title_ar').val(data.title['ar'])
                $('#title_en').val(data.title['en'])
                $('#body_ar').val(data.body['ar'])
                $('#body_en').val(data.body['en'])
                $("#image_course").html(`<img src="/${data.image}" width="300px" alt="${data.category}">`)


                $('#course-modal').modal('show')
            })
        }

    })


})
