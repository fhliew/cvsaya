

if (window.File && window.FileReader && window.FormData) {
    var $inputField = $('#file');

    $inputField.on('change', function (e) {
        var file = e.target.files[0];

        if (file) {
            if (/^image\//i.test(file.type)) {
                alert("ok");
                readFile(file);
            } else {
                alert('Not a valid image!');
            }
        }
    });
} else {
    alert("File upload is not supported!");
}


function readFile(file) {
    var reader = new FileReader();
    console.log("read file");
    reader.onloadend = function () {
        alert("read file");
        processFile(reader.result, file.type);
    }

    reader.onerror = function () {
        alert('There was an error reading the file!');
    }

    reader.readAsDataURL(file);
}

function processFile(dataURL, fileType) {
    var maxWidth = 800;
    var maxHeight = 800;

    var image = new Image();
    image.src = dataURL;

    image.onload = function () {
        var width = image.width;
        var height = image.height;
        var shouldResize = (width > maxWidth) || (height > maxHeight);

        if (!shouldResize) {
            sendFile(dataURL);
            return;
        }

        var newWidth;
        var newHeight;

        if (width > height) {
            newHeight = height * (maxWidth / width);
            newWidth = maxWidth;
        } else {
            newWidth = width * (maxHeight / height);
            newHeight = maxHeight;
        }

        var canvas = document.createElement('canvas');

        canvas.width = newWidth;
        canvas.height = newHeight;

        var context = canvas.getContext('2d');

        context.drawImage(this, 0, 0, newWidth, newHeight);

        dataURL = canvas.toDataURL(fileType);

        sendFile(dataURL);

    };

    image.onerror = function () {
        alert('There was an error processing your file!');
    };
}


function sendFile1(fileData) {
    var formData = new FormData();

    formData.append('imageData', fileData);

    $.ajax({
        type: 'POST',
        url: '/your/upload/url',
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
            if (data.success) {
                alert('Your file was successfully uploaded!');
                alert(fileData);
                $('#sdepan').append("<img src=\""+fileData+"\"alt=\"logo\" width=\"200\" height=\"200\" style=\"float:left; border-radius: 5px;  object-fit: scale_down;\"></img>");
            } else {
                alert('There was an error uploading your file!');
            }
        },
        error: function (data) {
            alert('There was an error uploading your file!');
        }
    });
}

function readfile(input,loc){
    let file = input.files[0];
    alert("file name: "+ file.name);
    let reader = new FileReader();
    
    let result = reader.readAsDataURL(file);
    reader.onload=function(){
        let result = reader.result;
        //alert("reader result: "+result+" type: "+file.type);
        //alert("type: "+file.type);

        processFile(result,file.type,loc);
    }
    console.log(reader.result);
}
function processFile(dataURL, fileType,loc) {
    var maxWidth = 400;
    var maxHeight = 400;

    var image = new Image();
    image.src = dataURL;

    image.onload = function () {
        var width = image.width;
        var height = image.height;
        var shouldResize = (width > maxWidth) || (height > maxHeight);

        if (!shouldResize) {
            $(loc).empty();
            $(loc).append("<img src=\""+dataURL+"\"alt=\"logo\" width=\"200\" height=\"200\" style=\"float:left; border-radius: 5px;  object-fit: scale_down;\"></img>");
            return;
        }

        var newWidth;
        var newHeight;

        if (width > height) {
            newHeight = height * (maxWidth / width);
            newWidth = maxWidth;
        } else {
            newWidth = width * (maxHeight / height);
            newHeight = maxHeight;
        }

        var canvas = document.createElement('canvas');

        canvas.width = newWidth;
        canvas.height = newHeight;

        var context = canvas.getContext('2d');

        context.drawImage(this, 0, 0, newWidth, newHeight);

        dataURL = canvas.toDataURL(fileType);

        $(loc).empty();
        $(loc).append("<img src=\""+dataURL+"\"alt=\"logo\" width=\"200\" height=\"200\" style=\"float:left; border-radius: 5px;  object-fit: scale_down;\"></img>");
    };

    image.onerror = function () {
        alert('There was an error processing your file!');
    };
}
