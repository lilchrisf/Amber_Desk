$(document).ready(function () {
    let crt_class_open_btn = $('#crt_classroom_open_btn'),
        crt_class_close_btn = $('#crt_classroom_close_btn'),
        crt_class_modal = $('#crt_classroom_modal'),
        crt_class_form = $('#crt_classroom_form'),

        dashboard_add_classroom = $('#addClassroomDashBtn'),

        sidebar_join_class = $('#sideJoinClass'),
        sidebar_crt_class = $('#sideCrtClass'),

        join_class_open_btn = $('#join_classroom_open_btn'),
        join_class_close_btn = $('#join_classroom_close_btn'),
        join_class_modal = $('#join_classroom_modal'),

        classroom_password_input = $('#classroom_password_input'),
        password_generator_btn = $('#randomPassGenerator_btn')


    function uniqueID() {
        classroom_password_input[0].value = Date.now().toString(36) + Math.random().toString(36).substr(2);
    }

    password_generator_btn.on('click', function () {
        uniqueID()
    })


    dashboard_add_classroom.on('click', () => {
        crt_class_modal.fadeToggle()
    })

    sidebar_join_class.on('click', () => {
        join_class_modal.fadeToggle()
    })

    sidebar_crt_class.on('click', () => {
        crt_class_modal.fadeToggle()
    })


    crt_class_open_btn.on('click', function () {
        crt_class_modal.fadeToggle()
    });

    crt_class_close_btn.on('click', function () {
        crt_class_modal.fadeToggle()
    });

    join_class_open_btn.on('click', function () {
        join_class_modal.fadeToggle()
    });

    join_class_close_btn.on('click', function () {
        join_class_modal.fadeToggle()
    });

});
