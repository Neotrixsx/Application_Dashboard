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


   function jumppage(appid) {
        localStorage['app_id'] = appid;
        window.location.href = 'applications/'; 
    }
