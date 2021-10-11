$(document).ready(function () {
    let announcementViewForm = $('#addAnnouncementView'),
        addAnnouncementBtn = $('#mkAnnouncementBtn'),
        addAnnouncementBtnControl = $('#addAnnouncementsBtnControl'),
        addAnnouncementCloseBtn = $('#mkAnnouncementCloseBtn'),
        userActivity = $('#userActivity')

    announcementViewForm.hide()
    addAnnouncementBtnControl.hide()

    function announcementViewToggle($toggle) {
        if ($toggle === true) {
            announcementViewForm.slideDown(1000)
            addAnnouncementBtnControl.slideDown(1200)
            userActivity.slideUp(500)
        } else if ($toggle === false) {
            announcementViewForm.slideUp(1000);
            addAnnouncementBtnControl.slideUp(1200);
            userActivity.slideDown(500)

        }

    }

    addAnnouncementBtn.on('click', function () {
        announcementViewToggle(true)
    });

    addAnnouncementCloseBtn.on('click',function (){
        announcementViewToggle(false)
    })

})
