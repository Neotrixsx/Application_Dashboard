function delinfo(paraminfo, dataname) {
    if (confirm("Want to delete " + dataname + " details ?")) {
        window.location = "?param=" + paraminfo;
    }
}

function reloadpage() {
    window.location.reload();
}


//----- How-do-I-block-inspect-element-on-my-website link: http://qr.ae/TU8zRm
//    $(document).bind("contextmenu",function(e) {
//         e.preventDefault();
//     });

//     $(document).keydown(function(e){
//         if(e.which === 123){
//         return false;
//         }
//     });


function jumppage(appid, appname) {
    //ajax call 
    $.ajax({
        type: 'GET',
        url: "../pages/includex/sess",
        data: {
            app_id: appid,
            app_name: appname
        },
        success: function (data) {
            window.location.href = 'applications/';
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Error Occured on create settion");
        }
    });
}

function jumpedituserpage(edituserid) {
    //ajax call 
    $.ajax({
        type: 'GET',
        url: "../includex/sess",
        data: {
            edituserid: edituserid
        },
        success: function (data) {
            window.location.href = 'user_edit';
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Error Occured on create edituserid session");
        }
    });
}

function jumpeditblogpage(editblogid) {    
    //ajax call 
    $.ajax({
        type: 'GET',
        url: "../includex/sess",
        data: {
            editblogid: editblogid
        },
        success: function (data) {
            window.location.href = 'blog_edit';
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Error Occured on create edituserid session");
        }
    });
}

//Update status to 0 not delete information
function delinfo(paraminfo, dataname) {
    if (confirm("Want to delete " + dataname + " details ?")) {
        window.location = "?param=" + paraminfo;
    }
}



$("#postimageForm").on('submit', (function (e) {
    e.preventDefault();
    $.ajax({
        url: "uploadimg",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType:'JSON',
        success: function(response){
            console.log(response.url);
            console.log(response.fullurl);
            console.log(response.message);
            $("#imageurl").val(response.fullurl);
            $("#targetLayer").html('<img class="image-preview" src="'+response.url+'" class="upload-preview" />');
        },
        error: function () {}
    });
}));

$("#publogoForm").on('submit', (function (e) {
    e.preventDefault();
    $.ajax({
        url: "uploadimg",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        dataType:'JSON',
        success: function(response){
            console.log(response.url);
            console.log(response.fullurl);
            console.log(response.message);
            $("#publogo").val(response.fullurl);
            $("#targetlogoLayer").html('<img class="image-preview" src="'+response.url+'" class="upload-preview" />');
        },
        error: function () {}
    });
}));