

var college_and_department;

$.getJSON( "metadata/college_and_department.json", function( data ) {
    college_and_department = data;

for (el in college_and_department['college']){
    console.log(el);
    $('#college-menu').append("<div class='item'>" + el + "</div>");
}
});

$("input[name='college']").change(function(){
    var picked = $(this).attr('value');
    var department_list = college_and_department['college'][picked]['department'];
    $("#department-menu").empty();
    $("#department-text").empty();
department_list.forEach(function(el, i) {
    $("#department-menu").append("<div class='item'>" + el + "</div>");
});
});

$("#back").click(function() {
    history.go(-1);
});

$(".close.icon").click(function() {
    $(this).parent().transition('scale out');
});

$(document)
.ready(function(){
    $('.ui.dropdown')
.dropdown()
;
$('.ui.menu .dropdown')
.dropdown({
    on: 'hover'
})
;
$('.demo .ui.checkbox')
.checkbox()
;
})
;