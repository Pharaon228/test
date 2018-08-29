
$(document).ready(function () {
    getDepartmentsFromServer();
    getNavigationMenu();
    getNewsFromServer();
    getTopicsFromServer();
    getTasksFromServer();
   // getFormDataFromServer();
});

function getNavigationMenu() {
    var
        question = [{id : 1, name : 'quest'},
            {id : 2, name : 'process'}];
    buildQuestion(question);
}

function getDataFromServer(name, callback) {
    $.ajax({
        method: 'POST',
        url: 'backend/index.php',
        data: {action: 'get'+name},
        success: function (data) {
            console.log(data);
            callback(data);
        }
    });

}

function getDepartmentsFromServer() {

    getDataFromServer('Departments', buildDepartmentsLayout)

}

function getNewsFromServer() {

    getDataFromServer('News',buildNewsFeed)
}

function getTopicsFromServer() {

    getDataFromServer('Topics', buildTopics)

}

function getTasksFromServer() {

getDataFromServer('Tasks', buildTasks)

}

function sendRequestFormDataToServer(fields) {
    $.ajax({
        method: 'POST',
        url: 'backend/index.php',
        data: {action: 'submitRequest', data: fields},

        success: function (data) {
            console.log(data);
            alert(data);
        },
        error : function (jqXhr) {
alert('status code '+jqXhr.status);

        }
    });

}

function buildDepartmentsLayout(departments) {
    var departmentsContainer = $('#departments');
    departments.forEach(function (department) {
        var departmentNode = $('<button>', {
            class: 'department navigation-button',
            text: department.name,
            page: 'Department',
            department_id_click: department.id
        });
        departmentsContainer.append(departmentNode);

    });

    departmentsContainer.prepend($('<button>', {
        class: 'department navigation-button',
        text: 'News',
        page: 'News',
        department_id_click: 4
    }));
}

function buildQuestion(question){
    var Selecter = $('#navigation');
    question.forEach(function (q) {
        var questNode = $('<button>', {
            class: 'question',
            text: q.name

        });
        Selecter.append(questNode);
    });
}


function buildNewsFeed(newsFeed){
    var  newsContent= $('#newsFeed');
    newsFeed.forEach(function (news) {
        var newsNode = $('<div>', {
            class: 'newsPage navigation-button',
        });

        var newsPhoto = $('<img>', {
            class: 'newsImage',
            src: news.image
        });

        var textContent = $('<h3>', {
            class: 'contentStyle',
        });

        var newsHeader = $('<h3>', {
            class: 'newsHeader',
            text : news.caption
        });
        var newsText = $('<h1>', {
            class: 'newsText',
            text : news.text
        });

        newsNode.append(newsPhoto);
        newsNode.append(textContent);
        textContent.append(newsHeader);
        textContent.append(newsText);
        newsContent.append(newsNode);


    });

}



function buildTopics(topic) {
    var topicsContainer = $('#viewTopics');
    topic.forEach(function (topic) {
        var topicsNode = $('<button>', {
            class: 'topicClass',
            text: topic.Name,
            department_id : topic.departmentId,
            topic_id_click: topic.id
        });
        topicsContainer.append(topicsNode);

    });

}



function buildTasks(task) {
    var tasksContainer = $('#viewTasks');
    task.forEach(function (task) {
        var taskNode = $('<button>', {
            class: 'taskClass',
            text: task.Name,
            topic_id : task.topicId
        });
        tasksContainer.append(taskNode);

    });

}

function showPageContent(id) {
    $('.page').addClass('hidden');
    $(id).removeClass('hidden');
}

function getFormData(formId) {
   var fields = {};
    $(formId+' .form-input').each(function () {
       fields[$(this).attr('name')] = $(this).val();
   });
    console.log(fields);
    return fields;
}