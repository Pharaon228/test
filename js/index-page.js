
$(document).ready(function () {
    getDepartmentsFromServer();
    getNavigationMenu();
    getNewsFromServer();
});


function getDepartmentsFromServer() {
    $.ajax({
        method: 'POST',
        url: 'backend/index.php',
        data: {action: 'getDepartments'},
        success: function (data) {
            console.log(data);
            buildDepartmentsLayout(data);
        }
    });
}

function getNewsFromServer() {
    $.ajax({
        method: 'POST',
        url: 'backend/index.php',
        data: {action: 'getNews'},
        success: function (data) {
            console.log(data);
            buildNewsFeed(data);
        }
    });
}
function getNavigationMenu() {
   var
       question = [{id : 1, name : 'quest'},
       {id : 2, name : 'process'}];
    buildQuestion(question);
}

function buildDepartmentsLayout(departments) {
    var departmentsContainer = $('#departments');
    departments.forEach(function (department) {
        var departmentNode = $('<button>', {
            class: 'department',
            text: department.name,
            department_id: department.id
        });
        departmentsContainer.append(departmentNode);
    });
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
            class: 'newsPage',
        });

        var newsPhoto = $('<img>', {
            class: 'newsImage',
            src: news.image
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
        newsNode.append(newsHeader);
        newsNode.append(newsText);
        newsContent.append(newsNode);
    });

}

function getTopicsFromServer() {

    buildTopics(topic);

}

function buildTopick(topic) {
    var TopickContent = $('#topic')

}

