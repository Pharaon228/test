$('#departments').on('click', '.department', function () {
    var departmentId = ($(this).attr('department_id'));
    console.log(departmentId);
    $('.newsPage').css('display', 'none');

});