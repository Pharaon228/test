$('#departments').on('click', '.navigation-button', function () {
        var pageType = $(this).attr('page');
        pageType = pageType.charAt(0).toUpperCase() + pageType.slice(1);
        console.log(pageType);
        window['show'+pageType+'Page']($(this));
});

function showNewsPage(element){
    showPageContent('#newsFeed');
    var departmentIdClick = (element.attr('department_id_click'));
    console.log(departmentIdClick);
    $('.topicClass').hide();
    $('.topicClass[department_id="' + departmentIdClick + '"]').fadeIn();
}

function showDepartmentPage(element){
    showPageContent('#viewTopics');
    var departmentIdClick = (element.attr('department_id_click'));
    console.log(departmentIdClick);
    $('.topicClass').hide();
    $('.topicClass[department_id="' + departmentIdClick + '"]').fadeIn();
}

$('#viewTopics').on('click', '.topicClass', function () {

    showPageContent('#viewTasks');


    var topicIdClick = ($(this).attr('topic_id_click'));
    console.log(topicIdClick);


    $('.taskClass').hide();
    $('.taskClass[topic_id="' + topicIdClick + '"]').fadeIn();




});

$('#submit-request').on('submit', function (event) {
    event.preventDefault();
    var formData = getFormData('#'+$(this).attr('id'));
    sendRequestFormDataToServer(formData);
});