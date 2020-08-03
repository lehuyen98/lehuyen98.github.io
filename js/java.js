let nameClass =document.getElementById('class')
let objectClass=['1', '2','3','4', '5','6', '7', '8','9','10','11','12']
let string=objectClass.map(item=>  {
    return '<div class="item col-sm-12 col-md-6 col-lg-4">'+
    '<div class="item1" >'+
    '<h4>Lớp '+item+ '</h4></div>'+
    '<div class="item2">'+
        '<a href="#">'+
            '<div class="title-subject">Toán lớp '+item+'</div>'+
            '<div class="title-intro">Toán lớp '+item+' từ cơ bản đến nâng cao</div>'+
        '</a>'+
    '</div>'+
    '<div class="item3">'+
        '<a href="#">'+
            '<div class="title-subject">Toán lớp '+item+'</div>'+
            '<div class="title-intro">Toán lớp '+item+' từ cơ bản đến nâng cao</div>'+
        '</a>'+
    '</div>'+
'</div>'

})
nameClass.innerHTML +=string.join('');
// video
let nameVideo =document.getElementById('video')
let objectVideo=[
        {
          name: "Toán lớp 1",
          teacher: "Nguyễn Hường",
          content: "Cử nhân ĐH sư phạm Hà Nội thạc sĩ toán học tại viện Hàn Lâm khoa học và công nghệ Việt Nam"
        },
        {
          name: "Toán 2",
          teacher: "Nguyễn Vân",
          content: "Cử nhân ĐH sư phạm Hà Nội"
        },
        {
          name: "Tiếng việt lớp 3",
          teacher: "Nguyễn Hòa",
          content: "Cử nhân ĐH sư phạm Thái Nguyên"
        },
        {
            name: "Toán 5",
            teacher: "Nguyễn Ánh",
            content: "Cử nhân ĐH sư phạm Hà Nội"
        },
]
let string1=objectVideo.map(item=>{
    return '<div class="col-sm-12 col-md-6 col-lg-4 ">'+
    '<div class="vd-icon">'+
        '<img src="image/video.jpg" alt="bai giang">'+
    '</div>'+
    '<div class="vd-title">'+
        '<h4>Video bài giảng '+item.name+'</h4>'+
        '<h5>GV:'+item.teacher+'</h5>'+
        '<p class="vd-text">'+item.content+'</p>'+
    '</div>'+
    '</div>'
})
nameVideo.innerHTML+=string1.join('');



