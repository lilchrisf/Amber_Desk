    $(document).ready(function (){
    console.log('Ok')
    let alert_close_btn = $('#alert_close_btn'),
    alert_dialog  = $('#alert_dialog'),
    create_btn = $('#create_btn');


    alert_close_btn.on('click',function (){
    console.log('Ok')
    alert_dialog.slideToggle(500);
});
});
